<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
       <img src="img/iconos/galeria/1.png" class="img-responsive center-block" id="img-modal">
      </div>
    </div>

  </div>
</div>

<div class="container" id="list-galeria">
	<div class="row"> 
		<div class="col-md-12">
			<ul class="list-inline">
				<?php 
					for ($i=1; $i <= 12 ; $i++) { 
						echo '<li><img src="img/iconos/galeria/miniaturas/'.$i.'.png" alt="'.$i.'" class="img-responsive center-block img-model-form" width="80" data-toggle="modal" data-target="#myModal"></li>
								';
					}
				?>
			</ul>
		</div>
		
	</div>
</div>
