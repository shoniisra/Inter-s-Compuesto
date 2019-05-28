<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de Intereses</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
</head>

<body>
	<header >
		<article class="jumbotron" style="background-color:#0747a6; margin-left: auto; margin-right: auto;">
                <h1>
                    <a href="" class="typewrite" data-period="2000" data-type='[ "Calculadora de interes.", "Analice sus préstamos.", "La nueva solución en materia financiera.", "Aprende a calcular interés." ]'>
                        <span class="wrap"></span>
                    </a>
                </h1>
		</article>
	</header>

    <!--Validación variables cargadas-->
    <?php 
        if(isset($_POST["capital"]))
        {
            if(isset($_POST['calculate_button']))
            {
                $capital = $_POST["capital"];
            }else{
                $capital = "";
            }
        }
        else{
            $capital= 0;

        }
        if(isset($_POST["tiempo"]))
        {
            if(isset($_POST['calculate_button']))
            {
                $tiempo= $_POST["tiempo"];
            }else
                $tiempo="";
        }
        else{
            $tiempo = 0;
        }
        if(isset($_POST["interes"]))
        {
            if(isset($_POST['calculate_button']))
            {
                $interes= $_POST["interes"];
            }else
                $interes="";
        }
        else{
            $interes= 0;
        }

        if(isset($_POST["convertible"]))
        {
            if(isset($_POST['calculate_button']))
            {
                $convertible= $_POST["convertible"];
            }else
                $convertible="";
        }
        else{
            $convertible= 0;
        }
       
    ?> 

    <!--Formulario-->
	<article class="container">
		<form action="index.php" method="POST">
			<div  class="form-group row">
				<div class="form-group form-group-sm col-sm-3">
					<label class="col-form-label">Capital:</label>
                    <div class="help-tip">
                        <p>El capital es el valor inicial al antes de adquirir interés.</p>
                    </div>
					<input type="number" min="0" class="form-control" required id="capital" name="capital" value="<?php echo $capital; ?>">
  				</div>
                <div class="form-group form-group-sm col-sm-3">
					<label class="col-form-label">Tiempo:</label>
                    <div class="help-tip">
                        <p>Diferencia entre la fecha inicial y final.</p>
                    </div>
                    <input type="number" min="0" class="form-control" required id="tiempo" name="tiempo" value="<?php echo $tiempo; ?>">
				</div>
                <div class="form-group form-group-sm col-sm-3">
					<label class="col-form-label">Interés:</label>
                    <div class="help-tip">
                        <p>Porcentaje de crecimiento del monto con respecto al capital.</p>
                    </div>
                    <input type="number" min="0" class="form-control" required id="interes" name="interes" value="<?php echo $interes; ?>">
                </div>	
                <div class="form-group form-group-sm col-sm-3">
					<label class="col-form-label">Convertible:</label>
                    <div class="help-tip">
                        <p>Cantidad de períodos en el año.</p>
                    </div>
                    <select name="convertible" class="form-control" required id="convertible" value="<?php echo $convertible; ?>">
                        <option value="12">mensual</option>
                        <option value="1">anual</option>
                        <option value="4">trimestral</option>
                        <option value="6">bimestral</option>
                        <option value="2">semestral</option>
                    </select>
				</div>				
            </div>
            



			<div class="text-center">
				<button type="submit" name="calculate_button"  id="calculate_button" data-toggle="tooltip"
                        data-placement="top" title="Calcular Valor" class="btn btn-primary">Calcular</button>
				<button type="submit" name="clean_button" data-toggle="tooltip"
                        data-placement="top" title="Vacía la aplicación" class="btn btn-success">Limpiar</button>
			</div>
			
		</form>
        <br>
	</article>

    <!--Calculo de Resultados-->
    <?php 
       if(isset($_POST['calculate_button']))
      {
         if($tiempo!="-1")
          {
              
            $monto=$capital*(pow((1-$interes),$tiempo));
            echo $monto;
            echo $convertible;
          }}
    ?>

    </tbody>
    

    <footer class="page-footer font-small special-color-dark pt-4">
        <article class="jumbotron" style="background-color: #0747a6; width: 100%; padding: 1rem;margin: 0;">
            <h6 style="color: white; width: 40%;margin-left: auto; margin-right: auto;text-align: center;">Hecho con 🍚 por <a href="https://github.com/huasipango">Anthony Cabrera</a> y <a href="https://github.com/shoniisra">Johnny Villacís</a>.</h6>
        </article>
    </footer>

    <!--Validacion de Formulario-->
    <script src="js/main.js" type="application/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>