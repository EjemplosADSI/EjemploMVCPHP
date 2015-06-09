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
                <!-- Main Section -->
                <section class="main-section grid_8">


                    <!-- Tables Section -->
                    <div class="main-content">
                        <header>
                            <input type="text" class="search fr" placeholder="Search..."/>
                            <h2>Busqueda de Usuarios</h2>
                        </header>
                        <section class="with-table">
                            <table class="datatable tablesort selectable paginate full">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Telefono</th>
                                        <th>Direccion</th>
                                        <th>Saldo</th>
                                        <th>Estado</th>
                                        <th style="width: 80px">Acciones</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Telefono</th>
                                        <th>Direccion</th>
                                        <th>Saldo</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Student01</td>
                                        <td>Languages</td>
                                        <td>male</td>
                                        <td>80</td>
                                        <td>70</td>
                                        <td>75</td>
                                        <td>80</td>
                                        <td>
                                            <a href="#" class="view-details">Details</a>
                                            <div class="overlay-details">
                                                <header class="clearfix">
                                                    <div class="avatar fl">
                                                        <img src="images/woofunction-icons/user_32.png" width="50" height="50">
                                                    </div>
                                                    <hgroup>
                                                        <h2>John Doe</h2>
                                                        <h6>This is a subtitle. Just something descriptive about this item.</h6>
                                                        <h6>(555) 555-WORK</h6>
                                                    </hgroup>
                                                </header>
                                                <section>
                                                    <table class="simple full">
                                                        <thead>
                                                            <tr>
                                                                <th></th><th>Column 1</th><th>Column 2</th><th>Column 3</th><th>Column 4</th><th> Column 5</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>Item 1</th><td>40</td><td>50</td><td>60</td><td>70</td><td>80</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Item 2</th><td>40</td><td>50</td><td>60</td><td>70</td><td>80</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Item 3</th><td>40</td><td>50</td><td>60</td><td>70</td><td>80</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Item 4</th><td>40</td><td>50</td><td>60</td><td>70</td><td>80</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Item 5</th><td>40</td><td>50</td><td>60</td><td>70</td><td>80</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </section>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                    <!-- End Tables Section -->

                    <div class="clear"></div>

                </section>

                <?php require_once("snippets/footer.php"); ?>
                <!-- Main Section End -->

            </div>
        </section>
    </div>

</body>
</html>
