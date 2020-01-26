<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view($folder_themes .'/commons/meta') ?>
	<?php $this->load->view($folder_themes .'/commons/source_css') ?>
	<?php $this->load->view($folder_themes .'/commons/source_js') ?>
    <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/datatables/jquery.dataTables.css") ?>">
	<script src="<?= base_url("$this->theme_folder/$this->theme/assets/datatables/jquery.dataTables.min.js") ?>"></script>
	<script src="<?= base_url("$this->theme_folder/$this->theme/assets/datatables/dataTables.bootstrap.min.js") ?>"></script>
                    <script type="text/javascript">
                      var BASE_URL = "<?= base_url(); ?>";
                    </script>
                    
</head>
<body>
<!--
  <div class="preloader">
      <div class="loading">
        <img src="<?= base_url("$this->theme_folder/$this->theme/assets/load.gif") ?>">
    
      </div>
    </div>
	-->
	<div id="main-wrapper">

			<?php $this->load->view($folder_themes .'/commons/header') ?>
			<?php $this->load->view($folder_themes .'/commons/menu') ?>
			<?php $this->load->view($folder_themes .'/partials/statistik/halaman_statis') ?>
			<?php $this->load->view($folder_themes .'/commons/footer') ?>
  
	<?php $this->load->view($folder_themes .'/commons/source_js2') ?>
	</div>
</body>
</html>