<div class="div-center">
    <div class="div-title">
        <label for="">Login</label>
    </div>
    <form action="<?php echo constant('URL') ?>/login/loginSession" id="loginForm" method="POST">
        <div class="alert-message">
            <?php 
                if(isset($_GET["errors"]))
                    echo "Error al iniciar sesión, verifique credenciales";
            ?>
        </div>
        <div class="div-input">
            <label class="input-label">Email</label>
            <input type="email" id="email" name="email" placeholder="example@gmail.com" class="custom-input">
        </div>
        <div class="div-input">
            <label class="input-label">Password</label>
            <input type="password" id="password" name="password" placeholder="password" class="custom-input">
        </div>
        <div class="div-input" style="text-align: center;">
            <button type="button" onclick="loginUser(event)" class="button-success">Login</button>
        </div>
    </form>
</div>