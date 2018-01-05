<?php 
require "include.php";
TopWrapper();
// phpinfo(32); // to get all info of php variables

$FileName = $_SERVER["SCRIPT_FILENAME"]; 
echo "<P>File name of this file is ". $FileName . "</p>";
$Document = $_SERVER["DOCUMENT_ROOT"];
echo "<p> Document root is on " . $Document . "</p>";

$ScriptName = $_SERVER["SCRIPT_NAME"];
echo "<P> Script name is " .$ScriptName. "</p>";

$UserAgent = $_SERVER["HTTP_USER_AGENT"];
echo "<p> name of client ". $UserAgent . "</p>";


BottomWrapper();
?>