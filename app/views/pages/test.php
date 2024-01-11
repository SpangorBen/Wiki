<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaporwave Input</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo URLROOT;?>/css/style.css">


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

    </style>
</head>

<body>
    <div class="input-container">
        <input class="input" name="text" type="text" placeholder="Email">
        <label class="labelinput" for="input">Enter Your Email</label>
        <div class="topline"></div>
        <div class="underline"></div>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>

</html>
