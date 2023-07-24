<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ABOUT - CRISHE</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
 <link rel="shortcut icon" type="image" href="./images/crishelogo.png">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<!-- top navbar -->
    <div class="top-navbar">
        <div class="top-icons">
            <img src="images/fph.png" alt="">
         
            <a class="fa-brands fa-facebook-f" href="https://www.facebook.com/profile.php?id=100094246548819"></a>
            <a class="fa-brands fa-instagram" href="https://www.instagram.com/wearecrishe/"></a>
            <a class="fa-brands fa-twitter" href="https://twitter.com/Crishe896428"></a>
    
        </div>
          
           <h4> PREMIUM TECH RESELLER FROM THE PHILIPPINES</h4>
            
            
        </div>
    <!-- top navbar -->




<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/reseller.png" alt="">
         
      </div>

      <div class="content">
         <h3>Introducing CRISHE - Your Gateway to Gadget Bliss!</h3>
         
         <p>Welcome to CRISHE, the ultimate destination for gadget enthusiasts and tech-savvy individuals alike. Step into a world where cutting-edge technology meets unparalleled convenience, as we proudly present our premier gadget reseller ecommerce website.
         
         Join us on this exhilarating journey as we redefine the way you shop for gadgets. Explore CRISHE, your gateway to gadget bliss, and unleash the endless possibilities that technology has to offer.

            Welcome to the future of gadget shopping. Welcome to CRISHE!</p>
         <a href="contact.php" class="btn">Contact our Team</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Customer Reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.jpg" alt="">
         <p>"CRISHE has exceeded my expectations in every way. I recently bought a smartwatch from their website, and I couldn't be happier with my purchase. The website's interface is intuitive, making it easy to find the perfect gadget. The ordering process was seamless, and my smartwatch arrived earlier than expected."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Gerald</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.jpg" alt="">
         <p>"CRISHE is my go-to destination for all things tech. I have made multiple purchases from their website, and each experience has been fantastic. The range of gadgets they offer is extensive, and the detailed specifications and customer reviews help me make informed decisions. The delivery is always on time, and the products are well-packaged." </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ian</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.jpg" alt="">
         <p>"I recently purchased a smartphone from CRISHE, and I must say, I am thoroughly impressed. The website was easy to navigate, and I found exactly what I was looking for in no time. The product arrived promptly and in perfect condition. The customer service was exceptional, with the team promptly addressing all my queries. " </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Marja</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.jpg" alt="">
         <p>"CRISHE is a game-changer in the gadget retail space. Their curated selection of products ensures that you're only getting the best of the best. I recently purchased a pair of wireless earbuds, and the sound quality is simply amazing. The website provided detailed specifications and customer reviews, helping me make an informed decision."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Janelle</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.jpg" alt="">
         <p>"I've been a loyal customer of CRISHE for years now, and they never disappoint. Their range of gadgets is impressive, and they always keep up with the latest trends. What I appreciate the most is their commitment to quality. Every product I've purchased from them has been top-notch, and their customer service team is friendly and efficient. If you're looking for a reliable and trustworthy gadget reseller, look no further than CRISHE."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anny</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.jpg" alt="">
         <p>"I can't say enough good things about CRISHE. From the moment I landed on their website, I felt like I was in gadget heaven. The selection is mind-blowing, catering to every budget and preference. I recently purchased a smart home device, and it has transformed my living space. CRISHE's delivery was quick and hassle-free, and their customer support was incredibly helpful. If you're a gadget lover like me, you'll be hooked on CRISHE." </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lenard </h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>



<section>
    
    <!-- delivery - cat -->
   <div class="image-delivery">
        <div class="image-item">
           <h1 class="heading">Trusted Delivery Partners</h1>
           <br>
            <img src="images/about.png" alt="Image 1">
             
            <br> <br> <br>
            <p>We are proud to offer a wide range of third-party Cash on Delivery (COD) services to cater to your shipping needs. With our trusted partners like J and T, Ninja Van, and Transportify, you can enjoy seamless and reliable delivery solutions for your products. Whether you are a small online business or a large e-commerce enterprise, our COD services provide convenience and peace of mind for both you and your customers. Rest assured that your packages will be handled with utmost care and delivered efficiently to their destinations. Experience hassle-free shipping and payment options with our top-tier third-party COD services, ensuring customer satisfaction and boosting your business success. Partner with us today and take your shipping experience to the next level!</p>
        </div>
    </div>
    <!-- delivery - cat -->
    
    
    
</section>





<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>