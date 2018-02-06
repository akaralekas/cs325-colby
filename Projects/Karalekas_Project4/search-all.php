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
search-all.php file

Created: 1/25/18
Last Updated: 1/30/18
 */
?>
<?php
include "common.php";
$rows=$db->query("SELECT name, year FROM movies JOIN roles ON movies.id=roles.movie_id
            JOIN actors ON roles.actor_id=actors.id WHERE roles.actor_id='".$id."' ORDER BY year DESC, name ASC;");


if($rows->rowCount()== 0){
?>

    <p id="sorry">Sorry, <?= $_GET["firstname"] ?> <?= $_GET["lastname"] ?> was not found in the database!</p>

<?php
}

else{
?>
    <h4>Movies that feature <?= $_GET["firstname"] ?> <?= $_GET["lastname"] ?>:</h4>
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

