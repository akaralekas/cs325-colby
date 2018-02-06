/*
Tony Karalekas
CS325 Web-Programming

Homework Labs
Lab 4

"Catch a Square"
catchsquare.js

Created: 1/15/17
Last Update: 1/15/17
*/

"use strict";

(function () {
    var square = document.createElement("div");
    var result = 0;
    var count;
    var over;
    var time = 5;
    var mousedown;
    window.onload = function () {
        count = setInterval(beginCountdown, 1000);
    };

    // Creates and adds a new square div to the page.
    function addSquare() {
        square.className = "square";
        square.style.left = parseInt(Math.random() * 650) + "px";
        square.style.top = parseInt(Math.random() * 250) + "px";
        square.style.backgroundColor = getRandomColor();
        //square.onclick = squareClick;
        var rectangleArea = document.getElementById("rectanglearea");
        rectangleArea.appendChild(square);
        square.onmousedown=mouseDown;
        setInterval(squareMove, 1000); //interval of moving the square
        count = setTimeout(gameOver, 3000); // game over timeout if idle for 3 seconds
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

    //Moves the square around randomly 30px
    function squareMove() {
        square.style.left = parseInt(square.style.left) + parseInt((Math.random()-0.5) * 30) + "px";
        square.style.top = parseInt(square.style.top) + parseInt((Math.random()-0.5) * 30) + "px";
    }

    //When you click generates and new sqaure randomly and then resets the counter
    function mouseDown() {
        clearTimeout(count);
        this.parentNode.removeChild(this); //  remove it
        addSquare();
        result+=1;
        document.getElementById("result").innerHTML = result;
    }

    //Game over function that gives alert
    function gameOver() {
        alert("Game Over");
        result = 0;
    }

    //countdown function that counts down to the beginning of the game
    function beginCountdown(){
        document.getElementById("message").innerHTML = "The game starts in " + time + " seconds.";
        time --;
        if (time === -1){
            clearInterval(count);
            document.getElementById("message").innerText = "Go!";
            addSquare();
        }
    }

})();


//setInterval
//clearInterval
//setTimeOut
//clearTimeOut