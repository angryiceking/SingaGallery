<div class="content-body">
  <div class="container">
    <div class="row">
      <main class="col-md-8">
        <h4><strong>ADMINISTRATOR PAGE.</strong></h4>
        <br/>
        <h6>Hello! nice to meet you, this is the admin page, you can view events <a href="admin/event">here</a>.</h6>
        <h6>Archive gallery can be seen <a href="admin/archive">here</a></h6>
        <h6>Art gallery can be found <a href="admin/gallery">here</a></h6>
        <hr>
      </main>
      <main class="col-md-12">
        <h4><strong>ADD ART POSTING IN THE GALLERY.</strong></h4>
        <br/>
        <h6>Add new posting to the gallery to sell artworks now.</h6>
        <?php if ($gallery != null): ?>
          <table class="table">
            <thead>
              <tr>
                <th colspan="5">Fill up the fields.</th>
                <th> ---- </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Exhibit Name:</td>
                <td>Exhibit IMG:</td>
                <td>Exhibit Author</td>
                <td>Exhibit Desc</td>
                <td>Exhibit Medium</td>
                <td>Exhibit Price</td>
                <td></td>
              </tr>
              <tr>
                <td><input type="text" class="form-control" name="exh-name" id="exh-name" placeholder="Exhibit Name"></td>
                <td><input type="file" class="form-control" name="exh-img" id="exh-img" placeholder="Exhibit Image Source"></td>
                <td><input type="text" class="form-control" name="exh-author" id="exh-author" placeholder="Exhibit Author"></td>
                <td><input type="text" class="form-control" name="exh-desc" id="exh-desc" placeholder="Exhibit Description"></td>
                <td><input type="text" class="form-control" name="exh-medium" id="exh-medium" placeholder="Exhibit Medium"></td>
                <td><input type="text" class="form-control" name="exh-price" id="exh-price" placeholder="Exhibit Price"></td>
                <td><button type="submit" class="btn btn-md btn-success">Add Exhibit</button></td>
              </tr>
            </tbody>
          </table>
        <?php else: ?>
          No events. Please add some.
        <?php endif ?>
        <hr>
      </main>

      <main class="col-md-12">
        <h4><strong>ADD EVENTS TO THE SITE.</strong></h4>
        <br/>
        <h6>Add new posting to the gallery to sell artworks now.</h6>
        <?php if ($events != null): ?>
          <table class="table">
            <thead>
              <tr>
                <th colspan="5">Fill up the fields.</th>
                <th> ---- </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Event Name:</td>
                <td>Event IMG:</td>
                <td>Event Author</td>
                <td>Event Desc</td>
                <td>Event Medium</td>
                <td>Event Price</td>
                <td></td>
              </tr>
              <tr>
                <td><input type="text" class="form-control" name="exh-name" id="exh-name" placeholder="Event Name"></td>
                <td><input type="file" class="form-control" name="exh-img" id="exh-img" placeholder="Event Image Source"></td>
                <td><input type="text" class="form-control" name="exh-author" id="exh-author" placeholder="Event Author"></td>
                <td><input type="text" class="form-control" name="exh-desc" id="exh-desc" placeholder="Event Description"></td>
                <td><input type="text" class="form-control" name="exh-medium" id="exh-medium" placeholder="Event Medium"></td>
                <td><input type="text" class="form-control" name="exh-price" id="exh-price" placeholder="Event Price"></td>
                <td><button type="submit" class="btn btn-md btn-success">Add Exhibit</button></td>
              </tr>
            </tbody>
          </table>
        <?php else: ?>
          No events. Please add some.


          <table class="table">
            <thead>
              <tr>
                <th colspan="5">Fill up the fields.</th>
                <th> ---- </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Event Name:</td>
                <td>Event IMG:</td>
                <td>Event Author</td>
                <td>Event Desc</td>
                <td>Event Medium</td>
                <td>Event Price</td>
                <td></td>
              </tr>
              <tr>
                <td><input type="text" class="form-control" name="exh-name" id="exh-name" placeholder="Event Name"></td>
                <td><input type="file" class="form-control" name="exh-img" id="exh-img" placeholder="Event Image Source"></td>
                <td><input type="text" class="form-control" name="exh-author" id="exh-author" placeholder="Event Author"></td>
                <td><input type="text" class="form-control" name="exh-desc" id="exh-desc" placeholder="Event Description"></td>
                <td><input type="text" class="form-control" name="exh-medium" id="exh-medium" placeholder="Event Medium"></td>
                <td><input type="text" class="form-control" name="exh-price" id="exh-price" placeholder="Event Price"></td>
                <td><button type="submit" class="btn btn-md btn-success">Add Event</button></td>
              </tr>
            </tbody>
          </table>
        <?php endif ?>
        <hr>
      </main>


      <main class="col-md-12">
        <h4><strong>ADD BLOG PAGES.</strong></h4>
        <br/>
        <h6>Add new posting to the gallery to sell artworks now.</h6>
        <?php if ($blogs != null): ?>
          <table class="table">
            <thead>
              <tr>
                <th colspan="5">Fill up the fields.</th>
                <th> ---- </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Blog Name:</td>
                <td>Blog IMG:</td>
                <td>Blog Author</td>
                <td>Blog Desc</td>
                <td>Blog Medium</td>
                <td>Blog Price</td>
                <td></td>
              </tr>
              <tr>
                <td><input type="text" class="form-control" name="exh-name" id="exh-name" placeholder="Blog Name"></td>
                <td><input type="file" class="form-control" name="exh-img" id="exh-img" placeholder="Blog Image Source"></td>
                <td><input type="text" class="form-control" name="exh-author" id="exh-author" placeholder="Blog Author"></td>
                <td><input type="text" class="form-control" name="exh-desc" id="exh-desc" placeholder="Blog Description"></td>
                <td><input type="text" class="form-control" name="exh-medium" id="exh-medium" placeholder="Blog Medium"></td>
                <td><input type="text" class="form-control" name="exh-price" id="exh-price" placeholder="Blog Price"></td>
                <td><button type="submit" class="btn btn-md btn-success">Add Blog</button></td>
              </tr>
            </tbody>
          </table>
        <?php else: ?>
          No Blogs. Please add some.


          <table class="table">
            <thead>
              <tr>
                <th colspan="5">Fill up the fields.</th>
                <th> ---- </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Blog Name:</td>
                <td>Blog IMG:</td>
                <td>Blog Author</td>
                <td>Blog Desc</td>
                <td>Blog Medium</td>
                <td>Blog Price</td>
                <td></td>
              </tr>
              <tr>
                <td><input type="text" class="form-control" name="exh-name" id="exh-name" placeholder="Blog Name"></td>
                <td><input type="file" class="form-control" name="exh-img" id="exh-img" placeholder="Blog Image Source"></td>
                <td><input type="text" class="form-control" name="exh-author" id="exh-author" placeholder="Blog Author"></td>
                <td><input type="text" class="form-control" name="exh-desc" id="exh-desc" placeholder="Blog Description"></td>
                <td><input type="text" class="form-control" name="exh-medium" id="exh-medium" placeholder="Blog Medium"></td>
                <td><input type="text" class="form-control" name="exh-price" id="exh-price" placeholder="Blog Price"></td>
                <td><button type="submit" class="btn btn-md btn-success">Add Blog</button></td>
              </tr>
            </tbody>
          </table>
        <?php endif ?>
        <hr>
      </main>
    </div>
  </div>
</div>