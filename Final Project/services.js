$(document).ready(function(){
    $("#discipline_dropdown").change(function() {
        $(".skill").show();
    });
});

$(document).ready(function () {
    $("#searchbtn").click(function(){
        $.get("http://cs325.colby.edu/ajkarale/FinalProject/service_filter.php",
            { discipline: $("#discipline_dropdown").val(), skill:$("#skillz").val()},
            processRequest);
    });
});

function processRequest(data, status) {
    if(status == "success") {
        $("#putHere").html(data);
    } else {
        alert("Error making Ajax request:\n\nServer status:\n" + status);
    }
}
