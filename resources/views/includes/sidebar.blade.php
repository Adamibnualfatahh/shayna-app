<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                    <a href="{{ Route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Barang</li><!-- /.menu-title -->
                <li class="{{ (request()->is('products')) ? 'active' : '' }}">
                    <a href="{{ Route('products.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Barang</a>
                </li>
                <li class="{{ (request()->is('products/create')) ? 'active' : '' }}">
                    <a href="{{ Route('products.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Barang</a>
                </li>

                <li class="menu-title">Foto Barang</li><!-- /.menu-title -->
                <li class="{{ (request()->is('product-galleries')) ? 'active' : '' }}">
                    <a href="{{ Route('product-galleries.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Foto Barang</a>
                </li>
                <li class="{{ (request()->is('product-galleries/create')) ? 'active' : '' }}">
                    <a href="{{ Route('product-galleries.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Foto Barang</a>
                </li>

                <li class="menu-title">Transaksi</li><!-- /.menu-title -->
                <li class="{{ (request()->is('transactions')) ? 'active' : '' }}">
                    <a href="{{ Route('transactions.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->