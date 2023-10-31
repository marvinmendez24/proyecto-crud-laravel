<div class="mb-3">
    <label for="nombre" class="form-label fw-bold">Nombre del proyecto:</label>
    <input
        type="text"
        name="nombreProyecto"
        id="nombre"
        class="form-control"
        placeholder="Nombre de tu proyecto"
        value="{{ $proyecto->nombreProyecto ?? ''}}"
        >
    <p class="text-danger fw-lighter">@error('nombreProyecto') El campo es obligatorio @enderror</p>
</div>
<div class="mb-3">
    <label for="fuente" class="form-label fw-bold">Fuente de fondos:</label>
    <input
        type="text"
        name="fuenteFondos"
        id="fuente"
        class="form-control"
        placeholder="Fuente de fondos"
        value="{{ $proyecto->fuenteFondos ?? ''}}"
        >
    <p class="text-danger fw-lighter">@error('fuenteFondos') El campo es obligatorio @enderror</p>
</div>
<div class="d-flex justify-content-between gap-3">
    <div class="mb-3">
        <label for="monto-planificado" class="form-label fw-bold">Monto planificado:</label>
        <input
            type="number"
            placeholder="Ejm. 100000"
            name="montoPlanificado"
            id="monto-planificado"
            class="form-control"
            value="{{ $proyecto->montoPlanificado ?? ''}}"
            >
        <p class="text-danger fw-lighter">@error('montoPlanificado') El campo es obligatorio @enderror</p>
    </div>
    <div class="mb-3">
        <label for="monto-patrocinado" class="form-label fw-bold">Monto patrocinado:</label>
        <input
            type="number"
            placeholder="Ejm. 100000"
            name="montoPatrocinado"
            id="monto-patrocinado"
            class="form-control"
            value="{{ $proyecto->montoPatrocinado ?? ''}}"
            >
        <p class="text-danger fw-lighter">@error('montoPatrocinado') El campo es obligatorio @enderror</p>
    </div>
    <div class="mb-3">
        <label for="monto-propio" class="form-label fw-bold">Monto propio:</label>
        <input
            type="number"
            placeholder="Ejm.
            100000"
            name="montoFondosPropios"
            id="monto-propio"
            class="form-control"
            value="{{ $proyecto->montoFondosPropios ?? ''}}"
            >
        <p class="text-danger fw-lighter">@error('montoFondosPropios') El campo es obligatorio @enderror</p>
    </div>
</div>