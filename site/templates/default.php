<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/scrolling-nav.css" rel="stylesheet">

        <!-- Custom JavaScript for this theme -->
        <script src="assets/js/scrolling-nav.js"></script>

    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <title>Micro-Interactions met Principle</title>

  <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/stylesheet.css">

</head>
  <body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">Micro-Interactions</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">Waar komen de ze vandaan?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#services">Waarom gebruik je ze?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#contact">Correct toepassen</a>
        </li>
                  <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#contact2">Principle</a>
          <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#bron">Bronnen</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header id="p" >
  <div class="container text-center">
    <h2><?= $page->titel() ?></h2>
    <p class="lead"><p class="p"><?= $page->sub_titel() ?></p></p>
  </div>
</header>

<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h3><?= $page->waar_titel() ?></h3>
        <p class="lead"><?= $page->waar_tekst_intro() ?> </p>
        <p class='pppp'><?= $page->waar_tekst() ?></p>
      </div>
    </div>
  </div>
</section>

<section id="services" class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h3><?= $page->waarom_titel() ?></h3>
        <p class="lead"><?= $page->waarom_sub_titel() ?></p>
<p class="pppp"> <?= $page->waarom_tekst() ?></p>
<br>
<img src="content/1_home/iu2.gif">
<br>
<br>
<p class="pppp"><?= $page->waarom_tekst2()?></p>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h3><?= $page->correct_titel()?></h3>
        <p class="lead"><?= $page->correct_sub_titel()?> </p>

<p class="pppp"> <?= $page->correct_tekst()?>
</p>
<br>

<img src="content/1_home/iu1.gif">
<br>
<br>
      </div>
    </div>
  </div>
</section>

<section id="contact2" class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h3><?= $page->maken_titel()?></h3>
        <p class="lead"><?= $page->maken_sub_titel()?></p>
<p class="pppp"><?= $page->maken_tekst()?></p>
<p class="pp">Onze eerste voorbeeld uitwerking.</p>

<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Z7hQlLygaGk&feature=youtu.be" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/Z7hQlLygaGk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<br>
<br>
<p class="pppp"><?= $page->maken_tekst2()?></p>
<p class="pp">Onze tweede voorbeeld uitwerking.</p>
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=vWUPmMfmcP4&feature=youtu.be" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/vWUPmMfmcP4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<br>
<br>
<p class="pppp"><?= $page->maken_tekst3()?></p>
<br>
<br>
</section>

<section id="bron">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h3><?= $page->bron_titel() ?></h3>
        <p class="lead"><?= $page->bron_sub_tekst() ?> </p>
        <p class='pppp'><?= $page->bron_tekst() ?></p>
      </div>
    </div>
  </div>
</section>

<section id="contact2" class="custom-lars">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h8>Groetjes,</h8>
        <p class="p"><?= $page->bedankt() ?></p>
      </div>
    </div>
  </div>
</section>
    <!-- Footer -->
      <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">Designing the user experience 2019 - 2020</p>
        </div>
      <!-- /.container -->
    </footer>
    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </body>
</html>