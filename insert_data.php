<?php include("authenticate.inc.php"); ?>
<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Electrolink Customer Database :: Add Customer Details</title>
</head>

<body topmargin="0" bgcolor="#F2F2F2">

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="958" id="AutoNumber1" bgcolor="#003366" background="img/top_banner.gif" height="229">
    <tr>
      <td height="200">&nbsp;</td>
    </tr>
    <tr>
      <td height="29" valign="middle">
      <p align="center"><font face="Arial" size="2">
      <a href="homepage.php" style="text-decoration: none">
      <font color="#333333">Home</font></a>&nbsp;&nbsp; |&nbsp;&nbsp;<a href="insert_data.php" style="text-decoration: none; font-weight: 700"><font color="#333333"> Insert Data</font></a>&nbsp;&nbsp; |&nbsp;&nbsp; 
      <a href="monthly_report.php" style="text-decoration: none">
      <font color="#333333">Monthly Report</font></a>&nbsp;&nbsp; |&nbsp;&nbsp;
      <a href="daily_report.php" style="text-decoration: none">
      <font color="#333333">Daily Report</font></a>&nbsp;&nbsp; |&nbsp;&nbsp;
      <a href="change_pass.php" style="text-decoration: none">
      <font color="#333333">Change Password</font></a>&nbsp;&nbsp; |&nbsp;&nbsp;
      <a href="logout.php" style="text-decoration: none"><font color="#333333">Logout</font></a></font></td>
    </tr>
  </table>
  </center>
</div>
<div align="center">
  <center>
  <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="958" id="AutoNumber2" height="407" bgcolor="#FFFFFF">
    <tr>
      <td height="376" width="958" colspan="2" valign="center">
      <br>
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="900" id="AutoNumber3" height="255">
          <form method="POST" action="datainput.php"><tr>
            <td valign="top" width="439" height="255">
           Customer Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;
           <input type="text" name="cust_name" size="36" tabindex="1"> 
           
           <p>Customer Address&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;
           <textarea rows="3" name="cust_add" cols="30" tabindex="2"></textarea>&nbsp;&nbsp; </p>
           <p>Card Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
           :&nbsp; <input type="text" name="cust_card" size="36" tabindex="3"></p>
           <p>Subscription Charge&nbsp;&nbsp; :&nbsp;
           <input type="text" name="sub_charge" size="18" tabindex="4"></p>
           <p>Installation Charge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;
           <input type="text" name="inst_charge" size="18" tabindex="5"></p>
           <p>Reconnection Change :&nbsp;
           <input type="text" name="rec_charge" size="18" tabindex="6"></p>
           <p>Disconnection Change :&nbsp;
           <input type="text" name="discon_charge" size="18" tabindex="7"></td>
            <td valign="top" width="461" height="255">
           Amount Paid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;
           <input type="text" name="amount" size="18" tabindex="8">
           <p>Date of Payment&nbsp;&nbsp; :&nbsp;
           <select size="1" name="day" tabindex="9">
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
           </select>&nbsp;&nbsp; </p>
           <p>Month of Payment :&nbsp;
           <select size="1" name="month" tabindex="10">
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
           </select>&nbsp; </p>
           <p>Mode of Payment&nbsp; :&nbsp;
           <select size="1" name="mode" tabindex="11">
           <option selected value="Cash">Cash</option>
           <option value="Cheque">Cheque</option>
           </select>&nbsp; </p>
           <p>Cheque Number&nbsp;&nbsp;&nbsp; :&nbsp;
           <input type="text" name="cheque_num" size="19" tabindex="12"><font size="2" color="#333333">(if 
           paid by cheque)</font></p>
           <p>Due Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;<input type="text" name="due" size="18" tabindex="13"></p>
           <p>Flag&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
           :&nbsp; <select size="1" name="flag">
           <option selected value="y">Yes</option>
           <option value="n">No</option>
           </select></p>
           <p>&nbsp;
           </td>         
          </tr>
         </table>
        </center>
      </div>
      <p align="center">
     <input type="submit" value="Submit" name="B1"> <input type="reset" value="Reset" name="B2"></p>
      </form>
      <p align="center"><font color="#003366"><b>
      <a href="homepage.php" style="text-decoration: none">
      <font color="#003366">|&nbsp; Go Back&nbsp; | </font></a> </b>
      </font>
      </td>
    </tr>
    <tr>
      <td height="31" width="414"><font size="2">&nbsp; Copyright © Electrolink 
      | 2010 </font></td>
      <td height="31" width="544">
      <p align="right"><font size="2">Designed &amp; Developed by 
      <a href="mailto:saurav.y2k@gmail.com" style="text-decoration: none">
      <font color="#000000">Saurav Majumder</font></a>&nbsp;&nbsp;&nbsp;
      </font></td>
    </tr>
  </table>
  </center>
</div>

</body>

</html>