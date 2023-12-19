$(document).ready(
    
    $.ajax(
        {
            
            url : "http://localhost:8080/amigusto/backend/src/public/userinfo/" + currentUser,
            success : function(data){

            parsedData = JSON.parse(data);
            let htmlContent = "";
               parsedData.forEach(item => {

                htmlContent +=
                '<p class="nombre-usuario">Nombre: '+ item.nombre +'</p>' + 
                '<p class="usuario-primer-apellido">Primer Apellido: '+ item.primer_apellido + '</p>' +
                '<p class="usuario-segundo-apellido">Segundo Apellido: ' + item.segundo_apellido + '</p>'+
                '<p class="usuario-fecha-nacimiento">Fecha de nacimiento: ' + item.fecha_nacimiento + '</p>' +
                '<p class="usuario-email">Email: ' + item.email + '</p>' +
                '<p class="usuario-direccion">Direccion: ' + item.direccion + '</p>' +
                '<p class="usuario-telefono">Telefono: ' + item.telefono + '</p>' +
                '<p class="usuario-rol">Rol: ' + item.rol + '</p>'
               });

               document.getElementById("userInfo").innerHTML = htmlContent;
               console.log(currentUser);
            }
        }
    )
);