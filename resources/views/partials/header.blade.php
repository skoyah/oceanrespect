<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OceanRespect</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="bg-grey-lighter min-h-screen flex flex-col justify-between">

    <div>
        @include('partials.navbar')

        <div id="is-loading" class="loading flex items-center justify-center w-screen absolute">
            <div id="loading-content""></div>
        </div>
    </div>
