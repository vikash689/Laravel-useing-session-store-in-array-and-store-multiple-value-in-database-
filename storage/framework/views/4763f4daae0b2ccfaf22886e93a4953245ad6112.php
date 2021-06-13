<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		
		

        <!-- Styles -->
       <form method="POST" action="<?php echo e(url('/edits',$id)); ?>" enctype="multipart/form-data">
	   <?php if($errors->any()): ?>
			<div class="alert alert-danger">
				<ul>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		<?php endif; ?>
	   
	   <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">  
	   
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="name" name="name" value="<?php echo e(session('cart')[$id-1]['0']); ?>" class="form-control" id="name">
		  </div>
		  <div class="form-group">
			<label for="email">Email address:</label>
			<input type="email" name="email" value="<?php echo e(session('cart')[$id-1]['1']); ?>" class="form-control" id="email">
		  </div>
		  <div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" name="password" value="<?php echo e(session('cart')[$id-1]['2']); ?>" class="form-control" id="pwd">
		  </div>
		  
		  <div class="form-group">
			<label for="pwd">file:</label>
			<input type="file" id="file" value="<?php echo e(session('cart')[$id-1]['3']); ?>" name="file"class="form-control" accept="image/*">
			
		  </div>
		  
		  
		  <div class="form-group">
			<label for="pwd">Phone Number:</label>
			<input type="phone" name="phone"value="<?php echo e(session('cart')[$id-1]['4']); ?>" class="form-control" id="phone">
		  </div>
		  
		  
		  
		  <div class="form-group">
			<label for="pwd">Date:</label>
			<input type="date" name="date" value="<?php echo e(session('cart')[$id-1]['5']); ?>" class="form-control" id="date">
		  </div>
		  
		  
		  
		  <div class="form-group">
			<label for="pwd">Role:</label>
			<select name="role" id="role">
				<option ><?php echo e(session('cart')[$id-1]['6']); ?></option>
			  <option value="admin">admin</option>
			  <option value="user">user</option>
			 
			</select>
		  </div>
		  
		  <button type="submit" class="btn btn-default">Edit</button>
		</form>
    </head>
    <body>
        
    </body>
</html>
<?php /**PATH D:\xampp\htdocs\blog\resources\views/task/edit.blade.php ENDPATH**/ ?>