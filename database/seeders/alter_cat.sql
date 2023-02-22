ALTER TABLE `aptoclickv2`.`catalogo_costo_anual_total` 
CHANGE COLUMN `sUMA` `sUMA` DOUBLE(18,4) NOT NULL ,
CHANGE COLUMN `sPesos` `sPesos` DOUBLE(18,4) NOT NULL ,
CHANGE COLUMN `tInteres` `tInteres` DOUBLE(18,4) NOT NULL ,
CHANGE COLUMN `mMaximoPesos` `mMaximoPesos` DOUBLE(18,4) NOT NULL ,
CHANGE COLUMN `pHipoteca` `pHipoteca` DOUBLE(18,4) NOT NULL ,
CHANGE COLUMN `pHipotecaVerde` `pHipotecaVerde` DOUBLE(18,4) NOT NULL ,
CHANGE COLUMN `cAdministracion` `cAdministracion` DOUBLE(18,4) NOT NULL ,
CHANGE COLUMN `sDesempleo` `sDesempleo` DOUBLE(18,4) NOT NULL ,
CHANGE COLUMN `sDanios` `sDanios` DOUBLE(18,4) NOT NULL ,
CHANGE COLUMN `pMensualTotal` `pMensualTotal` DOUBLE(18,4) NOT NULL ,
CHANGE COLUMN `aPatronal` `aPatronal` DOUBLE(18,4) NOT NULL ,
CHANGE COLUMN `cat` `cat` DOUBLE(18,4) NOT NULL ;