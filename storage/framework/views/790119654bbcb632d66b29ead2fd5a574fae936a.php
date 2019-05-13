<?php $__env->startSection('content'); ?>
 

  <div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-ticket"></i> Blood Center</div>

    <div class="panel-body">
      <table class="table">
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>City</th>
          <th>District</th>
          <th>Actions</th>
        </tr>


        <?php $__currentLoopData = $centers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $center): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td><?php echo e($center->name); ?></td>
              <td><?php echo e($center->phone); ?></td>
              <td><?php echo e($center->city); ?></td>
              <td><?php echo e($center->district); ?></td>
              <!-- <td><?php echo e($center->district); ?></td> -->
              
              <td> 
                <a href="<?php echo e(url('admin/center/edit/'.$center->id)); ?>" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a> 
                <a href="<?php echo e(url('admin/delete/center/'.$center->id)); ?>" class="btn btn-default"><i class="fa fa-trash"></i> Delete</a> 
              </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <?php if(count($centers) == 0): ?>
          <tr>
            <td colspan=6>There is no blood centers.</td>
          </tr>
        <?php endif; ?>

      </table>


      <?php echo e($centers->render()); ?>


    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admins', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>