<?php $__env->startSection('content'); ?>

<div class="card card-default">
	<div class="card-header">
		Create Posts
	</div>
	<div class="card-body">
		<form action="<?php echo e(route('post.store')); ?>" method="POST" enctype="multiple/form-data">
			<?php echo csrf_field(); ?>
			<div class="form-group">
				<labe for="title">Title</label>
					<input type="text" name="title" id="title" class="form-control">
			</div>
			<div class="form-group">
				<labe for="description">Description</label>
					<textarea name="description" id="description" cols="5" rows="5" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<labe for="content">Content</label>
					<textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="image" id="image" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Create Post</button>				
			</div>
		</form>
	</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\blog\resources\views/post/create.blade.php ENDPATH**/ ?>