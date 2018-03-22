USE csgamez;

#creating a new user and adding it to the database (Working)
Delimiter //

CREATE PROCEDURE csgamez.createNewUser
	(IN FName VARCHAR(255),IN LName VARCHAR(255),IN Username VARCHAR(255),IN Pass VARCHAR(255),IN Email VARCHAR(255),IN ClanName VARCHAR(255))
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
	(IN Username VARCHAR(255),IN CharName VARCHAR(255),IN CharType VARCHAR(255),IN WeaponName VARCHAR(255),IN ArmourName VARCHAR(255))
    BEGIN 
    
    DECLARE UserID INT;
    DECLARE CharID INT;
    DECLARE CharTypeID INT;
    DECLARE WeaponID INT;
    DECLARE ArmourID INT;
    DECLARE StatsID INT;
    DECLARE CharWeaponID INT;
    DECLARE CharArmourID INT;
    DECLARE UserCharID INT;
    
    SELECT UserInfo_ID INTO UserID FROM UserInfo WHERE UserInfo_Username=Username;
    SELECT (COALESCE(MAX(UserCharacter_ID), 0)+1) INTO CharID FROM UserCharacter;
    SELECT CharType_ID INTO CharTypeID FROM CharType WHERE CharType_Name=CharType;
    SELECT Weapon_ID INTO WeaponID FROM Weapon WHERE Weapon_Name=WeaponName;
    SELECT Armour_ID INTO ArmourID FROM Armour WHERE Armour_Name=ArmourName;
    SELECT (COALESCE(MAX(Stats_ID), 0)+1) INTO StatsID FROM Stats;
    SELECT (COALESCE(MAX(CharacterArmour_ID), 0)+1) INTO CharArmourID FROM CharacterArmour;
    SELECT (COALESCE(MAX(CharacterWeapon_ID), 0)+1) INTO CharWeaponID FROM CharacterWeapon;
    SELECT (COALESCE(MAX(UserChar_ID), 0)+1) INTO UserCharID FROM UserChar;
    
    INSERT INTO Stats VALUES(StatsID,1,1,1,1);
    INSERT INTO UserCharacter VALUES(CharID,CharName,StatsID,CharTypeID);
    INSERT INTO CharacterWeapon VALUES(CharWeaponID,CharID,WeaponID);
    INSERT INTO CharacterArmour VALUES(CharArmourID,CharID,ArmourID);
    INSERT INTO UserChar VALUES(UserCharID,CharID,UserID);
END;//

#call createNewCharacter('coolguy','rhyan second','Mage','Staff','Robes');


#going to search for a user based on username (Working)
Delimiter // 
CREATE PROCEDURE csgamez.searchUserByUsername
	(IN Username VARCHAR(255))
    BEGIN 
    SELECT UserInfo_ID,UserInfo_FName,UserInfo_LName,UserInfo_Username,UserInfo_Email,Clan.Clan_Name
    FROM UserInfo LEFT OUTER JOIN Clan
    ON(UserInfo.Clan_ID=Clan.Clan_ID)
	WHERE Username=UserInfo.UserInfo_Username;
    
END;//

#going to search for a user based on first name (working)
Delimiter // 
CREATE PROCEDURE csgamez.searchUserByFirstName
	(IN Fname VARCHAR(255))
    BEGIN 
    SELECT UserInfo_ID,UserInfo_FName,UserInfo_LName,UserInfo_Username,UserInfo_Email,Clan.Clan_Name
    FROM UserInfo LEFT OUTER JOIN Clan
    ON(UserInfo.Clan_ID=Clan.Clan_ID)
	WHERE Fname=UserInfo.UserInfo_FName;
    
END;//

