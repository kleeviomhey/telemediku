<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery mt-5">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Gallery</h2>
            <p>Check our Gallery</p>
        </div>
        <div class="row no-gutters" data-aos="fade-left">
            <?php foreach ($photo as $p) : ?>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                        <a href="<?= base_url('assets/Bootslander/img/galleryKKM/') . $p['gambar']; ?>" class="venobox" data-gall="gallery-item">
                            <img src="<?= base_url('assets/Bootslander/img/galleryKKM/') . $p['gambar']; ?>" alt="" class="img-fluid">
                        </a>
                        <h5 class="mt-3 ml-2"><?= $p['judul']; ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section><!-- End Gallery Section -->