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
            <h4>Daftar Kecamatan Seluruh Surabaya</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                        </div>
                        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                        </div>

                        <br>
                        <br>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kecamatan</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $n0 = 1; ?>
                                <?php foreach ($kecamatan as $dtkec) : ?>
                                <tr>
                                    <td style="width: 4%;"><?= $n0?></td>
                                    <td>
                                        <a class="text-dark"
                                            href="<?= base_url(); ?>HasilPerhitungan/detail/<?= $dtkec['id_kecamatan']; ?>"
                                            style=" color:white;" data-toggle="tooltip" data-placement="right"
                                            title="Lihat Hasil Perhitungan Kecamatan <?= $dtkec['kecamatan'] ?>"><?= $dtkec['kecamatan'] ?></a>
                                    </td>
                                    <td style="width: 15%;">
                                        <a class="btn btn-info fas fa-eye" data-toggle="tooltip" data-placement="right"
                                            title="Lihat Hasil Perhitungan Kecamatan <?= $dtkec['kecamatan'] ?>"
                                            href="<?= base_url(); ?>HasilPerhitungan/detail/<?= $dtkec['id_kecamatan']; ?>"
                                            style=" color:white;"></a>
                                    </td>
                                </tr>

                                <?php $n0++ ?>
                                <?php endforeach ?>
                            </tbody>


                        </table>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>

    </section>
</div>