#going to search for a user based on last name (working)
Delimiter // 
CREATE PROCEDURE csgamez.searchUserByLastName
	(IN Lname VARCHAR(255))
    BEGIN 
    SELECT UserInfo_ID,UserInfo_FName,UserInfo_LName,UserInfo_Username,UserInfo_Email,Clan.Clan_Name
    FROM UserInfo LEFT OUTER JOIN Clan
    ON(UserInfo.Clan_ID=Clan.Clan_ID)
	WHERE Lname=UserInfo.UserInfo_LName;
    
END;//


#going to list all users in a clan (working)
Delimiter // 
CREATE PROCEDURE csgamez.searchUsersByClan
	(IN ClanName VARCHAR(255))
    BEGIN
    
	DECLARE ClanID INT;
    
	SELECT Clan_ID INTO ClanID FROM Clan WHERE Clan_Name=ClanName;
    
    SELECT UserInfo_ID,UserInfo_FName,UserInfo_LName,UserInfo_Username,UserInfo_Email,Clan.Clan_Name
    FROM UserInfo LEFT OUTER JOIN Clan
    ON(UserInfo.Clan_ID=Clan.Clan_ID)
	WHERE ClanID=Clan.Clan_ID;


END;//

#list all characters a user has (working)
Delimiter // 
CREATE PROCEDURE csgamez.searchCharactersByUser
	(IN Username VARCHAR(255))
    BEGIN
    
    DECLARE UserID INT;
    
    SELECT UserInfo_ID INTO UserID FROM UserInfo WHERE UserInfo_Username=Username;
        
	SELECT UI.UserInfo_Username,UI.UserCharacter_Name, UI.CharType_Name, S.Stats_HP,S.Stats_Strength, S.Stats_Stamina, S.Stats_Lvl
    FROM (SELECT UI.UserInfo_Username,UI.UserCharacter_Name, C.CharType_Name,UI.Stats_ID
		FROM (SELECT UserInfo_Username, UC.*
			FROM (SELECT UI.UserInfo_Username, UC.UserCharacter_ID
					FROM UserInfo UI JOIN UserChar UC #JOIN RIGHT HERE
					ON(UI.UserInfo_ID=UC.UserInfo_ID)
					WHERE UI.UserInfo_ID=UserID) as UI
				JOIN UserCharacter as UC #JOIN RIGHT HERE
			ON(UI.UserCharacter_ID=UC.UserCharacter_ID)) as UI 
			JOIN CharType as C
		ON(UI.CharType_ID=C.CharType_ID)) as UI JOIN Stats S #JOIN RIGHT HERE
	ON(UI.Stats_ID=S.Stats_ID);

END;//

#search for a character based on name (working)
Delimiter // 
CREATE PROCEDURE csgamez.searchCharactersByName
	(IN CName VARCHAR(255))
    BEGIN

	SELECT U.UserInfo_Username, UI.UserCharacter_Name, UI.CharType_Name, UI.Stats_HP,UI.Stats_Strength, UI.Stats_Stamina, UI.Stats_Lvl
    FROM (SELECT UC.UserInfo_ID, UI.UserCharacter_Name, UI.CharType_Name, UI.Stats_HP,UI.Stats_Strength, UI.Stats_Stamina, UI.Stats_Lvl
		FROM (SELECT UI.UserCharacter_ID, UI.UserCharacter_Name, UI.CharType_Name, S.Stats_HP,S.Stats_Strength, S.Stats_Stamina, S.Stats_Lvl
			FROM (SELECT UC.*,CT.CharType_Name 
				FROM UserCharacter UC Join CharType CT
				ON (UC.CharType_ID=CT.CharType_ID)
				WHERE CName=UC.UserCharacter_Name) as UI JOIN Stats S #JOIN RIGHT HERE
			ON(UI.Stats_ID=S.Stats_ID)) as UI JOIN UserChar UC #JOIN RIGHT HERE
		ON(UI.UserCharacter_ID=UC.UserCharacter_ID)) as UI JOIN UserInfo U #JOIN RIGHT HERE
	ON(UI.UserInfo_ID=U.UserInfo_ID);

END;//












