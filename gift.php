<!DOCTYPE html>
<html>
<head>
	<title>VALENTINE</title>
</head>
<body>
	<title>VALENTINE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Loved+by+the+King&family=Open+Sans&display=swap');

 		body {
 			background-color: #290028
 		}

        *{
        	font-family: 'Loved by the King', cursive;
        	color: #BD93D8;

        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 100px;
        }
        @media screen and (max-width: 414px) {
            .container {
                margin: 100px 25px 100px 50px;
            }
        }

        .variantes {
        	position: relative;
        	top: 40%;
        }

        input {
		    padding: 10px 20px;
		    margin: 60px;
		    background-color: pink;
		    color: #BD93D8;
		    border: none;
		    border-radius: 5px;
		    cursor: pointer;
    }
    </style>
</head>
<body>
	
	<div class="container">
		<form class="variantes" method="post"></form>
			<input type="submit" name="gift1" value="FLOWERS AND CHOCOLATES">
			<input type="submit" name="gift2" value="LOVE LETTER">
		</form>
	</div>

		<?php
			if (isset($_POST['gift1'])) {
				echo "GREAT CHOICE!! WRITE ME YOU CHOSE FLOWERSS!!!";
			} elseif(isset($_POST['gift2'])){
				echo "OKAYY I WILL WRITE YOU THE BEST LETTER YOU EVER SEEN MY LOVE. LOVE YOU MARY.";
			}
		?>
</body>
</html>