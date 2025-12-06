<?php
// require_once '../../config/db.php';

if(session_status() === PHP_SESSION_NONE){
    session_start();
}


function register($username, $email, $password) {
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $data = [
        'username' => $username,
        'email'    => $email,
        'password' => $password_hash,
       
    ];
    return dbInsert('tbusers', $data);
}


function login($username, $password, $remember = false) {
    $user = dbSelect('tbusers', '*', "username = '$username'", '', true);
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = [
            'id'       => $user['id'],
            'username' => $user['username'],
         
        ];

        // "Remember Me"
        if ($remember) {
            setcookie('remember_user', $user['username'], time() + (86400 * 7), "/");
        }
        return true;
    }
    return false;
}


function isLoggedIn() {
    return isset($_SESSION['user']) || isset($_COOKIE['remember_user']);
}


function currentUser() {
    if (isset($_SESSION['user'])) return $_SESSION['user'];
    if (isset($_COOKIE['remember_user'])) {
        $username = $_COOKIE['remember_user'];
        return dbSelect('tbusers', '*', "username = '$username'", '', true);
    }
    return null;
}


function logout() {
    session_start();
    session_destroy();
    setcookie('remember_user', '', time() - 3600, "/");
    header('Location: login.php');
    exit;
}
?>
