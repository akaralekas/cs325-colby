"use strict";

(function () {
    var maxZ = 1000;   // z-index of rectangle that gets clicked
    window.onload = function () {
        var add = document.getElementById("add");
        add.onclick = addSquare;
        var colors = document.getElementById("colors");
        colors.onclick = changeColors;
        var squareCount = parseInt(Math.random() * 21) + 30;
        for (var i = 0; i < squareCount; i++) {  // create random squares
            addSquare();
        }
    };

    // Gives a new randomly chosen color to every square on the page.
    function changeColors() {
        var squares = document.querySelectorAll("#squarearea div");
        for (var i = 0; i < squares.length; i++) {
            squares[i].style.backgroundColor = getRandomColor();
        }
    }

    // Creates and adds a new square div to the page.
    function addSquare() {
        var square = document.createElement("div");
        square.className = "square";
        square.style.left = parseInt(Math.random() * 650) + "px";
        square.style.top = parseInt(Math.random() * 250) + "px";
        square.style.backgroundColor = getRandomColor();
        square.onclick = squareClick;
        var squareArea = document.getElementById("squarearea");
        squareArea.appendChild(square);
        square.onmousedown=squareDrag;
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

    // Called when a square is clicked; moves it to the top or removes it.
    function squareClick() {
        var oldZ = parseInt(this.style.zIndex);
        if (oldZ === maxZ) {
            this.parentNode.removeChild(this);   // square is on top; remove it
        } else {
            maxZ++;
            this.style.zIndex = maxZ;
        }
    }

    // Called when a square is clicked; moves it to the top or removes it.
    function squareDrag() {
        var oldZ = parseInt(this.style.zIndex);
        if (oldZ === maxZ) {
            this.parentNode.removeChild(this);   // square is on top; remove it
        } else {
            maxZ++;
            this.style.zIndex = maxZ;
        }
    }
})();
