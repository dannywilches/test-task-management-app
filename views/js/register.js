function registerUser(e){
    let registerForm = document.getElementById("registerForm");
    e.preventDefault();
    let first_names = document.getElementById('first_names').value;
    let last_names = document.getElementById('last_names').value;
    let username = document.getElementById('username').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let confirm_password = document.getElementById('confirm_password').value;
    
    let validForm = validForms([
        {'data':first_names, 'type':'text','obligatory':true},
        {'data':last_names, 'type':'text','obligatory':true},
        {'data':username, 'type':'text','obligatory':true},
        {'data':email, 'type':'email','obligatory':true},
        {'data':password, 'type':'text','obligatory':true},
        {'data':confirm_password, 'type':'text','obligatory':true}
    ]);
    if(validForm){
        alert("Datos correctos");
        registerForm.submit();
    }
    else {
        alert("Por favor revise los datos ingresados");
    }
}