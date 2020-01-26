<!-- widget Menu-->


 <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head video-head">

                                    <!-- Title -->
                                    <h4 class="title">Kategori</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">
								
<ul class="sidebar-category video-category">
				<?php foreach($menu_kiri as $data){?>
					<li><a href="<?php echo site_url()."first/kategori/".$data['id']?>"><?php echo $data['nama']; if(count($data['submenu'])>0) { echo "<span class='caret'></span>"; } ?></a>
						<?php if(count($data['submenu'])>0): ?>
							<ul >
								<?php foreach($data['submenu'] as $submenu): ?>
									<li><a href="<?php echo site_url()."first/kategori/".$submenu['id']?>"><?php echo $submenu['nama']?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</li>
				<?php }?>
			</ul>

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

