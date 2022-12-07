<?php
namespace Phppot;

use Phppot\CountryState;
if (! empty($_POST["branch"])) {
    
    $branch = $_POST["branch"];
   // print "br=$branch";
    require_once __DIR__ . '/../Model/CountryState.php';
    $branchSubject = new BranchSubject();
    $branchSubject = $branchSubject->getStaffByBranch($branch);
    ?>
<option value="">Select Staff</option>
<?php
    foreach ($branchSubject as $staff) {
        ?>
<option value="<?php echo $staff["ecode"]; ?>"><?php echo $staff["ecode"]; echo $staff["fname"]; ?></option>
<?php
    }
}
?>