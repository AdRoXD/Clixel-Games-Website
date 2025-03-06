<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        header {
            background-color: rgb(82, 113, 255);
            padding: 1rem 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .main-title {
            color: white;
            font-size: 2.5rem;
            text-align: center;
            transition: font-size 0.3s ease;
        }

        .navbar {
            width: 80%;
            margin: 0 auto;
            text-align: center;
            padding: 10px;
        }

        .navbar a {
            font-size: large;
            margin: 0 10px;
            text-decoration: none;
            color: white;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .navbar a:hover {
            transform: scale(1.2);
            color: rgb(94, 23, 235);
            text-shadow: 2px 0px grey;
        }

        .logo {
            width: auto;
            max-width: 130px;
            min-height: 90px;
            margin-left: 40px;
            margin-right: -100px;
            height: 7vw;
        }

        .container {
            flex-grow: 1;
            text-align: center;
        }
    </style>

</head>

<body>
    <header>
        <img src="../images/clixel_logo.png" alt="Clixel Games Logo" class="logo">
        <div class="container">
            <h1 class="main-title">Clixel Games</h1>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="portfolio.php">Our Work</a>
                <a href="contact us.php">Contact Us</a>
            </nav>
        </div>
    </header>
</body>

</html>