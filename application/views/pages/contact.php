<div class="content-body">
	<div class="container">
		<div class="row">
			<main class="col-md-12">
				<h1 class="page-title">Blogs</h1>
				<?php if ($blogs != null): ?>
					<?php foreach ($blogs as $key): ?>
						<?php echo $key->blog_name?>
						<?php echo $key->blog_desc?>
						<?php echo $key->blog_img?>
						<?php echo $key->blog_date?>
						<?php echo $key->blog_author?>
					<?php endforeach ?>
				<?php else: ?>
					No blogs were found here.
				<?php endif ?>
			</main>
		</div>
	</div>
</div>