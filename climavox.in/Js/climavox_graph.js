let graph=document.querySelector('.bom');
// for max ////////////
var first_temp_max = 0;
var second_temp_max = 0;
var third_temp_max = 0;
var fourth_temp_max = 0;
var fifth_temp_max = 0;

// for min //////////
var first_temp_min = 0;
var second_temp_min = 0;
var third_temp_min = 0;
var fourth_temp_min = 0;
var fifth_temp_min = 0;

// wind speed //////////
var first_wind = 0;
var second_wind = 0;
var third_wind = 0;
var fourth_wind = 0;
var fifth_wind = 0;


// UV index //////////
var first_uv = 0;
var second_uv = 0;
var third_uv = 0;
var fourth_uv = 0;
var fifth_uv = 0;

var l = [];

const get_temp = async (city) => {
    const URL = `https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/${city}?unitGroup=metric&include=events%2Cdays%2Chours%2Calerts%2Ccurrent&key=SJRRRS5X3GBCTWR9FTBWZBRBF&contentType=json`
    
    var response = await fetch(URL);
    var data = await response.json();
    console.log(data)
    //////////// for max///////////
    first_temp_max = Math.floor(data['days'][0]['tempmax']);
    second_temp_max = Math.floor(data['days'][1]['tempmax']);
    third_temp_max = Math.floor(data['days'][2]['tempmax']);
    fourth_temp_max = Math.floor(data['days'][3]['tempmax']);
    fifth_temp_max = Math.floor(data['days'][4]['tempmax']);
    //////// for min ////////////////////
    first_temp_min = Math.floor(data['days'][0]['tempmin']);
    second_temp_min = Math.floor(data['days'][1]['tempmin']);
    third_temp_min = Math.floor(data['days'][2]['tempmin']);
    fourth_temp_min = Math.floor(data['days'][3]['tempmin']);
    fifth_temp_min = Math.floor(data['days'][4]['tempmin']);
    
	// ///////////////// for wind////////////////
    
	first_wind=Math.floor(data['days'][0]['windspeed']);
	second_wind=Math.floor(data['days'][1]['windspeed']);
	third_wind=Math.floor(data['days'][2]['windspeed']);
	fourth_wind=Math.floor(data['days'][3]['windspeed']);
	fifth_wind=Math.floor(data['days'][4]['windspeed']);
    
	////////////// for UV///////////////
    
	first_uv = data['days'][0]['uvindex'];
	second_uv = data['days'][1]['uvindex'];
	third_uv = data['days'][2]['uvindex'];
	fourth_uv = data['days'][3]['uvindex'];
	fifth_uv = data['days'][4]['uvindex'];
    
	// ////////////for max////////////////////////////////
    l.push(first_temp_max);
    l.push(second_temp_max);
    l.push(third_temp_max);
    l.push(fourth_temp_max);
    l.push(fifth_temp_max);
	// ////////////for min////////////////////////////////
    l.push(first_temp_min);
    l.push(second_temp_min);
    l.push(third_temp_min);
    l.push(fourth_temp_min);
    l.push(fifth_temp_min);
	//////////////////////// for wind ////////////////////////////////
	l.push(first_wind);
    l.push(second_wind);
    l.push(third_wind);
    l.push(fourth_wind);
    l.push(fifth_wind);
	//////////////////////// UV index ////////////////////////////////
	l.push(first_uv);
    l.push(second_uv);
    l.push(third_uv);
    l.push(fourth_uv);
    l.push(fifth_uv);
    
    renderCharts();
}

function renderCharts() {
    renderChart("chartContainer1", "Five day forcast of max Temp", l.slice(0, 5));
    renderChart("chartContainer2", "Five day forcast of min Temp", l.slice(5, 10));
    renderChart("chartContainer3", "Five day wind", l.slice(10, 15));
    renderChart("chartContainer4", "Uv index", l.slice(15, 20));
}

function renderCharts() {
    renderChart("chartContainer1", "Five day forecast of max Temp", l.slice(0, 5));
    renderChart("chartContainer2", "Five day forecast of min Temp", l.slice(5, 10));
    renderChart("chartContainer3", "Five day wind", l.slice(10, 15));
    renderChart("chartContainer4", "Uv index", l.slice(15, 20));
}

function renderChart(containerId, title, dataPoints) {
    // Find the index of the highest and lowest points
    var maxIndex = dataPoints.indexOf(Math.max(...dataPoints));
    var minIndex = dataPoints.indexOf(Math.min(...dataPoints));

    var chart = new CanvasJS.Chart(containerId, {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: title,
            fontColor: "green",
            fontSize: 24, 
            fontFamily:"Arial", 
            fontWeight: "bold"
        },
        axisY: {
            title: "Temperature (°C)"
        },
        axisX: {
            title: "Days"
        },
        data: [{   
            type: "line",
            indexLabelFontSize: 16,
            dataPoints: dataPoints.map((temp, index) => ({
                x: index + 1,
                y: temp,
                indexLabel: index === maxIndex || index === minIndex ? null : "",
                markerColor: index === maxIndex ? "red" : index === minIndex ? "DarkSlateGrey" : null,
                markerType: index === maxIndex || index === minIndex ? "triangle" : null
            }))
        }]
    });
    chart.render();
}

// get_temp(cityName.value);

graph.addEventListener("click", function(){
    // window.relo
    var city=document.querySelector('#city');
    get_temp(city.value);
    // location.reload();   
});



// get_temp('London');
// console.log(cityName.value);

// graph.addEventListener('click',function(cityName){
// });
