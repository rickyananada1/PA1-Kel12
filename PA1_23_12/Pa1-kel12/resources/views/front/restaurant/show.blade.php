@extends('front.pages.postdetail')

@section('title')
    Tempat Makan
@endsection

@section('back')
    <p class="m-0"><a class="text-white" href="{{ route('restaurants.index') }}">Home</a></p>
@endsection

@section('subtitle')
    {{ 'Tempat Makan Detail' }}
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-content pe-5">
                    <h1 class="lead heading aos-init aos-animate">{{ $restaurant->name }}</h1>
                    <hr>
                    <div id="carouselExampleIndicators" class="carousel slide col-md-12 mb-4" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($restaurant->galleries as $key => $gallery)
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}"
                                    class="{{ $key == 0 ? 'active' : '' }}">
                                </li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($restaurant->galleries as $key => $gallery)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ Storage::url($gallery->images) }}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                    <blockquote>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.</p>
                    </blockquote>

                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question
                        Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia,
                        put her initial into the belt and made herself on the way.</p>

                        <section class="food_section layout_padding-bottom">
                            <div class="container">
                              <div class="heading_container heading_center">
                                <h2>Our Menu</h2>
                              </div>
                      
                              <ul class="filters_menu">
                                <li class="active" data-filter="*">All</li>
                                <li data-filter=".burger">Burger</li>
                                <li data-filter=".pizza">Pizza</li>
                                <li data-filter=".pasta">Pasta</li>
                                <li data-filter=".fries">Fries</li>
                              </ul>
                      
                              <div class="filters-content">
                                <div class="row grid">
                                  <div class="col-sm-6 col-lg-4 all pizza">
                                    <div class="box">
                                      <div>
                                        <div class="img-box">
                                          <img src="images/f1.png" alt="" />
                                        </div>
                                        <div class="detail-box">
                                          <h5>Delicious Pizza</h5>
                                          <p>
                                            Veniam debitis quaerat officiis quasi cupiditate quo,
                                            quisquam velit, magnam voluptatem repellendus sed eaque
                                          </p>
                                          <div class="options">
                                            <h6>$20</h6>
                                            <a href="">
                                              <svg
                                                version="1.1"
                                                id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                x="0px"
                                                y="0px"
                                                viewBox="0 0 456.029 456.029"
                                                style="enable-background: new 0 0 456.029 456.029"
                                                xml:space="preserve"
                                              >
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                               c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                               C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                               c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                               C457.728,97.71,450.56,86.958,439.296,84.91z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                               c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"
                                                    />
                                                  </g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                              </svg>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-lg-4 all burger">
                                    <div class="box">
                                      <div>
                                        <div class="img-box">
                                          <img src="images/f2.png" alt="" />
                                        </div>
                                        <div class="detail-box">
                                          <h5>Delicious Burger</h5>
                                          <p>
                                            Veniam debitis quaerat officiis quasi cupiditate quo,
                                            quisquam velit, magnam voluptatem repellendus sed eaque
                                          </p>
                                          <div class="options">
                                            <h6>$15</h6>
                                            <a href="">
                                              <svg
                                                version="1.1"
                                                id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                x="0px"
                                                y="0px"
                                                viewBox="0 0 456.029 456.029"
                                                style="enable-background: new 0 0 456.029 456.029"
                                                xml:space="preserve"
                                              >
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                               c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                               C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                               c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                               C457.728,97.71,450.56,86.958,439.296,84.91z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                               c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"
                                                    />
                                                  </g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                              </svg>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-lg-4 all pizza">
                                    <div class="box">
                                      <div>
                                        <div class="img-box">
                                          <img src="images/f3.png" alt="" />
                                        </div>
                                        <div class="detail-box">
                                          <h5>Delicious Pizza</h5>
                                          <p>
                                            Veniam debitis quaerat officiis quasi cupiditate quo,
                                            quisquam velit, magnam voluptatem repellendus sed eaque
                                          </p>
                                          <div class="options">
                                            <h6>$17</h6>
                                            <a href="">
                                              <svg
                                                version="1.1"
                                                id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                x="0px"
                                                y="0px"
                                                viewBox="0 0 456.029 456.029"
                                                style="enable-background: new 0 0 456.029 456.029"
                                                xml:space="preserve"
                                              >
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                               c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                               C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                               c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                               C457.728,97.71,450.56,86.958,439.296,84.91z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                               c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"
                                                    />
                                                  </g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                              </svg>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-lg-4 all pasta">
                                    <div class="box">
                                      <div>
                                        <div class="img-box">
                                          <img src="images/f4.png" alt="" />
                                        </div>
                                        <div class="detail-box">
                                          <h5>Delicious Pasta</h5>
                                          <p>
                                            Veniam debitis quaerat officiis quasi cupiditate quo,
                                            quisquam velit, magnam voluptatem repellendus sed eaque
                                          </p>
                                          <div class="options">
                                            <h6>$18</h6>
                                            <a href="">
                                              <svg
                                                version="1.1"
                                                id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                x="0px"
                                                y="0px"
                                                viewBox="0 0 456.029 456.029"
                                                style="enable-background: new 0 0 456.029 456.029"
                                                xml:space="preserve"
                                              >
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                               c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                               C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                               c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                               C457.728,97.71,450.56,86.958,439.296,84.91z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                               c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"
                                                    />
                                                  </g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                              </svg>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-lg-4 all fries">
                                    <div class="box">
                                      <div>
                                        <div class="img-box">
                                          <img src="images/f5.png" alt="" />
                                        </div>
                                        <div class="detail-box">
                                          <h5>French Fries</h5>
                                          <p>
                                            Veniam debitis quaerat officiis quasi cupiditate quo,
                                            quisquam velit, magnam voluptatem repellendus sed eaque
                                          </p>
                                          <div class="options">
                                            <h6>$10</h6>
                                            <a href="">
                                              <svg
                                                version="1.1"
                                                id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                x="0px"
                                                y="0px"
                                                viewBox="0 0 456.029 456.029"
                                                style="enable-background: new 0 0 456.029 456.029"
                                                xml:space="preserve"
                                              >
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                               c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                               C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                               c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                               C457.728,97.71,450.56,86.958,439.296,84.91z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                               c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"
                                                    />
                                                  </g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                              </svg>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-lg-4 all pizza">
                                    <div class="box">
                                      <div>
                                        <div class="img-box">
                                          <img src="images/f6.png" alt="" />
                                        </div>
                                        <div class="detail-box">
                                          <h5>Delicious Pizza</h5>
                                          <p>
                                            Veniam debitis quaerat officiis quasi cupiditate quo,
                                            quisquam velit, magnam voluptatem repellendus sed eaque
                                          </p>
                                          <div class="options">
                                            <h6>$15</h6>
                                            <a href="">
                                              <svg
                                                version="1.1"
                                                id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                x="0px"
                                                y="0px"
                                                viewBox="0 0 456.029 456.029"
                                                style="enable-background: new 0 0 456.029 456.029"
                                                xml:space="preserve"
                                              >
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                               c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                               C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                               c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                               C457.728,97.71,450.56,86.958,439.296,84.91z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                               c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"
                                                    />
                                                  </g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                              </svg>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-lg-4 all burger">
                                    <div class="box">
                                      <div>
                                        <div class="img-box">
                                          <img src="images/f7.png" alt="" />
                                        </div>
                                        <div class="detail-box">
                                          <h5>Tasty Burger</h5>
                                          <p>
                                            Veniam debitis quaerat officiis quasi cupiditate quo,
                                            quisquam velit, magnam voluptatem repellendus sed eaque
                                          </p>
                                          <div class="options">
                                            <h6>$12</h6>
                                            <a href="">
                                              <svg
                                                version="1.1"
                                                id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                x="0px"
                                                y="0px"
                                                viewBox="0 0 456.029 456.029"
                                                style="enable-background: new 0 0 456.029 456.029"
                                                xml:space="preserve"
                                              >
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                               c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                               C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                               c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                               C457.728,97.71,450.56,86.958,439.296,84.91z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                               c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"
                                                    />
                                                  </g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                              </svg>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-lg-4 all burger">
                                    <div class="box">
                                      <div>
                                        <div class="img-box">
                                          <img src="images/f8.png" alt="" />
                                        </div>
                                        <div class="detail-box">
                                          <h5>Tasty Burger</h5>
                                          <p>
                                            Veniam debitis quaerat officiis quasi cupiditate quo,
                                            quisquam velit, magnam voluptatem repellendus sed eaque
                                          </p>
                                          <div class="options">
                                            <h6>$14</h6>
                                            <a href="">
                                              <svg
                                                version="1.1"
                                                id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                x="0px"
                                                y="0px"
                                                viewBox="0 0 456.029 456.029"
                                                style="enable-background: new 0 0 456.029 456.029"
                                                xml:space="preserve"
                                              >
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                               c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                               C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                               c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                               C457.728,97.71,450.56,86.958,439.296,84.91z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                               c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"
                                                    />
                                                  </g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                              </svg>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-lg-4 all pasta">
                                    <div class="box">
                                      <div>
                                        <div class="img-box">
                                          <img src="images/f9.png" alt="" />
                                        </div>
                                        <div class="detail-box">
                                          <h5>Delicious Pasta</h5>
                                          <p>
                                            Veniam debitis quaerat officiis quasi cupiditate quo,
                                            quisquam velit, magnam voluptatem repellendus sed eaque
                                          </p>
                                          <div class="options">
                                            <h6>$10</h6>
                                            <a href="">
                                              <svg
                                                version="1.1"
                                                id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                x="0px"
                                                y="0px"
                                                viewBox="0 0 456.029 456.029"
                                                style="enable-background: new 0 0 456.029 456.029"
                                                xml:space="preserve"
                                              >
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                               c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                               C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                               c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                               C457.728,97.71,450.56,86.958,439.296,84.91z"
                                                    />
                                                  </g>
                                                </g>
                                                <g>
                                                  <g>
                                                    <path
                                                      d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                               c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"
                                                    />
                                                  </g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                              </svg>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="btn-box">
                                <a href=""> View More </a>
                              </div>
                            </div>
                          </section>

                          
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of
                        her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the
                        Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>

                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                    <blockquote>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.</p>
                    </blockquote>

                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question
                        Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia,
                        put her initial into the belt and made herself on the way.</p>

                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of
                        her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the
                        Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>


                    <div class="pt-5">
                        <p>Categories: <a href="#">Design</a>, <a href="#">Events</a> Tags: <a
                                href="#">#html</a>, <a href="#">#trends</a></p>
                    </div>


                    <div class="pt-5">
                        <h3 class="mb-5">6 Comments</h3>
                        <ul class="comment-list">
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="images/person_2.jpg" alt="Free Website Template by Free-Template.co">
                                </div>
                                <div class="comment-body">
                                    <h3>Jacob Smith</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on
                                        the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                                        subline of her own road, the Line Lane. Pityful a rethoric question ran over her
                                        cheek, then she continued her way.</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>
                            </li>

                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="images/person_3.jpg" alt="Free Website Template by Free-Template.co">
                                </div>
                                <div class="comment-body">
                                    <h3>Chris Meyer</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente
                                        iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>

                                <ul class="children">
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="images/person_1.jpg" alt="Free Website Template by Free-Template.co">
                                        </div>
                                        <div class="comment-body">
                                            <h3>Chintan Patel</h3>
                                            <div class="meta">January 9, 2018 at 2:21pm</div>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                                Consonantia, there live the blind texts. Separated they live in
                                                Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                                            </p>
                                            <p><a href="#" class="reply">Reply</a></p>
                                        </div>


                                        <ul class="children">
                                            <li class="comment">
                                                <div class="vcard bio">
                                                    <img src="images/person_1.jpg"
                                                        alt="Free Website Template by Free-Template.co">
                                                </div>
                                                <div class="comment-body">
                                                    <h3>Jean Doe</h3>
                                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                                    <p>A small river named Duden flows by their place and supplies it with
                                                        the necessary regelialia. It is a paradisematic country, in which
                                                        roasted parts of sentences fly into your mouth.</p>
                                                    <p><a href="#" class="reply">Reply</a></p>
                                                </div>

                                                <ul class="children">
                                                    <li class="comment">
                                                        <div class="vcard bio">
                                                            <img src="images/person_2.jpg"
                                                                alt="Free Website Template by Free-Template.co">
                                                        </div>
                                                        <div class="comment-body">
                                                            <h3>Ben Afflick</h3>
                                                            <div class="meta">January 9, 2018 at 2:21pm</div>
                                                            <p>Even the all-powerful Pointing has no control about the blind
                                                                texts it is an almost unorthographic life One day however a
                                                                small line of blind text by the name of Lorem Ipsum decided
                                                                to leave for the far World of Grammar.</p>
                                                            <p><a href="#" class="reply">Reply</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="images/person_1.jpg" alt="Free Website Template by Free-Template.co">
                                </div>
                                <div class="comment-body">
                                    <h3>Jean Doe</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                        unorthographic life One day however a small line of blind text by the name of Lorem
                                        Ipsum decided to leave for the far World of Grammar.</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>
                            </li>
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="#" class="">
                                <div class="mb-3">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="mb-3">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="mb-3">
                                    <label for="message">Message</label>
                                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" value="Post Comment" class="btn btn-primary btn-md text-white">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 sidebar">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box">
                        <div class="categories">
                            <h3>Categories</h3>
                            <li><a href="#">Creatives <span>(12)</span></a></li>
                            <li><a href="#">News <span>(22)</span></a></li>
                            <li><a href="#">Design <span>(37)</span></a></li>
                            <li><a href="#">HTML <span>(42)</span></a></li>
                            <li><a href="#">Web Development <span>(14)</span></a></li>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <img src="images/person_1.jpg" alt="Free Website Template by Free-Template.co"
                            class="img-fluid mb-4 w-50 rounded-circle">
                        <h3 class="text-black">About The Author</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.</p>
                        <p><a href="#" class="btn btn-primary btn-md text-white">Read More</a></p>
                    </div>

                    <div class="sidebar-box">
                        <h3 class="text-black">Paragraph</h3>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline
                            of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own
                            road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
