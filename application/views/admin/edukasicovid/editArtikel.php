<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <a href="<?= base_url('admin/educovid') ?>">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    </a>
    <hr>
    <h4 class="mb-4 ml-4"><?= $subTitle; ?></h4>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('admin/educovid/updateartikel'); ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="hidden" name="id" id="id" class="form-control" value="<?= $artikel['id']; ?>">
                    <input type="text" class="form-control" id="judul" name="judul" autocomplete="off" value="<?= $artikel['judul']; ?>">
                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?= base_url('assets/Bootslander/img/edukasiCovid19/') . $artikel['gambar']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-8 mt-5">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                <label class="custom-file-label" for="gambar">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="paragraf1" class="col-form-label">Paragraf 1:</label>
                    <textarea class="form-control" id="paragraf1" name="paragraf1" style="height: 125px;"><?= $artikel['paragraf1']; ?></textarea>
                    <?= form_error('paragraf1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="paragraf2" class="col-form-label">Paragraf 2:</label>
                    <textarea class="form-control" id="paragraf2" name="paragraf2" style="height: 125px;"><?= $artikel['paragraf2']; ?></textarea>
                    <?= form_error('paragraf2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="paragraf3" class="col-form-label">Paragraf 3:</label>
                    <textarea class="form-control" id="paragraf3" name="paragraf3" style="height: 125px;"><?= $artikel['paragraf3']; ?></textarea>
                    <?= form_error('paragraf3', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="paragraf4" class="col-form-label">Paragraf 4:</label>
                    <textarea class="form-control" id="paragraf4" name="paragraf4" style="height: 125px;"><?= $artikel['paragraf4']; ?></textarea>
                    <?= form_error('paragraf4', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="paragraf5" class="col-form-label">Paragraf 5:</label>
                    <textarea class="form-control" id="paragraf5" name="paragraf5" style="height: 125px;"><?= $artikel['paragraf5']; ?></textarea>
                    <?= form_error('paragraf5', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="paragraf6" class="col-form-label">Paragraf 6:</label>
                    <textarea class="form-control" id="paragraf6" name="paragraf6" style="height: 125px;"><?= $artikel['paragraf6']; ?></textarea>
                    <?= form_error('paragraf6', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="paragraf7" class="col-form-label">Paragraf 7:</label>
                    <textarea class="form-control" id="paragraf7" name="paragraf7" style="height: 125px;"><?= $artikel['paragraf7']; ?></textarea>
                    <?= form_error('paragraf7', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="paragraf8" class="col-form-label">Paragraf 8:</label>
                    <textarea class="form-control" id="paragraf8" name="paragraf8" style="height: 125px;"><?= $artikel['paragraf8']; ?></textarea>
                    <?= form_error('paragraf8', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="paragraf9" class="col-form-label">Paragraf 9:</label>
                    <textarea class="form-control" id="paragraf9" name="paragraf9" style="height: 125px;"><?= $artikel['paragraf9']; ?></textarea>
                    <?= form_error('paragraf9', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class=" form-group">
                    <button type="submit" class="btn btn-primary">Add New Artikel</button>
                </div>
            </form>
        </div>
        <!-- <div class="col-lg-4 mt-4">
            <div class="col-sm-6">
                <img src="<?= base_url('assets/Bootslander/img/edukasiCovid19/') . $artikel['gambar']; ?>" class="img-fluid img-thumbnail" alt="Responsive image">
            </div>
        </div> -->
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->