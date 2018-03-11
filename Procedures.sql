USE csgamez;

#creating a new user and adding it to the database (Working)
Delimiter //

CREATE PROCEDURE csgamez.createNewUser
	(IN FName VARCHAR(255), LName VARCHAR(255),Username VARCHAR(255),Pass VARCHAR(255),Email VARCHAR(255),ClanName VARCHAR(255))
    BEGIN 
    
    DECLARE ClanID INT;
    DECLARE UserID INT;
    
    SELECT Clan_ID INTO ClanID FROM Clan WHERE Clan_Name=ClanName;
    SELECT (COALESCE(MAX(userInfo_ID), 0)+1) INTO UserID FROM userInfo;
    
    INSERT INTO UserInfo VALUES(UserID,FName,LName,Username,Pass,Email,ClanID);
END;//

#call createNewUser('ryan','wilbur','coolguy','coolpass','email@gmai.com','Ziza');


#creating a new character and adding it to the database (Working)
Delimiter // 
CREATE PROCEDURE csgamez.createNewCharacter
	(IN Username VARCHAR(255), CharName VARCHAR(255), CharType VARCHAR(255),WeaponName VARCHAR(255),ArmourName VARCHAR(255))
    BEGIN 
    
    DECLARE UserID INT;
    DECLARE CharID INT;
    DECLARE CharTypeID INT;
    DECLARE WeaponID INT;
    DECLARE ArmourID INT;
    DECLARE StatsID INT;
    DECLARE CharWeaponID INT;
    DECLARE CharArmourID INT;
    
    SELECT UserInfo_ID INTO UserID FROM UserInfo WHERE UserInfo_Username=Username;
    SELECT (COALESCE(MAX(UserCharacter_ID), 0)+1) INTO CharID FROM UserCharacter;
    SELECT CharType_ID INTO CharTypeID FROM CharType WHERE CharType_Name=CharType;
    SELECT Weapon_ID INTO WeaponID FROM Weapon WHERE Weapon_Name=WeaponName;
    SELECT Armour_ID INTO ArmourID FROM Armour WHERE Armour_Name=ArmourName;
    SELECT (COALESCE(MAX(Stats_ID), 0)+1) INTO StatsID FROM Stats;
    SELECT (COALESCE(MAX(CharacterArmour_ID), 0)+1) INTO CharArmourID FROM CharacterArmour;
    SELECT (COALESCE(MAX(CharacterWeapon_ID), 0)+1) INTO CharWeaponID FROM CharacterWeapon;
    
    INSERT INTO Stats VALUES(StatsID,1,1,1,1);
    INSERT INTO UserCharacter VALUES(CharID,CharName,StatsID,CharTypeID);
    INSERT INTO CharacterWeapon VALUES(CharWeaponID,CharID,WeaponID);
    INSERT INTO CharacterArmour VALUES(CharArmourID,CharID,ArmourID);
END;//

#call createNewCharacter('coolguy','rhyan second','Mage','Staff','Robes');












