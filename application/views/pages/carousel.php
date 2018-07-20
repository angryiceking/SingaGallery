<script type="text/javascript" src="build/js/slick.min.js"></script>
<script type="text/javascript" src="build/js/slick-settings.js"></script>
<div class="container-fluid no-padding">
    <div class="row">
        <div class="col-md-12">
            <div class="slick-gallery">
                <!-- USE HERE THE DESIGN FOR EVENTS -->
                <?php if ($events != null): ?>
                    <?php foreach ($events as $key): ?>
                        <?php echo $key->event_name?>
                        <?php echo $key->event_desc?>
                        <?php echo $key->event_img?>
                        <?php echo $key->event_date?>
                        <?php echo $key->event_author?>
                    <?php endforeach ?>
                <?php else: ?>
                    <div>
                        <div class="col-md-12 text-center">
                            No events were found here. Add some.
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

 <!-- style="margin-right: 50%; margin-left: 50%" -->