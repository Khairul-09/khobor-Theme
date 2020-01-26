 <?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
    <!-- Header Top Start -->
    <div class="header-top header-top-2 section d-none d-md-block">
        <div class="container">
            <div class="row">
               
                <!-- Header Top Links Start -->
                <div class="header-top-links col-md-12 col-6 menu_atas">
                      <nav>
                    <!-- Header Links -->
                    <ul class="header-links header-links-2">
                        <li class="disabled block d-none d-md-block"><a href="#"><i class="fa fa-clock-o"></i> <?= date('D')?>, <?= date('d M Y')?></a></li>
                       
          
					
									
			
				<?php foreach($menu_kiri as $data){?>
					<li><a  href="<?php echo site_url()."first/kategori/".$data['id']?>"><?php echo $data['nama']; if(count($data['submenu'])>0) { echo "<i class=' fa  fa-chevron-circle-down'></i>"; } ?></a>
						<?php if(count($data['submenu'])>0): ?>
							<ul class="sub-menu">
								<?php foreach($data['submenu'] as $submenu): ?>
									<li><a href="<?php echo site_url()."first/kategori/".$submenu['id']?>"><?php echo $submenu['nama']?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</li>
				
				<?php }?>
				
					<li> <a style="color:#FF0000;" href="<?= site_url('siteman') ?>" target="_blank">Login</a></li>
					
                    </ul>
                      </nav>
                </div><!-- Header Top Links End -->
                
               
                
            </div>
        </div>
    </div><!-- Header Top End -->
   	<?php $this->load->view($folder_themes . '/partials/marquee'); ?>
    
    <!-- Header Start -->
    <div class="header-section section headbg ">
        <div class="container">
            <div class="row align-items-center">
               
                <!-- Header Logo -->
                <div class="header-logo col-md-5 d-none d-md-block">
			
				<img src="<?= LogoDesa($desa['logo']) ?>" alt="<?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="logo_kop">
					<a href="<?= site_url('first') ?>">
                   <h1 class="kop">
						<span><?= strtoupper($this->setting->sebutan_desa) ?></span>
						<span><?= strtoupper($desa['nama_desa']); ?></span>
					</h1>
					<span style="font-size:12px">
						<?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?> 
						<?= ucwords($desa['nama_kecamatan']) ?>,
						<?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?>
						<?= ucwords($desa['nama_kabupaten']) ?>,
						<?= ucwords($data_config['nama_propinsi']) ?>
						</span>
						</a>
                </div>
                
             
                <div class="header-banner col-md-7 col-12 bnr">
				
<!--login banner layanan mandiri-->				
	
<?php
if(!isset($_SESSION['mandiri']) OR $_SESSION['mandiri']<>1){

  if($_SESSION['mandiri_wait']==1){
  ?>
                        
		    <div class="banner"><img src="<?= base_url("$this->theme_folder/$this->theme/assets/LAYANANMANDIRI.jpg") ?>">
			
	
	<div class="wr"> <i class="fa  fa-exclamation-triangle "></i>  Gagal 3 kali, silakan coba kembali dalam <?php echo waktu_ind((time()- $_SESSION['mandiri_timeout'])*(-1));?> detik lagi.</div>		

			</div>	
			  

 
<?php }else{ ?>
  <div class="banner"><a href="#" data-toggle="modal" data-target="#login" ><img src="<?= base_url("$this->theme_folder/$this->theme/assets/LAYANANMANDIRI.jpg") ?>"></a>
  
   <?php  if($_SESSION['mandiri_try'] AND isset($_SESSION['mandiri']) AND $_SESSION['mandiri']==-1){ ?>

	  <div class="wr"> <i class="fa  fa-exclamation-triangle "></i> Login Gagal. Username atau Password yang Anda masukkan salah! Kesempatan mencoba <?php echo ($_SESSION['mandiri_try']-1); ?> kali lagi.</div>

      <?php }?>
   	

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Layanan Mandiri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="<?php echo site_url('first/auth')?>" method="post">
      <div class="modal-body">
           
          <div class="form-group">
            
           <input name="nik" type="text" class="form-control" placeholder="Masukan NIK"  value="" required>
          </div>
           <div class="form-group">
       
            <input name="pin" type="password" placeholder="Masukan PIN" s class="form-control" value="" required>
          </div>
		  </div>
		   
		  <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary btn-sm">Masuk</button>
      </div>
	  
        </form>
     
      
    </div>
  </div>
</div>
</div>								
								
							




                              
			


<?php }
}else{
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td><div align="center"><a href="<?php echo site_url();?>first/mandiri/1/1" data-toggle="tooltip" data-placement="bottom" title="Selamat Datang <?php echo $_SESSION['nama'];?>	"><img src="<?= base_url("$this->theme_folder/$this->theme/assets/user.png") ?>"></a></div></td>
	
    <td> <div align="center"><a href="<?php echo site_url();?>first/mandiri/1/2" data-toggle="tooltip" data-placement="bottom" title=" Layanan"><img src="<?= base_url("$this->theme_folder/$this->theme/assets/gear.png") ?>"> </a></div></td>
	
    <td> <div align="center"><a href="<?php echo site_url();?>first/mandiri/1/3" data-toggle="tooltip" data-placement="bottom" title="Lapor"><img src="<?= base_url("$this->theme_folder/$this->theme/assets/horn.png") ?>"></a> </div></td>
	
    <td><div align="center"><a href="<?php echo site_url();?>first/mandiri/1/4" data-toggle="tooltip" data-placement="bottom" title="Bantuan"><img src="<?= base_url("$this->theme_folder/$this->theme/assets/question.png") ?>"></a></div></td>
	
    <td><div align="center"><a href="<?php echo site_url();?>first/logout" data-toggle="tooltip" data-placement="bottom" title="Keluar" onclick="return confirm ('Apakah <?php echo $_SESSION['nama'];?> Akan Keluar ?')" ><img src="<?= base_url("$this->theme_folder/$this->theme/assets/off.png") ?>"> </a></div></td>
  </tr>
</table>


  
<?php }
?>
	
					
                </div>
               
            </div>
        </div>
    </div><!-- Header End -->
	

