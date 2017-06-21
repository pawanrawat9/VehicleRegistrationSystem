<html>
<head>
	<link rel="stylesheet" type="text/css" href="mainstyle.css">
</head>
<body >
	<form method="post" class="style20" id="owner" name="owner"><br>
		<h3>Name:<input type="text" name="name" class="posv">
		<br><br>
		License_no:<input type="text" name="number" class="posv">
		<br><br>
		License_date:<input type="text" name="date" class="posv">
		<br><br>
		Age:<input type="text" name="age" class="posv">
		<br><br>
		Contact:<input type="text" name="contact" class="posv">
		<br><br>
		Profession:<input type="text" name="profession" class="posv">
		<br><br>
		Gender:
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female"><font color="yellow">Female</font>
		<input type="radio" name="gender" value="male"><font color="yellow">Male</font>
		<br><br>
		Address:<textarea name="address" rows="3" cols="40" class="posv"></textarea></h3>
		<br><br>
		<input type="submit" name="submit" value="submit" onclick="load('errowner')" class="b" id="bpos">
	</form>
<script>
      $(function () {
        $('#owner').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            url: 'insert_owner.php',
            data: $('form').serialize(),
            success: function (data) {
              alert(data);
			$('#owner')[0].reset();
            }
          });
        });
		
      });
    </script>
</body>
</html>