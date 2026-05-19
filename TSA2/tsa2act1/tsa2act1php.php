<!DOCTYPE html>
<html>
<head>
    <title>My Uma Musumes</title>
    <link rel="stylesheet" href="tsa2act1css.css">
</head>
<body>

<table>
    <tr>
        <th colspan="4" class="title">My Uma Musumes</th>
    </tr>

    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
    </tr>

    <?php
    $umas = [
        ["Tokai Teio", "https://static.wikia.nocookie.net/umamusume/images/0/04/Tokai_Teio_%28Race%29.png/revision/latest?cb=20240728220738", "Cute Idol", "Tokai Teio is cheerful, talented, and known for her strong spirit in racing."],
        ["Aston Machan", "https://gametora.com/images/umamusume/characters/chara_stand_1087_108701.png", "Sweet Girl", "Aston Machan wants to be remembered by everyone and has a touching personality."],
        ["Gold Ship", "https://gametora.com/images/umamusume/characters/chara_stand_1007_100701.png", "Funny Racer", "Gold Ship is chaotic, unpredictable, and loved for her funny actions."],
        ["Rice Shower", "https://static.wikia.nocookie.net/umamusume/images/4/4e/Rice_Shower_%28Race%29.png/revision/latest?cb=20240728212805", "Shy Girl", "Rice Shower is gentle, quiet, and hardworking despite her sad image."],
        ["Special Week", "https://media.gametora.com/umamusume/characters/profile/1001.png", "Dreamer", "Special Week dreams of becoming the best Uma Musume in Japan."],
        ["Silence Suzuka", "https://gametora.com/images/umamusume/characters/chara_stand_1002_100201.png", "Fast Runner", "Silence Suzuka is calm and famous for her amazing front-running speed."],
        ["Mejiro McQueen", "https://media.gametora.com/umamusume/characters/profile/1013.png", "Elegant Lady", "Mejiro McQueen is graceful, disciplined, and from the famous Mejiro family."],
        ["Twin Turbo", "https://static.wikia.nocookie.net/umamusume/images/1/11/Twin_Turbo_%28Main%29.png/revision/latest?cb=20240731204921", "Energetic", "Twin Turbo is loud, energetic, and known for her explosive racing style."],
        ["Agnes Tachyon", "https://static.wikia.nocookie.net/umamusume/images/6/61/Agnes_Tachyon_%28Race%29.png/revision/latest?cb=20240728174823", "Scientist", "Agnes Tachyon is a genius Uma Musume who loves science and experiments."],
        ["Admire Vega", "https://static.wikia.nocookie.net/umamusume/images/4/4b/Admire_Vega_%28Race%29.png/revision/latest?cb=20240728193832", "Quiet Star", "Admire Vega is serious, calm, and has a mysterious personality."]
    ];

    sort($umas);

    foreach ($umas as $uma) {
        echo "<tr>";
        echo "<td><img src='$uma[1]' alt='$uma[0]'></td>";
        echo "<td>$uma[0]</td>";
        echo "<td>$uma[2]</td>";
        echo "<td>$uma[3]</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>