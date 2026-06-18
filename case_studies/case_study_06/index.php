<html>
  <head>
    <title>Case Study 07</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
  </head>
  <body>
    <div id="wrapper">
      <div class="header">
        
    </div>
      <div class="main-navigation">

        <a href="index.php">Home</a> / 
        <a href="index.php?page=projects">Projects</a> / 
        <a href="index.php?page=job-postings">Job Postings</a> / 
        <a href="index.php?page=testimonies">Testimonies</a> /
        <a href="index.php?page=contact-us">Contact Us</a>

      </div>
      <div class="container">
<?php
        switch(@$_GET["page"])
        {
            case "projects":
                include("projects.php");
                break;
            case "job-postings":
                include("job-postings.php");
                break;
            case "testimonies":
                include("testimonies.php");
                break;
            case "contact-us":
                include("contact-us.php");
                break;
            default:
                include("home.php");
                break;
        }
?>
      </div>
      <div class="footer">
      </div>
    </div>
  </body>
</html>