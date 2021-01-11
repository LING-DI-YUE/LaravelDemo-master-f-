<body style="background-color:#ccffff
;">
列舉所有商品

<hr />

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php echo e($post->content); ?>


    <hr />

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body><?php /**PATH C:\UniServerZ\www\LaravelDemo-master2\resources\views/posts/index.blade.php ENDPATH**/ ?>