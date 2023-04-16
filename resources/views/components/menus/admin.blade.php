<!-- DASHBOARD MENU -->
<!-- <li class="nav-item">
    <a class="nav-link d-flex align-items-center nav-only-item" href="/dashboard/view/index">
  <span class="sidebar-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer"
           viewBox="0 0 16 16">
          <path
              d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
          <path fill-rule="evenodd"
                d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
      </svg>
  </span>
        <span class="mt-1 ms-1 sidebar-text">Dashboard</span>
    </a>
</li> -->
<!--  Dropdown CATEGORIAS  -->
<li class="nav-item">
    <span class="nav-link collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
        data-bs-target="#categories">
        <span>
            <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                        clip-rule="evenodd"></path>
                </svg> </span>

            <!--     TEXTO DEL DROPDOWN ANTES DE ABRIRSE       -->
            <span class="sidebar-text">Catálogo</span> </span><span class="link-arrow"><svg class="icon icon-sm"
                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"></path>
            </svg></span></span>
    <div class="multi-level collapse" role="list" id="categories" aria-expanded="false">
        <ul class="flex-column nav dashboard_user-menus">

            <!--     ITEMS DEL DROPDOWN       -->

            <li class="nav-item">
                <a class="nav-link nav-only-item" wire:click="setName('products')"><span
                        class="sidebar-text">Productos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link nav-only-item" wire:click="setName('otros')"><span
                        class="sidebar-text">Proveedores</span></a>
            </li>

            <!-- <li class="nav-item">
        <a
            class="nav-link nav-only-item"
            href="/dashboard/views/catalogo/unidad-de-medida"
        ><span class="sidebar-text">Unidad de medida</span></a
        >
    </li> -->

            <li class="nav-item">
                <a class="nav-link nav-only-item" href="/dashboard/views/catalogo/unidad-de-venta"><span
                        class="sidebar-text">Unidades de venta</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link nav-only-item" href="/dashboard/views/catalogo/unidad-de-compra"><span
                        class="sidebar-text">Unidades de compra</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link nav-only-item" href="/dashboard/views/catalogo/categorias"><span
                        class="sidebar-text">Categorías</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link nav-only-item" href="/dashboard/views/catalogo/almacenes"><span
                        class="sidebar-text">Almacenes</span></a>
            </li>


        </ul>
    </div>
</li>
<!--  Dropdown COMPRAS  -->
<li class="nav-item">
    <span class="nav-link collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
        data-bs-target="#buys">
        <span>
            <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                        clip-rule="evenodd"></path>
                </svg> </span>

            <!--     TEXTO DEL DROPDOWN ANTES DE ABRIRSE       -->
            <span class="sidebar-text">Compras</span> </span><span class="link-arrow"><svg class="icon icon-sm"
                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"></path>
            </svg></span></span>
    <div class="multi-level collapse" role="list" id="buys" aria-expanded="false">
        <ul class="flex-column nav">

            <!--     ITEMS DEL DROPDOWN       -->

            <li class="nav-item">
                <a class="nav-link nav-only-item" href="/dashboard/views/catalogo/ordenes-de-compra"><span
                        class="sidebar-text">Ordenes de pago</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link nav-only-item" href="/dashboard/views/catalogo/pagos"><span
                        class="sidebar-text">Pagos</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link nav-only-item" href="/dashboard/views/catalogo/entradas"><span
                        class="sidebar-text">Entradas</span></a>
            </li>



        </ul>
    </div>
</li>
<!--  Dropdown Administracion de almacenes  -->
<li class="nav-item">
    <span class="nav-link collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
        data-bs-target="#admin">
        <span>
            <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                        clip-rule="evenodd"></path>
                </svg> </span>

            <!--     TEXTO DEL DROPDOWN ANTES DE ABRIRSE       -->
            <span class="sidebar-text text-center">Administración</span> </span><span class="link-arrow"><svg
                class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"></path>
            </svg></span></span>
    <div class="multi-level collapse" role="list" id="admin" aria-expanded="false">
        <ul class="flex-column nav">

            <!--     ITEMS DEL DROPDOWN       -->

            <li class="nav-item">
                <a class="nav-link nav-only-item" href="/dashboard/views/catalogo/entradas"><span
                        class="sidebar-text">Entradas</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link nav-only-item" href="/dashboard/views/catalogo/traspaso"><span
                        class="sidebar-text">Traspaso</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link nav-only-item" href="/dashboard/views/catalogo/salidas"><span
                        class="sidebar-text">Salidas</span></a>
            </li>



        </ul>
    </div>
</li>
