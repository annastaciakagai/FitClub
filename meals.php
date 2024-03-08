
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="meals.css">
</head>

<body style="margin: 50px;">

<div class="main">
  <div class="header__content">
      <span class="bg__blur"></span>
      <span class="bg__blur header__blur"></span>
  <h1><i>Some meal Recommendations</i></h1>
  <br>
  <table class="table">
    <thead>
      <tr>
        <th>Meal_id</th>
        <th>Meal_description</th>
        <th>Ingredients</th>
        <th>Calorie_count</th>
        <th>Time of Day</th>
      </tr>
    </thead>
    <tbody>
  </div>
</div>

      <?php
          $host = "localhost";
        //  $dbport = '3306';
          $username = "root";
          $password ="";
          $dbname ="meals";
          $connection = new mysqli($host, $username, $password, $dbname);
          if($connection->connect_error) {
              die("Connection failed". $connection->connect_error);
          };
        $sql = "SELECT * FROM food";
        $result = $connection->query($sql);

        if(!$result) {
          die("Invalid query: " . $connection->error);
        }

        while ($row = $result->fetch_assoc()) {
          echo "<tr>
          <td>". $row["id"] ."</td>
          <td>". $row["name"] ."</td>
          <td>". $row["ingredients"] ."</td>
          <td>". $row["calories"] ."</td>
          <td>". $row["category"] ."</td>

         </tr> ";
        }

      ?>
    </tbody>
  </table>
  <div class="other">
        <h4><I><b>MORE NUTRITION FACTS:</b></I></h4>
          <ul class="a">
            <li>BREAKFAST</li>
             <ul>
              <li>You should start your day by eating a healthy and tasty breakfast. At breakfast, you have to eat one apple and a few berries. Apples are filled up with fibre and it will help to reduce your weight.
         	      Berries are full of polyphenols, which helps to lose weight and stop forming fats.</li>
              <li>Try eating black beans because black beans are packed with soluble fibre. Beans will help to fill you up for hours and also help to slim you down. It is considered as one of the strongest belly fat fighters as well.</li>
              <li>Avocado can help you to lose weight and this contains 322 calories and 29-grams of healthy fat. </li>
              <li>The egg is one of the healthiest foods in order to lose weight. Eggs contain healthy fats, high-quality protein, vitamins and minerals. </li>
             </ul>
            <li>LUNCH</li>
            <ul>
              <li>The meal for lunch should include the healthiest food as compared to breakfast and dinner</li>
              <li>At lunchtime, you should eat green leafy vegetables. You can make a number of healthy dishes with green leafy vegetables. Leafy vegetables will increase the volume of your meal without increasing the calories. You will also have to include salads in your lunch</li>
              <li></li>
            </ul>
            <li>SUPPER/DINNER</li>
            <ul>
              <li>At dinner, you can  eat whole grain bread with peanut butter. Peanut butter is one of the best fat burning foods. It contains tryptophan, an amino acid that will help you to get a proper sleep.</li>
              <li> Before going to bed you can have Greek yoghurt. It contains high protein and low sugar content. </li>
              <li> Brown rice is packed with more fibre as compared to white rice. It helps to burn fat and boost metabolism. </li>
              <li>You can eat few almonds because almond contains high protein and good bacteria which helps to keep your digestive system healthy and it also facilitates weight loss.</li>
            </ul>
            <li>RECOMMENDATIONS:</li>
            <ul>
              <li>Drink a lot of water. Water makes you feel full and keeps cravings away. Buy a water bottle and sip throughout the day</li>
              <li>Consume more sugarcane. It is nutrient-dense, keeps you full and also controls those cravings. It is always farmed organically so no worry of chemicals.</li>
              <li>Eat more vegetables. Learn how to cook them. With a little healthy oil like extra virgin coconut or olive oil, salt and black pepper. Simply fried or learn to make salads.</li>
              <li>Walking, dancing, zumba, pilates, yoga, gym, aerobics, whatever helps you burn a sweat. Do it. Often. </li>
              <li>Exercise. Exercise not only helps you burn calories and fat, it also helps to keep those food cravings down.</li>
            </ul>
          </ul>

      </div>

</body>
</html>

