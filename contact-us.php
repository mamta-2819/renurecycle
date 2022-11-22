<?php
include "include/header.php";
?>

<div class="environment-subheader">
<span class="subheader-transparent"></span>
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>Contact Us</h1>
</div>
<div class="col-md-12">
<ul class="environment-breadcrumb">
<li><a href="index.php">Home</a></li>
<li>contact Us</li>
</ul>
</div>
</div>
</div>
</div>


<div class="environment-main-content">

<div class="environment-main-section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="environment-title-wrap">
<div class="environment-fancy-title"><h2>OUR <span> MAP</span></h2></div>
<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis in eros etiaculis. Vivamus volutpat hendrerit elementum.</p> -->
</div>
<div class="environment-location-map"><div id="map"></div></div>
</div>
<div class="col-md-12">
<div class="environment-title-wrap">
<div class="environment-fancy-title"><h2>Contact <span> Us</span></h2></div>
<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis in eros etiaculis. Vivamus volutpat hendrerit elementum.</p> -->
</div>
</div>
<div class="col-md-4">
<div class="environment-contactus-info">
<ul class="row">
<li class="col-md-12">
<span><i class="fa fa-phone"></i></span>
<div class="environment-contactus-text">
<h5>Call Us At</h5>
<p>+91 9311687858</p>
</div>
</li>
<li class="col-md-12">
<span><i class="fa fa-envelope"></i></span>
<div class="environment-contactus-text">
<h5>Mail Us At</h5>
<p><a href="">info@renurecyclinggroup.com</a></p>
 <!-- <p><a href="404.html"><span class="__cf_email__" data-cfemail="9cf9fff3dcfdfeffb2fff3f1">[email&#160;protected]</span></a></p> -->
</div>
</li>
<li class="col-md-12">
<span><i class="fa fa-map-marker"></i></span>
<div class="environment-contactus-text">
<h5>Our Location</h5>
<p>Jamshedpur, India</p>
</div>
</li>
</ul>
</div>
</div>
<div class="col-md-8">
<div class="environment-contact-form">
<form method="post" class="myform" action="">
<ul>
<li>
<input value="Name*" onblur="if(this.value == '') { this.value ='Name*'; }" onfocus="if(this.value =='Name*') { this.value = ''; }" type="text" name="name">
<i class="fa fa-user"></i>
</li>
<li>
<input value="Email*" onblur="if(this.value == '') { this.value ='Email*'; }" onfocus="if(this.value =='Email*') { this.value = ''; }" type="text" name="email">
<i class="fa fa-envelope"></i>
</li>
<li class="full-input">
<textarea name="message" placeholder="Message*"></textarea>
<i class="fa fa-comment"></i>
</li>
<li class="full-input">
<label><input value="Send" name="submit" type="submit"></label>
<span class="output_message"></span>
</li>
</ul>
</form>
</div>
</div>
</div>
</div>
</div>


<?php
include "include/footer.php";
?>