<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>



  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">SERVICES</span>
      </div>
      <p class="nero__text">
      If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.
      </p>
    </div>
  </main>

    <!--<div class="container">-->
    <!--    <div class="nav">-->
    <!--        <a href="#vastu_services" onclick="showSection('vastu_services')">Vastu Services</a>-->
    <!--        <a href="#numerology_services" onclick="showSection('numerology_services')">Numerology Services</a>-->
    <!--        <a href="#astrology_services" onclick="showSection('astrology_services')">Astrology Services</a>-->
    <!--    </div>-->
    <!--    <div class="content">-->
    <!--        <section id="vastu_services" class="active">-->
    <!--            <h2>Vastu Services</h2>-->
    <!--            <p>We offer the following Vastu services to ensure prosperity and harmony:</p>-->
    <!--            <ul>-->
    <!--                <li>Industrial Vastu-->
    <!--                    <ul>-->
    <!--                        <li>Enhances productivity and growth</li>-->
    <!--                        <li>Optimal placement of machinery and raw materials</li>-->
    <!--                    </ul>-->
    <!--                </li>-->
    <!--                <li>Residential Vastu-->
    <!--                    <ul>-->
    <!--                        <li>Promotes a harmonious living environment</li>-->
    <!--                        <li>Ideal placement of rooms and furniture</li>-->
    <!--                    </ul>-->
    <!--                </li>-->
    <!--                <li>Commercial Vastu-->
    <!--                    <ul>-->
    <!--                        <li>Boosts business success</li>-->
    <!--                        <li>Optimal layout for offices and shops</li>-->
    <!--                    </ul>-->
    <!--                </li>-->
    <!--                <li>Astro Vastu-->
    <!--                    <ul>-->
    <!--                        <li>Combines Vastu and astrology principles</li>-->
    <!--                        <li>Creates a balanced and prosperous environment</li>-->
    <!--                    </ul>-->
    <!--                </li>-->
    <!--            </ul>-->
    <!--            <h3>Enquiry Form</h3>-->
    <!--            <form method="POST" action="services.php">-->
    <!--                <input type="hidden" name="service_category" value="Vastu Services">-->
    <!--                <div class="form-row">-->
    <!--                    <div><input type="text" name="name" placeholder="Your Name" required></div>-->
    <!--                    <div><input type="text" name="phone" placeholder="Your Phone" required></div>-->
    <!--                </div>-->
    <!--                <div class="form-row">-->
    <!--                    <div><input type="email" name="email" placeholder="Your Email" required></div>-->
    <!--                    <div><input type="text" name="scheduled_slot" placeholder="Scheduled Slot" required></div>-->
    <!--                </div>-->
    <!--                <textarea name="message" placeholder="Your Message"></textarea>-->
    <!--                <button type="submit">Book Now</button>-->
    <!--            </form>-->
    <!--        </section>-->
    <!--        <section id="numerology_services">-->
    <!--            <h2>Numerology Services</h2>-->
    <!--            <p>We offer the following Numerology services to provide insights and guidance:</p>-->
    <!--            <ul>-->
    <!--                <li>Numerology Report-->
    <!--                    <ul>-->
    <!--                        <li>Personalized insights based on your birth date and name</li>-->
    <!--                        <li>Helps in making informed decisions</li>-->
    <!--                    </ul>-->
    <!--                </li>-->
    <!--                <li>Numerology Consultation-->
    <!--                    <ul>-->
    <!--                        <li>Personalized guidance based on numerological analysis</li>-->
    <!--                        <li>Addresses specific concerns</li>-->
    <!--                    </ul>-->
    <!--                </li>-->
    <!--                <li>Numerology Name Correction-->
    <!--                    <ul>-->
    <!--                        <li>Adjusts the spelling of your name for better luck</li>-->
    <!--                        <li>Enhances overall success</li>-->
    <!--                    </ul>-->
    <!--                </li>-->
    <!--            </ul>-->
    <!--            <h3>Enquiry Form</h3>-->
    <!--            <form method="POST" action="services.php">-->
    <!--                <input type="hidden" name="service_category" value="Numerology Services">-->
    <!--                <div class="form-row">-->
    <!--                    <div><input type="text" name="name" placeholder="Your Name" required></div>-->
    <!--                    <div><input type="date" name="dob" placeholder="Date of Birth" required></div>-->
    <!--                </div>-->
    <!--                <div class="form-row">-->
    <!--                    <div>-->
    <!--                        <select name="gender" required>-->
    <!--                            <option value="">Select Gender</option>-->
    <!--                            <option value="Male">Male</option>-->
    <!--                            <option value="Female">Female</option>-->
    <!--                            <option value="Other">Other</option>-->
    <!--                        </select>-->
    <!--                    </div>-->
    <!--                    <div><input type="text" name="place_of_birth" placeholder="Place of Birth" required></div>-->
    <!--                </div>-->
    <!--                <div class="form-row">-->
    <!--                    <div><input type="text" name="time_of_birth" placeholder="Time of Birth" required></div>-->
    <!--                    <div><input type="text" name="phone" placeholder="Your Phone" required></div>-->
    <!--                </div>-->
    <!--                <div class="form-row">-->
    <!--                    <div><input type="email" name="email" placeholder="Your Email" required></div>-->
    <!--                </div>-->
    <!--                <button type="submit">Book Now</button>-->
    <!--            </form>-->
    <!--        </section>-->
    <!--        <section id="astrology_services">-->
    <!--            <h2>Astrology Services</h2>-->
    <!--            <p>We offer the following Astrology services to guide you through life's challenges:</p>-->
    <!--            <ul>-->
    <!--                <li>Kundali Milan-->
    <!--                    <ul>-->
    <!--                        <li>Matches horoscopes for marriage compatibility</li>-->
    <!--                        <li>Provides detailed compatibility analysis</li>-->
    <!--                    </ul>-->
    <!--                </li>-->
    <!--                <li>Love Relationship-->
    <!--                    <ul>-->
    <!--                        <li>Guidance for nurturing love relationships</li>-->
    <!--                        <li>Astrological insights for relationship harmony</li>-->
    <!--                    </ul>-->
    <!--                </li>-->
    <!--                <li>Relationship Problems-->
    <!--                    <ul>-->
    <!--                        <li>Solutions for resolving conflicts</li>-->
    <!--                        <li>Astrological remedies for relationship issues</li>-->
    <!--                    </ul>-->
    <!--                </li>-->
    <!--                <li>Career Prospects-->
    <!--                    <ul>-->
    <!--                        <li>Insights for career growth</li>-->
    <!--                        <li>Astrological guidance for job changes and promotions</li>-->
    <!--                    </ul>-->
    <!--                </li>-->
    <!--                <li>ETC-->
    <!--                    <ul>-->
    <!--                        <li>Other astrology services tailored to your needs</li>-->
    <!--                    </ul>-->
    <!--                </li>-->
    <!--            </ul>-->
    <!--            <h3>Enquiry Form</h3>-->
    <!--            <form method="POST" action="services.php">-->
    <!--                <input type="hidden" name="service_category" value="Astrology Services">-->
    <!--                <div class="form-row">-->
    <!--                    <div><input type="text" name="couple_kundali" placeholder="Couple Kundali" required></div>-->
    <!--                    <div><input type="text" name="matching" placeholder="Matching" required></div>-->
    <!--                </div>-->
    <!--                <div class="form-row">-->
    <!--                    <div><input type="text" name="first_name" placeholder="First Name" required></div>-->
    <!--                    <div><input type="text" name="middle_name" placeholder="Middle Name"></div>-->
    <!--                </div>-->
    <!--                <div class="form-row">-->
    <!--                    <div><input type="text" name="last_name" placeholder="Last Name" required></div>-->
    <!--                    <div><input type="email" name="email" placeholder="Your Email" required></div>-->
    <!--                </div>-->
    <!--                <div class="form-row">-->
    <!--                    <div><input type="text" name="phone" placeholder="Your Phone" required></div>-->
    <!--                    <div><input type="date" name="dob" placeholder="Date of Birth" required></div>-->
    <!--                </div>-->
    <!--                <div class="form-row">-->
    <!--                    <div><input type="text" name="place_of_birth" placeholder="Place of Birth" required></div>-->
    <!--                    <div><input type="text" name="time_of_birth" placeholder="Time of Birth" required></div>-->
    <!--                </div>-->
    <!--                <div class="form-row">-->
    <!--                    <div><input type="text" name="current_residency" placeholder="Current Place of Residency" required></div>-->
    <!--                </div>-->
    <!--                <button type="submit">Book Now</button>-->
    <!--            </form>-->
    <!--        </section>-->
    <!--    </div>-->
    <!--</div>-->
    
    <div class="container mt-5">
  <div class="row">
    <div class="col-md-3">
      <div class="nav flex-column nav-pills custom-tabs" id="v-tabs-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-tabs-home-tab" data-bs-toggle="pill" data-bs-target="#v-tabs-home" type="button" role="tab" aria-controls="v-tabs-home" aria-selected="true">Tab 1</button>
        <button class="nav-link" id="v-tabs-profile-tab" data-bs-toggle="pill" data-bs-target="#v-tabs-profile" type="button" role="tab" aria-controls="v-tabs-profile" aria-selected="false">Tab 2</button>
        <button class="nav-link" id="v-tabs-messages-tab" data-bs-toggle="pill" data-bs-target="#v-tabs-messages" type="button" role="tab" aria-controls="v-tabs-messages" aria-selected="false">Tab 3</button>
        <button class="nav-link" id="v-tabs-settings-tab" data-bs-toggle="pill" data-bs-target="#v-tabs-settings" type="button" role="tab" aria-controls="v-tabs-settings" aria-selected="false">Tab 4</button>
      </div>
    </div>
    <div class="col-md-9">
      <div class="tab-content" id="v-tabs-tabContent">
        <div class="tab-pane fade show active" id="v-tabs-home" role="tabpanel" aria-labelledby="v-tabs-home-tab">
          <h4 class="text-danger">Tab 1 Content</h4>
          <p>This is the content of Tab 1.</p>
        </div>
        <div class="tab-pane fade" id="v-tabs-profile" role="tabpanel" aria-labelledby="v-tabs-profile-tab">
          <h4>Tab 2 Content</h4>
          <p>This is the content of Tab 2.</p>
        </div>
        <div class="tab-pane fade" id="v-tabs-messages" role="tabpanel" aria-labelledby="v-tabs-messages-tab">
          <h4>Tab 3 Content</h4>
          <p>This is the content of Tab 3.</p>
        </div>
        <div class="tab-pane fade" id="v-tabs-settings" role="tabpanel" aria-labelledby="v-tabs-settings-tab">
          <h4>Tab 4 Content</h4>
          <p>This is the content of Tab 4.</p>
        </div>
      </div>
    </div>
  </div>
