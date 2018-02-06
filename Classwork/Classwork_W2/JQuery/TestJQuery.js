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


//example 1

/*
$(document).ready(function () {
    $("button").click(function () {
        $("p").hide();
    });
});
*/

//another example 1
/*
$(function(){
alert($('p').text());
});
*/


//example 2
/*
$(function(){
alert('Page contains ' + $('a').length + ' <a> elements!');
});
*/

//alternative example 2
/*$(function(){
alert('Page contains ' + $(document.getElementsByTagName('a')).length +
' <a> Elements');
}); */

//example 3 - id
/*$(document).ready(function(){
    $("button").click(function(){
        $("#test").hide();
    });
}); */

//example 4 - class
/*  $(document).ready(function(){
    $("button").click(function(){
        $(".test").hide();
    });
}); */ 

//example 5
/*
$(document).ready(function(){
    $("p").click(function(){
        $(this).hide();
    });
}); */

//example 6
/* $(document).ready(function(){
    $("#hide").click(function(){
        $("p").hide();
    });
    $("#show").click(function(){
        $("p").show();
    });
}); */

//Example 7: Demonstrate the speed of hiding
/* $(document).ready(function(){
    $("button").click(function(){
        $("p").hide(1000);
    });
}); */

//Example 8: Toggle
/* $(document).ready(function(){
    $("button").click(function(){
        $("p").toggle();
    });
});
 */

 //Example 9
/*$(document).ready(function(){
    $("button").click(function(){
        $("#div1").fadeIn();
        $("#div2").fadeIn("slow");
        $("#div3").fadeIn(3000);
    });
});*/

//Example 10
/*$(document).ready(function(){
    $("button").click(function(){
        $("#div1").fadeTo("slow", 0.15);
        $("#div2").fadeTo("slow", 0.4);
        $("#div3").fadeTo("slow", 0.7);
    });
});*/


//Example 11
/*$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});*/


//Example 12
/*$(document).ready(function(){
    $("button").click(function(){
        $("#div4").animate({
            left: '250px',
            opacity: '0.5',
            height: '150px',
            width: '150px'
        });
    });
});*/

//Example 13
/*$(document).ready(function(){
    $("button").click(function(){
        $("#callbk").hide("slow", function(){
            alert("The paragraph is now hidden");
        });
    });
});*/

//Example 14
/*$(document).ready(function(){
    $("button").click(function(){
        $("p").hide(1000);
        alert("The paragraph is now hidden");
    });
});*/

//==================================

//Example 15
/*
$(document).ready(function(){
    $("#btn1").click(function(){
        alert("Text: " + $("#test1").text());
    });
    $("#btn2").click(function(){
        alert("HTML: " + $("#test1").html());
	});
	$("#btn3").click(function(){
        alert("Value: " + $("#test2").val());
    });
});
*/

//Example 16
/*$(document).ready(function(){
    $("#btn4").click(function(){
        alert($("#cs").attr("href"));
    });
});*/

//Example 17
/*$(document).ready(function(){
    $("#btn5").click(function(){
        $("ol").append("<li>Appended item</li>");
    });
	$("#btn6").click(function(){
        $("ol").prepend("<li>Prepended item</li>");
    });
	$("#btn7").click(function(){
        $("img").before("<b>Before</b>");
    });

    $("#btn8").click(function(){
        $("img").after("<i>After</i>");
    });
});*/


//Example 19
/* $(document).ready(function(){
    $("#btn10").click(function(){
        $("h1, h2, p").addClass("red");
        $("div").addClass("important");
    });
	$("#btn11").click(function(){
        $("h1, h2, p").removeClass("red");
    });
	$("#btn12").click(function(){
        $("p").css({"background-color": "yellow", "font-size": "200%"});
    });
}); */

//Example 20
/* $(document).ready(function(){
    $("#btn13").click(function(){
        var txt = "";
        txt += "Width of div: " + $("#div5").width() + "</br>";
        txt += "Height of div: " + $("#div5").height()+ "</br>";
		txt += "Inner width of div: " + $("#div1").innerWidth() + "</br>";
        txt += "Inner height of div: " + $("#div1").innerHeight()+ "</br>";
		txt += "Outer width of div: " + $("#div1").outerWidth() + "</br>";
        txt += "Outer height of div: " + $("#div1").outerHeight()+ "</br>";
        $("#div5").html(txt);
    });
});
 */

//Example 21 – Traversing the DOM 
 //$(document).ready(function(){
	 
	  //returns all sibling elements between a <h2> and a <h6> element
    //$("h2").nextUntil("h6").css({"color": "red", "border": "2px solid red"});
	
	//returns all next sibling elements of <h2>
	//$("h2").nextAll().css({"color": "red", "border": "2px solid red"});
	
	//returns all sibling elements of <h2> that are <p> elements
	//$("h2").siblings("p").css({"color": "red", "border": "2px solid red"});
	
	//returns the direct parent element of <h2> elements
	 //$("h2").parent().css({"color": "red", "border": "2px solid red"});
//});



/*Exercises:
1.When any button is click, hide the button that was clicked
2.When a button whose name contains "hide" is clicked, hide the first list item of every unordered list
 */

//number 1
/*$(document).ready(function(){
    $("button").click(function(){
        $(this).hide();
    });
});*/


//number 2
$(document).ready(function(){
    $("button:contains('Hide')").click(function(){
        $("ul li:first-child").hide();
    });
});




































