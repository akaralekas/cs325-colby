/*
Tony Karalekas
CS325 Web-Programming

Classwork
Week 2

"Test JQuery"
testjquery.js

Created: 1/16/17
Last Update: 1/16/17
*/


$(document).ready(function() {
    $("#myform").submit(function() {
        var value = parseInt($("#in").val());
        if (! isNaN(value) && value >= 1 && value <= 1000){
            return true;
        }
        else{
            alert("Error: Not an integer from 1 to 1000");
            return false;
        }
    })
});