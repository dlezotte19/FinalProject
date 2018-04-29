<!DOCTYPE html>
<html>
<head>
<script>
function validateForm(){
		alert("First name is a required");
}
function validateForm2(){
	var x = document.forms["myForm"]["fname"].value;
	if (x == null || x==""){
		alert("First name is a required");
		return false; 
	}
}

function validateEmail() {
  var x = document.forms["myForm"]["email"].value;
  var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>
</head>
<style>
form {
  text-align: center;
}
body {align: center;
	background-color: #509191;
	color: #ffffff;
margin:500;
	}

li {
    float: left;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #663333;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover:not(.active) {
    background-color: #663333;
}

.active {
    background-color: #660000;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    align: "center";
}
td {
    text-align: center;
}
</style>
<body>
<ul>
  <li><a href="">Home</a></li>
  <li><a class="active" href="http://dlezotte.0fees.us/FinalProject/order.php">Order</a></li>
  <li><a href="">Vender</a></li>
  <li><a href="">About</a></li>
<li><a href="http://dlezotte.0fees.us/FinalProject/contact.html">Contact</a></li>
</ul>
<h1> Farm Fresh Vegatables</h1>
<table align = "center">
	<tr>
		<td>
		<img onmouseover="this.src='lettuceInfo.jpg'" src="lettuce.jpg" 						onmouseout="this.src='lettuce.jpg'" alt="Lettuce" height=200 width = 300>
		</td>
		<td>
		<img onmouseover="this.src='spinachInfo.png'" src="spinach.jpg" 						onmouseout="this.src='spinach.jpg'" alt="Spinach" height=200 width = 300>
		</td>
                <td>
		<img onmouseover="this.src='parsleyInfo.jpg'" src="parsley.jpg" 						onmouseout="this.src='parsley.jpg'" alt="Parsley" height=200 width = 300>
		</td>
  		<td>
		<img onmouseover="this.src='kaleInfo.png'" src="kale.jpg" 							onmouseout="this.src='kale.jpg'" alt="Kale" height=200 width = 300>
		</td>
	</tr>
	<tr>
		<td><h3>
		Farm Fresh Lettuce</h3>
		</td>
		<td><h3>
		Farm Fresh Spinach</h3>
		</td>
		<td><h3>
		Farm Fresh Parsley</h3>
		</td>
		<td><h3>
		Farm Fresh Kale</h3>
		</td>
	</tr>

</table>
<br><br>
<table align = "center">
	<tr>
		<td>
		<img onmouseover="this.src='carrotsInfo.jpg'" src="carrots.jpg" 						onmouseout="this.src='carrots.jpg'" alt="Carrot" height=200 width = 300>
		</td>
		<td>
		<img onmouseover="this.src='redonionInfo.png'" src="redonion.jpg" 						onmouseout="this.src='redonion.jpg'" alt="Red Onion" height=200 width = 300>
		</td>
                <td>
		<img onmouseover="this.src='eggplantInfo.png'" src="eggplant.jpg" 						onmouseout="this.src='eggplant.jpg'" alt="Eggplant" height=200 width = 300>
		</td>
  		<td>
		<img onmouseover="this.src='tomatoInfo.png'" src="tomato.jpg" 							onmouseout="this.src='tomato.jpg'" alt="Kale" height=200 width = 300>
		</td>
	</tr>
	<tr>
		<td><h3>
		Farm Fresh Carrots</h3>
		</td>
		<td><h3>
		Farm Fresh Red Onion</h3>
		</td>
		<td><h3>
		Farm Fresh Eggplant</h3>
		</td>
		<td><h3>
		Farm Fresh Tomato</h3>
		</td>
	</tr>

</table>

<h1> Farm Fresh Fruits</h1>
<table align = "center">
	<tr>
		<td>
		<img onmouseover="this.src='appleInfo.jpg'" src="apple.jpg" 							onmouseout="this.src='apple.jpg'" alt="Apple" height=200 width = 300>
		</td>
		<td>
		<img onmouseover="this.src='orangeInfo.png'" src="orange.jpg" 						onmouseout="this.src='orange.jpg'" alt="Orange" height=200 width = 300>
		</td>
                <td>
		<img onmouseover="this.src='grapefruitInfo.png'" src="grapefruit.jpg" 						onmouseout="this.src='grapefruit.jpg'" alt="Grapefruit" height=200 width = 300>
		</td>
  		<td>
		<img onmouseover="this.src='blueberryInfo.png'" src="blueberry.jpg" 							onmouseout="this.src='blueberry.jpg'" alt="Blue Berries" height=200 width = 300>
		</td>
	</tr>
	<tr>
		<td><h3>
		Farm Fresh Apples</h3>
		</td>
		<td><h3>
		Farm Fresh Oranges</h3>
		</td>
		<td><h3>
		Farm Fresh Grapefruit</h3>
		</td>
		<td><h3>
		Farm Fresh Blueberries</h3>
		</td>
	</tr>

</table>
<br><br>
<table align = "center">
	<tr>
		<td>
		<img onmouseover="this.src='grapesInfo.png'" src="grape.jpg" 							onmouseout="this.src='grape.jpg'" alt="Grape" height=200 width = 300>
		</td>
		<td>
		<img onmouseover="this.src='strawberryInfo.jpg'" src="strawberry.jpg" 						onmouseout="this.src='strawberry.jpg'" alt="Strawberry" height=200 width = 300>
		</td>
		<td>
		<img onmouseover="this.src='raspberryInfo.png'" src="raspberry.jpg" 						onmouseout="this.src='raspberry.jpg'" alt="Raspberry" height=200 width = 300>
		</td>
		<td>
		<img onmouseover="this.src='grapefruitInfo.png'" src="pineapple.jpg" 						onmouseout="this.src='pineapple.jpg'" alt="Raspberry" height=200 width = 300>
		</td>	
	</tr>
	<tr>
		<td><h3>
		Farm Fresh Grapes</h3>
		</td>
		<td><h3>
		Farm Fresh Strawberries</h3>
		</td>
		<td><h3>
		Farm Fresh Rasperries</h3>
		<td><h3>
		Farm Fresh Pineapples</h3>
		</td>
		</td>
	</tr>

</table>


<form name="myForm" action="ordered.php" onsubmit="return validateForm()" method = "post">

First name:<br>
<input type = "text" name="fname"value=""><br>
Email:<br>
<input type = "text" name="email"value=""><br>
Street Address:<br>
<input type="text" name="address" value=""><br>
City:<br>
<input type="text" name="city" value=""><br>
ZIP Code:<br>
<input type="text" name="ZIP" value=""><br>
    <table align = "center">
                <tr>
                    <th>Produce</th>
                    <th>Current Market Price</th>
                    <th>Quantity Remaining</th>
                    <th>Order</th>
                </tr>

<?php
   
function runQuery($query){
    $connect = mysqli_connect("sql309.0fees.us","0fe_21387347","Db192895","0fe_21387347_farmer");
    $result = mysqli_query($connect, $query);
    return $result;
}

$query = "SELECT * FROM `produce`";
$queryResult = runQuery($query);

while($row = mysqli_fetch_array($queryResult)):?>
                <tr>
                    <td><?php echo $row['fruit'];?></td>
                    <td>$<?php echo $row['price'];?></td>
                    <td><?php echo $row['quantity'];?></td>
<td>
<?php echo $row['fruit'];?>:<br>
<input type="number" name="<?php echo $row['fruit'];?>" value="0" size = 2><br>
</td>
</tr>
                <?php 
            endwhile;
                ?>
            </table>
<p>
<input type = "submit" value = "Place Order"></br>
</p>
</form>
</body>
</html>	