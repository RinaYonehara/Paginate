<style>
  p {
    background-color: #289ADC;
    color: white;
    padding: 5px 10px;
    width: 500px;
  }
</style>
<?php $__env->startSection('title', 'session.blade.php'); ?>

<?php $__env->startSection('content'); ?>
<p>セッションに保存した値:<?php echo e($data); ?></p>
<form action="/session" method="post">
  <?php echo csrf_field(); ?>
  <input type="text" name="input">
  <button>送信</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views//session.blade.php ENDPATH**/ ?>