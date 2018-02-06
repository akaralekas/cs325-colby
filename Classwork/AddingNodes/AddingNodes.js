window.onload = function() {
    var buttonElement = document.getElementById("button");
    buttonElement.onclick = addParagraph;
}

function addParagraph() {
    var body = document.body;
    //body.innerHTML = body.innerHTML +
    //    '<p>This is another new paragraph.</p>';
    var para = document.createElement("p");
    para.innerHTML = "This is another new paragraph.";
    body.appendChild(para)
}
























































/*
function addParagraph() {
    var paraElement = document.createElement("p");
    var text1 = document.createTextNode("This is a paragraph with ");
    var scanElement = document.createElement("scan");
    scanElement.innerHTML = "red text";
    scanElement.style.color = "red";
    var text2 = document.createTextNode(" in the middle of it.");
    paraElement.appendChild(text1);
    paraElement.appendChild(scanElement);
    paraElement.appendChild(text2);
    var body = document.body;
    body.appendChild(paraElement);
}
*/