

    
    
    <?php

$email_err =  $passsword_err = $Err_email= "";
$error = 0;
$first_name = $last_name = $email = $password = $address = $phone = $city= $street=$zip= "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     if (empty($_POST["first_name"])){
         $first_name = "";

     } else {
         $first_name = test_input($_POST["first_name"]);

     }

     if (empty($_POST["last_name"])) {
         $last_name = "";
     } else {
         $last_name = test_input($_POST["last_name"]);
     }

     if (empty($_POST["email"])) {
         $email_err = "Email is required";
         $error = 1;
     } else {
         $email = test_input($_POST["email"]);
     }

     if (empty($_POST["password"])) {
        $passsword_err = "Password is required";
         $error = 1;
     } else {
         $password = test_input($_POST["password"]);
     }

   

     if (empty($_POST["phone"])) {
         $phone = "";
     } else {
         $phone = test_input($_POST["phone"]);
     }


    if (empty($_POST["city"])){
        $city = "";

    } else {
        $city = test_input($_POST["city"]);

    }
    if (empty($_POST["street"])){
        $street = "";

    } else {
        $street = test_input($_POST["street"]);

    }

    if (empty($_POST["zip"])){
        $zip = "";

    } else {
        $zip = test_input($_POST["zip"]);

    }
   
$user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if email exists
   
    if ($user['email'] === $email) {
      $Err_email= " the email is teken";
      $error=1;
    }
  }

     if ($error == 1) {
         echo "<p class='error'>Email and password must be entered</p>";
     } else {
         $creation_date = date("Y-m-d");
         
        $sql    =   "INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `city`, `street`, `zip`, `creation_date`)
         VALUES (NULL, '$first_name', '$last_name', '$email', '$password', '$phone', '$city', '$street', '$zip', CURRENT_TIMESTAMP)";


      if (mysqli_query($conn, $sql)) {

          echo "<br><h3 class= 'success'>Thank you. Promoter data has been entered. Check database.</h3>";
          setcookie("id",$conn->insert_id,$expire_date);
           header("refresh:3; url=index.php");
      } else {
          echo "<p class='erroe'>ERORR: Hash! Sorry $sql. " . mysqli_erorr($conn) . "</p>";
      }

     }

  } 
  ?>
   <br>
    <a href="index.php"> Home / </a>
    <a href="register.php"> register </a>



    
<div class="Register">
        <br>
        <img class=" img-Registr" src="img/user.png" width="25" height="25">
        <h3> <small> Register</h3></small>
    
    

   
    <div class="Form-input">



        <form method="POST" action="">
            <div class=" input-name">
                <label>First Name</label>
                <br>
                <input name="first_name" type="text" id="inputName" class="form-cnotrol" placeholder=" frist name" required >

            </div>
            <br>
            <div class=" input-last">
                <label>last Name</label>
                <br>
                <input name="last_name" type="text" id="inputlast" class="form-cnotrol" placeholder=" last name" required >

            </div>
            <br>
            <div class=" input-Email">
                <label> Email</label> <span class="error">* <?php echo $email_err ?></span>
                <span class="error"> <?php echo $Err_email ?></span><br />
                
                <br>
                <input name="email" type="email" id="email" class="form-cnotrol" placeholder=" Email"  >

            </div>
            <br>

            <div class=" input-pass">
                <label>password</label> <span class="error">* <?php echo  $passsword_err?></span>
                <br>
                <input name="password" type="password" id="inputPass" class="form-cnotrol" placeholder=" Password"  minlength="6" maxlength="20"  >

            </div>

            <br>

            <div class="input-tel">
                <label> Phone</label>
                <br>
                <input name="phone" type="tel" placeholder="123-456-7890" class="form-cnotrol" id="Phone" maxlength="12" required >

            </div>

            <br>

            <div class=" input-adress">
                <label for="">Address</label>
                <br>
                <input name="city" type="text" class="form-control" id="inputCity" placeholder="City" required >

                <br>
                <input name="street" type="text" class="form-control" id="inputStreet" placeholder="Street" required >

                <br>
                <input name="zip" type="text" class="form-control" id="inputZip" placeholder="Zip" required >

            </div>


            <br>

            <div class="From-checkBox">

                <input type="checkbox" id="input-check1" name="inputcheck" value="1">
                <span>I wish to receive marketing emailers to keep up to date with the latest deals</span>


                <br>

            </div>

            <br>

            <div>
                <input id="Form-submit" type="submit" name="submit" value="REGISTER">

            </div>
    </div>
    </form>




    <button class="button-form"> <a href="#"> Alreday
            Registered?</a></button>
            
<p><span class="error">* required filed.</span></p>
    <br>