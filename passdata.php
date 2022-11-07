<?php
        $Name = $Email = $mobile = $plan =  "";         
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Name = test_input($_POST["Name"]);
            $Email = test_input($_POST["Email"]);
            $mobile = test_input($_POST["mobile"]);
            $plan = test_input($_POST["plan"]);
        }         
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
    echo "<h3> Entered Data is <br>";
    echo "Entered Name is: ".$_POST['Name']."<br>" ;
    echo "Entered Email address: ".$_POST['Email']."<br>" ;
    echo "Entered mobile number: ".$_POST['mobile']."<br>" ;
    echo "Selected Plan: ".$_POST['plan']."<br>" ;
    echo "Address is: ".$_POST['aaddr']."<br>" ;
    ?>
