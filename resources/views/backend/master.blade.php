
<!DOCTYPE html>
<html dir="ltr" lang="en">
    {{-- @extends('backend.layouts.style') --}}
@include('backend.layouts.style')

@yield('css')
<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

@include('backend.layouts.navbar')

@include('backend.layouts.mainsidebar')

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">@yield('breadcrumb')</h4>
                    </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>
@yield('content')


          @include('backend.layouts.footer')

        </div>

    </div>

   @include('backend.layouts.scripts')
   @yield('scripts')
</body>

</html>
