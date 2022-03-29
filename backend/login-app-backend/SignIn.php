<?php

    include('connection.php');

    $UserEmail = $decodedData['Email'];
    $UserPassword = ($decodedData['Password']); //password is hashed

    $SQL = "SELECT * FROM user WHERE email = '$UserEmail'";
    $exeSQL = mysqli_query($conn, $SQL);
    $checkEmail =  mysqli_num_rows($exeSQL);

    if ($checkEmail != 0) {
        $Message = "Already registered";
    } else {

        $InsertQuerry = "INSERT INTO user(email, password) VALUES('$UserEmail', '$UserPassword')";

        $R = mysqli_query($conn, $InsertQuerry);

        if ($R) {
            $Message = "Complete--!";
       } else {
            $Message = "Error";
        }
    }
    $response[] = array("Message" => $Message);

    echo json_encode($response);
?>