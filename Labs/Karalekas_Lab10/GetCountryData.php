<?php
/**
 * Created by PhpStorm.
 * User: Tony Karalekas
 * Date: 1/29/18
 * Time: 12:42 PM
 *
 *
 * CS325 Web Programming
 * Professor Dale Skrien
 *
 * Lab 10: Ajax Work
 * CountryInfo.php
 *
 * Last updated: 1/29/17
 */
?>

<?php

$db = new PDO("mysql:dbname=ajkarale;host=localhost", "ajkarale", "jfkldqkur");

try{
    $countryname = $_GET["countryName"];
    $countryData = $db->prepare("SELECT * FROM CountriesSmall WHERE name = '$countryname'");
    $countryData->execute();
    foreach($countryData as $data){
        ?>
        <td> <?= $data['code']?></td>
        <td> <?= $data['name']?></td>
        <td> <?= $data['continent']?></td>
        <td> <?= $data['region']?></td>
        <td> <?= $data['surface_area']?></td>
        <td> <?= $data['independace_year']?></td>
        <td> <?= $data['population']?></td>
        <td> <?= $data['life_expectancy']?></td>
        <td> <?= $data['gnp']?></td>
        <td> <?= $data['gnp_old']?></td>
        <td> <?= $data['local_name']?></td>
        <td> <?= $data['government_form']?></td>
        <td> <?= $data['head_of_state']?></td>
        <td> <?= $data['capital']?></td>
        <td> <?= $data['code2']?></td>
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


