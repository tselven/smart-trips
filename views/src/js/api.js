/**
 * used internally for call api methods
 * @param string url 
 * @param array options 
 * @return response object
 */
async function API(url, options = {}) {
    try {
        var response = await fetch(url, options);
        var data = await response.json();
        return data;
    } catch (error) {
        console.error('Error fetching data:', error);
        throw error;
    }
}



async function get(url) {
    var options = {
        method : 'GET'
    }
    var res = await API(url, options);
    return res;
}

// Set session variable
function setSessionVariable(key, value) {
    localStorage.setItem(key, value);
}

// Get session variable
function getSessionVariable(key) {
    const value = localStorage.getItem(key);
    return value ? JSON.parse(value) : null;
}

function getUserLocation() {
    if (navigator.geolocation) {
        try{
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            return "hi";
        }
        catch{

        }
        //navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
    } else {
        console.log("Geolocation is not supported by this browser.");
    }
}


function successCallback(position) {
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;
    setSessionVariable("long",longitude);
    setSessionVariable("lat",latitude);
    console.log("Latitude:", latitude);
    console.log("Longitude:", longitude);
    return [longitude, latitude];
    // You can pass latitude and longitude to other functions for further processing
}

function errorCallback(error) {
    console.log("Error getting user's location:", error.message);
}

getUserLocation();