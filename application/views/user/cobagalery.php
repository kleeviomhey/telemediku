<!-- ======= Details Section ======= -->
<section id="details" class="details mt-5">
    <div class="container">
        <?php foreach ($photo as $p) : ?>
            <div class="row content">
                <div class="col-md-4" data-aos="fade-right">
                    <a href="<?= base_url('assets/Bootslander/img/galleryKKM/') . $p['gambar']; ?>" class="venobox" data-gall="gallery-item">
                        <img src="<?= base_url('assets/Bootslander/img/galleryKKM/') . $p['gambar']; ?>" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-8 pt-4" data-aos="fade-up">
                    <h3><?= $p['judul']; ?></h3>
                    <p class="font-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="icofont-check"></i> Iure at voluptas aspernatur dignissimos doloribus repudiandae.</li>
                        <li><i class="icofont-check"></i> Est ipsa assumenda id facilis nesciunt placeat sed doloribus praesentium.</li>
                    </ul>
                    <p>
                        Voluptas nisi in quia excepturi nihil voluptas nam et ut. Expedita omnis eum consequatur non. Sed in asperiores aut repellendus. Error quisquam ab maiores. Quibusdam sit in officia
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section><!-- End Details Section -->