/*
Tony Karalekas
CS325 Web-Programming

Homework Labs
Lab 4

"Drag a Square"
dragsquare.js

Created: 1/15/17
Last Update: 1/15/17
*/
"use strict";

(function () {
    var square = document.createElement("div");
    var mousedown;
    //var octopus = document.getElementById("rectanglearea").style.height;
    window.onload = function () {
        addSquare();
    };

    // Creates and adds a new square div to the page.
    function addSquare() {
        square.className = "rectangle";
        square.style.left = parseInt(Math.random() * 650) + "px";
        square.style.top = parseInt(Math.random() * 250) + "px";
        square.style.backgroundColor = getRandomColor();
        var rectangleArea = document.getElementById("rectanglearea");
        rectangleArea.appendChild(square);
        square.onmousedown=mouseDown;
        square.onmouseup=mouseUp;
        square.onmousemove=mouseMove;
    }

    // Generates and returns a random color string such as "#f08a7c".
    function getRandomColor() {
        var letters = "0123456789abcdef";
        var result = "#";
        for (var i = 0; i < 6; i++) {
            result += letters.charAt(parseInt(Math.random() * letters.length));
        }
        return result;
    }

    function mouseUp() {
        mousedown = false;
        square.onmouseup = null;
    }

    function mouseDown() {
        mousedown = true;
        mouseMove(event.pageX, event.pageY);
    }

    function mouseMove(pageX, pageY) {
        if (mousedown){
            square.style.left = pageX - square.offsetWidth + 'px';
            square.style.top = pageY - square.offsetHeight + 'px';
        }
    }

    function squareDrag(event) {
        mouseMove(event.pageX, event.pageY);
    }

    // move the ball on squareDrag
    document.addEventListener('mousemove', squareDrag);

})();