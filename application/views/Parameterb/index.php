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
            <h4>Parameter Beta saat ini : <?=$beta[0]['beta'];?></h4>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                    </div>
                    <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                    </div>
                    <div class="card-body ">
                        <div class="section-title mt-0">Ubah nilai parameter</div>
                        <form method="POST" action="<?=base_url()?>Parameterb">
                            <select name="beta" class="form-control ">
                                <option selected disabled>Pilih Parameter Beta</option>
                                <option value="0.1">0.1</option>
                                <option value="0.2">0.2</option>
                                <option value="0.3">0.3</option>
                                <option value="0.4">0.4</option>
                                <option value="0.5">0.5</option>
                                <option value="0.6">0.6</option>
                                <option value="0.7">0.7</option>
                                <option value="0.8">0.8</option>
                                <option value="0.9">0.9</option>
                            </select>

                            <?= form_error('beta', '<small class="text-danger pl-3">', '</small>'); ?>
                            <button type="submit" class="btn btn-success mt-2 d-flex justify-content-center">Simpan
                                Perubahan</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </section>
</div>