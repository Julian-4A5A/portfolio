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

.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px) ;
    transform: rotate(-45deg) translate(-9px, 6px) ;
}

.change .bar2 {opacity: 0;}

.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px) ;
    transform: rotate(45deg) translate(-8px, -8px) ;
}
</style>

  <div class="header row" >
  <div class="col-2" >
    <a onclick="openNav()">
    <div class="container" >
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
</a>
  </div>
  <div class="col-8">
    <img src="./images/natuur.jpg">
  </div>
  <div class="col-2" id="clock">
    <p>clock</p>
  </div>
