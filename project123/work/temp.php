<?php
include('../session.php');
?>
<!DOCTYPE html>

<html>
<head>
    <title>HTML dynamic table using JavaScript</title>
    <script type="text/javascript" src="app.js"></script>
	<script>
	function abc1(){
	window.alert("your ticket has been generated");
	}
	</script>
	<style>
	*{
left:0;
right:0;
top:0;
}
body{
	font-family: "Times New Roman", Georgia, Serif;
}

.content 
{
position:absolute;
width:100%;
height:100%;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 25px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
    li a:hover {
    background-color: #111;
	color:red;
}
.active 
{
    background-color: #4CAF50;
	color:white;
	
}

	.flat-table1 {
  display: block;
  font-family: sans-serif;
  -webkit-font-smoothing: antialiased;
  font-size: 115%;
  overflow: auto;
  width: auto;
  position:absolute;
           top:40%;
           left:40%;
  }
  th {
    background-color: rgb(112, 196, 105);
    color: white;
    font-weight: normal;
    padding: 10px 30px;
    text-align: center;
  }
  td {
    background-color: rgb(238, 238, 238);
    color: black;
    padding: 10px 30px;
  }
  .flat-table1 {
  display: block;
  font-family: sans-serif;
  -webkit-font-smoothing: antialiased;
  font-size: 115%;
  overflow: auto;
  width: auto;
  position:absolute;
           top:15%;
           left:35%;
  }
  tr {
    background-color: rgb(112, 196, 105);
    color: white;
    font-weight: normal;
    padding: 10px 30px;
    text-align: center;
  }
  .styled-button-1 {
	-webkit-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	-moz-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	color:#333;
	background-color:#FA2;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border:none;
	font-family:'Helvetica Neue',Arial,sans-serif;
	font-size:16px;
	font-weight:700;
	height:36px;
	padding:4px 16px;
	text-shadow:#FE6 0 1px 0;
    position:absolute;
           top:100%;
           left:45%;
}
 
 </style><style>
.pure-table{border-collapse:collapse;border-spacing:0;empty-cells:show;border:1px solid #cbcbcb;margin-left:34%;margin-top:440px;}.pure-table caption{color:#000;font:italic 85%/1 arial,sans-serif;padding:1em 0;text-align:center}.pure-table td,.pure-table th{border-left:1px solid #cbcbcb;border-width:0 0 0 1px;font-size:inherit;margin:0;overflow:visible;padding:.5em 1em}.pure-table td:first-child,.pure-table th:first-child{border-left-width:0}.pure-table thead{background-color:#e0e0e0;color:#000;text-align:left;vertical-align:bottom}.pure-table td{background-color:transparent}.pure-table-odd td{background-color:#f2f2f2}.pure-table-striped tr:nth-child(2n-1) td{background-color:#f2f2f2}.pure-table-bordered td{border-bottom:1px solid #cbcbcb}.pure-table-bordered tbody>tr:last-child>td{border-bottom-width:0}.pure-table-horizontal td,.pure-table-horizontal th{border-width:0 0 1px;border-bottom:1px solid #cbcbcb}.pure-table-horizontal tbody>tr:last-child>td{border-bottom-width:0}.pure-table tr:hover { background-color:#e0e0e0};

</style>

<style>
.test{
width:90px;
}
p {
    margin-top: 2.6cm;
	color:blue;
	margin-left:3cm;
	
}

</style>
</head>
<body onload="load()"background="Website-Background-Wallpapers.jpg">

<?php 
//include("../config.php");
echo $f1= $_GET['flight'];
echo  $d1= $_GET['date'];
echo  $fare=$_GET['fare'];
?>
<p><font size="20px">BOOKING</font></p>
<div class = "content">
<ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="company.html">Company</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
<div id="myform">

<form  action='..\booking.php' method="post"> 

<table class ="flat-table1">
    <tr>
        <td><b>NAME:</b></td>
        <td><input type="text" id="NAME" name="NAME"></td>
    </tr>
    <tr>
        <td><b>AGE:</b></td>
        <td><input type="text" id="AGE" name="AGE"></td>
        
    </tr>
	 <tr>
        <td><b>SEX:</b></td>
        <td><input type="text" id="SEX" name="SEX">
	</td>
        
    </tr>
	 <tr>
        <td><b>PAN No:</b></td>
        <td><input type="text" id="PAN NO" class="test" width="48" name="pan_no">
		 <input type="button" id="add" value="Add" onclick="Javascript:addRow()"></td>
        
    </tr>
	<tr>
        <td><b>flight_id</b></td>
      <?php echo "<td><input type='text' id='flight_id' class='test' width='48' name='flight_id' value='{$f1}'>"?>
		 <!input type="button" id="add" value="Add" onclick="Javascript:addRow()"></td>
        
    </tr>
  <tr>
        <td><b>date</b></td>
      <?php echo "<td><input type='text' id='flight_id' class='test' width='48' name='date' value='{$d1}'>"?>
		 <!input type="button" id="add" value="Add" onclick="Javascript:addRow()"></td>
        
    </tr>
	<tr>
        <td><b>fare</b></td>
      <?php echo "<td><input type='text' id='flight_id' class='test' width='48' name='fare' value='{$fare}'>"?>
		 <!input type="button" id="add" value="Add" onclick="Javascript:addRow()"></td>
        
    </tr>
</table>
</div>
<div id="mydata">
<table id="myTableData" class ="pure-table"  border="1" cellpadding="2" bgcolor="white">
    <tr>
       <td><font color ="red">DELETE</font></td> 
       <td><b><font color ="red">NAME</font></b></td>
       <td><b><font color ="red">AGE</font></b></td>
       <td><b><font color ="red">SEX</font></b></td>
		 <td><b><font color ="red">PAN</font></b></td>
		  
    </tr>
</table>
</div>
<center>
<?php
$f=$_GET['flag'];
if ($f)
{
$fare=$_GET['fare1'];
}
else 
{
$fare=$_GET['fare'];
}
echo $fare;
//echo $f;

echo

"<input type='submit' class='styled-button-1' value=
'submit' onclick='abc1()'/></a></center>"?>

</div>
</form>
</body>
</html>