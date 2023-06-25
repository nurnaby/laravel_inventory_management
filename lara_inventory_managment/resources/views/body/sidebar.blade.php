<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ '/' == request()->path() ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}"><img src="{{ asset('admin/assets/img/icons/dashboard.svg') }}"
                            alt="img"><span>
                            Dashboard</span> </a>
                </li>

                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('admin/assets/img/icons/users1.svg') }}"
                            alt="img"><span>
                            Employes</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('allEmploye') }}">Employes List</a></li>

                    </ul>
                </li>
                <li class="{{ 'customer' == request()->path() ? 'active' : '' }}">
                    <a href="{{ route('all.customer') }}"><img src="{{ asset('admin/assets/img/icons/users1.svg') }}"
                            alt="img"><span>
                            Customer</span> <span class="menu-arrow"></span></a>
                    <ul>
                        {{-- <li><a href="{{ route('all.customer') }}">Customer List</a></li> --}}

                    </ul>
                </li>
                <li class="submenu   {{ 'agami' == request()->path() ? 'active' : '' }}">
                    <a href="javascript:void(0);"><img src="{{ asset('admin/assets/img/icons/users1.svg') }}"
                            alt="img"><span>
                            Agami</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('all.agami_product') }}">All Agami sale</a></li>
                        <li><a href="{{ route('today.sale') }}">Today sale</a></li>
                        <li><a href="{{ route('thismonth.sale') }}">This Month sale</a></li>
                        <li><a href="{{ route('yearly.sale') }}"> Yearly sale</a></li>

                    </ul>


                </li>
            </ul>
        </div>
    </div>
</div>
