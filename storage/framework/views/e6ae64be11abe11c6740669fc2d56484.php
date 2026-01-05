

<?php $__env->startSection('title', 'Items List'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Items List</h1>
    
    <div class="mb-3">
        <a href="<?php echo e(route('items.create')); ?>" class="btn btn-primary">Add New Item</a>
    </div>

    <?php if($items->count() > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e(Str::limit($item->description, 50)); ?></td>
                        <td>$<?php echo e(number_format($item->price, 2)); ?></td>
                        <td><?php echo e($item->quantity); ?></td>
                        <td class="actions">
                            <a href="<?php echo e(route('items.show', $item)); ?>" class="btn btn-success">View</a>
                            <a href="<?php echo e(route('items.edit', $item)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('items.destroy', $item)); ?>" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No items found. <a href="<?php echo e(route('items.create')); ?>">Create one now!</a></p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shelley\practice\resources\views/items/index.blade.php ENDPATH**/ ?>