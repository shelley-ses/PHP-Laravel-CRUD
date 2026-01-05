

<?php $__env->startSection('content'); ?>
    <h1 class="text-3xl font-bold mb-6">My Journal</h1>

    <a href="<?php echo e(route('journals.create')); ?>" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
        New Entry
    </a>

    <?php if($journals->count() > 0): ?>
        <div class="mt-4 space-y-4">
            <?php $__currentLoopData = $journals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $journal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white p-4 rounded shadow">
                    <p class="text-lg font-semibold"><?php echo e($journal->mood); ?></p>
                    <p class="text-gray-600 mt-2"><?php echo e($journal->explanation); ?></p>
                    <p class="text-sm text-gray-400 mt-2"><?php echo e($journal->created_at->format('M d, Y')); ?></p>
                    
                    <div class="mt-4 space-x-2">
                        <a href="<?php echo e(route('journals.show', $journal)); ?>" class="text-blue-500">View</a>
                        <a href="<?php echo e(route('journals.edit', $journal)); ?>" class="text-yellow-500">Edit</a>
                        <form action="<?php echo e(route('journals.destroy', $journal)); ?>" method="POST" class="inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-500" onclick="return confirm('Delete this entry?')">Delete</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>
        <p class="mt-4 text-gray-500">No journal entries yet.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shelley\practice\resources\views/journals/index.blade.php ENDPATH**/ ?>