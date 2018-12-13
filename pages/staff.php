<script type="text/javascript">

function checkDelete(){
	return confirm("Are you sure?");
}

</script>


<div class="block-header">
     <h2>Staff</h2>
</div>

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                List Staff <a class="btn btn-success" href="?page=createstaff">Create</a>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>EMAIL</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php
                                		$result = mysqli_query($conn, "SELECT staff_id,first_name,last_name,email FROM staff");

                                		$bil = 1;


                                		while( $row = mysqli_fetch_array($result)){
                                	?>
                                		<tr>
                                			<td><?= $bil ?></td>
                                			<td><?= $row['first_name']; ?></td>
                                			<td><?= $row['last_name']; ?></td>
                                			<td><?= $row['email']; ?></td>
                                			<td>
     <a class="btn btn-info" href="?page=updatestaff&id=<?= $row['staff_id']; ?>"><i class="material-icons">mode_edit</i></a>
     <a class="btn btn-danger" href="?page=deletestaff&id=<?= $row['staff_id']; ?>" onclick="return checkDelete()"><i class="material-icons">delete</i></a>
                                			</td>
                                		</tr>


                                	<?php $bil++; } ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>