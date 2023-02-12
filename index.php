<?php 

if (isset($_SESSION['yes'])) {
    header("location:love.php");
}

$code = "11022022";

if(isset($_POST['submit'])){
    if($_POST['code'] == $code){
        $show_message = true;
    } else {
        echo "Błędny kod";
    }
}

?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Loved+by+the+King&family=Open+Sans&display=swap');
        
        body {
            background-color: #290028;
        }
        *{
            font-family: 'Loved by the King', cursive;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 100px;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 20px;
            width: 300px;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: pink;
            color: #BD93D8;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        h1 {
            margin-top: 50px;
            font-size: 30px;
        }
        #yesno {
            display: flex;
            margin-top: 50px;
        }
        #yesno input[type="submit"] {
            width: 100px;
            margin: 0 10px;
        }
        
        @media screen and (max-width: 414px) {
            .container {
                margin: 100px 25px 100px 50px;
            }
            #subm {
                position: relative;
                left: 100px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post">
            <input type="text" name="code" placeholder="Wpisz kod">
            <input type="submit" name="submit" id = "subm" value="SUBMIT">
        </form>
        <?php if(isset($show_message)): ?>
            <h1>WILL YOU BE MY VALENTINE?</h1>
            <form id="yesno" method="post">
                <input type="submit" name="yes" value="YES">
                <input type="submit" name="no" value="NO">
            </form>
        <?php endif; 
        if(isset($_POST['yes'])) {
            header('location: love.php');
            $yes = true;
            $_SESSION['yes'] = $yes;
        } ?>
    </div>
</body>
</html>