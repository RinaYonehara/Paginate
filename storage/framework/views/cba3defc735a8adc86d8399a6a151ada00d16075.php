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
<?php $__env->startSection('title', 'add.blade.php'); ?>

<?php $__env->startSection('content'); ?>
<?php if(count($errors) > 0): ?>
<p>入力に問題があります</p>
<?php endif; ?>
<form action="/add" method="post">
  <table>
  <?php echo csrf_field(); ?>
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <tr>
        <th style="background-color: red">ERROR</th>
        <td>
            <?php echo e($errors->first('name')); ?>

        </td>
    </tr>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  
    <tr>
      <th>name</th>
      <td><input type="text" name="name"></td>
    </tr>
    <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <tr>
        <th style="background-color: red">ERROR</th>
        <td>
            <?php echo e($errors->first('age')); ?>

        </td>
    </tr>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  
    <tr>
      <th>age</th>
      <td><input type="text" name="age"></td>
    </tr>
    <?php $__errorArgs = ['nationality'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <tr>
        <th style="background-color: red">ERROR</th>
        <td>
            <?php echo e($errors->first('nationality')); ?>

        </td>
    </tr>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  
    <tr>
      <th>nationality</th>
      <td><input type="text" name="nationality"></td>
    </tr>
    <tr>
      <th></th>
      <td><button>送信</button></td>
    </tr>
  </table>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/add.blade.php ENDPATH**/ ?>