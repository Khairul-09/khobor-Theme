<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>



   
                    
                    <!-- Single Sidebar -->
                    <div class="single-sidebar">
                        
                        <!-- Sidebar Block Wrapper -->
                        <div class="sidebar-block-wrapper">
                        
                            <!-- Sidebar Block Head Start -->
                            <div class="head education-head">

                                <!-- Tab List -->
                                <div class="sidebar-tab-list education-sidebar-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#kb">Komentar Berita</a>
                                    <a data-toggle="tab" href="#kf">Komentar Facebook</a>
                                </div>

                            </div><!-- Sidebar Block Head End -->
                            
                            <!-- Sidebar Block Body Start -->
                            <div class="body">
                            
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kb">




<?php if(is_array($komentar)) : ?>
	<?php 
	$k = array();
	foreach ($komentar as $data) {
		if ($data['enabled'] == 1) {
			array_push($k, $data);
		}
	}
	?>
	

	  <!-- Post Author Start -->
	  <?php if(count($k) > 0) : ?>
	  <?php foreach($k as $data) : ?>
                    <div class="post-author fix mb-10">

                        <div class="image float-left komen d-none d-md-block"></div>

                        <div class="content fix">
                            <h5><a href="#!" title="<?= $data['owner'] ?>"><?= $data['owner'] ?></a> 
							<span style="float:right; font-size:11px;" ><i class="fa fa-clock-o"></i> <?= tgl_indo($data['tgl_upload']); ?></span></h5>
							
                            <p><?= $data['komentar'] ?></p>
                            
                        </div>

                    </div><!-- Post Author End -->
					<?php endforeach ?>
			<?php endif ?>
<?php endif ?>			
		               
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        	<?php if($single_artikel['boleh_komentar']): ?>
                        <!-- Post Block Head Start -->
                        <div class="head">
                            
                            <!-- Title -->
                            <h4 class="title">Formulir Komentar <span style="font-size:12px;">(Komentar baru terbit setelah disetujui Admin)</span></h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body" id="kolom-komentar">
                            <!-- Tampilkan hanya jika 'flash_message' ada -->
			<?php $label = !empty($_SESSION['validation_error']) ? 'alert-danger' : 'alert-success'; ?>
			<?php if ($flash_message): ?>
				<div class="box-header alert <?= $label?> mx-2 rounded-0"><?= $flash_message?></div>
				<?php unset($_SESSION['validation_error']); ?>
			<?php endif; ?>
                            <div class="post-comment-form">
							<form id="form-komentar" name="form" action="<?= site_url('first/add_comment/'.$single_artikel['id'])?>" method="POST" onSubmit="return validasi(this);" class="row">
                           
                                    
                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="name">Nama <sup>*</sup></label>
                                       <input  type="text" required name="owner" maxlength="20" value="<?= !empty($_SESSION['post']['owner']) ? $_SESSION['post']['owner'] : $_SESSION['nama'] ?>" onKeyUp="this.value=this.value.replace(/[^A-Z a-z]/g,'')">
                                    </div>
                                    
                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="email">Email </label>
                                        <input  type="email" placeholder="" name="email" maxlength="30" value="<?= $_SESSION['post']['email']; ?>">
                                    </div>
                                    
                                  <div class="col-md-4 col-12 mb-20">
                                        <label for="website">No. HP <sup>*</sup></label>
                                       <input  type="text"  placeholder="" required name="no_hp" maxlength="13" value="<?= $_SESSION['post']['no_hp']; ?> " onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')">
                                    </div>
									<div class="col-md-4 col-12 mb-20">
									   <label for="website"></label>
                                        <img id="captcha" src="<?= base_url('securimage/securimage_show.php') ?>" alt="CAPTCHA Image"/ class="img-fluid border border-black" >
										<center><a href="#!" onclick="document.getElementById('captcha').src = '<?= base_url("securimage/securimage_show.php?")?>'+Math.random(); return false"><small>[ Ganti Kode ]</small></a></center>
                                    </div>
									
									<div class="col-md-4 col-12 mb-20">
                                        <label for="website">Masukan Kode <sup>*</sup></label>
                                       <input  type="text" required name="captcha_code" maxlength="6" value="<?= $_SESSION['post']['captcha_code'] ?>"/>
                                    </div>
									
									 <div class="col-12 mb-20">
                                        <label for="message">Komentar <sup>*</sup></label>
                                      <textarea  required name="komentar"><?= $_SESSION['post']['komentar'] ?></textarea>
                                    </div>
									
									
                                    
                                   
                                    
                                    <div class="col-12">
                                        <input type="submit" value="KIRIM KOMENTAR">
                                    </div>
                                    
                                </form>
                            </div>
                            
                        </div><!-- Post Block Body End -->
						
						
						<?php else: ?>
			<div class="alert alert-warning">
                            
                            <!-- Title -->
                            Komentar untuk artikel ini telah ditutup.
                            
                        </div><!-- Post Block Head End -->
                        			
		
	<?php endif; ?>
                        
                    </div><!-- Post Block Wrapper End -->			






                                    </div>
                                    <div class="tab-pane fade" id="kf">

                             
			<div class="fb-comments" data-href="<?= site_url("first/artikel/$l[id]")?>" data-width="100%" data-numposts="5"></div>	
									   	
                                   
                                    </div>
                                </div>
                              
                            </div><!-- Sidebar Block Body End -->

                        </div>
                        
                    </div>
         





















