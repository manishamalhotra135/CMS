<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-end my-2">
	<a href="<?php echo e(route('post.create')); ?>" class="btn btn-success float-right">Add Post</a>
</div>

<div class="card card-default">

	<div class="card-header">Posts</div>
	<div class="card-body">
		
		<table class="table">
			
			<thead>

				<th>Image</th>
				<th>Title</th>
				<th>Content</th>
				<th>Description</th>
				<th></th>
				<th></th>

			</thead>
			<tbody>
				
				<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<td>
					<img src="<?php echo e(asset($post->image)); ?>" width="60px" height="60px">
				</td>
				<td>
					<?php echo e($post->title); ?>

				</td>
				<td><?php echo e($post->content); ?></td>
				<td><?php echo e($post->description); ?></td>
				<td>
					<a href="" class="btn btn-info btn-sm">Edit</a>
				</td>
				<td>
					<a href="" class="btn btn-danger btn-sm">Trash</a>
				</td>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\blog\resources\views/post/index.blade.php ENDPATH**/ ?>