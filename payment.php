<html>
<head>
<title>My Cart</title>
<style type="text/css">
.textbox {
width:210px;
border:1px solid black;
height:25px;
padding:3px;
}
td{
margin:5px;
}
</style>
</head>
<body>
<CENTER>
<div style="margin-top:50px; border-radius:15px; border:2px solid black; width: 400px">
<form method="post" action="submit.php">
<h5 style="color: red">WELCOME TO MYBANK PAYMENT GATEWAY</h5><br><br>
<table>
<tr><td>Card Type : </td><td>
					<select style="width: 100px" name="cardtype">
					<option value="Accesories">Credit card</option>
					<option value="Mobiles">Debit card</option>
				</select></td></tr>
<tr><td>Card Number : </td><td> <input type="number" name="cardno" style="width: 100px"></td></tr>
<tr><td>CVV : </td><td><input type="password" name="cvv" style="width: 50px"><a href="">(What is this?)</a></td></tr>
<tr><td>Expiry Date: </td><td>
					<select style="width: 75px" name="cardtype">
					<option value="January">January</option>
					<option value="Febuary">Febuary</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
					</select>
					<select style="width: 75px" name="DOBYear">
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					</select>	
					</td></tr>
<tr><td>Cardholder Name :</td><td><input class="textbox" type="text" name="chname"></td></tr>
<tr><td>Enter Code : </td><td><input type="" name=""></td></tr>
<tr><td><img src='captcha.php'></td><td><input class="textbox" type="text" name="code"></td></tr>
<tr><td></td><td><input type="submit" value="PayNow"></td></tr>
</table>
</form>
</div>
</CENTER>
</body>
</html>