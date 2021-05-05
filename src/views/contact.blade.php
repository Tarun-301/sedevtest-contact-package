<html>
<head>
<meta charset="UTF-8">
<title>Contact</title>
</head>
<body>
<h1>Contact Us</h1>
<form action="{{route('contact.send')}}" method="post">
@csrf

<input type="text" name="name" placeholder="Your name please">
<input type="text" name="email" placeholder="Your valid email">
<textarea name="message" id="" cols="30" rows="10" placeholder="Your query please"></textarea>
<input type="submit" value="submit">
</form>
</body>

</html>
