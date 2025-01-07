<?php
/*
Template Name: Coming Soon
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - Coming Soon</title>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            background-color: #191414;
            color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
        }
        .container {
            max-width: 600px;
            padding: 20px;
        }
        h1 {
            font-family: "Poppins", sans-serif;
            font-size: 3rem;
            margin-bottom: 0;
        }
        .tagline {
            font-family: "Poppins", sans-serif;
            font-size: 1.5rem;
            color: #1db954;
            margin-top: 0;
        }
        p {
            margin-bottom: 2rem;
        }
        #countdown {
            font-size: 2rem;
            margin-bottom: 2rem;
        }
        .social-links {
            margin-bottom: 2rem;
        }
        .social-links a {
            color: #ffffff;
            font-size: 1.5rem;
            margin: 0 10px;
            text-decoration: none;
        }
        .social-links a:hover {
            color: #1db954;
        }
        form input {
            padding: 10px;
            font-size: 1rem;
            width: 60%;
            max-width: 300px;
        }
        form button {
            padding: 10px 20px;
            font-size: 1rem;
            background-color: #1db954;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }
        form button:hover {
            background-color: #1aa34a;
        }
    </style>
</head>
<body <?php body_class(); ?>>
    <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <p class="tagline">Where Code Meets Melody</p>
        <p>Our new website is coming soon! We're working hard to bring you an amazing music experience.</p>
        <div id="countdown"></div>
        <div class="social-links">
            <a href="#" target="_blank">Facebook</a>
            <a href="#" target="_blank">Twitter</a>
            <a href="#" target="_blank">Instagram</a>
            <a href="#" target="_blank">YouTube</a>
        </div>
        <form id="newsletter-form">
            <input type="email" placeholder="Enter your email" required>
            <button type="submit">Notify Me</button>
        </form>
    </div>

    <script>
        // Set the date we're counting down to (30 days from now)
        var countDownDate = new Date();
        countDownDate.setDate(countDownDate.getDate() + 30);

        // Update the countdown every 1 second
        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000);

        // Handle form submission
        document.getElementById("newsletter-form").addEventListener("submit", function(e) {
            e.preventDefault();
            alert("Thank you for subscribing! We'll notify you when the site is ready.");
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>