<header class=" body-font bg-black  text-white">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
   
    <a class="flex order-first lg:order-none lg:w-2/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
     
      <span class="ml-3 text-xl text-white">Book World - Admin Panel</span>
    </a>
    <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
      <a class="mr-5 hover:text-gray-100">Home</a>
      <a class="mr-5 hover:text-gray-100">Categories</a>
      <a class="mr-5 hover:text-gray-100">Register</a>
      <a class="hover:text-gray-100">Login</a>
    </nav>
    </div>
</header>

<?php 

if(!isset($_SESSION['admin'])){
    redirect("../login.php");
}