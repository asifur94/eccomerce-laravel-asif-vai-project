

<?php $__env->startSection('title'); ?>
    Your account Management
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="container mt-5">

        <div class="row">
            <div class="col-xxl-3">
                <div class="card mt-n5">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                <img src="<?php if(Auth::user()->avatar != ''): ?> <?php echo e(URL::asset('images/' . Auth::user()->avatar)); ?><?php else: ?><?php echo e(URL::asset('build/images/users/avatar-1.jpg')); ?> <?php endif; ?>"
                                    class="  rounded-circle avatar-xl img-thumbnail user-profile-image"
                                    alt="user-profile-image">
                                
                            </div>
                            <h5 class="fs-16 mb-1">
                                <?php if(auth()->check()): ?>
                                    <?php
                                        echo Auth::user()->name;
                                    ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <!--end card-->

            </div>
            <!--end col-->
            <div class="col-xxl-9">
                <div class="card mt-xxl-n5">
                    <div class="card-header items-center flex justify-between">
                        <p class="m-0">Personal Details</p>
                        <a class="btn btn-danger btn-sm" href="<?php echo e(route('logout')); ?>">LogOut</a>
                    </div>
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="firstnameInput" class="form-label">First
                                        Name</label>
                                    <input type="text" readonly class="form-control" id="user_name"
                                        placeholder="Enter your firstname" value="<?php echo e(Auth::user()->name); ?>">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="lastnameInput" class="form-label">Email Address</label>
                                    <input type="text" class="form-control" id="user_email"
                                        placeholder="Enter your lastname" value="<?php echo e(Auth::user()->email); ?>">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="phonenumberInput" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="user_address"
                                        placeholder="Enter your phone number" value="<?php echo e(Auth::user()->address); ?>">
                                </div>
                            </div>
                            <!--end col-->

                            <div class="order_list_wrapper my-3">
                                <div class="order_title">
                                    <h3>Order List</h3>
                                </div>
                                <?php if(count($orders)): ?>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Order Date</th>
                                                <th scope="col">Product Image</th>
                                                <th scope="col">Total Price</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($key + 1); ?></td>
                                                    <td><?php echo e($order->created_at); ?></td>
                                                    <td><img width="70px" src="<?php echo e($order->product->image); ?>" alt="Product Image"></td>
                                                    <td>
                                                        $<?php echo e(intval($order->qty) * intval($order->product->price)); ?>

                                                    </td>
                                                    <td>
                                                        <?php switch($order->status):
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
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                <?php else: ?>
                                    <p>You haven't any order yet. <a href="<?php echo e(route('home')); ?>">Do Shop</a></p>
                                <?php endif; ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layouts.master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\learn_laravel\eccom\resources\views/home/account.blade.php ENDPATH**/ ?>