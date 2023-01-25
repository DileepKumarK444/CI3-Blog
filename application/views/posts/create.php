<h2><?= $title;?></h2>
<?php echo validation_errors() ?>
<?php echo form_open('posts/create'); ?>
  <div class="mb-3">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placehoder="Add title">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label>Body</label>
    <textarea  class="form-control" name="body" placehoder="Add body"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>