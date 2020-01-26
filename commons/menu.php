
<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
 <!-- Menu Section Start -->
    <div class="menu-section section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-section-wrap">

                        <!-- Main Menu Start -->
                        <div class="main-menu float-left d-none d-md-block">
                            <nav>
                                <ul>

                                    <li class="active">
									<a href="<?= site_url('first') ?>" style="font-size:20px;" title="Halaman Utama">
									<i class="fa fa-home" ></i></a>
									</li>
									
                                   <?php foreach ($menu_atas as $data): ?>
					<li ><a  href="<?= $data['link']?>"> <?= $data['nama'] ?><?php (count($data['submenu']) > 0) and print(" <i class=' fa  fa-chevron-circle-down'></i>") ?></a>
						<?php if (count($data['submenu']) > 0): ?>
							<ul class="sub-menu">
								<?php foreach ($data['submenu'] as $submenu): ?>
									<li><a href="<?= $submenu['link']?>"><?= $submenu['nama']?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
								   
								   
						
                                    
                                </ul>
                            </nav>
                        </div><!-- Main Menu Start -->

                        <div class="mobile-logo d-none d-block d-md-none"><a href="<?= site_url('first') ?>"><?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?></a></div>

                        <!-- Header Search -->
                        <div class="header-search float-right">

                            <!-- Search Toggle -->
                            <button class="header-search-toggle"><i class="fa fa-search"></i></button>

                            <!-- Header Search Form -->
                            <div class="header-search-form">
                               	<form action="<?= site_url('first');?>" method="get">
								<input type="text" class="form-control bg-transparent" placeholder="Search Here" name="cari" autocomplete="off" autofocus>
                                   
                                </form>
                            </div>

                        </div>
                        
                        <!-- Mobile Menu Wrap -->
                        <div class="mobile-menu-wrap d-none">
                            <nav>
							
							
							  <ul>

                                    <li class="active">
									<a href="<?= site_url('first') ?>" title="Halaman Utama">
									Beranda</a>
									</li>
									
                                   <?php foreach ($menu_atas as $data): ?>
					<li ><a  href="<?= $data['link']?>"> <?= $data['nama'] ?><?php (count($data['submenu']) > 0) and print("") ?></a>
						<?php if (count($data['submenu']) > 0): ?>
							<ul class="sub-menu">
								<?php foreach ($data['submenu'] as $submenu): ?>
									<li><a href="<?= $submenu['link']?>"><?= $submenu['nama']?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
								   
					<?php foreach($menu_kiri as $data){?>
					<li><a  href="<?php echo site_url()."first/kategori/".$data['id']?>"><?php echo $data['nama']; if(count($data['submenu'])>0) { echo ""; } ?></a>
						<?php if(count($data['submenu'])>0): ?>
							<ul class="sub-menu">
								<?php foreach($data['submenu'] as $submenu): ?>
									<li><a href="<?php echo site_url()."first/kategori/".$submenu['id']?>"><?php echo $submenu['nama']?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</li>
				<?php }?>			   
						
                <li> <a style="color:#FF0000;" href="<?= site_url('siteman') ?>">Login</a></li>                    
                                </ul>
							
							
							
							
							
							
							
							
							
                            </nav>
                        </div>
                        
                        <!-- Mobile Menu -->
                        <div class="mobile-menu"></div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- Menu Section End -->