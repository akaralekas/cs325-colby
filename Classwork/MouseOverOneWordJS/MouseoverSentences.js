var wordIndex = 0;
var words = ["noisely", "quietly", "furiously", "well", "horribly"];
window.onload = function() {
    var elt = document.getElementById("adverb");
    elt.onmouseover = function() {
        wordIndex = (wordIndex + 1) % words.length;
        elt.innerHTML = words[wordIndex];
    }
}
