<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Ejemplo POO - PHP</title>

<?php require_once("snippets/includes_files.php"); ?>

<script> 
$(document).ready(function(){
    $.tools.validator.fn("#username", function(input, value) {
        return value!='Username' ? true : {     
            en: "Por Favor Complete El Campo"
        };
    });
    
    $.tools.validator.fn("#password", function(input, value) {
        return value!='Password' ? true : {     
            en: "Por Favor Complete El Campo"
        };
    });

    var form = $("#form").validator({ 
    	position: 'bottom left', 
    	offset: [5, 0],
    	messageClass:'form-error',
    	message: '<div><em/></div>' // em element is the arrow
    }).attr('novalidate', 'novalidate');
});
</script> 

</head>
<body class="login">
    <div class="login-box main-content">
      <header>
          <ul class="action-buttons clearfix fr">
              <li><a href="#" class="button button-gray">Registrar</a></li>
              <li><a href="#" class="button button-gray"><span class="help"></span>Olvido su Pass</a></li>
          </ul>
          <h2>POO PHP Login</h2>
      </header>
    	<section>
    		<div class="message notice">Ingrese Cualquier Dato Para Ingresar</div>
    		<form id="form" action="insertar.php" method="post" class="clearfix">
			<p>
				<input type="text" id="username"  class="large" value="" name="username" required="required" placeholder="Username" />
                        <input type="password" id="password" class="large" value="" name="password" required="required" placeholder="Pass" />
                        <button class="large button button-gray fr" type="submit">Ingresar</button>
			</p>
			<p class="clearfix">
				<span class="fl">
					<input type="checkbox" id="remember" class="" value="1" name="remember"/>
					<label class="choice" for="remember">Recuerdame por las proximas 2 semanas</label>
				</span>
			</p>
		</form>
    	</section>
    </div>
</body>
</html>