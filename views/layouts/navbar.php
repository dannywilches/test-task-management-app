<nav>
    <?php
        session_start();
        if (!isset($_SESSION["user_id"])) {
            echo '
            <a href="login" class="nav-enlace">Login</a>
            <a href="register" class="nav-enlace">Register</a>
            ';
        }
        else {
            echo '<a href="task" class="nav-enlace">Task List</a>';
            echo '<a href="login/closeSession" class="nav-enlace">Close Session</a>';
        }
    
    ?>
</nav>