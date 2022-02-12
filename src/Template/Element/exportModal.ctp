
<div class="modal inmodal" id="ModalExportExcel" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <!-- <i class="fa fa-clock-o modal-icon"></i> -->
                <h4 id="mensajes" class="modal-title"> <?= __("Cancelacion en proceso") ?></h4>
                
            </div>
            
            <div id="modal" class="modal-body" style="text-align: center;">
            	<img id="spinner" class="oculta" src="/img/loading-circle.gif">
            	
            	<center><span class="btn btn-back" id="liga"></span></center>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
	
	$(document).ready(function(){

		var timer_job = null;

		var  status_job = function(id){

			$.getJSON('/factorajes-contracts/checkjob/'+id,function(data){ 

				if( data.fetched == null ){

					$('#mensajes').html('Cancelacion en proceso');
					
				}else if(data.failed == 1){

					$('#ModalExportExcel').modal('hide');
					clearInterval(timer_job);
					alert('Ocurrio un error: '+data.reference);

				} else if( data.completed == null ){
					$('#mensajes').html('Cancelacion en proceso');
				}else{

					$('.oculta').hide();
					$('#mensajes').html("CFDI cancelado");
					clearInterval(timer_job);
					$('#liga').attr('text', 'CFDI Cancelado '+data.reference );	
					$('#liga').show();
					$('#ModalExportExcel').modal('hide');
					location.reload();
					alert('CFDI cancelado: '+data.reference);
				}
				
			});
		}
		var check_job = function(id){ 
			timer_job = setInterval(function(){ status_job(id) }, 5000);
		}

		$('#ModalExportExcel').modal({
			backdrop: 'static', 
			keyboard: false,
			show: false
		});	

			
		$('#liga').click(function(e){
			$('#ModalExportExcel').modal('hide');
		});

		$('.exportarexcel').click(function(e){

			e.preventDefault();

			var url = $(this).attr('href');

			$('#mensajes').html('Cancelacion en proceso');
			$('#ModalExportExcel').modal('show');
			$('.oculta').show();
			$('#liga').hide();


			var data = $('#report').serializeArray();

			$.post(url , data , function(data){
				var dataArray = JSON.parse(data );
				console.log(dataArray);
				check_job(dataArray['id']) ;
			}).fail(function(data){
				$('#ModalExportExcel').modal('hide');
				alert('Ocurrio un error interno')
			});			

		});
	});
</script>