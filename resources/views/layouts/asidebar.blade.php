<aside class="main-sidebar elevation-4 text-white">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
        <img src="" alt="" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="font-weight-bold text-center ">Medicine</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{--            <div class="image">
                            <img src="" class="img-circle elevation-2" alt="User Image">
                        </div>--}}
            <div class="info">
                {{--                    <a href="#" class="d-block">{{Auth::user()->name}}</a>--}}
                <a href="{{route('dashboard')}}" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p class="">
                            <i class="fas fa-angle-left right"></i>
                            Medicines
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('medicine')}}" class="nav-link">
                                <i class="fas fa-door-open "></i>
                                <p class="ml-3">Add Medicine</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('view-medicine')}}" class="nav-link">
                                <i class="fas fa-door-open "></i>
                                <p class="ml-3">View Medicine</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('manufacturer-list')}}" class="nav-link">
                                <i class="fas fa-door-open "></i>
                                <p class="ml-3"> Manufacturer List</p>
                            </a>
                        </li>
                    </ul>

                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p class="">
                            <i class="fas fa-angle-left right"></i>
                            Transactions
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('invoice')}}" class="nav-link">
                                <i class="fas fa-plus-circle ml-2"></i>
                                <p class="ml-4"> Create Invoices </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('search')}}" class="nav-link">
                                <i class="fas fa-list-ul ml-2"></i>
                                <p class="ml-4">Search Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{'test'}}" class="nav-link">
                                <i class="fas fa-list-ul ml-2"></i>
                                <p class="ml-4">Refund Invoice</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-check"></i>
                                Terminate Client
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p>
                            <i class="fas fa-angle-left right"></i>
                            Settings
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-screwdriver ml-2"></i>
                                <p class="ml-4"> Setup settings </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('register-user')}}" class="nav-link">
                                <i class="fas fa-server ml-2"></i>
                                <p class="ml-4"> register user </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('manage-user')}}" class="nav-link">
                                <i class="fas fa-server ml-2"></i>
                                <p class="ml-4"> Manage user </p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">
                        <i class="fas fa-door-open "></i>
                        <p class="ml-3">logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
