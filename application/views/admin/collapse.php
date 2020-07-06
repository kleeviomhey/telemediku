            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

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
                    <div class="col-lg-6">

                        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newCollapseModal"><i class="fas fa-plus mr-2"></i>Add New Collapse</a>

                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th></th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($collapse as $coll) : ?>
                                    <tr>
                                        <th scope=" row"><?= $i; ?></th>
                                        <td><img src="<?= base_url('assets/Bootslander/img/collapse/') . $coll['image']; ?>" class="rounded float-left" style="width: 150px; height:80px" alt="..."></td>
                                        <td><?= $coll['image'] ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/home/editCollapse/' . $coll['id']); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('admin/home/deleteCollapse/' . $coll['id']); ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fa fa-trash"></i></a>
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
                            <h5 class="modal-title" id="newCollapseModalLabel">Add New Collapse</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/home/add_collapse'); ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                        <p>max 2mb</p>
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