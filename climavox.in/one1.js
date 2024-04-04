let body=document.querySelector("#body");
let temp=document.querySelector(".Temperature");//
let search_logo=document.querySelector("#tem");//
let city_name=document.querySelector("#search");//
let weather_condition=document.querySelector("#monsoon");
let place=document.querySelector("#dailylocation");
let time_date=document.querySelector('#timeDate');
let img_moon_sun=document.querySelector('#moon');
let sunrise=document.querySelector('#sunriseTime');
let sunset=document.querySelector('#sunsetTime');
let humidity=document.querySelector("#H");
let pressure=document.querySelector("#P");
let visibility=document.querySelector("#V");
let feellike=document.querySelector("#FL");
let fahrenheit=document.querySelector("#fahrenheit");
let current_location=document.querySelector('#current_location');


// AQI//////////////////////////

pm25=document.querySelector('#pm25');
so2=document.querySelector('#so2');
no2=document.querySelector('#no2');
o3=document.querySelector('#o3');




/////////////////////////mic phone work /////////////////////////////

let mic=document.querySelector("#micicon");


let date_today=document.querySelector("#today_date");
let date_tomorrow=document.querySelector("#tomorrow_date");
let date_first=document.querySelector("#first_date");
let date_second=document.querySelector("#second_date");
let date_third=document.querySelector("#third_date");
let date_fourth=document.querySelector("#fourth_date");
let date_fifth=document.querySelector("#fifth_date");

let day_today=document.querySelector("#today_day");
let day_tomorrow=document.querySelector("#tomorrow_day");
let day_first=document.querySelector("#first_day");
let day_second=document.querySelector("#second_day");
let day_third=document.querySelector("#third_day");
let day_fourth=document.querySelector("#fourth_day");
let day_fifth=document.querySelector("#fifth_day");

let temp_today=document.querySelector('#today_temp');
let temp_tomorrow=document.querySelector('#tomorrow_temp')

let temp_first=document.querySelector("#first_temp");
let temp_second=document.querySelector("#second_temp");
let temp_third=document.querySelector("#third_temp");
let temp_fourth=document.querySelector("#fourth_temp");
let temp_fifth=document.querySelector("#fifth_temp");





////////////// hours temperature //////////////////////////////

let degree1=document.querySelector("#degree1");
let degree2=document.querySelector("#degree2");
let degree3=document.querySelector("#degree3");
let degree4=document.querySelector("#degree4");
let degree5=document.querySelector("#degree5");
let degree6=document.querySelector("#degree6");
let degree7=document.querySelector("#degree7");
let degree8=document.querySelector("#degree8");



//////////////// WINDflow of hours ///////////////////////////

let windflow1=document.querySelector("#windflow1");
let windflow2=document.querySelector("#windflow2");
let windflow3=document.querySelector("#windflow3");
let windflow4=document.querySelector("#windflow4");
let windflow5=document.querySelector("#windflow5");
let windflow6=document.querySelector("#windflow6");
let windflow7=document.querySelector("#windflow7");
let windflow8=document.querySelector("#windflow8");

/////////////////// for text to voice /////////////////////////
let text;



let date=new Date().toLocaleTimeString();


if(date>'05:00:00' && date<'17:00:00'){
    body.style.background='url(background_morning_img1.webp) no-repeat center/cover fixed';
}

else{
    body.style.background='url(background_night.jpg) no-repeat center/cover fixed';
}


var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
var months_short = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
let day=new Date();

//////////////////// IMP CODE ///////////////////




const currentDate = new Date();
const year = currentDate.getFullYear();
const month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
const days = currentDate.getDate();

const fullDate_first = `${year}-${month}-${days + 2}`;
const fullDate_second = `${year}-${month}-${days + 3}`;
const fullDate_third = `${year}-${month}-${days + 4}`;
const fullDate_fourth = `${year}-${month}-${days + 5}`;
const fullDate_fifth = `${year}-${month}-${days + 6}`;

