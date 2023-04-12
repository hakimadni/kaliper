@include('partials.navbar')
<div id="kt_content_container" class="mx-5 my-10 pt-15 mx-xl-20 my-xl-20">
                        <div class="z-index-n1">
                          @yield('content')
                        </div>
                      </div>
      @include('partials.footer')