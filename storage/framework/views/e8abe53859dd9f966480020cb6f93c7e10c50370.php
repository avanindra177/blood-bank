<?php $__env->startSection('content'); ?>
  <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-ticket"></i> Edit User</div>

      <div class="panel-body">
      

        <form action="<?php echo e(url('admin/user/edit/'.$user->id)); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        
          <div class="form-group">
            Name
            <p class="hint--top" data-hint="Name" id="input-field">
              <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>"   placeholder="Name">
            </p>
          </div>

          <div class="form-group">
            Address
            <p class="hint--top" data-hint="Address" id="input-field">
              <textarea name="address" placeholder="Address" class="form-control"><?php echo e($user->address); ?></textarea>
            </p>
          </div>

          <div class="form-group">
            City
            <p class="hint--top" data-hint="City" id="input-field">     
              <input type="text" name="city" class="form-control" value="<?php echo e($user->city); ?>" placeholder="City">
            </p>
          </div>

          <div class="form-group">
            Phone
            <p class="hint--top" data-hint="Phone" id="input-field">
              <input type="phone" name="phone" class="form-control" value="<?php echo e($user->phone); ?>" placeholder="Phone">
            </p>
          </div>

          <div class="form-group">
            <p class="hint--top" data-hint="Donate" id="input-field">
              <select name="is_donor" class="form-control" value="<?php echo e($user->is_donor); ?>" required="">
                <!-- <option selected disabled> Available for dontaion </option>           -->
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
            </p>
          </div>

          <input type="submit" class="btn btn-default"  value="Submit">
        </form>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admins', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>