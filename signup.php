<?php
require 'header.php';
?>

<main>

    <section class="main-index ">


        <h2>Signup</h2>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfield") {
                echo "<p class='error'>Fill in all fields</p>";
            } elseif ($_GET['error'] == "invalidemailandusername") {
                echo "<p class='error'>InValid Email and username</p>";
            } elseif ($_GET['error'] == "invalidemail") {
                echo "<p class='error'>InValid Email</p>";
            } elseif ($_GET['error'] == "invalidusername") {
                echo "<p class='error'>InValid username</p>";
            } elseif ($_GET['error'] == "passworddontmatch") {
                echo "<p class='error'>Password Don't match</p>";
            } elseif ($_GET['error'] == "usertoken") {
                echo "<p class='error'>User Token</p>";
            }
        } elseif (isset($_GET['signup'])) {
            if ($_GET['signup'] === 'success') {

                echo "<p class='success'>Register Successfully</p>";
            }
        }
        ?>
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="username" placeholder="Username" autocomplete="on">
            <input type="email" name="email" placeholder="Email" autocomplete="on">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="r-password" placeholder="Repeat Password">
            <button type="submit" name="signup-submit" class="mybutton">Signup</button>
        </form>
    </section>


</main>

<?php
require 'footer.php';
?>