const day1 = new Date(fullDate_first).getDay();
const day2 = new Date(fullDate_second).getDay();
const day3 = new Date(fullDate_third).getDay();
const day4 = new Date(fullDate_fourth).getDay();
const day5 = new Date(fullDate_fifth).getDay();

console.log(daysOfWeek[day1]);
console.log(daysOfWeek[day2]);
console.log(daysOfWeek[day3]);
console.log(daysOfWeek[day4]);
console.log(daysOfWeek[day5]);





//////////// END OF IMP CODE///////////////////////////





const getdata= async (city,value) =>{
    let URL=`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=1db1616b48f7be51d4b816945a4f8912`
    let URL1=`https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/$%7B${city}%7D?unitGroup=metric&include=events%2Cdays%2Chours%2Calerts%2Ccurrent&key=SJRRRS5X3GBCTWR9FTBWZBRBF&contentType=json`
    let respose1=await fetch(URL1);
    let data1=await respose1.json();
    let respose=await fetch(URL);
    let data=await respose.json();
    var lat=data['coord']['lat'];
    var lon=data['coord']['lon'];

    // for AQI ////////////////
    let URL2=`http://api.openweathermap.org/data/2.5/air_pollution?lat=${lat}&lon=${lon}&appid=1db1616b48f7be51d4b816945a4f8912`;
    let response2=await fetch(URL2);
    let data2=await response2.json();
    // console.log(data2);
    console.log(data1);
    // console.log(data);

    pm25.innerText=Math.floor(data2['list'][0]['components']['pm2_5']);
    so2.innerText=Math.floor(data2['list'][0]['components']['so2']);
    no2.innerText=Math.floor(data2['list'][0]['components']['no2']);
    o3.innerText=Math.floor(data2['list'][0]['components']['o3']);


    //////////////text to speech ///////////////////
    text=`Temperature of ${city_name.value} is ${Math.floor(data['main']['temp']-273.15)} degree celsius`;


    
    // wind_now.innerText=Math.floor((data['wind']['speed'])*3.6)+'Km/h';
    console.log(data1);
    console.log(data);
    if(value=='fahrenheit'){
        temp.innerText=Math.floor((data['main']['temp']-273.15)*1.8)+32+'°'+'F';
    }
    else{
        temp.innerText=Math.floor(data['main']['temp']-273.15)+'°'+'C';
    }
    weather_condition.innerText=data['weather'][0]['description'];

    //////////////////////// condition for img /////////////////////////

    if(date>'05:00:00' && date<'17:00:00'){
        img_moon_sun.src="cartton_sun.png";
    }
    else if(data['weather'][0]['description']=="clear sky" &&  date>'17:00:00'){
        img_moon_sun.src="cartton_moon.png";
        body.style.background='url(background_night.jpg) no-repeat center/cover';
    }
    else if(data['weather'][0]['description']=="broken clouds" && date>'17:00:00'){
        body.style.background='url(broken_cloud_night.jpg) no-repeat center/cover';
    }
    else if(data['weather'][0]['description']=="scattered clouds" && date>'17:00:00'){
        body.style.background='url(broken_cloud_night.jpg) no-repeat center/cover';
    }
    else if(data['weather'][0]['description']=="overcast clouds" && date>'17:00:00'){
        body.style.background='url(broken_cloud_night.jpg) no-repeat center/cover';
    }
    else if(data['weather'][0]['description']=="moderate rain" && date>'17:00:00'){
        body.style.background='url(background_rain.jpg) no-repeat center/cover';
    }



    place.innerText=city_name.value;
    time_date.innerText=daysOfWeek[day.getDay()]+' , '+ day.getDate()+' , '+months_short[day.getMonth()];
    ///////////////////// Sunrise and sunset  ///////////
    var sunrise_time=data1['currentConditions']['sunrise'];
    var sunset_time=data1['currentConditions']['sunset'];

    const [sunrise_hour, sunrise_minute] = sunrise_time.split(':');
    const [sunset_hour, sunset_minute] = sunset_time.split(':');

    console.log(sunrise_hour, sunrise_minute);
    console.log(sunset_hour, sunset_minute);

    sunrise.innerText=`${sunrise_hour}:${sunrise_minute}`;
    sunset.innerText=`${sunset_hour}:${sunset_minute}`;

    ///////////////////////////////////////////////////////

    humidity.innerText=data['main']['humidity']+'%';
    pressure.innerText=data['main']['pressure']+'hpa';
    visibility.innerText=Math.floor(data['visibility']/1000)+'Km';

    feellike.innerText=Math.floor(data['main']['feels_like']-273.15)+'°'+'C';


    // five day set up
    date_today.innerText=day.getDate()+''+months_short[day.getMonth()];
    date_tomorrow.innerText=day.getDate()+1+ ''+months_short[day.getMonth()];
    date_first.innerText=day.getDate()+2+ ''+months_short[day.getMonth()];
    date_second.innerText=day.getDate()+3+ ''+months_short[day.getMonth()];
    date_third.innerText=day.getDate()+4+ ''+months_short[day.getMonth()];
    date_fourth.innerText=day.getDate()+5+ ''+months_short[day.getMonth()];
    date_fifth.innerText=day.getDate()+6+ ''+months_short[day.getMonth()];

    // days setup ////////////////////////

    day_first.innerText=daysOfWeek[day1];
    day_second.innerText=daysOfWeek[day2];
    day_third.innerText=daysOfWeek[day3];
    day_fourth.innerText=daysOfWeek[day4];
    day_fifth.innerText=daysOfWeek[day5];
    console.log(daysOfWeek[day1]);

    // temperature setup of fivedays

    temp_today.innerText=Math.floor(data1['days'][0]['tempmax'])+'°' + '/'+Math.floor(data1['days'][0]['tempmin'])+'°'
    temp_tomorrow.innerText=Math.floor(data1['days'][1]['tempmax'])+ '°'+ '/'+Math.floor(data1['days'][1]['tempmin'])+'°'
    temp_first.innerText=Math.floor(data1['days'][2]['tempmax'])+ '°'+ '/'+Math.floor(data1['days'][2]['tempmin'])+'°'
    temp_second.innerText=Math.floor(data1['days'][3]['tempmax'])+ '°'+ '/'+Math.floor(data1['days'][3]['tempmin'])+'°'
    temp_third.innerText=Math.floor(data1['days'][4]['tempmax'])+ '°'+ '/'+Math.floor(data1['days'][4]['tempmin'])+'°'
    temp_fourth.innerText=Math.floor(data1['days'][5]['tempmax'])+ '°'+ '/'+Math.floor(data1['days'][5]['tempmin'])+'°'
    temp_fifth.innerText=Math.floor(data1['days'][6]['tempmax'])+ '°'+ '/'+Math.floor(data1['days'][6]['tempmin'])+'°'



    // Temperature according to the hours //////////////

    degree1.innerText=Math.floor(data1['days'][0]['hours'][21]['temp'])+'°';
    degree2.innerText=Math.floor(data1['days'][0]['hours'][0]['temp'])+'°';
    degree3.innerText=Math.floor(data1['days'][0]['hours'][3]['temp'])+'°';
    degree4.innerText=Math.floor(data1['days'][0]['hours'][6]['temp'])+'°';
    degree5.innerText=Math.floor(data1['days'][0]['hours'][9]['temp'])+'°';
    degree6.innerText=Math.floor(data1['days'][0]['hours'][12]['temp'])+'°';
    degree7.innerText=Math.floor(data1['days'][0]['hours'][15]['temp'])+'°';
    degree8.innerText=Math.floor(data1['days'][0]['hours'][18]['temp'])+'°';

    // windsspeed data according to hours /////////////

    windflow1.innerText=Math.floor(data1['days'][0]['hours'][21]['windspeed'])+'km/h';
    windflow2.innerText=Math.floor(data1['days'][0]['hours'][0]['windspeed'])+'km/h';
    windflow3.innerText=Math.floor(data1['days'][0]['hours'][3]['windspeed'])+'km/h';
    windflow4.innerText=Math.floor(data1['days'][0]['hours'][6]['windspeed'])+'km/h';
    windflow5.innerText=Math.floor(data1['days'][0]['hours'][9]['windspeed'])+'km/h';
    windflow6.innerText=Math.floor(data1['days'][0]['hours'][12]['windspeed'])+'km/h';
    windflow7.innerText=Math.floor(data1['days'][0]['hours'][15]['windspeed'])+'km/h';
    windflow8.innerText=Math.floor(data1['days'][0]['hours'][18]['windspeed'])+'km/h';

    console.log(search_logo.value);
}

