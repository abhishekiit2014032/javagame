<?php
include('session.php');
?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>fuck off</title>

<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="demo.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>




<link href="css/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.191.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script>
$(function(){
  $.datepicker.setDefaults(
    $.extend($.datepicker.regional[''])
  );
  $('#datepicker').datepicker();
});
</script>
<script>
 function abc1()
{
var link=true;
if (link) window.location='index.php';
//if(link) window.open ("submit.php",'_self');http://localhost/project123/submit.php

document.getElementByid("a");
window.alert('a');
}
</script>


<!--styling php table-->
<style>
.pure-table{border-collapse:collapse;border-spacing:0;empty-cells:show;border:1px solid #cbcbcb;margin-left:50%;margin-top:-300px;}.pure-table caption{color:#000;font:italic 85%/1 arial,sans-serif;padding:1em 0;text-align:center}.pure-table td,.pure-table th{border-left:1px solid #cbcbcb;border-width:0 0 0 1px;font-size:inherit;margin:0;overflow:visible;padding:.5em 1em}.pure-table td:first-child,.pure-table th:first-child{border-left-width:0}.pure-table thead{background-color:#e0e0e0;color:#000;text-align:left;vertical-align:bottom}.pure-table td{background-color:transparent}.pure-table-odd td{background-color:#f2f2f2}.pure-table-striped tr:nth-child(2n-1) td{background-color:#f2f2f2}.pure-table-bordered td{border-bottom:1px solid #cbcbcb}.pure-table-bordered tbody>tr:last-child>td{border-bottom-width:0}.pure-table-horizontal td,.pure-table-horizontal th{border-width:0 0 1px;border-bottom:1px solid #cbcbcb}.pure-table-horizontal tbody>tr:last-child>td{border-bottom-width:0}.pure-table tr:hover { background-color:#e0e0e0};
</style>
	

<style type="text/css">
 .button {
  color:#08233e;
    display:inline-block;
  font:2.4em Futura, ‘Century Gothic’, AppleGothic, sans-serif;
  font-size:70%;
  padding:14px;
  margin-top:250px;
  background:url(overlay.png) repeat-x center #cbd4e4;
  /*background-color:rgba(255,204,0,1);
  border:1px solid #ffcc00;*/
  -moz-border-radius:10px;
  -webkit-border-radius:10px;
  border-radius:10px;
  border-bottom:1px solid #9f9f9f;
  -moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);
  -webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);
  box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);
  cursor:pointer;
 }
 .button:hover {
  background-color:#96ACD8;
 }
 </style>

</head>

<body>


<!frameset cols="120">
<!/frameset>


<div id="div-regForm">

<form id="regForm" action="submit.php" method="post">

<table>
  <tbody>
  <tr>
    <td><label for='source'><font size=3>source</font></label></td>
    <td><div class='input-container'><input name='source' id='source' type='text'  /></div></td>
  </tr>
  <tr>
    <td><label for="destination"><font size=3>destination</label></td>
    <td><div class="input-container"><input name="destination" id="destination" type="text" /></div></td>
  </tr>

<tr>
<td><label for="destination"><font size=3>calendar</label></td>
<td>
 <div class="input-container">
 <input id="datepicker" type="text" name="calendar"  /></td>
