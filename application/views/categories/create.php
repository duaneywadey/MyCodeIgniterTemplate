<?php echo validation_errors(); ?>

<?php echo form_open('categories/create'); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" name="category_name" placeholder="Enter name">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>