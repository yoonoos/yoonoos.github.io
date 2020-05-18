<?php include 'includes/session.php' ?>
<?php include_once 'newsletter/scripts/signup-script.php' ?>

<html lang="en">

<head>

    <title>
        sign up </title>
</head>


<body>


    <div class="signup" id="mainWrapper">
        <h1>Newsletter</h1>
        <form action="newsletter/includes/signup.inc.php" method="post" id="newsletter" name="test">
            <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyfields") {
            echo '<p>Make sure to fill all the fields !!</p>';
        }
        else if ($_GET["error"] == "invalidemailname") {
            echo '<p>Invalid Username and E-mail</p>';
        }
        else if ($_GET["error"] == "invalidname") {
            echo '<p>Invalid Username !!</p>';
        }
        else if ($_GET["error"] == "invalidemail") {
            echo '<p>Invalid E-mail !!</p>';
        }
        else if ($_GET["error"] == "usertaken") {
            echo '<p>Username is already taken !</p>';
        }
        else if ($_GET["error"] == "emailtaken") {
            echo '<p>Email is already used !</p>';
        }
        else if ($_GET["error"] == "sqlerror") {
            echo '<p>sql</p>';
        }

    }
    else if (isset($_GET["signup"])) {
        if ($_GET["signup"] == "success") {
        echo '<p>Signup successfull !!</p>';
            }
    }
    ?>
            <input type="text" name="name" id="name" Placeholder="Name..." value="<?php if (isset($_GET["name"])) { $name=$_GET['name']; echo $name; } ?>">
            <input type="email" name="email" id="email" Placeholder="E-mail..." value="<?php if (isset($_GET["email"])) { $email=$_GET['email']; echo $email; } ?>">
            <button type="submit" name="signup-submit" id="submit">Signup</button>
        </form>

    </div>



</body>

</html>
