

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Items</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/items/create" title="Create a item"> <i class="fas fa-plus-circle"></i>
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
            <th>Warehouse</th>
            <th>Name</th>
            <th>Barcode</th>
            <th>Actions</th>
        </tr>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->warehouse->name); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->barcode); ?></td>
                                                             
                <td>
                    <form action="items/<?php echo e($item->id); ?>" method="POST">

                        <a href="items/<?php echo e($item->id); ?>" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="items/<?php echo e($item->id); ?>/edit">
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

    <?php echo $items->links(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warehouse_management\resources\views/items/index.blade.php ENDPATH**/ ?>