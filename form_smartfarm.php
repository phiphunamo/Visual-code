<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
</head>
<body>
    <div class="container">
        <h1> form about smartfarm </h1>
<form action="insert_smartfarm.php" method="post"  enctype="multipart/form-data">
     zone : <input type="text" name="zone" class="form-control"/> 
     Board: <input type="text" name="board" class="form-control"/> 
     อุณหภูมิ: <input type="text" name="temp" class="form-control"/> 
     ความชื้น: <input type="text" name="humi" class="form-control"/> 
     <input type="submit" value="บันทึก" class="btn btn-primary"/>
 </form> 
</div>
</body>
</html>