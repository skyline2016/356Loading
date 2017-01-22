
<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<style>
.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
  background: #70dbdb;
  color:#fff
}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
  background: #70dbdb;
  color:#fff
}
.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
  background: #70dbdb;
  color:#fff
}
</style>
<div class="container-fluid">
	<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <div class="col-md-6 center-block">
      <br>
      <p class="text-center"><img src="<?php echo base_url() . 'images/portfolio/'.$item_name.'.jpg'?>" class="image-responsive"/></p>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <h1>Macbook sticker design <?php echo $item_name?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p>
          <span class="label label-primary">Creative</span>
          <span class="monospaced">No. 00<?php echo $item_name?></span>
        </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="description">
           Sticker for Macbook user
           Has a 13" and 15" inch size.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
         <span class="sr-only">Four out of Five Stars</span>
         <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
         <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
         <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
         <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
         <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
         <span class="label label-success">61</span>
        </div>
        <div class="col-md-3">
         <span class="monospaced">Write a Review</span>
        </div>
      </div>
      <div class="row">
       <div class="col-md-12 bottom-rule">
        <h2 class="product-price">$70.00</h2>
       </div>
      </div><!-- end row -->
      <hr>
      <form id="cart_item-form" action="/shopping/cart" method="POST">
      <input type="hidden" name="item_name" value="<?php echo $item_name?>">
      <div class="row">
       <div class="col-md-3 text-center">
         <div class="input-group number-spinner">
                   <span class="input-group-btn">
                       <button type="button" class="btn btn-default btn-info"  data-dir="minus">
                         <span class="glyphicon glyphicon-minus"></span>
                       </button>
                   </span>
                   <input type="text" name="quantity" class="form-control input-number text-center" value="1">
                   <span class="input-group-btn">
                       <button type="button" class="btn btn-default btn-info" data-dir="plus">
                           <span class="glyphicon glyphicon-plus"></span>
                       </button>
                   </span>
               </div>
       </div>
       <div class="col-md-4">
         <div class="col-md-12 text-center">
          <p>In Stock</p>
         </div>
       </div>
        <button id="submit" type="submit" class="btn btn-brand btn-full-width">
         Add to Cart
        </button>
      </div><!-- end row -->

      <div class="row">
       <div class="col-md-4 col-md-offset-1 text-center">
       </div>
      </div><!-- end row -->
      <br>
      <!-- Multiple Radios (inline) -->
      <div class="row">
        <div class="form-group">
          <label class="col-md-3 text-center control-label" for="radios">Device size</label>
          <div class="col-md-4 col-md-offset-1">
            <label class="radio-inline" for="radios-0">
              <input type="radio" name="size" id="size-13" value="13" checked="checked">
              13"
            </label>
            <label class="radio-inline" for="radios-1">
              <input type="radio" name="size" id="size-15" value="15">
              15"
            </label>
          </div>
        </div>
      </div>
    </form>
      <hr>
      <div class="row">
       <div class="col-md-12 top-10">
        <p>To order by telephone, <a href="tel:12345678">please call 1234 5678</a></p>
       </div>
      </div><!-- end row -->
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
       <li role="presentation" class="active">
        <a href="#item-description"
         aria-controls="description"
         role="tab"
         data-toggle="tab"
        >Description</a>
       </li>
       <li role="presentation">
        <a href="#item-features"
         aria-controls="features"
         role="tab"
         data-toggle="tab"
        >Features</a>
       </li>
       <li role="presentation">
        <a href="#item-notes"
         aria-controls="notes"
         role="tab"
         data-toggle="tab"
         >Notes</a>
       </li>
       <li role="presentation">
        <a href="#item-reviews"
         aria-controls="reviews"
         role="tab"
         data-toggle="tab"
        >Reviews</a>
       </li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="item-description">
        <p>
         This page is for demo purpose only
        </p>
       </div>
       <div role="tabpanel" class="tab-pane" id="item-features">
         <p>
          This sticker is for macbook
         </p>
       </div>
       <div role="tabpanel" class="tab-pane" id="item-notes">
          Remember to clean your macbook before use
       </div>
       <div role="tabpanel" class="tab-pane" id="item-reviews">
         <div class="row">
          <div class="col-md-12">
           <span class="sr-only">Four out of Five Stars</span>
           <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
           <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
           <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
           <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
           <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
          </div>
        </div>
         <div class="row">
          <div class="col-md-12">
             <a class="btn btn-default btn-circle btn-lg">U</a> User_01 | Sep 21,2016
          </div>
         </div>
         <div class="col-md-12">
           <p>
            Nice design!
           </p>
         </div>
         <br>
       </div>
      </div>
    </div>
  </div>
  <div class="col-md-2">
  </div>
	</div>
</div>
<script>
$(document).on('click', '.number-spinner button', function () {
	var btn = $(this),
		oldValue = btn.closest('.number-spinner').find('input').val().trim(),
		newVal = 0;

	if (btn.attr('data-dir') == 'plus') {
    if(parseInt(oldValue)<10)
		  newVal = parseInt(oldValue) + 1;
    else
      newVal = parseInt(oldValue);
	} else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		} else {
			newVal = 1;
		}
	}
	btn.closest('.number-spinner').find('input').val(newVal);
});
$(function(){
$('#cart_item-form').on('submit', function(e){
     e.preventDefault();
     $.ajax({
         url: "/shopping/cart/add",
         type: "POST",
         data: $("#cart_item-form").serialize(),
         success: function(data){
          alert("success");
         }
     });
    });
});
</script>
