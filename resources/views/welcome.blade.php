<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to TeleDoc</title>
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #0056b3;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        header nav ul li {
            display: inline;
            margin-right: 20px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        main {
            text-align: center;
            margin: 20px;
        }

        main section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        main section h1 {
            color: #0056b3;
            font-size: 36px;
            margin-bottom: 10px;
        }

        main section p {
            color: #555;
            font-size: 18px;
            margin-bottom: 0;
        }

        .features {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 20px 0;
        }

        .feature {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 250px;
            margin: 10px;
            text-align: center;
        }

        .feature i {
            font-size: 36px;
            color: #0056b3;
            margin-bottom: 10px;
        }

        .feature h3 {
            color: #0056b3;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .feature p {
            color: #555;
            font-size: 16px;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #0056b3;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                <li><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a></li>
                <li><a href="{{ route('about') }}"><i class="fas fa-info-circle"></i> About Us</a></li>
                <li><a href="{{ route('contact us') }}"><i class="fas fa-phone"></i> Contact Us</a></li>
                <li><a href="#"><i class="fas fa-comment"></i> Feedback</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h1>Welcome to TeleDoc Online Hospital</h1>
            <p>Quality Medical Care, at One's Fingertips</p>
        </section>

        <div class="features">
            <div class="feature">
                <i class="fas fa-user-md"></i>
                <h3>Improved Patient Access</h3>
                <p>Our platform is user-friendly and easily navigable, enabling patients to connect with healthcare providers effortlessly.</p>
                <a href="#">Learn More</a>
            </div>
            <div class="feature">
                <i class="fas fa-comments"></i>
                <h3>Improved Patient Communication</h3>
                <p>Our goal is to create a supportive healthcare experience with seamless communication between doctors and patients, thus enhancing trust and satisfaction.</p>
                <a href="#">Learn More</a>
            </div>
            <div class="feature">
                <i class="fas fa-star"></i>
                <h3>High Quality Medical Care</h3>
                <p>We continuously seek feedback and implement improvements to ensure our services exceed patient expectations.</p>
                <a href="#">Learn More</a>
            </div>
            <div class="feature">
                <i class="fas fa-headset"></i>
                <h3>Timely Response & Consultation</h3>
                <p>We offer prompt responses and consultations to our patients, ensuring a high standard of responsiveness and improving healthcare delivery services.</p>
                <a href="#">Learn More</a>
            </div>
        </div>
    </main>

    <footer>
        <!-- Footer content if needed -->
    </footer>
</body>
</html>
