<!-- Tony Karalekas
Lab 8 Excercise 7 -->
<!DOCTYPE html>
<html>
<body>

<h1> Movies from IMDB Small </h1>
<ul>


<?php

$db = new PDO("mysql:dbname=ajkarale;host=localhost", "ajkarale", "jfkldqkur");
$rows=$db->query("SELECT * FROM movies;");

foreach ($rows as $row) {
  ?>
  <li> <?= $row["name"] ?>,
       released in <?= $row["year"]  ?> </li>

<?php

}

?>

</body>
</html>
