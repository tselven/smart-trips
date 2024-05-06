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

/* var users = get('http://localhost:8080/users');
users.then(function(result) {
    console.log(result);
}) */