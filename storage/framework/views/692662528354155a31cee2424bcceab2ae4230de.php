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

button {
  padding: 10px 20px;
  background-color: #289ADC;
  border: none;
  color: white;
}
</style>
<?php $__env->startSection('title', 'book.add.blade.php'); ?>

<?php $__env->startSection('content'); ?>
<?php if(count($errors) > 0): ?>
<ul>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li>
    <?php echo e($error); ?>

  </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>
<form action="/book/add" method="post">
  <table>
    <?php echo csrf_field(); ?>
    <tr>
      <th>author_id:</th>
      <td><input type="id" name="author_id"></td>
    </tr>
    <tr>
      <th>title:</th>
      <td><input type="text" name="title"></td>
    </tr>
  </table>
  <button>送信</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/book/add.blade.php ENDPATH**/ ?>