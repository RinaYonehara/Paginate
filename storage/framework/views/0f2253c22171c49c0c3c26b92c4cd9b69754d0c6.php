<style>
th {
  background-color: #289ADC;
  color: white;
  padding: 5px 40px;
}
tr:nth-child(odd) td{
  background-color: #FFFFFF;
}
td {
  padding: 25px 40px;
  background-color: #EEEEEE;
  text-align: center;
}
</style>
<?php $__env->startSection('title', 'binds.blade.php'); ?>

<?php $__env->startSection('content'); ?>
<p>Author</p>
<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>AGE</th>
    <th>NATIONALITY</th>
  </tr>
  <tr>
    <td> <?php echo e($item->id); ?> </td>
    <td> <?php echo e($item->name); ?> </td>
    <td> <?php echo e($item->age); ?> </td>
    <td> <?php echo e($item->nationality); ?> </td>
  </tr>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/author/binds.blade.php ENDPATH**/ ?>