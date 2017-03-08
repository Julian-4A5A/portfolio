<script type="text/javascript">

</script>
<!DOCTYPE html>
<html id="Menu_Page">
  <head>
    <meta charset="utf-8">
    <title>Menu</title>
    <link rel="stylesheet" href="Style.css">
    <style media="screen">
    .container {
        display: inline-block;
        cursor: pointer;
    }

    .bar1, .bar2, .bar3 {
        width: 35px;
        height: 5px;
        background-color:#ce616e;
        margin: 6px 0;
        transition: 0.2s;

    }

    .bar1 {
        -webkit-transform: rotate(-45deg) translate(-9px, 6px) ;
        transform: rotate(-45deg) translate(-9px, 6px) ;
    }

    .bar2 {opacity: 0;}

    .bar3 {
        -webkit-transform: rotate(45deg) translate(-8px, -8px) ;
        transform: rotate(45deg) translate(-8px, -8px) ;
    }
    </style>
    <script src="Javascript.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
  <body >
<section class="row">

        <div class="header">
          </div>
        <div class="col-2" >


          <div class="container" onclick="goBack()">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>

      </div>
      <div class="col-8 " >
        <div class="base">
          <img src="http://placehold.it/100x100" class="MenuHeadImage">
          <h3>Julian van Dijk</h3>
          <p></p>
        </div>

      </div>
      <div class="col-2 clock">
        <?php require 'Clock.php'; ?>
      </div>

      <div class="col-6 right" >
        <h1><a href="index.php" >Home</a></h1>
        <p>De algemene informatie</p>
      </div>
      <div class="col-6 left">
        <h1><a href="project.php">Projecten</a></h1>
        <p>De algemen informatie van projecten</p>
      </div>
      <div class="col-6 right" >
        <h1><a href="about.php">About</a></h1>
        <p>De algemen informatie van mij zelf</p>
        </div>
      <div class="col-6 left" >
        <h1><a href="Contact.php">Contact</a></h1>
        <p>De algemen informatie over mijn contact</p>

      </div>
</section>


  </body>
</html>
