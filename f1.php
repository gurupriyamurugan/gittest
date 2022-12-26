<?php



$lines = file("emp.txt");

$final_company = array();
$final_employees = array();
$employee = array();
foreach($lines as $line)
{
    $line = str_replace("\n","",$line); // Clear end of line character

    if ($line != "") {  // Check for blank line (indicator of next record)
        $arr = explode(":",$line);
        $fields = explode(" ",$arr[0]);
        $vals = $arr[1];
        switch(strtolower($fields[0])) {
            case "company" : $final_company[$fields[1]] = $vals;
            break;
            case "employee" : $employee[$fields[1]] = $vals;
            break;
        }
    } else {        
        if (!empty($employee)) array_push($final_employees, $employee);
        $employee = array(); // Clear array for next employee
    }
}
if (!empty($employee)) array_push($final_employees, $employee); //Catch last entry

// Enter your DB INSERT statement here, following is a dump of the arrays

echo "<pre> <b>COMPANY DATA:</b><br/>";
print_r($final_company); 
echo "<b>EMPLOYEE DATA:</b><br/>";
print_r($final_employees);
echo "</pre>";

?>