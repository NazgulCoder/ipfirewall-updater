<?php
$myfile = fopen("blacklist.txt", "w") or die("Unable to open file!");


fwrite($myfile, "; NazgulCoder IP Blacklist - " . date("d M Y"));
fwrite($myfile, "\n");
fwrite($myfile, "\n");

$list = array(
"https://lists.blocklist.de/lists/all.txt", 
"https://www.spamhaus.org/drop/drop.txt", 
"https://www.spamhaus.org/drop/edrop.txt", 
"https://raw.githubusercontent.com/firehol/blocklist-ipsets/master/dshield_top_1000.ipset", 
"http://rules.emergingthreats.net/fwrules/emerging-Block-IPs.txt", 
"https://check.torproject.org/torbulkexitlist?ip=1.1.1.1");

foreach ($list as $value) {
  fwrite($myfile, file_get_contents($value));
  fwrite($myfile, "\n");
  fwrite($myfile, "\n");
  fwrite($myfile, "\n");
}
?>