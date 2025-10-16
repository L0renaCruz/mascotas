<?php include "./header.php"; ?>

<div class="container mt-4">
    <div class="row mb-3 justify-content-center">
        <div class="card justify-content-center" style="width: 25rem; background-color: rgba(255, 255, 255, 0.5);">
            <a href="index.php" class="btn btn-outline-info">
                <i class="fa-solid fa-angles-left"></i> Regresar
            </a>
            <form action="./procesos/insertar.php" method="post">
                    <h1 class="fw-bold text-center">Registrar nueva Mascota</h1>

                    <label for="mascota" class="form-label">Nombre Mascota</label>
                    <input type="text" class="form-control" name="mascota" id="mascota" required>

                    <label for="edad" class="form-label">Edad</label>
                    <input type="text" class="form-control" name="edad" id="edad" required>

                    <label for="especie" class="form-label">Especie</label>
                    <input type="text" class="form-control" name="especie" id="especie" required>

                    <label for="raza" class="form-label">Raza</label>
                    <input type="text" class="form-control" name="raza" id="raza" required>

                    <label for="dueño" class="form-label">Nombre del Dueño</label>
                    <input type="text" class="form-control" name="dueño" id="dueño" required>

                    <button class="btn btn-primary mt-3">
                        <i class="fa-solid fa-floppy-disk"></i> Agregar
                        <div class="card-body row justify-content-center">

                    </button>
                </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>