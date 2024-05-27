<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.ico') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    @yield('styles')
  </head>

  <body class="dark">
    <nav id="menu" class="menu"><br><br>
      <h3 class="text-center menuText">Administración</h3><br><br>
      <ul class="optionsBar">
        <li class="menuItem">
          <a href="/administracion" class="menuOption">
            <i class="fas fa-home"></i>
            <h5 class="menuText">Inicio</h5>
          </a>
        </li>
        <li class="menuItem">
          <a href="/administracion/utilidades" id="productManagerBtn" class="menuOption">
            <i class="fas fa-shopping-bag"></i>
            <h5 class="menuText">Utilidades</h5>
          </a>
        </li>
        <li class="menuItem">
          <a href="/administracion/propuestas" id="constantManagerBtn" class="menuOption">
            <i class="fas fa-border-all"></i>
            <h5 class="menuText">Mis propuestas</h5>
          </a>
        </li>
        @if(session('user')->perfil != 0)
        <li class="menuItem">
          <a href="/administracion/empresa" id="constantManagerBtn" class="menuOption">
          <i class="fas fa-building"></i>
            <h5 class="menuText">Empresa</h5>
          </a>
        </li>
        @endif
        @if(session('user')->permiso == 1)
        <li class="menuItem">
          <a href="/administracion/eventos" id="constantManagerBtn" class="menuOption">
            <i class="far fa-calendar-alt"></i>
            <h5 class="menuText">Eventos</h5>
          </a>
        </li>
        @endif
        <li class="menuItem">
        <form action="/logout" method="POST" id="constantManagerBtn" class="menuOption">
            @csrf
            <button type="submit" class="btn-icon">
                <i class="fas fa-power-off"></i> <!-- Icono de apagado -->
            </button>
            <h5 class="menuText">Cerrar sesiòn</h5>
        </form>
        
        <div class="userInfo">
          <div>
            <h5><i class="fas fa-exclamation-circle"></i></h5>
            <p>cerrar sesiòn</p>
          </div>
        </div>
        </li>

        
      </ul>
      <div class="menuUser">
        <a href="/administracion/usuario">
          <div>
            <img
              src="{{ asset('images/logo.png') }}"
              alt="logo"
            />
          </div>
          <h5 class="Username menuText">{{session('user')->nombre}}</h5>
          <p class="menuText"><i class="fas fa-chevron-right"></i></p>
        </a>
        <div class="userInfo">
          <div>
            <h5><i class="fas fa-exclamation-circle"></i></h5>
            <p>Mis datos</p>
          </div>
        </div>
      </div>
      <div class="logoutButton">
        
      </div>
      <div class="themeBar">
          <div>
              <button id="themeChangeBtn"><i class="fas"></i></button>
          </div>
      </div>
    </nav>
    
    <div class="dashboard-content">
    <div class="topbar">
        <div class="notification-icon">
            <div class="actionbar">
                <div>
                    <div id="menuToggle">
                        <input id="checkbox" type="checkbox">
                        <label class="toggle" for="checkbox">
                            <div class="bar bar--top"></div>
                            <div class="bar bar--middle"></div>
                            <div class="bar bar--bottom"></div>
                        </label>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="content">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Excelente!</strong> {{ session('success') }}.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Algo anda mal...</strong> {{ session('error') }}.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @yield('content')
    </div>
    </div>


        
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.anychart.com/releases/8.12.1/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.12.1/js/anychart-pie.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
    
    <!-- js grafica lineas -->
    <script>

    </script>

    <!-- js grafica circular -->
    <script>
        const labels1 = ['Enero', 'Febrero', 'Marzo', 'Abril']
        const colors = ['rgba(30, 223, 78)', 'rgb(10, 165, 204)', 'rgb(203,82,82)', 'rgb(2, 212, 177)'];

        const graph1 = document.querySelector("#graficaRedonda");

        const data1 = {
            labels: labels1,
            datasets: [{
                data: [1, 2, 3, 4],
                backgroundColor: colors
            }]
        };

        const config1 = {
            type: 'pie',
            data: data1,
        };

        new Chart(graph1, config1);

    </script>

    <!-- js graph redondo hueco -->
    <script>
        anychart.onDocumentReady(function() {
  
        // donut chart data
        var data = [
            ["Resurrection Stone", 1],    
            ["Cloak of Invisibility", 1],    
            ["Elder Wand", 1],
        ];

        // create pie chart and configure it
        var pie = anychart.pie(data);
        pie.title("Actividades")
        pie.innerRadius('85%');
        pie.labels(false);
        pie.tooltip().format("").separator(false);
        
        // create a layer and put some shapes in it
        var layer = anychart.graphics.layer();

        // draw the square
        layer.rect(25, 50, 350, 300);

        // draw the circle
        layer.circle(200, 250, 100).stroke(anychart.palettes.defaultPalette[0]);

        // draw the triangle
        layer.path()
            .moveTo(25, 350)
            .lineTo(200, 50)
            .lineTo(375, 350)
            .close()
            .stroke(anychart.palettes.defaultPalette[1]);

        // draw the wand in the middle
        layer.path()
            .moveTo(200, 50)
            .lineTo(200, 350)
            .stroke(anychart.palettes.defaultPalette[2]);  
            
        // set layer as the center of the chart 
        pie.center().content(layer);
        // display donut chart
        pie.container('containerChar').draw();
        });
    </script>
    <script src="{{ asset('js/admin.js') }}"></script>
    @yield('scripts')

</body>
</html>

