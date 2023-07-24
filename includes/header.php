<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />
    <title><?php echo $site_title;?></title>
    <link rel="shrcut icon" href="https://static-cdn.cobone.com/assets/favicon-b07d7371e13c21dc473c8db493a730e8.ico"
        type="image/x-icon">
    <meta name="description" content=" this is page to register" />
    <link rel="stylesheet" href="Style.css">

</head>

<body>
    <header class="header1">

        <img class="logo-img" src="img/cobon.png" width="120" height="45" ALT="logo" ALIGN=LEFT>
        <br>
        <div class="header-input">

            <form action=" /action_page.php"></form>
            <input id="search" type="text" placeholder="what are you looking for?">
            <button type="submit">submit</button>


            <select id="languages" name="languages">
                <option value="arabic">Arabic</option>
                <option value="english">English</option>
                <option value="french">French</option>
                <option value="spanish">Spanish</option>

            </select>
            <select id="City" name="City">
                <option value="Jeddah">Jeddah</option>
                <option value="Riyadh">Riyadh</option>
                <option value="Doha">Doha</option>
            </select>
           <?php if(isset($_COOKIE['id'])){ ?>
            <a href="addOffer.php"><button id="account"> Add Offer</button></a>
			<?php } ?>
           <?php if(!isset($_COOKIE['id'])){ ?>
			   
			    <a href="register.php"><button id="regiter1"> REGISTER</button></a>
                <a href="#"><button id="regiter1"> Login</button></a>
               
               
			<?php } ?>
            <a href="index.php"><button id="regiter1"> My account</button></a>
           

        </div>
    </header>


    <br>
    
