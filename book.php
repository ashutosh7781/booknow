<!DOCTYPE html>
<html>
<head>
	<title>book now</title>
	<style type="text/css">
#sign-in
{
	width:100%;
	height:80px;
	background-color:#ffffcc;
	text-align:center;
	font-size:50px;
	text-shadow: 5px 3px #d9d9d9; 
}
#form{
position:relative;
left:500px;
top:20px; 


}
#content{
}
	


</style>
</head>
<body> 
	<div id="sign-in">
		SIGN IN
	</div>
<div id="form">

	
	<form action="now.php" method="POST">
		<p>NAME: <input type="text" placeholder="fullname"></p>
		<p>
			NUMBER OF ROOMS:
			<select name="room">

				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		</p>
		<p >
			NUMBER OF ADULTS:
			<select name="adult">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</p>
		<p>
			NUMBER OF CHILDREN:
			<select name="children">
					<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</p>
		<p>
			CHECK IN DATE:	<input type="text" placeholder="23-11-2018" name="date">
		</p>


</p>
<p>
	NUMBER OF DAYS OF STAY:
	<select name="stay">
		<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		</p>
<p>
	<input type= "submit" value="BOOK-NOW" name="submit">
</p>
	</form>
</div>


</body>
</html>

