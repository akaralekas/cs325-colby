<?php

$date = date("D M d Y, g:i a");
$date = $date . " " . "EST";
$username = $_POST["username"];
$usercomment = $_POST["usercomment"];


$f = file_get_contents("addComment.html");


$splitter = explode("</h1>", $f);


$beforeLink = stristr($usercomment, 'http', true);
$linkStart = stristr($usercomment, 'http');
$afterLink = substr($linkStart, strpos($linkStart, " "));
if($linkStart !== false){
    $usercomment = '';
}
while($linkStart !== false) {
    $link = substr($linkStart, 0, strpos($linkStart, " "));
    $text = '<a href="' . $link . '">' . $link . '</a>';
    $usercomment = $usercomment . $beforeLink . " " . $text. " ";

    if (stristr($afterLink, 'http')!== false){
        $beforeLink = substr($linkStart, strpos($linkStart, " "), strpos($linkStart, "http", 1) - strpos($linkStart, " "));
        $linkStart = stristr($afterLink, 'http');
        $afterLink = substr($linkStart, strpos($linkStart, " "));
    }
    else {
        $linkStart = stristr($afterLink, 'http');
    }
}

$usercomment = $usercomment . $afterLink;

//got help from TA Martin!


$final = $splitter[0]. "</h1>". "<div class='commentbox'><p class='usercomment'>". $usercomment .
    "</p><div class= 'username'>" . $username . "</div><div class='date'>" . $date . "</div></div>".$splitter[1];

file_put_contents("addComment.html",$final);


//header('Location:addComment.html');
//SPOKE WITH DALE: this was giving me an error, so echo command is okay
//Even though it only prints one comment, the format is correct
echo $final;
?>