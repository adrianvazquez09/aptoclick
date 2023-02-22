ALTER TABLE `aptoclickv2`.`inmuebles` 
CHANGE COLUMN `direccion` `direccion` VARCHAR(500) NOT NULL ,
CHANGE COLUMN `precio_sugerido` `precio_sugerido` DOUBLE(18,2) NOT NULL ,
CHANGE COLUMN `avaluo_original` `avaluo_original` DOUBLE(18,2) NOT NULL ,
CHANGE COLUMN `m2_terreno` `m2_terreno` DOUBLE(18,2) NOT NULL ,
CHANGE COLUMN `m2_construccion` `m2_construccion` DOUBLE(18,2) NOT NULL ;