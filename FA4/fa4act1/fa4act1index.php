<!DOCTYPE html>
<html>
<head>
    <title>Uma Musume Tragic Stories</title>

    <style>
        body {
            margin: 0;
            background: #111;
            font-family: Georgia;
        }

        .title {
            text-align: center;
            color: white;
            padding-top: 30px;
            font-size: 40px;
        }

        .story-menu {
            width: 96%;
            height: 320px;
            margin: 20px auto;
            background: white;
            border: 4px double black;
            display: flex;
        }

        .story-menu a {
            flex: 1;
            border: 1px solid gray;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: black;
            font-size: 22px;
            transition: 0.3s;
            text-align: center;
            padding: 10px;
        }

        .story-menu a:hover {
            background: #ffb6c1;
            transform: scale(1.03);
        }
    </style>
</head>

<body>

<h1 class="title">Uma Musume Tragic Stories</h1>

<div class="story-menu">
    <a href="story1.php">Tokai Teio</a>
    <a href="story2.php">Admire Vega</a>
    <a href="story3.php">Aston Machan</a>
    <a href="story4.php">Rice Shower</a>
    <a href="story5.php">Silence Suzuka</a>
</div>

</body>
</html>