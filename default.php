<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


<style>
  .card{
    box-shadow: 0 0 5px gray;
    border-radius: .5em;
    padding:15px;
  }
 
  
</style>
  <!-- Cover -->
  <main style="background: rgb(142,5,219);
background: linear-gradient(27deg, rgba(142,5,219,0.5438550420168067) 0%, rgba(255,105,166,0.28895308123249297) 48%, rgba(142,5,219,0.4822303921568627) 100%);">

   
    <!-- Main -->
    <div class="wrapper-1" style="text-align:center;" >


<style>
.sort-about{
  margin:2em auto 4em;
  display:flex;
  align-items:center;
  padding:20px;
  box-sizing:border-box;
  text-align:left;
  width: 90%;
  height: 350px;
  border-radius: 10px;
}
.vid-sec{
  width:50%;
}
.about-sec{
  width:50%
}
.fs-2{
  font-size:1.3em;
}
.h1{
  color:darkcyan;
}

:root {
  --color-text: #2c3e50;
  --color-text-light: #34495e;
  --color-white: #ecf0f1;
  --shadow-dark: 0 2rem 6rem rgba(0, 0, 0, 0.3);
  --shadow-light: 0 2rem 5rem rgba(0, 0, 0, 0.06);
  --line: 1px solid var(--color-grey-light-2);
}

 html {
  font-size: 62.5%;
  box-sizing: border-box;
}
/*
body {
  font-family: "Lato", sans-serif;
  box-sizing: border-box;
  color: var(--color-text);
  margin: 0;
  padding: 0;
  height: 100vh;
  width: 100vw;
  display: flex;
  align-items: center;
  justify-content: center;
} */

button {
  padding: 0;
  margin: 0;
  border: none;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: var(--color-white);
  cursor: pointer;
  position: absolute;
  color: var(--color-white);
  font-size: 3rem;
  transform: translateY(-50%);
  top: 50%;
}

ul,
li {
  list-style: none;
  text-decoration: none;
  margin: 0;
  padding: 0;
}

.carousel {
  width: 100%;
  height: 600px;
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
}

.carousel_slider {
  width: 100%;
  height: 87%;
  overflow: hidden;
  position: relative;
}

.content_inner_slider {
  width: 100%;
  height: 100%;
  display: flex;
}

.img {
  min-width: 100%;
  /* height: 100%; */
  object-fit: cover;
}

.prev_button {
  left: 0;
  width: 30px;
  height: 50px;
}

.next_button {
  right: 0;
  width: 30px;
  height: 50px;
}

.dots {
  display: flex;
  margin: 1rem 0;
}

.dot {
  width: 1rem;
  height: 1rem;
  border: 1px solid var(--color-text-light);
  border-radius: 50%;
  margin: 0 5px;
  cursor: pointer;
}

.form {
  display: flex;
  align-items: center;
  font-size: 1rem;
}

.auto_slide {
}

</style>

<section class="carousel">
    <div class="carousel_slider">
      <div class="content_inner_slider">
        <img src="./images/b1.jpeg" alt="" class="img">
        <img src="./images/b2.jpg" alt="" class="img">
        <img src="./images/banner3.jpg" alt="" class="img">
        <img src="./images/b1.jpeg" alt="" class="img">
        <img src="./images/VC1.1 (1).jpg" alt="" class="img">
      </div>
      <button class="prev_button">
        <ion-icon name="chevron-back-outline"></ion-icon>
      </button>
      <button class="next_button">
        <ion-icon name="chevron-forward-outline"></ion-icon>
      </button>
    </div>
    <ul class="dots">
      <li class="dot" value="0"></li>
      <li class="dot" value="1"></li>
      <li class="dot" value="2"></li>
      <li class="dot" value="3"></li>
      <li class="dot" value="4"></li>
    </ul>
    <div class="form">
      <input type="checkbox" class="auto_slide" id="slide">
      <label for="slide">Auto Slide</label>
    </div>
  </section>



