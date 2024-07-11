<?php echo form_open('posts/update'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="hidden" name="post_id" value="<?php echo $post['post_id']; ?>">
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
      <?php foreach ($categories as $category) { ?>
        <option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" name="body" placeholder="Add Body"><?php echo $post['body']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>