<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaporwave Input</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Include Tailwind CSS -->
    <style>
        /* Custom styles */
        body {
            background-color: #ff6ac1;
            /* background-image: linear-gradient(315deg, #ff6ac1 0%, #7868e6 74%); */
            background-image: url(../images/wel.png);
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .input-container {
            position: relative;
            top: 30%;
        }

        .input {
            padding: 10px;
            padding-right: 15rem;
            height: 40px;
            border: 2px solid #0B2447;
            border-top: none;
            border-bottom: none;
            font-size: 16px;
            background: transparent;
            outline: none;
            box-shadow: 7px 7px 0px 0px #0B2447;
            transition: all 0.5s;
        }

        .input:focus {
            box-shadow: none;
            transition: all 0.5s;
        }

        .label {
            position: absolute;
            top: 10px;
            left: 10px;
            color: #0B2447;
            transition: all 0.5s;
            transform: scale(0);
            z-index: -1;
        }

        .input-container .topline {
            position: absolute;
            content: "";
            background-color: #0B2447;
            width: 0%;
            height: 2px;
            right: 0;
            top: 0;
            transition: all 0.5s;
        }

        .input-container input[type="text"]:focus ~ .topline {
            width: 35%;
            transition: all 0.5s;
        }

        .input-container .underline {
            position: absolute;
            content: "";
            background-color: #0B2447;
            width: 0%;
            height: 2px;
            right: 0;
            bottom: 0;
            transition: all 0.5s;
        }

        .input-container input[type="text"]:focus ~ .underline {
            width: 100%;
            transition: all 0.5s;
        }

        .input-container input[type="text"]:focus ~ .label {
            top: -10px;
            transform: scale(1);
            transition: all 0.5s;
        }
    </style>
</head>

<body>
    <div class="input-container">
        <input class="input" name="text" type="text">
        <label class="label" for="input">Enter Your Email</label>
        <div class="topline"></div>
        <div class="underline"></div>
    </div>

    <button class="bg-slate-900 text-white w-[160px] h-[50px] rounded-md" id="addAssureur" onclick="openMyPopup()">
        Add Assureur
    </button>
    <form action="<?php echo URLROOT; ?>admin/Assureur" method="post" class="absolute top-[50%] left-[30%] translate-y-[-50%] bg-white p-5 w-[650px] rounded-md shadow-sm z-50 hidden" id="Add" enctype="multipart/form-data">
        <div>
            <label for="" class="text-xl ">Name</label>
            <input type="text" name="Nom"  class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100" placeholder="Enter Name ">
        </div>
        <div>
            <label for="" class="text-xl ">Adresse</label>
            <input type="text" name="Adresse"  class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100" placeholder="Enter Adress">
        </div>
        <!-- <input type="text" name="mode"  class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100 hidden" value="add" > -->
        <div>
            <input type="submit" name="submit"  class="block w-full py-3 text-white text-xl px-1 cursor-pointer my-2 outline-none border-none bg-slate-900">
        </div>
    </form>


<!-- Modal toggle -->
<button data-modal-target="crud-modal" onclick="openMyPopup()" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button>

<!-- <a href=""></a> -->

<!-- Main modal -->
<!-- pop out form  -->

<a href="#"
    class="ml-[260px] mt-8 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-[#3b82f6] to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
    <span data-modal-target="crud-modal" data-modal-toggle="crud-modal"
        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
        Ajouter
    </span>
</a>

<div id="crud-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">

        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Ajouter Client
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <form action="<?= URL_ROOT ?>/pages/addClient" method="POST" class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                        <input type="text" name="nom" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="col-span-2">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
                        <input type="text" name="prenom" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="col-span-2">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adress</label>
                        <input type="text" name="adress" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>


                </div>
                <button type="submit" name="submit"
                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Add Client
                </button>
            </form>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>

</html>
