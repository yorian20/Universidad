
    <div class="jumbotron">
        <h2>registro de estudiantes</h2>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>cedula</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>edad</th>
                    <th>acción</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($estudiantes as $estudiante){?>
                    <tr>
                        <th><?= $estudiante->getCedula();?></t>
                        <th><?= $estudiante->getNombre();?></t>
                        <th><?= $estudiante->getApellido();?></t>
                        <th><?= $estudiante->getEdad();?></t>
                        <th>
                            <a href="#" class="btn btn-primary">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
            <?php }?>   
            </tbody>
        </table>
    </div>    
</div>