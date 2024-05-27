<div class="row animate-box">
    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
        <h2>Conferencias</h2>
    </div>
</div>
<div class="row">
    @foreach($conferencias as $conferencia)
    <div class="col-lg-4 col-md-4">
        <div class="fh5co-blog animate-box">
        <a href="eventos/{{ $conferencia->id }}"  > <img src="{{ asset('storage/' . $conferencia->imagen) }}" class="blog-img-holder"></a>
            <div class="blog-text">
                <h3 class="truncate"><a href="eventos/{{ $conferencia->id }}">{{ $conferencia->nombre }}</a></h3>
                @if($conferencia->fecha_evento)
                <?php
                $fecha = \Carbon\Carbon::parse($conferencia->fecha_evento)->locale('es');
                $dia = $fecha->format('d');
                $mes = ucfirst($fecha->translatedFormat('M'));
                ?>
                <span class="posted_on">{{ $mes }} {{ $dia }}</span>
                @endif
                <p class = "truncate">{{ $conferencia->descripcion }}</p>
            </div> 
        </div>
    </div>
    @endforeach
    
</div>