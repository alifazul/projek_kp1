<?= $this->extend('_template')?>

<?= $this->section('content')?>

<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">
                <h3><?= $t ?></h3>
                <p>Total Surat</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-file"></i>
            </div>
            <a href="<?= base_url('surat') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= $masuk ?></h3>
                <p>Total Surat Masuk</p>
            </div>
            <div class="icon">
                <i class="material-icons">archive</i>
            </div>
            <a href="<?= base_url('surat/masuk') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?=$keluar?></h3>
                <p>Total Surat Keluar</p>
            </div>
            <div class="icon">
                <i class="material-icons">unarchive</i>
            </div>
            <a href="<?= base_url('surat/keluar') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <?php if (session()->get('level')=='Admin') { ?>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= (!empty($user) ? $user : '') ?></h3>
                <p>Total User</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-users"></i>
            </div>
            <a href="<?= base_url('user') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <?php } ?>
</div>
<!-- /.row -->
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i> Charts
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.Left col -->

</div>

<?= $this->endSection()?>

<?= $this->section('js_custom')?>
    <?php 
        $sm = [];
        foreach($g_masuk as $k){
            array_push($sm, $k['total']);
        } 
        
        $sk = [];
        foreach($g_keluar as $k){
            array_push($sk, $k['total']);
        } 
        $sm = array_map('intval', $sm);
        $sk = array_map('intval', $sk);
    ?>
    <script>
        //-------------
        //- BAR CHART -
        //-------------
        let chartData = {
            labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli','Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [
                {
                    label               : 'Surat Keluar',
                    backgroundColor     : 'rgba(210, 214, 222, 1)',
                    borderColor         : 'rgba(210, 214, 222, 1)',
                    pointRadius         : false,
                    pointColor          : 'rgba(210, 214, 222, 1)',
                    pointStrokeColor    : '#c1c7d1',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data                :  [<?php for($i=0; $i < count($sk); $i++){
                                                echo $sk[$i].",";
                                            } ?>]
                },
                {
                    label               : 'Surat Masuk',
                    backgroundColor     : 'rgba(60,141,188,0.9)',
                    borderColor         : 'rgba(60,141,188,0.8)',
                    pointRadius          : false,
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : [<?php for($i=0; $i < count($sm); $i++){
                                                echo $sm[$i].",";
                                            } ?>]
                },
               
            ]
            }

        var chartOptions = {
            maintainAspectRatio : false,
            responsive : true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines : {
                        display : true,
                    }
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                    }, 
                }]
            }
        }
            
        var barchartData = $.extend(true, {}, chartData)
        var temp0 = chartData.datasets[0]
        var temp1 = chartData.datasets[1]
        barchartData.datasets[0] = temp1
        barchartData.datasets[1] = temp0

        var chartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            datasetFill             : false
        }

        const barChartCanvas = $('#barChart').get(0).getContext('2d')
        const chart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barchartData,
            options: chartOptions
        })
        
    </script>
<?= $this->endSection()?>