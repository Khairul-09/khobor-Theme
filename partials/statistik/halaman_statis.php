<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>





 <!-- Blog Section Start -->
    <div class="blog-section section pt-10">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-lg-8 col-12 mb-10">
                           <div class="sidebar-block-wrapper">

                                <div class="head feature-head">

                                    <!-- Title -->
                                    <h4 class="title"><?= $heading ?></h4>

                                </div><!-- Sidebar Block Head End -->
                        </div>            
                    <!-- Single Blog Start -->
                    <div class="single-blog mb-10">
					    
                        <div class="blog-wrap">

                   
                            

<?php if ($this->uri->segment(2) == 'informasi_publik'): ?>

		<table class="table table-striped table-bordered" id="info_publik">
			<thead>
				<tr>
          <th>No</th>
					<th>Judul Informasi</th>
          <th>Tahun</th>
          <th>Kategori</th>
          <th>Tanggal Upload</th>
				</tr>
			</thead>
   
		</table>
	

<script type="text/javascript">
$(document).ready(function() {

  var url = "<?= site_url('first/ajax_informasi_publik')?>";
    table = $('#info_publik').DataTable({
      'processing': true,
      'serverSide': true,
      "pageLength": 10,
      'order': [],
      "ajax": {
        "url": url,
        "type": "POST"
      },
      //Set column definition initialisation properties.
      "columnDefs": [
        {
          "targets": [ 0 ], //first column / numbering column
          "orderable": false, //set not orderable
        },
      ],
      'language': {
        'url': BASE_URL + '/assets/bootstrap/js/dataTables.indonesian.lang'
      }
    });

} );

</script>
                          
<?php elseif($this->uri->segment(2) == 'peraturan_desa'):  ?>


  <!-- Post Block Body Start -->
                       
                            <!-- Tampilkan hanya jika 'flash_message' ada -->
			<?php $label = !empty($_SESSION['validation_error']) ? 'alert-danger' : 'alert-success'; ?>
			<?php if ($flash_message): ?>
				<div class="box-header alert <?= $label?> mx-2 rounded-0"><?= $flash_message?></div>
				<?php unset($_SESSION['validation_error']); ?>
			<?php endif; ?>
                          
						
                           
                       <form id="peraturanForm" onsubmit="formAction(); return false;"  class="row">             
                                  <div class="col-md-4 col-12 mb-20">
                                      	<label for="jenis_dokumen">Jenis</label>
											<div class="form-group input-group-sm">
                                      <select class="form-control" name="kategori" id="kategori" onchange="formAction()">
  						<option value="">Semua</option>
  						<?php foreach($kategori as $s): ?>
  							<option value="<?= $s['id'] ?>" <?php selected($s['id'], $kategori_dokumen) ?>><?= $s['nama'] ?></option>
  						<?php endforeach; ?>
  					</select>
										</div>
                                    </div>
                                    
                                    <div class="col-md-4 col-12 mb-20">
                                        <label for="jenis_dokumen">Tahun</label>
											<div class="form-group input-group-sm">
                                       <select class="form-control" name="tahun" id="tahun" onchange="formAction()">
  						<option value="">Semua</option>
  						<?php foreach($tahun as $t): ?>
  							<option value="<?= $t['tahun'] ?>" <?php selected($t['tahun'], $tahun_dokumen) ?> ><?= $t['tahun'] ?></option>
  						<?php endforeach; ?>
  					</select>
										</div>
                                    </div>
                                    
                                  <div class="col-md-4 col-12 mb-20">
								      <label for="email">Tentang</label>
                                    		<div class="input-group input-group-sm">
                   
  					<input type="text" name="tentang" id="tentang" class="form-control" >
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat"><i class="fa fa-search"></i></button>
                    </span>
              </div>
									
                  </div>                  
                                   
                                    
                                  
                                    
                                </form>
 
<table class="table table-striped table-bordered" id="jdih" >
			<thead>
				<tr  >
					<th >Judul Produk Hukum</th>
					<th>Jenis</th>
					<th>Tahun</th>
				</tr>
			</thead>
			<tbody id="tbody-dokumen">
			
			</tbody>
		</table>
<script type="text/javascript">
$(document).ready(function() {
    $('#jdih').DataTable({
    	"dom": 'rt<"bottom"p><"clear">',
    	"destroy": true,
      "paging": false,
      "ordering": false
    });

    get_table();
} );

function get_table() {
  var url = "<?= site_url('first/ajax_table_peraturan')?>";

  $.ajax({
    type: "GET",
    url: url,
    dataType: "JSON",
    success: function(data)
    {
      var html;
      if (data.length == 0)
      {
        html = "<tr ><td colspan='3' align='center'>No Data Available</td></tr>";
      }
      for (var i = 0; i < data.length; i++)
      {
        html += "<tr >"+"<td width='500px'><a style='color:#0099CC' href='<?= site_url('dokumen_web/unduh_berkas/')?>"+data[i].id+"'>"+data[i].nama+"</a></td>"+
        "<td  width='200px'>"+data[i].kategori+"</td>"+
        "<td  width='100px'>"+data[i].tahun+"</td>";
      }
      $('#tbody-dokumen').html(html);
    },
    error: function(err, jqxhr, errThrown)
    {
      console.log(err);
    }
  })
}

function formAction()
{
  $('#tbody-dokumen').html('');
  var url = "<?= site_url('first/filter_peraturan') ?>";
  var kategori = $('#kategori').val();
  var tahun = $('#tahun').val();
  var tentang = $('#tentang').val();

  $.ajax({
    type: "POST",
    url: url,
    data: {
      kategori: kategori,
      tahun: tahun,
      tentang: tentang
    },
    dataType: "JSON",
    success: function(data)
    {
      var html;
      if (data.length == 0)
      {
        html = "<tr><td colspan='3' align='center'>No Data Available</td></tr>";
      }
      for (var i = 0; i < data.length; i++)
      {
        html += "<tr>"+"<td><a href='<?= base_url('desa/upload/dokumen/')?>"+data[i].satuan+"'>"+data[i].nama+"</a></td>"+
        "<td>"+data[i].kategori+"</td>"+
        "<td>"+data[i].tahun+"</td>";
      }
      $('#tbody-dokumen').html(html);
    },
    error: function(err, jqxhr, errThrown)
    {
      console.log(err);
    }
  })
}
</script>
<?php else:?>
<?php echo"Update Template";?>
<?php endif?>
       
	         
						  
<div style="clear:both"></div>
	<?php $this->load->view($folder_themes .'/commons/paging') ?>
                        </div>
                    </div><!-- Single Blog End -->
                   </div>
				
				
    <div class="col-lg-4 col-12 mb-10">
                    <div class="row">
<?php $this->load->view($folder_themes .'/partials/widget') ?>
 <!-- Sidebar Start -->
             </div>
                </div><!-- Sidebar End -->
   
                
            </div><!-- Feature Post Row End -->
            
        </div>
    </div><!-- Blog Section End -->