search_logo.addEventListener("click", function(){
    getdata(city_name.value,search_logo.value);
});
fahrenheit.addEventListener("click", function(){
    getdata(city_name.value,fahrenheit.id);
});


city_name.addEventListener("keypress", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        p=new Audio('enter-button.mp3');
        p.play();
        search_logo.click();
    }
});

////////////////////////////////SPEECHRECOGNITION/////////////////////////////

///////////////// IT's my code ////////////

var SpeechRecognition=SpeechRecognition || webkitSpeechRecognition;
var SpeechGrammarList=SpeechGrammarList || webkitSpeechGrammarList;
const grammar='#JSGF V1.0';
var recognition=new SpeechRecognition();
var SpeechRecognitionList=new SpeechGrammarList();
SpeechRecognitionList.addFromString(grammar,1);
recognition.grammar=SpeechRecognitionList;
recognition.lang='en-US';
recognition.interimResults=false;

recognition.onresult=function(event){
    var command=event.results[0][0].transcript;
    city_name.value=command;
}
recognition.onspeechend=function(){
    recognition.stop();
};

recognition.onerror=function(event){
    console.error('Error:'+event.error);
};

recognition.onstart=function(event){
    city_name.value='Listening...';
};

recognition.onend=function(event){
    city_name.value += '';
    if(city_name.value.includes('graph')){
        window.location.href = 'graph.html';
    }
    getdata(city_name.value);
}

