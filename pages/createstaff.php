<?php

	if(isset($_POST['btnSave'])){

			// print_r($_POST);
			// die();

		$sql = "INSERT INTO staff (first_name,last_name,email) VALUES (?,?,?)";

		$aStaff = [
				'first_name' => $_POST['first_name'],
				'last_name' => $_POST['last_name'],
				'email' => $_POST['email']
		];

		$result = setStaff($sql,$aStaff);

		if($result > 0){
			header('Location:http://localhost/sakilamanagement/index.php?page=staff');
		}else{
			die('registered failed');
		}


	}

?>

<div class="block-header">
                <h2>Create Staff</h2>
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
                            <form action="?page=createstaff" method="post">
                                <label for="email_address">First Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter your First Name">
                                    </div>
                                </div>
                                 <label for="email_address">Last Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter your Last Name">
                                    </div>
                                </div>

                                 <label for="email_address">Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your Email">
                                    </div>
                                </div>

                                <br>
                                <button type="submit" name="btnSave" class="btn btn-primary m-t-15 waves-effect">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>