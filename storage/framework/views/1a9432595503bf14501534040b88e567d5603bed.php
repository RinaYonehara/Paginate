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
  button {
    padding: 10px 20px;
    background-color: #289ADC;
    border: none;
    color: white;
  }
</style>
<?php $__env->startSection('title', 'delete.blade.php'); ?>

<?php $__env->startSection('content'); ?>
<table>
    <tr>
      <th>id</th>
      <td><?php echo e($author->id); ?></td>
    </tr>
    <tr>
      <th>name</th>
      <td><?php echo e($author->name); ?></td>
    </tr>
    <tr>
      <th>age</th>
      <td><?php echo e($author->age); ?></td>
    </tr>
    <tr>
      <th>nationality</th>
      <td><?php echo e($author->nationality); ?></td>
    </tr>
    <tr>
      <th></th>
      <td>
        <form action="/delete?id=<?php echo e($author->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button>送信</button>
        </form>
    </td>
    </tr>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/delete.blade.php ENDPATH**/ ?>