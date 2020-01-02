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
				<div class="row">
					<div class="col-mod-12">
						<ul class="breadcrumb">
							<li><a href="<?php echo $nav[0]['url'];?>"><?php echo $nav[0]['val'];?></a></li>
							<li><a href="<?php echo $nav[1]['url'];?>"><?php echo $nav[1]['val'];?></a></li>
							<li class="active"><?php echo $nav[2]['val'];?></li>
						</ul>
					</div>
				</div>

				<!-- Most visited and Traffic sources Graph -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-archon main-graph">
							<div class="panel-heading">
								<h3 class="panel-title"><?php echo $tabletitle;?>
									<span class="pull-right">
										<?php echo $tablesubtitle;?>
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
			var date1 = new Date("06/30/2019 00:00:00"); 
			var date2 = new Date("07/30/2019 01:02:05"); 
			var differ = padi.getDiffer(date1,date2);
			console.log("date1",date1);
			console.log("date2",date2);
			console.log("Differ day",differ.days,"Hari");
			console.log("Hour left",differ.hours_left,"Jam");
			console.log("minute left",differ.minutes_left,"Menit");
			console.log("second left",differ.seconds_left);
			console.log("TODATW",padi.toDate());
			$(".age").showDate({startTime:'2019-12-31 22:30:00'});
		}(jQuery))
	</script>
</body>
</html>
