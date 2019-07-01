<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="margin:0 auto;">
            <div class="panel panel-default">
                <div class="panel-heading">New Center</div>

                <div class="panel-body">
                    <form action="<?php echo e(url('center/new')); ?>" method="post" >
                    <?php echo e(csrf_field()); ?>

  
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" class="form-control" required></input>
                    </div> 

                    <div class="form-group">
                        <input type="phone" name="phone" placeholder="Phone" class="form-control" required></input>
                    </div> 

                    <div class="form-group">
                        <input type="text" name="city" placeholder="City" class="form-control" required></input>
                    </div>

                    <div class="form-group">
                        <input type="text" name="district" placeholder="District" class="form-control" required></input>
                    </div>

                    <div class="form-group">
                        <input type="text" name="place" placeholder="Place" class="form-control" required></input>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Submit"  value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>