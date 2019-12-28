<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP</title>
    <style>
        .border {
            border: 1px solid green;
        }
    </style>
</head>
<body>
    <h1><?=$heading?></h1>
    <button id="button">Highlight h1s</button>
</body>
    <script>
    const button=document.getElementById("button");function highlight(){document.querySelectorAll("h1").forEach(t=>{t.classList.add("border")})}button.addEventListener("click",highlight);
    </script>
</html>
