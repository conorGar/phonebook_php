-- CREATE DATABASE phonebook_db;

  use phonebook_db;

  CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phonenum VARCHAR(30) NOT NULL
  );


  INSERT INTO users (firstname, lastname, email, phonenum) 
  values ('Bimbo', 'Jones', 'Mail@mail.com', '555-555-5566');

  INSERT INTO users (firstname, lastname, email, phonenum) 
  values ('Conor', 'Garity', 'conmail@mail.com', '631-555-5566');

  INSERT INTO users (firstname, lastname, email, phonenum) 
  values ('Nancy', 'Boobar', 'nancy@mail.com', '531-666-5536');


  INSERT INTO users (firstname, lastname, email, phonenum) 
  values ('Brian', 'Boobar', 'Brian@mail.com', '123-456-7890');


  INSERT INTO users (firstname, lastname, email, phonenum) 
  values ('Brian', 'Boobar', 'Brian@mail.com', '123-456-7890');