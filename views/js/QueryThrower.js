var queryString = (params) => Object.keys(params).map(key => key + '=' + params[key]).join('&');
throwQuery = function throwQuery(address, params,  actionType = "GET",completed) {
    let req = new XMLHttpRequest();
    req.open(actionType,address+"?"+queryString(params),true);
    req.onreadystatechange = function() {//Call a function when the state changes.
        if(req.readyState == 4 && req.status == 200) {
            completed(req.responseText);
        }
    }
    req.send();
}



