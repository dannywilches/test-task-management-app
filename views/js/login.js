function loginUser(e){
    let loginForm = document.getElementById("loginForm");
    e.preventDefault();
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    
    let validForm = validForms([
        {'data':email, 'type':'text','obligatory':true},
        {'data':password, 'type':'text','obligatory':true}
    ]);
    if(validForm){
        // alert("Datos correctos");
        loginForm.submit();
    }
    else {
        alert("Por favor revise los datos ingresados");
    }
}