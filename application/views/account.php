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
    <div id="account-tab" class="tab-content">
      <div class="tab-pane active in" id="home">
        <div class="panel panel-info">
                        <div class="panel-heading"><span><i class="glyphicon glyphicon-user"></i></span> User Profile</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12"><strong>Username:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="username" value="jsmith" disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                    <strong>First Name:</strong>
                                    <input type="text" name="first_name" class="form-control" value="john" disabled/>
                                </div>
                                <div class="span1"></div>
                                <div class="col-md-6 col-xs-12">
                                    <strong>Last Name:</strong>
                                    <input type="text" name="last_name" class="form-control" value="smith" disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="email" class="form-control" value="jsmith@ex.com" disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Address:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" value="" disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Zip Code:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="zip-code" class="form-control" value="333333" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
      </div>

      <div class="tab-pane fade" id="profile">
        <div class="panel panel-info">
                        <div class="panel-heading"><span><i class="glyphicon glyphicon-user"></i></span> User Profile</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12"><strong>Username:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="username" value="jsmith"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                    <strong>First Name:</strong>
                                    <input type="text" name="first_name" class="form-control" value="john"/>
                                </div>
                                <div class="span1"></div>
                                <div class="col-md-6 col-xs-12">
                                    <strong>Last Name:</strong>
                                    <input type="text" name="last_name" class="form-control" value="smith"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="email" class="form-control" value="jsmith@ex.com"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Address:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Zip Code:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="zip-code" class="form-control" value="333333"/>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12"><strong>Time Zone:</strong></div>
                              <div class="col-md-12">
                              <select class="form-control" id="time-zone">
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
                              </select>
                              </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>New password:</strong></div>
                                <div class="col-md-12">
                                    <input type="password" name="password" class="form-control" value=""/>
                                </div>
                            </div>
                            <div class="col-md-12">
                              <br>
                            <button class="btn btn-primary" onclick="update_info()" style="float: right;">Update</button>
                            </div>
                        </div>
                    </div>
      </div>

  </div>
</div>
</div>
<script type="text/javascript">
function update_info() {
  swal({
  title: "Success!",
  text: "Your personal information has been updated!",
  type: "success",
})
setTimeout(function(){
location.reload();
}, 1500);
}
</script>
