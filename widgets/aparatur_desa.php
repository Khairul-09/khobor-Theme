 <!-- Post Block Wrapper Start -->
 	<?php if ($this->uri->segment(2) != '') { ?>
 <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head sports-head">
                            
                            <!-- Title -->
                            <h4 class="title">Aparatur <?= ucwords($this->setting->sebutan_desa)?></h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel sports-post-carousel">

                                       <?php foreach($aparatur_desa as $data) : ?>
		  	<?php if(AmbilFoto($data['foto'],"besar") AND is_file(LOKASI_USER_PICT.$data['foto'])) : ?>
                                <!-- Post Start -->
                                <div class="post sports-post">
                                    <div class="post-wrap">

					<div class="ap_pekonML">
                                <!-- Image --><center>
                                <a class=" img_pekonML image-popup"  title="<?= $data['nama'] ?> (<?= $data['jabatan'] ?>)" href="<?php echo AmbilFoto($data['foto'],"besar") ?>"><img src="<?php echo AmbilFoto($data['foto'],"besar") ?>"  ></a>
								<div class="nm_pekon"><span><strong><?= $data['nama'] ?></strong> <br />
(<?= $data['jabatan'] ?>}</span></div></center>
</div>
                                    </div>
                                </div><!-- Post End -->

                             		<?php endif; ?>
			<?php endforeach; ?>

                            </div><!-- Sidebar Post Slider End -->
                        
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
</div>

<?php } ?>