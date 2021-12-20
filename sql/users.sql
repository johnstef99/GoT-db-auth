-- Admin Role
CREATE ROLE 'admin';
GRANT ALL PRIVILEGES ON gotdb.* TO 'admin';
-- Create an admin user
CREATE USER 'bob_the_admin'@'localhost' IDENTIFIED BY 'password';
GRANT 'admin' TO 'bob_the_admin'@'localhost';


-- Mod Role
CREATE ROLE 'moderator';
GRANT SELECT, INSERT, UPDATE ON gotdb.* TO 'moderator';
-- Create a mod user
CREATE USER 'john_the_mod'@'localhost' IDENTIFIED BY '12345678';
GRANT 'moderator' TO 'john_the_mod'@'localhost';

-- SimpleUser Role
CREATE ROLE 'simple';
GRANT SELECT ON gotdb.* TO 'simple';
-- Create a SimpleUser user
CREATE USER 'boomer'@'localhost' IDENTIFIED BY 'trump-it-up';
GRANT 'simple' TO 'boomer'@'localhost';
