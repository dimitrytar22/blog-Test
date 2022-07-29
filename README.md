# blog-Test
test blog

DataBase - mySql
DB name "site"

DB tables: 
1. "articles" 
id int(11) AI
title varchar(100) utf8_general_ci
text text utf8_general_ci
date timestamp default:CURRENT_TIMESTAMP

2. "users"
id_user int(11) AI
admin tinyint(1) default:0 //Admin - 1 | User - 0
username varchar(20) utf8_general_ci
pasword varchar(128) utf8_general_ci
email varchar(33) utf8_general_ci
