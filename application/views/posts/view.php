<h1><?php echo $post['title']; ?></h1>
<p><?php echo $post['body']; ?></p>

<?php echo form_open('posts/delete/'.$post['post_id']); ?>
	<input type="submit" class="btn btn-danger" value="Delete">
</form>
<a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['post_id'];?>" class="btn btn-primary">Edit</a>