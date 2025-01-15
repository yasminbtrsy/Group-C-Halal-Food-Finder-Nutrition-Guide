@extends('layouts.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutritional Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        .box {
            border: 2px solid green;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            background-color: white;
        }

        .btn-green {
            background-color: green;
            color: white;
        }

        .btn-green:hover {
            background-color: darkgreen;
        }

        .img-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
        }

        .img-container img {
            max-height: 100%;
            max-width: 100%;
        }
    </style>
    <script>
        const foodData = {
            1: { name: "Nasi Lemak", calories: "800 kcal", protein: "40g", carbs: "80g", img: "nasi_lemak.jpg" },
            2: { name: "Chicken Burger", calories: "600 kcal", protein: "35g", carbs: "50g", img: "chicken_burger.jpg" },
            3: { name: "Salad", calories: "200 kcal", protein: "10g", carbs: "15g", img: "salad.jpg" },
            4: { name: "Pasta", calories: "700 kcal", protein: "25g", carbs: "100g", img: "pasta1.jpg" },
        };

        function showNutrition(foodId) {
            const food = foodData[foodId];
            if (food) {
                document.getElementById('food-name').innerText = food.name;
                document.getElementById('food-calories').innerText = food.calories;
                document.getElementById('food-protein').innerText = food.protein;
                document.getElementById('food-carbs').innerText = food.carbs;
            }
        }

        function searchFood() {
            const searchTerm = document.getElementById('search-box').value.toLowerCase();
            const foodContainer = document.getElementById('food-container');
            foodContainer.innerHTML = '';

            Object.keys(foodData).forEach(id => {
                const food = foodData[id];
                if (food.name.toLowerCase().includes(searchTerm)) {

                    const foodCard = `
                        <div class="col-md-3">
                            <div class="box text-center">
                                <div class="img-container">
                                    <img src="${food.img}" alt="${food.name}">
                                </div>
                                <button class="btn btn-green mt-2" onclick="showNutrition(${id})">Click here for more info</button>
                            </div>
                        </div>
                    `;
                    foodContainer.innerHTML += foodCard;
                }
            });

            if (foodContainer.innerHTML === '') {
                foodContainer.innerHTML = '<p class="text-center text-muted">No results found.</p>';
            }
        }
    </script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center">Nutritional Information</h1>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="input-group mb-3">
                    <input type="text" id="search-box" class="form-control" placeholder="Search food...">
                    <button class="btn btn-green" onclick="searchFood()">Search</button>
                </div>
            </div>
        </div>

        <div class="row mt-4" id="food-container">
            <div class="col-md-3">
                <div class="box text-center">
                    <div class="img-container">
                        <img src="{{ asset('assets/img/nasi_lemak.jpg') }}" alt="Nasi Lemak">
                    </div>
                    <button class="btn btn-green mt-2" onclick="showNutrition(1)">Click here for more info</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box text-center">
                    <div class="img-container">
                        <img src="{{ asset('assets/img/chicken_burger.jpg') }}" alt="Chicken Burger">
                    </div>
                    <button class="btn btn-green mt-2" onclick="showNutrition(2)">Click here for more info</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box text-center">
                    <div class="img-container">
                        <img src="{{ asset('assets/img/salad.jpg') }}" alt="Salad">
                    </div>
                    <button class="btn btn-green mt-2" onclick="showNutrition(3)">Click here for more info</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box text-center">
                    <div class="img-container">
                        <img src="{{ asset('assets/img/pasta1.jpg') }}" alt="Pasta">
                    </div>
                    <button class="btn btn-green mt-2" onclick="showNutrition(4)">Click here for more info</button>
                </div>
            </div>
        </div>

        <div class="box mt-5">
            <h5>Nutritional Information</h5>
            <h5 class="card-title" id="food-name">Select a food item</h5>
            <p class="card-text"><strong>Calories:</strong> <span id="food-calories">-</span></p>
            <p class="card-text"><strong>Protein:</strong> <span id="food-protein">-</span></p>
            <p class="card-text"><strong>Carbs:</strong> <span id="food-carbs">-</span></p>
        </div>

    </div>
</body>
</html>

@endsection
