CREATE DATABASE {{peacockroom_mysql_database}} CHARACTER SET utf8 COLLATE utf8_general_ci;;
CREATE USER '{{peacockroom_mysql_username}}'@'localhost' IDENTIFIED BY '{{peacockroom_mysql_password}}';
GRANT ALL PRIVILEGES ON * . * TO '{{peacockroom_mysql_username}}'@'localhost';
FLUSH PRIVILEGES;