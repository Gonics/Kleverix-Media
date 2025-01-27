<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kleverix Media - Your trusted partner for innovative media solutions.">
    <title>Kleverix Media</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="images/kleverix-logo.png" alt="Kleverix Media Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <h1>Welcome to Kleverix Media</h1>
        <p>Your trusted partner for innovative media and marketing solutions.</p>
        <a href="#contact" class="cta-button">Get Started</a>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2>About Us</h2>
        <p>At Kleverix Media, we specialize in delivering tailored solutions that empower businesses to thrive in the digital world.</p>
        <img src="images/about.jpg" alt="About Kleverix Media">
    </section>

    <!-- Services Section -->
    <section id="services">
        <h2>Our Services</h2>
        <div class="service">
            <h3>Content Creation</h3>
            <p>We craft high-quality content to help your brand stand out.</p>
        </div>
        <div class="service">
            <h3>Digital Marketing</h3>
            <p>Our strategies drive engagement and measurable results.</p>
        </div>
        <div class="service">
            <h3>Web Development</h3>
            <p>We design and develop stunning websites tailored to your needs.</p>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio">
        <h2>Portfolio</h2>
        <p>Explore our recent projects.</p>
        <div class="gallery">
            <img src="images/project1.jpg" alt="Project 1">
            <img src="images/project2.jpg" alt="Project 2">
            <img src="images/project3.jpg" alt="Project 3">
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials">
        <h2>What Our Clients Say</h2>
        <div class="carousel">
            <div>
                <p>"Kleverix Media transformed our brand! Highly recommended!"</p>
                <p>- John Doe, CEO</p>
            </div>
            <div>
                <p>"Their team is exceptional, delivering on every promise."</p>
                <p>- Sarah White, Marketing Manager</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact Us</h2>
        <form action="backend/submit_feedback.php" method="post" id="feedbackForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Kleverix Media. All rights reserved.</p>
        <p>Follow us on: 
            <a href="#">Facebook</a> | 
            <a href="#">Twitter</a> | 
            <a href="#">LinkedIn</a>
        </p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
