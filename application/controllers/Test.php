<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Zoom
 */
class Test extends CI_Controller{


	function createDateRangeArray($strDateFrom,$strDateTo) {
  // takes two dates formatted as YYYY-MM-DD and creates an
  // inclusive array of the dates between the from and to dates.

  // could test validity of dates here but I'm already doing
  // that in the main script

	  $aryRange=array();

	  $iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2),     substr($strDateFrom,8,2),substr($strDateFrom,0,4));
	  $iDateTo=mktime(1,0,0,substr($strDateTo,5,2),     substr($strDateTo,8,2),substr($strDateTo,0,4));

	  if ($iDateTo>=$iDateFrom) {
	    array_push($aryRange,date('Y-m-d',$iDateFrom)); // first entry

	    while ($iDateFrom<$iDateTo) {
	      $iDateFrom+=86400; // add 24 hours
	      array_push($aryRange,date('Y-m-d',$iDateFrom));
	    }
	  }
	  return $aryRange;
	}

	function search($strDateFrom="",$strDateTo="")
	{

		$strDateFrom = "2013-05-01";
		$strDateTo = "2013-06-31";
		$searchDates = $this->createDateRangeArray($strDateFrom,$strDateTo);
		echo "<pre>";
		print_r($searchDates);
		echo "<pre>";
		$this->db->where_in('date',$searchDates);
		$bookedDates=$this->db->get('test');

		
		foreach($bookedDates->result() as $bookedDate)
		{
			if($key=array_search($bookedDate->date, $searchDates))
				unset($searchDates[$key]);
			
				
			
		}

		echo "<pre>";
		print_r($searchDates);
		echo "<pre>";

	}
}
?>