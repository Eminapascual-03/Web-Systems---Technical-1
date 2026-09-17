<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Accounts - POS System</title>

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
        <h1 class="page-title">User Accounts</h1>
        <p class="subtitle">View the registered POS system users.</p>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Role</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= esc($user['username']) ?></td>
                            <td><?= esc($user['full_name']) ?></td>
                            <td>
                                <span class="role">
                                    <?= esc($user['role']) ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> POS System | Elliesha Emina SD Pascual | TC37</p>
    </footer>

</body>
</html>