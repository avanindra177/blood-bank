<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Blood Bank')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script type="text/javascript" src="<?php echo e(asset('bootstrap.min.js')); ?>"></script>

    <!-- Fonts -->
    <link href="<?php echo e(url('css/font-awesome.css')); ?>" rel='stylesheet' type='text/css'>
    <link href="<?php echo e(url('css/font-awesome.min.css')); ?>" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="<?php echo e(url('custom.css')); ?>" rel="stylesheet">
    <!-- <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet"> -->
    
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                 <a class="navbar-brand"> <!-- href="<?php echo e(url('/')); ?>"> -->
                    <?php echo e(config('app.name', 'Blood Bank')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <?php if(Auth::user()): ?>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href=" <?php echo e(url('/donors')); ?> ">Donors</a></li>
                            <li class="nav-item"><a class="nav-link" href="/about">About Blood</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/request-blood')); ?>">Request Blood</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/who-needs-blood')); ?>">Who needs blood?</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/center')); ?>">Blood Center</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                        </ul>
                    <?php else: ?>
                        <ul class="navbar-nav mr-auto">
                        </ul>
                    <?php endif; ?>

                    <!-- <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="/posts">Blog</a></li>
                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script> -->

</html>