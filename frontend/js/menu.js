function cargarPlatillos(){
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
                           '<p class="tiempo">Tiempo de espera: ' + item.tiempo + ' min</p>' +
                           '</div>';
                   });
    
                   document.getElementById("platillos-menu").innerHTML = htmlContent;
                   
                }
            }
        )
    );
}

function cargarBebidas(){
    $(document).ready(
        $.ajax(
            {
                url : "http://localhost:8080/amigusto/backend/src/public/getdrinks",
                success : function(data){
    
                   parsedData = JSON.parse(data);
                    let htmlContent = "";
                   parsedData.forEach(item => {
    
                    htmlContent +=
                            '<div class="platillo">' +
                           '<p class="nombre">' + item.Bebida + '</p>' +
                           '<p class="precio">₡' + item.precio + '</p>' +
                           '<p class="description">' + item.descripcion + '</p>' +
                           '<p class="tiempo">Tiempo de espera: ' + item.tiempo + ' min</p>' +
                           '</div>';
                   });
    
                   document.getElementById("bebidas-menu").innerHTML = htmlContent;
                   
                }
            }
        )
    );
}


cargarPlatillos();
cargarBebidas();