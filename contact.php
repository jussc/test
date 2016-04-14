<?php 
$showMessage = false;
$error = false;

  if(isset($_POST["address"]))
  {
    if(empty($_POST["name"]) || empty($_POST["subject"]) || empty($_POST["message"]))
    {
      $error = true;
    }
    else
    {
      $firstName = $_POST["first-name"];
      $lastName = $_POST["last-name"];
      $subject = $_POST["subject"];
      $address = $_POST["address"];
      $message = $_POST["message"];

      $recipient = "jusschoi@gmail.com";

      $mailBody = "This mail is from $firstName $lastName at $address \n $message";

      mail($recipient, $subject, $mailBody);

      $showMessage = true;
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link href='https://fonts.googleapis.com/css?family=Ovo|Ubuntu:400,300|Open+Sans:400,300|Lato:400,300' rel='stylesheet' type='text/css'>
  <title>Benedict Choi MFT</title>
</head>
<body>
  <header class="nav">
    <div class="logo">
      <h2>BENEDICT CHOI</h2>
    </div>

    <div class="links">
      <ul>
        <li><a href="index.html">home</a></li>
        <li><a href="">about</a></li>
        <li><a href="">psychotherapy</a></li>
        <li><a href="">rates</a></li>
        <li><a href="">connect</a></li>
        <li><a href="">blog</a></li>
      </ul>
    </div>
  </header>

  <section class="intro">
<!--     <div class="content">

    </div> -->
  </section>

  <div class="container">
    <div class="connect">

      <div class="left">
        <div class="content">
            <p>
            Please email or call to set up an appointment.
            </p>
            <br>
            <div class="map_details">
              <img src="http://placehold.it/350x200">
            </div>
        </div>
      </div>

      <div class="right">
        <div class="content">
            <div class="email_form">
              <p>Please fill out and submit the form below:</p>
              <br>
              <form class="form-horizontal" action="contact.php" method="post">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control name" name="first-name" placeholder="First Name">
                  <input type="text" class="form-control name" name="last-name" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label for="subject">Subject:</label>
                  <input type="text" class="form-control" name="subject">
                </div>
                <div class="form-group">
                  <label for="address">Email Address:</label>
                  <input type="email" class="form-control" name="address"  placeholder="you@example.com">
                </div>
                <div class="input-group">
                  <label for="message">Message:</label>
                  <textarea class="fieldLarge" type="text" class="form-control" name="message"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
        </div>
      </div>

    </div>

    <div id="contact">
      <div class="contact_info">
        <div class="content">
<!--           <h2>Contact</h2>
          <p><a href="mailto:b3n.choi@gmail.com">Email</a></p> -->
          <ul>
            <li>BENEDICT CHOI, LMFT</li>
            <li>714.880.8775</li>
            <li>choi.benedict@yahoo.com</li>
          </ul>

          <p>&copy; Choi MFT, 2016</p>
        </div>

<!--         <div class="right_block">
          <p>I have worked in the mental health community for 10 years and have gained tremendous experience from my work with children and families. I am passionate about supporting parents having a difficult time with parenting or relating with their children. I look forward to partnering with you. </p> 
        </div> -->
      </div>
    </div>

  </div>
</body>
</html>