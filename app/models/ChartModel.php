<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ChartModel extends Model {
public function getbarData() {
    // Fetch data from the database
    return $this->db->query("
    SELECT author, COUNT(researchtitle) AS research_count
    FROM your_table_name
    WHERE gradelevel = 'd' 
    GROUP BY author
    
    ")->getResultArray();
}
}
?>