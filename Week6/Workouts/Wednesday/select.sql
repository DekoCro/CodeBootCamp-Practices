SELECT *
FROM `country`;


SELECT *
FROM `country`
WHERE `population` > 20000000;
/* OR */
SELECT `country`.*
FROM `country`
WHERE `country`.`population` > 20000000;


SELECT *
FROM `country`
WHERE `population` > 20000000
ORDER BY `population` DESC;

SELECT *
FROM `country`
WHERE `population` > 20000000
ORDER BY `population` ASC
LIMIT 0, 10; /* START FROM 1(SKIP FIRST ARG 0) AND GIVE  ME 10 OF THEM(SECOND ARG);*/


SELECT `name`, `continent`
FROM `country`
WHERE `population` > 20000000
ORDER BY `population` ASC
LIMIT 0, 10;