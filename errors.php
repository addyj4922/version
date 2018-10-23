<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
			<?php echo "<font color=\"red\">".$error."</font></br>"; ?>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
<?php  if (count($errors) == 0) : ?>
  <div class="error">
  	  <?php echo "© Version 2018-19"; ?>
  </div>
<?php  endif ?>