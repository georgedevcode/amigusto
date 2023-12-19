$(document).ready(
    
    $.ajax(
        {
            
            url : "http://localhost:8080/amigusto/backend/src/public/allusersinfo",
            success : function(data){

            parsedData = JSON.parse(data);
            let htmlContent = "";
               parsedData.forEach(item => {

                htmlContent +=
                '<tr>' +
                    '<td>'+ item.usuario+ '</td>' +
                    '<td>'+ item.nombre + '</td>' +
                    '<td>'+ item.primer_apellido + '</td>' +
                    '<td>'+ item.segundo_apellido + '</td>' +
                    '<td>'+ item.fecha_nacimiento + '</td>' +
                    '<td>'+ item.email + '</td>' +
                    '<td>'+ item.direccion + '</td>' +
                    '<td>' + item.telefono +'</td>' +
                '</tr>'
               });

               document.getElementById("info-usuarios").innerHTML = htmlContent;
              
            }
        }
    )
);