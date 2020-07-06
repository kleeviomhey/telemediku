<!-- ======= Details Section ======= -->
<section id="details" class="details mt-5">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <p class="text-center">Edukasi Covid19</p>
        </div>

        <?php foreach ($artikel as $artkl) : ?>
            <div class="row content my-4">
                <div class="col-md-4" data-aos="fade-right">
                    <a href="<?= base_url('edukasicovid/detailartikel/') . $artkl['id']; ?>">
                        <img src="<?= base_url('assets/Bootslander/img/edukasiCovid19/') . $artkl['gambar']; ?>" class="rounded img-fluid mb-3" style="width: 400px; height:200px" alt="">
                    </a>
                </div>
                <div class="col-md-8" data-aos="fade-up">
                    <a href="<?= base_url('edukasicovid/detailartikel/') . $artkl['id']; ?>">
                        <h2><?= $artkl['judul']; ?></h2>
                    </a>
                    <p class="mb-3">
                        <?= $artkl['paragraf1']; ?>...
                    </p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section><!-- End Details Section -->