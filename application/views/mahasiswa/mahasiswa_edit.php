<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Mahasiswa</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Modules</a></div>
                <div class="breadcrumb-item">Tambah Data</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data</h4>
                        </div>

                        <?= form_open("mahasiswa/edit_save") ?>

                        <div class="card-body">
                            <!-- tambah button -->

                            <input type="hidden" id="id_mhs" name="id_mhs" value="<?= $mahasiswa->id_mhs ?>">

                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?=$mahasiswa->nama ?>">
                            </div>

                            <div class="form-group">
                                <label for="">NIM</label>
                                <input type="text" class="form-control" id="nim" name="nim" value="<?=$mahasiswa->nim ?>">
                            </div>

                            <div class="form-group">
                                <label for="">No_hp</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?=$mahasiswa->no_hp ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?=$mahasiswa->email ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?=$mahasiswa->jurusan ?>">
                            </div>

                           

                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" id="alamat " name="alamat" value="<?=$mahasiswa->alamat ?>">

                            </div>

                            <br>
                        </div>
                        <!-- -------------- -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">simpan</button>
                        </div>
                        <?= form_close() ?>

                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>

                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
</div>
</section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>

