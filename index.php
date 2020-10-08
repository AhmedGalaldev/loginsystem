<?php
require 'header.php';
?>

<main>
    <section class="main-index">
        <?php
        if (isset($_SESSION['username'])) {
            echo "<h2>You are logged in!</h2>";
        } else {
            echo "<h2>You are logged out!</h2>";
        }
        ?>


    </section>

</main>

<?php
require 'footer.php';
?>