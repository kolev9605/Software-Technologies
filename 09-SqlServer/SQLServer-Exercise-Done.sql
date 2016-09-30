SELECT 
title, body
FROM Posts

SELECT
username, fullname
FROM
Users
ORDER BY username ASC

SELECT
username, fullname
FROM
Users
ORDER BY fullname DESC, username DESC

SELECT
	*
FROM
	Users
WHERE 
	id IN (SELECT
			AuthorId
		FROM
			Posts)

SELECT
	Users.UserName, Posts.Title
FROM
	Users 
		JOIN
	Posts ON Users.id = Posts.AuthorId

SELECT
	UserName, FullName
FROM
	Users
WHERE
	id IN (SELECT
			AuthorId
		FROM
			Posts
		WHERE
			id = 4)


SELECT 
	UserName, FullName
FROM 
	Users
WHERE id IN (SELECT 
				AuthorID
			FROM 
				Posts)
ORDER BY 
	id DESC

INSERT INTO Posts (AuthorId, Title, Body, Date)
VALUES 
(2, 'random title', 'random content' , CAST('2016-07-13T11:30:00' AS datetime))

UPDATE 
	Posts 
SET 
	Title = 'New Title' 
WHERE id = 
	(SELECT 
		id 
	FROM 
		Posts 
	WHERE Title = 'random title')


DELETE FROM Posts Where Id = (SELECT Id FROM Posts WHERE Title = 'New Title')

SELECT COUNT(*) as Posts_Count FROM Posts WHERE AuthorId = 2

SELECT MIN(AuthorId) as Min_Value FROM Posts

SELECT MIN(Date) as Min_Date FROM Posts

SELECT MAX(Id) as Max_ID FROM Tags

SELECT SUM(Id) as Sum_Ids FROM Tags

SELECT 
	SUM(Id) as Sum_Ids_WithPosts
FROM 
	Users
WHERE Id IN (SELECT 
				AuthorID
			FROM 
				Posts)

SELECT 
	COUNT(*) as Users_Count 
FROM 
	Users
WHERE Id IN (SELECT AuthorId FROM Posts WHERE Date >= '20160614' AND Date < '20160615')

SELECT * FROM Posts WHERE Date >= '20160614' AND Date < '20160615'
ORDER BY AuthorId


SELECT * FROM Posts WHERE AuthorId = 2 ORDER BY Date

SELECT * FROM Comments ORDER BY AuthorName ASC, Id DESC
