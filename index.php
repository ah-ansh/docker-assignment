<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Clone</title>
    <style>
        /* Reset and basic styling */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #141414;
            color: #fff;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            background: url('https://assets.nflxext.com/ffe/siteui/vlv3/92d15861-4d87-44a4-8d1a-39623a18679e/3ebad255-b30f-4bc4-9c4d-d0aeb5397552/IN-en-20231002-popsignuptwoweeks-perspective_alpha_website_large.jpg') no-repeat center center/cover;
        }

        /* Overlay for dark effect */
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }

        /* Header styling */
        .header {
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
        }

        .header img {
            width: 120px;
        }

        .header .btn-signin {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #e50914;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .header .btn-signin:hover {
            background-color: #b20710;
        }

        /* Hero text */
        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 80%;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .hero-content .btn-getstarted {
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background-color: #e50914;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .hero-content .btn-getstarted:hover {
            background-color: #b20710;
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="header">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg" alt="Netflix Logo">
            <button class="btn-signin">Sign In</button>
        </div>
        <div class="hero-content">
            <h1>Unlimited movies, TV shows, and more.</h1>
            <p>Watch anywhere. Cancel anytime.</p>
            <button class="btn-getstarted">Get Started</button>
        </div>
    </div>
</body>
</html>
