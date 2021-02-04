<?php
    include ('connection.php');
        if(isset($_REQUEST['submit']))
        {
            $name =  $_REQUEST['first_name']. " " .$_REQUEST['last_name'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $c_password = $_REQUEST['c_password'];
            $pin = $_REQUEST['area_code'];
            $phone = $_REQUEST['phone'];
            $subject = $_REQUEST['subject'];
            $gender = $_REQUEST['rdiobtn'];

            
            if ($password != $c_password)
                header("location:../register.php?error=errorpass");
            else
            {
                $con_password = password_hash($c_password,PASSWORD_BCRYPT);

                $sql = "INSERT INTO registration (name,address,pin,email,password,phone,subject,gender)
                 VALUES ('$name','$address','$pin','$email','$con_password','$phone','$subject','$gender')";

                if (mysqli_query($conn,$sql))
                    {
            ?>
                        <script>
                             alert('Register has succesfull');
                             location.href = "../login.php";
                         </script>

            <?php            
                    }
                else
                    echo mysqli_error($conn);
            }
              //  echo "Name : " . $name. "<br> Address : ".$address." <br> Email : ".$email." <br> Passwors : ".$password." <br> Area : ".$area." <br> Phone : ".$phone." <br> Course : ".$cource." <br> Gender : ".$gender;
        }
?>