<div class="sort-about container" style="background: rgb(142,5,219);
background: linear-gradient(27deg, rgba(142,5,219,0.5438550420168067) 0%, rgba(255,105,166,0.28895308123249297) 48%, rgba(142,5,219,0.4822303921568627) 100%);">
  <div class="vid-sec text-center">
  <video controls="" autoplay="" name="media" width="480px"><source src="./images/v%20(3).mp4?autoplay=1&amp;mute=1" type="video/mp4"></video>
  </div>
  <div class="about-sec">
    <h1 class="h1">
    20+ Years Of Experience    
  </h1>
  <p class="fs-2">
  Passion, knowledge and the gift of beauty salon & Barber continues to give the best services in the world. Lorem Ips is simply dummy text of the printing and typesetting industry.
  </p>
  <p class="fs-2">
  Lorem Ips is simply dummy text of the printing and typesetting industry.Lorem Ips is simply dummy text of the printing and typesetting industry.
  </p>
  <a href="about.php" class="btn btn-primary"> Know More </a>

  </div>
</div>



            <h1>Our Services<h1>
<div class="flex" style="display:flex; width 100%;justify-content: space-evenly;">
          <div class="card" style="width: 28rem;">
  <img src="images/b1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">Vastu Services</h3>
    <p class="card-text" style="font-size:18px;">Vastu services to ensure prosperity and harmony</p>
    <a href="services.php#vastu_services" class="btn btn-primary">Enquiry Now</a>
  </div>
</div>

<div class="card" style="width: 28rem;">
  <img src="images/b1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">Numerology Services</h3>
    <p class="card-text" style="font-size:18px;">Numerology services to provide insights and guidance</p>
    <a href="services.php#numerology_services" class="btn btn-primary ">Enquiry Now</a>
  </div>
</div>

<div class="card" style="width: 28rem;">
  <img src="images/b1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">Astrology</h3>
    <p class="card-text" style="font-size:18px;">Astrology services to guide you through life's challenges</p></p>
    <a href="services.php#astrology_services" class="btn btn-primary">Enquiry Now</a>
  </div>
</div>
      </div>

</div>

    <div class="wrapper">
            <h1>Our Products<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->
          <h2 class="text-center">Testimonials</h2>
    <div class="testimonials" style="margin:30px auto; height:250px;">
      <input type="radio" name="testimonial" id="input-testimonial1" checked>
      <input type="radio" name="testimonial" id="input-testimonial2">
      <input type="radio" name="testimonial" id="input-testimonial3">
      <input type="radio" name="testimonial" id="input-testimonial4">
      <div class="testimonials-inner">
        <div class="testimonial">
          <div class="testimonial-photo">
            <div class="photo-background"></div>
            <div class="photo-author"></div>
          </div>
          <div class="testimonial-text">
            <p>Wait a second... you're telling me this testimonials slider is powered solely by CSS? That's some next-level web wizardry! I'm sold! Give me that mind-blowing slider to my website!</p>
          </div>
          <div class="testimonial-author">Henry Schwengle</div>
        </div>
        <div class="testimonial">
          <div class="testimonial-photo">
            <div class="photo-background"></div>
            <div class="photo-author"></div>
          </div>
          <div class="testimonial-text">
            <p>The older I get, the more I understand why roosters just scream to start the day.</p>
          </div>
          <div class="testimonial-author">Mr. George Robert</div>
        </div>
        <div class="testimonial">
          <div class="testimonial-photo">
            <div class="photo-background"></div>
            <div class="photo-author"></div>
          </div>
          <div class="testimonial-text">
            <p>Two of my friends have never met each other. Before they spoke, I told both of them that the other is a bit deaf. They shouted at each other for a few minutes before they realized that I'm an asshole.</p>
          </div>
          <div class="testimonial-author">Doodle Wobblepants</div>
        </div>
        <div class="testimonial">
          <div class="testimonial-photo">
            <div class="photo-background"></div>
            <div class="photo-author"></div>
          </div>
          <div class="testimonial-text">
            <p>Turning on your lights and sirens after losing a drag race is just poor sportsmanship, man.</p>
          </div>
          <div class="testimonial-author">John "Vroom" Cena</div>
        </div>
      </div>
      <div class="testimonials-arrows">
        <div class="arrow arrow-left">
        <label for="input-testimonial1"></label>
        <label for="input-testimonial2"></label>
        <label for="input-testimonial3"></label>
        <label for="input-testimonial4"></label>
        <span></span>
      </div>
      <div class="arrow arrow-right">
        <label for="input-testimonial1"></label>
        <label for="input-testimonial2"></label>
        <label for="input-testimonial3"></label>
        <label for="input-testimonial4"></label>
        <span></span>
      </div>
    </div>
    <div class="testimonials-bullets" style="margin-top:-215px;">
      <label for="input-testimonial1">
        <div class="bullet">
          <div>
            <span></span>
          </div>
        </div>
      </label>
      <label for="input-testimonial2">
        <div class="bullet">
          <div>
            <span></span>
          </div>
        </div>
      </label>
      <label for="input-testimonial3">
        <div class="bullet">
          <div>
            <span></span>
          </div>
        </div>
      </label>
      <label for="input-testimonial4">
        <div class="bullet">
          <div>
            <span></span>
          </div>
        </div>
      </label>
    </div>
  </div>
