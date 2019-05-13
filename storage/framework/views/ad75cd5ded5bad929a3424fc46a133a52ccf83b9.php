<?php if(count($errors) > 0): ?>
    <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class= "alert alert-danger" role="alert" style="width:65%; margin:0 auto;">
            <?php echo e($error); ?>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(session('success')): ?>
        <div class= "alert alert-success" role="alert" style="width:65%; margin:0 auto;">
            <?php echo e(session('success')); ?>

        </div>
<?php endif; ?>

<?php if(session('error')): ?>
        <div class= "alert alert-danger" role="alert" style="width:65%; margin:0 auto;">
            <?php echo e(session('error')); ?>

        </div>
<?php endif; ?>