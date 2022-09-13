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
                            <h4>Tambah Data</h4>
                        </div>

                        <?= form_open_multipart("mahasiswa/add_save") ?>

                        <div class="card-body">
                            <!-- tambah button -->


                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>

                            <div class="form-group">
                                <label for="">NIM</label>
                                <input type="text" class="form-control" id="nim" name="nim">
                            </div>

                            <div class="form-group">
                                <label for="">No_hp</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp">
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>

                            <div class="form-group">
                                <label for="">jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan">
                            </div>

                            <div class="form-group">
                                <label for="">Foto_Profile</label>
                                <input type="file" class="form-control" id="foto_profile" name="foto_profile">
                            </div>

                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" id="alamat " name="alamat">

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