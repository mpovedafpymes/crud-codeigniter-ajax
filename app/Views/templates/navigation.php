<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navegación
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link" href="layouts-default.html">
                            <i class="fas fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- Módulo de Inventario -->
                    <li class="nav-parent <?= $nav_module == 'inventario' || $nav_section == 'productos' || $nav_section == 'configuracion' ? 'nav-active' : '' ?>">
                        <a class="nav-link" href="#">
                            <i class="fas fa-boxes" aria-hidden="true"></i>
                            <span class="text-capitalize"><?= $nav_module ?></span>
                        </a>
                        <!-- Sección de Productos -->
                        <ul class="nav nav-children">
                            <li class="<?= $nav_section == 'productos' ? 'nav-active' : '' ?>">
                                <a class="nav-link text-capitalize" href="<?= base_url($nav_module . '/productos') ?>">
                                    Productos
                                </a>
                            </li>
                        </ul>

                        <!-- Sección de Configuración de Inventario -->
                        <ul class="nav nav-children">
                            <li class="<?= $nav_section == 'configuracion' ? 'nav-active' : '' ?>">
                                <a class="nav-link text-capitalize" href="<?= base_url($nav_module . '/configuracion') ?>">
                                    Configuración
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>

    </div>

</aside>