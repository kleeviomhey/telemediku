<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <a href="<?= base_url('admin/galerykkm') ?>">
        <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    </a>
    <hr>
    <h4 class="mb-4 ml-4"><?= $subTitle; ?></h4>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('admin/galerykkm/updatephoto'); ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="hidden" name="id" id="id" class="form-control" value="<?= $photo['id']; ?>">
                    <input type="text" class="form-control" id="judul" name="judul" autocomplete="off" value="<?= $photo['judul']; ?>">
                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?= base_url('assets/Bootslander/img/galleryKKM/') . $photo['gambar']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-8 mt-5">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                <label class="custom-file-label" for="gambar">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="paragraf1" class="col-form-label">Paragraf 1:</label>
                    <textarea class="form-control" id="paragraf1" name="paragraf1" style="height: 125px;"><?= $photo['paragraf1']; ?></textarea>
                    <?= form_error('paragraf1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div> -->
                <div class=" form-group">
                    <button type="submit" class="btn btn-primary">Edit Photo</button>
                </div>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->