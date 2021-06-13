<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
            
  <table class="table table-striped">
    <thead>
      <tr>
	  <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
		<th>img</th>
		<th>phone</th>
		<th>date</th>
		<th>role</th>
		<th>Action</th>
		
      </tr>
    </thead>
    <tbody>
     
	  <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key  => $carts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
	 <td><?php echo e($key+1); ?></td>
	  <td><?php echo e($carts[0]); ?></td>
	  <td><?php echo e($carts[1]); ?></td>
	  <td><?php echo e($carts[2]); ?></td>
	  <td><?php echo e($carts[3]); ?></td>
	  <td><?php echo e($carts[4]); ?></td>
	  <td><?php echo e($carts[5]); ?></td>
	  <td><?php echo e($carts[6]); ?></td>
	  
	  
	  
	  
	  
	  
	 <td><a href=<?php echo e(url('edit', $key+1)); ?>>edit</a>     <a href="<?php echo e(url('delete',$key+1)); ?>">Detele</a></td>
        
      </tr>
	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </tbody>
  </table>
  
  <a href="<?php echo e(url('/finaldata')); ?>" type="submit"  class="btn btn-default">final submit</a>

</div>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\blog\resources\views/task/show.blade.php ENDPATH**/ ?>