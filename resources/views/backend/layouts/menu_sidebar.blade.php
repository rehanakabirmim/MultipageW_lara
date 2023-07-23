 <!-- MENU SIDEBAR-->
 <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{route('dashboard')}}">
                    <h3><strong>Crispy Kitchen</strong></h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{asset('dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>
                        
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Products</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('product.index')}}">add product</a>
                                </li>
                                <li>
                                    <a href="{{route('product.manage')}}">manage product</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
