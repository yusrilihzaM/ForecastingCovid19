<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

        </div>
        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
        </div>
        <div class="section-header">
            <h1><?=$title;?></h1>
        </div>


        <div class="row">
            <div class="col-12 ">
                <div class="card">
                    <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                    </div>
                    <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                    </div>
                    <div class="card-header">
                        <h4>Tambah Data Kecamatan Baru</h4>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="<?=base_url()?>kecamatan/edit" class="needs-validation" novalidate="">
                    <input type="text" name="id_kecamatan" class="form-control" hidden disable required autofocus tabindex="1" value="<?= $kecamatan['id_kecamatan']?>">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama
                                    kecamatan</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="kecamatan" class="form-control" required autofocus tabindex="1" value="<?= $kecamatan['kecamatan']?>">
                                    <div class="invalid-feedback">
                                    Silahkan isi nama kecamatan terlebih dahulu
                                </div>
                                </div>
                                
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </section>
</div>