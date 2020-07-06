<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800"><?= $title; ?></h1>
    <hr>
    <h4 class="mb-4 ml-4"><?= $subTitle; ?></h4>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('admin/home/updatefaq'); ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="question">Question</label>
                    <input type="hidden" name="id" id="id" class="form-control" value="<?= $faq['id']; ?>">
                    <input type="text" class="form-control" id="question" name="question" autocomplete="off" value="<?= $faq['question']; ?>">
                    <?= form_error('question', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="answer" class="col-form-label">Answer:</label>
                    <textarea class="form-control" id="answer" name="answer" style="height: 125px;"><?= $faq['answer']; ?></textarea>
                    <?= form_error('answer', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class=" form-group">
                    <button type="submit" class="btn btn-primary">Edit FAQ</button>
                </div>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->