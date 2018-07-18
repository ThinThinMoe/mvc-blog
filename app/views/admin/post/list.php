<div class="container mt-2">
	<div class="row">
		<div class="col-md-4 mb-2P">
			<!-- Sidebar -->
			<?php include ROOT.DS.'app'.DS.'views'.DS.'layouts'.DS.'sidebar.php' ?>
		</div>
		<div class="col-md-8">
			<?= flash('alert') ?>

			<ul class="list-group">
				<li class="list-group-item list-group-item-dark"> <!-- header -->
					Post List
					<a href="<?= PATH?>post/create" class="float-right">
						<i class="far fa-plus-square"></i>&nbsp;New Post
					</a>
				</li>
				
				<?php foreach($data as $post): ?> <!-- list -->
				<li class="list-group-item">
					<div class="row justify-content-between px-2">
						<a href="<?= PATH?>post/show/<?= $post->id?>" class="text-muted">
							<?= $post->title ?>
						</a>
						<small>
							<a href="<?= PATH?>post/delete/<?= $post->id?>" class="text-danger mr-2" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i>&nbsp;Del</a>
							<a href="<?= PATH?>post/edit/<?= $post->id?>" class="text-info"><i class="fas fa-edit"></i>&nbsp;Edit</a>
						</small>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>

		</div>
		</div>
	</div>
</div>
