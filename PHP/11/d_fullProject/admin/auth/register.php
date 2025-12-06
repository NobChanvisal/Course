<?php
// require_once '../../config/db.php';
// require_once './auth.php'; // Assuming the provided code is in auth.php


// $error = '';
// $success = '';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $username = trim($_POST['username'] ?? '');
//     $email = trim($_POST['email'] ?? '');
//     $password = $_POST['password'] ?? '';
//     $confirm_password = $_POST['confirm_password'] ?? '';

//     if (empty($username) || empty($email) || empty($password)) {
//         $error = 'All fields are required.';
//     } elseif ($password !== $confirm_password) {
//         $error = 'Passwords do not match.';
//     } elseif (strlen($password) < 6) {
//         $error = 'Password must be at least 6 characters.';
//     } else {
//         // Check if user already exists (basic check)
//         $existing = dbSelect('tbusers', '*', "username = '$username' OR email = '$email'", '', true);
//         if ($existing) {
//             $error = 'Username or email already exists.';
//         } else {
//             if (register($username, $email, $password)) {
//                 $success = 'Registration successful! You can now login.';
//                 // Optionally auto-login
//                 // login($username, $password);
//             } else {
//                 $error = 'Registration failed. Please try again.';
//             }
//         }
//     }
// }
?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-form {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 0.75rem;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 1rem;
        }
        .success {
            color: green;
            text-align: center;
            margin-bottom: 1rem;
        }
        .login-link {
            text-align: center;
            margin-top: 1rem;
        }
        .login-link a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="register-form">
        <h2>Register</h2>
        <?php if ($error): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <?php if ($success): ?>
            <div class="success"><?php echo htmlspecialchars($success); ?></div>
        <?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" value="<?php echo htmlspecialchars($username ?? ''); ?>" required>
            <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email ?? ''); ?>" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>
        <div class="login-link">
            <a href="login.php">Already have an account? Login</a>
        </div>
    </div>
</body>
</html> -->