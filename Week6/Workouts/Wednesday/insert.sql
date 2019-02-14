INSERT
INTO `region`
(`name`, `slug`)
VALUES
('Eastern Europe', 'eastern-europe');

INSERT INTO `region`
(`name`, `slug`)
VALUES
('Western Europe', 'western-europe');

INSERT INTO `region`
(`name`, `slug`)
VALUES
('North America', 'north-america'),
('Central America', 'central-america'),
('South America', 'south-america<<');

UPDATE `city`
SET `Name` = 'Prague'
WHERE `id` = 3339;

UPDATE `city`
SET `Population` = 1294513
WHERE `id` = 3339;

UPDATE `country`
SET `HeadOfState` = 'Donald J. Trump'
WHERE `GovernmentForm` = 'US Territory';

UPDATE `country`
SET `HeadOfState` = 'Donald J. Trump'
WHERE `GovernmentForm` = 'US Territory';