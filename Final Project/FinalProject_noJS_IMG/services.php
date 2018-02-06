<?php
/**
 * Created by PhpStorm.
 * User: Tony Karalekas
 * Date: 1/29/18
 * Time: 11:51 AM
 *
Tony Karalekas and Gerry Nvule
CS325: Web-Programming
Professor Dale Skrien

Final Project
services.php file

Created: 1/23/18
Last Updated: 1/31/18
 *
 */

$db = new PDO("mysql:dbname=ajkarale;host=localhost", "ajkarale", "jfkldqkur");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Disrupt Colby: Services</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Services Form CSS -->
    <link href="services.css" type="text/css"  rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"
            type="text/javascript"></script>

    <script src="services.js" type="text/javascript"></script>

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="main.html">Disrupt Colby</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="main.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="team.html">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="solicit">
    <form action="services_submit.php" onsubmit="alert('Thanks for offering your service!')">

        <h1>Sign-up and Solicit your Skills!</h1>
        <label>Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">

        <!-- Here we did used regular expressions to make sure the email address was valid -->
        <label >Email Address:</label>
        <input type="text" id="email" name="email" placeholder="Your last name.."
               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
               title="characters followed by an @ sign,
                                  followed by more characters, and then a (.) "
               required> <br>

        <label>Discipline:</label>
        <select name="discipline" id="discipline">
            <option value="Art">Art</option>
            <option value="Business">Business</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Economics">Economics</option>
            <option value="Environment">Environment</option>
            <option value="Finance">Finance</option>
            <option value="Government">Government</option>
            <option value="History">History</option>
            <option value="Law">Law</option>
            <option value="Leadership">Leadership</option>
            <option value="Math">Math</option>
            <option value="Microsoft Suite">Microsoft Suite</option>
            <option value="Science">Science</option>
            <option value="Speaking">Speaking</option>
            <option value="Other">Other</option>
        </select>
        <br>
        <label>Skills:</label>
        <input type="text" name="skill" placeholder="List your skills..">


        <input id="submitbtn" type="submit" value="Sign-Up">
    </form>
</div>

<hr>
<hr>

<div class="servicetable">
    <h1>Services Database!</h1>
    <p>Select a discipline and skill below to find a resource: </p>
    <fieldset>
        <label>Discipline:</label>
        <select id="discipline_dropdown">
            <option value="Art">Art</option>
            <option value="Business">Business</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Economics">Economics</option>
            <option value="Environment">Environment</option>
            <option value="Finance">Finance</option>
            <option value="Government">Government</option>
            <option value="History">History</option>
            <option value="Law">Law</option>
            <option value="Leadership">Leadership</option>
            <option value="Math">Math</option>
            <option value="Microsoft Suite">Microsoft Suite</option>
            <option value="Science">Science</option>
            <option value="Speaking">Speaking</option>
            <option value="Other">Other</option>
        </select>
        <br>
        <label class="skill">Skill:</label>
        <input class="skill" type="text" id="skillz" placeholder="Filter seacrch by skills..">
        <br>
        <button id="searchbtn" type="button">Search</button>
        <br>
    </fieldset>
    <br>
    <table id="putHere">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Discipline</th>
            <th>Skill</th>
        </tr>
        <div>
            <?php
            try{
                $services = $db->prepare("SELECT * FROM services;");
                $services->execute();

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
        </div>
    </table>
</div>


<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Disrupt Colby 2018</p>
    </div>
    <!-- /.container -->
</footer>

</body>
</html>