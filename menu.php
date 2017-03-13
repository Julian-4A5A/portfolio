
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Menu</title>
    <link rel="stylesheet" href="Style.css">
    <script src="Javascript.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
  <body>
<section class="row">
      <div class="col-3">
          <div class="">
            <span class="icon"><a href="index.php">&#10006;</a></span>
          </div>
      </div>
      <div class="col-6 " >
        <div class="base">
          <img src="http://placehold.it/100x100" class="MenuHeadImage">
          <h3>Julian van Dijk</h3>
          <p></p>
        </div>

      </div>
      <div class="col-3 clock">
        <?php require 'Clock.php'; ?>
      </div>

      <div class="col-6 right" >
        <h1><a href="index.php">Home</a></h1>
        <p>De algemene informatie</p>
      </div>
      <div class="col-6 left">
        <h1><a href="project.php">Projecten</a></h1>
        <p>De algemen informatie van projecten</p>
      </div>
      <div class="col-6 right" >
        <h1><a href="Contact.php">Contact</a></h1>
        <p>De algemen informatie over mijn contact</p>
      </div>
      <div class="col-6 left" >
        <h1><a href="about.php">About</a></h1>
        <p>De algemen informatie van mij zelf</p>
      </div>
      
</section>


  </body>
</html>
