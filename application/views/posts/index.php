<div class="row">
	<h1 class="display-3"><?php echo $title; ?></h1>
	<p><a href="<?php echo base_url() ?>posts/create" class="btn btn-primary">Create Post</a></p>
	<?php foreach ($posts as $post ) { ?>
	<div class="col-md-12">
		<div class="card mt-4">
			<div class="card-body">
				<h2><?php echo $post['title']; ?></h2>
				<h4><?php echo $post['category_name']; ?></h4>
				<p><?php echo $post['body']; ?></p>
				<a href="<?php echo site_url('/posts/view/'.$post['post_id']); ?>">View Post</a>
			</div>
		</div>	
	</div>
	<?php } ?>
</div>
<div class="pagination-links">
</div>