mic.addEventListener('click',function(){
    var audio = new Audio('mic_sound.mp3');
    audio.play();
    recognition.start();
});

////////////////////////////it my code //////////////////////////////////



// /////////////////old  code///////////////////////
// if ('SpeechRecognition' in window || 'webkitSpeechRecognition' in window) {
//     const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();

//     recognition.lang = 'en-US'; // Set language to English (US)

//     recognition.onresult = function(event) {
//         const transcript = event.results[0][0].transcript;
//         city_name.value = transcript;
//     };

//     recognition.onstart = function() {
//         city_name.value = 'Listening...';
//     };

//     recognition.onend = function() {
//         city_name.value += '';
//         if(city_name.value.includes('graph')){
//             window.location.href = 'graph.html';
//         }
//         getdata(city_name.value);
//     };

//     recognition.onerror = function(event) {
//         alert('Error occurred: please check your internet connection');
//         console.error('Speech recognition error:', event.error);
//         city_name.value = '';
//         // city_name.value = 'Error occurred. Please try again.';
//     };

//     mic.addEventListener('click', function() {
//         var audio = new Audio('mic_sound.mp3');
//         audio.play();
//         recognition.start();
//     });
// } else {
//     alert("Speech recognition not supported in your browser");
//     mic.disabled = true;
// }


//////////////// old code /////////////////








///////////////////////////////CURRENT LOCATION //////////////////////////////


