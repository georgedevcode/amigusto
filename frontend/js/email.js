$(document).ready(

    $('button').click(function(){

    event.preventDefault()

    let form = document.getElementById('contactenos-form');
    
    let formData = new FormData(form);

    let emailData = Object.fromEntries(formData);

    console.log(emailData);

    $.ajax({
        method:"POST",
        url:'http://localhost:8080/amigusto/backend/src/public/sendemail',
        data : emailData,
        success: function(result){
            swal("Su correo ha sido enviado, gracias!");      
            }
        }
    )
}));
