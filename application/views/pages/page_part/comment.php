<?php if ($comment != null): ?>
	<p class="text-left">
		<?php foreach ($comment as $x => $key): ?>
			<?php 
		// if ($x < 99): 
			?>
			<small><strong><?php echo $key->nickname?></strong> <?php echo $key->comment; ?></small><br/>
			<?php 
		// endif
			?>
		<?php endforeach ?>
		<a href="#" class="btn btn-link">view more comments</a>
	</p>
<?php else: ?>

<?php endif ?>