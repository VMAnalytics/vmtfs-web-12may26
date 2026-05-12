<?php
// header.php: common head and navigation
// expects optional $page_title and $extra_head variables
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($page_title) ? $page_title : 'VM Technology and Financial Services'; ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preload" href="styles/style.css" as="style" />
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <?php if (!empty($extra_head)) echo $extra_head; ?>
</head>
<body>
<header>
  <div class="logo">
    <img src="img/VMTFS Logo.jpg" alt="VMTFS LOGO" />
    <div>
      <h1 style="color: #f3eded;">VM Technology and Financial Services</h1>
    </div>
  </div>
  <nav>
    <ul class="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li class="services-dropdown">
        <a href="services.php">Services</a>
        <ul class="dropdown-menu">
          <li><a href="#">Technical</a></li>
          <li><a href="#">Financial</a></li>
        </ul>
      </li>
      <li class="Career-dropdown">
        <a href="career.php">Careers</a>
        <ul class="dropdown-menu">
          <li><a href="#">Internships</a></li>
          <li><a href="#">Jobs</a></li>
        </ul>
      </li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
</header>