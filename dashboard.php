<?php 
/*
 * Start the session
 *
 */
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- CSS -->
		<?php   include_once 'includes/theme/css.php'; ?>
    </head>
    <body>
        <!-- TOP HEADER -->
        <?php include_once 'includes/theme/top_header.php'; ?>
        <!-- /TOP HEADER -->

        <!-- NAVIGATION -->
        <?php include_once 'includes/theme/navigation.php'; ?>
        <!-- /NAVIGATION -->

        <?php 
		/*
		 * classes.php includes all the classes for the system
		 */
		//
		include_once 'server/request.php';
		//Create request class object (Edit)
		$request = new Request($db);
		$reqs = $request->getAllRequest($loggedUserId);
		//echo "<prE>"; print_r($reqs); die;
		
        include 'includes/modals/login.php';

        include 'includes/modals/register.php';
		
		include 'includes/modals/request.php';
		
		include 'includes/modals/employee.php';
		
		include 'includes/modals/upload.php';
        ?>
		
		<div class="misc container-fluid">
            <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="messageContainer"  ></div>
						<div class="table-responsive">
						<?php if( isset($loggedUserType) && $loggedUserType == 1 ){?>
							<a href="javascript:;" onClick="Display('#employee_layout', '#content_employee');"><div class="buttons_">Nuevo Empleado</div></a>
						<?php } ?>	
						<h1>Mis <span>contratos</span></h1> 
							<table class="table table-striped" id="dtables">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Name</th>
								  <th scope="col">Date</th>
								  <th scope="col">Status</th>
								  <th scope="col">Receipt</th>	
								  <th scope="col">See Receipt</th>	
								  <th> </th>								  
								</tr>
							  </thead>
							  <tbody>
									<?php 
										if(empty($reqs)){ ?>
										<tr> <td colspan="6" align="center"> <p> No contracts </p></td> </tr>	
									<?php }else{
											$i = 1; foreach($reqs as $key => $req){ 
											//echo "<pre>"; print_r($req); echo "</pre>"; die;
											$status = 'pending payment';
											if($req['status'] == 1){
												$status = 'Pendiente pago';
												$class = 'redc';
											}else if($req['status'] == 2){
												$status = 'Depurando';
												$class = 'greenc';
											}else if($req['status'] == 3){
												$status = 'Depurando candidatos';
												$class = 'purpc';
											}else{
												$status = "Contratado";
											}
									?>
										<tr id="tr_<?php echo $i; ?>">
											<td scope="row"><p><?php echo $i; ?></p></td>
											<td><a href="candidates.php?id=<?php echo $req['id']; ?>" ><?php echo trim(ucfirst($req['firstname']).' '.ucfirst($req['lastname'])); ?></a></td>											
											<td><p><?php echo date('m-d-Y',strtotime($req['created_at'])); ?></p></td>
											<td class="tdStatus"><p class="<?php echo $class; ?>"><?php echo $status; ?></p></td>
											<!--td> <a href="javascript:void(0)" onClick="Display('#content-window-light-box-upload', '#content-upload-box');" data-id="<?php  echo $req['id']; ?>" class="btnmenu"><div class="crtica"></div>Subir Comprobante</a>  </td-->
											<?php if( $loggedUserType == 0 ) { ?>
												<td class="tdReceipt"> <a href="javascript:void(0)" onClick="showUploadForm('<?php echo $req['id']; ?>','<?php echo $i; ?>')" class="btnmenu"><div class="crtica"></div>Subir Comprobante</a>  </td>
											  <?php } else if($req['status'] >= 3) { ?>
												<td class="tdReceipt"> Confirmar pago </td>
											  <?php } else if(isset($req['path']) && $req['path'] != '') { ?>
												<td class="tdReceipt"> <a href="javascript:void(0)" onClick="confirmPayment('<?php echo $req['id']; ?>','<?php echo $i; ?>')" class="btnmenu"><div class="crtica"></div>
Confirmar pago</a>  </td>
											  <?php }else{ ?>
											  <td> </td>
											<?php } ?>
											
											<td> <a href="javascript:void(0)" onClick="showUploadReceipt('<?php echo $req['path']; ?>')" class="btnmenu"> <?php if(isset($req['path'])) { echo $req['path']; } ?>  </a> </td>
											<td> <a href="javascript:void(0)" class="viewRequest" data-id="<?php echo base64_encode($req['id']);?>"><img src="assets/img/find-view.png" title="Request Detail"  alt="Request Detail"></a> </td>
										</tr>
									<?php $i++; }
									} ?>
								
							  </tbody>
							</table>
<div class="clearfix"></div>

							<!--ul class="pagination pull-right">
								<li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
							</ul-->
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
						<h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input class="form-control " type="text" placeholder="Mohsin">
						</div>
						<div class="form-group">
							<input class="form-control " type="text" placeholder="Irshad">
						</div>
						<div class="form-group">
							<textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
						</div>
					</div>
					<div class="modal-footer ">
						<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
					</div>
				</div>
				<!-- /.modal-content --> 
			</div>
			<!-- /.modal-dialog --> 
		</div>

		<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
						<h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
					</div>
					<div class="modal-footer ">
						<button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
						<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
					</div>
				</div>
				<!-- /.modal-content --> 
			</div>
			<!-- /.modal-dialog --> 
		</div>

		  <!-- Upload Modal -->
		  <div class="modal fade" id="uploadModal" role="dialog">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Subir Comprobante</h4>
				</div>
				
				<div class="modal-body">
				  <form id="uploadReceipt">
						<div id="upload_results"></div>
						<!--div id="image_preview"><img id="previewing" src="noimage.png" /></div-->
						<!--hr id="line"-->
						<input type="hidden" name="reqUserId" id="reqUserId" value=""/>
						<input type="hidden" name="trId" id="trId" value=""/>
						<div id="selectImage">
							<label>Select Your Image</label><br/>
							<input class="form_control" type="file" name="file" id="file" accept="image/*" required />							
						</div>
					
				</div>
				<div class="modal-footer">
					<input type="submit" value="Upload" class="submit buttons_" />
				</form>
				  <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
				</div>
			  </div>
			</div>
		  </div>
		  
		  <!-- View Receipt Modal -->
		  <div class="modal fade" id="viewReceiptModal" role="dialog">
			<div class="modal-dialog modal-md">
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Receipt</h4>
				</div>
				
				<div class="modal-body">
				  <img src="" id="viewReceiptImg" title="Nanalandia"  alt="Nanalandia" class="img-responsive">
				</div>
				<div class="modal-footer">					
					<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
				</div>
			  </div>
			</div>
		  </div>
		  
		<!-- View Request Modal -->  
		<div class="modal fade" id="viewCandidatePopup" role="dialog">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Contratación Detalles</h4>
				</div>
				
				<div class="modal-body" id="popupBody">
				</div>
				</div>
				<div class="modal-footer">					
					<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
				</div>
			  </div>
			</div>
		  
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- FOOTER -->
        <?php include_once 'includes/theme/footer.php'; ?>
        <!-- /FOOTER -->

        <!-- SCRIPT -->
        <?php include_once 'includes/theme/script.php'; ?>
    </body>
</html>
