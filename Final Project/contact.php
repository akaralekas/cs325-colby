<?php
/**
 * Created by PhpStorm.
 * User: Tony
 * Date: 1/30/18
 * Time: 9:13 PM
 *
Tony Karalekas and Gerry Nvule
CS325: Web-Programming
Professor Dale Skrien

Final Project
contact.php file

Created: 1/23/18
Last Updated: 1/31/18
 *
 */


?>

<?php
$db = new PDO("mysql:dbname=ajkarale;host=localhost", "ajkarale", "jfkldqkur");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $name =htmlspecialchars($_GET["name"]);
 $email = htmlspecialchars($_GET["email"]);
 $message = htmlspecialchars($_GET["message"]);
 $year = $_GET["year"];
 $major = $_GET["major"];
 $schoolNC = $_GET["schoolNC"];

 try {
     $rows = $db->prepare("INSERT INTO contact (name, email, message, year, major, school_notColby) VALUES ('$name', '$email', '$message', '$year', '$major', '$schoolNC');");
     $rows->execute();
 }

 catch (PDOException $ex) {
     ?>
     <p>Sorry, a database error occurred. Please try again later.</p>
     <p>(Error details: <?= $ex->getMessage() ?>)</p>
     <?php
  }
header('Location:main.html');
?>

