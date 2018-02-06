/**
Tony Karalekas
CS325 Web-Programming

Weekly Project

Project 3: "Ascii Animation Viewer"
ascii.js : js for ascii.html

Created: 1/18/17
Last Update: 1/23/17

Worked with Shafat Rahman
**/

"use strict";

var frameCount; //frame counter
var nextFrame; //used as my setInterval var that i can clear/update speed of
var playing; //playing boolean
var text;    //used to collect ALL text in area, even text that is typed by user
var speed;  //speed global variable

//when the window is loaded these variables are declared and actions are executed
window.onload = function () {
    stopDisabler();
    speed = 250;
    var starter = document.getElementById("start");
    var stopper = document.getElementById("stop");
    var animator = document.getElementById("animation");
    var chkbx = document.getElementById("turbo");
    var size = document.getElementById("size");
    animator.onchange = showAnimation;
    starter.onclick = start;
    stopper.onclick = stop;
    size.onchange = sizer;
    chkbx.onchange = setSpeed;
};

//this function handles the toggling of the animation dropdown menu and displays all the frames before start
function showAnimation() {
    var animationVal = document.getElementById("animation").value;
    document.getElementById("ta").value = ANIMATIONS[animationVal];
}

//start function is exectued on click of start button
//disables start and animation when started
//creates a setInterval with ALL the text inside the textarea and uses my changeFrame function to
//iterate through the separate split frames
function start() {
    playing = true;
    startDisabler();
    frameCount = 0;
    var textarea = document.getElementById("ta");
    var animation = document.getElementById("animation").value;
    text = textarea.value; //this is to make sure anything added to the text area if shown in the animation
    nextFrame = setInterval(changeFrame, speed, text, textarea, animation);
}


//splits up all the text within the textarea and iterates through all the frames
function changeFrame(txt, area, anim){
    var frames = txt.split("=====\n");
    if (frames[frameCount] === undefined)
        frameCount = 0;
    area.value = frames[frameCount];
    frameCount = frameCount+1;

}

//stop function is exectued on click of stop button
//disables stop button when started
//clears the current intervale and returns all the original text to the screen
function stop(){
    playing = false;
    stopDisabler();
    clearInterval(nextFrame);
    document.getElementById("ta").value = text; //returns the screen to the original text when stopped
}


//function called when the turbo checkbox is clicked
//checks whether the checkbox is checked or the text is clicked
//changes the speed value and then creates a new nextFrame variable with a new setInterval call with new speed
function setSpeed() {
    var textarea = document.getElementById("ta");
    var animation = document.getElementById("animation").value;
    if (document.getElementById("turbo").checked === true) {
        speed = 50;
        if(playing){
            clearInterval(nextFrame);
            nextFrame = setInterval(changeFrame, speed, text, textarea, animation);
        }
    }
    else {
        speed = 250;
        if(playing){
            clearInterval(nextFrame);
            nextFrame = setInterval(changeFrame, speed, text, textarea, animation);
        }
    }
}


//function called when the font size menu is toggled through
//fetches the value of the dropdown menu selection and then
//updates the size of ALL of the text in the textarea
function sizer(){
    var font = document.getElementById("size").value;
    //alert(font);
    if(font === "7"){
        //alert("tiny");
        document.getElementById("ta").style.fontSize = "7pt";
    }
    else if(font === "10"){
        //alert("small");
        document.getElementById("ta").style.fontSize = "10pt";
    }
    else if(font === "12"){
        //alert("medium");
        document.getElementById("ta").style.fontSize = "12pt";
    }
    else if(font === "16"){
        //alert("large");
        document.getElementById("ta").style.fontSize = "16pt";
    }
    else if(font === "24"){
        //alert("xl");
        document.getElementById("ta").style.fontSize = "24pt";
    }
    else if(font === "32"){
        //alert("xxl");
        document.getElementById("ta").style.fontSize = "32pt";
    }
}


//disabler for when start is clicked
function startDisabler(){
    document.getElementById("animation").disabled = true;
    document.getElementById("start").disabled = true;
    document.getElementById("stop").disabled = false;
}

//disabler for when stop is clicked
function stopDisabler(){
    document.getElementById("animation").disabled = false;
    document.getElementById("start").disabled = false;
    document.getElementById("stop").disabled = true;
}










