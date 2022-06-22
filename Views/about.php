<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="about">
        <div class="row">
            <img src="Ery Shandy.jpg" title="Ery Shandy" alt="Ery Shandy" class="image-circle" width="200" style="float: left; border: 2px solid black;">
            <h1>Ery Shandy</h1>
            <p>Hai, Perkenalkan nama saya Ery Shandy. Umur Saya 21 tahun. Saya adalah seorang mahasiswa Universitas Pelita Bangsa Jurusan Teknik Informatika. Saya lahir di Sukabumi, 22 Juni 2001. Saat ini saya tinggal di Cicadas, Cibadak, Kabupaten Sukabumi.
            </p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>