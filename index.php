<!DOCTYPE html>
<?php $thisPage="Home"; ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What mOvie to watch?</title>
    <meta name="description" content="The Best Site On The Web* When You Don't Know What To Watch.                                *voted by my cat">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/19f562be58.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
  </head>
  <body>
    <script src="script.js"></script>
    <div class="row">
      <header><a href='index.php?id=home'>What MOvie To Watch?</a></header>
      <div class="topnav" id="myTopnav">
        <a href='index.php?id=home'>Home</a>
        <a href='index.php?id=mymovies' class="mvright">My Movies</a>
        <a href='index.php?id=moviebase' class="mvright active"><i class="fas fa-film"></i> Movie Base</a>
        <a href='index.php?id=about'>About</a>
        <a href="javascript:void(0);" class="icon" onclick="navResponse()">
          <i class="fa fa-bars"></i>
        </a>
      </div>

      <div class="content">
        <?php 
        switch($_GET['id']) {
        case '': include 'home.php';
          break;
        case 'home': include 'home.php';
          break;
        case 'mymovies': include 'mymovies.php';
          break;
        case 'moviebase': include 'moviebase.php';
          break;
        case 'about': include 'about.php';
          break;
        }
        ?>
      </div>
      <footer>© created with pain&tears</footer>
    </div>

  </body>
</html>