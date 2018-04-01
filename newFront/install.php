<?php

$mysql_host = 'localhost';
$mysql_username = 'root';
$mysql_password = '210987';
$mysql_database = 'db_rush';

$fd = mysqli_connect($mysql_host, $mysql_username, $mysql_password);

$query = "DROP DATABASE IF EXISTS db_rush;";
mysqli_query($fd,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "CREATE DATABASE IF NOT EXISTS db_rush;";
mysqli_query($fd,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
echo '<div class="success-response sql-import-response">SQL file imported successfully</div>';

mysqli_close($fd);



$fd2 = mysqli_connect($mysql_host, $mysql_username, $mysql_password,$mysql_database);


$query = "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "SET time_zone = \"+00:00\";";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "CREATE TABLE `CART` (
  `id_cart` int(11) NOT NULL UNIQUE,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "CREATE TABLE `CART_ITEMS` (
  `id_cart` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `quantity_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "CREATE TABLE `CATEGORIES` (
  `id_cat` int(11) NOT NULL UNIQUE ,
  `cat_name` varchar(150) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');


$query = "CREATE TABLE `items` (
  `id_item` int(11) NOT NULL,
  `item_name` varchar(150) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_pic` varchar(150) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "CREATE TABLE `USERS` (
  `id_user` int(11) NOT NULL UNIQUE,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL UNIQUE,
  `password` varchar(150) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');



$query = "INSERT INTO `USERS` (`id_user`, `firstname`, `lastname`, `email`, `password`, `admin`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '6a4e012bd9583858a5a6fa15f58bd86a25af266d3a4344f1ec2018b778f29ba83be86eb45e6dc204e11276f4a99eff4e2144fbe15e756c2c88e999649aae7d94', 1);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');



$query = "ALTER TABLE `CART`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_user` (`id_user`);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "ALTER TABLE `CART_ITEMS`
  ADD KEY `id_cart` (`id_cart`),
  ADD KEY `id_item` (`id_item`);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "ALTER TABLE `CATEGORIES`
  ADD PRIMARY KEY (`id_cat`);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "ALTER TABLE `items`
  ADD PRIMARY KEY (`id_item`),
  ADD UNIQUE KEY `id_item` (`id_item`),
  ADD KEY `id_cat` (`id_cat`);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "ALTER TABLE `USERS`
  ADD PRIMARY KEY (`id_user`);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "ALTER TABLE `CART`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "ALTER TABLE `CATEGORIES`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT;";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "ALTER TABLE `ITEMS`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT;";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "ALTER TABLE `items` ADD CONSTRAINT `FK_VOILA` FOREIGN KEY (`id_cat`) REFERENCES `categories`(`id_cat`) ON DELETE RESTRICT ON UPDATE CASCADE;";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "ALTER TABLE `items` ADD CONSTRAINT `FK_DUO` UNIQUE (`item_name`,`id_cat`)";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "ALTER TABLE `USERS`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "ALTER TABLE `CART`
  ADD CONSTRAINT `FK_CART1` FOREIGN KEY (`id_user`) REFERENCES `USERS` (`id_user`) ON UPDATE CASCADE;";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "ALTER TABLE `CART_ITEMS`
  ADD CONSTRAINT `FK_CART_ITEMS1` FOREIGN KEY (`id_cart`) REFERENCES `CART` (`id_cart`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CART_ITEMS2` FOREIGN KEY (`id_item`) REFERENCES `ITEMS` (`id_item`) ON UPDATE CASCADE;";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

$query = "INSERT INTO categories (`cat_name`) VALUES ('Categorie1');";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
$query = "INSERT INTO categories (`cat_name`) VALUES ('Categorie2');";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
$query = "INSERT INTO categories (`cat_name`) VALUES ('Categorie3');";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
$query = "INSERT INTO items (`item_name`, `item_price`, `item_pic`, `id_cat`) VALUES ('item1',52,'lienitempic',1);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
$query = "INSERT INTO items (`item_name`, `item_price`, `item_pic`, `id_cat`) VALUES ('item2',52,'lienitempic',1);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
$query = "INSERT INTO items (`item_name`, `item_price`, `item_pic`, `id_cat`) VALUES ('item3',52,'lienitempic',1);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
$query = "INSERT INTO items (`item_name`, `item_price`, `item_pic`, `id_cat`) VALUES ('item10',52,'lienitempic',2);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
$query = "INSERT INTO items (`item_name`, `item_price`, `item_pic`, `id_cat`) VALUES ('item20',52,'lienitempic',2);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
$query = "INSERT INTO items (`item_name`, `item_price`, `item_pic`, `id_cat`) VALUES ('item30',52,'lienitempic',2);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
$query = "INSERT INTO items (`item_name`, `item_price`, `item_pic`, `id_cat`) VALUES ('item11',52,'lienitempic',3);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
$query = "INSERT INTO items (`item_name`, `item_price`, `item_pic`, `id_cat`) VALUES ('item21',52,'lienitempic',3);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
$query = "INSERT INTO items (`item_name`, `item_price`, `item_pic`, `id_cat`) VALUES ('item31',52,'lienitempic',3);";
mysqli_query($fd2,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');

mysqli_close($fd2);

?>