</div>
 </tr>
  <tr>
    <td><label><font size=3>date</label></td>
    <td>
    <div class="input-container">
    <select name="month"><option value="0"><font size=3>Month:</option>
	    <option value="1"><font size=3>jan</option>
	    <option value="2"><font size=3>feb</option>
	    <option value="3"><font size=3>march</option>
	    <option value="4"><font size=3>april</option>
	    <option value="5"><font size=3>may</option>
	    <option value="6"><font size=3>june</option>
	    <option value="7"><font size=3>july</option>
	    <option value="8"><font size=3>aug</option>
	    <option value="9"><font size=3>sept</option>
            <option value="10"><font size=3>oct</option>
            <option value="11"><font size=3>nov</option>
            <option value="12"><font size=3>dec</option>	
	</select>
    <select name="day"><option value="0"><font size=3>Day:</option>
	    <option value="1"><font size=3>1</option>
	    <option value="2"><font size=3>2</option>
	    <option value="3"><font size=3>3</option>
	    <option value="4"><font size=3>4</option>
	    <option value="5"><font size=3>5</option>
	    <option value="6"><font size=3>6</option>
	    <option value="7"><font size=3>7</option>
	    <option value="8"><font size=3>8</option>
	    <option value="9"><font size=3>9</option>
            <option value="10"><font size=3>10</option>
            <option value="11"><font size=3>11</option>
            <option value="12"><font size=3>12</option>
            <option value="13"><font size=3>13</option>
	    <option value="14"><font size=3>14</option>
	    <option value="15"><font size=3>15</option>
	    <option value="16"><font size=3>16</option>
	    <option value="17"><font size=3>17</option>
	    <option value="18"><font size=3>18</option>
	    <option value="19"><font size=3>19</option>
	    <option value="20"><font size=3>20</option>
	    <option value="21"><font size=3>21</option>
            <option value="22"><font size=3>22</option>
            <option value="23"><font size=3>23</option>
            <option value="24"><font size=3>24</option>
	    <option value="25"><font size=3>25</option>
	    <option value="26"><font size=3>26</option>
	    <option value="27"><font size=3>27</option>
	    <option value="28"><font size=3>28</option>
	    <option value="29"><font size=3>29</option>
	    <option value="30"><font size=3>30</option>
	    <option value="31"><font size=3>31</option>
	</select>
	<select name="year"><option value="0"><font size=3>Year:</option>
	    <option value="1"><font size=3>2016</option>
	    <option value="2"><font size=3>2017</option>	
	</select>
    </div>
    </td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td><input type="submit" class="greenButton" value="availability" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
</td>
  </tr>
  
  
  </tbody>
</table>

</form>

<div id="error">
&nbsp;
</div>

</div>








      </tbody>
    </table>










<table border="2" class="pure-table" bgcolor='white'>
      <thead>
        <tr>
          <th>flight_id</th>
          <th>source</th>
          <th>destination</th>
          <th>fare_E</th>
          <th>fare_B</th>
        </tr>
      </thead>
      <tbody>
        <?php
        //include("config.php");

       // include("session.php");
        $day11=1;
     //   $day111=$_POST['calender'];
     //   echo $day111;
function getday(){

//if($_SERVER["REQUEST_METHOD"] == "POST") {
  if($_SERVER["REQUEST_METHOD"] == "POST") {
$date = $_POST['calendar'];

$day = date('l', strtotime($date));
echo $date;
echo $day;
return $date;
}
if(!isset($_POST['submit']))
{
    $day11 = getday();
  
}
}
//$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
//$db=mysqli_select_db(DB_NAME,$conn) or die("Failed to connect to MySQL: " . mysqli_error());
      //execute the SQL query and return records
    //  $result = mysql_query("SELECT * FROM routes  ");
  if($_SERVER["REQUEST_METHOD"] == "POST") {
$source1 = $_POST['source'];
$destination1 = $_POST['destination'];

  $result = mysqli_query($db,"SELECT flight_id,fare_E,fare_B FROM routes WHERE routes.source =  '".$source1."' AND routes.destination = '".
    $destination1."'" ) or die(mysqli_error());
    
          while( $row = mysqli_fetch_assoc( $result ) ){
			//$var='{$row['flight_id']}';
          		//<a href='" . ?id=$fieldRow[0] . "'>
		       echo "<tr>";
                       echo  "<td ><a href='index.php?flight_id1={$row['flight_id']}&fare_E1={$row['fare_E']}&fare_B1={$row['fare_B']}&day1=$day11&sourceA=$source1&destinationA=$destination1'>{$row['flight_id']}</a></td>";
                       echo  "<td>{$source1}</td>";
                       echo  "<td>{$destination1}</td>";
		       echo  "<td>{$row['fare_E']}</td>";
		       echo  "<td>{$row['fare_B']}</td>"; 
                       echo  "</tr>\n";
			

          }
        }
        ?>
      </tbody>
    </table>
     <?php mysqli_close($db); ?>

<div class=button>
<a href = "logout.php"><input type="submit" value="sign out" /></a>
<a href = "history.php"><input type="submit" value="booking history" /></a>
</div>

</body>
</html>




