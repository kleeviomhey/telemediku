            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
                        </div>
                        <!-- <?php if ($this->session->flashdata('message')) : ?>
                            <?= $this->session->flashdata('message'); ?>
                        <?php endif; ?> -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <a href="<?= base_url('admin/educovid/addnewartikel'); ?>" class="btn btn-primary mb-3"><i class="fas fa-plus mr-2"></i>Add New Artikel</a>

                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">No.</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Oleh</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col" colspan="3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($artikel as $artkl) : ?>
                                    <tr>
                                        <th scope=" row"><?= $i; ?></th>
                                        <td><img src="<?= base_url('assets/Bootslander/img/edukasiCovid19/') . $artkl['gambar']; ?>" class="rounded float-left" style="width: 150px; height:80px" alt="..."></td>
                                        <td><?= $artkl['judul'] ?></td>
                                        <td><?= $artkl['oleh'] ?></td>
                                        <td>
                                            <?= date('d F Y',  $artkl['tanggal']); ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('admin/educovid/detailArtikel/' . $artkl['id']); ?>" class="btn btn-sm btn-success"><i class="fas fa-search-plus"></i></a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('admin/educovid/editArtikel/' . $artkl['id']); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('admin/educovid/deleteArtikel/' . $artkl['id']); ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



            <!-- Modal -->
            <div class="modal fade" id="newCollapseModal" tabindex="-1" role="dialog" aria-labelledby="newCollapseModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newCollapseModalLabel">Add New Artikel</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/educovid/addnewartikel'); ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" id="judul" name="judul" autocomplete="off">
                                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label><br>
                                        <input type="file" name="gambar" class="form-control" id="gambar">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>