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

				<!-- Form Horizontal -->
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Form Horizontal
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="icon-cog"></i></a>
										<a  href="#"  class="panel-close"><i class="icon-remove"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label">Name</label>
										<div class="col-lg-9">
											<input type="email" class="form-control" id="inputEmail1" placeholder="Client Name">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label">Disabled</label>
										<div class="col-lg-9">
											<input type="email" class="form-control" id="inputEmail2" placeholder="You cannot type here" disabled>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label"> Prepend</label>
										<div class="col-lg-9">
											<div class="input-group">
												<span class="input-group-addon">@</span>
												<input type="text" class="form-control" placeholder="Username">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label"> Append</label>
										<div class="col-lg-9">
											<div class="input-group">
												<input type="text" class="form-control">
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label">Icon group</label>
										<div class="col-lg-9">
											<div class="input-group">
												<span class="input-group-addon">$</span>
												<input type="text" class="form-control">
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label">Checkbox input</label>
										<div class="col-lg-9">
											<div class="input-group">
												<span class="input-group-addon">
													<input type="checkbox">
												</span>
												<input type="text" class="form-control">
											</div><!-- /input-group -->
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Radio Input</label>
										<div class="col-lg-9">
											<div class="input-group">
												<span class="input-group-addon">
													<input type="radio">
												</span>
												<input type="text" class="form-control">
											</div><!-- /input-group -->
										</div>
									</div>
									<div class="form-group">
										<label  class="col-lg-3 control-label">Addons</label>
										<div class="col-lg-9">
											<div class="input-group">
												<span class="input-group-btn">
													<button class="btn btn-info " type="button">Go!</button>
												</span>
												<input type="text" class="form-control">
											</div><!-- /input-group -->
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Checkboxes</label>
										<div class="col-lg-9">
											<div class="checkbox">
												<label>
													<input type="checkbox" value="">
													Option One
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" value="">
													Option Two
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" value="">
													Option Three
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Inline Checkboxes</label>
										<div class="col-lg-9">
											<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox1" value="option1"> 1
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox2" value="option2"> 2
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox3" value="option3"> 3
											</label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Radio</label>
										<div class="col-lg-9">
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
													Option One
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Option Two 
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													Option Three 
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label">Selects</label>
										<div class="col-lg-9">
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-3 control-label">Select multiple</label>
										<div class="col-lg-9">
											<select multiple class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
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
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="icon-cog"></i></a>
										<a  href="#"  class="panel-close"><i class="icon-remove"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<form class="form-vertical" role="form">
									<div class="form-group">
										<label>Input</label>
										<input type="email" class="form-control" id="inputEmail4" placeholder="Type something here">
									</div>
									<div class="form-group">
										<label>Color Picker</label>
										<input type="email" class="form-control" id="colorpicker" placeholder="Color picker" >
									</div>
									<div class="form-group">
										<label>Prepend</label>
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input type="text" class="form-control" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<label>Checkbox Input</label>
										<div class="input-group">
											<span class="input-group-addon">
												<input type="checkbox">
											</span>
											<input type="text" class="form-control">
										</div><!-- /input-group -->
									</div>
									<div class="form-group">
										<label>Addons</label>
										<div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-info " type="button">Go!</button>
											</span>
											<input type="text" class="form-control">
										</div><!-- /input-group -->
									</div>
									<div class="form-group">
										<label>Checkboxes</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">
												Option One
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">
												Option Two
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">
												Option Three
											</label>
										</div>								  
									</div>
									<div class="form-group">
										<label>Tags input</label>
										<input id="tags_2" type="text" class="tags" value="php,ios,javascript,ruby,android,kindle" />
									</div>
									<div class="form-group">
										<label>File input</label>
										<input type="file" id="exampleInputFile">
										<p class="help-block">Example block-level help text here.</p>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox"> Check me out
										</label>
									</div>
									<button type="submit" class="btn btn-primary">Save Chnages</button>
									<button type="submit" class="btn btn-default">Cancel</button>
								</form>
							</div>
						</div>
					</div>
				</div>

				<!-- Inline Form-->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Inline Form
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="icon-cog"></i></a>
										<a  href="#"  class="panel-close"><i class="icon-remove"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<form class="form-inline" role="form">
									<div class="form-group col-lg-5">
										<label class="sr-only" for="email">Email address</label>
										<input type="email" class="form-control" id="email" placeholder="Enter email">
									</div>
									<div class="form-group col-lg-5">
										<label class="sr-only" for="password">Password</label>
										<input type="password" class="form-control" id="password" placeholder="Password">
									</div>
									<div class="checkbox col-lg-1">
										<label>
											<input type="checkbox"> Remember?
										</label>
									</div>
									<button type="submit" class="col-lg-1 btn btn-default">Sign in</button>
								</form>							
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
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

			</div><!-- /Main Content  @7 -->

		</div><!-- / Content @5 -->

		<?php $this->load->view('tickets/footer');?>
	</div> <!-- Frame -->
	<!-- Load JS here for greater good =============================-->
	<?php $this->load->view('tickets/scripts');?>
	<!-- Page scripts-->
	<?php $this->load->view('tickets/formscripts');?>
	<script src="/assets/twitter/typeahead-0.11.1.js"></script>
	<script>
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
					console.log("I and STR",i,str);
					if (substrRegex.test(str.name)) {
						console.log("STR",str.name);
						console.log("ID",str.id);
						matches.push(str.name);
					}
				});

				cb(matches);
			};
		};

	var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
	'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
	'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
	'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
	'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
	'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
	'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
	'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
	'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
	];
	var ztatez = [{id:'id',name:'Indonesi'},{id:'ar',name:'ArabSaudi'},{id:'af',name:'Afghabistan'}]
	$('#inputEmail1').typeahead({
	hint: true,
	highlight: true,
	minLength: 1
	},
	{
	name: 'ztatez',
	source: substringMatcher(ztatez)
	});
	</script>
</body>
</html>
