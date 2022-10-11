DROP DATABASE IF EXISTS gestionpromotion;

CREATE DATABASE gestionpromotion;

USE gestionpromotion;

CREATE TABLE promotion(
    idPromotion int NOT NULL AUTO_INCREMENT,
    namePromotion varchar(100),
    PRIMARY KEY(idPromotion)
)