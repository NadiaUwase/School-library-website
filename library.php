<?php
session_start(); 
include 'connect.php';
if (!isset($_SESSION['username'])) {
    # code...
    header("location:login.php");
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subjects</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>

    <!-- main nav header -->
    <header class="header-h header-h-scrolled">
        
        <div class="nav-h">
            <div class="nav-logo">
                <img src="./images/logo.svg" alt="">
            </div>
            <div class="nav-nav">
                <div>
                    <div class="nav--links">
                        <ul>
                            <li>
                                <a href="./index.php">Home</a>
                            </li>
                            <!-- <li class="active">
                                <a class="active" href="./subjects.php">Subjects</a>
                            </li> -->
                            <li>
                                <button class="btn btn-black btn-uppercase" onclick="window.location.href = './php-script/logout.php';">logout</button>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="nav--profile">
                        <img src="" alt="">
                    </div> -->

                </div>
            </div>
        </div>
    </header>
    <!--  -->
    <!--  -->
    <main>
        <!-- -->
        <!-- Aside stuff menu preview-->
        <aside class="side--nav-h">
            <div class="content-title">
                Library Name
            </div>
            <div class="content-h">
                <nav>
                    <ul>
                        <!--  -->
                        <li>
                            <a href="library.php?pg=borrow">Borrow Book</a>
                            <div class="info">
                                <span>12 Books</span>
                            </div>
                        </li>
                        <!--  -->
                        <!--  -->
                        <li>
                            <a href="library.php?pg=return">Return Book</a>
                            <div class="info">
                                <span>2 Borrowed book</span>
                            </div>
                        </li>
                        <!--  -->
                        <li>
                            <a href="library.php?pg=record-book">New Book</a>
                            <div class="info">
                                <span>2 book</span>
                            </div>
                        </li>
                        <!--  -->
                        <li>
                            <a href="library.php?pg=category">Book Category</a>
                            <div class="info">
                                <span>2 Category</span>
                            </div>
                        </li>
                        <!--  -->
                        <li>
                            <a href="library.php?pg=department">New Department</a>
                            <div class="info">
                                <span>2 Department</span>
                            </div>
                        </li>
                        <!--  -->
                        <li>
                            <a href="library.php?pg=register-user">New Account</a>
                            <div class="info">
                                <span>2 Users</span>
                            </div>
                        </li>
                        <!--  -->
                        <li>
                            <a href="library.php?pg=register-event">New event</a>
                            <div class="info">
                                <span>2 Event</span>
                            </div>
                        </li>
                        <!--  -->
                        <li>
                            <a href="library.php?pg=register-announcement">New announcement</a>
                            <div class="info">
                                <span>2 Announcement</span>
                            </div>
                        </li>
                        <!--  -->
                        <li>
                            <a href="library.php?pg=suggestion">Suggestion</a>
                            <div class="info">
                                <span>2 Suggestion</span>
                            </div>
                        </li>
                        <!--  -->

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- -->
        <!-- Main contents preview -->
        <?php 
            $page=$_REQUEST['pg'];
            switch ($page) {
                case 'borrow':
                    include './page/Bookborrowing.php';
                    break;
                case 'return':
                    include './page/return.php';
                    break;
                case 'record-book':
                    include './page/BookRecords.php';
                    break;
                case 'category':
                    include './page/Category.php';
                    break;
                case 'department':
                    include './page/Department.php';
                    break;
                case 'register-user':
                    include './page/signup.php';
                    break;
                case 'register-event':
                    include './page/Events.php';
                    break;
                case 'register-announcement':
                    include './page/Announcement.php';
                    break;
                case 'suggestion':
                    include './page/Suggestion.php';
                    break;
                default:
                    include 'front-page.php';
                    break;
            }
        ?>
        <!--  -->
    </main>
    <!--  -->
    <!--  -->
    <footer>

    </footer>
    <!--  -->
</body>

</html>