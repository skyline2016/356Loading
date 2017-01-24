<?php
foreach ($css_files as $css) {
  echo("<link href=\"".$css."\" rel=\"stylesheet\">");
}
?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mousescroll.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>

<div class="container">
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
      <li><a href="#profile" data-toggle="tab">Change Info</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form id="tab">
		  <ul>
            <li><label>Username</label><br>
            <input type="text" value="jsmith" class="input-xlarge"></li><br>
            <li><label>First Name : </label>
            <input type="text" value="john" class="input-xlarge">
            <label>Last Name : </label>
            <input type="text" value="smith" class="input-xlarge"></li><br>
            <li><label>Email : </label>
            <input type="text" value="jsmith@ex.com" class="input-xlarge"></li><br>
            <li><label>Address : </label>
            <textarea value="" rows="3" class="input-xlarge"></textarea>
			<label>Zip Code : </label>
			<input type="text" value="333333" class="input-xlarge"></li><br>
        </form>
      </div>

      <div class="tab-pane fade" id="profile">
    	<form id="tab2">
				  <ul>
            <li><label>Username</label><br>
            <input type="text" value="" class="input-xlarge"></li><br>
            <li><label>First Name : </label>
            <input type="text" value="" class="input-xlarge">
            <label>Last Name : </label>
            <input type="text" value="" class="input-xlarge"></li><br>
            <li><label>Email : </label>
            <input type="text" value="" class="input-xlarge"></li><br>
            <li><label>Address : </label>
            <textarea value="" rows="3" class="input-xlarge"></textarea>
			<label>Zip Code : </label>
			<input type="text" value="" class="input-xlarge"></li><br>
            <li><label>Time Zone : </label>
            <select name="DropDownTimezone" id="DropDownTimezone" class="input-xlarge">
              <option value="-12.0">(GMT -12:00) Eniwetok, Kwajalein</option>
              <option value="-11.0">(GMT -11:00) Midway Island, Samoa</option>
              <option value="-10.0">(GMT -10:00) Hawaii</option>
              <option value="-9.0">(GMT -9:00) Alaska</option>
              <option selected="selected" value="-8.0">(GMT -8:00) Pacific Time (US & Canada)</option>
              <option value="-7.0">(GMT -7:00) Mountain Time (US & Canada)</option>
              <option value="-6.0">(GMT -6:00) Central Time (US & Canada), Mexico City</option>
              <option value="-5.0">(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima</option>
              <option value="-4.0">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
              <option value="-3.5">(GMT -3:30) Newfoundland</option>
              <option value="-3.0">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
              <option value="-2.0">(GMT -2:00) Mid-Atlantic</option>
              <option value="-1.0">(GMT -1:00 hour) Azores, Cape Verde Islands</option>
              <option value="0.0">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
              <option value="1.0">(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
              <option value="2.0">(GMT +2:00) Kaliningrad, South Africa</option>
              <option value="3.0">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
              <option value="3.5">(GMT +3:30) Tehran</option>
              <option value="4.0">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
              <option value="4.5">(GMT +4:30) Kabul</option>
              <option value="5.0">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
              <option value="5.5">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
              <option value="5.75">(GMT +5:45) Kathmandu</option>
              <option value="6.0">(GMT +6:00) Almaty, Dhaka, Colombo</option>
              <option value="7.0">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
              <option value="8.0">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
              <option value="9.0">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
              <option value="9.5">(GMT +9:30) Adelaide, Darwin</option>
              <option value="10.0">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
              <option value="11.0">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
              <option value="12.0">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
            </select></li></ul>
			<div>
        	    <button class="btn btn-primary">Save</button>
        	</div>
        	<label>New Password</label><br>
        	<input type="password" class="input-xlarge"><br>
        	<div>
        	    <button class="btn btn-primary">Update</button>
        	</div>
    	</form>
      </div>

  </div>
</div>
</div>
