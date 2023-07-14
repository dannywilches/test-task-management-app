<div class="div-center">
    <div class="div-title">
        <label for="">Register</label>
    </div>
    <form id="registerForm" action="<?php echo constant('URL') ?>/register/registerUser" method="POST">
        <div class="div-input">
            <label class="input-label">Nombres</label>
            <input type="text" id="first_names" name="first_names" placeholder="Please type your first name" class="custom-input">
        </div>
        <div class="div-input">
            <label class="input-label">Apellidos</label>
            <input type="text" id="last_names" name="last_names" placeholder="Please type your last name" class="custom-input">
        </div>
        <div class="div-input">
            <label class="input-label">Username (nickname)</label>
            <input type="text" id="username" name="username" placeholder="Please type a username (nickname)" class="custom-input">
        </div>
        <div class="div-input">
            <label class="input-label">Email</label>
            <input type="text" id="email" name="email" placeholder="Please type your a valid email" class="custom-input">
        </div>
        <div class="div-input">
            <label class="input-label">Password</label>
            <input type="password" id="password" name="password" placeholder="Please type a password" class="custom-input">
        </div>
        <div class="div-input">
            <label class="input-label">Confirmación</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Please confirm password" class="custom-input">
        </div>
        <div class="div-input" style="text-align: center;">
            <button onclick="registerUser(event)" class="button-success">Register</button>
        </div>
    </form>
</div>