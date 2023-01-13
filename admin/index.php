<?php include "../db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <?php include "adminHeader.php"; ?>

  <div class="flex">
    <div class="w-1/6">
        <?php include "side.php";?>
    </div>
    <div class="w-5/6 ">
        <div class="flex gap-4 my-5 px-5">
            <div class="flex-1 bg-teal-700 text-white p-5 rounded-lg">
                <h2 class="text-4xl font-black">500+</h2>
                <h6>Total Categories</h6>
            </div>
            <div class="flex-1 bg-red-800 text-white p-5 rounded-lg">
                <h2 class="text-4xl font-black">500+</h2>
                <h6>Total Books</h6>
            </div>
        </div>
    </div>
  </div>
</body>
</html>