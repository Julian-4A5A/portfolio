function loadpage(href, callBack){
     document.getElementsById('loader').style.display = 'block';
                var xhr= new XMLHttpRequest();
                xhr.open("GET", href, true);
                xhr.send();
                xhr.onload = function (){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById('loader').style.display = "none";
                        callBack(this);
                    }
                };



            }
    function callData(result){
        console.log(result);
        return document.getElementById( 'content').innerHTML = result.response;
    }
