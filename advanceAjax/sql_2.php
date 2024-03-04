MAx:
SELECT max(total) FROM `result` 
SELECT min(total) FROM `result` 
SELECT sum(total) FROM `result`   // 1448
SELECT count(total) FROM `result` // 4 
SELECT avg(total) FROM `result`; // 4

SELECT * FROM `result` ORDER BY `total` DESC

SELECT * FROM `result` ORDER BY `total` DESC limit 2

SELECT * FROM `result` ORDER BY `total` DESC limit 0,2

SELECT * FROM `result` ORDER BY `total` DESC limit 2,2
SELECT * FROM `user` order by `id` desc limit 2,1

Like %%


1) Left Join
2) Right Join
3) Inner Join / Join
4) FULL Outer Join / FULL

SELEct


SELECT user.id,user.name,result.total FROM `user`  
LEFT JOIN `result` ON user.id = result.user_id 


SELECT user.id,user.name,result.total FROM `user`  
RIGHT JOIN `result` ON user.id = result.user_id 


SELECT user.id,user.name,result.total FROM `user`  
INNER JOIN `result` ON user.id = result.user_id 



SELECT `countruy_name`,COUNT(state) as state FROM `country` GROUP BY `countruy_name`;


