<?php
    include("header.php");
?>
    <div class="container text-left">
        <div class="row">
            <div class="col">
                <h1>Informacion de usuario: <?php echo "$user"?></h1>
                <div id="userInfo"></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>Pedidos Activos</h1>
                <table class="pedidos table">
                    <thead>
                        <tr>
                        <th scope="col">Orden</th>
                        <th scope="col">Tiempo</th>
                        <th scope="col">Completado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>lorem</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
        <div class="col">
                <h1>Historial de pedidos</h1>
                <table class="historial-pedidos table">
                    <thead>
                        <tr>
                        <th scope="col">Orden</th>
                        <th scope="col">Dia</th>
                        <th scope="col">Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>lorem</td>
                        </tr>
                    </tbody>
                </table>
         </div>
        </div>
    </div>
<?php
    echo "<script>
    let currentUser = '$user';
    </script>";
    include("footer.php");
?>