<?php


include_once './connect_database.php'; 

	$connect    = new mysqli($host, $user, $pass,$database) or die("Error : ".mysql_error());
	
?>&nbsp;
<?php 
		
		// create array variable to store data from database
		$data = array();
		
			$sql_query = "SELECT id, title, sub, points, url, time
					FROM videos_list
					ORDER BY id DESC";
		
		
		$stmt = $connect->stmt_init();
		if($stmt->prepare($sql_query)) {	
			// Bind your variables to replace the ?s
			
			// Execute query
			$stmt->execute();
			// store result 
			$stmt->store_result();

			// get total records
			$total_records = $stmt->num_rows;
		}
		
		
		$stmt_paging = $connect->stmt_init();
		if($stmt_paging ->prepare($sql_query)) {
			// Bind your variables to replace the ?s
				$stmt_paging ->bind_param('ss', $from, $offset);
				
			// Execute query
			$stmt_paging ->execute();
			// store result 
			$stmt_paging ->store_result();

			$stmt_paging->bind_result($data['id'], 
					$data['title'],
					$data['sub'],
$data['points'], 					$data['url'], $data['time'] 
					);
					
					
			// for paging purpose
			$total_records_paging = $total_records; 
		}

		// if no data on database show "No Reservation is Available"
		if($total_records_paging == 0){
	
	?>
	<h1> No Videos to Show !!
		
	</h1>
	<hr />
	<?php 
		// otherwise, show data
		}else{
			$row_number = $from + 1;
	?>

                  <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                    <thead>
                      <tr>  
<th>No. </th>
<th>Title</th>
<th>Sub title</th>
<th>Points to Reward</th>
<th>URL of Video</th>
<th>Duration of Video </th>
<th>Action</th>
                      </tr>
                    </thead>

                    <tbody>

				<?php 

$count = 0;
					while ($stmt_paging->fetch()){ 

    $count+=1;
?>
                      <tr>

							<td><?php echo $count;?></td>
					<td><?php echo $data['title'];?></td>
							<td><?php echo $data['sub'];?></td>
						<td><?php echo $data['points']; ?></td>
							<td><?php echo $data['url'];?></td>
							<td><?php echo $data['time'];?></td>
                       
<td> 
<a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm<?php echo $data['id'];?>"><i class="fa fa-trash-o"></i> Delete Video</a>


                <!-- Small modal -->

<div class="modal fade bs-example-modal-sm<?php echo $data['id'];?>" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-sm<?php echo $data['rid'];?>">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2"> || Pocket </h4>
                      </div>
                      <div class="modal-body">
                        <h4>Confirm Delete?</h4>
                        <p>Do you really want to delete this Video??.</p>
                      <div class="modal-footer">
                        <button type="button" onclick="window.location.href='../videos.php'" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        
<button type="button" onclick="window.location.href='videos/delete_video.php?id=<?php echo $data['id'];?>'" class="btn btn-primary"> Delete !</button>

                      </div>

                    </div>
                  </div>
                </div>
                </div>

                <!-- /modals -->
              </div>

</td>
                      </tr>
						<?php 
						} 
					}
				?>

                    </tbody>
                  </table>

<?php 
	$stmt->close();
?>