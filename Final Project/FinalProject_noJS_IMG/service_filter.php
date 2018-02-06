<?php
/**
 * Created by PhpStorm.
 * User: Tony
 * Date: 1/31/18
 * Time: 1:48 PM
 *
 *
Tony Karalekas and Gerry Nvule
CS325: Web-Programming
Professor Dale Skrien

Final Project
service_filter.php file

Created: 1/23/18
Last Updated: 1/31/18
 *
 */

$db = new PDO("mysql:dbname=ajkarale;host=localhost", "ajkarale", "jfkldqkur");
?>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Discipline</th>
        <th>Skill</th>
    </tr>
<?php
try{

    $discipline = $_GET["discipline"];
    $skill = $_GET['skill'];

    if(empty($skill)){
        $services = $db->prepare("SELECT * FROM services WHERE discipline = '$discipline';");
        $services->execute();
    }

    else{
        $services = $db->prepare("SELECT * FROM services WHERE discipline = '$discipline' AND skill LIKE '$skill%';");
        $services->execute();
    }

    foreach ($services as $service){
        ?>
        <tr>
            <td> <?= $service['name']?></td>
            <td> <?= $service['email']?></td>
            <td> <?= $service['discipline']?></td>
            <td> <?= $service['skill']?></td>
        </tr>
        <?php
    }
}
catch (PDOException $ex) {
    ?>
    <p>Sorry, a database error occurred. Please try again later</p>
    <p>(Error details: <?= $ex->getMessage() ?>)</p>
    <?php
}
?>
</table>