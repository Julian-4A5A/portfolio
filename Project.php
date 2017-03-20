<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="Style.css">
    <script src="Javascript.js" charset="utf-8"></script>
  </head>
  <body id="basis">

      <section class="row">
        <?php include 'Header.php'; ?>
      </div>
      <div id="base">
        <p id="loader"></p>
      </div>
        <div class="col-4">
          <div class="Title">
              <h2>Eigen Projecten</h2>
          </div>
          <div class="Image">
              <img src="http://placehold.it/300x200">
          </div>
          <div>
            <p class="Text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
             eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eni
             m ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut al
             iquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi
            t in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Except
            eur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p><button id="button" type="button" onclick="document.GetEllementById('basis')= loadpage(projecten/schoolopdrachten.php, callback;)">View More</button></p>
          </div>
        </div>
        <div class="col-4">
          <div class="Title">
            <h2>School Projecten</h2>
          </div>
          <div class="Image">
            <img src="http://placehold.it/300x200">
          </div>
          <div>
            <p class="Text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
             eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eni
             m ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut al
             iquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi
            t in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Except
            eur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p><button id="button" type="button" name="button">View More</button></p>
          </div>
        </div>
        <div class="col-4">
          <div class="Title">
            <h2>School Opdrachten</h2>
          </div>
          <div class="Image">
            <img src="http://placehold.it/300x200">
          </div>
          <div>
            <p class="Text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eni
              m ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut al
              iquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi
              t in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Except
              eur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p><button id="button" type="button" name="button">View More</button></p>
          </div>
        </div>
        <?php require 'footer.php'; ?>
</section>


  </body>
</html>
