<?php
if ($_SERVER['REQUEST_METHOD'] ==='POST')
{
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $posted = date("Y-m-d, G:i:s" ); ;
    if(empty($name))
    echo "Enter your name";
    else if (empty($email))
    echo "Enter your email";
    else if (empty($message))
    echo "Enter the message";
    else{
        //Create connection
        $conn = new mysqli('localhost', 'root','', 'casing');
        //check connection
        if($conn -> connect_error){
        die("Connection failed: ".$conn ->connect_error);
        }
        //$sql ="insert into announcement values('','$subject','$message','$type', '$posted')";
        $sql ="insert into information (name,email,message,posted) values ('$name','$email','$message', '$posted') ";
        if ($conn->query($sql) === TRUE){
            echo "Your message is submitted successfully , we will get back to you soon !! ";
            }
        else{
            echo "Error: ".$sql."<br>".$conn->error;

        }
        $conn->close();
    }
}

?>