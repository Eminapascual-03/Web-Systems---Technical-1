<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home - POS System</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f6f8;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 18px 8%;
            color: white;
            background-color: #1e3a5f;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .nav-links a {
            padding: 8px 12px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.2s;
        }

        .nav-links a:hover {
            background-color: #315b88;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            flex: 1;
            margin: 40px auto;
        }

        .hero {
            padding: 60px 35px;
            text-align: center;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
        }

        .hero h1 {
            margin-bottom: 15px;
            color: #1e3a5f;
            font-size: 38px;
        }

        .hero .welcome {
            margin-bottom: 12px;
            color: #2f6da1;
            font-size: 21px;
            font-weight: bold;
        }

        .hero .description {
            max-width: 650px;
            margin: 0 auto 28px;
            color: #666;
            font-size: 17px;
            line-height: 1.7;
        }
        
        .hero {
            padding: 60px 35px;
            text-align: center;
            background-color: white;
            border: 1px solid rgba(47, 109, 161, 0.35);
            border-radius: 10px;
            box-shadow:
                0 0 15px rgba(25, 146, 226, 0.82),
                0 0 20px rgba(172, 196, 216, 0.35);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .hero:hover {
            transform: translateY(-3px);
            box-shadow:
                0 6px 20px rgba(0, 0, 0, 0.12),
                0 0 30px rgba(47, 109, 161, 0.60);
        }

        .button {
            display: inline-block;
            padding: 12px 22px;
            color: white;
            text-decoration: none;
            background-color: #2f6da1;
            border-radius: 6px;
            transition: background-color 0.2s;
        }

        .button:hover {
            background-color: #1e3a5f;
        }

        footer {
            padding: 18px;
            color: white;
            text-align: center;
            background-color: #1e3a5f;
        }

        @media (max-width: 700px) {
            .navbar {
                align-items: flex-start;
                flex-direction: column;
                padding: 18px 5%;
            }

            .nav-links {
                flex-direction: column;
                width: 100%;
            }

            .nav-links a {
                width: 100%;
            }

            .container {
                width: 94%;
                margin: 25px auto;
            }

            .hero {
                padding: 40px 20px;
            }

            .hero h1 {
                font-size: 29px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="logo">POS System</div>

        <div class="nav-links">
            <a href="<?= site_url('/') ?>">Home</a>
            <a href="<?= site_url('about') ?>">About</a>
            <a href="<?= site_url('customers') ?>">Customer Accounts</a>
            <a href="<?= site_url('users') ?>">User Accounts</a>
        </div>
    </nav>

    <main class="container">
        <section class="hero">
            <h1>Point-of-Sale System</h1>

            <p class="welcome">
                Welcome to our basic POS System.
            </p>

            <p class="description">
                Use the navigation menu to view customer and user accounts.
            </p>

            <a class="button" href="<?= site_url('customers') ?>">
                View Customer Accounts
            </a>
        </section>
    </main>

    <footer>
        <p>
            &copy; <?= date('Y') ?> POS System |
            Elliesha Emina SD Pascual | TC37
        </p>
    </footer>

</body>
</html>