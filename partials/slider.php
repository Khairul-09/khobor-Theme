<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

 <!-- Hero Section Start -->
    <div class="hero-section section mt-10 mb-10">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row row-1">

                        <div class="order-lg-2 col-lg-9 col-12">
                            
                            <!-- Hero Post Slider Start -->
                            <div class="post-carousel-1">
  <?php foreach ($slider_gambar['gambar'] as $gambar) : ?>
    	<?php if(is_file($slider_gambar['lokasi'].'sedang_'.$gambar['gambar'])) : ?>
                                <!-- Overlay Post Start -->
                                <div class="post post-large hero-post">
                                    <div class="post-wrap">

              <div class="image sdlr hero-blog-post" style="  background-image: url(<?php echo base_url().$slider_gambar['lokasi'].'sedang_'.$gambar['gambar']?>);" > </div>                       
		
		                       </div>
                                </div><!-- Overlay Post End -->
                                
                               <?php endif; ?>
	                <?php endforeach; ?>
							  
							  
							  
                               
                                
                            </div><!-- Hero Post Slider End -->
                            
                        </div>

                     
                        <div class="order-lg-3 col-lg-3 col-12">
                            <div class="row row-1">

 <?php if ($headline): ?>
                                <!-- Overlay Post Start -->
                                <div class="post post-overlay  gradient-overlay-1 hero-post col-lg-12 col-md-6 col-12">
                                    <div class="post-wrap ">

                                  <?php if ($headline["gambar"] != ""): ?>
				<?php if (is_file(LOKASI_FOTO_ARTIKEL."sedang_".$headline['gambar'])): ?>
				
				   <div class="image line " style="  background-image: url(<?= AmbilFotoArtikel($headline['gambar'], 'sedang') ?>);" > </div>      
				
				
					<?php else: ?>
						<img style="margin-right: 10px; margin-bottom: 5px; height:200px; background:#0066CC" src="<?= base_url('assets/images/404-image-not-found.jpg') ?>" width="300" height="180"/>
					<?php endif; ?>
				<?php endif; ?>

                                     <!-- Category -->
                                        <a href="#" class="category sports">Headline</a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="<?= site_url('first/artikel/'.$headline['thn'].'/'.$headline['bln'].'/'.$headline['hri'].'/'.$headline['slug']) ?>"> <?= $headline['judul'] ?></a></h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i><?= tgl_indo2($headline['tgl_upload'])?>7</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Overlay Post End -->
			<?php endif; ?>	                             






                                <!-- Overlay Post Start -->
                                <div class="post post-overlay  gradient-overlay-1 hero-post col-lg-12 col-md-6 col-12">
                                    <div class="post-wrap ">
                            <!-- Hero Post Slider Start -->
							
                            <div class="post-carousel-2 " style="position:relative;">
                                      <?php foreach ($arsip_rand as $l): ?>
									 
                                     
                <?php if (is_file(LOKASI_FOTO_ARTIKEL."kecil_$l[gambar]")): ?>
				 <div class="post post-large hero-post"  style="position:relative;">
                                    <div class="post-wrap">
<div class="image sdlr2 hero-blog-post" style="  background-image: url(<?= base_url("desa/upload/artikel/kecil_$l[gambar]")?>);" > </div>                                    
                             <a href="<?= site_url('first/kategori/' . $l['id_kategori']) ?>" class="category fashion"><?= $l['kategori'] ?></a>
                                <div class="content">

                                            <h4 class="title kate"><a href="<?= site_url('first/artikel/'.$l['id']) ?>"> <?= $l['judul'] ?></a></h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i><?= tgl_indo2($l['tgl_upload'])?>7</span>
                                            </div>

                                        </div>      
                                                              
                                    </div>
                                </div><!-- Overlay Post End -->
				 <?php else: ?>
				 				 <div class="post post-large hero-post" style="position:relative;">
                                    <div class="post-wrap">
<div class="image sdlr2 hero-blog-post" style="  background-image: url(<?= base_url("assets/images/404-image-not-found.jpg")?>);" > </div>                                <a href="<?= site_url('first/kategori/' . $l['id_kategori']) ?>" class="category fashion"><?= $l['kategori'] ?></a>
                                <div class="content">

                                            <h4 class="title kate"><a href="<?= site_url('first/artikel/'.$l['id']) ?>"> <?= $l['judul'] ?></a></h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i><?= tgl_indo2($l['tgl_upload'])?>7</span>
                                            </div>

                                        </div>      
                                                              
                                    </div>
                                </div><!-- Overlay Post End -->
               
                <?php endif;?>
   
 

   
   
   <?php endforeach; ?> 							
							
							

						</div><!-- Hero Post Slider End -->

                                

                         
                                    

                                    </div>
                                </div><!-- Overlay Post End -->
									
								

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- Hero Section End -->