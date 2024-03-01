CREATE DATABASE meals;
CREATE TABLE food (
  id INT(50) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  ingredients TEXT(255) NOT NULL,
  calories INT(50) NOT NULL,
  category VARCHAR(255) NOT NULL
);

INSERT INTO food (name, ingredients, calories, category)
VALUES ("Scrambled eggs with toast", "Eggs, milk, bread", 300, "breakfast"),
      ("Tea or coffee with sweet potatoes", "Milk, tea leaves of coffee, boiled sweet potatoes", 400, "breakfast"),
      ("Porridge", "Wimbi Flour, sour porridge flour, milk, sugar", 450, "Breakfast"),
      ("Tea and pancakes with sausages or scones", "Milk, baking flour, eggs, sausages,scones", 700, "Breakfast"),
      ("Githeri mixed with potatoes", "Maize, Beans, potatoes, onions, tomatoes", 800, "Lunch"),
      ("Matoke with matumbo plus an orange", "green bananas, potatoes, boiled matumbo, orange", "900", "Lunch"),
      ("Mukimo with steamed cabbage or salad", "Mashed potatoes, maize, peas, cabbage, onions, carrots", 900, "Lunch"),
      ("Pasta with lentils plus an apple", "Boiled pasta, boiled lentils, onions, tomatoes, apple", 500, "dinner"),
      ("Pilau with steamed cabbage or vegetable salad", "Rice, boiled beef, cabbage, carrot, onions", 750, "dinner"),
      ("Rice with liver stew and steamed cabbage", "Rice, Liver, Shredded cabbage,carrots", 500, "dinner"),
      ("Chapati with green grams and slightly cooked spinach", "Boiled green grams, baking flour, cooking oil, onions, cut spinach", 600, "dinner");
