<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

        </div>
        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
        </div>
        <div class="section-header">
            <h1>Tambah Data Kecamatan <?=$kecamatan['kecamatan']?></h1>
        </div>


        <div class="row">
            <div class="col-12 ">
                <div class="card">
                    <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                    </div>
                    <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                    </div>
                    <div class="card-header">
                        <h4>Tambah Data Covid 19 Baru</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?=base_url()?>dataset/adddataperkec" class="needs-validation" novalidate="">
                        <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kecamatan</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" readonly="readonly"  disable name="nama_Kecamatan" value="<?=$kecamatan['kecamatan']?>"class="form-control" required autofocus
                                        tabindex="1">
                                        <input type="text" readonly="readonly" hidden  disable name="id_kecamatan" value="<?=$kecamatan['id_kecamatan']?>"class="form-control" required autofocus
                                        tabindex="1">
                                </div>

                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Data</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="jenis_data" class="form-control "required autofocus>
                                        <option selected disabled  value="">Pilih Jenis Data</option>
                                        <option value="Perawatan">Perawatan</option>
                                        <option value="Positif">Positif</option>
                                        <option value="Meninggal">Meninggal</option>
                                        <option value="Sembuh">Sembuh</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Silahkan isi Jenis Data terlebih dahulu
                                    </div>
                                </div>
                            </div>
                           
                          
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
                                <div class="col-sm-12 col-md-7">
                                <input class="form-control" type="date" value="2021-01" id="example-month-input" name="tanggal_covid"  required autofocus>
                                <div class="invalid-feedback">
                                        Silahkan isi Tanggal terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" name="data_covid" class="form-control" required autofocus
                                        tabindex="1">
                                    <div class="invalid-feedback">
                                        Silahkan isi jumlah data terlebih dahulu
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