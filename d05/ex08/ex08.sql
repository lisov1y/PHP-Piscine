SELECT last_name, first_name, cast(birthdate AS date) AS birthdate FROM user_card WHERE year(birthdate) = 1989 ORDER BY last_name asc;