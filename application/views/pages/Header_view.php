<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">

  <title>Telkom School</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top my-bg">
  <div class="container">
    <a class="navbar-brand" href="<?= site_url('pages')?>"><img width="100" class="img-fluid" src="<?= base_url('assets/img/smktelkomjakarta-logo-redi.png')?>" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active" href="<?= site_url('pages')?>">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="<?= site_url('pages/visimisi')?>">Visi Misi</a>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Jurusan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <?php foreach($jurusan as $row){ ?>
              <a class="dropdown-item" href="<?= site_url().'pages/jurusan/'.$row->id_jurusan?>">
                <?= $row->nama_jurusan?>
              </a>
            <?php } ?>
          </div>
        </li>
        <a class="nav-item nav-link" href="<?= site_url('pages/berita')?>">Berita</a>
        <a class="nav-item nav-link" href="<?= site_url('pages/ppdb')?>">PPDB</a>
      </div>
    </div>
  </div>
</nav>
<!-- End Navbar -->