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
        
        function calender(){
            

        
            
            $data = array(
               3  => ' ',
               7  => ' ',
               13 => ' ',
               26 => ' '
             );
            
            $prefs['template'] = '

   {table_open}<table border="0" cellpadding="0" cellspacing="0">{/table_open}

   {heading_row_start}<tr>{/heading_row_start}

   {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
   {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
   {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

   {heading_row_end}</tr>{/heading_row_end}

   {week_row_start}<tr>{/week_row_start}
   {week_day_cell}<td>{week_day}</td>{/week_day_cell}
   {week_row_end}</tr>{/week_row_end}

   {cal_row_start}<tr>{/cal_row_start}
   {cal_cell_start}<td>{/cal_cell_start}

   {cal_cell_content}<div style="color:blue">{content}{day}<br /> Available</div>{/cal_cell_content}
   {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

   {cal_cell_no_content}<div style="color:red">{day}<br/>Not Available</div>{/cal_cell_no_content}
   {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

   {cal_cell_blank}&nbsp;{/cal_cell_blank}

   {cal_cell_end}</td>{/cal_cell_end}
   {cal_row_end}</tr>{/cal_row_end}

   {table_close}</table>{/table_close}
';
$this->load->library('calendar', $prefs);
            echo $this->calendar->generate(2006, 6, $data);
        }
}
?>