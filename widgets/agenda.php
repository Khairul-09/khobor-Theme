<!-- Widget Agenda -->

<?php if ($agenda): ?>

<!-- Post Block Wrapper Start -->
 <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head sports-head">
                            
                            <!-- Title -->
                            <h4 class="title"><a href="<?= site_url();?>first/kategori/1000"><i class="fa fa-calendar"></i> Agenda</a></h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                     
           <?php foreach ($agenda as $l): 
		   $tgl_agenda = tgl_indo2($l['tgl_agenda']);
           $pisah = explode(" ",$tgl_agenda);
		   ?>
		   
		    <div class="col-lg-12 col-md-12 col-12 mb-20 bdr_l"  >
			 <a href="<?= site_url("first/artikel/$l[id_artikel]")?>"><i class="fa   fa-bullhorn"></i> <?= $l['judul']?>. (<?= $l['koordinator_kegiatan']?>)</a>
			 <div style="clear:both; padding-bottom:8px;" ></div>
									 <b class="fa  fa-calendar-o agenda">
									 <span><?= $pisah[0] ?></span></b>
									 <div class='ag' ><b><i class="fa  fa-map-marker"></i> <?= $l['lokasi_kegiatan']?></b> <br />
                                     <?=$pisah[1]?>  <?=$pisah[2]?> <br />
                                     <span><?= $pisah[3] ?></span>
									 
                                     </div>
									  <div style="clear:both"></div>
									 </div>
									 
         
		

        <?php endforeach; ?>
	  
	  

							
							
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
</div>



<?php endif; ?>
