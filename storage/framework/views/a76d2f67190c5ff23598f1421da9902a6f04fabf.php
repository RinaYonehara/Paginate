<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
<?php $__env->startSection('title', 'find.blade.php'); ?>

<?php $__env->startSection('content'); ?>
<form action="find" method="POST">
<?php echo csrf_field(); ?>
  <input type="text" name="input" value="<?php echo e($input); ?>">
  <input type="submit" value="見つける">
</form>
<?php if(@isset($item)): ?>
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>age</th>
    <th>nationality</th>
  </tr>
  <tr>
    <td><?php echo e($item->id); ?></td>
    <td><?php echo e($item->name); ?></td>
    <td><?php echo e($item->age); ?></td>
    <td><?php echo e($item->nationality); ?></td>
  </tr>
</table>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/find.blade.php ENDPATH**/ ?>