const getlocation=async(position) =>{
    console.log(position)
    const lat=position.coords.latitude;
    const lon=position.coords.longitude;
    var url=`https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=1db1616b48f7be51d4b816945a4f8912`

    var url1=`https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/${lat},${lon}?unitGroup=metric&include=events,days,hours,alerts,current&key=SJRRRS5X3GBCTWR9FTBWZBRBF&contentType=json`

    var response= await fetch(url);
    var data=await response.json();

    var response1= await fetch(url1);
    var data1=await response1.json();
    // console.log(data);
    // console.log(data1);


    /////////////////////////// AQI//////////////////////////////
    let URL2=`http://api.openweathermap.org/data/2.5/air_pollution?lat=${lat}&lon=${lon}&appid=1db1616b48f7be51d4b816945a4f8912`;
    let response2=await fetch(URL2);
    let data2=await response2.json();
    // console.log(data2);

    pm25.innerText=Math.floor(data2['list'][0]['components']['pm2_5']);
    so2.innerText=Math.floor(data2['list'][0]['components']['so2']);
    no2.innerText=Math.floor(data2['list'][0]['components']['no2']);
    o3.innerText=Math.floor(data2['list'][0]['components']['o3']);


    temp.innerText=Math.floor(data['main']['temp']-273.15)+'°'+'C';
    weather_condition.innerText=data['weather'][0]['description'];

    //////////////////////// condition for img /////////////////////////

    if(date>'05:00:00' && date<'17:00:00'){
        img_moon_sun.src="cartton_sun.png";
    }
    else if(data['weather'][0]['description']=="clear sky" &&  date>'17:00:00'){
        img_moon_sun.src="cartton_moon.png";
        body.style.background='url(background_night.jpg) no-repeat center/cover';

    }
    else if(data['weather'][0]['description']=="few clouds" &&  date>'17:00:00'){
        img_moon_sun.src="cartton_moon.png";
        body.style.background='url(broken_cloud_night.jpg) no-repeat center/cover';

    }
    else if(data['weather'][0]['description']=="broken clouds"  && date>'17:00:00'){
        body.style.background='url(broken_cloud_night.jpg) no-repeat center/cover';
    }

    /////////////////////// text to speech ////////////////////////////////
    text=`Temperature of ${data['name']} is ${Math.floor(data['main']['temp']-273.15)} degrees celsius`;



    place.innerText=data['name'];

    time_date.innerText=daysOfWeek[day.getDay()]+' , '+ day.getDate()+' , '+months_short[day.getMonth()];
    ///////////////////// Sunrise and sunset  ///////////
    var sunrise_time=data1['currentConditions']['sunrise'];
    var sunset_time=data1['currentConditions']['sunset'];

    const [sunrise_hour, sunrise_minute] = sunrise_time.split(':');
    const [sunset_hour, sunset_minute] = sunset_time.split(':');

    console.log(sunrise_hour, sunrise_minute);
    console.log(sunset_hour, sunset_minute);

    sunrise.innerText=`${sunrise_hour}:${sunrise_minute}`;
    sunset.innerText=`${sunset_hour}:${sunset_minute}`;

    //////////////////////////////////////////////////

    humidity.innerText=data['main']['humidity']+'%';
    pressure.innerText=data['main']['pressure']+'hpa';
    visibility.innerText=Math.floor(data['visibility']/1000)+'Km';
    // if()
    feellike.innerText=Math.floor(data['main']['feels_like']-273.15)+'°'+'C';


    // five day set up
    date_today.innerText=day.getDate()+''+months_short[day.getMonth()];
    date_tomorrow.innerText=day.getDate()+1+ ''+months_short[day.getMonth()];
    date_first.innerText=day.getDate()+2+ ''+months_short[day.getMonth()];
    date_second.innerText=day.getDate()+3+ ''+months_short[day.getMonth()];
    date_third.innerText=day.getDate()+4+ ''+months_short[day.getMonth()];
    date_fourth.innerText=day.getDate()+5+ ''+months_short[day.getMonth()];
    date_fifth.innerText=day.getDate()+6+ ''+months_short[day.getMonth()];

    // days setup ////////////////////////

    day_first.innerText=daysOfWeek[day1];
    day_second.innerText=daysOfWeek[day2];
    day_third.innerText=daysOfWeek[day3];
    day_fourth.innerText=daysOfWeek[day4];
    day_fifth.innerText=daysOfWeek[day5];

    // temperature setup of fivedays

    temp_today.innerText=Math.floor(data1['days'][0]['tempmax'])+'°' + '/'+Math.floor(data1['days'][0]['tempmin'])+'°'
    temp_tomorrow.innerText=Math.floor(data1['days'][1]['tempmax'])+ '°'+ '/'+Math.floor(data1['days'][1]['tempmin'])+'°'
    temp_first.innerText=Math.floor(data1['days'][2]['tempmax'])+ '°'+ '/'+Math.floor(data1['days'][2]['tempmin'])+'°'
    temp_second.innerText=Math.floor(data1['days'][3]['tempmax'])+ '°'+ '/'+Math.floor(data1['days'][3]['tempmin'])+'°'
    temp_third.innerText=Math.floor(data1['days'][4]['tempmax'])+ '°'+ '/'+Math.floor(data1['days'][4]['tempmin'])+'°'
    temp_fourth.innerText=Math.floor(data1['days'][5]['tempmax'])+ '°'+ '/'+Math.floor(data1['days'][5]['tempmin'])+'°'
    temp_fifth.innerText=Math.floor(data1['days'][6]['tempmax'])+ '°'+ '/'+Math.floor(data1['days'][6]['tempmin'])+'°'



    // Temperature according to the hours //////////////

    degree1.innerText=Math.floor(data1['days'][0]['hours'][21]['temp'])+'°';
    degree2.innerText=Math.floor(data1['days'][0]['hours'][0]['temp'])+'°';
    degree3.innerText=Math.floor(data1['days'][0]['hours'][3]['temp'])+'°';
    degree4.innerText=Math.floor(data1['days'][0]['hours'][6]['temp'])+'°';
    degree5.innerText=Math.floor(data1['days'][0]['hours'][9]['temp'])+'°';
    degree6.innerText=Math.floor(data1['days'][0]['hours'][12]['temp'])+'°';
    degree7.innerText=Math.floor(data1['days'][0]['hours'][15]['temp'])+'°';
    degree8.innerText=Math.floor(data1['days'][0]['hours'][18]['temp'])+'°';

    // windsspeed data according to hours /////////////

    windflow1.innerText=Math.floor(data1['days'][0]['hours'][21]['windspeed'])+'km/h';
    windflow2.innerText=Math.floor(data1['days'][0]['hours'][0]['windspeed'])+'km/h';
    windflow3.innerText=Math.floor(data1['days'][0]['hours'][3]['windspeed'])+'km/h';
    windflow4.innerText=Math.floor(data1['days'][0]['hours'][6]['windspeed'])+'km/h';
    windflow5.innerText=Math.floor(data1['days'][0]['hours'][9]['windspeed'])+'km/h';
    windflow6.innerText=Math.floor(data1['days'][0]['hours'][12]['windspeed'])+'km/h';
    windflow7.innerText=Math.floor(data1['days'][0]['hours'][15]['windspeed'])+'km/h';
    windflow8.innerText=Math.floor(data1['days'][0]['hours'][18]['windspeed'])+'km/h';

    // console.log(search_logo.value);

}
 
function error(){
    console.log("Their was an error")
}


current_location.addEventListener('click',()=>{
    navigator.geolocation.getCurrentPosition(getlocation,error)
});
navigator.geolocation.getCurrentPosition(getlocation,error)





////////////////// text to speech//////////////////
///////////////Translation of language////////////////

let selected_language = document.getElementById('select_language');

async function translate(text,targetLanguage){
    const translate_link=`https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=${targetLanguage}&dt=t&q=${text}`;
    const translate_response=await fetch(translate_link);
    const translate_data=await translate_response.json();
    console.log(translate_data);
    return translate_data[0][0][0]
}

let speaker=document.querySelector('#speaker')
let speech=new SpeechSynthesisUtterance();
// let speech_data;
speaker.addEventListener('click',async()=>{
    text_after_translate= await translate(text,selected_language.value);
    speech.text=text_after_translate;
    speech.lang=selected_language.value
    window.speechSynthesis.speak(speech);
});