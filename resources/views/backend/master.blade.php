@include('backend.layouts.header')

@include('backend.layouts.mobile_header')

@include('backend.layouts.menu_sidebar')  
       
        <!-- PAGE CONTAINER-->
        <div class="page-container">
        @include('backend.layouts.desktop_header') 

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       @yield('main-content')
                        
                       
                        @include('backend.layouts.copyright') 
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    @include('backend.layouts.js')