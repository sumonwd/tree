<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        ul {
            text-align: center;
            list-style: none;
            background: black;
        }
        span {
            font-size: 18px;
            padding: 0px 10px;
        }
        li:nth-child(1) span {
            font-size: 30px;
        }
        .red {
            color: tomato;
        }
        .green {
            color: green;
        }
    </style>
</head>
<body>
    <ul>
        <?php 
            for ($i=1; $i <= 6; $i++) { 
                echo "<li>";
                for ($j=$i; $j > 0 ; $j--) { 
                    if ($j % 2 == 1) {
                        echo "<span class='green'>*</span>";
                    }
                    if ($j % 2 == 0) {
                        echo "<span class='red'>*</span>";
                    }
                }
                echo "</li>";
            }
            for ($i = 4; $i <= 10; $i++) {
                echo "<li>";
                for ($j = $i; $j > 0; $j--) {
                    if ($j % 2 == 1) {
                        echo "<span class='green'>*</span>";
                    }
                    if ($j % 2 == 0) {
                        echo "<span class='red'>*</span>";
                    }
                }
                echo "</li>";
            }
            for ($i = 6; $i <= 14; $i++) {
                echo "<li>";
                for ($j = $i; $j > 0; $j--) {
                    if ($j % 2 == 1) {
                        echo "<span class='green'>*</span>";
                    }
                    if ($j % 2 == 0) {
                        echo "<span class='red'>*</span>";
                    }
                }
                echo "</li>";
            }
            for ($i = 1; $i <= 5; $i++) {
                echo "<li>";
                for ($j = 1; $j <= 2; $j++) {
                    echo "<span class='red'>*</span>";
                }
                echo "</li>";
            }

        
        
        
        ?>
    
    </ul>
</body>
</html>