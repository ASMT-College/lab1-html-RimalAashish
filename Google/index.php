<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: black;
        }
        .top-right {
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .gmail-button {
            padding: 10px 20px;
            font-size: 14px;
            background-color: #4285F4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .gmail-button:hover {
            background-color: #357ae8;
        }
        img {
            width: 150px;
            height: auto;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"] {
            padding: 10px;
            width: 300px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-left: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="https://mail.google.com" target="_blank" class="gmail-button top-right">Gmail</a>
    <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google Logo">
    <form action="https://www.google.com/search" method="get">
        <input type="text" name="q" placeholder="Search Google...">
        <button type="submit">Search</button>
    </form>
</body>
</html>
