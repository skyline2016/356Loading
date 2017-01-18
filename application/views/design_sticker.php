<head>
<style>
@media (min-width:768px) {
	.row.equal-heights {
	    width: 100%;
	    margin: 0 auto;
	    height: 768px;
	    display: table;
	    /* unless you have content that keeps this open */
	}
	.row.equal-heights [class*="col-"] {
	    height: 100%;
	    float: none;
	    display: table-cell;
	}
}

</style>
</head>
<body>
<div class="container-fluid">
   <div class="row equal-heights">
      <div class="col-sm-10">
        <iframe src="<?php echo base_url() .'/editor"'?>" style="width:100%;height:100%"></iframe>
      </div>
   </div>
</div>
</body>
