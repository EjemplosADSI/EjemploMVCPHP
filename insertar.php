<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Ejemplo - PHP POO</title>
<?php require_once("snippets/includes_files.php"); ?>
</head>
<body>
    <div id="wrapper">

        <?php require_once("snippets/header.php"); ?>
        <section>
            <div class="container_8 clearfix">                

                <!-- Main Section -->
                <section class="main-section grid_8">
                    <!-- Forms Section -->
                    <div class="main-content grid_5 alpha">
                        <header>
                            <h2>Registrar Usuarios</h2>
                        </header>
                        <section class="clearfix">
                            <form class="form" action="controladores/usuarios_controller.php?action=crear" method="POST">

                            <?php if (!empty($_GET['respuesta'])){ ?>
                                <?php if ($_GET['respuesta'] != "error") { ?>
                                <div class="message success closeable"><span class="message-close"></span>
                                    <h3>Correcto!</h3>
                                    <p>El Usuario se ha creado correctamente.</p>
                                </div>
                                <?php } else { ?>
                                <div class="message error closeable"><span class="message-close"></span>
                                    <h3>Error!</h3>
                                    <p>El usuario no se ha creado correctamente.</p>
                                </div>
                                <?php } ?>
                            <?php } ?>
                                <div class="clearfix">
                                    <label>Tipo<small>Tipo Identificacion</small></label><select name="tipo_identificacion" id="tipo_identificacion"><option>C.C</option><option>T.I</option><option>C.E</option></select>
                                </div>
                                <div class="clearfix">
                                    <label>Identificacion <em>*</em><small>Numero Identificacion</small></label><input type="text" name="identificacion" id="telefono" required="identificacion" maxlength="12" />
                                </div>
                                <div class="clearfix">
                                    <label>Nombres <em>*</em><small>Ingrese Sus Nombres</small></label><input type="text" name="nombres" id="nombres" required="required" />
                                </div>
                                <div class="clearfix">
                                    <label>Apellidos <em>*</em><small>Ingrese Sus Apellidos</small></label><input type="text" name="apellidos" id="apellidos" required="required" />
                                </div>
                                <div class="clearfix">
                                    <label>Telefono <em>*</em><small>Numero Telefonico</small></label><input type="text" name="telefono" id="telefono" required="required" maxlength="12" />
                                </div>
                                <div class="clearfix">
                                    <label>Direccion <em>*</em><small>Direccion de Residencia</small></label><input type="text" name="direccion" id="direccion" required="required" maxlength="30" />
                                </div>
                                <div class="clearfix">
                                    <label>Fechas Nacimiento <em>*</em><small>mm/dd/yyyy</small></label><input type="date" name="fecha_nacimiento" id="fecha_nacimiento" />
                                </div>
                                <div class="clearfix">
                                    <label>Saldo <em>*</em><small>Saldo Monetario</small></label><input type="text" name="saldo" id="saldo" required="required" maxlength="12" />
                                </div>
                                <div class="clearfix">
                                    <label>Username <em>*</em><small>Alfanumericos (max 12 car.)</small></label><input type="text" name="user_login" id="user_login" required="required" maxlength="12" />
                                </div>
                                <div class="clearfix">
                                    <label>Password<small>max. 30 char.</small></label><input type="password" name="pass_login" id="pass_login" maxlength="30" />
                                </div>
                                <div class="clearfix">
                                    <label>Password ver<small>Ingrese Otra Vez su password</small></label><input type="password" name="check" data-equals="pass_login" maxlength="30" />
                                </div>
                                <div class="clearfix">
                                    <label>Estado<small>Estado del Usuario</small></label><select name="estado" id="estado"><option>Activo</option><option>Inactivo</option></select>
                                </div>
                                <div class="action clearfix">
                                    <button class="button button-gray" type="submit"><span class="accept"></span>OK</button>
                                    <button class="button button-gray" type="reset">Reset</button>
                                </div>
                            </form>
                        </section>
                    </div>
                    <!-- End Forms Section -->

                    <!-- Accordion Section -->
                    <div class="main-content grid_3 omega">
                        <header><h2>Instrucciones</h2></header>
                        <section class="accordion clearfix">
                            <header class="current"><h2>Datos del Usuario</h2></header>
                            <section style="display:block">
                                <h3>Nombres</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <h3>Where does it come from?</h3>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                            </section>
                        </section>
                    </div>
                    <!-- End Accordion Section -->

                    <div class="clear"></div>

                </section>

                <?php require_once("snippets/footer.php"); ?>
                <!-- Main Section End -->

            </div>
        </section>
    </div>

</body>
</html>
