<div id="fh5co-course">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Las mejores propuestas</h2>
                <p>Estas son las mejores propuestas, estan acaparando atenciòn.</p>
            </div>
        </div>
        <div class="row">
            @foreach($propuestas as $propuesta)
                @if($loop->index < 4)
                <div class="col-md-6 col-sm-6 text-center animate-box">
                    <div class="course">
                    <a href="{{ url('/ingresar') }}" class="course-img" style="background-image: url('{{ asset('storage/' . $propuesta->imagen) }}');">
                    </a>

                        <div class="desc">
                            <h3 class="truncates"><a href="{{ url('/ingresar') }}">{{ $propuesta->nombre }}</a></h3>
                            <p class="truncates">{{ $propuesta->descripcion }}</p>
                            <span><a href="{{ url('/ingresar') }}" class="btn btn-primary btn-sm btn-course">Ver más</a></span>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
