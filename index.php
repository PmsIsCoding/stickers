<?php 
    $dir = "imgs";

    $files = array_filter(scandir($dir), function($file) use ($dir) {
        return is_file("$dir/$file");
    });
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Vos Stickers</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        body{
            width: 100vw;
            overflow-x: hidden;

        }
        header{
            background-image: url("fond.png");
            background-size: cover;
            display: flex;
            justify-content: center;
        }
        header img{
            width: 30vw;
            margin: 20px;
        }
        main{
            background-color: rgb(56, 56, 56);
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        }
        main div{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        main img{
            cursor: pointer;
            width: 100px;
            margin-top: 50px;
            transition: transform 0.2s ease;
        }
        main img:hover{
            transform: scale(1.1);
        }
        .kunai{
            height: 170px;
            width: auto;
        }
        .stack{
            width: 180px;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo.png" alt="Stickers">
    </header>
    <main>
                <?php foreach($files as $file) : ?>            
            <div>
                <img src="imgs/<?php echo $file ?>" alt="sticker">
            </div>
        <?php endforeach; ?>
    </main>
</body>
</html>