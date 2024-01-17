<?php

$dbHost="localhost";
// since on local machine not on a server
$dbUser="joshua";
// default is root
$dbPassword="HASHED";
// blank is default
$dbName="joshdb1";
// name of the db not the table

try {
	$dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
	$pdo = new PDO($dsn, $dbUser, $dbPassword);
	// echo "Connection Successful";
} catch(PDOException $e){
	echo "DB Connection Failed: " . $e->getMessage();
}
// . means concatenate, pdo has a format in which connection must be made

$firstname="none";
$school="none";
$category="none";
$predicted="none";
$achieved="none";
$feedbackforme="none";
$myrating="none";


if ($_SERVER['REQUEST_METHOD']==='POST'){
	if (isset($_POST['firstname']) && !empty($_POST['firstname'])){
        $firstname=$_POST['firstname'];
    } else{
		$firstname="-";
	}

	if (isset($_POST['school']) && !empty($_POST['school'])){
        $school=$_POST['school'];
    } else{
		$school="-";
	}

    if (isset($_POST['category']) && !empty($_POST['category'])){
        $category=$_POST['category'];
    }
    if (isset($_POST['predicted']) && !empty($_POST['predicted'])){
        $predicted=$_POST['predicted'];
    }
    if (isset($_POST['achieved']) && !empty($_POST['achieved'])){
        $achieved=$_POST['achieved'];
    }
    if (isset($_POST['feedbackforme']) && !empty($_POST['feedbackforme'])){
        $feedbackforme=$_POST['feedbackforme'];
    }
    if (isset($_POST['myrating']) && !empty($_POST['myrating'])){
        $myrating=$_POST['myrating'];
    }

	$sql = "INSERT INTO myfeedback2 (first_name, name_of_school, year_group, predicted_grade, achieved_grade, five_star_rating, comments)
	VALUES(:firstname, :school, :category, :predicted, :achieved, :myrating, :feedbackforme)";
	// table name, and reference column names
	$stmt=$pdo->prepare($sql);

	$stmt -> execute(['firstname'=>$firstname, 'school'=>$school, 'category'=>$category, 'predicted'=>$predicted, 'achieved'=>$achieved, 'myrating'=>$myrating, 'feedbackforme'=>$feedbackforme]);

}
// values are now stored in these variables
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reviews</title>
	<link rel="icon" type="image/x-icon" href="images/myicon.ico">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="mystyles.css">
</head>
<body>
	<div class="container">
		<div class="nav-wrapper">
			<div class="left-side">
				<div class="nav-link-wrapper">
					<a href="draft1.html">Home</a>
				</div>
				<div class="nav-link-wrapper">
					<a href="contactpage.html">Contact</a>
				</div>
				<div class="nav-link-wrapper">
					<a href="reviews.html">Reviews</a>
				</div>
				<div class="nav-link-wrapper active-nav-link">
					<a href="leaveareviewpage.php" style="color: blueviolet">Leave a review</a>
				</div>
				<div class="nav-link-wrapper">
					<a href="twitterline.html">Recent news</a>
				</div>
			</div>
			<div class="right-side">
				<div class="brand">
				<div>Joshua Edwards Tutoring</div>
				</div>
			</div>
		</div>

			<div class="content-wrapper">
				<div class="submission-wrapper">
                    <h1>Thanks for your feedback!</h1>
                    <h4>You can now view this in the <a href="reviews.php">Reviews</a> section</h4>
                    <p>Your feedback:</p>
                    <div style="padding-left: 10px">
                    First name: <?php echo $firstname ?> <br>
                    School: <?php echo $school ?> <br>
                    Year group: <?php echo $category ?> <br>
                    Predicted grade: <?php echo $predicted ?> <br>
                    Grade achieved: <?php echo $achieved ?> <br>
                    Rating: <?php echo $myrating ?> out of 5 <br>
                    Comments: <?php echo $feedbackforme ?> <br>
                    </div>
                    <br><br>
                    More to say? why not <a href="leaveareviewpage.php"><b>leave another review</b></a>

				</div>
			</div>

        <div class="footer">
            <footer>
                <h6>Website created by Joshua Edwards</h6>
                <p class="copyrightClaim">Copyright 2022</p>
            </footer>
        </div>
	</div>
</body>
</html>

