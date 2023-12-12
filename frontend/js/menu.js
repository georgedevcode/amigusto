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
                        '<p class="tiempo">Tiempo de espera: ' + item.tiempo + 'min <input type="checkbox" id="ordenar" name="orden" value=\''+ JSON.stringify(item) + '\'>Ordenar</input></p>' +
                        '</div>'
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
                           '<p class="tiempo">Tiempo de espera: ' + item.tiempo + ' min <input type="checkbox" id="ordenar" name="orden" value=\''+ JSON.stringify(item) + '\'>Ordenar</input></p>' +
                           '</div>';
                   });
    
                   document.getElementById("bebidas-menu").innerHTML = htmlContent;
                   
                }
            }
        )
    );
}

$(document).ready(function() {
    $("button").click(function() {
        let checkboxes = document.querySelectorAll('input[type=checkbox]');
        let checkedItems = [];

        checkboxes.forEach((checkbox, index) => {
            if (checkbox.checked) {
                let item = JSON.parse(checkbox.value);
                checkedItems.push(item);
            }
        });

        let order = JSON.stringify(checkedItems);

        console.log(order);
        $.ajax({
            url: 'http://localhost:8080/amigusto/backend/src/public/neworder',
            type: 'POST',
            data: order,
            contentType: 'application/json',
            success: function(result){
                swal("Su order ha sido procesada");      
                },
            error: function(error) {
                console.log('Error:', error);
            }
        });
    });
});



cargarPlatillos();
cargarBebidas();