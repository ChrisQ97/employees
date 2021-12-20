<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Puesto</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach ( $employees as $employee ) { ?>
            
            <tr>
                <td> <?php echo $employee->getId(); ?> </td>
                <td> <?php echo $employee->getName(); ?> </td>
                <td> <?php echo $employee->getAge(); ?> </td>
                <td> <?php echo $employee->getPosition(); ?> </td>
                <td> <?php echo $employee->getPhone(); ?> </td>
                <td> <?php echo $employee->getEmail(); ?> </td>
                <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="#" class="btn btn-info">Editar</a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
