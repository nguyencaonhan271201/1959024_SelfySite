<?php 
    $site_name = basename($_SERVER['PHP_SELF'], ".php");
    $sites = ["index", "about", "resume"];

    function outputLinks($site_name, $sites) {
        foreach ($sites as $site) {
            $class = $site == $site_name? "selected" : "";
            $nav_display = ucfirst($site == "index"? "home" : $site);
            echo "<li><a href='{$site}.php' class='{$class}'>{$nav_display}</a></li>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Nhan Nguyen | <?php echo ucfirst($site_name == "index"? "home" : $site_name); ?></title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!-- <link rel="stylesheet" href="<?php echo $site_name?>.css" type="text/css" /> -->
        <link rel="stylesheet" href="index.css" type="text/css" />
        <link rel="icon" href="images/icon.ico" type="image/x-icon">
    </head>

    <body>
        <header>
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="main-nav">
                <label for="hamburger" class="hamburger">☰</label>
                <input type="checkbox" name="hamburger" class="hamburger">
                <nav>
                  <ul>
                    <?php outputLinks($site_name, $sites); ?>
                  </ul>
                </nav>
            </div>
        </header>