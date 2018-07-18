<div class="container mt-2">
	<div class="row">
		<div class="col-md-4 mb-2">
			<!-- Sidebar -->
			<?php include ROOT.DS.'app'.DS.'views'.DS.'layouts'.DS.'sidebar.php' ?>
		</div>
		<div class="col-md-8">
			<?= flash('alert') ?>
			<ul class="list-group">
				<li class="list-group-item list-group-item-dark"> <!-- header -->
					Category List
					<a href="<?= PATH?>category/create" class="float-right">
						<i class="far fa-plus-square"></i>&nbsp;New Category
					</a>
				</li>
				
				<?php foreach($data as $category): ?> <!-- list -->
				<li class="list-group-item">
					<div class="row justify-content-between px-2">
						<span class="text-muted">
							<?= $category->name ?>
						</span>
						<small>
							<a href="<?= PATH?>category/delete/<?= $category->id?>" class="text-danger mr-2" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i>&nbsp;Del</a>
							<a href="<?= PATH?>category/edit/<?= $category->id?>" class="text-info"><i class="fas fa-edit"></i>&nbsp;Edit</a>
						</small>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
