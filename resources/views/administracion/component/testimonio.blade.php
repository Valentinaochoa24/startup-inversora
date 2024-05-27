<div
        id="fh5co-testimonial"
        style="background-image: url(images/wallpaper.jpg)"
      >
        <div class="overlay"></div>
        <div class="container">
          <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
              <h2><span>Testimonios</span></h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="row animate-box">
                <div class="owl-carousel owl-carousel-fullwidth">
                  @foreach($testimonios as $testimonio)
                  <div class="item">
                    <div class="testimony-slide active text-center">
                      <div
                        class="user"
                        style="background-image: url({{ asset('images/' . $testimonio->imagen) }})"
                      ></div>
                      <span>{{ $testimonio->nombre }}<br /><small>{{ $testimonio->profesion }}</small></span>
                      <blockquote>
                        <p>
                          &ldquo;{{ $testimonio->comentario }}.&rdquo;
                        </p>
                      </blockquote>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>