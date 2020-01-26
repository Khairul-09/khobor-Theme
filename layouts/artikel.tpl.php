<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view($folder_themes . '/commons/meta') ?>
	<?php $this->load->view($folder_themes . '/commons/source_css') ?>
		<?php $this->load->view($folder_themes . '/commons/source_js') ?>
	
</head>
<body>
  <div class="preloader">
      <div class="loading">
        <img src="<?= base_url("$this->theme_folder/$this->theme/assets/load.gif") ?>">
    
      </div>
    </div>
<div id="main-wrapper">
	<?php if($single_artikel['id']) : ?>
		<?php $this->load->view($folder_themes . '/partials/artikel') ?>
		<?php else : ?>
			<?php $this->load->view($folder_themes . '/commons/404') ?>
	<?php endif ?>
	<?php $this->load->view($folder_themes . '/commons/source_js2') ?>
	</div>
</body>
</html>