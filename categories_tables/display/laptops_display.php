<?php include '../../db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            background-color:  rgba(34, 13, 13, 0.85);;
            width: 200px;
            height: 320px;
            border: 1px solid transparent;
            border-radius: 20px 10px 10px 20px;
            box-shadow: 1px 1px 1.8px grey, -1px -1px 1.8px grey;
            transition: all 0.1s ease;
        }

        .card:hover {
            width: 201px;
            height: 322px;
            border: 1px solid transparent;
            border-radius: 20px 10px 10px 20px;
            box-shadow: 1.2px 1.2px 1.8px grey, -1.2px -1.2px 1.8px grey;

        }

        .card-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: rgba(245, 245, 245, 0.95);
            transition: all 0.1s ease;
            
        }

        .card-content:hover {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 0;
            color: rgba(254, 254, 254, 1);
        }

        .card-content h2{
            font-size: 1.5rem;
            margin-bottom: 1px;
            
        }

        .card-content h3{
            font-size: 1.1rem;
            margin-bottom: 1px;
        }

        .card-content p{
            font-size: 1rem;
            margin-bottom: 7px;
           
        }

        .card-content button{
            width: 120px;
            height: 28px;
            background-color: #c07e03ff;
            border: 1px solid transparent;
            border-radius: 10px;
            color: #fff;
            font-weight: 700;
            transition: all 0.1s ease;
            font-size: 0.9rem;
        }

        .card-content button:hover{
            width: 122px;
            height: 30px;
            background-color: #c07e03ff;
            border: 1px solid transparent;
            border-radius: 10px;
            color: #fff;
            font-weight: 750;
            font-size: 0.92rem;
        }

        img{
            width: 100%;
            height: 150px;
            object-fit: fill;
            border-radius: 20px 10px 0 0;
        }
    </style>
</head>

<body>
        <div class="card">
            <div class="image">
                <img src="https://i.pinimg.com/736x/fd/3f/c7/fd3fc71cf6257839ca007b9c39803aae.jpg" alt="laptop">
            </div>
            <div class="card-content">
                <h2>Laptops</h2>
                <h3>title</h3>
                <p>price</p>
                <button>Add to Cart</button>
            </div>
        </div>
</body>

</html>