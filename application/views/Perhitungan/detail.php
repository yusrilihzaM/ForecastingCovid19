<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

        </div>
        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
        </div>
        <div class="section-header">
            <h4>Hasil Perhitungan Peramalan Kecamatan <?=$title;?></h4>
        </div>
        <!-- <div class="section-title">
            <h4>Data Kecamatan <?=$title;?></h4>
        </div> -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Grafik</h4>
                    </div>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" data-toggle="tab" href="#positif-1" role="tab">
                                    <i class="fas fa-head-side-virus"></i> <span
                                        class="d-none d-md-inline-block">Positif</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#perawatan-1" role="tab">
                                    <i class="fas fa-bed"></i> <span class="d-none d-md-inline-block">Perawatan</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#sembuh-1" role="tab">
                                    <i class="fas fa-walking"></i> <span class="d-none d-md-inline-block">Sembuh</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#meninggal-1" role="tab">
                                    <i class="fas fa-dizzy"></i> <span class="d-none d-md-inline-block">Meninggal</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3">
                            <div class="tab-pane active" id="positif-1" role="tabpanel">
                                <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                                <div id="chart_positif">
                                </div>
                                <script>
                                var options = {
                                    chart: {
                                        type: 'line',
                                    },
                                    series: [{
                                        name: 'Data Real (At)',
                                        type: 'line',
                                        data: [
                                            <?php
                                                foreach($positif_perhitungan as $at):
                                                
                                            ?>
                                            <?= (double)$at['data_covid'].','?>
                                            <?php
                                            endforeach;?>

                                        ]
                                    }, {
                                        name: 'Data Hasil Forecast (Ft)',
                                        type: 'line',
                                        data: [<?php
                                                foreach($positif_perhitungan as $at):
                                            
                                            ?>
                                            <?=(double)$at['ft'].','?>
                                            <?php
                                            endforeach;?>
                                        ]
                                    }],
                                    dataLabels: {
                                        enabled: false,
                                        enabledOnSeries: [0, 1],


                                    },
                                    xaxis: {

                                        categories: [
                                            <?php
                                                foreach($positif_perhitungan as $at):
                                                    $data=$at['tanggal_covid'];
                                                    echo "'$data'".',';
                                                endforeach;
                                            ?>

                                        ]
                                    }
                                }

                                var chart_positif = new ApexCharts(document.querySelector("#chart_positif"), options);

                                chart_positif.render();
                                </script>
                            </div>
                            <div class="tab-pane" id="perawatan-1" role="tabpanel">
                                <div id="chart_perawatan">
                                </div>
                                <script>
                                var options = {
                                    chart: {
                                        type: 'line'
                                    },
                                    series: [{
                                        name: 'Data Real (At)',
                                        type: 'line',
                                        data: [
                                            <?php
                                                foreach($perawatan_perhitungan as $at):
                                                
                                            ?>
                                            <?= (double)$at['data_covid'].','?>
                                            <?php
                                            endforeach;?>

                                        ]
                                    }, {
                                        name: 'Data Hasil Forecast (Ft)',
                                        type: 'line',
                                        data: [<?php
                                                foreach($perawatan_perhitungan as $at):
                                            
                                            ?>
                                            <?=(double)$at['ft'].','?>
                                            <?php
                                            endforeach;?>
                                        ]
                                    }],
                                    dataLabels: {
                                        enabled: false,
                                        enabledOnSeries: [0, 1],


                                    },
                                    xaxis: {

                                        categories: [
                                            <?php
                                                foreach($perawatan_perhitungan as $at):
                                                    $data=$at['tanggal_covid'];
                                                    echo "'$data'".',';
                                                endforeach;
                                            ?>

                                        ]
                                    }
                                }
                                var chart_perawatan = new ApexCharts(document.querySelector("#chart_perawatan"),
                                    options);

                                chart_perawatan.render();
                                </script>
                            </div>
                            <div class="tab-pane" id="sembuh-1" role="tabpanel">
                                <div id="chart_sembuh">
                                </div>
                                <script>
                                var options = {
                                    chart: {
                                        type: 'line'
                                    },
                                    series: [{
                                        name: 'Data Real (At)',
                                        type: 'line',
                                        data: [
                                            <?php
                                                foreach($sembuh_perhitungan as $at):
                                                
                                            ?>
                                            <?= (double)$at['data_covid'].','?>
                                            <?php
                                            endforeach;?>

                                        ]
                                    }, {
                                        name: 'Data Hasil Forecast (Ft)',
                                        type: 'line',
                                        data: [<?php
                                                foreach($sembuh_perhitungan as $at):
                                            
                                            ?>
                                            <?=(double)$at['ft'].','?>
                                            <?php
                                            endforeach;?>
                                        ]
                                    }],
                                    dataLabels: {
                                        enabled: false,
                                        enabledOnSeries: [0, 1],


                                    },
                                    xaxis: {

                                        categories: [
                                            <?php
                                                foreach($sembuh_perhitungan as $at):
                                                    $data=$at['tanggal_covid'];
                                                    echo "'$data'".',';
                                                endforeach;
                                            ?>

                                        ]
                                    }
                                }
                                var chart_sembuh = new ApexCharts(document.querySelector("#chart_sembuh"),
                                    options);

                                chart_sembuh.render();
                                </script>
                            </div>
                            <div class="tab-pane" id="meninggal-1" role="tabpanel">
                                <div id="chart_meninggal">
                                </div>
                                <script>
                                var options = {
                                    chart: {
                                        type: 'line'
                                    },
                                    series: [{
                                        name: 'Data Real (At)',
                                        type: 'line',
                                        data: [
                                            <?php
                                                foreach($meninggal_perhitungan as $at):
                                                
                                            ?>
                                            <?= (double)$at['data_covid'].','?>
                                            <?php
                                            endforeach;?>

                                        ]
                                    }, {
                                        name: 'Data Hasil Forecast (Ft)',
                                        type: 'line',
                                        data: [<?php
                                                foreach($meninggal_perhitungan as $at):
                                            
                                            ?>
                                            <?=(double)$at['ft'].','?>
                                            <?php
                                            endforeach;?>
                                        ]
                                    }],
                                    dataLabels: {
                                        enabled: false,
                                        enabledOnSeries: [0, 1],


                                    },
                                    xaxis: {

                                        categories: [
                                            <?php
                                                foreach($meninggal_perhitungan as $at):
                                                    $data=$at['tanggal_covid'];
                                                    echo "'$data'".',';
                                                endforeach;
                                            ?>

                                        ]
                                    }
                                }
                                var chart_meninggal = new ApexCharts(document.querySelector("#chart_meninggal"),
                                    options);

                                chart_meninggal.render();
                                </script>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>MEAN ABSOLUTE PERCENTAGE ERROR (MAPE)</h4>
                    </div>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" data-toggle="tab" href="#mape_positif-1" role="tab">
                                    <i class="fas fa-head-side-virus"></i> <span
                                        class="d-none d-md-inline-block">Positif</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#mape_perawatan-1" role="tab">
                                    <i class="fas fa-bed"></i> <span class="d-none d-md-inline-block">Perawatan</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#mape_sembuh-1" role="tab">
                                    <i class="fas fa-walking"></i> <span class="d-none d-md-inline-block">Sembuh</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#mape_meninggal-1" role="tab">
                                    <i class="fas fa-dizzy"></i> <span class="d-none d-md-inline-block">Meninggal</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3">
                            <div class="tab-pane active" id="mape_positif-1" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>MAPE</th>
                                        </tr>
                                        <tr>
                                            <td><?=$mape_positif_perhitungan?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="mape_perawatan-1" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>MAPE</th>
                                        </tr>
                                        <tr>
                                            <td><?=$mape_perawatan_perhitungan?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="mape_sembuh-1" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>MAPE</th>
                                        </tr>
                                        <tr>
                                            <td><?=$mape_sembuh_perhitungan?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="mape_meninggal-1" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>MAPE</th>
                                        </tr>
                                        <tr>
                                            <td><?=$mape_meninggal_perhitungan?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hasil Peramalan Periode Kedepan</h4>
                    </div>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" data-toggle="tab" href="#peramalan_positif-1" role="tab">
                                    <i class="fas fa-head-side-virus"></i> <span
                                        class="d-none d-md-inline-block">Positif</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#peramalan_perawatan-1" role="tab">
                                    <i class="fas fa-bed"></i> <span class="d-none d-md-inline-block">Perawatan</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#peramalan_sembuh-1" role="tab">
                                    <i class="fas fa-walking"></i> <span class="d-none d-md-inline-block">Sembuh</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#peramalan_meninggal-1" role="tab">
                                    <i class="fas fa-dizzy"></i> <span class="d-none d-md-inline-block">Meninggal</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3">
                            <div class="tab-pane active" id="peramalan_positif-1" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>Periode Masa Depan</th>
                                        </tr>

                                        <tr>
                                            <td>1.</td>
                                            <td><?=$masadepan_positif_perhitungan['tanggal_ramal']?></td>
                                            <td><?=$masadepan_positif_perhitungan['data_ramal']?></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="peramalan_perawatan-1" role="tabpanel">
                            <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>Periode Masa Depan</th>
                                        </tr>

                                        <tr>
                                            <td>1.</td>
                                            <td><?=$masadepan_perawatan_perhitungan['tanggal_ramal']?></td>
                                            <td><?=$masadepan_perawatan_perhitungan['data_ramal']?></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="peramalan_sembuh-1" role="tabpanel">
                            <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>Periode Masa Depan</th>
                                        </tr>

                                        <tr>
                                            <td>1.</td>
                                            <td><?=$masadepan_sembuh_perhitungan['tanggal_ramal']?></td>
                                            <td><?=$masadepan_sembuh_perhitungan['data_ramal']?></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="peramalan_meninggal-1" role="tabpanel">
                            <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>Periode Masa Depan</th>
                                        </tr>

                                        <tr>
                                            <td>1.</td>
                                            <td><?=$masadepan_meninggal_perhitungan['tanggal_ramal']?></td>
                                            <td><?=$masadepan_meninggal_perhitungan['data_ramal']?></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Hasil Perhitungan</h4>
                    </div>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" data-toggle="tab" href="#perhitungan_positif-1" role="tab">
                                    <i class="fas fa-head-side-virus"></i> <span
                                        class="d-none d-md-inline-block">Positif</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#perhitungan_perawatan-1" role="tab">
                                    <i class="fas fa-bed"></i> <span class="d-none d-md-inline-block">Perawatan</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#perhitungan_sembuh-1" role="tab">
                                    <i class="fas fa-walking"></i> <span class="d-none d-md-inline-block">Sembuh</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#perhitungan_meninggal-1" role="tab">
                                    <i class="fas fa-dizzy"></i> <span class="d-none d-md-inline-block">Meninggal</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3">
                            <div class="tab-pane active" id="perhitungan_positif-1" role="tabpanel">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>At</th>
                                            <th>Ft</th>
                                            <th>et</th>
                                            <th>Et</th>
                                            <th>AEt</th>
                                            <th>alpha</th>
                                            <th>mape</th>
                                        </tr>
                                        <?php $n0 = 1; ?>
                                        <?php foreach ($positif_perhitungan as $positif_perhitungan) : ?>
                                        <tr>
                                            <td><?= $n0?></td>
                                            <td><?= $positif_perhitungan['tanggal_covid']?></td>
                                            <td><?= $positif_perhitungan['data_covid']?></td>
                                            <td><?= $positif_perhitungan['ft']?></td>
                                            <td><?= $positif_perhitungan['error']?></td>
                                            <td><?= $positif_perhitungan['Et']?></td>
                                            <td><?= $positif_perhitungan['AEt']?></td>
                                            <td><?= $positif_perhitungan['alpha']?></td>
                                            <td><?= $positif_perhitungan['mape']?></td>
                                        </tr>
                                        <?php $n0++ ?>
                                        <?php endforeach ?>
                                    </table>
                                </div>

                            </div>
                            <div class="tab-pane" id="perhitungan_perawatan-1" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>At</th>
                                            <th>Ft</th>
                                            <th>et</th>
                                            <th>Et</th>
                                            <th>AEt</th>
                                            <th>alpha</th>
                                            <th>mape</th>
                                        </tr>
                                        <?php $n0 = 1; ?>
                                        <?php foreach ($perawatan_perhitungan as $perawatan_perhitungan) : ?>
                                        <tr>
                                            <td><?= $n0?></td>
                                            <td><?= $perawatan_perhitungan['tanggal_covid']?></td>
                                            <td><?= $perawatan_perhitungan['data_covid']?></td>
                                            <td><?= $perawatan_perhitungan['ft']?></td>
                                            <td><?= $perawatan_perhitungan['error']?></td>
                                            <td><?= $perawatan_perhitungan['Et']?></td>
                                            <td><?= $perawatan_perhitungan['AEt']?></td>
                                            <td><?= $perawatan_perhitungan['alpha']?></td>
                                            <td><?= $perawatan_perhitungan['mape']?></td>
                                        </tr>
                                        <?php $n0++ ?>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="perhitungan_sembuh-1" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>At</th>
                                            <th>Ft</th>
                                            <th>et</th>
                                            <th>Et</th>
                                            <th>AEt</th>
                                            <th>alpha</th>
                                            <th>mape</th>
                                        </tr>
                                        <?php $n0 = 1; ?>
                                        <?php foreach ($sembuh_perhitungan as $sembuh_perhitungan) : ?>
                                        <tr>
                                            <td><?= $n0?></td>
                                            <td><?= $sembuh_perhitungan['tanggal_covid']?></td>
                                            <td><?= $sembuh_perhitungan['data_covid']?></td>
                                            <td><?= $sembuh_perhitungan['ft']?></td>
                                            <td><?= $sembuh_perhitungan['error']?></td>
                                            <td><?= $sembuh_perhitungan['Et']?></td>
                                            <td><?= $sembuh_perhitungan['AEt']?></td>
                                            <td><?= $sembuh_perhitungan['alpha']?></td>
                                            <td><?= $sembuh_perhitungan['mape']?></td>
                                        </tr>
                                        <?php $n0++ ?>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="perhitungan_meninggal-1" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>At</th>
                                            <th>Ft</th>
                                            <th>et</th>
                                            <th>Et</th>
                                            <th>AEt</th>
                                            <th>alpha</th>
                                            <th>mape</th>
                                        </tr>
                                        <?php $n0 = 1; ?>
                                        <?php foreach ($meninggal_perhitungan as $meninggal_perhitungan) : ?>
                                        <tr>
                                            <td><?= $n0?></td>
                                            <td><?= $meninggal_perhitungan['tanggal_covid']?></td>
                                            <td><?= $meninggal_perhitungan['data_covid']?></td>
                                            <td><?= $meninggal_perhitungan['ft']?></td>
                                            <td><?= $meninggal_perhitungan['error']?></td>
                                            <td><?= $meninggal_perhitungan['Et']?></td>
                                            <td><?= $meninggal_perhitungan['AEt']?></td>
                                            <td><?= $meninggal_perhitungan['alpha']?></td>
                                            <td><?= $meninggal_perhitungan['mape']?></td>
                                        </tr>
                                        <?php $n0++ ?>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </section>
</div>
<script>
/* =========================================================================================== */
</script>