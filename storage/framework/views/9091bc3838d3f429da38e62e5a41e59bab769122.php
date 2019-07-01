<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-group"></i>Contact</div>
        <div class="panel-body">
            
        <table class="table">
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Body</th>
            <th>Created At</th>
            <!-- <th>Actions</th> -->
            </tr>

            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($contact->name); ?></td>
                    <td><?php echo e($contact->email); ?></td>
                    <td><?php echo e($contact->subject); ?></td>
                    <td><?php echo e($contact->body); ?></td>
                    <td><?php echo e($contact->created_at); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>


        <?php echo e($contacts->render()); ?>


        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admins', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>