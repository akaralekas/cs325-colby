/*
Tony Karalekas
CS325 Web-Programming

Classwork in Lab
Week 1

"DomTree Javascript File"
domtree.js

Created: 1/11/17
Last Update: 1/11/17
*/
// --New Code... you can create a function without naming it--

"use strict";

window.onload = function() {
    var p = document.getElementsByTagName("p")[0]; //this is how to grab a hold of a particular node
    p.onmouseover = message;
    p.onmouseout = oldmessage;
}

function message() {
    var body = document.getElementsByTagName("p")[0];
    body.innerHTML = "You did it!";
}

function oldmessage() {
    var body = document.getElementsByTagName("p")[0];
    body.innerHTML = "Move the mouse onto this text.";
}