<?php


include_once 'handlers/DatabaseEdited.php';

$db = EDatabase::getInstance();



if (isset($_SESSION['user_id'])) {

      $sql = "SELECT * from user where user_id={$_SESSION['user_id']}";
      $stmnt = $db->connection->prepare($sql);
      $stmnt->execute();

      while ($row = $stmnt->fetch()) {
            $user_info['name'] = $row['name'];
            $user_info['phone_number'] = $row['phone_number'];
      }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge" />
        <meta name="viewport"
              content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <!-- Font awesome cdn link -->

        <link rel="stylesheet"
              href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" />

        <link rel="stylesheet"
              href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- bootstrap paths -->

        <link rel="stylesheet"
              href="assets/css/bootstrap.min.css" />

        <link rel="stylesheet"
              href="assets/icon/bootstrap-icons.css" />

        <!-- Custom css files -->

        <link rel="stylesheet"
              href="assets/custom/style.css" />

        <link rel="stylesheet"
              href="assets/custom/loginpage.css" />

        <!-- bootstrap paths -->

        <link rel="stylesheet"
              href="../assets/css/bootstrap.min.css" />

        <link rel="stylesheet"
              href="../assets/icon/bootstrap-icons.css" />

        <!-- Custom css files -->

        <link rel="stylesheet"
              href="../assets/custom/style.css" />

        <link rel="stylesheet"
              href="../assets/custom/loginpage.css" />



    </head>

    <body>
        <header class="header">
            <a href="#"
               class="logo">Farming<span>Assistant</span></a>

            <nav class="navbar">
                <a href="http://localhost/Farming-assistant/index.php">হোম</a>

                <a href="http://localhost/Farming-assistant/noticeboard.php">খবরাখবর</a>
                <a href="http://localhost/Farming-assistant/market.php">কৃষিপণ্য</a>

            </nav>

            <div class="icons">
                <div id="menu-btn"
                     class="fas fa-bars"></div>

                <a href="http://localhost/Farming-assistant/logoutpage.php">
                    <div title="লগআউট করুন"
                         class="bi bi-box-arrow-right">
                        </button>
                    </div>
                </a>

                <div id="info-btn"
                     class="fas fa-info-circle"></div>
            </div>


        </header>

        <div class="contact-info">
            <div id="close-contact-info"
                 class="fas fa-times"></div>
            <div class="info">
                <a href="http://localhost/Farming-assistant/edit-profile-page.php"><i class="fas fa-user-edit"></i></a>
                <h3><?php echo $user_info['name'] ?></h3>
                <p><?php echo $user_info['phone_number'] ?></p>
            </div>

            <div id="side-actions"
                 style="height: 30%;">


                <div class="action"><a href="http://localhost/Farming-assistant/handlers/blogHandler.php"> ব্লগগুলো
                        ম্যানেজ
                        করুন</a></div>
                <div class="action"><a href="http://localhost/Farming-assistant/display_problem.php"> কৃষকদের সমস্যার সমাধান দিন</a></div>



            </div>
        </div>

        <!-- header section ends -->