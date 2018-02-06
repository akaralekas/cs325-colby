<?php
/**
 * Created by PhpStorm.
 * User: Tony
 * Date: 1/25/18
 * Time: 9:31 AM
 *
Tony Karalekas
CS325: Web-Programming
Professor Dale Skrien

Project 4
"The Six Degrees of Kevin Bacon"
search-kevin.php file

Created: 1/25/18
Last Updated: 1/30/18
 */
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Link to your CSS file that you should edit -->
    <link href="bacon.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php
include "common.php";
$rows=$db->query("SELECT name, year FROM movies JOIN roles r1 ON movies.id=r1.movie_id
            JOIN actors a1 ON r1.actor_id=a1.id JOIN roles r2 ON movies.id=r2.movie_id JOIN actors a2
            ON r2.actor_id=a2.id WHERE r1.actor_id='".$id."' AND r2.actor_id='22591' ORDER BY year DESC, name ASC;");


if($rows->rowCount()== 0){
    ?>

    <p id="sorry">Sorry, <?= $_GET["firstname"] ?> <?= $_GET["lastname"] ?> has never been in a movie with Kevin Bacon.</p>


    <?php
}

else{
    ?>
    <h4>Movies that feature both <?= $_GET["firstname"] ?> <?= $_GET["lastname"] ?> and Kevin Bacon:</h4>
    <table>
        <tr>
            <th>
                #
            </th>
            <th>
                Title
            </th>
            <th>
                Year
            </th>
        </tr>


        <?php
        $index = 1;
        foreach($rows as $row){
            ?>

            <tr>
                <td><?= $index ?></td>
                <td><?= $row["name"]?></td>
                <td><?= $row["year"]?></td>
                <?php $index ++ ?>
            </tr>

            <?php
        }

        ?>
    </table>
    <br>
    <br>
    <br>

    <?php
}
include "bottom.html";
?>

</body>
</html>

