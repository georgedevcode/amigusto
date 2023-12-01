$(document).ready(
    $.ajax(
        {
            url : "http://localhost:8080/amigusto/backend/src/public/getmenu",
            success : function(data){

               parsedData = JSON.parse(data);
                let htmlContent = "";
               parsedData.forEach(item => {

                htmlContent += 
                        '<div class="platillo">' +
                       '<p class="nombre">' + item.platillo + '</p>' +
                       '<p class="precio">₡' + item.precio + '</p>' +
                       '<p class="description">' + item.descripcion + '</p>' +
                       '<p class="tiempo">' + item.tiempo + '</p>' +
                       '</div>';
               });

               document.getElementById("platillos").innerHTML = htmlContent;
               
            }
        }
    )
);