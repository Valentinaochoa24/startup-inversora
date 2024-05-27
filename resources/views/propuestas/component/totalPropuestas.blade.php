<div id="fh5co-proposals">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Propuestas de Inversión</h2>
                <p>Descubre las oportunidades de inversión más emocionantes y lucrativas.</p>
            </div>
        </div>
        <div class="row">
            @foreach($propuestas as $propuesta)
            <div class="col-md-6 col-sm-6 text-center animate-box">
                <div class="proposal">
                    <a href="{{ url('/ingresar') }}" class="proposal-img" style="background-image: url('{{ asset('storage/' . $propuesta->imagen) }}');"></a>
                    <div class="desc">
                        <h3 class="truncates"><a href="{{ url('/ingresar') }}">{{ $propuesta->nombre }}</a></h3>
                        <p class="truncates">{{ $propuesta->descripcion }}</p>
                        <span><a href="{{ url('/ingresar') }}" class="btn btn-success btn-sm btn-proposal">Invertir ya!</a></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>