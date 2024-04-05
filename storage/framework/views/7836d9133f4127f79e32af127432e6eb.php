<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
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
                </div>
                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                
            </div>
            <div class="w-100 d-flex align-items-center justify-content-end">
                
                <div class="logout_wrapper">
                        <a href="<?php echo e(route("logout")); ?>" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger">
                            Logout
                        </a>
                </div>
            </div>

        </div>
    </div>
</header>

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                        colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php /**PATH D:\learn_laravel\ecco\resources\views/layouts/topbar.blade.php ENDPATH**/ ?>