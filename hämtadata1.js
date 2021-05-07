var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            var data = JSON.parse(this.responseText);
 
              
              Plotly.newPlot('graf', data);
           // var layout = {barmode: 'group'};
            //Plotly.newPlot('graf', data, layout);
            }
        };
    
    xhttp.open("GET", "test2.php", true);
    // xhttp.open("GET", "test.php", true);
    xhttp.send();