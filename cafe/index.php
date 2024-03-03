<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Delight</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }

        header {
            background-color: #6c757d;
            color: white;
            text-align: center;
            padding: 1em;
        }

        nav {
            background-color: #343a40;
            padding: 0.5em;
            border-radius: 0 0 10px 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 0.5em 1em;
            margin: 0 0.5em;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #495057;
        }

        .hero-image {
            width: 100%;
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .menu-item {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 1em 0;
            padding: 1em;
            background-color: white;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1em;
        }
    </style>
</head>
<body>

    <header>
        <h1>Raja cafe </h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <section id="home">
            <h2>Welcome to Raja cafe </h2>
            <p class="lead">Experience the best coffee and delicious pastries in a cozy and artistic atmosphere.</p>
            <img src="main.webp" alt="Cafe Image" class="img-fluid hero-image">
        </section>

        <section id="menu">
            <h2>Menu</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="menu-item">
                        <h3>Coffee</h3>
                        <p>Enjoy our freshly brewed coffee made from premium beans.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="menu-item">
                        <h3>Pastries</h3>
                        <p>Indulge in our selection of mouth-watering pastries and desserts.</p>
                    </div>
                </div>
                <!-- Add more menu items as needed -->
            </div>
        </section>

        <section id="contact">
            <h2>Contact Us</h2>
            <p>Visit us at: 123 Cafe Street, sivakasi</p>
            <p>Email: raja@cafeshop.com</p>
            <p>Phone: 1234567890</p>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Cafe Delight. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
