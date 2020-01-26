<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>



 <!-- Blog Section Start -->
    <div class="blog-section section pt-10">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-lg-8 col-12 mb-10">
                                   
                    <!-- Single Blog Start -->
                    <div class="single-blog mb-10">
                        <div class="blog-wrap">

                    

                            <!-- Title -->
                            <h3 class="title">Demografi Berdasar <?= $heading ?></h3>
					
                            <!-- Image -->
                          

                            <!-- Content -->
                            <div class="content isi">
<div class="table-responsive">
                            <table class="table table-bordered table-striped">
			<thead>
			<tr>
				<th class="align-middle">No</th>
				<th class="align-middle">Nama Dusun</th>
				<th class="align-middle">Nama Kepala Dusun</th>
				<th class="align-middle">Jumlah RT</th>
				<th class="align-middle">Jumlah KK</th>
				<th class="align-middle">Jiwa</th>
				<th class="align-middle">Lk</th>
				<th class="align-middle">Pr</th>
			</tr>
			</thead>
			<?php if(count($main) > 0) : ?>
				<tbody>

				<?php foreach($main as $data) : ?>
					<tr>
						<td><?= $data['no'] ?></td>
						<td><?= strtoupper(unpenetration(ununderscore($data['dusun']))) ?></td>
						<td><?= strtoupper(unpenetration($data['nama_kadus'])) ?></td>
						<td class="text-right"><?= $data['jumlah_rt'] ?></td>
						<td class="text-right"><?= $data['jumlah_kk'] ?></td>
						<td class="text-right"><?= $data['jumlah_warga'] ?></td>
						<td class="text-right"><?= $data['jumlah_warga_l'] ?></td>
						<td class="text-right"><?= $data['jumlah_warga_p'] ?></td>
					</tr>
				<?php endforeach ?>
				</tbody>
				<tfoot>
				<tr>
					<th colspan="3" class="text-right">TOTAL</th>
					<th class="text-right"><?= $total['total_rt'] ?></th>
					<th class="text-right"><?= $total['total_kk'] ?></th>
					<th class="text-right"><?= $total['total_warga'] ?></th>
					<th class="text-right"><?= $total['total_warga_l'] ?></th>
					<th class="text-right"><?= $total['total_warga_p'] ?></th>
				</tr>
				</tfoot>
			<?php else : ?>
				<tr><td colspan="6" class='text-center'>Daftar masih kosong</td></tr>
			<?php endif; ?>
		</table>
</div>
                            </div>

                           

                        </div>
                    </div><!-- Single Blog End -->
                 </div>
				 
    <div class="col-lg-4 col-12 mb-50">
                    <div class="row">
<?php $this->load->view($folder_themes .'/partials/widget') ?>
 <!-- Sidebar Start -->
    </div>
                </div><!-- Sidebar End -->
   
                
            </div><!-- Feature Post Row End -->
            
        </div>
    </div><!-- Blog Section End -->


