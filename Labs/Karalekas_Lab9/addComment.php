<?php
$db = new PDO("mysql:dbname=ajkarale;host=localhost", "ajkarale", "jfkldqkur");


$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//isSet
if (isset($_POST["submit"])){
	$username =htmlspecialchars($_POST["username"]);
	$usercomment = htmlspecialchars($_POST["usercomment"]);
    $date = date("D M d Y, g:i a");
    $date = $date . " " . "EST";

	//worked with Shafat to change my URL reading
	$usercomment = preg_replace('#\b((?i)https?(?-i)://[\S]+)#', '<a href="$1">$1</a>', $usercomment);

	try {

        $rows = $db->prepare("INSERT INTO comments (name, comment, date) VALUES ('$username', '$usercomment', '$date');");
        $rows->execute();
	}

	//Help with PODexception from Shafat
	catch (PDOException $ex) {
	?>
	<p>Sorry, a database error occurred. Please try again later.</p>
	<p>(Error details: <?= $ex->getMessage() ?>)</p>

<?php
  }
  header('Location:addComment.php');
	//echo $usercomment;
    //help from TA Martin
  }



//----------------------------------------------------------------------------------------------------------------
//$sql ="INSERT INTO comments (name, comment, date) VALUES ( $username, $usercomment, $date)";
//$db->exec($sql);
//$rows = $db->query("SELECT * FROM comments ORDER BY date ASC;");

/*Project 7 Stuff Commented Out
---------------------------------
beforeLink = stristr($usercomment, 'http', true);
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
//got help from TA Martin!
$usercomment = $usercomment . $afterLink;

$final = $splitter[0]. "</h1>". "<div class='commentbox'><p class='usercomment'>". $usercomment .
"</p><div class= 'username'>" . $username . "</div><div class='date'>" . $date . "</div></div>".$splitter[1];
file_put_contents("addComment.html",$final);

*/

//header('Location:addComment.html');
//SPOKE WITH DALE: this was giving me an error, so echo command is okay
//Even though it only prints one comment, the format is correct
//echo $final;
//----------------------------------------------------------------------------------------------------------------------


?>


<!DOCTYPE html >
<!--
    Author: Dale Skrien
    Course: CS325 Jan 2018

    Updated by: Tony Karalekas
    addComment.php

    Worked with Shafat Rahman on PHP

    GOT HELP FROM TA MARTIN and Shafat
    1/26/18
-->

<html lang="en">
<head>
<meta charset="UTF-8" />
<title>User Comments</title>
<link rel="stylesheet" type="text/css" href="addComment.css" />
</head>

<body>
<h1>User Comments</h1>

<?php

try {
    $rows = $db->prepare("SELECT * FROM comments ORDER BY date DESC;"); //by desceding date
    $rows->bindParam('username', $username);
    $rows->bindParam('usercomment', $usercomment);
    $rows->bindParam('date', $date);
    $rows->execute();

  foreach ($rows as $row) {
  ?>

  <div class="commentbox"><p class="usercomment"><?= $row["comment"]  ?></p>
  	<div class="username"><?= $row["name"]  ?></div>
   	<div class="date"><?= $row["date"] ?> </div>
  </div>

<?php
}
}

//PODException help from Shafat
catch (PDOException $ex) {
  ?>
  <p>Sorry, a database error occurred. Please try again later</p>
  <p>(Error details: <?= $ex->getMessage() ?>)</p>

<?php

}

?>

<!-- REMOVED FOR PHP LOOP
<div class="commentbox"><p class="usercomment">My favorite muppets are Waldorf and Statler.  Do you remember them?
    They are the hecklers from the box seats.  Waldorf's wife's name is Astoria.</p><div class="username">Gary</div>
    <div class="date">Sun Jan 21 2018, 3:00 am EST</div>
</div>

<div class="commentbox"><p class="usercomment">CS 325 is such an awesome course!  The instructor is particularly awesome.
</p><div class="username">Dale</div><div class="date">Wed Dec 13 2017, 2:15 pm EST</div></div>
-->


<fieldset>
	<legend>Add a comment</legend>
    <form action="addComment.php" method="post"><div>
    	<dl>
            <dt>Name</dt>
            <dd><input type="text" name="username" required/>             </dd>
			<dt>Comment</dt>
            <dd><textarea rows="5" cols="60" name="usercomment" required></textarea>
            </dd>
        </dl>
        <input type="submit" value="Submit" name = "submit" />
        <input type="reset" /></div>
    </form>
    </fieldset>

<!--validation images-->
<!--validation images-->
<div id="w3c">
    <a href="https://validator.w3.org/">
        <img src="https://webster.cs.washington.edu/images/w3c-html.png" alt="Valid HTML5" /></a>
    <a href="https://jigsaw.w3.org/css-validator/">
        <img src="https://webster.cs.washington.edu/images/w3c-css.png" alt="Valid CSS" /></a>
</div>

</body>
</html>