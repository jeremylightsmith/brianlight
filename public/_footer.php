<div class="modal fade" id="simple-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<footer>
  &copy; Brian Light 2010  |  (949) 607-7750
</footer>

<script type="text/javascript">
$(function() {
  $('#simple-modal').on('shown.bs.modal', function () {
    var title = $(this).find("h1").text();
    $(this).find(".modal-title").text(title);
  });

  $('#simple-modal').on('hidden.bs.modal', function() {
    $(this).removeData("bs.modal");
  })
});
</script>