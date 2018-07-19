<script type="text/javascript" src="build/scripts/__gallery-script.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.comment').keyup(function(e){
			e.preventDefault();
			if (e.keyCode == 13) {
				var artid = $(this).attr('data-attr-art-id');
				var comment = $(this).val();
				var id = $(this).attr('data-attr-art-id');
				var user = $(this).attr('data-attr-user-id');
				$.ajax({
					url: 'gallery/art/comment',
					type: 'POST',
					data: {comment: comment, id: id, user: user },
					dataType: 'html',
					success: function(msg) {
						$('#comment_section'+artid).html('');
						get_comments(artid);
					}
				})
			}
		});

		$('.like').click(function(e){
			e.preventDefault();
			var artid = $(this).attr('data-attr-art-id');
			var userid = $(this).attr('data-attr-user-id');
			$.ajax({
				url: 'gallery/art/like/',
				type: 'POST',
				dataType: 'text',
				data: {artid : artid, userid: userid},
				success:function(){
					get_likes(artid);
				}
			})
		})

		function get_comments(id) {
			$.ajax({
				url: 'gallery/comments/'+id,
				type: 'GET',
				dataType: 'html',
				success: function(msg) {
					$('#comment_section'+id).html('');
					$('#comment_section'+id).html(msg);
				}
			})
		}

		function get_likes(id) {
			$.ajax({
				url: 'gallery/likes/'+id,
				type: 'POST',
				dataType: 'text',
				success:function(msg) {
					$('#like_count'+id).html('');
					$('#like_count'+id).html(msg);
				}
			})
		}
	})
</script>
<div class="content-body">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h6>
					<?php if ((!$this->session->has_userdata('is_signed') && $this->session->is_signed != TRUE)): ?>
						Create an account to <button class="btn btn-md btn-link">buy or post an artwork for sell.</button>
					<?php else: ?>
						Wanna sell an art? <button class="btn btn-md btn-link">Add art posting.</button>
					<?php endif ?>
				</h6>
			</div>
			<main class="col-md-12 text-center center-block">
				<div class="nr-gallery-slick-gallery">
					<?php foreach ($gallery as $key): ?>
						<div class="caption">
							<div class="col-md-8">
								<article class="post post-2">
									<header class="entry-header lg-item" data-src="build/img/<?php echo $key->img?>">
										<h1 class="entry-title">
											<a href="build/img/<?php echo $key->img?>">
												<img src="build/img/<?php echo $key->img?>" class="img img-center center-block img-responsive">
											</a>
										</h1>
										<div class="entry-meta">
											<span class="post-category"><a href="#"><?php echo $key->title?></a></span>

											<span class="post-author"><a href="#"><?php echo $key->artist?></a></span>

											<span class="comments-link"><a href="#">#4 on popularity this month</a></span>
										</div>
									</header>
								</article>
							</div>
							<div class="col-md-4">
								<br/>
								<br/>
								<br/>
								<span class="post-category"><a href="#"><strong><?php echo $key->title?></strong></a></span>
								<span class="comments-link"><a href="#"><strong><?php echo $key->artist?></strong></a></span>
								<div class="entry-content clearfix">
									<br/>
									<p class="text-left">
										<?php echo $key->description?>
									</p>
									<hr>
									<p class="text-left">
										<strong>Medium: </strong><br/>
										<?php echo $key->medium?>
									</p>
									<hr>
									<p class="text-left">
										<strong>Size: </strong><br/>
										<?php echo $key->size?>
									</p>
									<hr>
									<p class="text-left">
										<strong>Price: </strong><br/>
										<?php echo $key->price?>
									</p>
									<br/>
									<p class="text-left">
										<?php if ((!$this->session->has_userdata('is_signed') && $this->session->is_signed != TRUE)): ?>
											<small data-toggle="tooltip" title="Create a free account to like this art."><ion-icon name="heart"></ion-icon> 
												<strong id="like_count<?php echo $key->id?>"></strong> Likes
											</small>
										<?php else: ?>
											<button class="btn btn-md btn-link like" data-attr-art-id="<?php echo $key->id?>" data-attr-user-id="<?php echo $key->id?>" id="like" data-toggle="tooltip" title="Leave a like if you find it great."><ion-icon name="heart"></ion-icon>
												<strong id="like_count<?php echo $key->id?>"></strong> Likes
											</button> 
										<?php endif ?>
									</p>
									<div class="read-more cl-effect-14">
										<a href="javascript:void(0)" class="more-link"><span class="meta-nav"><ion-icon name="cart"></ion-icon></span> Contact the Seller </a>
									</div>
									<br/>
									<script type="text/javascript">

										function get_likes() {
											$.ajax({
												url: 'gallery/likes/'+<?php echo $key->id?>,
												type: 'POST',
												dataType: 'text',
												success:function(msg) {
													console.log(msg);
													$('#like_count'+<?php echo $key->id?>).html('');
													$('#like_count'+<?php echo $key->id?>).html(msg);
												}
											})
										}

										get_likes();
										function get_comments() {
											$.ajax({
												url: 'gallery/comments/'+<?php echo $key->id?>,
												type: 'GET',
												dataType: 'html',
												success: function(msg) {
													$('#comment_section'+<?php echo $key->id?>).html('');
													$('#comment_section'+<?php echo $key->id?>).html(msg);
												}
											})
										}
										get_comments();
									</script>
									<div id="comment_section<?php echo $key->id?>">
									</div>
									<div id="input_section<?php echo $key->id?>">
										<small><input type="text" class="form-control comment" data-attr-art-id="<?php echo $key->id?>" data-attr-user-id="<?php echo $key->id?>" name="comment<?php echo $key->id?>" id="comment<?php echo $key->id?>" placeholder="leave a comment."></small>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</main>
		</div>
	</div>
</div>