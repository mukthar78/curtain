<?php
include("header.html")
?>
<html>
<head>
<title>register</title>
</head>
<body>
<div class="register">
<center>
<br />
<h2>REGISTRATION FORM</h1>
<form action="connect.php" method="post">

<label for="name">NAME : </label>
<input type="name" name="name" size="20" placeholder="Enter your name" requried />
<br /><br />
<label for="age">AGE : </label>
<input type="number" name="age" size="3" placeholder="Enter your age" >
<br /><br />
<label for="dob">DATE OF BIRTH : </label>
<input type="date" name="dob" size="10" />
<br /><br />
<label for="gen">GENDER : </label>
<input type="radio" value="male" name="gen"  />MALE
<input type="radio" value="female" name="gen"  />FEMALE
<input type="radio" value="other" name="gen"  />OTHER
<br /><br />
<label for="email">E-MAIL : </label>
<input type="email" name="email" size="20" />
<br /><br />
<label for="pass">PASSWORD : </label>
<input type="password" name="password" maxlength="10" />
<br /><br />
<label for="size">LENGTH/SIZE</label>
<select name="size">
<option value="short"> SHORT (UO TO 63")</option>
<option value="medium"> MEDIUM (64"-84")</option>
<option value="long"> LONG (85"-108")</option>
<option value="extra long"> EXTRA LONG 109+ </option>
</select>
<br /><br />
<input type="submit" value="ORDER"/>
<input type="reset" value="LOG OUT" />
</form>
</center>
</div>
</body>

<?php
include("footer.html")
?>