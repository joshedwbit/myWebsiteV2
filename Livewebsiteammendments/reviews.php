<?php


$dbHost="localhost";
// since on local machine not on a server
$dbUser="joshua";
// default is root
$dbPassword="Piercedjelly22!";
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


$sql='SELECT * FROM myfeedback2 ORDER BY id desc';
// select all columns from table
$stmt = $pdo->prepare($sql);
$stmt->execute();
// while($fullTable=$stmt->fetchAll(PDO::FETCH_ASSOC)){
// 	print_r($fullTable);
// 	// prints data as associated array in the variable fullTable
// 	// n.b. fetchAll is faster but takes more memory than fetch

// }
$fullTable=$stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($fullTable)
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
				<div class="nav-link-wrapper active-nav-link">
					<a href="reviews.php">Reviews</a>
				</div>
				<div class="nav-link-wrapper">
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
				<!-- <div class="portfolio-items-wrapper" style="background-image: url('images/mathpaperbg.jpg'); filter:grayscale(100%); border:10px solid black;"> -->
				<!-- <div class="portfolio-items-wrapper" style="background-image: url('images/mathpaperbg.jpg'); border:10px solid black;"> -->
				<!-- <div class="portfolio-items-wrapper" style="background-image: url('images/blackboardbg.jpg');"> -->
				<div class="portfolio-items-wrapper">
					<!-- <div class="contact-title" style="border:5px solid black; background-color:white;"> -->
					<!-- <div class="contact-title" style="color:white;"> -->
					<div class="contact-title">
						<h1>Reviews</h1>
					</div>
					<?php foreach($fullTable as $fulltable){ ?>
						<table class="reviews-shell">
							<table class="reviews-table-main">
								<thead>
									<tr>
										<th>Date added</th>
										<th>First name</th>
										<th>Name of school</th>
										<th>Year group</th>
										<th>Predicted grade</th>
										<th>Achieved grade</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?php echo htmlspecialchars($fulltable['date_time']); ?></td>
										<td><?php echo htmlspecialchars($fulltable['first_name']); ?></td>
										<td><?php echo htmlspecialchars($fulltable['name_of_school']); ?></td>
										<td><?php echo htmlspecialchars($fulltable['year_group']); ?></td>
										<td><?php echo htmlspecialchars($fulltable['predicted_grade']); ?></td>
										<td><?php echo htmlspecialchars($fulltable['achieved_grade']); ?></td>
									</tr>
								</tbody>
							</table>
							<table class="reviews-comments-table">
								<tr>
									<td><b>Comments:</b></td>
								</tr>
								<tr>
									<td>"<?php echo htmlspecialchars($fulltable['comments']); ?>"</td>
								</tr>
							</table>
						</table>
					<?php } ?>
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

<!-- <script>
	const portfolioItems=document.querySelectorAll('.portfolio-item-wrapper')

	portfolioItems.forEach(portfolioItem=>{
		portfolioItem.addEventListener('mouseover',()=>{
			console.log(portfolioItem);
			// console.log useful for testing purposes
		})
	})
</script> -->

<!-- <script>
	const portfolioItems=document.querySelectorAll('.portfolio-item-wrapper')

	portfolioItems.forEach(portfolioItem=>{
		portfolioItem.addEventListener('mouseover',()=>{
			console.log(portfolioItem.childNodes[1].classList);
		})
	})
</script> -->
<!-- we have specifically pulled the portfolio-img-background node, which has index 1 (made obvious by console.log) -->

<!-- <script>
	const portfolioItems=document.querySelectorAll('.portfolio-item-wrapper')

	portfolioItems.forEach(portfolioItem=>{
		portfolioItem.addEventListener('mouseover',()=>{
			portfolioItem.childNodes[1].classList.add('img-darken');
		})

		portfolioItem.addEventListener('mouseout',()=>{
			portfolioItem.childNodes[1].classList.remove('img-darken');
		})
	})
</script> -->
</html>

