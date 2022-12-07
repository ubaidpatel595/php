<?php
namespace Phppot;

use Phppot\CountryState;
require_once __DIR__ . '/Model/CountryState.php';
$branchSubject = new BranchSubject();
$branchSubject = $branchSubject->getAllBranches();
?>
<html>
<head>
<TITLE>jQuery Dependent DropDown List - Countries and States</TITLE>
<head>
<link href="./assets/css/style.css" rel="stylesheet" type="text/css" />
<script src="./vendor/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
function getBranch(val) {
    $("#loader").show();
	$.ajax({
	type: "POST",
	url: "./ajax/get-country-state-ep.php",
	data:'branch='+val,
	success: function(data){
		$("#staff").html(data);
		$("#loader").hide();
	}
	});
}

function getSub(val) {
	
    $("#loader").show();
	var branch = $('#branch').val();
    var sem = $('#sem').val();
	$.ajax({
	type: "POST",
	url: "./ajax/get-subjects.php",
	data:{sem:sem,
            branch:branch},
	success: function(data){
		$("#subjects").html(data);
		$("#loader").hide();
	}
	});

}  
</script>
</head>
<body>
   <form method="POST" name="f1" action='subjectallotment.php'>

    <div class="frmDronpDown">
        <div class="row">
            <label>Branch:</label><br /> <select name="branch"    id="branch" class="demoInputBox"  onChange="getBranch(this.value);">
                <option value="">Select branch</option>
<?php
foreach ($branchSubject as $branch) {
    ?>
<option value="<?php echo $branch['branch']; ?>"> <?php echo $branch['branch']; ?></option>
<?php
}
?>
</select>
        </div>
		
        <div class="row">
            <label>Staff:</label><br /> <select name="staff"   id="staff" class="demoInputBox">
                <option value="">Select staff</option>
            </select> 
        </div>
    
	
	<div class="row">
            <label>Semester:</label><br /> <select name="sem"   id="sem" class="demoInputBox" onChange="getSub(this.value);">
                <option value="">Select Semester</option>
				<option value="1">I semester</option>
				<option value="2">II semester</option>
				<option value="3">III semester</option>
				<option value="4">IV semester</option>
				<option value="5">V semester</option>
				<option value="6">VI semester</option>
            </select> 
			
        </div>
	<div class="row">
            <label>Subjects:</label><br /> <select name="subjects[]"   id="subjects" class="demoInputBox" >
                <option value="">Select subjects</option>
            </select> 
        </div>	
	<input type=submit value=Submit>	
	</div>
</form>	
</body>

</html>