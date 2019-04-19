<?php

require "header.php";

?>
<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Signup</h1>
            <form class="form-signup" action="includes/signup.inc.php" method="post"></form>
            <input type="text" name="uname"placeholder="username">
            <input type="password" name="pswd"placeholder="password">
            <input type="password" name="pswd0"placeholder="confirm password">
        <button type="submit" name="signup-submit">signup</button>
        </section>
    </div>
</main>
<?php

require "footer.php";

?>