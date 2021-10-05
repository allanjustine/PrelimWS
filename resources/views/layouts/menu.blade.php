<li class="nav-item">
    <a href="{{ route('products.index') }}"
       class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
       <i class="fa fa-box-open"></i>&nbsp;<p>Products</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('services.index') }}"
       class="nav-link {{ Request::is('services*') ? 'active' : '' }}">
       <i class="fa fa-user-cog"></i>&nbsp;<p>Services</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('pricings.index') }}"
       class="nav-link {{ Request::is('pricings*') ? 'active' : '' }}">
       <i class="fa fa-tags"></i>&nbsp;<p>Pricings</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('sales.index') }}"
       class="nav-link {{ Request::is('sales*') ? 'active' : '' }}">
       <i class="fa fa-hand-holding-usd"></i>&nbsp;<p>Sales</p>
    </a>
</li>


