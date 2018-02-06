/*
Tony Karalekas
CS325 Web-Programming

Homework Labs
Lab 3

"Javascript"
pimpmytext.js

Created: 1/11/17
Last Update: 1/11/17
*/

"use strict";

window.onload = function() {
    var buttonElement = document.getElementById("pimp");
    buttonElement.onclick = bigger;
    var checkboxElement = document.getElementById("chkbx");
    checkboxElement.onchange = check;
    var snoopElement = document.getElementById("snoop");
    snoopElement.onclick = snoopify;
}

function bigger() {
    alert("Hello World");
    var text = document.getElementById("t");
    text.style.fontSize = "24pt";
}

function check() {
    alert("Hello World");
    var text = document.getElementById("t");
    var checkboxElement = document.getElementById("chkbx");
    if (checkboxElement.checked == true) {
        text.style.fontWeight = 'bold';
        text.style.color = "green";
        text.style.textDecoration = "underline line-through";
    }
    else {
        text.style.fontWeight = 'normal';
        text.style.color = "black";
        text.style.textDecoration = "none";
    }
}

function snoopify() {
    alert("Hello World!");
    var txt = document.getElementById("t").value;
    var txt2 = txt.toUpperCase();
    var parts = txt.split(".");
    var str = parts.join("-izzle");
    document.getElementById("t").value = str
}