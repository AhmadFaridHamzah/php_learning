<div class="block-header">
     <h2>EMPLOYEE</h2>
</div>

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               LIST EMPLOYEE <a class="btn btn-success" href="?page=sample_upload">CREATE</a>
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
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Extension</th>
                                        <th>Size</th>
                                        <th>Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   	<?php 
        								$result = mysqli_query($conn, "SELECT * FROM upload");
        								
								        $i = 1;

                                        // echo "<pre>";
                                        // print_r(mysqli_fetch_array($result));
                                        // echo "</pre>";
                                        // die();

								        while($row = mysqli_fetch_array($result)){
								      ?>
							        <tr>
							          <td><?=$i?></td>
							          <td><?=$row["name"]?></td>
							          <td><?=$row["type"]?></td>
							          <td><?=$row["size"]?></td>
							          <td>
							          	<a class="btn btn-success" target="_blank" href="<?= $row["location"] ?>"><i class="material-icons">insert_drive_file</i></a>
							          </td>
							        </tr>
        							<?php $i++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>