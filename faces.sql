

-- ************************************** `Faces`
create database `Faces`;
CREATE TABLE `Faces`
(
 `id`   int NOT NULL AUTO_INCREMENT ,
 `Face` enum('genial','bien','regular','mal','muy_mal') NOT NULL ,
PRIMARY KEY (`id`)
);





