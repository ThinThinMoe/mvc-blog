<div class="col-md-10 offset-md-1 mt-2">
	<h1><?=$data->title?></h1>
	<small>
		<i >
			posted by <?=$data->user?>,
			Date <?=$data->modified_date?>,
			type: <?=$data->category?>
		</i>
	</small>
	<p class="mt-2"><?=$data->content?></p>
</div>

<div class="col-md-8 offset-md-2 mt-4">
<!-- commnet Box -->
<?php if (getSession('user_name')): ?>
<form action="<?=PATH?>comment/create" method="post">
	<div class="form-group">
		<input type="hidden" name="user_id" value="<?=getSession('user_id')?>">
		<input type="hidden" name="post_id" value="<?=$data->id?>">
	   	<label for="exampleFormControlTextarea1">Comment:</label>
	   	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>
	</div>
	<div class="clearfix">
	 <button type="submit" class="btn btn-outline-dark float-right">Comment</button>
	</div>
</form>
<?php endif;?>

<!-- comment -->

<?php 
foreach ($data->comments as $comment): 
?>
<div class="card mt-4">
	<div class="card-body">
		<div class="row">
			<img src="<?=PATH?>imgs/dummy-person.jpg" alt="..." class="rounded-circle mx-3" style="width: 50px;height: 50px;">
			<div class="">
				<span><?=$comment->user?></span><br>
				<small class=""><?=$comment->modified_date?></small>
			</div>
		</div>
    	<p class="m-0 mt-2"><?=$comment->body?></p>
  	</div>
</div>
<?php 
endforeach;
?>


</div>

