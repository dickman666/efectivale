<div class="modal fade" id="genericModal" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>
<div id="generic-modal-loader" style="display: none;">
    <p style="text-align: center;">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    </p>
</div>
<script type="text/javascript">
  $("#genericModal").on("show.bs.modal", function(e) {
    if (e.target.id.indexOf('fecha') != -1) {
        return false;
    }
    $(this).find(".modal-content").html($('#generic-modal-loader').html());
    var link = $(e.relatedTarget);
    $(this).find(".modal-content").load(link.attr("href"));
  });
</script>
