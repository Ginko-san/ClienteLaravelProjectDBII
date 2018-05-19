function show(fun){
    var statisticsVar = document.getElementById(fun);
    if(fun == 'ope' && statisticsVar.style.display != "block"){
        statisticsVar.style.display = "block";
        document.getElementById('ave').style.display = "none";
        document.getElementById('inc').style.display = "none";
    }
    if(fun == 'ave' && statisticsVar.style.display != "block"){
        statisticsVar.style.display = "block";
        document.getElementById('ope').style.display = "none";
        document.getElementById('inc').style.display = "none";
    }
    if(fun == 'inc' && statisticsVar.style.display != "block"){
        statisticsVar.style.display = "block";
        document.getElementById('ave').style.display = "none";
        document.getElementById('ope').style.display = "none";
    }
}

//Crear un cavas para grafico para mostrar el la pagina
function grafic(gfname, tamMax, tamUso, tamDis, grogro) {
    chart = new CanvasJS.Chart("grafic", {
        animationEnabled: true,
        title:{
            text: "Graficos del Archivo " + gfname,
            horizontalAlign: "center"
        },
         subtitles:[ 
            {
                text: "Tamaño Maximo: "+ tamMax + "MB",
                horizontalAlign: "left",
                fontSize: 15
            },
            {
                text: "Crecimiento: "+ grogro + "MB",
                horizontalAlign: "left",
                fontSize: 15
            }
            ],
        data: [{
            type: "doughnut",
            startAngle: 60,
            radius: "90%",
            innerRadius: "55%",
            indexLabelFontSize: 17,
            explodeOnClick: true,
            indexLabel: "{label} - #percent%",
            toolTipContent: "<b>{label}:</b> {y} (#percent%)",
            dataPoints: [
                { y: tamUso, label: "Espacio Usado" },
                { y: tamDis, label: "Espacio Disponible" }
            ]
        }]
    });
    chart.render();
}

// hacer actualizacion del metodo grafic cada 10 segundos 
function update(gfname, tamMax, tamUso, tamDis, grogro){
    grafic(gfname, tamMax, tamUso, tamDis, grogro);
    x = setInterval(function() {
        grafic(gfname, tamMax, tamUso, tamDis, grogro);
    }, 5000);
}