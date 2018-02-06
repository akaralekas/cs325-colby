$(document).ready(function () {
    $("button").click(function(){
        $.get("http://cs325.colby.edu/ajkarale/Project10/GetCountryData.php",
            { countryName: $("#countryName").val()},
            processRequest);
    });
});

function processRequest(data, status) {
    if(status == "success") {
        document.getElementById("putHere").innerHTML = data;
    } else {
        alert("Error making Ajax request:\n\nServer status:\n" + status);
    }
}
