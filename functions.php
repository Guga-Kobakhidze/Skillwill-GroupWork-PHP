<?php

$doctorName = ['Steven Moffat', 'Jenny Flint', 'Catrin Stewart', 'Richard E. Grant',];
$departmentName = ['Medical Department', 'Rehabilitation Department', 'Radiology Department', 'Outpatient Department',];

function getCombineLable($doctorName, $departmentName)
{
    $combineName = array_merge($doctorName, $departmentName);
    for ($i = 0; $i < sizeof($combineName); $i++) {
        echo '<option value="Normal distribution ">' . $combineName[$i] . '</option>';
    }
    return $combineName;
}