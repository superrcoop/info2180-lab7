var l_button;
window.onload=function(){
    l_button=document.getElementById('lookup');
    l_button.onclick=function(){
        var xhttp= new XMLHttpRequest();
        var search=document.getElementById("country").value;
        xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status== 200){
            if(search){
                document.getElementById("result").innerHTML=this.responseText;
            }else{
                alert("Error:404");
            }
        }
    }
    xhttp.open("GET","world.php?q="+search,true);
    xhttp.send();
    }
}



