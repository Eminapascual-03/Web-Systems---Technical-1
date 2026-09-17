<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About - POS System</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
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
        <h1 class="page-title">About</h1>
        <p class="subtitle">Learn more about this project.</p>

        <section class="card">
            <p>
                This is a basic Point-of-Sale system created using
                CodeIgniter 4.
            </p>

            <p>
                This first version demonstrates routing, controllers,
                views, static PHP arrays, and displaying data using
                foreach loops.
            </p>
        </section>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> POS System | Elliesha Emina SD Pascual | TC37 </p>
    </footer>

</body>
</html>