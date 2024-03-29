<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo"><a href="#" class="simple-text logo-normal">
            Extreme skate-shop
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active':'' }}">
                <a class="nav-link" href="./dashboard">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('categories') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('categories') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Kategórie</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('add-category') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('add-category') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Pridať kategóriu</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('products') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('products') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Produkty</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('add-product') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('add-product') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Pridať produkt</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('orders') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('orders') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Objednávky</p>
                </a>
            </li>
        </ul>
    </div>
</div>