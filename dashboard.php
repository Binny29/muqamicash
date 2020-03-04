<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="Start your development with a Dashboard for Bootstrap 4." name="description">
	<meta content="Spruko" name="author">

	<!-- Title -->
	<title>Admin Dashboard </title>

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
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">It Dashboard</li>
								</ol>
								<div class="btn-group mb-0">
									<button type="button" class="btn btn-primary  btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
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
								<div class="col-xl-8">
									<div class="card  shadow">
										<div class="card-header bg-transparent">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
													<h2 class="mb-0">Space Details</h2>
												</div>

											</div>
										</div>
										<div class="card-body">
											<!-- Chart -->
											<canvas id="lineChart" class="chart-dropshadow h-285"></canvas>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<div class="card pull-up shadow">
										<div class="card-content">
											<div class="card-body">
												<div class="media d-flex server">
													<div class="media-body text-left">
														<h2 class="">Server1 </h2>
														<h4 class=" mb-0 text-muted"><span class="text-primary"><i class="fe fe-arrow-up-circle "></i></span> Last 52 days Ago <span class="badge badge-primary">Online</span></h4>
													</div>
													<div class="align-self-center">
														<i class="fe fe-hard-drive icon text-primary float-right"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card pull-up shadow">
										<div class="card-content">
											<div class="card-body">
												<div class="media d-flex server">
													<div class="media-body text-left">
														<h2 class="">Server2</h2>
														<h4 class=" mb-0 text-muted"><span class="text-primary"><i class="fe fe-arrow-up-circle "></i></span> Last 5 days Ago <span class="badge badge-primary">Online</span></h4>
													</div>
													<div class="align-self-center">
														<i class="fe fe-hard-drive icon text-primary float-right"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card pull-up shadow">
										<div class="card-content">
											<div class="card-body">
												<div class="media d-flex server">
													<div class="media-body text-left">
														<h2 class="">Server3</h2>
														<h4 class=" mb-0 text-muted"><span class="text-danger"><i class="fe fe-arrow-down-circle "></i></span> Last 10 days Ago <span class="badge badge-danger">Offline</span></h4>
													</div>
													<div class="align-self-center">
														<i class="fe fe-hard-drive icon text-danger float-right"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-4">
									<div class="row">
										<div class="col-12">
											<div class="card shadow">
												<div class="card-body text-center">
													<h2 class="mb-4">Work Progress</h2>
													<div class="chart-circle" data-value="0.57" data-thickness="14" data-color="#ffa21d"><canvas width="120" height="120"></canvas>
														<div class="chart-circle-value"><div class="h2">57%</div></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="card shadow">
												<div class="card-body text-center">
													<h2 class="mb-4">Employees Progress</h2>
													<div class="chart-circle" data-value="0.33" data-thickness="14" data-color="#00c3ed"><canvas width="120" height="120"></canvas>
														<div class="chart-circle-value"><div class="h2">34%</div></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="card shadow">
										<div class="card-header border-bottom-0">
											<h6 class="text-uppercase text-muted ls-1 mb-1">Details</h6>
											<h2 class="mb-0">Activity Details</h2>
										</div>
										<table class="table card-table">
											<tbody>
												<tr>
													<td>Global IT</td>
													<td class="text-right">
														<span class="badge badge-primary">52</span>
													</td>
												</tr>
												<tr>
													<td>My Work</td>
													<td class="text-right">
														<span class="badge badge-warning">2</span>
													</td>
												</tr>
												<tr>
													<td>Incidents</td>
													<td class="text-right">
														<span class="badge badge-danger">12</span>
													</td>
												</tr>
												<tr>
													<td>Requests</td>
													<td class="text-right">
														<span class="badge badge-default">6</span>
													</td>
												</tr>
												<tr>
													<td>Problems</td>
													<td class="text-right">
														<span class="badge badge-info">15</span>
													</td>
												</tr>
												<tr>
													<td>Changes</td>
													<td class="text-right">
														<span class="badge badge-success">26</span>
													</td>
												</tr>
												<tr>
													<td>Reporting</td>
													<td class="text-right">
														<span class="badge badge-success">41</span>
													</td>
												</tr>
												<tr>
													<td>Knowledge</td>
													<td class="text-right">
														<span class="badge badge-danger">54</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-xl-4">
									<div class="card shadow">
										<div class="card-body">
											<h4>Total Budget</h4>
											<h1 class="text-xl">$ 23,25,123</h1>
											<div class="progress progress-md mb-0">
												<div class="progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
											</div>
										</div>
									</div>
									<div class="card shadow">
										<div class="card-body border-top">
											<h4>Remaining Budget</h4>
											<h1 class="text-xl">$ 25,123</h1>
											<div class="progress progress-md mb-0">
												<div class="progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
											</div>
										</div>
									</div>
									<div class="card shadow">
										<div class="card-body border-top">
											<h4>Current Budget</h4>
											<h1 class="text-xl">9.2%</h1>
											<div class="progress progress-md mb-0">
												<div class="progress-bar-striped progress-bar-animated bg-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-8">
									<div class="card shadow">
										<div class="card-header bg-transparent">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-muted ls-1 mb-1">Top Position</h6>
													<h2 class="mb-0">Teams Work Load</h2>
												</div>
											</div>
										</div>
										<div class="card-body">
											<!-- Chart -->
											<div class="chart">
												<div id="echart5" class="chart-dropshadow h-400"></div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="card shadow">
										<div class="card-header bg-transparent">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-muted ls-1 mb-1">Risks</h6>
													<h2 class="mb-0">Total Risks</h2>
												</div>
												<div class="col col-auto">
													<span class="badge badge-danger">Total Risks</span>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col  text-danger font-weight-bold">
													Over all current budget
												</div>
												<div class="col col-auto">
													<h3 class="text-danger mb-0 "><span class="badge badge-danger">9.2%</span></h3>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col text-warning font-weight-bold">
													High Risk Over Due tasks
												</div>
												<div class="col col-auto">
													<h3 class="text-warning mb-0"><span class="badge badge-warning">2</span></h3>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col text-gray font-weight-bold">
													low Risk Scanning Risks
												</div>
												<div class="col col-auto ">
													<h3 class="text-gray mb-0"><span class="badge badge-darker">5</span></h3>
												</div>
											</div>
										</div>
									</div>
									<div class="card pull-up shadow bg-gradient-default">
										<div class="card-content">
											<div class="card-body">
												<img src="assets/img/circle.svg" class="card-img-absolute" alt="circle-image">
												<div class="text-white">
													<div class="row ">
														<div class="col">
															<h3 class="mb-0">Project:</h3>
														</div>
														<div class="col col-auto text-lighter">
															consectetur adipiscing elit
														</div>
													</div>
													<div class="row mt-3">
														<div class="col">
															<h3 class="mb-0">Start Date:</h3>
														</div>
														<div class="col col-auto text-lighter">
															12-12-2018
														</div>
													</div>
													<div class="row mt-3">
														<div class="col">
															<h3 class="mb-0">End Date:</h3>
														</div>
														<div class="col col-auto text-lighter">
															03-05-2019
														</div>
													</div>
													<div class="row mt-3">
														<div class="col">
															<h3 class="mb-0">Team Lead:</h3>
														</div>
														<div class="col col-auto text-lighter">
															John Wisely
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="card shadow overflow-hidden">
										<div class="card-body text-white bg-gradient-primary text-center">
											<h4>Employees</h4>
											<h1 class="mb-0">35,265</h1>
										</div>
										<div class="card-body">
											<div class="chart-circle" data-value="0.33" data-thickness="12" data-color="#00c3ed"><canvas width="120" height="120"></canvas>
												<div class="chart-circle-value"><div class="h2">34%</div></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="card shadow overflow-hidden">
										<div class="card-body text-white bg-gradient-default text-center">
											<h4>Projects</h4>
											<h1 class="mb-0">7,652</h1>
										</div>
										<div class="card-body">
											<div class="chart-circle" data-value="0.50" data-thickness="12" data-color="#0b1e70"><canvas width="120" height="120"></canvas>
												<div class="chart-circle-value"><div class="h2">50%</div></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="card shadow overflow-hidden">
										<div class="card-body text-white bg-gradient-yellow text-center">
											<h4>Revenue</h4>
											<h1 class="mb-0">$95,325</h1>
										</div>
										<div class="card-body">
											<div class="chart-circle" data-value="0.80" data-thickness="12" data-color="#ffa21d"><canvas width="120" height="120"></canvas>
												<div class="chart-circle-value"><div class="h2">80%</div></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="card shadow">
										<div class="card-body text-center">
											<i class="fas fa-envelope-open-text fa-5x text-primary"></i>
											<h1 class="mt-3 text-xl" >Mails Received</h1>
											<h1 class="text-xxl">7,652</h1>
											<a href="#" class="btn btn-primary ">View Mails</a>
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