<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/vendor/jquery-1.12.0.min.js") ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/popper.min.js") ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/bootstrap.min.js") ?>"></script>
	<script src="<?= base_url()?>assets/js/leaflet.js"></script>
		<script src="<?= base_url()?>assets/js/leaflet-providers.js"></script>


<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!--
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js# xfbml=1&version=v3.2&appId=5555555555555&autoLog AppEvents=1"></script>-->