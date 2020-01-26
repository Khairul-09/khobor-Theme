<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<?php 
	if ($this->uri->segment(2) == 'sub_gallery') {
	    $paging_page = 'sub_gallery';
		$id_page =$parrent['id']."/";
		$pages = array();
		for($i=$paging->start_link; $i<=$paging->end_link; $i++) {
			array_push($pages, $i);
		}
	}elseif ($this->uri->segment(2) == 'gallery') {
	    $paging_page = 'gallery';
		$id_page ='';
		$pages = array();
		for($i=$paging->start_link; $i<=$paging->end_link; $i++) {
			array_push($pages, $i);
		}
	}elseif ($this->uri->segment(2) == 'arsip') {
	    $paging_page = 'arsip';
		$id_page ='';
		$pages = array();
		for($i=$paging->start_link; $i<=$paging->end_link; $i++) {
			array_push($pages, $i);
		}
	}
?>
<?php if((int) $paging->end_link > 1) : ?>

<span>Halaman <?= $p ?> dari <?= $paging->end_link ?></span>
<div class="page-pagination-2 text-center">
                        <ul>
				<?php if($paging->start_link) : ?>
					<li >
						<a href="<?= site_url('first/'.$paging_page.'/'.$id_page.$paging->start_link)?>"  title="Halaman Awal">
							<i class="fa fa-angle-double-left"></i>
						</a>
					</li>
				<?php endif ?>
				
			
				
				
				
				<?php foreach ($pages as $i): ?>
					<li class="<?php ($p == $i) and print('active') ?>">
						<a href="<?= site_url('first/'.$paging_page.'/'."$id_page$i". $paging->suffix) ?>" title="Halaman <?= $i ?>"><?= $i ?></a>
					</li>
				<?php endforeach; ?>
				
				<?php if($paging->next) : ?>
					<li >
						<a href="<?= site_url('first/'.$paging_page.'/'."$id_page".$paging->next . $paging->suffix)?>"  title="Halaman Selanjutnya">
							<i class="fa fa-angle-right"></i>
						</a>
					</li>
				<?php endif ?>
				
                <?php if($paging->end_link) : ?>
					<li >
						<a href="<?= site_url('first/'.$paging_page.'/'."$id_page".$paging->end_link . $paging->suffix)?>"  title="Halaman Akhir">
							<i class="fa fa-angle-double-right"></i>
						</a>
					</li>
				<?php endif ?>
                        </ul>
                    </div>
					
					

<?php endif ?>