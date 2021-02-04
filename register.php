
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Registration page</title>
    <link rel="stylesheet" type="text/css" href="style/registration.css">
</head>
<body>
<section class="header">
<div class="contaier">
	<img src="media/logo/logo.jpg">
</div>	
	</section>
    <div class="regform">
        <h1>
 Registration Form</h1>
</div>
<div class="main">
    
        <form method="POST" action = "include/registration.php">
            <div id="name">
                <h2 class="name">
Name </h2>
<input class="firstname" type="text" name="first_name"><br>
                <label class="firstlabel">first name</label>
                <input class="lastname" type="text" name="last_name"><br>
                <label class="lastlabel">last name</label>
            </div>
<h2 class="name">
Address </h2>
<input class="company" type="text" name="address">
            <h2 class="name">
Email</h2>
<input class="email" type="email" name="email">
            <h2 class="name">
Password</h2>
<input class="password" type="password" name="password">
            <h2 class="name">
Confirm Password</h2>
<input class="password" type="password" name="c_password">

<!-- <password result> -->
<p class = "wrong">
<?php
        $data = $_GET['error'];
        if($data == "errorpass")
            echo "Incurrect Password";
        else
            echo "";
?> 
</p> 
            <h2 class="name">
Phone</h2>
<input class="Code" type="text" name="area_code">
            <label class="area-code">Area Code</label>
            <input class="number" type="text" name="phone">
            <label class="phone-number">Phone Number</label>
    
    
            <h2 class="name">
Course</h2>
<select class="option" name="subject">
                <option disabled="disabled" selected="selected">--Choose course--</option>
                <option>Science</option>
                <option>Commerce</option>
                <option>Arts</option>
            </select>
    
            <p id="coustomer"> Sex </h2>
            <label class="" style = "margin-left:150px">
                <input class="radio" type="radio" name="rdiobtn" value= "male">
                <!-- <span class="checkmark"></span> -->
                Male
            </label>
    
            <label class="">
                <input class="" type="radio" name="rdiobtn" value = "female">
                <span class=""></span>
                Female
            </label>

                <br>
                <br>
            <div class="container">
                <input type = "submit"  name = "submit" class = "btn btn-success col-md-4"> 
                <input type = "reset" class = "btn btn-danger col-md-4" style = "margin-left:8px"> 
            </div>
        
    
        </form>
</div>

</body>
</html>