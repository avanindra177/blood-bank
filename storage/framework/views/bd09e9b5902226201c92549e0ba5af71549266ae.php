<?php $__env->startSection('content'); ?>
 
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="margin:0 auto;">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Blood Center
                    <div class="pull-right" style="float:right;"><a href="<?php echo e(url('center/new')); ?>">Submit Blood Center</a></div>
                </div> 
                <div class="panel-body">
                    <table class="table"> 
                        <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>District</th>
                        <th>Place</th>
                        </tr>
                        <?php $__currentLoopData = $centers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $center): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($center->name); ?> </td>
                            <td> <?php echo e($center->phone); ?> </td>
                            <td> <?php echo e($center->city); ?> </td>
                            <td> <?php echo e($center->district); ?> </td>
                            <td> <?php echo e($center->place); ?> </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>