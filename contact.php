
<?php
include 'header.php';
?>
        <section class="contact-section">
            <div class="contact-form-container">
              <h2>Contact Us</h2>
              <form id="contact-form">
                <input type="text" id="name" name="name" placeholder="Name" required>
                <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <div class="services-options">
                  <label><input type="radio" name="service" value="strategy"> Social Media Strategy Development</label>
                  <label><input type="radio" name="service" value="advertisement"> Social Media Advertisement</label>
                  <label><input type="radio" name="service" value="advertisement"> Content Creation</label>
                  <label><input type="radio" name="service" value="advertisement"> Social Media Analytics and Reporting</label>
                  <label><input type="radio" name="service" value="advertisement"> User Generated Content Services</label>
                  <label><input type="radio" name="service" value="advertisement"> Affiliate Market Services</label>
                  
                </div>
                <textarea id="message" name="message" placeholder="Message..." required></textarea>
                <button type="submit">Submit</button>
              </form>
            </div>
            <div class="contact-info">
                <div class="info-item phone">
                    <div class="info-title">Phone</div>
                    <span class="icon phone-icon"></span>123-456-7890
                  </div>
                  <div class="info-item email">
                    <div class="info-title">Email</div>
                <span class="icon email-icon"></span>abcdefgh@gmail.com
              </div>
              <div class="info-item location">
                <div class="info-title">Location</div>
                <span class="icon location-icon"></span>123 S Street
              </div>
              <img src="images/contact-us.png" alt="Contact Illustration" class="contact-image">
            </div>


          </section>


          <?php
    include 'footer.php';
    ?>