<!DOCTYPE html>
<html>
<head>
        <title>LOGIN FORM</title>
        <link rel="stylesheet" type="text/css" href="login1.css"> 
         <script type="text/javascript" src="login1.js"></script> 
</head>
<body>
    <div class="login-form"><br>
       <img src="avatar1.jpg" class="avatar">
        <form action="login2.php" onsubmit="return loginvalidation()" method="POST" >
        <br>
                    <div class="form-group">
                        <p>Email: </p>
                        <input type="text" name="email" placeholder="Enter email" id="email"
                        autocomplete="on">
                           <span id="emailids" style="text-shadow: 0 0 3px #FF0000;"> </span>
                           <br><br>
                      <!--    <span id="emailids" style="text-shadow: 2px 2px #FF0000;"> </span> -->
                       <!--  <span id="emailids" style="text-shadow: 0.1em 0.1em 0.15em #28ffbf/*color: #010203*/ ; font-weight: bold;"> </span> -->
                        <!-- #28ffbf  -->
                    </div>

                    <div class="form-group">
                        <p>Password: </p>
                        <input type="text" name="pass" placeholder="Enter  Password"  id="pass" autocomplete="on" >
                        <span id="passwords" style="color: red;"></span><br><br>
                    </div>
                         <input type="submit" name="submit" value="submit" >
                         <a href="forgot1.html">Forgot Password?</a>    
        </form>
    </div>
    

</body>
</html>