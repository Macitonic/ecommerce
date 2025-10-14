<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .headphones-card {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://i.pinimg.com/736x/fd/3f/c7/fd3fc71cf6257839ca007b9c39803aae.jpg") no-repeat center/cover;
            width: 190px;
            height: 250px;
            border: 1px solid transparent;
            border-radius: 15px;
            box-shadow: 1px 1px 1.8px grey, -1px -1px 1.8px grey;
            transition: all 0.1s ease;
        }

        .headphones-card:hover {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://i.pinimg.com/736x/fd/3f/c7/fd3fc71cf6257839ca007b9c39803aae.jpg") no-repeat center/cover;
            width: 192px;
            height: 252px;
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
            color: rgba(254, 173, 22, 0.95);
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

        h2{
            margin: 50% auto;
            font-size: 1.2rem;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <a href="#">
        <div class="headphones-card">
            <div class="card-content">
                <h2>Headphones</h2>
            </div>
        </div>
    </a>
</body>
</html>