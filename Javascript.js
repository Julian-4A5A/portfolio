function loadpage(href, callBack){
    // document.getElementsById('loader').style.display = 'block';
                var xhr= new XMLHttpRequest();
                xhr.open("GET", href, true);
                xhr.send();
                xhr.onload = function (){
                    if(this.readyState == 4 && this.status == 200){
                  //      document.getElementById('loader').style.display = "none";
                        callBack(this);
                    }
                };



            }
    function callData(result){
        console.log(result);
        closeNav()
        return document.getElementById( 'base').innerHTML = result.response;
    }

    function menu(x) {
        x.classList.toggle("change");
    }

    function goBack() {
      window.history.back();

        return document.getElementById( 'content').innerHTML = result.response;

    }

    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
function goto() {
  window.location.href = 'index.php';
}
