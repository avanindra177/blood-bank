<?php $__env->startSection('content'); ?>
  <div class="container">

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <!-- <div class="jumbotron"  style="background-image: url('images/blood1.jpg'); background-repeat: no-repeat; width:100%; height:100%; background-size:cover; background-position: center;">
        <div class="container">
          <h1 class="display-3">Blood Centers</h1>
          <p>  </p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Events &raquo;</a></p>
        </div>
      </div> -->

      <!-- Jumbotron -->
        <div class="jumbotron p-0">

          <!-- Card image -->
          <div class="view overlay rounded-top">
            <img src="<?php echo e(asset('images/blood3.jpeg')); ?>" class="img-fluid" alt="Sample image">
            <a href="#">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body text-center mb-3">

            <!-- Title -->
            <h2 class="card-title h3 my-4"><strong>Blood Centers</strong></h2>
            <!-- Text -->
            <p class="card-text py-2">A single pint can save three lives, a single gesture can create a million smiles</p>
            <!-- Button -->
            <p><a class="btn btn-primary btn-lg" href="<?php echo e(url('/center')); ?>" role="button">Blood Centers &raquo;</a></p>

          </div>

        </div>
        <!-- Jumbotron -->

      <div class="container">
        <!-- Post section -->
        <div class="card">
          <div class="card-body">
            <h1 style="float:left;">Post</h1>
              <a href="/posts/create" class="btn btn-primary" style="float:right;">Create Post</a>
          </div>
        </div>  

        <!-- Check if there are posts -->
        <?php if(count($posts) > 0): ?>
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class= "card" style="margin-top:5px;">
              <div class="card-body">
                <h3 class="card-title" style="float:left;"><a href="/posts/<?php echo e($post->id); ?>"> <?php echo e($post->title); ?></a></h3>

                <?php if(!Auth::guest()): ?>
                  <?php if(Auth::user()->id == $post->user_id): ?>
                    <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right', 'style' => 'float:right']); ?>

                      <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                      <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

                    <?php echo Form::close(); ?>

                    <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-default" style="float:right;">Edit</a>
                  <?php endif; ?>
                <?php endif; ?>

                <br><br>
                <small>On <?php echo e($post->created_at); ?> by <?php echo e($post->user->name); ?></small>
              </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php echo e($posts->links()); ?>

        <?php else: ?>
          <p>No posts.</p>
        <?php endif; ?>

      </div> <!-- /container -->

    </main>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>