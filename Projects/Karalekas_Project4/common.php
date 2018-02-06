<?php
/**
 * Created by PhpStorm.
 * User: Tony
 * Date: 1/30/18
 * Time: 12:47 PM
 */
?>

<?php
include "top.html";
$db = new PDO("mysql:dbname=ajkarale;host=localhost", "ajkarale", "jfkldqkur");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$first_name = $_GET["firstname"];
$last_name = $_GET["lastname"];

?>
    <h1 id="results">Results for <?= $first_name ?> <?= $last_name ?> </h1>
<?php

$q1 = "SELECT id FROM actors WHERE (first_name LIKE '".$_GET['firstname']." %'
            OR first_name = '".$_GET['firstname']."') AND last_name = '".$_GET['lastname']."'";

$q2 = "SELECT first_name, last_name FROM actors WHERE (first_name LIKE '".$_GET['firstname']." %'
            OR first_name = '".$_GET['firstname']."') AND last_name = '".$_GET['lastname']."'";
$id = null;
$counter = 0;

foreach($db->query($q1) as $row) {
    $counter ++;
}

//THIS is a my check for multiple actors with the same name
//If there are more than one actor with a similar name, return all the names
//and make it easy for the user to re-search for the correct name
if($counter > 1){
    ?>
    <h3>Whoops! There are multiple actors with a similar name.</h3>
    <h4>Try searching again. This should help you narrow your search:</h4>
    <?php
    foreach($db->query($q2) as $name){
        ?>
        <p>Actor: <?=$name['first_name'] ?> <?=$name['last_name'] ?></p>
        <?php
    }
}
else{
    $id = $row['id'];
}
?>
