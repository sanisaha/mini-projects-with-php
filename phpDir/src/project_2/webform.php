<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="webform.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head>

<body>
    <div class="container">
        <form action="webform.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
        </form>
    </div>
</body>

</html>

<?php
//collect the form data, and remove leading and trailing whitespaces (trim) and sanitize for html output (htmlspecialchars)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim(htmlspecialchars($_POST["name"]));
  $email = trim(htmlspecialchars($_POST["email"]));
  $subject = trim(htmlspecialchars($_POST["subject"]));
  $message = trim(htmlspecialchars($_POST["message"]));

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
    }
    // Check the sanitied data in the console
    echo "<script>console.log('Sanitized name: " . $name . "');</script>";
    echo "<script>console.log('Sanitized email: " . $email . "');</script>";
    echo "<script>console.log('Sanitized subject: " . $subject . "');</script>";
    echo "<script>console.log('Sanitized message: " . $message . "');</script>";
}
?>
