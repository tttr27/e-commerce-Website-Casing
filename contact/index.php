<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    
    <link rel = "stylesheet" type="text/css" href="/asgm/style/style.css">

    
  </head>
  <body>
  <?php include('../includes/header.php');?>

    <div class="contact">

        <h1>Contact Us</h1>
    
        <h2>Contact Information:</h2>

        <p>Phone: <a href="tel:+0342808888">0342808888</a></p>
        <p>Email, for general enquiry: <a href="mailto:caSing@gmail.com">caSing@gmail.com</a></p><br>
      
        <h2>Contact Form:</h2>
      <form action="submit_form.php" method="post" >
        <label for="name">Name:</label>
        <input type="text" id="name" class="box" name="name" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" class="box" name="email" required>
        <br><br>

        <label for="message">Message:</label>
        <textarea id="message" class="textarea" name="message" required></textarea>
        <br><br>

        <input type="submit" value="send " class="cbtn">
        <input type="reset" value="Reset " class="cbtn">
      
      </form>

</div>

    
  </body>
  <?php include ('../includes/footer.php');?>
</html>