<!--header-->
  
    <!--=============== PHP ==============-->

    <main class="formulario">

        <?php
            require("Conexion.php");

            $lis = $_POST['Lista'];
            $tel = $_POST['telefono'];
            $dir = $_POST['direccion'];
            $mot = $_POST['motivo'];
            $fec = $_POST['fecha'];
            $hor = $_POST['hora'];

            $sql = "INSERT INTO solicitud_medica (especialidad, telefono_Alternativo, direccion_alternativo, motivo, fecha, hora) VALUES ('$lis', '$tel', '$dir', '$mot', '$fec', '$hor')";

            if (mysqli_query($conex, $sql)) {
                
        ?>
        
        <!-- The Modal -->
    
        <div class="modal-dialog ok">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Excelente</h4>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    Datos grabados safisfactoriamente
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class="btn btn-danger" onclick="location.href='continuarregistro.html'">Cerrar</button>
                </div>
                
            </div>
        </div>

    <?php
    } else 
    {


    ?>

    <!-- The Modal -->
    
        <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Error</h4>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    Los datos no pudieron ser grabados
                </div>

                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class="btn btn-danger" onclick="location.href='../Registro.html'">Cerrar</button>
                </div>
                
            </div>
        </div>

        <div class="Error">
            <div class="Error_1">

                <?php

                echo "Error: " . $sql . "<br>" . mysqli_error($conex);
                
                }

                mysqli_close($conex);

                ?> 
                
            </div>
        </div>
    </main>

    <!--=========== footer =============-->
    <footer>
      
    </footer>
    
    <!--========================script=============================-->

    <script src="></script>