</div>
</div><!-- container Ends -->
<!-- FOOTER -->
<footer class="page-footer">
  
  <div class="footer-nav">
    <div class="container clearfix">
      
      <div class="footer-nav__col footer-nav__col--info">
        <div class="footer-nav__heading">Information</div>
        <ul class="footer-nav__list">
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">The brand</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Local stores</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Customer service</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Site map</a>
          </li>
        </ul>
      </div>
      
      <div class="footer-nav__col footer-nav__col--whybuy">
        <div class="footer-nav__heading">Why buy from us</div>
        <ul class="footer-nav__list">
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Shipping &amp; returns</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Secure shipping</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Testimonials</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Award winning</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Ethical trading</a>
          </li>
        </ul>
      </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Your account</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Sign in</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Register</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">View cart</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">View your lookbook</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Track an order</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Update information</a>
              </li>
            </ul>
          </div>
          
          
          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Contact details</div>
            <address class="address">
              Head Office: Venus Saturn.<br>
              180-182 Regent Street, London.
            </address>
            <div class="phone">
              Telephone:
              <a class="phone__number" href="tel:0123456789">0123-456-789</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:support@venussaturn.com" class="email__addr">support@venussaturn.com</a>
            </div>
          </div>
          
        </div>
      </div>
      
      <div class="banners">
        <div class="container clearfix">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3200.706618491708!2d77.34884177511786!3d28.64091667566015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDM4JzI3LjMiTiA3N8KwMjEnMDUuMSJF!5e1!3m2!1sen!2sin!4v1722325116220!5m2!1sen!2sin" width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>          <div class="banner-social">
            <a href="https://www.facebook.com/profile.php?id=100077683663971&mibextid=ZbWKwL" class="banner-social__link">
              <i class="icon-facebook"></i>
            </a>
            <a href="#" class="banner-social__link">
              <i class="icon-twitter"></i>
            </a>
            <a href="https://www.instagram.com/astroguruamit199?igsh=eHVreTM5bjh1N2xn" class="banner-social__link">
              <i class="icon-instagram"></i>
            </a>
            <a href="#" class="banner-social__link">
              <i class="icon-pinterest-circled"></i>
            </a>
          </div>
          
        </div>
      </div>
      
      <div class="page-footer__subline">
        <div class="container clearfix">
          
          <div class="copyright">
            &copy; 2024 Venus Saturn&trade;
          </div>
          
          <div class="developer">
            Dev by Anand Sharma
          </div>
          
          <div class="designby">
            Design by Om Panday
          </div>
          
        </div>
      </div>
    </footer>
    <div class="main">
  </body>
  <style>
    body {
      margin: 0;
      font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

* {
  box-sizing: border-box;
}

.main {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #efefef;
  overflow: hidden;
  /* height: 100vh; */
  width: 100vw;
}

.testimonials {
  text-align:center;
  margin: auto;
  background-color: #ffffff;
  width: 100%;
  max-width: 740px;
  margin: 20px;
  box-shadow: 0 6px 5px -7px #cbcbcb;
  border-radius: 3px;
  position: relative;
  opacity: 0;
  animation: showTestimonials 0.32s 0.78s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards;
  input {
    display: none;
    visibility: hidden;
    height: 0;
    width: 0;
    pointer-events: none;
    opacity: 0;
  }
}

@keyframes showTestimonials {
  to {
    opacity: 1;
  }
}

.testimonials-inner {
  position: relative;
  min-height: 100px;
}

.testimonial {
  padding: 40px 34px 20px 34px;
  margin: 0 30px;
  pointer-events: none;
  position: relative;
  z-index: 1;
}

input[name="testimonial"]:nth-child(1):checked ~ .testimonials-inner .testimonial:nth-child(1),
input[name="testimonial"]:nth-child(2):checked ~ .testimonials-inner .testimonial:nth-child(2),
input[name="testimonial"]:nth-child(3):checked ~ .testimonials-inner .testimonial:nth-child(3),
input[name="testimonial"]:nth-child(4):checked ~ .testimonials-inner .testimonial:nth-child(4) {
  pointer-events: initial;
}

.testimonial {
  transition: 0.72s cubic-bezier(0.215, 0.610, 0.355, 1), opacity 0.32s 0.12s;
  opacity: 0;
  transform: translate(0, 38px);
  max-height: 80px;
  animation: hideTestimonial 0s 0.52s forwards;
  position: relative;
}

input[name="testimonial"]:nth-child(1):checked ~ .testimonials-inner .testimonial:nth-child(1),
input[name="testimonial"]:nth-child(2):checked ~ .testimonials-inner .testimonial:nth-child(2),
input[name="testimonial"]:nth-child(3):checked ~ .testimonials-inner .testimonial:nth-child(3),
input[name="testimonial"]:nth-child(4):checked ~ .testimonials-inner .testimonial:nth-child(4) {
  animation: showTestimonial 0s 0.72s forwards;
  position: absolute;
  opacity: 1;
  transform: none;
  max-height: 500px;
  top:40px;
  transition: 0.3s 0.52s, opacity 0.68s 0.92s, max-height 0.82s 0.72s;
}

@keyframes hideTestimonial {
  to {
    position: absolute
  }
}

@keyframes showTestimonial {
  to {
    position: relative
  }
}

input[name="testimonial"]:nth-child(1):checked ~ .testimonials-bullets label:nth-child(1) span,
input[name="testimonial"]:nth-child(2):checked ~ .testimonials-bullets label:nth-child(2) span,
input[name="testimonial"]:nth-child(3):checked ~ .testimonials-bullets label:nth-child(3) span,
input[name="testimonial"]:nth-child(4):checked ~ .testimonials-bullets label:nth-child(4) span {
  background-color: rgba(245, 34, 34, 0.836);
  transform: scale(1);
  transition: transform 0.36s cubic-bezier(0.26, -0.59, 0.43, 2.48), background-color 0.41s ease-in;
}

.testimonial-photo {
  height: 84px;
  width: 84px;
  position: absolute;
  top: -32px;
  left: 0;
  right: 0;
  margin: 0 auto;
}

.photo-background {
  background-color: #ffffff;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 50%;
  height: 100%;
  box-shadow: 0 -4px 3px -2px #c3c2c2;
  width: 100%;
  transform: scale(0.87);
  transition: 0.32s;
}

input[name="testimonial"]:nth-child(1):checked ~ .testimonials-inner .testimonial:nth-child(1) .photo-background,
input[name="testimonial"]:nth-child(2):checked ~ .testimonials-inner .testimonial:nth-child(2) .photo-background,
input[name="testimonial"]:nth-child(3):checked ~ .testimonials-inner .testimonial:nth-child(3) .photo-background,
input[name="testimonial"]:nth-child(4):checked ~ .testimonials-inner .testimonial:nth-child(4) .photo-background {
  transform: scale(1);
  transition: 0s;
}

.photo-author {
  background-size: 68px;
  background-position: center;
  height: 0;
  width: 0;
  border-radius: 50%;
  background-color: #dbdbdb;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  margin: auto;
  opacity: 0;
  transform: scale(1.18) translate(0, -6px);
  transition: transform 0.42s ease-out, opacity 0.58s, width 0s 0.6s, height 0s 0.6s;
}

input[name="testimonial"]:nth-child(1):checked ~ .testimonials-inner .testimonial:nth-child(1) .photo-author,
input[name="testimonial"]:nth-child(2):checked ~ .testimonials-inner .testimonial:nth-child(2) .photo-author,
input[name="testimonial"]:nth-child(3):checked ~ .testimonials-inner .testimonial:nth-child(3) .photo-author,
input[name="testimonial"]:nth-child(4):checked ~ .testimonials-inner .testimonial:nth-child(4) .photo-author {
  transform: scale(1);
  opacity: 1;
  height: 68px;
  width: 68px;
  transition: width 0.26s 1.01s, height 0.26s 1.01s;
}

.testimonial-text {
  color: #606060;
  font-size: 20px;
  text-align: center;
  text-shadow: 0 0 1px #939393;
  letter-spacing: 0.12px;
  font-style: italic;
  line-height: 26px;
  p {
    margin-bottom: 10px;
  }
}

.testimonial-author {
  font-size: 15px;
  text-align: right;
  color: #bdbdbd;
  letter-spacing: 0.24px;
  text-transform: uppercase;
  text-shadow: 0 0 1px #e3e3e3;
  &:before {
    content: '– ';
  }
}

.testimonials-bullets {
  display: flex;
  justify-content: center;
  width: 100%;
  height: 30px;
  transform: translate(0, 8px);
  .bullet {
    height: 30px;
    width: 30px;
    cursor: pointer;
    margin: 0 1px;
    div {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 30px;
      width: 30px;
      border-radius: 50%;
      background-color: #ffffff;
      box-shadow: 0 4px 6px -7px #000000;
      span {
        background-color: #c3c3c3;
        height: 14px;
        width: 14px;
        border-radius: 50%;
        transform: scale(0.82);
        transition: 0.72s;
      }
    }
    &:hover span {
      background-color: rgba(216, 118, 118, 0.836);
    }
  }
}

.testimonials-arrows {
  height: 100%;
  .arrow {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 50px;
    width: 50px;
    position: absolute;
    top: calc(50% - 25px);
    span {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #ffffff;
      border-radius: 50%;
      height: 40px;
      width: 40px;
      &:before {
        font-size: 32px;
        font-family: monospace, sans-serif;
        font-weight: 600;
        color: #c3c3c3;
        transition: color 0.21s ease-in;
      }
    }
    &:hover span:before {
      color: #444444;
      transition: color 0.17s ease-out;
    }
    label {
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      cursor: pointer;
    }
  }
  .arrow-left {
    left: -20px;
    span {
      box-shadow: 40px 0 20px 20px #ffffff, -5px 0 30px 0px #e1e1e1;
      &:before {
        content: '<';
      }
    }
  }
  .arrow-right {
    right: -20px;
    span {
      box-shadow: -40px 0 20px 20px #ffffff, 5px 0 30px 0px #e1e1e1;
      &:before {
        content: '>';
      }
    }
  }
}

input[name="testimonial"]:nth-child(1):checked ~ .testimonials-arrows .arrow-left label[for="input-testimonial4"],
input[name="testimonial"]:nth-child(1):checked ~ .testimonials-arrows .arrow-right label[for="input-testimonial2"],
input[name="testimonial"]:nth-child(2):checked ~ .testimonials-arrows .arrow-left label[for="input-testimonial1"],
input[name="testimonial"]:nth-child(2):checked ~ .testimonials-arrows .arrow-right label[for="input-testimonial3"],
input[name="testimonial"]:nth-child(3):checked ~ .testimonials-arrows .arrow-left label[for="input-testimonial2"],
input[name="testimonial"]:nth-child(3):checked ~ .testimonials-arrows .arrow-right label[for="input-testimonial4"],
input[name="testimonial"]:nth-child(4):checked ~ .testimonials-arrows .arrow-left label[for="input-testimonial3"],
input[name="testimonial"]:nth-child(4):checked ~ .testimonials-arrows .arrow-right label[for="input-testimonial1"] {
  z-index: 1;
}

.testimonial:nth-child(1) .photo-author {
  background-image: url();
}

.testimonial:nth-child(2) .photo-author {
  background-image: url();
}

.testimonial:nth-child(3) .photo-author {
  background-image: url();
}

.testimonial:nth-child(4) .photo-author {
  background-image: url();
}
</style>
<script src="./assets/js/cra.js"></script>
</html>
