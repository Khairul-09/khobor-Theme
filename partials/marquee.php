<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<?php if($teks_berjalan) : ?>
  <!-- Breaking News Section Start -->
    <div class="breaking-news-section breaking-news-section-3 section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   
                    <!-- Breaking News Wrapper Start -->
                    <div class="breaking-news-wrapper breaking-news-wrapper-3 lost">

                        <!-- Breaking News Title -->
                        <h5 class="breaking-news-title float-left d-none d-md-block "><i class="fa  fa-bullhorn" style="font-size:18px;"></i></h5>

                        <!-- Breaking Newsticker Start -->
                        <ul class="breaking-news-ticker float-left ">
						<?php foreach($teks_berjalan as $teks) : ?>
			
				<li ><a><?= $teks['teks']?></a></li>
				
				<?php if ($teks['tautan']): ?>
					<li><a href="<?= site_url('first/artikel/'.$teks['tautan']) ?>"><?= $teks['judul_tautan']?></a></li>
				<?php endif ?>
			
			<?php endforeach ?>
						
                        </ul><!-- Breaking Newsticker Start -->

                        <!-- Breaking News Nav -->
                        <div class="breaking-news-nav navinfo">
                            <button class="news-ticker-prev"><i class="fa fa-angle-left"></i></button>
                            <button class="news-ticker-next"><i class="fa fa-angle-right"></i></button>
                        </div>
                        
                    </div><!-- Breaking News Wrapper End -->
                    
                </div>
            </div>
        </div>
    </div><!-- Breaking News Section End -->
	
	<?php endif ?>