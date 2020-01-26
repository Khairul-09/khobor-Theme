						
<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view($folder_themes .'/commons/meta') ?>
	<?php $this->load->view($folder_themes .'/commons/source_css') ?>
	<?php $this->load->view($folder_themes .'/commons/source_js') ?>
</head>
<body>
  <div class="preloader">
      <div class="loading">
        <img src="<?= base_url("$this->theme_folder/$this->theme/assets/load.gif") ?>">
    
      </div>
    </div>
	<div id="main-wrapper">
    <?php $this->load->view($folder_themes .'/commons/header') ?>
	<?php $this->load->view($folder_themes .'/commons/menu') ?>

	<?php $this->load->view($folder_themes .'/partials/sub_gallery') ?>
							
		<?php $this->load->view($folder_themes . '/commons/footer') ?>
	<?php $this->load->view($folder_themes .'/commons/source_js2') ?>
	</div>
</body>
</html>
