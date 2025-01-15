

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nutritional Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="styles.css" rel="stylesheet">
    <script>
        
        const foodData = {
            1: { name: "Nasi Lemak", calories: "800 kcal", protein: "40g", carbs: "80g", img: "nasi_lemak.jpg" },
            2: { name: "Chicken Burger", calories: "600 kcal", protein: "35g", carbs: "50g", img: "chicken_burger.jpg" },
            3: { name: "Salad", calories: "200 kcal", protein: "10g", carbs: "15g", img: "salad.jpg" },
            4: { name: "Pasta", calories: "700 kcal", protein: "25g", carbs: "100g", img: "pasta.jpg" },
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
                        <div class="col-md-3 text-center">
                            <img src="${food.img}" class="img-fluid" alt="${food.name}">
                            <button class="btn btn-primary mt-2" onclick="showNutrition(${id})">Click here for more info</button>
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
    @yield('content')
</body>
</html>

