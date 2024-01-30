 <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
    body {
        font-size:16px;
        margin: 5px;
    }
    h1 {
        font-size:60px;
        color:white;
        text-shadow:1px 0 5px #289ADC;
        letter-spacing:-4px;
        margin-left: 10px
    }
    .content {
        margin:10px;
    }
    </style>
</head>
<body>
    <h1><?php echo $__env->yieldContent('title'); ?></h1>
    <div class="content">
    <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html><?php /**PATH /var/www/resources/views/layouts/default.blade.php ENDPATH**/ ?>