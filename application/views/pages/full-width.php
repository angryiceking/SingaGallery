
<div class="content-body">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h6>
					<?php if ((!$this->session->has_userdata('is_signed') && $this->session->is_signed != TRUE)): ?>
						Create an account to <button class="btn btn-md btn-link">buy or post an artwork for sell.</button>
					<?php else: ?>
						<button class="btn btn-md btn-link">Add art posting.</button>
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
										<ion-icon name="heart"></ion-icon> 21 Likes 
									</p>
									<div class="read-more cl-effect-14">
										<a href="javascript:void(0)" class="more-link"><span class="meta-nav"><ion-icon name="cart"></ion-icon></span> Add to cart </a>
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