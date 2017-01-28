<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post">
    <p>
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstName">
    </p>
    <p>
       	<label for="email">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <p>
    	<label for="message">Message: </label>
        <textarea type="text" name="message" id="message"></textarea>
    </p>
    <input type="submit" value="Submit">
    </form>

	
</body>
</html>
