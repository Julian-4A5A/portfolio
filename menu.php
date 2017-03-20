<div id="myNav" class="overlay">
  <div class="header">

        <div class="col-2" >


          <div class="container" onclick="closeNav()">
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
        <h1><button  id="button" onclick="goto()">Home</button ></h1>
        <p>De algemene informatie</p>
      </div>
      <div class="col-6 left">
        <h1><button  id="button" onclick="loadpage('project.php', callData)" >Projecten</button ></h1>
        <p  >De algemen informatie van projecten</p>
      </div>
      <div class="col-6 right" >
        <h1><button   id="button"  onclick="loadpage('about.php', callData)" >About</button ></h1>
        <p>De algemen informatie van mij zelf</p>
        </div>
      <div class="col-6 left" >
        <h1><button   id="button" onclick="loadpage('contact.php', callData)">Contact</button ></h1>
        <p>De algemen informatie over mijn contact</p>

      </div>
    </div>
</div>
