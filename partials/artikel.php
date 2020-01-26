<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view($folder_themes . '/commons/header') ?>
<?php $this->load->view($folder_themes . '/commons/menu') ?>



 <!-- Blog Section Start -->
    <div class="blog-section section pt-10">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-lg-8 col-12 mb-10">
                                   
                    <!-- Single Blog Start -->
                    <div class="single-blog mb-10">
                        <div class="blog-wrap">

                            <!-- Meta -->
                            <div class="meta fix">
								<?php if($single_artikel['kategori']) : ?>
								       <a href="#" class="meta-item category fashion"><?= $single_artikel['kategori'] ?></a>
									
								<?php endif ?>
                           
                                <a href="#" class="meta-item author"><i class="fa fa-user"></i>	<?= $single_artikel['owner'] ?></a>
                                <span class="meta-item date"><i class="fa fa-clock-o"></i><?= tgl_indo($single_artikel['tgl_upload']) ?></span>
                               
                            </div>

                            <!-- Title -->
                            <h3 class="title"><?= $single_artikel['judul'] ?></h3>
							
                    <?php if($single_artikel['gambar']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar'])): ?>
		
				<div class="sampul image-popup" href="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>" title="<?= $single_artikel['judul'] ?>" ><img src="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>" alt="<?= $single_artikel['judul'] ?>" />
			</div>
		<?php endif; ?>
                            <!-- Image -->
                          

                            <!-- Content -->
                            <div class="content isi">

                               <?= $single_artikel['isi'] ?>
							   
							   
							   
							   <?php if($single_artikel['gambar1']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar1'])): ?>
			<div class="sampul image-popup" href="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang')?>" title=""><img src="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang')?>" alt="<?= $single_artikel['judul'] ?>" />
			</div>
		<?php endif; ?>
		<?php if($single_artikel['gambar2']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar2'])): ?>
				<div class="sampul image-popup" href="<?= AmbilFotoArtikel($single_artikel['gambar2'],'sedang')?>" title=""><img src="<?= AmbilFotoArtikel($single_artikel['gambar2'],'sedang')?>" alt="<?= $single_artikel['judul'] ?>" />
			</div>
		<?php endif; ?>
		<?php if($single_artikel['gambar3']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar3'])): ?>
			<div class="sampul image-popup" href="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang')?>" title=""><img src="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang')?>" alt="<?= $single_artikel['judul'] ?>" />
			</div>
		<?php endif; ?>
							   
							   
							   
							   
							   
							   <?php if($single_artikel['dokumen'] && $single_artikel['dokumen'] != NULL) : ?>
								<div class="align-middle d-flex LP" style="border-left: 3px solid teal">
									<h4 class="h5 font-weight-bold m-0">Lampiran</h4>
									<span class="px-3">:</span>
									<div><a class="d-inline-block" href="<?= base_url(LOKASI_DOKUMEN.$single_artikel['dokumen']) ?>"><?= $single_artikel['link_dokumen'] ?></a></div>
								</div>
							<?php endif ?>
							
							
							

                            </div>

                            <div class="tags-social float-left">
                         

                                <div class="blog-social float-right">
								
									
                                    <a   id="fb" class="facebook" name="fb_share" href="http://www.facebook.com/sharer.php?u=<?= site_url().'first/artikel/'.$single_artikel['id']?>" target="_blank" title="Bagikan Ke Teman Anda"><i class="fa fa-facebook"></i></a>
									
                                    <a  id="rt" class="twitter" href="http://twitter.com/share?url=<?=site_url().'first/artikel/'.$single_artikel['id']?>" class="twitter-share-button" target="_blank" title="Bagikan Ke Teman Anda"><i class="fa fa-twitter"></i></a>
									
									
                           <a  class="wa" id="wa_share" style="background:#00CC99" href="https://api.whatsapp.com/send?text=<?= site_url().'first/artikel/'.$single_artikel['id']?>" target="_blank" title="Bagikan Ke Teman Anda"><i class="fa fa-whatsapp"></i></a>
                                </div>

                            </div>

                        </div>
                    </div><!-- Single Blog End -->
                                    
                    <!-- Previous & Next Post Start \
                    <div class="post-nav mb-50">
                        <a href="#" class="prev-post"><span>previous post</span>he 10 Best Beauty Looks: Week of September 11, 2017.</a>
                        <a href="#" class="next-post"><span>next post</span>The top 7 collections of New York fashion week.</a>
                    </div> Previous & Next Post End -->
                  	<?php $this->load->view($folder_themes .'/partials/komentar') ?>      
                  
                    
                   
     
                    
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



<?php $this->load->view($folder_themes .'/commons/footer') ?>











