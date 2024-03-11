<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.o"
	<title>Welcome in Our Tune Hub, Enjoy!</title>
	<style>
		body {
			font-family: Century Gothic, Arial;
			background-color: #5CB3FF; /* Crystal Blue background color */
			margin: 0;
			padding: 20px; 
		}
		h1 {
			color: #FFFFFF; /*White heading color */
			text-align: center;
			margin-botton: 30px;
		{
		.song-container {
            		display: flex;
            		flex-wrap: wrap;
            		justify-content: center;
        	}
        	.song {
            		background-color: #0077BE; /* French Blue background color */
            		color: #FFFFFF; /* White text color */
            		padding: 20px;
            		margin: 10px;
            		border-radius: 10px;
            		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow effect */
            		transition: transform 0.5s ease;
            		text-align: center;
            		width: 200px;
        	}
        	.song:hover {
            		transform: translateY(-5px); /* Lift on hover */
        	}
        	.song a {
            		color: #000000; /* Black link color */
            		text-decoration: none;
            		font-weight: bold;
            		font-size: 20px;
        	}
        	.song a:hover {
            		color: #0077BE; /* French Blue link color on hover */
        	}
	</style>
</head>
<body>
	<h1>WELCOME TO OUR MUSIC HUB!</h1>

    	<div class="song-container">
        	<div class="song">
            		<a href="song1.php">Same God - Elevation Worship</a>
        	</div>
        	<div class="song">
            		<a href="song2.php">Through It All - Hillsong Worship</a>
        	</div>
        	<div class="song">
            		<a href="song3.php">At the Cross - Hillsong Worship</a>
        	</div>
        	<div class="song">
            		<a href="song4.php">Ocean - Hillsong Worship</a>
        	</div>
        	<div class="song">
            		<a href="song5.php">What a Beautiful Name - Hillsong Worship</a>
        	</div>
    	</div>
</body>
</html>
