<!-- widget SocMed -->


 <!-- Post Block Wrapper Start -->
 <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head sports-head">
                            
                            <!-- Title -->
                            <h4 class="title">Media Sosial</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <?php foreach ($sosmed As $data): ?>
		  <?php if (!empty($data["link"])): ?>
		    <a href="<?= $data['link']?>" target="_blank">
		    	<img src="<?= base_url().'assets/front/'.$data['gambar'] ?>" alt="<?= $data['nama'] ?>" style="width:50px;height:50px;"/>
		    </a>
		  <?php endif; ?>
		<?php endforeach; ?>
							
							
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
</div>

