<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav_section</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
 <!-- ---navegation_bar_design_start------ -->
  <nav class="navegation">
    <ul class="nav_section">
        <li class="nav_list"><a class="nav_links <?php if(basename($_SERVER['PHP_SELF'])=='home.php'){echo 'active';} ?>" href="home.php">Home</a></li>
        <li class="nav_list"><a class="nav_links <?php if(basename($_SERVER['PHP_SELF'])=='about.php'){echo 'active';} ?>" href="about.php">About</a></li>
        <li class="nav_list"><a class="nav_links <?php if(basename($_SERVER['PHP_SELF'])=='service.php'){echo 'active';} ?>" href="service.php"  >Service</a></li>
        <li class="nav_list"><a class="nav_links <?php if(basename($_SERVER['PHP_SELF'])=='blog.php'){echo 'active';} ?>" href="blog.php" >BLog</a></li>
        <li class="nav_list"><a class="nav_links <?php if(basename($_SERVER['PHP_SELF'])=='contact.php'){echo 'active';} ?>" href="contact.php">Contact</a></li>
    </ul>
  </nav>
 <!-- ---navegation_bar_design_end------ -->
</body>
</html>