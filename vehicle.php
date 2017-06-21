<html>
<head>
<script>
      $(function () {
        $('#vehicle').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            url: 'insert_vehicle.php',
            data: new FormData($('#vehicle')[0]),
			cache: false,
            contentType: false,
            processData: false,
			async: false,
            success: function (data) {
              alert(data);
			  $('#vehicle')[0].reset();
            }
          });
        });
      });
    </script>
</head>
<body>
	<form enctype="multipart/form-data" method="post" class="style20" id="vehicle"><br>
		<h3>License No:<input type="text" name="number" id="ln" class="posv">
		<br><br>
		Company Name: <input type="text" name="cname" id="cn" class="posv">
		<br><br>
		Model Name: <input type="text" name="model" id="mn" class="posv">
		<br><br>
		Type: <input type="text" name="type" id="typ" class="posv">
		<br><br>
		Registration No: <input type="text" name="registration" id="rn" class="posv">
		<br><br>
		Chassis No: <input type="text" name="chassis" id="chn" class="posv">
		<br><br>
		Fuel Type: <input type="text" name="fuel" id="ftyp" class="posv">
		<br><br>
		Mfg Year: <input type="text" name="year" id="mfg" class="posv">
		<br><br>
		Engine No: <input type="text" name="engine" id="engn" class="posv">
		<br><br>
		Seating Capacity: <input type="text" name="capacity" id="cap" class="posv"></h3>
		<br><br>
		<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
		Vehicle Image: <input name="imagefile" type="file" />
		<input type="submit" name="submit" value="submit" onclick="errMsg()" class="b">
	</form>
</body>
</html>