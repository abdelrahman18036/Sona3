<?php 
 
// Load the database configuration file 
include_once 'includes/connect.php'; 
 
// Fetch records from database 
$query = $link->query("SELECT * FROM contact ORDER BY id ASC"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "Sona3-Contact-" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('ID','timestamp','name','email','phone', 'address','message'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $lineData = array($row['id'], $row['timestamp'], $row['name'], $row['email'], $row['phone'], $row['address'], $row['message']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>