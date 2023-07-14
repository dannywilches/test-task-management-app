function newTask(e){
    let newTaskForm = document.getElementById("newTaskForm");
    e.preventDefault();
    let description_task = document.getElementById('description_task').value;
    let asignee = document.getElementById('asignee').value;
    let priority = document.getElementById('priority').value;
    
    let validForm = validForms([
        {'data':description_task, 'type':'text','obligatory':true},
        {'data':asignee, 'type':'select','obligatory':true},
        {'data':priority, 'type':'select','obligatory':true}
    ]);
    if(validForm){
        alert("Datos correctos");
        newTaskForm.submit();
    }
    else {
        alert("Por favor revise los datos ingresados");
    }
}