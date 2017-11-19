var l_button;
var all_lookup;
window.onload=function(){
    l_button=document.getElementById('lookup');
    all_lookup=document.getElementById('all').checked;
    l_button.onclick=function(){
        var xhttp= new XMLHttpRequest();
        var search=document.getElementById("country").value;
        xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status== 200){
            if(all_lookup){
                search="all";
                document.getElementById("result").innerHTML=this.responseText;
                alert("fwc");
              
            }else if(search){
                document.getElementById("result").innerHTML=this.responseText;
            }else{
                alert("Error");
            }
        }
    }
    xhttp.open("GET","world.php?q="+search,true);
    xhttp.send();
    }
}



