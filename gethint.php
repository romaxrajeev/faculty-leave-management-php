<?php
// Array with names
$a[] = "Casual Leave";
$a[] = "On Duty Leave";
$a[] = "Compensatory Leave";
$a[] = "Earned Leave";
$a[] = "Special Leave";
$a[] = "Medical Leave";
$a[] = "Maternity Leave";
$a[] = "Leave Without Pay";

$q = $_REQUEST["q"];
$hint = "";
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}
echo $hint === "" ? "no suggestion" : $hint;
?>