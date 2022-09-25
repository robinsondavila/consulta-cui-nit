<?php include("db/db.php"); ?>
<div class="resultado">
    <!--tabla de resultado de busqueda-->
    <div class="table-container">
        <div class="barra-azul">
            <p>IDENTIFICACION</p>
        </div>
        <table class="tabla-datos">
            <br>
            <tr>
                <td class="td">CUI:</td>
                <td><?php echo $_SESSION["cui"]; ?></td>

            </tr>
            <tr>
                <td class="td">NIT:</td>
                <td><?php echo $_SESSION["nit"]; ?></td>

            </tr>
            <tr>
                <td class="td">Nombres y apellidos:</td>
                <td><?php echo $_SESSION["nombre"]; ?></td>

            </tr>
            <tr>
                <td class="td">Fecha de nacimiento:</td>
                <td><?php echo $_SESSION["fecha_nacimiento"]; ?></td>
            </tr>
            <tr>
                <td class="td">Nit generado en:</td>
                <td><?php echo $_SESSION["lugar_nit"]; ?></td>
            </tr>
            <tr>
                <td class="td">Fecha de creacion de NIT:</td>
                <td><?php echo $_SESSION["fecha_nit"]; ?></td>
            </tr>
        </table>
    </div>
<!--resultado satisfactorio-->
    <div class="status">
        <div class="finally">
            <div class="icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="date">
                <div class="date-check">
                    <p>1. Registros Asociados Correctamente.</p>
                </div>
                <div class="date-check">
                    <p>2. Felicitaciones ya cuenta con agencia virtual, gracias por ser parte de la modernización de la administración tributaria.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>