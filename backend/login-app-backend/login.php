<?php

    include('connection.php');

    $UserEmail = $decodedData['Email'] ?? "";
    $UserPassword = ($decodedData['Password']) ?? ""; //password is hashed

    $SQL = "SELECT * FROM user WHERE email = '$UserEmail'";
    $exeSQL = mysqli_query($conn, $SQL);
    $checkEmail =  mysqli_num_rows($exeSQL);

    if ($checkEmail != 0) {
        $arrayu = mysqli_fetch_array($exeSQL);
        if ($arrayu['UserPassword'] != $UserPassword) {
            $Message = "pw WRONG";
        } else {
            $Message = "Success";
        }
    } else {
        $Message = "No account yet";
    }

    $response[] = array("Message" => $Message);
    echo json_encode($response);
?>