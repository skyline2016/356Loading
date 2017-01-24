<head>
	<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="<?php echo base_url()?>js/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/sweetalert.css">
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
