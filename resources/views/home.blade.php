<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="/register" method="post">
    @csrf
   <div>
   <label>username</label>
   <input name="username" placeholder="username"/>
   </div>
   <div>
   <label>password</label>
   <input name="password" placeholder="password"/>
   </div>
   <input type="submit"/>
  </form>
</body>
</html>