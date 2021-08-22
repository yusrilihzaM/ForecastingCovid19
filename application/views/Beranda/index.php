<div class="main-content">
    <section class="section">
    <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

</div>
<div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
</div>
        <div class="section-header">
            <h1><?=$title;?></h1>
        </div>
        <div class="section-title">
            <h4>Data Covid 19 di Surabaya</h4>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                    <i class="fas fa-head-side-virus"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Positif</h4>
                        </div>
                        <div class="card-body">
                           <?=$count_positif;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-bed"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Perawatan</h4>
                        </div>
                        <div class="card-body">
                        <?=$count_perawatan;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-walking"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Sembuh</h4>
                        </div>
                        <div class="card-body">
                        <?=$count_sembuh;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-dizzy"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Meninggal</h4>
                        </div>
                        <div class="card-body">
                        <?=$count_meninggal;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Statistik Data Covid 19 di Surabaya</h4>

                    </div>
                    <div class="card-body">
                        <canvas id="myChart" height="182"></canvas>

                    </div>
                </div>
            </div>

        </div> -->

    </section>
</div>