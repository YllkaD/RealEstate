    <footer>
            <div class="footer-container">
        <div class="footer-left">
            <h3 id="contact">Contact Us</h3>
            <p id="email">Email: <id="email-address">contact@example.com</p>
            <p id="phone">Phone: <id="phone-number">(123) 456-789</p>
            <p id="address">Address: <id="address-details">111 Street, City, Country</p>
        </div>
        <div class="footer-column">
            <h3 id="about">About Us</h3>
        </div>
        <div class="footer-column">
            <h3 id="links">Quick Links</h3>
            <ul id="quick-links">
                <li><a href="#" id="home-link">Home</a></li>
                <li><a href="#" id="about-link">About Us</a></li>
                <li><a href="#" id="services-link">Services</a></li>
                <li><a href="#" id="contact-link">Contact</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3 id="connect">Connect With Us</h3>
            <ul class="social-icons">
                <li><a href="#" id="facebook-link"><img src="facebook-icon.png" alt="Facebook"></a></li>
                <li><a href="#" id="twitter-link"><img src="twitter-icon.png" alt="Twitter"></a></li>
                <li><a href="#" id="instagram-link"><img src="instagram-icon.png" alt="Instagram"></a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        &copy; <id="copyright-year">2023 <id="company-name">Real Estate. All rights reserved.
    </div>


    <div class="footer-menu">
            <?php
            wp_nav_menu(
                array(
                'theme_location' => 'footer-menu',
                'container'      => false, 
                'menu_class'     => 'footer-menu',
            )
        );
            ?>
        </div>
    </footer>

    <?php wp_footer(); ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>
</html>
