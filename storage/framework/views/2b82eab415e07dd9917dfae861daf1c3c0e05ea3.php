<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-3">

                <form method="GET" action="/donors">
                    <!-- <div class="form-group"> -->
 	                    <select name="group" class="form-control">
                            <option value ="A+">A+</option>
                            <option value ="A-">A-</option>
                            <option value ="B+">B+</option>
                            <option value ="B-">B-</option>
                            <option value ="O+">O+</option>
                            <option value ="O-">O-</option>
                            <option value ="AB+">AB+</option>
                            <option value ="AB-">AB-</option>
                        </select>
                        <!-- <input type="search" name="group" class="form-control" placeholder="A+"> -->
                        <!-- <input type="text" name="group" class="form-control" placeholder="Blood group"> -->
                        <input type="submit" class="btn btn-default btn-info" value="Search">
                        </form>
                    </div>
                    
            </div>

            <!-- <div class="col-md-3">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-default btn-info" value="Search">
                        </span>
                    </div>     
                </div>
                </form>
            </div> -->
        </div>
    </div>


    <div class="row" style="margin:0 auto;">
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <div class="col-md-4">

                <div class="thumbnail">
                    <div class="caption">
                        <h3><a href="<?php echo e(url('donor/'.$user->id)); ?>"> <?php echo e(ucfirst($user->name)); ?> </a> 
                        </h3>

                        <ul class="list-group">
                            <li class="list-group-item">Blood Group : <?php echo e($user->blood); ?>ve </li>
                            <li class="list-group-item">City : <?php echo e($user->city); ?></li>
                            <li class="list-group-item">Address : <?php echo e($user->address); ?></li>
                            <li class="list-group-item">Mobile : <?php echo e($user->phone); ?></li>
                            <li class="list-group-item">Email : <?php echo e($user->email); ?></li>
                            <li class="list-group-item">Last Donated : <?php echo e(date('F d, Y h:m A', strtotime($user->last_donated))); ?></li> 
                        </ul>
                    </div>
                </div>
            </div>
    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php if(count($users) == 0): ?>
    <div class="alert alert-info">Sorry !! Currently there is no donors matching your result.</div>
    <?php endif; ?>

    <?php echo e($users->render()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>