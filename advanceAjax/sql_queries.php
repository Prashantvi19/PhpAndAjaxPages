
// Insert new record 
INSERT INTO `users` (`name`, `email`, `contact`, `address`, `password`) VALUES ('shyam', 'shyam@gmail.com', '777777777', 'Kalindi gold city indore 453555', '999999');


// Update existing record

UPDATE `USERS` SET `email` = 'radhe@gmail.com' where `id` = 4;

UPDATE `USERS` SET `contact` = '98989898', `name`='radhe'  where `id` = 4


// Show all data
SELECT * FROM `users`;

// Show selected coulms
SELECT `id`,`name`,`email` FROM `users` 

// Show record with some conditions
SELECT * FROM `users` WHERE `email`='radhe@gmail.com';


// ORDER BY
SELECT `id`,`user_id`,`total` FROM `results` ORDER BY `total` DESC


// 
SELECT * FROM `users` WHERE `address` Like '%jabalpur';
SELECT * FROM `users` WHERE `address` Like '%jabalpur%';
SELECT * FROM `users` WHERE `address` Like 'jabalpur%';
