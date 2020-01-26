<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>


	<?php 
		if ((empty($_GET['cari'])) && ((count($slide_galeri)>0 || count($slide_artikel)>0)) AND $this->uri->segment(2) != 'kategori') {
			$this->load->view($folder_themes .'/partials/slider.php');
		}
	?>
	
	
	
	<?php 
	if ((empty($_GET['cari']))	AND $this->uri->segment(2) != 'kategori')	{?>
	<?php if($aparatur_desa) : ?>		
	  <!-- Popular Section Start -->
    <div class="popular-section section  pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <!-- Popular Post Slider Start -->
                    <div class="popular-post-slider">
          <?php foreach($aparatur_desa as $data) : ?>
		  	<?php if(AmbilFoto($data['foto'],"besar") AND is_file(LOKASI_USER_PICT.$data['foto'])) : ?>                    
                      
					   <!-- Post Start -->
                        <div class="post post-small post-list post-dark popular-post">
                            <div class="post-wrap">
<div class="ap_pekon">
                                <!-- Image -->
                                <a class=" img_pekon image-popup"  title="<?= $data['nama'] ?> (<?= $data['jabatan'] ?>)" href="<?php echo AmbilFoto($data['foto'],"besar") ?>"><img src="<?php echo AmbilFoto($data['foto'],"besar") ?>"  ></a>
								<div class="nm_pekon"><span><strong><?= $data['nama'] ?></strong> <br />
(<?= $data['jabatan'] ?>}</span></div>
</div>
                                <!-- Content -->
                                
                                
                            </div>
                        </div><!-- Post Start -->
		<?php endif; ?>
			<?php endforeach; ?>
                      
          
                        
                    </div><!-- Popular Post Slider End -->
                    
                </div>
            </div>
        </div>
    </div><!-- Popular Section End -->
    <?php endif;  ?>
	
	<?php  } ?>

	<?php $title = (!empty($judul_kategori))? $judul_kategori : "Artikel Terkini" ?>

<?php if (is_array($title)): ?>
	<?php foreach ($title as $item): ?>
		<?php $title= $item ?>
	<?php endforeach; ?>
<?php endif; ?>
		
    <!-- Blog Section Start -->
    <div class="blog-section section pt-10 pb-10">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-lg-8 col-12 mb-50">
				
			 <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head feature-head">

                                    <!-- Title -->
                                    <h4 class="title"><?= $title ?></h4>

                                </div><!-- Sidebar Block Head End -->
                        </div>           
                  <?php if($artikel) : ?>
							<?php foreach($artikel as $data) : ?>
								<?php $url = site_url('first/artikel/'.$data['id']) ?>
								<?php $abstrak = potong_teks($data['isi'], 250) ?>

                    <!-- Single Blog Start -->
                    <div class="single-blog mb-10 ">
                        <div class="blog-wrap">

                            <!-- Meta -->
                            <div class="meta fix">
							<?php if($data['kategori'] && trim($data['kategori'] != '')) : ?>
												<a href="<?= site_url('first/kategori/' . $data['id_kategori']) ?>"
													 class="meta-item category sports"><?= $data['kategori'] ?></a>
													 <?php else: ?>
													 <a href="<?= site_url('first/kategori/' . $data['id_kategori']) ?>"
													 class="meta-item category sports">Kategori</a>
											<?php endif ?>
                               
                                 <span class="meta-item date"><i class="fa fa-user"></i><?= $data['owner'] ?></span>
                                <span class="meta-item date"><i class="fa fa-clock-o"></i><?= tgl_indo($data['tgl_upload']) ?></span>
							
                            </div>

                           
							 <h3 class="judul">
									<a href="<?= $url ?>"><?= $data['judul'] ?></a></h3>
                           
                            <!-- Content -->
                            <div class="isi">
                        <?php if ($data['gambar']!=''): ?>
						   <div class="gb_img">
										<?php if (is_file(LOKASI_FOTO_ARTIKEL."kecil_".$data['gambar'])): ?>
											<img src="<?= AmbilFotoArtikel($data['gambar'],'kecil') ?>" alt="<?= $data["judul"] ?>"/>
											<?php else: ?>
												<img src="<?= base_url('assets/images/404-image-not-found.jpg') ?>" alt="<?= $data["judul"] ?>" />
											<?php endif;?>
											</div>
										<?php endif; ?>
                                <!-- Description -->
								 
									
                                <p><?= $abstrak ?>...</p>

                                <!-- Read More -->
                               

                            </div>

                        </div>
                    </div><!-- Single Blog End -->
		<?php endforeach ?>
							<?php else : ?>
								<div class="col-12 text-center pt-3 pb-5 d-flex flex-column">
									<p>Belum ada artikel yang dituliskan dalam <strong><?= $title ?></strong>.</p>
									<p>Silakan kunjungi situs web kami dalam waktu dekat.</p>
									</p>
								</div>
						<?php endif ?>
						
					<div style="clear:both"></div>	
                   <?php if($artikel) : ?>
				<?php $this->load->view($folder_themes .'/commons/paging') ?>
			<?php endif ?>
                            
                    
                    
                </div>
                
        <div class="col-lg-4 col-12 mb-10">
                    <div class="row">
<?php $this->load->view($folder_themes .'/partials/widget') ?>
 <!-- Sidebar Start -->
             </div>
                </div><!-- Sidebar End -->
   
                
            </div><!-- Feature Post Row End -->
            
        </div>
    </div><!-- Blog Section End -->
                        


	


