<?php
/**
 * Created by PhpStorm.
 * User: Tony Karalekas
 * Date: 1/29/18
 * Time: 11:51 AM
 *
 * CS325 Web Programming
 * Professor Dale Skrien
 *
 * Lab 10: Ajax Work
 * CountryInfo.php
 *
 * Last updated: 1/29/17
 *
 */

$db = new PDO("mysql:dbname=ajkarale;host=localhost", "ajkarale", "jfkldqkur");
?>

<!DOCTYPE html>
<!-- Author: Anthony Karalekas
     Class: CS325 Web Programming
-->
<html>
<head>
    <meta charset="UTF-8" />
    <title>Country Database</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"
            type="text/javascript"></script>
    <script src="CountryInfo.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="CountryInfo.css" />


</head>
<body>

    <h1>Countries Database!</h1>
    <p>Select a country below and learn more: </p>

    <fieldset>
        <select id="countryName">
            <?php
            try{
                $rows = $db->prepare("SELECT name FROM CountriesSmall ORDER BY name;"); //by desceding date
                $rows->execute();

            foreach ($rows as $row){
            ?>
                <option> <?= $row['name']?></option>
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
        </select>
        <br><br>
        <button type="button">Submit</button>
    </fieldset>
    <table>
        <tr>
            <th>Country Code</th>
            <th>Name</th>
            <th>Continent</th>
            <th>Region</th>
            <th>Surface Area</th>
            <th>Independence Year</th>
            <th>Population</th>
            <th>Life Expectancy</th>
            <th>GNP</th>
            <th>GNP Old</th>
            <th>Local Name</th>
            <th>Government Form</th>
            <th>Head of State</th>
            <th>Capital</th>
            <th>Code 2</th>
        </tr>
        <tr id="putHere">
        </tr>
    </table>


</body>
</html>

