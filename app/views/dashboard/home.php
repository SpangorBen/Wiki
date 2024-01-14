
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
<body class="">

<!-- <div class="bg-gray-900 min-h-screen flex items-center justify-center" style="background-image:linear-gradient(315deg, #ff6ac1 0%, #7868e6 74%);"> -->
<div class="bg-gray-900 min-h-screen flex items-center justify-center" style="background-image: url(../images/copy.png); background-position:center;">

  <div class="bg-gray-800 flex-1 flex flex-col space-y-5 lg:space-y-0 lg:flex-row lg:space-x-10 max-w-6xl sm:p-6 sm:my-2 sm:mx-4 sm:rounded-2xl" style="background-image: url(../images/wallvapor.jpg); background-position:center;">
    <!-- Navigation -->
    <div class="bg-gray-900 px-2 lg:px-4 py-2 lg:py-10 sm:rounded-xl flex lg:flex-col justify-between" style="background-color: #054C78;">
      <nav class="flex items-center flex-row space-x-2 lg:space-x-0 lg:flex-col lg:space-y-2">
        <a class="text-white/50 p-4 inline-flex justify-center rounded-md hover:bg-gray-800 hover:text-white smooth-hover" href="tags">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
          </svg>
        </a>
        <!-- Active: bg-gray-800 text-white, Not active: text-white/50 -->
        <a class="bg-gray-800 text-white p-4 inline-flex justify-center rounded-md" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
          </svg>
        </a>
        <a class="text-white/50 p-4 inline-flex justify-center rounded-md hover:bg-gray-800 hover:text-white smooth-hover" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
          </svg>
        </a>
      </nav>
      <div class="flex items-center flex-row space-x-2 lg:space-x-0 lg:flex-col lg:space-y-2">
        <a class="text-white/50 p-4 inline-flex justify-center rounded-md hover:bg-gray-800 hover:text-white smooth-hover" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
          </svg>
        </a>
        <a class="text-white/50 p-4 inline-flex justify-center rounded-md hover:bg-gray-800 hover:text-white smooth-hover" href="../pages/logout">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
    <!-- Content -->
    <div class="flex-1 px-2 sm:px-0">
      <div class="flex justify-between items-center">
        <h3 class="text-3xl font-extralight text-white/50">Categories</h3>
        <div class="inline-flex items-center space-x-2">
          <a class="bg-gray-900 text-white/50 p-2 rounded-md hover:text-white smooth-hover" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
          </a>
          <a class="bg-gray-900 text-white/50 p-2 rounded-md hover:text-white smooth-hover" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
            </svg>
          </a>
        </div>
      </div>
      <div class="mb-8 sm:mb-0 mt-10 grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <div class="group bg-gray-900/30 py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/40 hover:smooth-hover">
          <a onclick="openMyPopup()" class="bg-gray-900/70 text-white/50 group-hover:text-white group-hover:smooth-hover flex w-20 h-20 rounded-full items-center justify-center" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
          </a>
          <a class="text-white/50 group-hover:text-white group-hover:smooth-hover text-center" href="#" onclick="openMyPopup()">Add Category</a>
        </div>

        <!-- Wikis Display -->

        <?php foreach($data as $category) {?>
          <div class="relative group bg-gray-900/80 py-10 sm:py-12 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-600 hover:smooth-hover">
            <img class="w-20 h-20 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1547592180-85f173990554?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="cuisine" />
            <h4 class="text-white text-2xl font-bold capitalize text-center"><?php echo $category->Title;?></h4>
            <p class="text-white/50"><?php echo $category->Total_Wikis;?> Wikis</p>
            <p class="absolute top-2 text-white/20 inline-flex items-center text-xs"><?php echo $category->Archived_Count?> Archived <span class="ml-2 w-2 h-2 block bg-red-500 rounded-full group-hover:animate-pulse"></span></p>
            <div class="flex gap-2 pt-2">
              <a href="<?php echo URLROOT . 'Dashboard/deleteCategory/' . $category->Category_ID?>" class="delete-button">
                <svg class="delete-svgIcon" viewBox="0 0 448 512">
                  <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                </svg>
              </a>
              <button class="edit-button" onclick="openEdit('<?php echo $category->Category_ID?>', '<?php echo $category->Title?>', '<?php echo $category->Description?>')">
                <svg class="edit-svgIcon" viewBox="0 0 512 512">
                  <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                </svg>
              </button>
            </div>

          </div>
        <?php }?>
      </div>
    </div>
  </div>
  <div class="flex flex-row mt-2">
    <div
      class="flex w-full items-center justify-between bg-white
      dark:bg-gray-800 px-8 py-6">
      <!-- card -->
      <div class="flex">
        <img
          class="h-12 w-12 rounded-full object-cover"
          src="data:image/jpeg;base64,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"
          alt="infamous" />

        <div class="flex flex-col ml-6">
          <span class="text-lg font-bold">Amazon</span>
          <div class="mt-4 flex">
            <div class="flex">
              <span
                class="ml-2 text-sm text-gray-600
                dark:text-gray-300 capitalize">
                Niccolo perra
              </span>
            </div>

            <div class="flex ml-6">
              <span
                class="ml-2 text-sm text-gray-600 dark:text-gray-300 capitalize">
                13 aug 2016
              </span>
            </div>

            <div class="flex ml-6">
              <span
                class="ml-2 text-sm text-gray-600
                dark:text-gray-300 capitalize">
                21 hours
              </span>
            </div>
          </div>

          <div class="mt-4 flex">
            <button
              class="flex items-center focus:outline-none border rounded-full py-2 px-6 leading-none border-gray-500 dark:border-gray-600 select-none hover:bg-blue-400 hover:text-white dark-hover:text-gray-200">
              <span>Select Category</span>
            </button>

            <button
              class="flex items-center ml-4 focus:outline-none border rounded-full py-2 px-6 leading-none border-blue-500 dark:border-blue-600 select-none hover:bg-blue-400 hover:text-white dark-hover:text-gray-200">
              <span>Add note</span>
            </button>

          </div>
        </div>
      </div>

      <div class="flex flex-col -mt-10 mr-20">
        <span
          class="font-semibold text-green-500
          dark:text-green-300">
          Refunded
        </span>
        <span
          class="font-semibold text-green-500
          dark:text-green-300">
          200 $
        </span>
        <span
          class="text-sm text-gray-700 dark:text-gray-400
          mt-2">
          300,00kr
        </span>

      </div>
    </div>

    <div
      class="text-center flex flex-col items-center
      justify-center bg-white dark:bg-gray-800
      dark:text-gray-300 ml-1 px-12 cursor-pointer
      hover:bg-blue-200 dark-hover:bg-blue-500 rounded-lg">
      <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
        <path
          d="M9.47 9.65l-1.41 1.42L11
          14l5.19-5.18-1.41-1.42L11 11.18M17 3H7c-1.1 0-2
          .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2m0 15l-5-2.18L7
          18V5h10z"></path>
      </svg>

    </div>
  </div>
