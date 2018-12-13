<?php

	$staff_id = $_GET['id'];

	$sql = "SELECT * FROM staff WHERE staff_id=$staff_id";

	$staff = getResult($sql);

	// print_r($_POST);
	if(isset($_POST['btnUpdate'])){


		$sqlset = '';

		foreach ($_POST as $key => $value) {
			if($key != 'id' && $key != 'btnUpdate' ){
				$sqlset .= $key.'='."'".$value."',";
			}
		}

		$sqlset2 = trim($sqlset,",");


		$sql2 = "UPDATE staff SET $sqlset2 WHERE staff_id=$staff_id";

		updateSql($sql2);

		header('Location:http://localhost/sakilamanagement/index.php?page=staff');
	}

	// echo "<pre>";
	// print_r($staff);
	// echo "</pre>";

?>

<div class="block-header">
                <h2>Update Staff</h2>
            </div>



            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                STAFF
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
                        <div class="body">
                            <form action="?page=updatestaff&id=<?= $staff_id ?>" method="post">
                                <label for="email_address">First Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter your First Name" value="<?= $staff[0]['first_name']  ?>">
                                    </div>
                                </div>
                                 <label for="email_address">Last Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter your Last Name" value="<?= $staff[0]['last_name']  ?>">
                                    </div>
                                </div>

                                 <label for="email_address">Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your Email" value="<?= $staff[0]['email']  ?>">
                                    </div>
                                </div>

                                <br>
                                <button type="submit" name="btnUpdate" class="btn btn-primary m-t-15 waves-effect">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>