<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('commons/head');?>
<link rel='stylesheet' href='/assets/twitter/typeahead-bootstrap-1.2.1.css' />
<body>
	<div class="frame">
	<?php $this->load->view('commons/sidebar');?>
		<!-- Main content starts here-->
		<div class="content">
		<?php $this->load->view('commons/navbar');?>
			<div id="main-content">
				<?php $this->load->view('commons/breadcrumbrows');?>
				<!-- Form Horizontal -->
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Client Info
								</h3>
							</div>
							<div class="panel-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="clientName" class="col-lg-3 control-label">Keluhan</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="clientName" placeholder="Client Name">
										</div>
									</div>
									<div class="form-group">
										<label for="clientName" class="col-lg-3 control-label">Pelapor</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="clientName" placeholder="Client Name">
										</div>
									</div>
									<div class="form-group">
										<label for="clientName" class="col-lg-3 control-label">Tanggal</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="clientName" placeholder="Client Name">
										</div>
									</div>
									<div class="form-group">
										<label for="clientName" class="col-lg-3 control-label">Action</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="clientName" placeholder="Client Name">
										</div>
									</div>
									<div class="form-group">
										<label for="clientName" class="col-lg-3 control-label">Start Downtime</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="clientName" placeholder="Client Name">
										</div>
									</div>
									<div class="form-group">
										<label for="clientName" class="col-lg-3 control-label">End Downtime</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="clientName" placeholder="Client Name">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Form Vertical
								</h3>
							</div>
							<div class="panel-body">
								<form class="form-horizontal" role="form">
								<div class="form-group">
										<label for="reporter" class="col-lg-3 control-label">Main Root Cause</label>
										<div class="col-lg-9">
										<?php echo form_dropdown('complaint',$complaints,0,'class="form-control" id="complaint');?>
										</div>
									</div>
									<div class="form-group">
										<label for="reporter" class="col-lg-3 control-label">Sub Root Cause</label>
										<div class="col-lg-9">
										<?php echo form_dropdown('complaint',$complaints,0,'class="form-control" id="complaint');?>
										</div>
									</div>
									<div class="form-group">
										<label for="reporter" class="col-lg-3 control-label">Penyebab Lainnya</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="reporterphone" placeholder="Telp. Pelapor">
										</div>
									</div>
									<div class="form-group">
										<label for="reporter" class="col-lg-3 control-label">Kesimpulan</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="reporterphone" placeholder="Telp. Pelapor">
										</div>
									</div>
									<div class="form-group">
										<label for="reporter" class="col-lg-3 control-label">PIC</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="reporterphone" placeholder="Telp. Pelapor">
										</div>
									</div>
									<div class="form-group">
										<label for="reporter" class="col-lg-3 control-label">Hasil Konfirmasi</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="reporterphone" placeholder="Telp. Pelapor">
										</div>
									</div>
								</form>
								<button class="btn btn-primary" id="btnSaveTicket">Save Follow Up</button>
								<button class="btn btn-default" id="btnCancelSave">Cancel</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h5 class="modal-title">Panel Settings</h5>
								<span class="small">Some sort of settings with a form</span>
							</div>
							<div class="modal-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-2 control-label">Label</label>
										<div class="col-lg-10">
											<input type="email" class="form-control" id="inputEmail6" placeholder="Label">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword1" class="col-lg-2 control-label">Second Label</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="inputPassword1" placeholder="Label two">
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save Follow Up</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			</div><!-- /Main Content  @7 -->
		</div><!-- / Content @5 -->
		<?php $this->load->view('commons/footer');?>
	</div> <!-- Frame -->
	<!-- Load JS here for greater good =============================-->
	<?php $this->load->view('tickets/scripts');?>
	<!-- Page scripts-->
	<?php $this->load->view('tickets/formscripts');?>
	<script src="/assets/twitter/typeahead-0.11.1.js"></script>
	<script>
		$.ajax({
			url:'/tickets/getclients',
			dataType:'json',
			type:'get'
		})
		.done(function(ztatez){
			$('#clientName').typeahead({
				hint: true,
				highlight: true,
				minLength: 1
			},
			{
				name: 'ztatez',
				source: substringMatcher(ztatez)
			});
		})
		.fail(function(err){
			console.log("Err got",err);
		});
		var substringMatcher = function(strs) {
			return function findMatches(q, cb) {
				console.log("Q",q);
				var matches, substringRegex;

				// an array that will be populated with substring matches
				matches = [];

				// regex used to determine if a string contains the substring `q`
				substrRegex = new RegExp(q, 'i');

				// iterate through the pool of strings and for any string that
				// contains the substring `q`, add it to the `matches` array
				$.each(strs, function(i, str) {
					if (substrRegex.test(str.name)) {
						matches.push(str.name+'-'+str.id);
					}
				});
				cb(matches);
			};
		};
		$("#btnSaveTicket").click(function(){
			console.log("Save Ticket clicked");
			$.ajax({
				url:'/tickets/save',
				type:'POST',
				data:{
					clientname:$('#clientName').val(),
					complaint:$('#complaint').val(),
					reporter:$('#reporter').val(),
					reporterphone:$('#reporterphone').val(),
					requesttype:'pelanggan'
				}
			})
			.done(function(res){
				console.log('Result',res);
				//$("#myModal").modal("show");
				window.location.href = '/tickets'
			})
			.fail(function(err){
				console.log('Error',err);
			});
		});
		$("#btnCancelSave").click(function(){
			window.location.href = '/tickets';
		})
	</script>
</body>
</html>
