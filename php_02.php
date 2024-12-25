<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP_02</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Charm:wght@400;700&family=Charmonman:wght@400;700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Charm';
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container h1 {
            margin-bottom: 12px;
        }

        .container .group {
            font-size: 15pt;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>โปรแกรมเลขคู่-เลขคี่</h1>

        <div class="group">
            <?php
                for ($i = 1; $i <= 100; $i++) {
                    if ($i % 2 == 0) {
                        echo $i. " เป็นเลขคู่";
                    } else {
                        echo $i. " เป็นเลขคี่";
                    }

                    echo "<br>";
                }
            ?>
        </div>
    </div>
</body>