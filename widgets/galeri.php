 <!-- Post Block Wrapper Start -->
 <?php if ($this->uri->segment(2) != '') { ?>
 <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head sports-head">
                            
                            <!-- Title -->
                            <h4 class="title"><a href="<?= site_url("first/gallery"); ?>">Galeri Foto</a></h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <!-- Sidebar Post Slider Start -->
                            <div class="two-row-post-carousel post-block-carousel sports-post-carousel">

            <?php foreach ($w_gal As $data): ?>
				<?php if (is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])): ?>
                                <!-- Post Start -->
								
                               

				<div class="col-lg-6 col-md-6 gal">
                                <!-- Image -->
                               <a href='<?= site_url("first/sub_gallery/$data[id]"); ?>' title="<?= "Album : $data[nama]" ?>">
						<img   src="<?= AmbilGaleri($data['gambar'],'kecil')?>"  alt="<?= "Album : $data[nama]" ?>">
					</a>
						</div>		
                        
                              

                             		<?php endif; ?>
			<?php endforeach; ?>

                            </div><!-- Sidebar Post Slider End -->
                        
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
</div>



<?php } ?>




