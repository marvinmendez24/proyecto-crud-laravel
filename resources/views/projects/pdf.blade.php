<h1>Gobierno de El Salvador</h1>
<h2>Gestión de Proyectos Gubernamentales</h2>
<p>
    {{ $fecha }}
</p>
<h3>Información general:</h3>
<p class="fw-bold">
    Nombre: <span class="d-block fw-normal">{{$proyecto->nombreProyecto}}</span>
</p>
<p class="fw-bold">
    Financiador: <span class="d-block fw-normal">{{$proyecto->fuenteFondos}}</span>
</p>

<h3>Detalle de fondos:</h3>
<p>
    Planificados: <span class="d-block fw-normal">${{$proyecto->montoPlanificado}}</span>
    </p>
<p>
    Patrocinados: <span class="d-block fw-normal">${{$proyecto->montoPatrocinado}}</span>
</p>

    Fondos propios: <span class="d-block fw-normal">${{$proyecto->montoFondosPropios}}</span>
</p>
