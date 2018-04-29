<html>
<style>
form {
  text-align: center;
}
body {
	background-color: #509191;
	color: #ffffff;
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
  <li><a href="http://dlezotte.0fees.us/FinalProject/order.php">Order</a></li>
  <li><a href="">Vender</a></li>
  <li><a href="">About</a></li>
<li><a href="">Contact</a></li>
</ul>



Thank you <?php echo $_POST["fname"]; ?>, for your purchase!<br>
A confirmation email has been sent to <?php echo $_POST["email"]; ?><br>
<a href = "http://dlezotte.0fees.us/FinalProject/order.php">back</a>


</body>
</html>