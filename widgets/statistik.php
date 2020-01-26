<script src="<?= base_url('assets/js/highcharts/highcharts.js')?>"></script>
<script src="<?= base_url('assets/js/highcharts/highcharts-more.js')?>"></script>
<script src="<?= base_url('assets/js/highcharts/exporting.js')?>"></script>

<!-- widget Menu-->


 <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12"  style="margin-bottom:10px;">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head video-head">

                                    <!-- Title -->
                                    <h4 class="title"><a href="<?= site_url("first/statistik/1")?>">Statistik <?= ucwords($this->setting->sebutan_desa),' ', $desa["nama_desa"];?></a></h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">
								
<script type="text/javascript">
    $(function () {
        var chart_widget;
        $(document).ready(function () {
          // Build the chart
            chart_widget = new Highcharts.Chart({
                chart: {
                    renderTo: 'container_widget',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                  text: 'Jumlah Penduduk'
                },
          yAxis: {
                title: {
                  text: 'Jumlah'
                }
          },
          xAxis: {
            categories:
            [
            <?php foreach($stat_widget as $data): ?>
              <?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
                ['<?= $data['jumlah']?> <br> <?= $data['nama']?>'],
              <?php endif; ?>
            <?php endforeach; ?>
            ]
          },
          legend: {
            enabled:false
          },
          plotOptions: {
            series: {
              colorByPoint: true
            },
            column: {
              pointPadding: 0,
              borderWidth: 0
            }
          },
            series: [{
                type: 'column',
                name: 'Populasi',
                data: [
            <?php foreach ($stat_widget as $data): ?>
              <?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
                ['<?= $data['nama']?>',<?= $data['jumlah']?>],
              <?php endif; ?>
            <?php endforeach; ?>
                ]
            }]
          });
        });

    });
    </script>
    <div id="container_widget" style="width: 100%; height: 150px; margin: 0 auto"></div>
                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

