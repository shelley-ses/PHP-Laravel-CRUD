

<?php $__env->startSection('title', 'Create Item'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Create New Item</h1>

    <form action="<?php echo e(route('items.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="4"><?php echo e(old('description')); ?></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" value="<?php echo e(old('price')); ?>" step="0.01" min="0" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" value="<?php echo e(old('quantity', 0)); ?>" min="0" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Item</button>
            <a href="<?php echo e(route('items.index')); ?>" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shelley\practice\resources\views/items/create.blade.php ENDPATH**/ ?>