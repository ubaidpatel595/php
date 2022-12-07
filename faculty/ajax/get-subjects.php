<?php
namespace Phppot;

use Phppot\CountryState;
if (! empty($_POST["sem"])) {
    
    $sem = $_POST["sem"];
	$branch=$_POST["branch"];
   // print "$sem";
    require_once __DIR__ . '/../Model/CountryState.php';
    $branchSubject = new BranchSubject();
    $branchSubject = $branchSubject->getSubjects($sem,$branch);
    ?>
<option value="">Select Subjects</option>
<?php
    foreach ($branchSubject as $sub) {
        ?>
<option value="<?php echo $sub["scode"]; ?>"><?php echo $sub["sname"].'|'.$sub["scode"]; ?></option>
<?php
    }
}
?>