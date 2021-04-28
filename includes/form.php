<style>
    <?php
        include "form.css";
    ?>
</style>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" name="name" placeholder="Your name" value="<?php echo isset($_POST['name'])? $_POST['name'] : '';?>"><br>
    <label for="email">Email:</label><br>
    <input type="email" name="email" placeholder="Your email" value="<?php echo isset($_POST['email'])? $_POST['email'] : '';?>"><br>
    <label for="message">Message:</label><br>
    <textarea rows="4" name="message" placeholder="Your message" value="<?php echo isset($_POST['message'])? $_POST['message'] : '';?>"><?php echo isset($_POST['message'])? $_POST['message'] : '';?></textarea><br>
    <button type="submit" name="button" style="background: #081c3a;">Submit</button>
</form>