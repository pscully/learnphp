<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP</title>
    <style>
        body {
            width: 100%;
            margin: auto;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
        }

        nav > ul {
            display: flex;
            list-style-type: none;
            justify-content: space-around;
        }

        .navigation {
            width: 100%;
            background: black;
            color: white;
            padding: 10px;
        }

        .navigation > ul > li > a {
            color: white;
            text-decoration: none;
            text-transform: uppercase;
        }

        #app {
            margin: 15px;
        }

        #intro > p {
            font-size: 1.1rem;
            line-height: 28px;
            letter-spacing: 1px;
        }

        .notes__list {
            list-style-type: none;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .note {
            border: 1px solid black;
            padding: 7px;
            margin-top: 7px;
        }

        .form {
            max-width: 250px;
            margin-left: auto;
            margin-right: auto;
        }

        .button__action {
            background: blue;
            color: white;
            padding: 10px;
        }

        .button__action:active {
            transform: translateY(1px);
        }

        input {
            padding: 10px;
            border: 1px solid black;
        }

    </style>
</head>
<body>

    <?php require 'views/partials/__nav.php';?>