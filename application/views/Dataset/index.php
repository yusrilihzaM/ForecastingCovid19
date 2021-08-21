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
            <h4>Data Kecamatan Seluruh Surabaya</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                        </div>
                        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                        </div>
                        <a href="<?=base_url()?>dataset/add" type="button p-1 mb-2 "
                            class="btn btn-success far fa-plus mx-auto"> Data Covid</a>
                        <br>
                        <br>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Kecamatan</th>
                                    <th>Jumlah</th>
                                    <th>Jenis Data</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php $n0 = 1; ?>
                                <?php foreach ($data as $data) : ?>
                                <tr>
                                    <td style="width: 4%;"><?= $n0?></td>
                                    <td><?= $data['tanggal_covid']?></td>
                                    <td>
                                        <a class="text-dark"
                                            href="<?= base_url(); ?>Dataset/dataperkec/<?= $data['id_kecamatan']; ?>"
                                            style=" color:white;" data-toggle="tooltip" data-placement="right"
                                            title="Lihat data Kecamatan <?= $data['kecamatan'] ?>"><?= $data['kecamatan'] ?></a>
                                    </td>
                                    
                                    <td><?= $data['data_covid']?></td>
                                    <td><?= $data['jenis_data']?></td>
                                    <td style="width: 15%;">
                                        <a class="btn btn-warning  fas fa-edit" href="<?= base_url(); ?>dataset/edit/<?= $data['id_data_covid']; ?>" style=" color:white;"></a>
                                        <a class="btn btn-danger fas fa-trash-alt hapus-news" href="<?= base_url(); ?>dataset/delete/<?= $data['id_data_covid']; ?>"
                                            style="color:white;"></a>
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