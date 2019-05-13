<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-group"></i> User's Post</div>
        <div class="panel-body">
            
        <table class="table">
            <tr>
            <th>User</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created At</th>
            <th>Actions</th>
            </tr>

            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($post->user->name); ?></td>
                    <td><?php echo e($post->title); ?></td>
                    <td><?php echo e($post->body); ?></td>
                    <td><?php echo e($post->created_at); ?></td>

                    <td> 
                        <a href="<?php echo e(url('admin/post/edit/'.$post->id)); ?>" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a> 
                        <a href="<?php echo e(url('admin/delete/post/'.$post->id)); ?>" class="btn btn-default"><i class="fa fa-trash"></i> Delete</a> 
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>


        <?php echo e($posts->render()); ?>


        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admins', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>