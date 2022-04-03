create database php_cours;
use php_cours;
CREATE TABLE IF NOT EXISTS produits (
     id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
     product VARCHAR(20) NOT NULL,
     brand VARCHAR(30) NOT NULL,
     price VARCHAR(10) NOT NULL,
     img text(100) NOT NULL
   );
   
select *
from produits;
