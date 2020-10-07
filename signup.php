<?php
require 'header.php';
?>

<main>

    <section class="main-index ">
        <h2>Signup</h2>
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="r-password" placeholder="Repeat Password">
            <button type="submit" name="submit" class="mybutton">Signup</button>
        </form>
    </section>


</main>

<?php
require 'footer.php';
?>