<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="Start your development with a Dashboard for Bootstrap 4." name="description">
	<meta content="Spruko" name="author">

	<!-- Title -->
	<title>Add Video | DroidOXY</title>
<?php include_once("header.php");?>
	<div class="page">
		<div class="page-main">
			<!-- Sidebar menu-->
			<!-- Sidebar menu-->
			<?php include_once("sidebar.php");?>
			<!-- Sidebar menu-->
			<?php include_once("menu.php");?>

			<!-- Sidebar menu-->

			<!-- app-content-->
						<!-- Page content -->
						<div class="container-fluid pt-8">
							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="#">Video</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Video</li>
								</ol>
								<!-- <a href="" class="btn btn-primary  mb-0"><i class="fas fa-cog mr-2"></i>Settings</a> -->
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Add A Video</h2>
										</div>
										<form class="cd-form floating-labels" action="success/" method="post">
										   <div class="card-body">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label" for="form-label">Title</label>
				                                        <input class="message form-control" value="" type="text" name="title" id="cd-name" required>
													</div>
													<div class="form-group">
														<label class="cd-label" for="cd-name">Sub Title</label>
				                                        <input class="message form-control" value="" type="text" name="sub" id="cd-name" required>
													</div>
													<div class="form-group">
														<label class="cd-label" for="cd-name">YouTube Video URL</label>
				                                        <input class="message form-control" value="" type="text" name="url" id="cd-name" required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="cd-label" for="cd-name">Points to Reward</label>
				                                        <input class="message form-control" value="" type="text" name="points" id="cd-name" required>
													</div>
													<div class="form-group">
														<label class="cd-label" for="cd-name">Video Duration</label>
				                                        <input class="message form-control" value="" type="text" name="time" id="cd-name" required>
													</div>
													
												</div>
												

												<div class="col-md-12">
													<hr>
													<input type="submit" value="Proceed to Add" class="btn btn-primary mt-1 mb-1">
												</div>
												
											</div>
										   </div>
									    </form>
									</div>
									
								</div>

								
							</div>
							

						
							<!-- Footer -->

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


	<!-- Ansta Scripts -->
	<!-- Core -->
	