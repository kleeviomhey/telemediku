<!-- ======= Details Section ======= -->
<section id="details" class="details mt-5">
    <div class="container">

        <div class="section-title text-center" data-aos="fade-up">
            <h1 class="mb-3"><?= $detail['judul']; ?></h1>
            <img src="<?= base_url('assets/Bootslander/img/edukasiSosialEkonomi/') . $detail['gambar']; ?>" class="img-fluid" alt="Responsive image">
        </div>

        <div class="row " data-aos="fade-up">
            <p><?= $detail['paragraf1']; ?></p>
            <p><?= $detail['paragraf2']; ?></p>
            <p><?= $detail['paragraf3']; ?></p>
            <p><?= $detail['paragraf4']; ?></p>
            <p><?= $detail['paragraf5']; ?></p>
        </div>

    </div>
</section><!-- End Details Section -->