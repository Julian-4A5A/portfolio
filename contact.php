<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="Style.css">
    <script src="Javascript.js" charset="utf-8"></script>
  </head>
  <body>
  <section class="row">
      <?php include 'Header.php'; ?>

      </div>


        <div class="col-7">
          <h2>Contact gegevens</h2>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
        </div>
        <div class="col-5">
            <img src="http://placehold.it/300x150">
        </div>



        <div class="col-12">
          <form class="MyMailForm" action="" method="post">
              <p><label><b>Naam:</b></label></p>
              <p><input type="text" name="Naam" placeholder="Voor- en achternaam" required></p>
              <p><label><b>Mail adres:</b></label></p>
              <p><input type="text" name="MailAdres" placeholder="Hans@gmail.com" required></p>
              <p><label><b>Vragen en/of Opmerkingen</b></label></p>
              <p><textarea name="VragenOpmerkingen" rows="10" cols="50"></textarea></p>
              <p><input class="button" type="submit" name="" value="Verzenden"></p>

          </form>
        </div>
</section>


  </body>
</html>
