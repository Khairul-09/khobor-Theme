<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>





 <!-- Blog Section Start -->
    <div class="blog-section section pt-10">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-lg-8 col-12 mb-10">
                      	
			 <div class="sidebar-block-wrapper">

                                <div class="head feature-head">

                                    <!-- Title -->
                                    <h4 class="title">ARSIP GALERI <?= strtoupper($this->setting->sebutan_desa).' '.strtoupper($desa['nama_desa']) ?> </strong></h4>

                                </div><!-- Sidebar Block Head End -->
                        </div>                
                    <!-- Single Blog Start -->
                    <div class="single-blog mb-10">
					 
                        <div class="blog-wrap">

                   <div class="row">
                            

                            <!-- Title -->
                            <h3 class="title"><?= $single_artikel['judul'] ?></h3>
							
                   
                            <!-- Image -->
                          

                           <?php if($gallery) : ?>
	 
		<?php foreach($gallery as $data) : ?>
		<div class="col-lg-4 col-md-4 mb-30" >
		<div class="bd_galleri">
			<?php if(is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])) : ?>
			<?php $link = site_url('first/sub_gallery/'.$data['id']) ?>
				<a href="<?=$link?>"  title="<?= $data['nama'] ?>" >
					<img src="<?= AmbilGaleri($data['gambar'],'kecil') ?>" alt="<?= $data['nama'] ?>" class="img-fluid" title="<?= $data['nama'] ?>">
					<div class="nm_gale" title="<?= $data['nama'] ?>"><?= $data['nama'] ?></div>
				</a>
			<?php endif ?>
			</div>
			</div>
		<?php endforeach ?>
	
<?php endif ?>

                </div>          
						  
<div style="clear:both"></div>
	<?php $this->load->view($folder_themes .'/commons/paging') ?>
                        </div>
                    </div><!-- Single Blog End -->
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

