<?php include ('header.php');?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>RECETA</h1>
			</div>
		<div class="form">
        <form action="/action_page.php">
		<label for="fname">Nombre:</label>
		<input type="text" id="fname" name="fname"><br><br>
		<label for="fname">No. de Paciente</label>
		<input type="text" id="fname" name="fname"><br><br>

        <p>Alergias:</p>
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">Si</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS" checked="checked">
        <label for="css">No</label><br> <br>

        <td>Detalles:</td>
        <textarea name = "comment" rows = "3" cols = "55"></textarea> <br><br>

		<label for="fname">Tratamiento:</label>
		<input type="text" id="fname" name="fname"><br><br>
		<label for="lname">Medicamentos:</label>
		<input type="text" id="lname" name="lname"><br><br>
		<label for="fname">Peso:</label>
		<input type="text" id="fname" name="fname"><br><br>
		<label for="fname">Altura:</label>
		<input type="text" id="fname" name="fname"><br><br>
        <label for="fname">Dosis:</label>
		<input type="text" id="fname" name="fname"><br><br>
		<label for="fname">Frecuencia:</label>
		<input type="text" id="fname" name="fname"><br><br>
	
        <center> <input type="button" value="Registrar"> </center>
	    </form>
			</div>
			<div class="im1">
	<img src="receta.jpg"
	height="250px" width="350px">
		</div>
	</section>
<?php include('footer.php'); ?>
</body>
</html> 