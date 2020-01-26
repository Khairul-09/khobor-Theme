<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>




    <!-- Footer Top Section Start -->
    <div class="footer-top-section section bg-dark">
        <div class="container-fluid">
            <div class="row">
                
                <!-- Footer Widget Start -->
                <div class="footer-widget col-xl-3 col-md-6 col-12 mb-20">
                    
                    <!-- Title -->
                    <h4 class="widget-title"><?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?></h4>
                    
                    <div class="content fix ">
					<img src="<?= LogoDesa($desa['logo']) ?>" alt="<?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="bg_logo">
					
					
                        <p>
						 Pemerintah <b><?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?></b><br />
						 <?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?>
						<?= ucwords($desa['nama_kecamatan']) ?>
						<?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?>
						<?= ucwords($desa['nama_kabupaten']) ?>,
						<?= ucwords($data_config['nama_propinsi']) ?>,
						Indonesia</p>
                        
                        <!-- Footer Contact -->
                        <ol class="footer-contact">
							<?php if($desa['alamat_kantor']) : ?>
							<li><i class="fa fa-home"></i><?= $desa['alamat_kantor'] ?></li>
						     <?php endif ?>
							 
					         <?php if($desa['telepon']) : ?>
							  <li><i class="fa fa-phone"></i> <?= $desa['telepon'] ?></li>
						     <?php endif ?>
                            
							<?php if($desa['email_desa']) : ?>
						<li>
						<i class="fa fa-envelope-open"></i><a href="mailto:<?= $desa['email_desa'] ?>?Subject=Feedback" target="_top"> <?= $desa['email_desa'] ?></a>
						
						</li>
					<?php endif ?>
							
                        </ol>
                        
                        <!-- Footer Social -->
                        <div class="footer-social">
      
							
							 <?php if($sosmed[nested_array_search('Facebook',$sosmed)]['enabled'] == 1 && $sosmed[nested_array_search('Facebook', $sosmed)]['link']) : ?>
						
							<a href="<?= $sosmed[nested_array_search('Facebook',$sosmed)]['link'] ?>" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
						
					<?php endif ?>
					<?php if($sosmed[nested_array_search('Twitter', $sosmed)]['enabled'] == 1 && $sosmed[nested_array_search('Twitter', $sosmed)]['link']) : ?>
						
							<a href="<?= $sosmed[nested_array_search('Twitter', $sosmed)]['link'] ?>" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
						
					<?php endif ?>
					<?php if($sosmed[nested_array_search('Google Plus', $sosmed)]['enabled'] == 1 && $sosmed[nested_array_search('Google Plus', $sosmed)]['link']) : ?>
						
							<a href="<?= $sosmed[nested_array_search('Google Plus', $sosmed)]['link'] ?>" target="_blank" class="google-plus" ><i class="fa fa-google-plus"></i></a>
						
					<?php endif ?>
					<?php if($sosmed[nested_array_search('Instagram', $sosmed)]['enabled'] == 1 && $sosmed[nested_array_search('Instagram', $sosmed)]['link']) : ?>
						
							<a href="<?= $sosmed[nested_array_search('Instagram', $sosmed)]['link'] ?>" target="_blank" class="dribbble"><i class="fa fa-instagram"></i></a>
						
					<?php endif ?>
					<?php if($sosmed[nested_array_search('YouTube', $sosmed)]['enabled'] == 1 && $sosmed[nested_array_search('YouTube', $sosmed)]['link']) : ?>
						
							<a href="<?= $sosmed[nested_array_search('YouTube', $sosmed)]['link'] ?>" target="_blank" class="youtube" ><i class="fa fa-youtube"></i></a>
						
					<?php endif ?>
					<?php if($sosmed[nested_array_search('WhatsApp', $sosmed)]['enabled'] == 1 && $sosmed[nested_array_search('WhatsApp', $sosmed)]['link']) : ?>
						
							<a href="<?= $sosmed[nested_array_search('WhatsApp', $sosmed)]['link'] ?>" target="_blank" class="wa"><i class="fa fa-whatsapp"></i></a>
						
					<?php endif ?>
                        </div>
                        
                    </div>
                    
                </div><!-- Footer Widget End -->
          
                <!-- Footer Widget Start -->
                <div class="footer-widget col-xl-3 col-md-6 col-12 mb-20">
                   
                    <!-- Title -->
                    <h4 class="widget-title"><?="Lokasi Kantor ".ucwords($this->setting->sebutan_desa)?></h4>
                    
     
                    
                    <!-- Footer Widget Post Start -->
                    <div class="footer-widget-post">
                        <div class="post-wrap">
                            
 <div id="map_canvasF" style="height:200px;"></div>
    <button class="btn btn-success btn-block"><a href="https://www.openstreetmap.org/#map=15/<?=$data_config['lat']."/".$data_config['lng']?>" style="color:#fff;" target="_blank">Buka Peta</a></button>
 <script>
	//Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
	<?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
    var posisi = [<?=$data_config['lat'].",".$data_config['lng']?>];
    var zoom = <?=$data_config['zoom'] ?: 10?>;
	<?php else: ?>
    var posisi = [-1.0546279422758742,116.71875000000001];
    var zoom = 10;
	<?php endif; ?>

	var lokasi_kantor = L.map('map_canvasF').setView(posisi, zoom);

	//Menampilkan BaseLayers Peta
	var defaultLayer = L.tileLayer.provider('OpenStreetMap.Mapnik').addTo(lokasi_kantor);

	var baseLayers = {
		'OpenStreetMap': defaultLayer,
		'Mapbox Streets Satellite' : L.tileLayer('https://api.mapbox.com/v4/mapbox.streets-satellite/{z}/{x}/{y}@2x.png?access_token=<?=$this->setting->google_key?>', {attribution: '<a href="https://www.mapbox.com/about/maps">© Mapbox</a> <a href="https://openstreetmap.org/copyright">© OpenStreetMap</a>'}),
	};

	L.control.layers(baseLayers, null, {position: 'topright', collapsed: true}).addTo(lokasi_kantor);

	//Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
	<?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
    var kantor_desa = L.marker(posisi).addTo(lokasi_kantor);
	<?php endif; ?>
