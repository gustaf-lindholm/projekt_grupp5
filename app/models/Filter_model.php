<?php

class Filter_model extends Base_model
{
    public function filterForProducts()
    {
        if (isset($_POST['filter'])) {
        $searchSql = $_POST['filter'];
        $searchSql = preg_replace("#[^0-0a-z]#1", "". $searchSql);
           
        $query = mysql_query("SELECT * FROM user
        WHERE user.fname LIKE '%$searchSql%' OR user.lname LIKE '%$searchSql%'") || die("Could not search!");
      
        $count = mysql_num_rows($query);
        if ($count==0) {
            $output= "There were no search results";
        }else {
            while ($row = mysql_fetch_array($query)) {
                $fname= $row['fname'];
                $lname= $row['lname'];
                $uid= $row['uid'];
                $output .= '<div>'.$fname.' '.$lname.'</div>';
            }
        }

        // $count->getAll();
        // return self::$resultsearch;
    
    }
}
}