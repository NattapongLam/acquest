<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                {{-- <li class="menu-title" key="t-pages">Settings</li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-authentication">Users</span>
                    </a>
                </li>      --}}
                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication">Personal</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('customers.index')}}" key="t-login">Data</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span key="t-authentication">Order</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('msc-treatments.index')}}" key="t-login">MSC-Treatment</a></li>      
                        <li><a href="{{route('nk-treatments.index')}}" key="t-login">NK-Treatment</a></li>  
                        <li><a href="#" key="t-login">NKT-Treatment</a></li>   
                        <li><a href="{{route('cik-treatments.index')}}" key="t-login">CIK-Treatment</a></li>  
                        <li><a href="{{route('snk-treatments.index')}}" key="t-login">SNK-Treatment</a></li>                  
                    </ul>
                </li>
                {{-- <li class="menu-title" key="t-pages">Report</li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-line-chart"></i>
                        <span key="t-authentication">รายงาน</span>
                    </a>
                </li>
                <li class="menu-title" key="t-pages">Evaluation</li>
                <li>
                <a href="#" class="waves-effect">
                    <i class="bx bx-plus-medical"></i>
                    <span key="t-authentication">แบบประเมิน</span>
                </a>
                </li> --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>