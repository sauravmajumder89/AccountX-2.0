<?php include("authenticate.inc.php"); ?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Electrolink :: Customer Database</title>

</head>

<body topmargin="0" leftmargin="0">

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="1020" id="AutoNumber1" height="163" background="img/top_banner.gif">
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  </center>
</div>
<!-- ------------------------------Navbar position ------------------------------- -->
<?php include("navbar.php"); ?>
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="1020" id="AutoNumber2" height="412">
    <tr>
      <td height="412" width="1014" valign="top">
      
      <p align="center"></p>
      <div align="center">
        <center>
        <table border="0" cellpadding="10" cellspacing="10" style="border-collapse: collapse" bordercolor="#111111" width="990" id="AutoNumber3" height="273">
          <tr>
            <td valign="top" height="341" width="920">
             <div align="center">
               <center>
               <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="383" id="AutoNumber4" height="377">
                 <tr>
                   <td valign="middle" width="383" height="377">
                   <p align="center"><font size="6" color="#C0C0C0">Add New 
                   Expense</font></p>

<?php

if(isset($_GET['err']))
{
$err=$_GET['err'];

if($err==1)
{
	echo "<p align='center'><font color='red'>Expense cannot be added. Please Try Again.</font></p>";
}
elseif($err==2)
{
	echo "<p align='center'><font color='red'>One or more fields may be blank. Please fill all of them.</font></p>";
}
}
?>

                   <form method="POST" action="addex.php">
                     <p align="left">
                     Date : 
                     <select size="1" name="ex_day">
           <option selected value="01">01</option>
           <option value="02">02</option>
           <option value="03">03</option>
           <option value="04">04</option>
           <option value="05">05</option>
           <option value="06">06</option>
           <option value="07">07</option>
           <option value="08">08</option>
           <option value="09">09</option>
           <option value="10">10</option>
           <option value="11">11</option>
           <option value="12">12</option>
           <option value="13">13</option>
           <option value="14">14</option>
           <option value="15">15</option>
           <option value="16">16</option>
           <option value="17">17</option>
           <option value="18">18</option>
           <option value="19">19</option>
           <option value="20">20</option>
           <option value="21">21</option>
           <option value="22">22</option>
           <option value="23">23</option>
           <option value="24">24</option>
           <option value="25">25</option>
           <option value="26">26</option>
           <option value="27">27</option>
           <option value="28">28</option>
           <option value="29">29</option>
           <option value="30">30</option>
           <option value="31">31</option>
           </select><select size="1" name="ex_mon">
           <option selected value="01">January</option>
           <option value="02">February</option>
           <option value="03">March</option>
           <option value="04">April</option>
           <option value="05">May</option>
           <option value="06">June</option>
           <option value="07">July</option>
           <option value="08">August</option>
           <option value="09">September</option>
           <option value="10">October</option>
           <option value="11">November</option>
           <option value="12">December</option>
           </select><input type="text" name="ex_year" size="4" value="2010"></p>
                     <p align="left">
                     Expense Type : <select size="1" name="ex_type">
                     <option selected value="purchase">Purchase</option>
                     <option value="salary">Salary</option>
                     <option value="transportation">Transportation</option>
                     <option value="misc">Misc</option>
                     </select></p>
                     <p align="left">
                     Purpose :
                     <textarea rows="6" name="purpose" cols="39" tabindex="2"></textarea></p>
                     <p align="left">Amount Paid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                     <input type="text" name="amount" size="23" tabindex="3"></p>
                     <p align="left">Voucher Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="voucher" size="23" tabindex="4"></p>
                     <p align="center">
                     <input type="submit" value="Add Expense" name="B1">
                     <input type="reset" value="Reset" name="B2"></p>
                   </form>
                   <p align="center"><font color="#FF0000">All fields are 
                   mandatory</font></td>
                 </tr>
               </table>
               </center>
             </div>
      
      </td>
    </tr>
  </table>
  </center>
</div>
<p align="left"><font size="2">&nbsp;&nbsp; Developed by Saurav Majumder</font></p>

</body>

</html>