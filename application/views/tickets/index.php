<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('tickets/head');?>
<body>
	<div class="frame">
		<?php $this->load->view('tickets/sidebar');?>
		<!-- Main content starts here-->
		<div class="content">
		<?php $this->load->view('tickets/navbar');?>
			<div id="main-content">
				<?php $this->load->view('/tickets/breadcrumbrows');?>
				<!-- Most visited and Traffic sources Graph -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-archon main-graph">
							<div class="panel-heading">
								<h3 class="panel-title"><?php echo $tabletitle;?>
									<span class="pull-right">
										<?php echo $tablesubtitle;?>
										<button  class="panel-settings" id="btnTicketAdd"><i class="icon-plus"></i></button>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<table  class="table table-bordered table-hover table-striped display" id="example" >
									<thead>
										<tr>
											<th>Kd Ticket</th>
											<th>Name</th>
											<th>Ticket Creator</th>
											<th>Create date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($objs['res'] as $obj){?>
										<tr class="odd gradeX">
											<td><?php echo $obj->kdticket;?></td>
											<td>
												<h5><?php echo $obj->clientname;?></h5>
												<h6><?php echo $obj->createuser;?></h6>
											</td>
											<td class="age"></td>
											<td class="center cdate"><?php echo $obj->create_date;?></td>
											<td class="center">
											<div class="btn-group">
												<button type="button" class="btn btn-info btn-lg dropdown-toggle btn-animate-demo" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#">Follow Up</a></li>
													<li><a href="#">Troubleshoot</a></li>
													<li><a href="#">Ask to delete</a></li>
													<li class="divider"></li>
													<li><a href="#">Ask to delete</a></li>
												</ul>
											</div>
											</td>
										</tr>
										<?php }?>
									</tbody>
									<tfoot>
										<tr>
											<th>Kd Ticket</th>
											<th>Name</th>
											<th>Ticket Creator</th>
											<th>Create date</th>
											<th>Action</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /Main Content  @7 -->
		</div><!-- / Content @5 -->
		<?php $this->load->view('tickets/footer');?>
	</div> <!-- Frame -->
	<?php $this->load->view('tickets/scripts');?>
	<script src="/assets/padinet/common.js"></script>
	<script src="/assets/padinet/dates.js"></script>
	<script type="text/javascript">
		(function($){
			setInterval(function(){
				$(".age").showDate({startTime:'2019-12-31 22:30:00'});				
			}, 1000);
			$("#btnTicketAdd").click(function(){
				window.location.href = "/tickets/add"
			});
		}(jQuery))
	</script>
</body>
</html>
