<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["title"] ?> Page</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

     <!-- google font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

  <!-- header -->
  <a href="<?= BASEURL ?>"><h1 class="header">Labuan Times</h1></a>
    <p class="paper">Independent eNews in Labuan FT.</p>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg bg-success navbar-top">
        <div class="container-fluid ">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll d-flex justify-content-evenly w-100" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="<?= BASEURL ?>">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="<?= BASEURL ?>/local">LOCAL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="<?= BASEURL ?>/national">NATIONAL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="<?= BASEURL ?>/business">BUSINESS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="<?= BASEURL ?>/sports">SPORTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="<?= BASEURL ?>/world">WORLD</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="<?= BASEURL ?>/tech">TECH</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="<?= BASEURL ?>/travel">TRAVEL</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li> -->
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Link</a>
              </li> -->
            </ul>
            <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav>
