/*
Tony Karalekas
CS325 Web-Programming

Lab Homeworks
Lab 5

"Ticket Giveaway"
Working with Forms, JQuery, and Validation

lab5.js: JQUERY

Created: 1/17/17
Last Update: 1/17/17
*/

/*
Here I did one JQuery validation work:

A) --I made sure confirm password matched the original password
B) --Toggle Listboxes of Preferences with the corresponding Checkboxes!
 */


/* A) Password Match */
$(document).ready(function(){
    $('#confirmpass').focusout(function(){
        var pass = $('#pass').val();
        var pass2 = $('#confirmpass').val();
        if(pass != pass2){
            alert('Passwords did not match!');
        }
    });
});



/* B) Toggle Listboxes of Preferences with the Checkboxes! */
$(document).ready(function(){
    $("#cb1").change(function() {
        if(this.checked) {
            $(".s1").show()
        }
        else{
            $(".s1").hide()
        }
    });
});

$(document).ready(function(){
    $("#cb2").change(function() {
        if(this.checked) {
            $(".s2").show()
        }
        else{
            $(".s2").hide()
        }
    });
});

$(document).ready(function(){
    $("#cb3").change(function() {
        if(this.checked) {
            $(".s3").show()
        }
        else{
            $(".s3").hide()
        }
    });
});

$(document).ready(function(){
    $("#cb4").change(function() {
        if(this.checked) {
            $(".s4").show()
        }
        else{
            $(".s4").hide()
        }
    });
});

$(document).ready(function(){
    $("#cb5").change(function() {
        if(this.checked) {
            $(".s5").show()
        }
        else{
            $(".s5").hide()
        }
    });
});
