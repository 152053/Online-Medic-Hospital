

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/image.css') }}" rel="stylesheet">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #0056b3;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form label {
            margin-bottom: 10px;
            font-weight: bold;
        }

        form input, form textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form button {
            padding: 10px;
            background-color: #0056b3;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #004494;
        }

        .success-message {
            text-align: center;
            color: green;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Contact Us</h2>
    <p class="success-message"></p>
    <form action="{{ route('contact.submit') }}" method="POST">
    
        <label for="name">Enter Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Enter Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Enter Your Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Submit</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
