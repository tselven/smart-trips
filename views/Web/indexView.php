<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Portfolio</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        h1 {
            font-size: 36px;
            margin: 10px 0;
        }
        nav {
            background-color: #666;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            overflow: hidden;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-right: 1px solid #fff;
            transition: background-color 0.3s ease;
        }
        nav a:hover {
            background-color: #444;
        }
        nav a:last-child {
            border-right: none;
        }
        section {
            padding: 40px;
            text-align: center;
        }
        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            color: #666;
            font-size: 18px;
            line-height: 1.6;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Hotel Portfolio</h1>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">Rooms</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </nav>
    <section id="about">
        <h2>About Us</h2>
        <p>We are a luxurious hotel located in a prime location offering comfortable accommodation and exceptional services.</p>
    </section>
    <section id="rooms">
        <h2>Our Rooms</h2>
        <p>Discover our range of elegantly designed rooms, each equipped with modern amenities to ensure a pleasant stay.</p>
    </section>
    <section id="services">
        <h2>Services</h2>
        <p>From fine dining to spa treatments, we provide a variety of services to cater to our guests' needs and preferences.</p>
    </section>
    <section id="contact">
        <h2>Contact Us</h2>
        <p>For inquiries and reservations, please contact us at:</p>
        <p>Email: info@hotel.com</p>
        <p>Phone: +1234567890</p>
    </section>
    <footer>
        <p>&copy; 2024 Hotel Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>
