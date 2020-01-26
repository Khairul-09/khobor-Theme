	<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
	    <!-- Instagram Section Start -->
	<?php if($w_gal) : ?>	
    <div class="instagram-section section">
        <div class="container-fluid">
            <div class="row">
                
                <!-- Full Width Instagram Carousel Start -->
                <div class="fullwidth-instagram-carousel instagram-carousel col pl-0 pr-0">
				
                    <?php foreach($w_gal as $data) : ?>
						<?php if(is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])) : ?>
							<?php $link = site_url('first/sub_gallery/'.$data['id']) ?>
							<div class="home_gal">
							<a href="<?= $link ?>" class="instagram-item">
								<img src="<?= AmbilGaleri($data['gambar'],'sedang') ?>" alt="<?= $data['nama'] ?>" class="img-fluid" title="<?= $data['nama'] ?>">
							</a>
								</div>
						<?php endif ?>
					<?php endforeach ?>
				
                    
                    
                </div><!-- Full Width Instagram Carousel End -->
                
            </div>
        </div>
    </div><!-- Instagram Section End -->
<?php endif ?>

	
