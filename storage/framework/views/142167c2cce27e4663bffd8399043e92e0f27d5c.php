

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Warehouses </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/warehouses/create" title="Create a warehouse"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>ID </th>
            <th>Name</th>
            <th>Country</th>
            <th>City</th>
            <th>Address </th>
            <th>Contact person </th>
            <th>Phone</th>
            <th>Total number of items</th>
            <th>Actions</th>
        </tr>
        <?php $__currentLoopData = $warehouses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($warehouse->id); ?></td>
                <td><?php echo e($warehouse->name); ?></td>
                <td><?php echo e($warehouse->country); ?></td>
                <td><?php echo e($warehouse->city); ?></td>
                <td><?php echo e($warehouse->address); ?></td>
                <td><?php echo e($warehouse->contact_person); ?></td>
                <td><?php echo e($warehouse->phone); ?></td>
                <td><?php echo e($warehouse->total_number_of_items); ?></td>
               
                
                <td>
                    <form action="warehouses/<?php echo e($warehouse->id); ?>" method="POST">

                        <a href="warehouses/<?php echo e($warehouse->id); ?>" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="warehouses/<?php echo e($warehouse->id); ?>/edit">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" title="delete" style="border: none; background-color:transparent;" onclick="return confirm('Are you sure you want to delete this item?');">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $warehouses->links(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warehouse_management\resources\views/warehouses/index.blade.php ENDPATH**/ ?>