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

<div class="modal fade" id="login" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Login your account</h4>
      </div>
      <div class="modal-body">
        <div id="login-div">
          <div>
            <form id="login" method="POST" class="form-horizontal">
              <p><h6>Use your account if you want to buy or to post an artwork for sell.</h6></p>
              <hr>
              <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="username" name="username" placeholder="ex: myusernamedoesnotsucks">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
                    <button type="submit" class="btn btn-default">Sign in</button>
                    <h6 class="pull-right"> <a href="#" id="register-toggle" class="btn btn-md btn-info">Register for an account.</a></h6>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div id="register-div" style="display:none">
          <div>
            <form id="register" method="POST" class="form-horizontal">
              <p><h4>Registrating an account for free.</h4></p>
              <p><h6>You can always create a free account to post items inside the site. Please input your correct information on how to contact you.</h6></p>
              <hr>
              <div class="form-group">
                <label for="reg_username" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" required class="form-control" id="reg_username" name="reg_username" placeholder="ex: WackyArtPotato">
                </div>
              </div>
              <div class="form-group">
                <label for="reg_email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" required class="form-control" id="reg_email" name="reg_email" placeholder="ex: wackyartdealer@potatofarm.com">
                </div>
              </div>
              <div class="form-group">
                <label for="reg_password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" required class="form-control" id="reg_password" name="reg_password" placeholder="Must be 8-16 characters (Max 25)">
                </div>
              </div>
              <div class="form-group" id="pass-div" >
                <label for="confpassword" class="col-sm-2 control-label">Confirm Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="confpassword" required placeholder="Type your password again">
                </div>
              </div>
              <div class="form-group">
                <label for="nickname" class="col-sm-2 control-label">Nickname</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nickname" name="nickname" placeholder="ex: RagingBananaArtist" required>
                </div>
              </div>
              <p><h6 style="display:none" class="text-danger" id="register-div-error">Your passwords doesn't match. Make it symmetrical.</h6></p>
              <p><h6>You can complete your profile later, for the mean time, lets start posting/browsing our art deals!</h6></p>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
                    <h6 class="pull-right"> <a href="#" id="bck-to-login" class="btn btn-md btn-info">Back to Sign in</a></h6>
                    <button id="bck-to-login" class="btn btn-default">Register for an account.</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>