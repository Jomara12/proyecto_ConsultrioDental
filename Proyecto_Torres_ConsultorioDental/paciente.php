<?php include ('header.php');?>
<body>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>PACIENTE</h1>
			</div>
			<div class="contenedor">
<div class="form">
        <form action="/action_page.php">
		<label for="fname">Nombre:</label>
		<input type="text" id="fname" name="fname"><br><br>
		<label for="fname">Apellido Paterno:</label>
		<input type="text" id="fname" name="fname"><br><br>
		<label for="fname">Apellido Materno:</label>
		<input type="text" id="fname" name="fname"><br><br>
		<label for="lname">CURP:</label>
		<input type="text" id="lname" name="lname"><br><br>
		<label for="fname">Edad:</label>
		<input type="text" id="fname" name="fname"><br><br>

		<p>Genero:</p>
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">Masculino</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS" checked="checked">
        <label for="css">Femenino</label><br> <br>

        <label for="fname">Fecha de nacimiento:</label>
		<input type="text" id="fname" name="fname"><br><br>
		<label for="fname">Direccion:</label>
		<input type="text" id="fname" name="fname"><br><br>
		<label for="fname">Padre, Madre o Tutor:</label>
		<input type="text" id="fname" name="fname"><br><br>
        <center> <input type="button" value="Registrar"> </center>
	    </form>
</div>

</div>
<div class="im1">
	<img src="paciente.jpg"
	height="350" width="500">
</div>
	</section>
<?php include('footer.php'); ?>
</body>
</html> 