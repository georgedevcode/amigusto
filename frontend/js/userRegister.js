$(document).ready(

    $('button').click(function(){

    event.preventDefault()

    let form = document.getElementById('registro-usuario');
    
    let formData = new FormData(form);

    let userData = Object.fromEntries(formData);

    $.ajax({
        method:"POST",
        url:'http://localhost:8080/amigusto/backend/src/public/userregister',
        data : userData,
        success: function(result){
            swal("Usuario a sido registrado");      
            }
        }
    )
}));
