<?php
echo "feed back project";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Enter your feedback</h1>
<form action="" method="post">
        <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="What is your name">
        </div>
        <div class="mb-3">
            <input type="text" name="email" class="form-control" placeholder="What is your email">
        </div>
        <div class="mb-3">
            <textarea name="feedback" id="" class="form-control" rows="2">
            </textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" name="submit" value="Send">

        </div>
</form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>