<div class="content-body">
  <div class="container">
    <div class="row">
      <main class="col-md-8">
        <div class="index-slick-gallery">
          <?php foreach ($gallery as $key): ?>
            <div>
              <article class="post post-2">
                <header class="entry-header">
                  <h1 class="entry-title">
                    <img src="build/img/<?php echo $key->img?>" class="img img-center img-responsive">
                  </h1>
                  <div class="entry-meta">
                    <span class="post-category"><a href="#"><?php echo $key->title?></a></span>

                    <span class="post-author"><a href="#"><?php echo $key->artist?></a></span>

                    <span class="comments-link"><a href="#">#4 on popularity this month</a></span>
                  </div>
                </header>
                <div class="entry-content clearfix">
                  <p class="text-center"><?php echo $key->description?></p>
                  <div class="read-more cl-effect-14">
                    <a href="single.html" class="more-link"> More Details <span class="meta-nav">→</span></a>
                  </div>
                </div>
              </article>
            </div>
          <?php endforeach ?>
        </div>
      </main>
      <aside class="col-md-4">
        <div class="widget widget-recent-posts">
          <h3 class="widget-title">Marketing Widget</h3>
          <ul>
            <li>
              <a href="#">Add a painting to sell</a>
            </li>
            <li>
              <a href="#">Request some info</a>
            </li>
            <li>
              <a href="#">Contact the developers</a>
            </li>
          </ul>
        </div>
      </aside>
    </div>
  </div>
</div>

