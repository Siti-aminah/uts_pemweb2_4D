<?php

$hostDB = 'ec2-34-230-153-41.compute-1.amazonaws.com';
$portDB = '5432';
$nameDB = 'dbch9c8pk7s9nt';
$userDB = 'brfiecnmahknvl';
$pwDB = 'c2b55689f37249b9e65834fcb67ef2f9cfa259e3ad4eb141890b037451db9882';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

if($connection){

}else{
 
}
?>