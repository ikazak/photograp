<?php 
    //Add codes here...
    $email = input("email");
    $password = input("password");

    $qrl = "select * from photographers where photographer_email = ? and photographer_password = ?";

    $param = [
        $email,
        $password
        
    ];

    $result = execute_select($qrl,$param);

    json_response($result);
    


?>