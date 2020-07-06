            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <a href="<?= base_url('admin/educovid') ?>">
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                </a>
                <hr>
                <h4 class="mb-4 ml-4"><?= $subTitle; ?></h4>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="container">

                            <div class="section-title text-center mt-3 mb-3">
                                <h1 class="mb-3"><?= $detail['judul']; ?></h1>
                                <img src="<?= base_url('assets/Bootslander/img/edukasiCovid19/') . $detail['gambar']; ?>" class="img-fluid mb-3" alt="Responsive image">
                            </div>

                            <div class="row">
                                <p><?= $detail['paragraf1']; ?></p>
                                <p><?= $detail['paragraf2']; ?></p>
                                <p><?= $detail['paragraf3']; ?></p>
                                <p><?= $detail['paragraf4']; ?></p>
                                <p><?= $detail['paragraf5']; ?></p>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->