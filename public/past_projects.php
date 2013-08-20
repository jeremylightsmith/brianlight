<?php $title = "Projects"; $css = "projects-page" ?>
<?php include ( "_header.php" ); ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      These are a few of my favorite projects...
    </div>
  </div>

  <div class="row">
    <!-- deck -->
    <div class="col-sm-4 col-lg-3">
      <div class="thumbnail">
        <div class="crop"><img src="/images/projects/deck.jpg" alt=""></div>
        <div class="caption">
          <h3>Sam's Deck</h3>
          <p>We made it big enough for all of his grandkids.</p>
          <p><a href="/projects/deck" data-target="#simple-modal" data-toggle="modal" class="btn btn-primary">Read more...</a></p>
        </div>
      </div>
    </div>

    <!-- shower job -->
    <div class="col-sm-4 col-lg-3">
      <div class="thumbnail">
        <div class="crop"><img src="/images/projects/shower_job.jpg" alt=""></div>
        <div class="caption">
          <h3>Pamela's Shower</h3>
          <p>Pamela wanted her shower to be a replica of an ornate edifice. After a lot of work, she was very happy with the precision of our results.</p>
          <p><a href="/projects/shower_job" data-target="#simple-modal" data-toggle="modal" class="btn btn-primary">Read more...</a></p>
        </div>
      </div>
    </div>

    <!-- farmhouse into office -->
    <div class="col-sm-4 col-lg-3">
      <div class="thumbnail">
        <div class="crop"><img src="/images/projects/farmhouse_into_an_office.jpg" alt=""></div>
        <div class="caption">
          <h3>Farmhouse Into an Office</h3>
          <p>These attorneys wanted to convert their 100 year old building into a contemporary office while preserving the antique feel.</p>
          <p><a href="/projects/farmhouse_into_an_office" data-target="#simple-modal" data-toggle="modal" class="btn btn-primary">Read more...</a></p>
        </div>
      </div>
    </div>

    <!-- kitchen / bath remodel on a shoestring budget -->
    <div class="col-sm-4 col-lg-3">
      <div class="thumbnail">
        <div class="crop"><img src="/images/projects/kitchen_bath_remodel_on_a_shoestring_budget.jpg" alt=""></div>
        <div class="caption">
          <h3>Kitchen / Bath on a Shoestring Budget</h3>
          <p>Even with close out and reduced price items, we made it look like a million bucks.</p>
          <p><a href="/projects/kitchen_bath_remodel_on_a_shoestring_budget" data-target="#simple-modal" data-toggle="modal" class="btn btn-primary">Read more...</a></p>
        </div>
      </div>
    </div>

    <!-- tile work -->
    <div class="col-sm-4 col-lg-3">
      <div class="thumbnail">
        <div class="crop"><img src="/images/projects/tile_work.jpg" alt=""></div>
        <div class="caption">
          <h3>Pearson Family's Tile Work</h3>
          <p>I did the tile work for their master bath shower, tub, floor, and some of the backsplash in their kitchen.</p>
          <p><a href="/projects/tile_work" data-target="#simple-modal" data-toggle="modal" class="btn btn-primary">Read more...</a></p>
        </div>
      </div>
    </div>

    <!-- basement daycare -->
    <div class="col-sm-4 col-lg-3">
      <div class="thumbnail">
        <div class="crop"><img src="/images/projects/basement_daycare.jpg" alt=""></div>
        <div class="caption">
          <h3>Holbrook's Basement Daycare</h3>
          <p>We balanced personal space and professional space.</p>
          <p><a href="/projects/basement_daycare" data-target="#simple-modal" data-toggle="modal" class="btn btn-primary">Read more...</a></p>
        </div>
      </div>
    </div>

    <!-- my own home -->
    <div class="col-sm-4 col-lg-3">
      <div class="thumbnail">
        <div class="crop"><img src="/images/projects/my_own_home.jpg" alt=""></div>
        <div class="caption">
          <h3>My Own Home</h3>
          <p>Built it from scratch!</p>
          <p><a href="/projects/my_own_home" data-target="#simple-modal" data-toggle="modal" class="btn btn-primary">Read more...</a></p>
        </div>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
(function($) {
    $.fn.uniformHeight = function() {
        var maxHeight   = 0,
            max         = Math.max;

        return this.each(function() {
            maxHeight = max(maxHeight, $(this).height());
        }).height(maxHeight);
    }
})(jQuery);
$(function() {
  $(".thumbnail").uniformHeight();
})
</script>

<?php include ( "_footer.php" ); ?>
