<?php $__env->startSection('content'); ?> 
<div class="container">
    <!-- <div class="row"> -->
        <!-- <div class="col-md-3">

            <form method="GET" action="">
                <div class="form-group">
                    <select name="group" class="form-control">
                        <option value ="A +">A +</option>
                        <option value ="A -">A -</option>
                        <option value ="B +">B +</option>
                        <option value ="B -">B -</option>
                        <option value ="O +">O +</option>
                        <option value ="O -">O -</option>
                        <option value ="AB +">AB +</option>
                        <option value ="AB -">AB -</option>
                    </select>
                </div>
 
        </div> -->

        <!-- <div class="col-md-3">
            <div class="form-group">
                <input name="state" class="form-control" placeholder="State" required >
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <input name="district" class="form-control" placeholder="District" required >
            </div>
        </div> -->

        <!-- <div class="col-md-3">
            <div class="form-group">
                <div class="input-group">
                    <input name="city" class="form-control" placeholder="City" required >
                    <span class="input-group-btn">
                        <input type="submit" class="btn btn-default btn-info" value="Search">
                    </span>
                </div>           
            </div>

            </form>

        </div> -->
    <!-- </div> -->

    <div class="panel panel-default">
        <div class="panel-heading">Who Needs Blood ?</div>
            <div class="panel-body">

                <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="thumbnail">
                        <div class="panel-content">
                            <h3> <a href="<?php echo e(url('request-details/'.$request->id)); ?>"> <?php echo e(ucfirst($request->patient)); ?> - <?php echo e($request->group); ?>ve </a> </h3>

                            <ul class="list-group">
                                <li class="list-group-item">Blood Group : <?php echo e($request->group); ?>ve </li> 
                                <li class="list-group-item">City : <?php echo e($request->city); ?> </li> 
                                <li class="list-group-item">Address : <?php echo e($request->location); ?> </li>
                            </ul> 
                        </div>
                    </div>
                <br>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
            </div>
        </div>
    </div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>