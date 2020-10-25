<?php
include('conn.php');
$myArray= array(); //holder for data to be returned via api
$myRow = array();  //array to populate entries and build out an object array

//checking to see if value of iload is empty
if(empty($_POST['iload'])){
    $vlimit = 1;
}
else{
    $vlimit = $_POST['iload'];
}

//checking if oset is set
if(isset($_POST['oset'])){
    $oset = $_POST['oset']; 
}
else{
    $oset = 0;
}
//iload and oset to array
$myArray['vlimit'] = $vlimit;
$myArray['oset'] = $oset;
//query for database connection
$query = "SELECT * FROM bposts ORDER BY id ASC LIMIT ".$vlimit." OFFSET ".$oset;
$result = $link->query($query);
//populating the arrays with result of the query
while($row = $result->fetch_array()){
    $myRow[]=array(
        "id"=>$row['id'],
        "content"=>$row['content'],
        "date"=>$row['date']
    );
}
//inserting the object to myArray
$myArray['content'] = $myRow;
//jason encoding to pick up from front end
echo json_encode($myArray);