<div class="row animate-box">
    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
        <h2>Eventos virtuales</h2>
        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
    </div>
</div>
<div class="row row-padded-mb">
    @foreach($eventosVirtuales as $virtual)
    <div class="col-md-4 animate-box">
        <div class="fh5co-event">
            @if($virtual->fecha_evento)
            <?php
            $fecha = \Carbon\Carbon::parse($virtual->fecha_evento)->locale('es');
            $dia = $fecha->format('d');
            $mes = ucfirst($fecha->translatedFormat('M'));
            ?>
            <div class="date text-center"><span>{{ $dia }}<br>{{ $mes }}</span></div>
            @endif
            <h3 class="truncate"><a href="eventos/{{ $virtual->id }}">{{ $virtual->nombre }}</a></h3>
            <p class="truncate">{{ $virtual->descripcion }}</p>
            <p><a href="eventos/{{ $virtual->id }}">Leer màs</a></p>
        </div>
    </div>
    @endforeach
</div>