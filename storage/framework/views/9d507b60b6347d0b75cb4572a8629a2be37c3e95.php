<title>SUZUKI</title>
<body style="">

<div style="background-color:#0053a5;color:white;">
<hr />

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php echo e($post->content); ?>


    <hr />

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</body>
<br>
<input style="background-color:white;color:black;" type ="button" onclick="javascript:location.href='http://localhost:888/LaravelDemo-master(f)/public/'" value="回到首頁"></input><?php /**PATH C:\Users\Asus\Desktop\UniServerZ\www\LaravelDemo-master(f)\resources\views/posts/index.blade.php ENDPATH**/ ?>