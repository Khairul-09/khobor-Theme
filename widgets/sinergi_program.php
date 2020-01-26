<!-- widget Menu-->


 <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head video-head">

                                    <!-- Title -->
                                    <h4 class="title"> Sinergi Program</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">
								
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
                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>