</script>                           
                        </div>
                    </div><!-- Footer Widget Post End -->
                    
                 
                    
                </div><!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="footer-widget col-xl-3 col-md-6 col-12 mb-20">
                    
                    <h4 class="widget-title">Komentar Terkini</h4>
					     <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" direction="up" width="100%" height="220" align="center" behavior=”alternate”>
                 <?php foreach($komen As $data){?>    
				
                    <!-- Single Tweet Start -->
                    <div class="single-tweet">
                       
                      
						
                        <!-- Content -->
                        <div class="content fix">
                            <!-- Head -->
                           <h5 class="own"><a href="#"><i class="fa fa-user"></i> <?php echo $data['owner']?></a></h5>
                            <!-- Tags -->
                            <div class="tags">
                              <i class="fa fa-calendar"></i> <?php echo tgl_indo2($data['tgl_upload'])?>
                            </div>
                            <!-- Links -->
                            <div class="links"><?php echo $data['komentar']?></div>
                            <!-- Meta -->
                           
                        </div>
                        
                    </div><!-- Single Tweet End -->
					
                  <?php }?>  
              </marquee>
                    
                </div><!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="footer-widget col-xl-3 col-md-6 col-12 mb-20">
                    
                    <!-- Title -->
                    <h4 class="widget-title">Sinergi</h4>
                    
                    <!-- Footer Widget Post Start -->
                    <div class="footer-widget-post">
                        <div class="post-wrap">
                            
                            <table>
      <?php foreach($sinergi_program as $key => $program) {
          $baris[$program['baris']][$program['kolom']] = $program;
        }
      ?>
      <?php foreach($baris as $baris_program) : ?>
        <tr>
          <td align="center">
            <?php $width = 100/count($baris_program)-count($baris_program)?>
            <?php foreach($baris_program as $key => $program) : ?>
              <span style="display: inline-block; width: <?php echo $width.'%'?>">
                <a href="<?php echo $program['tautan']?>" target="_blank"><img src="<?php echo base_url()?>desa/upload/widget/<?php echo $program['gambar']?>" alt="<?php echo $program['judul']?>" style="width:100%"  /></a>
              </span>
            <?php endforeach; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
                            
                        </div>
                    </div><!-- Footer Widget Post ENd -->
                    
                  
                    
                </div><!-- Footer Widget End -->
                
            </div>
        </div>
    </div><!-- Footer Top Section End -->
   
   
    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-section section bg-dark">
        <div class="container">
            <div class="row">
                
                <!-- Copyright Start -->
                <div class="copyright text-center col">
                    <p><span>&copy; <?= date('Y') ?> </span>
					<span>Tema <a href="https://themeforest.net/item/khobor-modern-magazine-newspaper-html-template/21881979" style="color:#D91125"><strong>Khobor</strong></a> 
					By <a href="https://www.facebook.com/agil.fiyik" style="color:#D91125"><strong>Agil Patria</strong></a></span>
					<span>Ditenagai oleh <a href="https://github.com/OpenSID/OpenSID">OpenSID</a> <?= AmbilVersi(); ?> yang dikembangkan oleh <a href="https://www.facebook.com/groups/OpenSID/" style="color:#D91125"><strong>Komunitas OpenSID</strong></a></span></p>
                </div><!-- Copyright End -->
                
            </div>
        </div>
    </div><!-- Footer Bottom Section End -->