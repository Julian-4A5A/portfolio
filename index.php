
<!DOCTYPE html>
<html >
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Julian van Dijk</title>
    <link rel="stylesheet" href="Style.css">
    <script src="Javascript.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
    <?php include 'menu.php'; ?>
    <?php include 'Header.php'; ?>

<section class="row">


      <div id="base">
        <div class="col-12">
          <div class="aboutimg">

          </div>
            <h2>About</h2>
            <p class="Hometext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiu
              smod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini
              m veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com
              modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fu
              giat nulla pariatur. </p>
              <button onclick="loadpage('about.php', callData)" id="button">View more</button>
        </div>




        <div class="col-12">
          <div class="projectimg">

          </div>
          <h2>Projects</h2>
          <p class="Hometext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp
            or incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptat
            e velit esse cillum dolore eu fugiat nulla pariatur. </p>
            <button onclick="loadpage('project.php', callData)" id="button">View more</button>

        </div>



            <div class="col-12">
              <div class="contactimg">

              </div>
              <h2>Contact</h2>

              <p class="Hometext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te
                mpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo con
                 sequat. Duis aute irure dolor in reprehend
                erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
              <button onclick="loadpage('contact.php', callData)" id="button">View more</button>
          </div>


          </div>
        </div>



    </section>
    <?php require 'footer.php'; ?>


  </body>
</html>
