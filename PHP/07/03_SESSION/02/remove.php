    <?php
    session_start();
    session_destroy(); // Destroys the entire session
    // or
    // unset($_SESSION['username']); // Removes a specific session variable
    ?>