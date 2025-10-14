<?php include '../../db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            height: 200px;
            border: 1px solid transparent;
            border-radius: 15px;
            box-shadow: 1px 1px 1.8px grey, -1px -1px 1.8px grey;
            transition: all 0.1s ease;
        }

        .card:hover {
            width: 202px;
            height: 202px;
            border: 1px solid transparent;
            border-radius: 15px;
            box-shadow: 1.2px 1.2px 1.8px grey, -1.2px -1.2px 1.8px grey;

        }

        .card-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 0;
            color: rgba(252, 188, 69, 0.95);
            transition: all 0.1s ease;
            font-weight: 600;
        }

        .card-content:hover {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 0;
            color: rgba(252, 187, 68, 1);
            font-weight: 700;
        }
    </style>
</head>

<body>
    <a href="laptops_display.php">
        <div class="card">
            <div class="card-content">
                <h2>Lenovo</h2>
            </div>
        </div>
    </a>
</body>

</html>