

<?php $__env->startSection('content'); ?>
    <h1 class="text-3xl font-bold mb-6">New Journal Entry</h1>

    <form action="<?php echo e(route('journals.store')); ?>" method="POST" class="bg-white p-6 rounded shadow">
        <?php echo csrf_field(); ?>

        <div class="mb-4">
            <label for="mood" class="block font-semibold mb-2">Mood Today</label>
            <input type="text" name="mood" id="mood" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="explanation" class="block font-semibold mb-2">Explanation</label>
            <textarea name="explanation" id="explanation" rows="4" class="w-full border p-2 rounded" required></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
        <a href="<?php echo e(route('journals.index')); ?>" class="ml-2 text-gray-500">Cancel</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shelley\practice\resources\views/journals/create.blade.php ENDPATH**/ ?>