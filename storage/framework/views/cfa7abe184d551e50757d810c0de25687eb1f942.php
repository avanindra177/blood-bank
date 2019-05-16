<?php $__env->startSection('content'); ?>
    <div class="card" style="width:80%; margin:0 auto;">
        <div class="card-body">
            <h1>Edit Post</h1>
            <?php echo Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']); ?>

                <div class = "form-group">
                    <?php echo Form::label('title', 'Title'); ?>

                    <?php echo Form::text('title', $post->title, ['class' => 'form-control']); ?>

                </div>

                <div class = "form-group">
                    <?php echo Form::label('body', 'Body'); ?>

                    <?php echo Form::textarea('body',  $post->body, ['class' => 'form-control']); ?>

                </div>

                <?php echo Form::hidden('_method', 'PUT'); ?>

                <?php echo Form::submit('Submit', ['class' => 'btn btn-primary']); ?>

            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>