</div>
    

    
    
    
    
   <?php include("includes/footer.php"); ?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function showSection(id) {
            document.querySelectorAll('.content section').forEach(function(section) {
                section.classList.remove('active');
            });
            document.getElementById(id).classList.add('active');
        }

        // On page load, show the first section by default
        document.addEventListener("DOMContentLoaded", function() {
            showSection('vastu_services');
        });
    </script>
<style>
body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
        }
        .container {

        }
        .nav {
            display: flex;
    /* width: 250px; */
    justify-content: space-evenly;
    background: rgb(125 167 183 / 28%);
    color: #19392e;
    padding: 20px;
    border-radius: 10px;
    font-weight: bold;
        }
        .nav h3 {
            margin-top: 0;
        }
        .nav a {
            display: block;
            padding: 10px;
            /* color: #fff; */
            font-size:21px;
            text-decoration: none;
            margin-bottom: 5px;
        }
        .nav a:hover {
            background: #76b7dd;
            border-radius:5px;
        }
        .content {
            flex: 1;
            padding: 20px;
            /* background: #fff; */
        }
        .content section {
            display: none;
        }
        .content section.active {
            display: block;
        }
        ul{
            font-size:large;
        }
        form {
            /* max-width: 600px; */
            margin: 0 auto;
            padding: 20px;
            background: #f9f9f9;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        form .form-row {
            display: flex;
            justify-content: space-between;
        }
        form .form-row > div {
            flex: 0 0 48%;
        }
        form input, form select, form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form button {
            padding: 10px 20px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        form button:hover {
            background: #76b7dd;
        }
        h3 {
            text-align: center;
        }
        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        ul li{
            font-weight:bold;
        }
        ul li li{
            font-weight:normal;
        }
        section h2{
            color: #337ab7;
        }
            .custom-tabs .nav-link {
      text-align: center;
    }
    </style>