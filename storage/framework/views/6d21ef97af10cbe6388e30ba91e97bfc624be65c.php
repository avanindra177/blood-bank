<?php $__env->startSection('content'); ?>
 

    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-ticket"></i> Edit Post</div>

        <div class="panel-body">
        

            <form action="<?php echo e(url('admin/post/edit/'.$post->id)); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

         
                <!--<div class="form-group">
                    User                 
                    <input type="text" name="user" class="form-control" placeholder="User" value="<?php echo e($post->user_id); ?>">
                </div> -->


                <div class="form-group">
                    Title                 
                    <input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo e($post->title); ?>">
                </div>



                <div class="form-group">
                    Body                 
                    <input type="text" name="body" class="form-control" placeholder="Body" value="<?php echo e($post->body); ?>">
                </div>


        
                <div class="form-group">
                    <input type="submit" class="btn btn-default"  value="Submit">
                </div>

            </form>
        </div>
    
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admins', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>