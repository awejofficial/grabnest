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
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/dev.gif" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
         <p>I am <a href="https://www.instagram.com/awej_04" target="_blank">Awej Pathan,</a> a final-year Polytechnic student from Arvind Gavali College of Engineering, Satara. For my project, GrabNest, I have successfully deployed this fully functional eCommerce platform online, bringing my vision to life through hard work, dedication, and my own problem-solving skills. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="https://i.imgur.com/2WpN2E1.jpeg" alt="">
         <p>Been using their services for quite a bit and have never had an issue with the quality of their products. Online e-products working great as well. Only issue I have is they usually deliver when I'm a little caught up, though I've set a preferred delivery time. Everything else has been good.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> <a href="https://www.facebook.com/profile.php?id=100083292714419" target="_blank">Mahendra Singh Dhoni</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="https://i.imgur.com/Spr8l4a.jpeg" alt="">
         <p>It is the first online services in GrabNest which we can trust completely.I always unbox making a video and instantly complain if there's anything wrong. Sometimes even don't need to return the item and they process the refund. GrabNest do heavy fine to sellers who send wrong products thats why its platform getting better day by day.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/profile.php?id=100075602340579" target="_blank">Virat Kohli</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="https://i.imgur.com/bbqrV0P.jpeg" alt="">
         <p>GrabNest is great if you choose good sellers . A variety of required item available . Customers can return and refund full amount within 7 days easily. GrabNest is boosting eCommerce business in Orisa.It provides great opportunity to sale items online with ease.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/kaushalsah135790" target="_blank">Elon Musk</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="https://i.imgur.com/A354VkB.jpeg" alt="">
         <p>Using GrabNest for online shopping from almost 3 years. Outstanding experience with them. Game vouchers and pick up point as delivery with 0 shipping charges are super saving services.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/fuccheekta.moh.1" target="_blank">Gautam Gambhir</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ3qcjwcwgXQ1G_GeuQLKxi7czVYIJ6dVKYA&s" alt="">
         <p>I have been using their services for the last 2 years and I have found them extremely reliable.Their return policy is what gives you an extra layer of reliance and peace of mind. In case the product doesn't meet your expectations or if there is any fault in it. then you can return the product within seven days from the date of delivery.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/ranjitchaudhary159" target="_blank">Salman Khan</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="https://desimartini-images.s3.ap-south-1.amazonaws.com/images_latest/webstories/wp-content/uploads/2024/01/srk3.jpg" alt="">
         <p>GrabNest is cool! I have ordered hundreds of products from it and never got any scam. It delivers products in time with out delay. Packaging of products are strong and delivery rates are too low. Just amazing Website will keep shopping from grabnest.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/pra.x.nil"  target="_blank">
Shahrukh Khan</a></h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

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