<div style='margin-bottom:15px;'>
    <a href="#r" data-toggle='modal' class='lnk'><strong><span class='glyphicon glyphicon-pencil'></span> Pedir una recomendación</strong></a>
</div>
<div class="modal fade" id="r" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Llena algunos datos a continuación</h4>
      </div>
      <div class="modal-body">
        <?php include("../form-reco.php"); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar ventana</button>
      </div>
    </div>
  </div>
</div>