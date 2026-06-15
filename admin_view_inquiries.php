<?php
session_start();

$valid_password = "admin123";

if (isset($_POST['password']) && $_POST['password'] == $valid_password) {
    $_SESSION['admin_auth'] = true;
}

if (!isset($_SESSION['admin_auth']) || $_SESSION['admin_auth'] !== true) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Admin Login - MelakaExplorer</title>
        <style>
            body { font-family: Arial; display: flex; justify-content: center; align-items: center; height: 100vh; background: #f0f0f0; margin: 0; }
            .login-box { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); min-width: 300px; }
            input { padding: 10px; margin: 10px 0; width: 100%; box-sizing: border-box; }
            button { background: #8B0000; color: white; padding: 10px 20px; border: none; cursor: pointer; width: 100%; }
            h2 { color: #8B0000; text-align: center; }
        </style>
    </head>
    <body>
        <div class="login-box">
            <h2>Admin Login</h2>
            <form method="POST">
                <input type="password" name="password" placeholder="Enter Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </body>
    </html>
    <?php
    exit();
}

$inquiries_file = 'inquiries.txt';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - MelakaExplorer</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Poppins', sans-serif; background: #f5f5f5; padding: 20px; }
        .container { max-width: 1200px; margin: auto; }
        h1 { color: #8B0000; margin-bottom: 20px; }
        .inquiry { background: white; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .inquiry pre { white-space: pre-wrap; font-family: monospace; background: #f9f9f9; padding: 15px; border-radius: 8px; }
        .logout { background: #8B0000; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px; margin-bottom: 20px; }
        .logout:hover { background: #6b0000; }
        .stats { background: #8B0000; color: white; padding: 20px; border-radius: 10px; margin-bottom: 20px; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📋 MelakaExplorer - Customer Inquiries Dashboard</h1>
        <form method="POST" style="display: inline;">
            <input type="hidden" name="logout" value="1">
            <button type="submit" class="logout">🚪 Logout</button>
        </form>
        <?php
        if (isset($_POST['logout'])) {
            session_destroy();
            header("Location: admin_view_inquiries.php");
            exit();
        }
        
        if (file_exists($inquiries_file)) {
            $content = file_get_contents($inquiries_file);
            $count = substr_count($content, "========================================");
            echo "<div class='stats'>📊 Total Inquiries Received: " . $count . "</div>";
            
            if (trim($content) == '') {
                echo "<p>No inquiries yet.</p>";
            } else {
                $inquiries = explode("========================================\n\n", $content);
                foreach ($inquiries as $inquiry) {
                    if (trim($inquiry) != '') {
                        echo "<div class='inquiry'>";
                        echo "<pre>" . htmlspecialchars($inquiry) . "</pre>";
                        echo "</div>";
                    }
                }
            }
        } else {
            echo "<p>No inquiries received yet.</p>";
        }
        ?>
    </div>
</body>
</html>