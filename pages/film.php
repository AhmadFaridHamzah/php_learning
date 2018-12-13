<script type="text/javascript">
	
$(document).ready(function() {
    var film = $('#film').DataTable( {
        "processing": true,
        "serverSide": true,
        // "stateSave":true,
        //"searching":false,
        "ajax":{
        	"url":"pages/serve_side/film_server.php"
        },
        "dom":'Bfrtip',
        "buttons":[
        	'csv','excel','pdf','copy','print'
        ]
    } );


    $("#yearSearch").on('keyup',function(){
    	film
    	.columns(2)
    	.search(this.value)
    	.draw();
    });

} );


</script>

<div class="block-header">
     <h2>Film</h2>
</div>

<div class="form-group">
      <label for="usr">Year:</label>
      <input type="text" name="yearSearch" id="yearSearch" class="form-control">
    </div>
 	
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                List Film
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                 
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="film">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Descirption</th>
                                            <th>Release Year</th>
                                            <th>Special Features</th>
                                            <th>Language</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>Title</th>
                                            <th>Descirption</th>
                                            <th>Release Year</th>
                                            <th>Special Features</th>
                                            <th>Language</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>