<?php
    // 1. Start the session
    session_start();
    
    // 2. Unset all session variables
    $_SESSION = array();
    
    // 3. Delete the session cookie
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(), 
            '', 
            time() - 42000, // Expiration time in the past
            $params["path"], 
            $params["domain"], 
            $params["secure"], 
            $params["httponly"]
        );
    }
    
    // 4. Destroy the session on the server
    session_destroy();
    header('location: ../Vista/login.php')
?>
