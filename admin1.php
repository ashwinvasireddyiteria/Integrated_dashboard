<?php  
  include("config.php");
  include("header.php");

?>
<style>

.a {

width: 100%;
position: absolute;
left: 0;
right: 0;
margin-left: auto;
margin-right: auto;

}
</style>
<!DOCTYPE html>
<body>

<br><br>
	
    
    <div class="a col-lg-12" style="position:absolute; top:20%;" > 
      <div class="container-fluid">
      <table class="table table-responsive">
	  
     
	 <div class="form-group row " >
     <div class="col-xs-2 px-2">
       <a href="create_user.php" class="btn btn-lg font-weight-bold text-center" style=" 
		background-color:#ADD8E6; width: 200px;" role="button">Create User</a>
      </div>
	  </div>
	  <div class="form-group row" >
	  <div class="col-xs-2 px-2">
       <a href="edit_usernew.php" class="btn btn-lg font-weight-bold text-center" style=" 
		background-color:#ADD8E6; width: 200px;" role="button">Edit User</a>
      </div>
	  </div>
	  <div class="form-group row " >
	  <div class="col-xs-2 px-2">
       <a href="add_rolesnew.php" class="btn btn-lg font-weight-bold text-center" style=" 
		background-color:#ADD8E6; width: 200px;" role="button">Add Roles</a>
      </div>
	  </div>
	  <div class="form-group row " >
	  <div class="col-xs-2 px-2">
       <a href="role_privilegesnew.php" class="btn btn-lg font-weight-bold text-center" style=" 
		background-color:#ADD8E6; width: 200px;" role="button">Role Privileges</a>
      </div>
	  </div>
	  <div class="form-group row" >
	  <div class="col-xs-2 px-2">
       <a href="user_rolesnew.php" class="btn btn-lg font-weight-bold" style=" 
		background-color:#ADD8E6; width: 200px;" role="button">User Roles</a>
      </div>
	  </div>
	  <div class="form-group row" >
	  <div class="col-xs-2 px-2">
      <a href="admin.php" class="btn btn-lg font-weight-bold" style="
	  width: 200px; background-color:#ADD8E6;" role="button" >Back</a>
     </div>
	 </div> 
</table>
</div>
</div>


</body>