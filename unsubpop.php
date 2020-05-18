   <?php 
if(!isset($_GET["token"])){
    header("Location: index.php");
}

?> <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Unsubscribe</h2>
            </div>
            <form action="includes/unsignup.inc.php" method="post">
                <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyfields") {
            echo '<p>Make sure to fill all the fields !!</p>';
        }
        else if ($_GET["error"] == "invalidmail") {
            echo '<p>Invalid E-mail !!</p>';
        }
        else if ($_GET["error"] == "sqlerror") {
            echo '<p>sql</p>';
        }

    }
    else if (isset($_GET["signup"])) {
        if ($_GET["unsignup"] == "success") {
        echo '<p>Unsubscription successfull !!</p>';
            }
    }
    ?><label for="email">Vauillez confirmer votre Email</label>
                <input type="text" name="email" id="email" Placeholder="E-mail..." value="<?php if (isset($_GET["email"])) { $email=$_GET['email']; echo $email; } ?>">
                <input type="hidden" name="token" Placeholder="token" value="<?php if (isset($_GET["token"])) { $token=$_GET['token']; echo $token; } ?>">
                <button id="submit" type="submit" name="unsignup-submit">Unsubscribe</button>
            </form>
        </div>

    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        window.onload = function() {
            modal.style.display = "block";
            document.body.style.overflow = "hidden";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
            document.body.style.overflow = "visible";

        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                document.body.style.overflow = "visible";

            }
        }

    </script>
