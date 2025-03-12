<!DOCTYPE html>
<html>
    <head>
        <title>Retrieve Information</title>
        <link rel = "stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>
        <h1>Retrieve Information</h2>
       
        <?php
        $conn = new mysqli('localhost','root','','casing');
        if ($conn -> connect_error)
        {
            die("Connection failed:".$conn->connect_error);
        }
        $sql = "SELECT * FROM information";
        $result = $conn-> query($sql);
        ?>
    <table border="1"; cellspacing="0"; style="width:100%">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Posted</th>
        </tr>
    <?php
    while($row = $result->fetch_assoc())
    {
        ?>
        <tr>
            <td><?php echo $row["id"]?></td>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["message"]?></td>
            <td><?php echo $row["posted"]?></td>
        </tr>
    <?php
    }
    $conn -> close();
    ?>
    </table>
</html>




 