CREATE DATABASE IF NOT EXISTS csGamez;

use csGamez;

#drop database csGamez;
#create database csGamez;

CREATE TABLE IF NOT EXISTS Weapon (
	Weapon_ID INT NOT NULL PRIMARY KEY,
    Weapon_Name VARCHAR(255) NOT NULL,
	Weapon_Strength INT NOT NULL
);

CREATE TABLE IF NOT EXISTS Clan (
	Clan_ID INT NOT NULL PRIMARY KEY,
    Clan_Name VARCHAR(255) NOT NULL,
    Clan_NumOfMems INT NOT NULL,
    Clan_Description VARCHAR(255)
);


CREATE TABLE IF NOT EXISTS Armour (
	Armour_ID INT NOT NULL PRIMARY KEY,
    Armour_Name VARCHAR(255) NOT NULL,
    Armour_Weakness VARCHAR(255),
    Armour_Weight INT NOT NULL
);

CREATE TABLE IF NOT EXISTS CharType (
	CharType_ID INT NOT NULL PRIMARY KEY,
    CharType_Name VARCHAR(255) NOT NULL,
    CharType_Weakness VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS Stats (
	Stats_ID INT NOT NULL PRIMARY KEY,
    Stats_HP INT NOT NULL,
    Stats_Strength INT NOT NULL,
    Stats_Stamina INT NOT NULL,
    Stats_Lvl INT NOT NULL
);

CREATE TABLE IF NOT EXISTS UserInfo (
	UserInfo_ID INT NOT NULL PRIMARY KEY,
    UserInfo_FName VARCHAR(255) NOT NULL,
	UserInfo_LName VARCHAR(255) NOT NULL,
	UserInfo_Username VARCHAR(255) NOT NULL,
    UserInfo_Pass VARCHAR(255) NOT NULL,
    UserInfo_Email VARCHAR(255),
    Clan_ID INT,
    FOREIGN KEY(Clan_ID) REFERENCES Clan(Clan_ID)
);

CREATE TABLE IF NOT EXISTS UserCharacter (
	UserCharacter_ID INT PRIMARY KEY,
    UserCharacter_Name VARCHAR(255) NOT NULL,
    Stats_ID INT,
    CharType_ID INT,
    FOREIGN KEY(Stats_ID) REFERENCES Stats(Stats_ID),
    FOREIGN KEY(CharType_ID) REFERENCES CharType(CharType_ID)
);

CREATE TABLE IF NOT EXISTS EnemyCharacter (
	EnemyCharacter_ID INT NOT NULL PRIMARY KEY,
    Stats_ID INT NOT NULL,
    CharType_ID INT NOT NULL,
    FOREIGN KEY(Stats_ID) REFERENCES Stats(Stats_ID),
    FOREIGN KEY(CharType_ID) REFERENCES CharType(CharType_ID)
);

CREATE TABLE IF NOT EXISTS CharacterWeapon (
	CharacterWeapon_ID INT NOT NULL PRIMARY KEY,
    UserCharacter_ID INT NOT NULL,
    Weapon_ID INT NOT NULL,
    FOREIGN KEY(UserCharacter_ID) REFERENCES UserCharacter(UserCharacter_ID),
    FOREIGN KEY(Weapon_ID) REFERENCES Weapon(Weapon_ID)
);

CREATE TABLE IF NOT EXISTS CharacterArmour (
	CharacterArmour_ID INT NOT NULL PRIMARY KEY,
    UserCharacter_ID INT NOT NULL,
    Armour_ID INT NOT NULL,
    FOREIGN KEY(UserCharacter_ID) REFERENCES UserCharacter(UserCharacter_ID),
    FOREIGN KEY(Armour_ID) REFERENCES Armour(Armour_ID)
);

CREATE TABLE IF NOT EXISTS UserChar (
	UserChar_ID INT NOT NULL PRIMARY KEY,
    UserCharacter_ID INT NOT NULL,
    UserInfo_ID INT NOT NULL,
    FOREIGN KEY(UserCharacter_ID) REFERENCES UserCharacter(UserCharacter_ID),
    FOREIGN KEY(UserInfo_ID) REFERENCES UserInfo(UserInfo_ID)
);

INSERT INTO Clan VALUES(1,'Ziza',0,'animal DB');
INSERT INTO Clan VALUES(2,'MLG',0,'Only the best');
INSERT INTO Clan VALUES(3,'42069360NS',0,'NS!+=Nova Scotia');
INSERT INTO Clan VALUES(4,'H@v0cc',0,'T H I C C');
INSERT INTO Clan VALUES(5,'Shakira',0,'hips don\'t lie');


INSERT INTO CharType VALUES(1,'Mage','Fighter');
INSERT INTO CharType VALUES(2,'Fighter','Archer');
INSERT INTO CharType VALUES(3,'Archer','Rogue');
INSERT INTO CharType VALUES(4,'Rogue','Mage');

INSERT INTO Weapon VALUES(1,'Sword',10);
INSERT INTO Weapon VALUES(2,'Bow',5);
INSERT INTO Weapon VALUES(3,'Staff',8);
INSERT INTO Weapon VALUES(4,'Knife(s)',3);

INSERT INTO Armour VALUES(1,'Chain Mail','Bow',22);
INSERT INTO Armour VALUES(2,'Robes','Sword',13);
INSERT INTO Armour VALUES(3,'Leather','Knife(s)',10);
INSERT INTO Armour VALUES(4,'Cloak','Staff',5);








