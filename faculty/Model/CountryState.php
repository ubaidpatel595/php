<?php
namespace Phppot;

use Phppot\DataSource;

class BranchSubject
{
    private $ds;
    
    function __construct()
    {
        require_once __DIR__ . './../lib/DataSource.php';
        $this->ds = new DataSource();
    }
    
    /**
     * to get the country record set
     *
     * @return array result record
     */
    public function getAllBranches()
    {
        $query = "SELECT distinct branch FROM faculty";
        $result = $this->ds->select($query);
        return $result;
    }
    
    /**
     * to get the state record based on the country_id
     *
     * @param string $countryId
     * @return array result record
     */
    public function getStaffByBranch($branch)
    {
        //print "bb=$branch";
		$query = "SELECT fname,ecode FROM faculty WHERE branch = '$branch'";
        $paramType = 'd';
        $paramArray = array($branch);
        $result = $this->ds->select($query, $paramType, $paramArray);
        return $result;
    }
	
	public function getSubjects($sem,$branch)
    {
		print "$sem";
		$query = "SELECT scode,sname FROM subjects WHERE sem = '$sem' AND branch='$branch'";
        $paramType = 'd';
        $paramArray = array($sem);
        $result = $this->ds->select($query, $paramType, $paramArray);
        return $result;
    }
	
	
	
}