</div>


<!-- Add Categroy -->
<div id="Add" tabindex="-1" aria-hidden="true" class="absolute top-[50%] left-[50%] translate-y-[-50%] translate-x-[-10%] p-5 w-full rounded-md shadow-sm z-50 hidden">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Category
                </h3>
                <button type="button" onclick="closeMyPopup()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="<?php echo URLROOT; ?>dashboard/addCategory" method="post" class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
                        <input type="text" name="title" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Category name" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Description</label>
                        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write category description here"></textarea>                    
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add new category
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Edit Category -->
<div id="Edit" tabindex="-1" aria-hidden="true" class="absolute top-[50%] left-[50%] translate-y-[-50%] translate-x-[-10%] p-5 w-full rounded-md shadow-sm z-50 hidden">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Edit Category
                </h3>
                <button type="button" onclick="closeEdit()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form action="<?php echo URLROOT; ?>dashboard/editCategory" method="post" class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category ID</label>
                        <input type="text" name="catId" id="catId" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Category ID" required>
                    </div>
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category New Name</label>
                        <input type="text" name="title" id="modTitle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type New Category name" required>
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category New Description</label>
                        <textarea id="modDescription" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type New Category Description" required></textarea>                    
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Edit category
                </button>
            </form>
        </div>
    </div>
</div>


<script>
    function openMyPopup() {
        document.getElementById('Add').style.display = 'block';
    }
    function closeMyPopup() {
        document.getElementById('Add').style.display = 'none';
    }
    function openEdit(id, title, description) {
        document.getElementById('catId').value = id;
        document.getElementById('modTitle').value = title;
        document.getElementById('modDescription').value = description;
        document.getElementById('Edit').style.display = 'block';
    }
    function closeEdit() {
        document.getElementById('Edit').style.display = 'none';
    }
</script>

</body>