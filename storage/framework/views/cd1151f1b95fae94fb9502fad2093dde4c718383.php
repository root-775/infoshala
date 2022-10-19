<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>

<!-- header section -->
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>
<body>




        <?php echo $__env->yieldContent('content'); ?>


<!-- footer section -->
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH /home/amit/Desktop/newfolder/infoshala/resources/views/layouts/app.blade.php ENDPATH**/ ?>