

<!-- widget Menu-->


 <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head video-head">

                                    <!-- Title -->
                                    <h4 class="title"><?="Wilayah ".ucwords($this->setting->sebutan_desa)?></h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">
								<!-- widget Peta Wilayah Desa -->


 
        <div id="map_wilayah" style="height:200px;"></div>
		  <button class="btn btn-success btn-block"><a href="https://www.openstreetmap.org/#map=15/<?=$data_config['lat']."/".$data_config['lng']?>">Buka peta</a></button>
        
   

 
                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

























<script>
  //Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
  <?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
    var posisi = [<?=$data_config['lat'].",".$data_config['lng']?>];
    var zoom = <?=$data_config['zoom'] ?: 10?>;
  <?php else: ?>
    var posisi = [-1.0546279422758742,116.71875000000001];
    var zoom = 10;
  <?php endif; ?>
  //Style polygon
  var style_polygon = {
    stroke: true,
    color: '#FF0000',
    opacity: 1,
    weight: 2,
    fillColor: '#8888dd',
    fillOpacity: 0.5
  };
  var wilayah_desa = L.map('map_wilayah').setView(posisi, zoom);

  //Menampilkan BaseLayers Peta
  var defaultLayer = L.tileLayer.provider('OpenStreetMap.Mapnik').addTo(wilayah_desa);

  var baseLayers = {
    'OpenStreetMap': defaultLayer,
    'Mapbox Streets Satellite' : L.tileLayer('https://api.mapbox.com/v4/mapbox.streets-satellite/{z}/{x}/{y}@2x.png?access_token=<?=$this->setting->google_key?>', {attribution: '<a href="https://www.mapbox.com/about/maps">© Mapbox</a> <a href="https://openstreetmap.org/copyright">© OpenStreetMap</a>'}),
  };

  L.control.layers(baseLayers, null, {position: 'topright', collapsed: true}).addTo(wilayah_desa);

  <?php if (!empty($data_config['path'])): ?>
    var polygon_desa = <?= $data_config['path']; ?>;
    var kantor_desa = L.polygon(polygon_desa, style_polygon).bindTooltip("Wilayah Desa").addTo(wilayah_desa);
    wilayah_desa.fitBounds(kantor_desa.getBounds());
  <?php endif; ?>
</script>
