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
<?php $__env->startSection('title', 'book.index.blade.php'); ?>

<?php $__env->startSection('content'); ?>
<table>
  <tr>
    <th>Books</th>
  </tr>
  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td>
      <?php echo e($item->getTitle()); ?>

    </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/book/index.blade.php ENDPATH**/ ?>