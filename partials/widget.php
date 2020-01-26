<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>



<!-- widget Layanan Mandiri -->

<?php
if(!isset($_SESSION['mandiri']) OR $_SESSION['mandiri']<>1){

}else{
?>





<?php
  if(isset($_SESSION['lg']) AND $_SESSION['lg']==1){
  ?>
     <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">


                                <!-- Sidebar Block Body Start -->
                                <div class="body">
			<div class="alert alert-warning alert-dismissible">
                Untuk keamanan silahkan ubah kode PIN Anda.
              </div>			
			
				<h4>Masukkan PIN Baru</h4>				
					
    <form action="<?php echo site_url('first/ganti')?>" method="post">

			
				
				<div class="input-group input-group-sm">
              <input name="pin1" class="form-control" type="password" placeholder="PIN" value="" >
          <input name="pin2" type="password" class="form-control" placeholder="Ulangi PIN" value="" >
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Ganti</button>
                    </span>
              </div>
      </form>
        <?php if ($flash_message) { ?><br />

          <div id="notification" class='alert alert-danger alert-dismissible'><?php echo $flash_message ?></div>
          <script type="text/javascript">
          $('document').ready(function(){
            $('#notification').delay(10000).fadeOut();
          });
          </script>
        <?php } ?>
   
<div style="font-size:12px;">
          Silahkan coba login kembali setelah PIN baru disimpan.
        </div>
                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>


  
  <?php }else if(isset($_SESSION['lg']) AND $_SESSION['lg']==2){?>


     <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">


                                <!-- Sidebar Block Body Start -->
                                <div class="body">
			<div class="alert alert-success alert-dismissible">
                Pin Berhasil Disimpan
              </div>	
			  
                              </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

    <?php
    unset($_SESSION['lg']);
  }


}
?>











<?php if($w_cos) : ?>
	<?php foreach($w_cos as $data) : ?>
		<?php if($data['jenis_widget'] == 1) : ?>
			<?php $this->load->view($folder_themes ."/widgets/".trim($data['isi'])); ?>
			<?php elseif($data['jenis_widget'] == 2): ?>
				<?php include(LOKASI_WIDGET.trim($data['isi'])); ?>	
				<?php else : ?>

         
                       
                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12" style="margin-bottom:10px;">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head feature-head">

                                    <!-- Title -->
                                    <h4 class="title"><?= strip_tags($data['judul']) ?></h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                  	<?= html_entity_decode($data['isi'])  ?>

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>
      

		<?php endif ?>
	<?php endforeach ?>
<?php endif ?>
  