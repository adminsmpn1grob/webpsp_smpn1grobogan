<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile SMPN 1 GROBOGAN</title>
    <link rel="icon" type="image/x-icon" href="assets/img/LOGO_SMP.png" />
    <link rel="stylesheet" href="styles.css">
    <link href="<?php echo base_url('assets/css/styles-1.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/styles.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mystyles.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/js/Script.js');?>" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url() ?> ">
                <img src=" img/LOGO_SMP.png" width="30" height="30" class="d-inline-block align-top" alt="">
                SMPN 1 GROBOGAN
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

<<<<<<< HEAD
            <div class="collapse navbar-collapse" id="navbarSupportedContent" align-rigth="80px">
                <ul class="navbar-nav ml-auto" padding-left="50px">
=======
            <div class="collapse navbar-collapse" id="navbarSupportedContent" padding-left="80px">
                <ul class="navbar-nav ml-auto">
>>>>>>> c0b0b597229801742cfac596d6b4b01dd2636bd9
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>">Home</a></li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url() ?>Welcome/profile">Profile <span class="sr-only"> </span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url() ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Modul
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url() ?>Welcome/modul">Modul Ajar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url() ?>Welcome/video7">Modul Kelas 7</a>
                            <a class="dropdown-item" href="<?php echo base_url() ?>Welcome/video8">Modul Kelas 8</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>Welcome/produk">Produk</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>Welcome/tentang">Tentang</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section id="home">
            <h1>SELAMAT DATANG DI PROFIL</h1>
            <h2>SMPN 1 GROBOGAN</h2>
            <p>SEKOLAH SANG JUARA</p>
            <!-- <button><a href="#profile">TENTANG SEKOLAH</a></button> -->
        </section>


        <section id="profile" class="card">
            <h2>Profile</h2>
            <table>
                <tr>
                    <th>NPSN</th>
                    <th>Status Sekolah</th>
                    <th>Bentuk Pendidikan</th>
                    <th>Alamat</th>
                    <th>Desa / Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten</th>
                    <th>Propinsi</th>
                </tr>
                <tr>
                    <td>20313920</td>
                    <td>Negeri</td>
                    <td>SMP</td>
                    <td>JL KASATRIAN 32 A</td>
                    <td>GROBOGAN</td>
                    <td>Kec. GROBOGAN</td>
                    <td>Kab. GROBOGAN</td>
                    <td>Prop. JAWA TENGAH</td>
                </tr>
            </table>
        </section>

        <section id="visimisi" class="card">
            <h2>Visi dan misi</h2>
            <div class="text1">
                <div class="visi">
                    <h3><strong>Visi</strong></h3>
                    <p><i>Berprestasi Berbudi Pekerti dan Berwawasan Lingkungan
                        </i></p>
                </div>
                <div class="misi">
                    <h3><strong>Misi</strong></h3>
                    <p><i>1. Mewujudkan warga sekolah yang berprestasi baik akademik maupun non akademik
                          2. Mengembangkan potensi siswa yang kreatif, inovatif, dan berkualitas.
                          3. Mengembangkan proses pembelajaran dan bimbingan secara efektif untuk mengoptimalkan potensi yang dimiliki siswa.
                          4. Mengutamakan kerjasama (team work) dalam menyelesaikan tugas-tugas pendidikan.
                          5. Membentuk dan melatih peserta didik untuk berketerampilan yang mampu berkompetensi di tingkat Kabupaten, Provinsi dan Nasional.
                    </i></p>
                </div>
            </div>
            <!-- <div class="text2">
                <h3><u>TUJUAN SEKOLAH</u></h3>
                <ol type="1">
                    <li>Memenuhi 100% standar nasional pendidikan.</li>
                    <li>Menghasilkan lulusan yang mampu mandiri dan dapat mengisi lapangan pekerjaan dunia usaha dan
                        industry serta mampu melanjutkan pendidikan ke jenjang yang lebih tinggi.</li>
                    <li>Menghasilkan lulusan yang mampu menguasai teknologi.</li>
                    <li>Menghasilkan manajemen sekolah sesuai dengan prinsip Total Quality Control dan Total Quality
                        Manajemen.</li>
                </ol>
                <h3><u>Motto</u></h3>
                <p>RELIGIUS, DISIPLIN, KUALITAS DAN PROFESIONAL</p>
            </div> -->
        </section>

        <section id="sejarah" class="card">
            <h2>Sejarah</h2>
            <div class="text-sejarah">

                <p>SMP Negeri 1 Grobogan merupakan salah satu sekolah sekolah yang negeri di Grobogan yang mempunyai peserta didik paling besar, SMP Negeri 1 Grobogan juga merupakan sekolah yang sudah lama berdiri yaitu sejak tahun 1980, banyak prestasi yang sudah ditorehkan oleh peserta didik SMPN 1 Grobogan.</p>
                <!-- <p>Pada tahun 1991 s/d 1994 dipercaya melaksanakan Program Pengembangan Sekolah Seutuhnya (PSS) dibawah
                    binaan Pusat Pengembangan Penataran Guru Teknologi (PPPG Teknologi) Bandung, kemudian pada tahun
                    pelajaran 1994/1995 mulai melaksanakan Pendidikan Sistem Ganda (PSG) di 54 Dunia Usaha/Dunia
                    Industri
                    baik di Kalimantan Selatan, Kalimantan Tengah maupun di IPTN Bandung. Inilah yang memberikan
                    keyakinan
                    untuk mampu bersaing pada pasar bebas tahun 2003 dan pada tahun 2006/2007 sekolah menggunakan Sistem
                    Manajemen Mutu ISO 9001 : 2008 demi mewujudkan tujuan institusi untuk menuju kemandirian sekolah
                    melalui
                    proses perencanaan, pengorganisasian, pelaksanaan dan evaluasi dengan memanfaatkan sumber daya yang
                    ada
                    secara maksimal dalam meningkatkan kemampuan keterampilan siswa dalam memenuhi tenaga kerja pada
                    dunia
                    usaha/industri dan menguasai iptek.</p>
                <p>Setelah melalui perjuangan sebagai sekolah yang memenuhi Standar Nasional, tahun 2009 s/d 2013 SMK
                    Negeri
                    5 Banjarmasin kembali memperoleh kepercayaan pemerintah menjadi salah satu dari 90 SMK se-Indonesia
                    dan
                    memperoleh bantuan-bantuan baik untuk perbaikan dan pembangunan fisik gedung, pengadaan peralatan
                    dan
                    juga pengembangan-pengembangan kemampuan pendidik dan kesiswaan.</p>
                <p>Hasil dari berbagai pengembangan dan pembangunan yang dilaksanakan SMK Negeri 5 Banjarmasin secara
                    berkelanjutan dari tahun ke tahun hingga tahun kelulusan saat ini, SMK Negeri 5 Banjarmasin telah
                    melahirkan alumni-alumni yang sukses baik mereka yang bekerja di kantor-kantor pemerintah, bekerja
                    di
                    industri-industri swasta nasional dan internasional maupun mereka yang sukses berwirausaha
                    mengembangkan
                    usahanya sendiri.</p>
                <p>Selama kurun waktu tersebut yang menjabat menjadi Kepala Sekolah di SMK Negeri 5 Banjarmasin adalah
                    sebagai berikut :</p>

                <p>Guna kelancaran operasional pendidikan di SMK Negeri 5, Kepala Sekolah dibantu oleh Majelis Guru,
                    Tata Usaha dan Komite Sekolah yang sangat berperan aktif diantarannya</p> -->
            </div>
        </section>

        <section id="gallery" class="card">
            <h1>Gallery</h1>
            <div class="img-container">
                <div class="img-card">
                    <img loading="lazy" src="assets/img/mapsi.jpg" alt="">
                </div>
                <div class="img-card">
                    <img loading="lazy" src="assets/img/1.jpg" alt="">
                </div>
                <div class="img-card">
                    <img loading="lazy" src="assets/img/2.jpg" alt="">
                </div>
                <div class="img-card">
                    <img loading="lazy" src="assets/img/3.jpg" alt="">
                </div>
                <div class="img-card">
                    <img loading="lazy" src="assets/img/4.jpg" alt="">
                </div>
                <div class="img-card">
                    <img loading="lazy" src="assets/img/image-1n.png" alt="">
                </div>
                <div class="img-card">
                    <img loading="lazy" src="assets/img/image-2n.png" alt="">
                </div>
                <div class="img-card">
                    <img loading="lazy" src="assets/img/image-3n.png" alt="">
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; TIM IT SMP N 1 Grobogan 2022</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>