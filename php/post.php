<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST["action"];
    switch ($action) {
        case "login":
            login();
        break;
        case "createaccount": 
            create_account();
            break;
        default:
            echo "$action";
    }
}else {
    echo "<script>location.replace('/index.html');</script>";
}
function login() {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $sql = "SELECT username, password FROM users";
    $result = submit_query($sql);
    if ($result->num_rows > 0) {
       // output data of each row
        while($row = $result->fetch_assoc()) {
            if(password_verify($pass, $row["password"])){
                header("Location: /");
                return;
            }
        }
        echo "user not found";
    } else {
        echo "couldn't read database results";
        return;
    }
}
function create_account() {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $pass2 = $_POST["pass2"];
    if ($pass2 != $pass){
        die("passwords don't match");
    }
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO users (fname, lname, email, username, password) VALUES ('$fname', '$lname', '$email', '$user','$hashed_pass')";
    submit_query($sql);
    header("Location: /login.php");
    exit;
}
function submit_query($sql) {
    $dbname = "philosophism";
    $username = "cardinal";
    $password = "REDACTED";
    $servername = "localhost";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "about to submit query";
    $result = $conn->query($sql);
    //echo "submitted query";
    //echo "result: " + $result;
    return $result;
}
?>
