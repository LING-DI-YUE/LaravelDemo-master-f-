<body style="background-color:#ccffff
;">
列舉所有商品

<hr />

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php echo e($post->content); ?>


    <hr />

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
<br>
<input type ="button" onclick="javascript:location.href='http://localhost:888/LaravelDemo-master(f)/public/'" value="回到首頁"></input><?php /**PATH C:\UniServerZ\www\LaravelDemo-master(f)\resources\views/posts/index.blade.php ENDPATH**/ ?>