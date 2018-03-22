<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FORM</title>
  </head>
  <body>
    <form action="post.php" method="post">
      <p>Name:</p><br>
      <input type="text" name="name"><br>
      <p>Location:</p><br>
      <select name="location">
        <option value="Mountain View">Mountain View</option>
        <option value="Chicago">Chicago</option>
        <option value="Dallas">Dallas</option>
        <option value="Seattle">Seattle</option>
      </select><br>
      <p>Favorite Language:</p><br>
      <select name="language">
        <option value="JavaScript">JavaScript</option>
        <option value="PHP">PHP</option>
        <option value="Python">Python</option>
        <option value="Java">Java</option>
      </select><br>
      <p>Comment:</p><br>
      <input type="text" name="comment"><br>
      <input type="submit">
    </form>
  </body>
</html>
