<?php
include ('../../views/header.php');
?>
<div class="container">
    <div class="row">
        <h2>Alumnos</h2>
    </div>
    <div class="row">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Matrícula</th>
                <th>Nombre completo</th>
                <th>Correo electrónico</th>
                <th>Carrera</th>
                <th>Beca asignada</th>
                <th>Estado</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <!--Metodo para renderizar los datos de la tabla-->
                <?php
                include '../../database.php';
                $pdo = Database::connect();
                $sql = 'SELECT * FROM alumnos';
                foreach ($pdo->query($sql) as $row) {
                    echo '<tr>';
                    echo '<td>'. $row['matricula'] . '</td>';
                    echo '<td>'. $row['nombre_alumno'] . ' ' . $row['apellido_paterno'] . ' ' . $row['apellido_materno'] . '</td>';
                    echo '<td>'. $row['correo_electronico'] . '</td>';
                    echo '<td>'. $row['id_carrera']. '</td>';
                    echo '<td>'. $row['id_beca'] . '</td>';
                    echo '<td>'. $row['id_estado'] . '</td>';
                    echo '</tr>';
                }
                Database::disconnect();
                ?>
            </tr>
            </tbody>
        </table>
    </div>
</div> <!-- /container -->
<?php
include ('../../views/footer.php');
?>
