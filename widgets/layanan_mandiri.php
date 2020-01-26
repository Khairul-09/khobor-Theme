<!-- widget Layanan Mandiri -->

<?php
if(!isset($_SESSION['mandiri']) OR $_SESSION['mandiri']<>1){

  if($_SESSION['mandiri_wait']==1){
  ?>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head video-head">

                                    <!-- Title -->
                                    <h4 class="title">Layanan Mandiri</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">
				<div class="alert alert-info alert-dismissible">
                Silakan datang atau hubungi operator <?php echo $this->setting->sebutan_desa?> untuk mendapatkan kode PIN anda.
              </div>	
			  
	 <div class="alert alert-danger alert-dismissible">		  
 Gagal 3 kali, silakan coba kembali dalam <?php echo waktu_ind((time()- $_SESSION['mandiri_timeout'])*(-1));?> detik lagi
 </div>
          <div class="alert alert-danger alert-dismissible">	
            Login Gagal. Username atau Password yang anda masukkan salah!
          </div>

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>
<?php }else{ ?>


                 <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head video-head">

                                    <!-- Title -->
                                    <h4 class="title">Layanan Mandiri</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">
		<div class="alert alert-info alert-dismissible">
                Silakan datang atau hubungi operator <?php echo $this->setting->sebutan_desa?> untuk mendapatkan kode PIN anda.
              </div>						
			
								
								
								

    <form action="<?php echo site_url('first/auth')?>" method="post">
	<div class="form-group input-group-sm">
         
           
				    <input name="nik" type="text" class="form-control" placeholder="NIK"  value="" required>
                </div>
			
				
				<div class="input-group input-group-sm">
                 <input name="pin" type="password" placeholder="PIN" s class="form-control" value="" required>
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Masuk</button>
                    </span>
              </div>
  


      <?php  if($_SESSION['mandiri_try'] AND isset($_SESSION['mandiri']) AND $_SESSION['mandiri']==-1){ ?>
	   <div class="box-footer">&nbsp;</div>
	  <div class="alert alert-danger alert-dismissible">
                
                 Kesempatan mencoba <?php echo ($_SESSION['mandiri_try']-1); ?> kali lagi.
              </div>

      <?php }?>
      <?php  if(isset($_SESSION['mandiri']) AND $_SESSION['mandiri']==-1){ ?>
       <div class="alert alert-danger alert-dismissible">
        Login Gagal. Username atau Password yang Anda masukkan salah!
      </div>
      <?php }?>
    </form>

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>
						
			


<?php }
}else{
?>

       <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head video-head">

                                    <!-- Title -->
                                    <h4 class="title">Layanan Mandiri</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">
						
			
								
				SELAMAT DATANG	<strong><?php echo $_SESSION['nama'];?>	</strong>		<br />
<ul class="sidebar-category video-category">
				
					<li><a href="<?php echo site_url();?>first/mandiri/1/1"> PROFIL</a></li>
					<li><a href="<?php echo site_url();?>first/mandiri/1/2"> LAYANAN</a></li>
					<li><a href="<?php echo site_url();?>first/mandiri/1/3"> LAPOR</a></li>
					<li><a href="<?php echo site_url();?>first/mandiri/1/4"> BANTUAN</a></li>
					<li><a style="color:#FF0000" href="<?php echo site_url();?>first/logout" onclick="return confirm ('Apakah <?php echo $_SESSION['nama'];?> Akan Keluar ?')"> Keluar</a></li>
			</ul>
								

   
   

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

<?php


}
?>
