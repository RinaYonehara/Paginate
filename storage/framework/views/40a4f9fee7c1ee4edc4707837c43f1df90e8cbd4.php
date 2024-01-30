<style>
th {
  background-color: #289ADC;
  color: white;
  padding: 5px 40px;
}

tr:nth-child(odd) td {
  background-color: #FFFFFF;
}

td table {
  margin: 0 auto;
}

td {
  padding: 25px 40px;
  background-color: #EEEEEE;
  text-align: center;
}

td table tbody tr td {
  background-color: #EEEEEE !important;
}
</style>
<?php $__env->startSection('title', 'author.index.blade.php'); ?>

<?php $__env->startSection('content'); ?>
<table>
  <tr>
    <th>Author</th>
    <th>Book</th>
  </tr>
  <?php $__currentLoopData = $hasItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td>
      <?php echo e($item->getDetail()); ?>

    </td>
    <td>
      <table>
        <?php $__currentLoopData = $item->books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($obj->getTitle()); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<table>
  <tr>
    <th>Author</th>
  </tr>
  <?php $__currentLoopData = $noItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($item->getDetail()); ?></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/author/index.blade.php ENDPATH**/ ?>