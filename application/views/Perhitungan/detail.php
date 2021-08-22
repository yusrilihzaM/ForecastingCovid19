<?php
echo($mape_positif_perhitungan);
die;?>




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
                                <p class="mb-0">
                                    positif
                                </p>
                            </div>
                            <div class="tab-pane" id="perawatan-1" role="tabpanel">
                                <p class="mb-0">
                                    perawatan
                                </p>
                            </div>
                            <div class="tab-pane" id="sembuh-1" role="tabpanel">
                                <p class="mb-0">
                                    sembuh
                                </p>
                            </div>
                            <div class="tab-pane" id="meninggal-1" role="tabpanel">
                                <p class="mb-0">
                                    meninggal
                                </p>
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
                                <p class="mb-0">
                                    positif
                                </p>
                            </div>
                            <div class="tab-pane" id="perawatan-1" role="tabpanel">
                                <p class="mb-0">
                                    perawatan
                                </p>
                            </div>
                            <div class="tab-pane" id="sembuh-1" role="tabpanel">
                                <p class="mb-0">
                                    sembuh
                                </p>
                            </div>
                            <div class="tab-pane" id="meninggal-1" role="tabpanel">
                                <p class="mb-0">
                                    meninggal
                                </p>
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
                                <a class="nav-link active" data-toggle="tab" href="#perhitungan-positif-1" role="tab">
                                    <i class="fas fa-head-side-virus"></i> <span
                                        class="d-none d-md-inline-block">Positif</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#perhitungan-perawatan-1" role="tab">
                                    <i class="fas fa-bed"></i> <span class="d-none d-md-inline-block">Perawatan</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#perhitungan-sembuh-1" role="tab">
                                    <i class="fas fa-walking"></i> <span class="d-none d-md-inline-block">Sembuh</span>
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="perhitungan-#meninggal-1" role="tab">
                                    <i class="fas fa-dizzy"></i> <span class="d-none d-md-inline-block">Meninggal</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3">
                            <div class="tab-pane active" id="perhitungan-positif-1" role="tabpanel">
                                <table class=" display table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>At</th>
                                            <th>Ft</th>
                                            <th>et</th>
                                            <th>Et</th>
                                            <th>AEt</th>
                                            <th>Alpha</th>
                                            <th>MAPE</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $n0 = 1; ?>
                                        <?php foreach ($positif_perhitungan as $data) : ?>
                                        <tr>
                                            <td><?= $n0?></td>
                                            <td><?= $data['tanggal_covid']?></td>
                                            <td><?= $data['data_covid']?></td>
                                            <td><?= $data['ft']?></td>
                                            <td><?= $data['error']?></td>
                                            <td><?= $data['Et']?></td>
                                            <td><?= $data['AEt']?></td>
                                            <td><?= $data['alpha']?></td>
                                            <td><?= $data['mape']?></td>
                                        </tr>
                                        <?php $n0++ ?>
                                        <?php endforeach ?>

                                    </tbody>


                                </table>
                            </div>
                            <div class="tab-pane" id="perhitungan-perawatan-1" role="tabpanel">
                                <table class="display table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>At</th>
                                            <th>Ft</th>
                                            <th>et</th>
                                            <th>Et</th>
                                            <th>AEt</th>
                                            <th>Alpha</th>
                                            <th>MAPE</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $n0 = 1; ?>
                                        <?php foreach ($positif_perhitungan as $data) : ?>
                                        <tr>
                                            <td><?= $n0?></td>
                                            <td><?= $data['tanggal_covid']?></td>
                                            <td><?= $data['data_covid']?></td>
                                            <td><?= $data['ft']?></td>
                                            <td><?= $data['error']?></td>
                                            <td><?= $data['Et']?></td>
                                            <td><?= $data['AEt']?></td>
                                            <td><?= $data['alpha']?></td>
                                            <td><?= $data['mape']?></td>
                                        </tr>
                                        <?php $n0++ ?>
                                        <?php endforeach ?>

                                    </tbody>


                                </table>
                            </div>
                            <div class="tab-pane" id="perhitungan-sembuh-1" role="tabpanel">
                                <p class="mb-0">
                                    sembuh
                                </p>
                            </div>
                            <div class="tab-pane" id="perhitungan-meninggal-1" role="tabpanel">
                                <p class="mb-0">
                                    meninggal
                                </p>
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