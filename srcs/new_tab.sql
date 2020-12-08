CREATE DATABASE mpowder_db DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
GRANT ALL ON mpowder_db.* TO 'mpowder'@'localhost' IDENTIFIED BY '123qwe';
FLUSH PRIVILEGES;