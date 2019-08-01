<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>

    <!-- the header of the website/ the navigation bar -->
    <header class="header-h header-h-unscrolled">

        <div class="nav-h">
            <div class="nav-logo">
                <img src="./images/logo.svg" alt="">
            </div>
            <div class="nav-nav">
                <div>
                    <div class="nav--links">
                        <ul>
                            <li>
                                <a href="./index.html">Home</a>
                            </li>
                            <li>
                                <a href="./subjects.html">Subjects</a>
                            </li>
                            <li class="active">
                                <a class="active" href="./contact.html">Contact</a>
                            </li>
                            <li>
                                <button class="btn btn-black btn-uppercase">login</button>
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
        <!-- below is the code for the sign up form -->
        <form name="signup" class="contact">
            <!--  -->
            <div class="input-wrapper">
                <label for="">Full Name</label>
                <input name="name" type="text" placeholder="holder">
            </div>
            <div class="input-wrapper">
                <label for="">Id number</label>
                <input name="idnumber" type="idnumber" placeholder="holder">
            </div>
            <div class="input-wrapper">
                <label for="">Phone number</label>
                <input name="Phone" type="Phone" placeholder="holder">
            </div>
            <div class="input-wrapper">
                <label for="">Email</label>
                <input name="Email" type="Email" placeholder="holder">
            </div>
             <div class="input-wrapper">
                <label for="">Password</label>
                <input name="password" type="password" placeholder="holder">
            </div>
            
            <!--  -->
            <!--  -->
            <div class="submit-btn-h">
                <button type="button" onclick="submitForm()" class="btn btn-black">Submit</button>
            </div>
            <!--  -->
        </form>
        <!--  -->
    </main>
    <!--  -->
    <!--  -->
    <!--  -->
    <script src="./js/main.js"></script>
</body>

</html>