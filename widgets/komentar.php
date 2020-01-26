

 <!-- Post Block Wrapper Start -->
 <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head sports-head">
                            
                            <!-- Title -->
                            <h4 class="title">Komentar Terkini</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" direction="up" width="100%" height="130" align="center" behavior=”alternate” style="overflow:hidden" >
                 <?php foreach($komen As $data){?>    
				
                    <!-- Single Tweet Start -->
                    <div class="single-tweet">
                       
                      
						
                        <!-- Content -->
                        <div class="content fix">
                            <!-- Head -->
                           <h5 class="own"><a href="#" style="color:#009933"><i class="fa fa-user"></i> <?php echo $data['owner']?></a></h5>
                            <!-- Tags -->
                            <div class="tags">
                              <i class="fa fa-calendar"></i> <?php echo tgl_indo2($data['tgl_upload'])?>
                            </div>
                            <!-- Links -->
                            <div class="links bdr_bt"><?php echo $data['komentar']?></div>
                            <!-- Meta -->
                           
                        </div>
                        
                    </div><!-- Single Tweet End -->
					
                  <?php }?>  
              </marquee>
							
							
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
</div>








