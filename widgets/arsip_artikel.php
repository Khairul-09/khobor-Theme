<!-- widget Arsip Artikel -->


 	<?php if ($this->uri->segment(2) != '') { ?>



 <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">


  <!-- Sidebar Start -->
   
                    
                    <!-- Single Sidebar -->
                    <div class="single-sidebar">
                        
                        <!-- Sidebar Block Wrapper -->
                        <div class="sidebar-block-wrapper">
                        
                            <!-- Sidebar Block Head Start -->
                            <div class="head education-head">

                                <!-- Tab List -->
                                <div class="sidebar-tab-list education-sidebar-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#latest-news">Terbaru</a>
                                    <a data-toggle="tab" href="#popular-news">Acak</a>
                                </div>

                            </div><!-- Sidebar Block Head End -->
                            
                            <!-- Sidebar Block Body Start -->
                            <div class="body">
                            
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="latest-news">

		  
		   <?php foreach ($arsip as $l): ?>
	
                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border" >
                                            <div class="post-wrap"  >

                                                <!-- Image -->
							<div class="tab_berita"	>				
				<a href="<?= site_url("first/artikel/$l[id]")?>">
				
                <?php if (is_file(LOKASI_FOTO_ARTIKEL."kecil_$l[gambar]")): ?>
				 <a  href="post-details.html"><img src="<?= base_url("desa/upload/artikel/kecil_$l[gambar]")?>" alt="post" ></a>
                   
                <?php else: ?>
                    <img  src="<?= base_url("assets/images/404-image-not-found.jpg")?>"/>
                <?php endif;?>
                                            
</a>
</div>
                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="<?= site_url("first/artikel/$l[id]")?>"><?= $l['judul']?></a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i><?= tgl_indo2($l['tgl_upload']) ?></span>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div><!-- Small Post End -->
     
   <?php endforeach; ?>
                                   
                                
                                    </div>
                                    <div class="tab-pane fade" id="popular-news">

                                      <?php foreach ($arsip_rand as $l): ?>
									 
                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border" >
                                            <div class="post-wrap"  >

                                                <!-- Image -->
							<div class="tab_berita"	>				
					<a href="<?= site_url("first/artikel/$l[id]")?>">
                <?php if (is_file(LOKASI_FOTO_ARTIKEL."kecil_$l[gambar]")): ?>
				<img src="<?= base_url("desa/upload/artikel/kecil_$l[gambar]")?>" alt="post" >
                   
                <?php else: ?>
                    <img  src="<?= base_url("assets/images/404-image-not-found.jpg")?>"/>
                <?php endif;?>
                                            
</a>
</div>
                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="<?= site_url("first/artikel/$l[id]")?>"><?= $l['judul']?></a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i><?= tgl_indo2($l['tgl_upload']) ?></span>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div><!-- Small Post End -->
			
   <?php endforeach; ?> 
									 
									 
									 
                                   
                                    </div>
                                </div><br />

                              <a href="<?= site_url("first/arsip"); ?>" class="btn btn-sm btn-info btn-flat btn-block"><i class="fa fa-eye"></i> Semua Arsip</a>
                            </div><!-- Sidebar Block Body End -->

                        </div>
                        
                    </div>
         
</div>

<?php } ?>