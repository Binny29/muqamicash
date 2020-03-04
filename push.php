<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="Start your development with a Dashboard for Bootstrap 4." name="description">
	<meta content="Spruko" name="author">

	<!-- Title -->
	<title>All Video</title>

	<?php include_once("header.php");?>

	<div class="page">
		<div class="page-main">
		
			<!-- Sidebar menu-->
			<?php include_once("sidebar.php");?>
			<!-- Sidebar menu-->
			<?php include_once("menu.php");?>

	

						<!-- Page content -->
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="#">Tables</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data Tables</li>
								</ol>
								<div class="btn-group mb-0">
									<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#"><i class="fas fa-plus mr-2"></i>Add new Page</a>
										<a class="dropdown-item" href="#"><i class="fas fa-eye mr-2"></i>View the page Details</a>
										<a class="dropdown-item" href="#"><i class="fas fa-edit mr-2"></i>Edit Page</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i> Settings</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Data Table</h2>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
													<thead>
														<tr>
															<th class="wd-15p">First name</th>
															<th class="wd-15p">Last name</th>
															<th class="wd-20p">Position</th>
															<th class="wd-15p">Start date</th>
															<th class="wd-10p">Salary</th>
															<th class="wd-25p">E-mail</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Bella</td>
															<td>Chloe</td>
															<td>System Developer</td>
															<td>2018/03/12</td>
															<td>$654,765</td>
															<td>b.Chloe@datatables.net</td>
														</tr>
														
														<tr>
															<td>Thor</td>
															<td>Walton</td>
															<td>Developer</td>
															<td>2012/08/11</td>
															<td>$98,540</td>
															<td>t.walton@datatables.net</td>
														</tr>
														<tr>
															<td>Finn</td>
															<td>Camacho</td>
															<td>Support Engineer</td>
															<td>2016/07/07</td>
															<td>$87,500</td>
															<td>f.camacho@datatables.net</td>
														</tr>
														
														
													</tbody>
												</table>
											</div>
										</div>
									</div>
									
									
								</div>
							</div>
								
						</div>
						<!-- Footer -->
						<?php include_once("footer.php");?>
						<!-- Footer -->
					</div>
				</div>
			</div>
			<!-- app-content-->
		</div>
	</div>

<?php include_once("js.php");?>

	<script>
		$(function(e) {
			$('#example').DataTable();

			var table = $('#example1').DataTable();
			$('button').click( function() {
				var data = table.$('input, select').serialize();
				alert(
					"The following data would have been submitted to the server: \n\n"+
					data.substr( 0, 120 )+'...'
				);
				return false;
			});
			$('#example2').DataTable( {
				"scrollY":        "200px",
				"scrollCollapse": true,
				"paging":         false,
				buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
			});
		} );

	</script>
</body>
</html>