<!DOCTYPE html>
<html>
<head>
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

        input {
		    padding: 10px 20px;
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
		<div class="message">
			<h1>My darling, I am over the moon that you have agreed to be my Valentine. You light up my life and bring so much joy to every moment we spend together. I cannot wait to celebrate this special day with you and show you just how much you mean to me. I love you more than words can express</h1>	
		</div>
		<form class="variantes" method="post" action="gift.php">
			<input type="submit" name="gifts" value="CHOOSE A GIFT">
		</form>
	</div>
</body>
</html>


