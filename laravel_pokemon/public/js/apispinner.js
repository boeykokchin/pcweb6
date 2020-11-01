// Get air temperature at current date_time via Singapore gov data API and at the same time provide spinner loading animation. Upon API loaded, spinner is hidden.

// API url

var today=new Date();
var dd=today.getDate();
var mm=today.getMonth()+1;
var yyyy=today.getFullYear();

if (dd<10) {
    dd='0'+dd;
}

if (mm<10) {
    mm='0'+mm;
}

var date=yyyy+'-'+mm+'-'+dd;

var hh=today.getHours();
var min=today.getMinutes()+1;
var ss=today.getSeconds();

if (min<10) {
    min='0'+min;
}

if (ss<10) {
    ss='0'+ss;
}

var time=hh+'%3A'+min+'%3A'+ss;

urlLink = 'https://api.data.gov.sg/v1/environment/air-temperature?date_time=' + date + 'T' + time;

// const api_url = "https://api.data.gov.sg/v1/environment/air-temperature?date_time=2020-11-01T20%3A00%3A00";

const api_url = urlLink;

// Defining async function
async function getapi(url) {

	// Storing response
	const response = await fetch(url);

	// Storing data in form of JSON
	var apidata = await response.json();
	// console.log(apidata['items'][0]['readings'][2]['value']);
	if (response) {
		hideSpinner();
	}
	document.getElementById("data").innerHTML
        = `${apidata['items'][0]['readings'][2]['value']}`;
    // $("#data").html
    //     = `${apidata['items'][0]['readings'][2]['value']}`;

}

// Calling that async function
getapi(api_url);

// Function to hide the Spinner
function hideSpinner() {
	document.getElementById('spinner')
	// $('spinner')
			.style.display = 'none';
}
