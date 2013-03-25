<?php //forma que permite le login ?>

<h1>Inicio de sesi&oacute;n</h1>
<form name="LogInForm" method="post" action="../Connection/checklogin.php">
	<div class="regularField">
		<div class="label"><label>Usuario</label></div>
		<div class="field"><input Class="validator" type="text" name="txtUsuario" id="txtUsuario" title="Campo requerido." /></div>
	</div>
	<div class="regularField">
		<div class="label"><label>Contrase&ntilde;a</label> <a href="">(Olvide mi contrase&ntilde;a)</a></div>
		<div class="field"><input type="password" name="txtContrasenia" Id="txtContrasenia" title="Campo requerido." onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }"/></div>
	</div>
	<div class="buttonPanel">
	  <a href="#" onclick="document.LogInForm.submit()" 
	  id="btnLogin" tabindex="3" class="full execute button">Entrar</a>
	                            
	</div>
</form>



