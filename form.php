<html>
	<head>
		<title>Email Test</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<form method="post" action="getData.php">
			<input class="btmspace-15" type="text" value="" name="name" placeholder="Name" required> <br><br>
          <input class="btmspace-15" type="email" value="" name="email" placeholder="Email" pattern="[^ @]*@[^ @]*" required><br><br>
          <input class="btmspace-15" type="text" value="" name="mobile" placeholder="Mobile" maxlength="12" onkeypress="return numbersonly(event);" required> <br><br>
          <input class="btmspace-15" type="text" value="" name="organization" placeholder="Organization" required> <br><br>
          
          <select class="btmspace-15" id = "ddl" name="subject" title="Subject" required>
              <option>Subject</option>
              <option>Website Design</option>
              <option>Open Source</option>
              <option>Others</option>
          </select><br><br>
          <!--<input class="btmspace-15" type="text" value="" placeholder="Message/ Description" required> -->
          <textarea input class="btmspace-15" rows="4" cols="50" name="message" placeholder="Message/ Description"></textarea><br><br>
          <button class="btn" type="submit" value="submit" >Submit</button>
          <button class="btn" type="reset" value="Reset">Reset</button>
			
		</form>