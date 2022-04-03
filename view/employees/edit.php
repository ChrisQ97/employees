<div class="card">
    <div class="card-header">
        Editar empleado
    </div>
    <div class="card-body">
       <form action="" method="POST">
           <div class="mb-3">
             <label for="id" class="form-label">ID:</label>
             <input type="text"
               class="form-control" name="id" id="id" placeholder="Id employee" value="<?php echo $employee->getId();?>" readonly>
           </div>
       <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input required type="text" class="form-control" id="name" name="name" placeholder="Nombre del empleado"  value="<?php echo $employee->getName();?>">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Edad</label>
            <input required type="number" class="form-control" id="age" name="age" placeholder="Edad del empleado"  value="<?php echo $employee->getAge();?>">
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Posición</label>
            <input required type="text" class="form-control" id="position" name="position" placeholder="Posición en la empresa"  value="<?php echo $employee->getPosition();?>">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Teléfono</label>
            <input required type="number" class="form-control" id="phone" name="phone" placeholder="Número telefónico"  value="<?php echo $employee->getPhone();?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electronico</label>
            <input required type="email" class="form-control" id="email" name="email" placeholder="Correo electronico"  value="<?php echo $employee->getEmail();?>">
        </div>
        <input name="" id="" class="btn btn-success" type="submit" value="Guardar Cambios">
        <a href="?controller=employees&action=home" class="btn btn-danger">Cancelar</a>
       </form>
    </div>

</div>