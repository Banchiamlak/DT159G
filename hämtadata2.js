var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            var data = JSON.parse(this.responseText);
 
            Plotly.newPlot('mygraf', data);
            }
        };
    xhttp.open("GET", "test.php", true);
    xhttp.send();