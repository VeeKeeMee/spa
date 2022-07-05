<!DOCTYPE html>
<html>
    <head>
        <title>Spa-Salon in Brooklyn, NY</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <link rel="stylesheet" href="C:\openserver\domains\localhost\spa\style.css">
    </head>

    <body>  

        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <button href="signinForm" class="login" type="button">Sign In</button>
        </div>
        
    <header>
            <h1 class ="headname">Spa-Salon Chinese Lilac</h1>
    </header>

    <h2>Enjoy our spa services in Brooklyn, NY</h2>

    <p>Take a break from your daily routines and visit us! We offer soothing customized health and beauty treatments in the quiet comfort of our individual treatment rooms.<br>
    It will be an experience you will not soon forget!</p>

<?php

    function checkUser($login, $password = false)
    {
    session_start();
    if (trim($login) == '' || trim($password) == '') {
        return false;
    } else {
        $sessionCode = isset($_SESSION['code']) ? $_SESSION['code'] : '';
        $login = false === $login ? Option::get('login') : $login;
    
        if ($login == 'y' && (empty($password) || $password != $sessionCode)) {
            return false;
        }
    
        $userData = getExistUser($login);
        if ($login === false) {
            return false;
        }
    
        $hash = $userData['password'];
        $check = checkPassword($password, $hash);
        return $check;
        
        //exist user validation
        $userExist = getcurrentUser();
        if ($userExists('Name',$login)){
        return 'Name';
        }
        else
        {
        return false;
        }
    }
    }
?> 
        
    <h2>Register to your cabinet</h2>
    <label>User Name</label>
    <input type="text" name="login" placeholder="User Name"><br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Password"><br> 
    <button class="signinBut" type="submit">Sign In</button>
    </form>

    <footer>
        <div class="links">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Pinterest</a>
            <a href="#">YouTube</a>
        </div>

        <div class="copyright">Copyright &copy; Spa Chinese Lilac
        2022</div>
    </footer>

</body>
</html>