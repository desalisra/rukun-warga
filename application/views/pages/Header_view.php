<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

  <title>Management RT</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top my-bg">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('pages') ?>"><img width="60" class="img-fluid" src="<?= base_url('assets/img/logo.png') ?>" alt="">
        RT 02 RW 04 LARANGAN UTARA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="<?= base_url('pages') ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?= base_url('pages/visimisi') ?>">Visi Misi</a>
          <a class="nav-item nav-link" href="<?= base_url('pages/berita') ?>">Kegiatan</a>
          <a class="nav-item nav-link" href="<?= base_url('pages/pengajuanSurat') ?>">Pengajuan Surat</a>
          <a class="nav-item nav-link" href="<?= base_url('admin') ?>">Login</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->