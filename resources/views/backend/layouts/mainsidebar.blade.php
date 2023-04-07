<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/dashboard') }}"
                        aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/dashboard/postes') }}"
                        aria-expanded="false">
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <span class="hide-menu">postes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/dashboard/users') }}"
                        aria-expanded="false">
                        <i class=" fas fa-address-book" aria-hidden="true"></i>
                        <span class="hide-menu">Users</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/dashboard/message') }}"
                        aria-expanded="false">
                        <i class="far fa-comments" aria-hidden="true"></i>
                        <span class="hide-menu">Messges</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/dashboard/profile') }}"
                        aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/dashboard/error') }}"
                        aria-expanded="false">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <span class="hide-menu">Error 404</span>
                    </a>
                </li>
                <li class="sidebar-item">

                   <form action="{{ url('logout') }}" method="post">
                    @csrf
                    <button type="submit"  class="sidebar-link waves-effect waves-dark sidebar-link"
                    aria-expanded="false">
                        <i class="fas fa-sign-in-alt" aria-hidden="true"></i>
                        <span class="hide-menu">Log_Out</span>
                   </button>
                   </form>
                    {{-- <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('logout') }}"
                        aria-expanded="false">
                        <i class="fas fa-sign-in-alt" aria-hidden="true"></i>
                        <span class="hide-menu">Log_Out</span>
                    </a> --}}
                </li>


            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
