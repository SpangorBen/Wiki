<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaporwave Input</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

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
            padding-right: 18rem;
            height: 40px;
            border: 2px solid #00FFFF;
            border-top: none;
            border-bottom: none;
            font-size: 16px;
            background: #FF00FF;
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
            font-size: 1.5rem;
            font-weight: 700;
            top: 10px;
            left: 10px;
            color: #F6F3E4;
            transition: all 0.5s;
            transform: scale(0);
            z-index: 99;
        }

        .input-container .topline {
            position: absolute;
            content: "";
            background-color: #00FFFF;
            width: 0%;
            height: 2px;
            right: 0;
            top: 0;
            transition: all 0.5s;
        }

        .input-container input[type="text"]:focus ~ .topline {
            width: 65%;
            transition: all 0.5s;
        }

        .input-container .underline {
            position: absolute;
            content: "";
            background-color: #00FFFF;
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
            top: -40px;
            transform: scale(1);
            transition: all 0.5s;
        }
    </style>
</head>

<body>
    <div class="input-container">
        <input class="input" name="text" type="text" placeholder="Email">
        <label class="label" for="input">Enter Your Email</label>
        <div class="topline"></div>
        <div class="underline"></div>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>

</html>
