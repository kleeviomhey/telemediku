<main id="main">
    <div class="row mt-5">
        <div class="col-md-12 col-md-offset-2">
            <div id="carouselExampleCaptions" class="carousel slide mt-4 position-relative" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/Bootslander/img/collapse/Banner 1-03-03.jpg" class="d-block w-100" alt="...">
                    </div>
                    <?php foreach ($collapse as $coll) : ?>
                        <div class="carousel-item">
                            <img src="<?= base_url('assets/Bootslander/img/collapse/') . $coll['image']; ?>" class="d-block w-100" alt="...">
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- ======= Counts1 Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">
                <p>Kasus COVID-19 di Indonesia</p>
            </div>

            <div class="row" data-aos="fade-up">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="icofont-expressionless"></i>
                        <h5>Positif</h5>
                        <span data-toggle="counter-up"><?= $indonesia['positif']; ?></span>
                        <p>Orang</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="icofont-laughing"></i>
                        <h5>Dalam Perawatan</h5>
                        <span data-toggle="counter-up"><?= $indonesia['dirawat']; ?></span>
                        <p>Orang</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="icofont-simple-smile"></i>
                        <h5>Sembuh</h5>
                        <span data-toggle="counter-up"><?= $indonesia['sembuh']; ?></span>
                        <p>Orang</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="icofont-crying"></i>
                        <h5>Meninggal</h5>
                        <span data-toggle="counter-up"><?= $indonesia['meninggal']; ?></span>
                        <p>Orang</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Counts2 Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="section-title text-center" data-aos="fade-up">
                <p>Kasus COVID-19 di Banten</p>
            </div>

            <div class="row justify-content-center" data-aos="fade-up">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="icofont-expressionless"></i>
                        <h5>Positif</h5>
                        <span data-toggle="counter-up"><?= $banten['positif']; ?></span>
                        <p>Orang</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="icofont-simple-smile"></i>
                        <h5>Sembuh</h5>
                        <span data-toggle="counter-up"><?= $banten['sembuh']; ?></span>
                        <p>Orang</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="icofont-crying"></i>
                        <h5>Meninggal</h5>
                        <span data-toggle="counter-up"><?= $banten['meninggal']; ?></span>
                        <p>Orang</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Video Section ======= -->
    <section id="berita" class="berita">
        <div class="container">

            <div class="section-title text-center" data-aos="fade-up" data-aos-delay="50">
                <p>Cek Kondisi Anda : <br> Deteksi Mandiri Cepat Covid19</p>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-10 text-center">
                    <h2>Deteksi Mandiri Cepat COVID-19 adalah salah satu cara untuk mengetahi apakah Anda memiliki gejala yang memerlukan pemeriksaan dan pengujian lebih lanjut mengenai COVID-19 atau tidak.</h2>
                    <a href="https://www.halodoc.com/tanya-jawab-seputar-virus-corona/" class="btn btn-danger mt-2 badge-pill">
                        <h4 class="pt-1">Cek Sekarang</h4>
                    </a>
                </div>
            </div>

        </div>
    </section><!-- End Video Section -->

    <!-- ======= Table Section ======= -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Provinsi</th>
                                        <th>Positif</th>
                                        <th>Sembuh</th>
                                        <th>Meninggal</th>
                                    </tr>
                                </thead>
                                <?php
                                $no = 1;
                                foreach ($provinsi as $value) : ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?= $no++; ?></th>
                                            <td><?= $value['attributes']['Provinsi']; ?></td>
                                            <td><?= number_format($value['attributes']['Kasus_Posi']); ?></td>
                                            <td><?= number_format($value['attributes']['Kasus_Semb']); ?></td>
                                            <td><?= number_format($value['attributes']['Kasus_Meni']); ?></td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Table Section -->

    <!-- ======= Rumah Sakit Rujukan Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Rumah Sakit</h2>
                <p>Rumah Sakit Rujukan Covid19 Di Banten</p>
            </div>

            <div class="row" data-aos="fade-left">
                <div class="col-lg-6 col-md-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                        <div class="col-my-5 align-self-start">
                            <i class="icofont-hospital" style="color: #ff5828;"></i>
                        </div>
                        <div class="col-my-7">
                            <h3 class="mb-2">RSU Kabupaten Tangerang</h3>
                            <p class="description">Jalan Jend. Ahmad Yani No. 9 RT 001/RW 003 Sukaasih, Tangerang, Banten 15111</p>
                            <a href="tel:0215523507" class="btn btn-success badge-pill" style="font-size: 14px;"><span class="icofont-ui-call icofont-1x mr-2"></span>(021) 5523507</a>
                            <a href="https://www.google.co.id/maps/place/RSU+Kabupaten+Tangerang/@-6.1697843,106.6334226,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f8cebd8d2935:0x1e70fa1111c75f8b!8m2!3d-6.1697843!4d106.6356113?hl=id" class="btn btn-success badge-pill ml-2" style="font-size: 14px;"><span class="icofont-google-map icofont-1x mr-2"></span>Petunjuk Arah</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class=" icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="col-my-5 align-self-start">
                            <i class="icofont-hospital" style="color: #ff5828;"></i>
                        </div>
                        <div class="col-my-7">
                            <h3 class="mb-2">RSUD Dr. Drajat Prawiranegara</h3>
                            <p class="description">Jalan Rumah Sakit Umum No. 1, Kotabaru, Serang, Banten 42112</p>
                            <a href="tel:0254208833" class="btn btn-success badge-pill" style="font-size: 14px;"><span class="icofont-ui-call icofont-1x mr-2"></span>(0254) 208833</a>
                            <a href="https://www.google.co.id/maps/place/RSUD+Dr.+Drajat+Prawiranegara/@-6.1199015,106.1504341,17z/data=!3m1!4b1!4m5!3m4!1s0x2e418ad42bbe38f1:0xe80dfa6bf96a7128!8m2!3d-6.1199015!4d106.1526228?hl=id" class="btn btn-success badge-pill ml-2" style="font-size: 14px;"><span class="icofont-google-map icofont-1x mr-2"></span>Petunjuk Arah</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                        <div class="col-my-5 align-self-start">
                            <i class="icofont-hospital" style="color: #ff5828;"></i>
                        </div>
                        <div class="col-my-7">
                            <h3 class="mb-2">RS Siloam, Kelapa Dua, Tangerang</h3>
                            <p class="description">Jalan Kelapa Dua Raya No. 1001 RT 2/RW 2 Kelapa Dua, Tangerang, Banten 15810</p>
                            <a href="tel:02180524900" class="btn btn-success badge-pill" style="font-size: 14px;"><span class="icofont-ui-call icofont-1x mr-2"></span>(021) 80524900</a>
                            <a href="" class="btn btn-success badge-pill ml-2" style="font-size: 14px;"><span class="icofont-google-map icofont-1x mr-2"></span>Petunjuk Arah</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="col-my-5 align-self-start">
                            <i class="icofont-hospital" style="color: #ff5828;"></i>
                        </div>
                        <div class="col-my-7">
                            <h3 class="mb-2">Ciputra Hospital Citra Raya</h3>
                            <p class="description">Jl. Citra Raya Boulevard No.8, Mekar Bakti, Panongan, Tangerang, Banten 15710</p>
                            <a href="tel:02159405555" class="btn btn-success badge-pill" style="font-size: 14px;"><span class="icofont-ui-call icofont-1x mr-2"></span>(021) 59405555</a>
                            <a href="" class="btn btn-success badge-pill ml-2" style="font-size: 14px;"><span class="icofont-google-map icofont-1x mr-2"></span>Petunjuk Arah</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
                        <div class="col-my-5 align-self-start">
                            <i class="icofont-hospital" style="color: #ff5828;"></i>
                        </div>
                        <div class="col-my-7">
                            <h3 class="mb-2">RS Mitra Keluarga Gading Serpong</h3>
                            <p class="description">Jl. Raya Legok - Karawaci No.20, Medang, Kec. Pagedangan, Tangerang, Banten 15810</p>
                            <a href="tel:02155689111" class="btn btn-success badge-pill" style="font-size: 14px;"><span class="icofont-ui-call icofont-1x mr-2"></span>(021) 55689111</a>
                            <a href="" class="btn btn-success badge-pill ml-2" style="font-size: 14px;"><span class="icofont-google-map icofont-1x mr-2"></span>Petunjuk Arah</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="col-my-5 align-self-start">
                            <i class="icofont-hospital" style="color: #ff5828;"></i>
                        </div>
                        <div class="col-my-7">
                            <h3 class="mb-2">RS Qadr</h3>
                            <p class="description">Komplek Islamic Village, Klp. Dua, Kec. Karawaci, Tangerang, Banten 15810</p>
                            <a href="tel:0215464466" class="btn btn-success badge-pill" style="font-size: 14px;"><span class="icofont-ui-call icofont-1x mr-2"></span>(021) 5464466</a>
                            <a href="" class="btn btn-success badge-pill ml-2" style="font-size: 14px;"><span class="icofont-google-map icofont-1x mr-2"></span>Petunjuk Arah</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
                        <div class="col-my-5 align-self-start">
                            <i class="icofont-hospital" style="color: #ff5828;"></i>
                        </div>
                        <div class="col-my-7">
                            <h3 class="mb-2">RSUD Balaraja</h3>
                            <p class="description">Jl. Rumah Sakit No.88, Tobat, Kec. Balaraja, Tangerang, Banten 15126</p>
                            <a href="tel:02129508250" class="btn btn-success badge-pill" style="font-size: 14px;"><span class="icofont-ui-call icofont-1x mr-2"></span>(021) 29508250</a>
                            <a href="" class="btn btn-success badge-pill ml-2" style="font-size: 14px;"><span class="icofont-google-map icofont-1x mr-2"></span>Petunjuk Arah</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                        <div class="col-my-5 align-self-start">
                            <i class="icofont-hospital" style="color: #ff5828;"></i>
                        </div>
                        <div class="col-my-7">
                            <h3 class="mb-2">RSUD Pakuhaji</h3>
                            <p class="description">Jl. Raya Pakuhaji No.88, Pakuhaji, Kecamatan Pakuhaji, Tangerang, Banten 15570</p>
                            <a href="tel:02159378771" class="btn btn-success badge-pill" style="font-size: 14px;"><span class="icofont-ui-call icofont-1x mr-2"></span>(021) 59378771</a>
                            <a href="" class="btn btn-success badge-pill ml-2" style="font-size: 14px;"><span class="icofont-google-map icofont-1x mr-2"></span>Petunjuk Arah</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
                        <div class="col-my-5 align-self-start">
                            <i class="icofont-hospital" style="color: #ff5828;"></i>
                        </div>
                        <div class="col-my-7">
                            <h3 class="mb-2">Siloam Hospital Lippo Village</h3>
                            <p class="description">Jl. Siloam No.6, Jl. Boulevard Jend. Sudirman No.1600, Bencongan, Kec. Klp. Dua, Kota Tangerang, Banten 15811</p>
                            <a href="tel:02180646900" class="btn btn-success badge-pill" style="font-size: 14px;"><span class="icofont-ui-call icofont-1x mr-2"></span>(021) 80646900</a>
                            <a href="" class="btn btn-success badge-pill ml-2" style="font-size: 14px;"><span class="icofont-google-map icofont-1x mr-2"></span>Petunjuk Arah</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
                        <div class="col-my-5 align-self-start">
                            <i class="icofont-hospital" style="color: #ff5828;"></i>
                        </div>
                        <div class="col-my-7">
                            <h3 class="mb-2">RSUD Banten</h3>
                            <p class="description">Jalan Syeh Nawawi Al Bantani, Kelurahan Banjarsari, Kecamatan Cipocok Jaya, Banjarsari, Serang, Banjarsari, Kec. Cipocok Jaya, Kota Serang, Banten 42123</p>
                            <a href="tel:02548490911" class="btn btn-success badge-pill" style="font-size: 14px;"><span class="icofont-ui-call icofont-1x mr-2"></span>(0254) 8490911</a>
                            <a href="" class="btn btn-success badge-pill ml-2" style="font-size: 14px;"><span class="icofont-google-map icofont-1x mr-2"></span>Petunjuk Arah</a>
                        </div>
                    </div>
                </div>

            </div>
    </section><!-- End Rumah Sakit Rujukan Section -->

    <!-- ======= Video Section ======= -->
    <section id="berita" class="berita">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <p>Berita</p>
            </div>

            <div class="row" data-aos="fade-left">
                <?php foreach ($video as $value) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $value['id']['videoId']; ?>?rel=0" allowfullscreen></iframe>
                        </div>
                        <span class="badge badge-danger"><?= $value['snippet']['channelTitle']; ?></span><br>
                        <span class="badge badge-success"><?= $value['snippet']['publishedAt']; ?></span>
                        <h4><?= $value['snippet']['title']; ?></h4>
                    </div>
                <?php endforeach; ?>
            </div>



        </div>
    </section><!-- End Video Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p>Pertanyaan Yang Sering Ditanyakan</p>
            </div>

            <div class="faq-list">
                <ul>
                    <?php $i = 1; ?>
                    <?php foreach ($faq as $f) : ?>
                        <li data-aos="fade-up" data-aos-delay="<?= $i; ?>00">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapsed" href="#faq-list-<?= $i; ?>"><?= $f['question']; ?><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-<?= $i; ?>" class="collapse" data-parent=".faq-list">
                                <p>
                                    <?= $f['answer']; ?>
                                </p>
                            </div>
                        </li>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </ul>
            </div>

        </div>
    </section><!-- End F.A.Q Section -->


</main><!-- End #main -->