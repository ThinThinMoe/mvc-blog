<main class="container mt-2">

      <div class="row">

        <div class="col-md-9">
          <div class="row">

          	<?php foreach($data[0] as $post): ?>
            <div class="col-md-6">
              <h2><?= $post->title ?></h2>
              <p><?= substr($post->content, 0, 200) ?></p>
              <p><a class="btn btn-outline-dark" href="<?= PATH ?>home/show/<?= $post->id ?>">View details &raquo;</a></p>
            </div>
            <?php endforeach; ?>

          </div><!--/row-->
        </div><!--/span-->

        <div class="col-md-3">
          <div class="list-group">
            <a href="<?= PATH ?>" class="list-group-item bg-dark text-white">All</a>
			<?php foreach($data[1] as $cat): ?>
            	<a href="<?= PATH ?>home/cat/<?= $cat->id ?>" class="list-group-item text-dark">
            		<?= $cat->name ?>
            	</a>
			<?php endforeach; ?>
          </div>
        </div><!--/span-->
      </div><!--/row-->

      

</main><!--/.container-->

