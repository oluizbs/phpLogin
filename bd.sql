Create database login2;
use database login2;

Create table users (
id Int NOT NULL AUTO_INCREMENT PRIMARY KEY,
user_name Varchar(250) NOT NULL,
email Varchar(250) NOT NULL,
pass Varchar(32) NOT NULL
);
