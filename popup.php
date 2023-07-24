<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font Awesome Icons CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="popup/style.css" />

    <title>Popup Newsletter </title>
  </head>
  <body>
    <!-- Popup open button -->
    <button class="popup-btn" onclick="openPopup()">Click here to Subscribe!</button>

    <!-- Popup start -->
    <div class="popup">
      <form action="popup.php" method="POST" >
      <div class="popup-top">
        <div class="email-icon">
          <i class="fa-solid fa-envelope-open-text"></i>
        </div>

        <a href="home.php"><i id="close-icon" class="fa-solid fa-xmark" onclick="closePopup()"></i></a>

        <h2>SUBSCRIBE NOW</h2>

        <p>Subscribe to our newsletter & stay updated!</p>

        <p>Our newsletter is sent once a week, every monday</p>
      </div>
      <div class="popup-bottom">
        <input type="text" name="text" placeholder="Enter your name here" required>
        <input type="email" name="email" id="email" placeholder="Enter your email here" required/>

        <a href="index.php"><button>
          Subscribe Now!
          <i class="fa-solid fa-paper-plane"></i>
        </button></a>
      </div>
    </form>
    </div>
    </body>
    <!-- Popup end -->
<?php
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP(); //If using local host server, this line is important!

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure='tls';
    $mail->Port = 587;

    $mail->Username='wearecrishe@gmail.com';
    $mail->Password = 'xdfpqouxvzseojco';


    $mail->setFrom('wearecrishe@gmail.com', "CRISHE - Premium Tech Reseller");
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);

    $mail->Subject = 'Hello';
    $mail->Body=" Dear Valued Customer,

    Greetings from Crishe - Your Trusted Tech Reseller!

    We hope this letter finds you in the best of health and spirits. As one of our most cherished customers, we are delighted to reach out and extend our heartfelt gratitude for your continued support and loyalty to Crishe.

    Since our inception, our mission has been to provide cutting-edge technology solutions that empower and enhance your digital lifestyle. Your unwavering patronage and feedback have been invaluable in shaping the way we operate and serve our esteemed customers like yourself.

    At Crishe, we understand that technology evolves at a rapid pace, and we are committed to staying at the forefront of innovation to offer you the latest and most advanced products and services. As part of our commitment to your satisfaction, we have implemented various enhancements to ensure your shopping experience with us remains exceptional.

    As a subscribed customer, you are entitled to exclusive benefits, including:

    1. Early access to new product launches and promotions.
    2. Priority customer support to address any queries or concerns promptly.
    3. Special discounts and offers tailored just for you.
    4. Regular updates on the latest tech trends and insights.

    We want you to know that your trust in Crishe inspires us to strive for excellence every day. Our team of dedicated professionals is always working hard to exceed your expectations and provide you with seamless, hassle-free shopping experiences.

    Should you ever need any assistance or have questions, please don't hesitate to contact our customer support team at [insert contact details]. We are here to assist you in any way possible.

    Once again, thank you for being an integral part of the Crishe family. We look forward to serving you and meeting all your technology needs in the years to come.

    Wishing you continued success and joy in all your endeavors.

    Best regards,

    Customer Relations Team
    Crishe - Your Trusted Tech Reseller";
    $mail->send()
   ?>
    <!-- JavaScript script -->
    <script src="popup/script.js"></script>
</html>
