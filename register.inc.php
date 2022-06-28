<?php
if (isset($_POST["regin"])){
    $username = $_POST["user"];
    $email = $_POST["email"];
    $pword = $_POST["pword"];
    $pwordagain = $_POST["pwordagain"];

    //Error handling
    if (!isset($username) || trim($username) == '' || !isset($email) || trim($email) == '' || !isset($pword) || trim($pword) == '' || !isset($pwordagain) || trim($pwordagain) == ''){
        $error = "empty";
    }
    if ($pword != $pwordagain){
        $error = "pword-notsame";
    }
    if (strlen($username) > 90){
        $error = "username-long";
    }
    if (strlen($email) > 90){
        $error = "email-long";
    }
    if (strlen($pword) > 90){
        $error = "pword-long";
    }

    include_once("conn.php");
    $SQL = "SELECT username, email FROM user WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($SQL);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();

    $results = $stmt->get_result();
    $results = $results->fetch_array(MYSQLI_ASSOC);

    echo $results;
}
else {
    header("location: index.php?illegal");
    exit();
}