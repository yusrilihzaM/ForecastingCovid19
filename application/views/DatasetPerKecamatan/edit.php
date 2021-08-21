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
                        <h4>Edit Data Covid 19</h4>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="<?=base_url()?>dataset/editPerKec" class="needs-validation" novalidate="">
                            <div class="form-group row mb-4">
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" hidden disable name="id_data_covid" class="form-control"
                                        value="<?=$data['id_data_covid']?>">
                                </div>

                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Data</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="jenis_data" class="form-control " value="coba" required autofocus>
                                        <option disabled value="">Pilih Jenis Data</option>
                                        <?php 
                                       
                                        foreach ($jenis_data as $jenis_data) : ?>
                                        <?php
                                                if ($jenis_data==$data["jenis_data"]){
                                                    echo "<option value='$jenis_data' selected> $jenis_data</option>";
                                                }else{
                                                    echo "<option value='$jenis_data'> $jenis_data</option>";
                                                }
                                                ?>
                                        <?php endforeach ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Silahkan isi Jenis Data terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kecamatan</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="id_kecamatan" class="form-control " required autofocus>
                                        <option selected disabled value="">Pilih Kecamatan</option>
                                        <?php foreach ($kecamatan as $kecamatan) : ?>
                                        <?php
                                                $id_kecamatan=$kecamatan['id_kecamatan'];
                                                $kec=$kecamatan['kecamatan'];
                                                if ($kecamatan['kecamatan']==$data["kecamatan"]){
                                                    echo "<option value='$id_kecamatan' selected> $kec</option>";
                                                }else{
                                                    echo "<option value='$id_kecamatan'> $kec</option>";
                                                }
                                                ?>
                                        <?php endforeach ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Silahkan isi Kecamatan terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
                                <div class="col-sm-12 col-md-7">
                                    <input class="form-control" type="date" value="<?=$data['tanggal_covid']?>"
                                        id="example-month-input" name="tanggal_covid" required autofocus>
                                    <div class="invalid-feedback">
                                        Silahkan isi Tanggal terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" name="data_covid" value="<?=$data['data_covid']?>"
                                        class="form-control" required autofocus tabindex="1">
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