<?php include("db/db.php"); ?>
<?php include("includes/header.php"); ?>


<div class="text-01">
    <p class="text-01-child">Si deseas consultar si tienes algún omiso e incumplimiento, </p>
    <a href="#" class="text-01-child">haz click AQUÍ</a>
</div>

<div class="f-container">
    <div class="consulta f-container">
        <img src="includes/logo.jpg" alt="LOGO_SAT">
        <p><i class="fas fa-search"></i> ¿Cómo desea consultar?</p>
    </div>
    <div class="">
        <form action="db/consult.php" class="" method="POST">
            <div class="cont-radio">
                <div class="form-check">
                    <input type="radio" id="cui" name="modo_consulta" value="cui" class="form-check-input" checked>
                    <label for="cui">CUI</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="nit" name="modo_consulta" value="nit" class="form-check-input">
                    <label for="nit">NIT</label>
                </div>
            </div>
            <br>
            <div class="textbox">
                <input type="text" class="txt" maxlength="20" require placeholder="Ingresar el codigo CUI/NIT*" name="dato" required />
                <label for="name" class="form__label"></label>
            </div>
            <br>
            <input type="submit" value="BUSCAR" name="buscar" class="button">
            <a class="button btn-secondary" href="">LIMPIAR</a>
        </form>
    </div>
</div>

<?php
if (isset($_SESSION["message"])) {
    include("includes/result.php");
}

session_unset();
?>

<?php include("includes/footer.php"); ?>