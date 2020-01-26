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
                                    <h4 class="title">	Arsip Konten Situs Web <?=$desa["nama_desa"]?></h4>

                                </div><!-- Sidebar Block Head End -->
                        </div>                
                    <!-- Single Blog Start -->
                    <div class="single-blog mb-10">
					 
                        <div class="blog-wrap">

                   <div class="row">
                            

                            <!-- Title -->
                            <h3 class="title"><?= $single_artikel['judul'] ?></h3>
							
		<?php if(count($farsip)>0): ?>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<td width="3%"><b>No.</b></td>
						<td width="20%"><b>Tanggal Artikel</b></td>
						<td><b>Judul Artikel</b></td>
						<td width="20%"><b>Penulis</b></td>
					</tr>
				</thead>
				<tbody>
				<?php foreach($farsip AS $data): ?>
					<tr>
						<td style="text-align:center;">
							<?= $data["no"]?>
						</td>
						<td>
							<?= tgl_indo($data["tgl_upload"])?>
						</td>
						<td>
							<a href="<?= site_url('first/artikel/'.$data[id])?>"><?= $data["judul"]?></a>
						</td>
						<td style="text-align:center;">
							<?= $data["owner"]?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		<?php else: ?>
			Belum ada arsip konten web.
		<?php endif; ?>

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



