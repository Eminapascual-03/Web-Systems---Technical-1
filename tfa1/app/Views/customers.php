<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Accounts - POS System</title>

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
            background-color: #1e3a5f;
            color: white;
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

        .page-title {
            margin-bottom: 8px;
            color: #1e3a5f;
            font-size: 32px;
        }

        .subtitle {
            margin-bottom: 25px;
            color: #666;
        }

        .table-container {
            overflow-x: auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 14px 16px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            color: white;
            background-color: #2f6da1;
        }

        tbody tr:hover {
            background-color: #f1f7fc;
        }

        tbody tr:last-child td {
            border-bottom: none;
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

            .page-title {
                font-size: 27px;
            }

            th,
            td {
                padding: 11px;
                white-space: nowrap;
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
        <h1 class="page-title">Customer Accounts</h1>
        <p class="subtitle">View the registered customer accounts.</p>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($customers as $customer): ?>
                        <tr>
                            <td><?= esc($customer['full_name']) ?></td>
                            <td><?= esc($customer['email']) ?></td>
                            <td><?= esc($customer['phone']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p>
            &copy; <?= date('Y') ?> POS System |
            Elliesha Emina SD Pascual | TC37
        </p>
    </footer>

</body>
</html>