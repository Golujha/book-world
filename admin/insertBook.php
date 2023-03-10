<?php include "../db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
      }
    }
  }
</script>
</head>

<body>
  <?php include "adminHeader.php"; ?>

  <div class="flex">
    <div class="w-1/6">
        <?php include "side.php";?>
    </div>
    <div class="w-5/6">
    <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <div class="flex px-10 justify-between items-center">
            <h2>Insert Book Here</h2>
            
            <!-- Button trigger modal -->
<a href="books.php" class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
  Show All Books
</a>

</div>

<div class="flex flex-1 justify-center items-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white w-1/2 mt-5">
            <form method="post" enctype="multipart/form-data">
                <div class="flex gap-3">
                    <div class="form-group mb-6 flex-1">
                        <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Title</label>
                        <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title" name="title">
                    </div>
                    <div class="form-group mb-6 flex-1">
                        <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">author</label>
                        <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter author" name="author">
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="form-group mb-6 flex-1">
                        <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">nop</label>
                        <input type="number" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nop" name="nop">
                    </div>
                    <div class="form-group mb-6 flex-1">
                        <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">mrp</label>
                        <input type="number" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mrp" name="mrp">
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="form-group mb-6 flex-1">
                        <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">discount_price</label>
                        <input type="number" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter discount_price" name="discount_price">
                    </div>
                    <div class="form-group mb-6 flex-1">
                        <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">description</label>
                        <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter description" name="description"></textarea>
                    </div>
                </div>
                <div class="flex gap-3">
                <div class="form-group mb-6 flex-1">
                    <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Category</label>
                    <select class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1" aria-describedby="emailHelp" name="category">
                        <option value="" selected disabled>Select Category Here</option>
                        <?php
                        $callingCat = mysqli_query($con, "select * from categories");
                        while ($item = mysqli_fetch_array($callingCat)) {
                            $cat_id = $item['cat_id'];
                            $cat_title = $item['cat_title'];
                            echo "<option value='$cat_id'>$cat_title</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group mb-6 flex-1">
                    <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Cover</label>
                    <input type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1" aria-describedby="emailHelp" name="cover" />
                </div>
                </div>
                <div class="form-group mb-6">
                    <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">ISBN</label>
                    <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1" aria-describedby="emailHelp" name="isbn" placeholder="enter isbn" />
                </div>


                <input type="submit" class=" px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" name="create" value="Insert Book">
            </form>
        </div>
    </div>

        </div>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

</body>
</html>


<?php
if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $nop = $_POST['nop'];
    $description = $_POST['description'];
    $discount_price = $_POST['discount_price'];
    $mrp = $_POST['mrp'];
    $isbn = $_POST['isbn'];
    $category = $_POST['category'];
    // image work
    $cover = $_FILES['cover']['name'];
    $tmp = $_FILES['cover']['tmp_name'];

    move_uploaded_file($tmp, "../bookImages/$cover");

    $query = mysqli_query($con, "insert into books (title, author, isbn, nop, mrp, discount_price, description, cover, category) value ('$title','$author','$isbn','$nop','$mrp','$discount_price','$description','$cover','$category')");

    if ($query) {
        redirect();
    } else {
        alert("failed");
    }
}
?>