
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('All Orders'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <!--datatable css-->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <!--datatable responsive css-->
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Orders
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            All Orders
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div id="notification_wrapper">
        <?php if(session('status')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('status')); ?>

                <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Orders</h5>
                </div>
                <div class="card-body">
                    <table id="table" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th data-ordering="false">SR No.</th>
                                <th data-ordering="false">Product Name</th>
                                <th>Product Image</th>
                                <th data-ordering="false">User Email</th>
                                <th>Address</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($orders) > 0): ?>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td> <?php echo e($key + 1); ?> </td>
                                        <td><?php echo e($row->product->title); ?></td>
                                        <td><img width="70px" src="<?php echo e($row->product->image); ?>" alt="Product Image"></td>
                                        <td><?php echo e($row->user->email); ?></td>
                                        <td>
                                            <?php echo e($row->user->address); ?>


                                        </td>
                                        <td>
                                            <?php echo e($row['qty']); ?>

                                        </td>
                                        <td>
                                            $<?php echo e(intval($row['qty']) * intval($row->product->price)); ?>

                                        </td>
                                        <td>
                                            <?php switch($row['status']):
                                                case (0): ?>
                                                    <span class="badge bg-warning">Pending</span>
                                                <?php break; ?>

                                                <?php case (1): ?>
                                                    <span class="badge bg-success">Complete</span>
                                                <?php break; ?>

                                                <?php case (2): ?>
                                                    <span class="badge bg-danger">Cancled</span>
                                                <?php break; ?>

                                                <?php default: ?>
                                            <?php endswitch; ?>

                                        </td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <form class="order_status_form" data-status="0" data-order_id="<?php echo e($row['id']); ?>">
                                                            <button type="submit" class="dropdown-item">
                                                                Pending
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form class="order_status_form" data-status="1" data-order_id="<?php echo e($row['id']); ?>">
                                                            <button type="submit" class="dropdown-item">
                                                                Complete
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form class="order_status_form" data-status="2" data-order_id="<?php echo e($row['id']); ?>">
                                                            <button type="submit" class="dropdown-item">
                                                                Cancle
                                                            </button>
                                                        </form>
                                                    </li>
                                                    
                                                    <li>
                                                        <form class="order_delete_form" data-order_id="<?php echo e($row['id']); ?>">
                                                            <button type="submit" class="dropdown-item remove-item-btn">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="<?php echo e(URL::asset('build/js/pages/datatables.init.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $(".order_delete_form").submit(function(e) {

                e.preventDefault();

                const form = $(this);

                const id = $(this).data("order_id");
                if (confirm('Are you sure you want to delete this order?')) {

                    $.ajax({
                        url: "<?php echo e(route('order.destroy', ':id')); ?>".replace(':id', id),
                        type: "DELETE",
                        dataType: "JSON",
                        data: {
                            "_token": "<?php echo e(csrf_token()); ?>"
                        },
                        success: function(data) {
                            if (data.status) {

                                form.closest("tr").hide();

                                $("#notification_wrapper").html(
                                    `<div class="alert alert-success alert-dismissible fade show" role="alert">
                        ${data.message}
                        <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`
                                );

                                setTimeout(function() {
                                    $("#notification_wrapper").html();
                                }, 4000);
                            }
                        }
                    });
                }
            })
            $(".order_status_form").submit(function(e) {

                e.preventDefault();

                const form = $(this);

                const id = $(this).data("order_id");

                const status = $(this).data("status");

                if (confirm('Are you sure you want to change status this order?')) {

                    $.ajax({
                        url: "<?php echo e(route('order.update', ':id')); ?>".replace(':id', id),
                        type: "PUT",
                        dataType: "JSON",
                        data: {
                            "_token": "<?php echo e(csrf_token()); ?>",
                            "status": status
                        },
                        success: function(data) {
                            if (data.status) {

                                $("#notification_wrapper").html(
                                    `<div class="alert alert-success alert-dismissible fade show" role="alert">
                        ${data.message}
                        <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`
                                );

                                setTimeout(function() {
                                    $("#notification_wrapper").html();
                                    window.location.reload();
                                }, 4000);
                            }
                        }
                    });
                }
            })

        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\learn_laravel\eccom\resources\views/dashboard/orders/index.blade.php ENDPATH**/ ?>