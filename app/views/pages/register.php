<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo URLROOT;?>/css/style.css">
    <title><?php echo SITENAME ?></title>
</head>
<body class="h-screen bg-gray-100" style="background-image: url('../images/TT.png'); background-position:center; background-size:cover; background-repeat:no-repeat">

<div class="font-[sans-serif] text-[#EB78B9]">
      <div class="min-h-fit flex flex-col items-center justify-center">
        <div class="grid md:grid-cols-2 items-center gap-0 max-w-6xl w-full p-8 m-1 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md" style="/* From https://css.glass */
background: rgba(255, 255, 255, 0.25);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(9.6px);
-webkit-backdrop-filter: blur(9.6px);
border: 1px solid rgba(255, 255, 255, 0.3);">
          <div class="md:max-w-md w-full sm:px-6 py-4 bg-[#47548C] rounded-xl">
            <form action="<?php echo URLROOT; ?>pages/addUser" method="post">
              <div class="mb-12">
                <h3 class="text-3xl font-extrabold">Sign Up</h3>
              </div>
              <div class="">
                <label class="text-xs block mb-2">Name</label>
                <div class="relative flex items-center">
                  <input name="name" type="text" required class="w-full text-sm text-black border-b border-gray-300 focus:border-[#333] px-2 py-3 outline-none" placeholder="Enter Name" />
                </div>
              </div>
              <div class="mt-4">
                <label class="text-xs block mb-2">Email</label>
                <div class="relative flex items-center">
                  <input name="email" type="text" required class="w-full text-sm text-black border-b border-gray-300 focus:border-[#333] px-2 py-3 outline-none" placeholder="Enter email" />
                </div>
              </div>
              <div class="mt-4">
                <label class="text-xs block mb-2">Password</label>
                <div class="relative flex items-center">
                  <input name="password" type="password" required class="w-full text-sm text-black border-b border-gray-300 focus:border-[#333] px-2 py-3 outline-none" placeholder="Enter password" />
                </div>
              </div>
              <div class="mb-12">
                <!-- <h3 class="text-3xl font-extrabold">Sign in</h3> -->
                <p class="text-sm mt-4 ">You have an account <a href="login" class="text-blue-600 font-semibold hover:underline ml-1 whitespace-nowrap">login here</a></p>
              </div>
              <div class="mt-12">
                <button class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded-full text-white bg-[#E97DBF] hover:bg-[#C974FF] focus:outline-none">
                  Sign up
                </button>
              </div>
            </form>
          </div>
          <div class=" bg-[#E982C3] rounded-xl lg:p-12 p-8">
            <img src="../images/headvapor.jpg" class="w-full h-full rounded-xl object-contain" alt="login-image"  />
          </div>
        </div>
      </div>
    </div>

</body>
</html>