<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <h2 class="logo-sm text-light mt-3">
                
            </h2>
            <h2 class="logo-lg text-light mt-3">
                
            </h2>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <h2 class="logo-sm text-light mt-3">
               
            </h2>
            <h2 class="logo-lg text-light mt-3">
               
            </h2>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span><?php echo app('translator')->get('translation.menu'); ?></span></li>
                <li class="nav-item active">
                    <a class="nav-link menu-link" href="<?php echo e(route("root")); ?>">
                        <i class="ri-dashboard-2-line"></i> <span><?php echo app('translator')->get('translation.dashboards'); ?></span>
                    </a>
                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route("products.index")); ?>" >
                        <i class="ri-apps-2-line"></i> <span><?php echo app('translator')->get('translation.products'); ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route("orders.index")); ?>">
                        <i class="ri-stack-line"></i> <span><?php echo app('translator')->get('translation.orders'); ?></span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route("users.index")); ?>" >
                        <i class="ri-account-circle-line"></i> <span>Users</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel">
                        <i class="ri-share-line"></i> <span><?php echo app('translator')->get('translation.settings'); ?></span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<?php /**PATH D:\learn_laravel\ecco\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>