<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
         body {
            background: linear-gradient(-45deg, #f7ed28, #28f7d8, #df28f7, #2851f7);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
            font-family: Arial, sans-serif;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        

        .hero {
            height: 100vh;
            background-image: url('https://images.unsplash.com/photo-1629717961359-c7bb0bbb6aa7?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 0 20px;
            overflow: hidden;
        }

        .hero-content {
            max-width: 800px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s ease-out forwards;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease-out forwards 0.5s;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out forwards 1s;
        }

        .hero a {
            display: inline-block;
            padding: 15px 30px;
            font-size: 1.2rem;
            color: white;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            animation: fadeInUp 1s ease-out forwards 1.5s;
        }

        .hero a:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .hero a {
                font-size: 1rem;
                padding: 12px 25px;
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Contact Section Styles */
        .contact {
            padding: 50px 20px;
            text-align: center;
            background-color: #f4f4f4;
            color: #333;
        }

        .contact h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease-out forwards 0.5s;
        }

        .contact p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out forwards 1s;
        }

        .contact form {
            max-width: 600px;
            margin: 0 auto;
            animation: fadeInUp 1s ease-out forwards 1.5s;
        }

        .contact form input,
        .contact form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 1rem;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        .contact form button {
            padding: 15px 30px;
            font-size: 1.2rem;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact form button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .contact h2 {
                font-size: 2rem;
            }

            .contact p {
                font-size: 1rem;
            }

            .contact form input,
            .contact form textarea {
                font-size: 1rem;
            }

            .contact form button {
                font-size: 1rem;
                padding: 12px 25px;
            }
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you. Please reach out to us with any questions or feedback.</p>
            <a href="#contact">Get in Touch</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <h2>Contact Us</h2>
        <p>Fill out the form below, and we'll get back to you as soon as possible.</p>
        <form action="contact_form.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

<?php
include "footer.php";
?>
</body>
</html>
