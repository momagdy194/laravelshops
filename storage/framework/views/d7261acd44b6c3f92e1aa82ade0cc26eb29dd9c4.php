<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/5e09712e33.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo e(config('app.name', 'Laravel')); ?>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

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
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">



                                <a class="dropdown-item" href="<?php echo e(route('unites')); ?>">
                                    <?php echo e(__('unites')); ?>


                                </a>


                                <a class="dropdown-item" href="<?php echo e(route('categories')); ?>">
                                    <?php echo e(__('categories')); ?>



                                </a>

                                <a class="dropdown-item" href="<?php echo e(route('product')); ?>">
                                    <?php echo e(__('product')); ?>

                                </a>


                                <a class="dropdown-item" href="<?php echo e(route('tags')); ?>">
                                    <?php echo e(__('tags')); ?>

                                </a>


                                <a class="dropdown-item" href="<?php echo e(route('payment')); ?>">
                                    <?php echo e(__('payment')); ?>

                                </a>


                                <a class="dropdown-item" href="<?php echo e(route('orders')); ?>">
                                    <?php echo e(__('orders')); ?>

                                </a>


                                <a class="dropdown-item" href="<?php echo e(route('shipment')); ?>">
                                    <?php echo e(__('shipment')); ?>

                                </a>

                                <a class="dropdown-item" href="<?php echo e(route('countries')); ?>">
                                    <?php echo e(__('countries')); ?>

                                </a>


                                <a class="dropdown-item" href="<?php echo e(route('cities')); ?>">
                                    <?php echo e(__('cities')); ?>

                                </a>


                                <a class="dropdown-item" href="<?php echo e(route('states')); ?>">
                                    <?php echo e(__('states')); ?>

                                </a>


                                <a class="dropdown-item" href="<?php echo e(route('reviews')); ?>">
                                    <?php echo e(__('reviews')); ?>

                                </a>


                                <a class="dropdown-item" href="<?php echo e(route('roles')); ?>">
                                    <?php echo e(__('roles')); ?>

                                </a>

                                <a class="dropdown-item" href="<?php echo e(route('tickets')); ?>">
                                    <?php echo e(__('tickets')); ?>

                                </a>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                      style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\generalshope\resources\views/layouts/app.blade.php ENDPATH**/ ?>