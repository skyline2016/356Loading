openFile = function (url, first) {
	var img = new Image();

	img.onload = function () {
		var n = (first ? 0: app.layers.length);
		if (first) app.layers = [];
		app.layers[n] = new Bitmap(img);
		app.layers[n].x = 0;
		app.layers[n].y = 0;
		app.activateLayer(n);
	}
	img.src = url;

	this.undoBuffer = [];
	this.redoBuffer = [];
}

openURL = function (self, url) {
	$(self).attr('disabled', true);
	openFile(url, !importFile);
	hideDialog('#dialog-openurl');
}

saveFile = function () {
	var img_link=app.stage.toDataURL();

	var formdata = new FormData();
	formdata.append("img", app.stage.toDataURL());

	$.ajax({
		url : window.location.href+"/file_handler",
		type: "POST",
		data : formdata,
		contentType: false,
		cache: false,
		processData:false,
}).done(function(data){ //
swal({
  title: "Success!",
  text: "Your design has been added to cart.",
  imageUrl: img_link
});
});
}

printFile = function () {
	window.print()
}

app.callbacks.openFile = function (e) {
	var file = e.target.files[0],
		self = this;

	if (!file.type.match('image.*')) return false;

	var reader = new FileReader();
	reader.onload = function(e) {
		openFile(e.target.result, true);
	};

	reader.readAsDataURL(file);
};

app.callbacks.openURL = function (e) {
	switch (e.type) {
		case "click":
			openURL($('#dialog-openurl input'), $('#dialog-openurl input').val());
			break;
		case "keydown":
			if (e.keyCode == 13) openURL(this, $(this).val());
			break;
	}
}

app.callbacks.ipad_pro_9 = function (e) {
	openFile("/img/editor/compare_ipadpro_9_silver_large_2x.png", !importFile);
}

app.callbacks.ipad_pro_12 = function (e) {
	openFile("/img/editor/compare_ipadpro_silver_large_2x.png", !importFile);
}

app.callbacks.iphone_7_plus = function (e) {
	openFile("/img/editor/compare_iphone7_plus_silver_large_2x.jpg", !importFile);
}

app.callbacks.iphone_7 = function (e) {
	openFile("/img/editor/compare_iphone7_silver_large_2x.jpg", !importFile);
}

app.callbacks.ipad_mini = function (e) {
	openFile("/img/editor/compare_mini4_silver_large_2x.png", !importFile);
}

app.callbacks.macbook = function (e) {
	openFile("/img/editor/macbookair-select-box-201504.jpg", !importFile);
}

app.callbacks.importFile = function (e) {
	console.log("test");
	for (var i = 0, file; file = e.target.files[i]; i++) {
		if (!file.type.match('image.*')) continue;

		var reader = new FileReader();
		reader.onload = function(e) {
			openFile(e.target.result, false);
		};

		reader.readAsDataURL(file);
	}
};

app.callbacks.saveFile = function () {
	saveFile();
}

app.callbacks.printFile = function () {
	printFile();
}
