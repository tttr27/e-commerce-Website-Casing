<link rel="stylesheet" type="text/css" href = "style.css">
<?php include('includes/header.php');?>
<?php
if(isset($_SESSION['id']) && isset($_SESSION['email']))
{
    header('Location: index.php');
    exit();
}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    
    $email=(trim($_POST['email']));
    $password= md5(trim($_POST['password']));
    if (empty($email))
    echo "Enter your email";
    else if (empty($password))
    echo "Enter the password";
    else
    {
        $conn= new mysqli('localhost','root','','casing');
        if ($conn->connect_error)
        die("Connection failed: ".$conn->connect_error);
       
    
    $sql="SELECT * FROM admins WHERE email='$email' AND password='$password'";
    $result =$conn->query($sql);
  
    if(mysqli_num_rows($result) ===1)
    {
        
        $row =$result->fetch_assoc();
        if ($row['email'] ===$email && $row['password'] ===$password)
        {
            echo "Logging in...";
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            header('Location: contact/retrieveInformation.php');
            exit();

        }
        else
        {
            echo "Invalid Email or Password";
        }
    }
}
}
?>
    <div class="login_container">
        <form action=""  method="post" class="login_form">
                <h1>Login for Admin</h1>
                <input type="email" placeholder="Email" class="box" name="email" required><br>
                <input type="password" placeholder="Password" class="box" name="password" required><br>
                <input type="submit" value="login " class="btn">
    
        </form>
    </div>

<?php include('includes/footer.php');?>


