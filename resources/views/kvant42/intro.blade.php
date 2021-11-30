  <!--==========================
    Intro Section
    ============================-->
  <section id="intro" class="clearfix">
      <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              @foreach ($events as $key => $event)
                  @if ($event->organization_show == '1')
                      @if ($event->published_slider_status == '1')
                          <div class="carousel-item {{$loop->iteration == 2 ? 'active' : ''}}">

                              <div class="container">

                                  <div class="intro-img">
                                      <img src="{{ $event->link_images_1 }}" alt="" class="img-fluid">
                                  </div>

                                  <div class="intro-info">
                                      <h2>{{ $event->title }}</h2>
                                      <div>
                                          <h5 style="color:#FFFFFF" ;>{!! $event->content_main_page !!}</h5>
                                          <!-- <a href="" class="btn-get-started scrollto">Записаться</a> -->
                                          <a href="{{ route('events.show', $event->id) }}"
                                              class="btn-services scrollto">Подробнее</a>
                                      </div>
                                  </div>

                              </div>

                          </div>
                      @endif
                  @endif
              @endforeach
          </div>
          <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Предыдущий</span>
          </a>
          <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Следующий</span>
          </a>
      </div>

  </section>