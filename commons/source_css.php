<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,600,700" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/bootstrap.min.css") ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/font-awesome.min.css") ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/plugins.css") ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/rypp.css") ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/style.css") ?>">
 <link rel="stylesheet" href="<?= base_url()?>assets/css/leaflet.css" />
<?php if (is_file("desa/css/$this->theme/desa-web.css")): ?>
	 <!-- Extra CSS untuk tema cosmos. Timpa aturan css di berkas ini. -->
	<link rel="stylesheet" href="<?php echo base_url("desa/css/$this->theme/desa-web.css"); ?>">
<?php endif; ?>