<!-- partial:partials/_sidebar -->
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
        <img src="{{asset('assets/images/logo/Influencers Pro-01-01.png')}}" alt="logo">
            <!-- Influencers<span>Pro</span> -->
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item @if (isset($menu) && $menu == 'dashboard') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'admins') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . 'admins'}}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Admins</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'categories') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . 'categories'}}" class="nav-link">
                    <i class="link-icon" data-feather="layers"></i>
                    <span class="link-title">All Categories</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'vendors/create') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . 'vendors/create'}}" class="nav-link">
                    <i class="link-icon" data-feather="plus-circle"></i>
                    <span class="link-title">Add Brand</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'influencers/create') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL') . 'influencers/create'}}" class="nav-link">
                    <i class="link-icon" data-feather="plus-circle"></i>
                    <span class="link-title">Add Influencer</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'vendors') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL') . 'vendors'}}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">All Brands</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'influencers') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL'). 'influencers'}}" class="nav-link">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">All Influencers</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'influencers/transactions') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL') . 'influencers/transactions'}}" class="nav-link">
                    <i class="link-icon" data-feather="arrow-right-circle"></i>
                    <span class="link-title">Influencer Transactions</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'vendors/transactions') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . 'vendors/transactions'}}" class="nav-link">
                    <i class="link-icon" data-feather="arrow-right-circle"></i>
                    <span class="link-title">Brand Transactions</span>
                </a>
            </li>

            <li class="nav-item @if (isset($menu) && $menu == 'influencers/reviews') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL') . 'influencers/reviews'}}" class="nav-link">
                    <i class="link-icon" data-feather="activity"></i>
                    <span class="link-title">Influencer Reviews</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'vendors/reviews') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . 'vendors/reviews'}}" class="nav-link">
                    <i class="link-icon" data-feather="activity"></i>
                    <span class="link-title">Brand Reviews</span>
                </a>
            </li>
            <!-- <li class="nav-item @if (isset($menu) && $menu == 'faqs') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . 'faqs'}}" class="nav-link">
                    <i class="link-icon" data-feather="droplet"></i>
                    <span class="link-title">FAQ'S</span>
                </a>
            </li> -->
            <li class="nav-item @if (isset($menu) && $menu == 'change-password') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . 'change-password'}}" class="nav-link">
                    <i class="link-icon" data-feather="edit"></i>
                    <span class="link-title">Change Password</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- partial:partials/_sidebar -->