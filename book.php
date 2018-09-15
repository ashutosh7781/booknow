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
			<select>

				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			</select>
		</p>
		<p >
			NUMBER OF ADULTS:
			<select>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</p>
		<p>
			NUMBER OF CHILDREN:
			<select>
					<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</p>
		<p>
			CHECK IN DATE:	<input type="text" placeholder="23-11-2018">
		</p>


</p>
<p>
	NUMBER OF DAYS OF STAY:
	<select>
		<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>s
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			</select>
		</p>
<p>
	<input type= "submit" value="BOOK NOW">
</p>
	</form>
</div>


</body>
</html>

