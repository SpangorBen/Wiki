<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet"/> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo URLROOT;?>/css/style.css">
    <title><?php echo SITENAME ?></title>
</head>
<body class=" bg-gray-100" style="background-image: url('../images/TT.png'); background-position:center; background-size:cover;">

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
            <form action="<?php echo URLROOT?>pages/loginMethode" method="post">
              <div class="mb-12">
                <h3 class="text-3xl font-extrabold">Sign in</h3>
                <p class="text-sm mt-4 ">Don't have an account <a href="register" class="text-blue-600 font-semibold hover:underline ml-1 whitespace-nowrap">Register here</a></p>
              </div>
              <div>
                <label class="text-xs block mb-2">Email</label>
                <div class="relative flex items-center">
                  <input name="email" type="text" required class="w-full text-sm text-black border-b border-gray-300 focus:border-[#333] px-2 py-3 outline-none" placeholder="Enter email" />
                </div>
              </div>
              <div class="mt-8">
                <label class="text-xs block mb-2">Password</label>
                <div class="relative flex items-center">
                  <input name="password" type="password" required class="w-full text-sm text-black border-b border-gray-300 focus:border-[#333] px-2 py-3 outline-none" placeholder="Enter password" />
                </div>
              </div>
              <div class="flex items-center justify-between gap-2 mt-5">
                <div class="flex items-center">
                  <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                  <label for="remember-me" class="ml-3 block text-sm">
                    Remember me
                  </label>
                </div>
                <div>
                  <a href="jajvascript:void(0);" class="text-blue-600 font-semibold text-sm hover:underline">
                    Forgot Password?
                  </a>
                </div>
              </div>
              <div class="mt-12">
                <button class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded-full text-white bg-[#E97DBF] hover:bg-[#C974FF] focus:outline-none">
                  Sign in
                </button>
              </div>
            </form>
          </div>
          <div class="md:h-full max-md:mt-10 bg-[#E982C3] rounded-xl lg:p-12 p-8">
            <img src="../images/headvapor.jpg" class="w-full h-full object-contain" alt="login-image" />
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>
</html>