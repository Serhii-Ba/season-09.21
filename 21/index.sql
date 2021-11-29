# вставка
# INSERT INTO user (name, age, sex)
#           VALUES ('Ivan', 99, 'male'),
#                  ('Mike', 13, 'male'),
#                  ('Maria', 18, 'female');

# выборка
# SELECT age, name, sex FROM user;
# SELECT * FROM user WHERE ((age >= 18) AND (sex = 'male'));
# SELECT * FROM user WHERE age > 18 LIMIT 5;

# обновление
# UPDATE user SET name = 'Rita', age = 6, sex = 'female' WHERE ((age >= 18) AND (sex = 'male'));

# удаление
# DELETE FROM user WHERE ((age >= 6) AND (name = 'Rita'));
