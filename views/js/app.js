function validForms(elements){
    var valid = true;
    elements.forEach(input => {
        console.log(input);
        if (input['obligatory']) {
            if(input['data'] !== null && input['data'] !== '' && typeof(input['data'])!== undefined){
                switch (input['type']) {
                    case 'text':
                        if(input['data'] === null || input['data'].length === 0 || /^\s+$/.test(input['data'])){
                            valid=false;
                            console.log('no en '+input["data"])
                            return false;
                        }
                        break;
                        
                    case 'select':
                        if(input['data'] === null || input['data'].length === 0 || input['data'] === '--'){
                            valid=false;
                            console.log('no en '+input["data"])
                            return false;
                        }
                        break;
                
                    case 'email':
                        if(input['data'] === null || input['data'].length === 0 || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(input['data'])){
                            console.log('no en '+input["data"])
                            valid=false;
                            return false;
                        }
                        break;
                
                    default:
                        break;
                }
            }
            else {
                valid = false;
                return false;
            }
        }
    });
    return valid;
}