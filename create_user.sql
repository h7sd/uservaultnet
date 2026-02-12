DROP USER IF EXISTS 'vaultuser'@'localhost';
CREATE USER 'vaultuser'@'localhost' IDENTIFIED BY 'MySecurePass123';
GRANT ALL PRIVILEGES ON uservault.* TO 'vaultuser'@'localhost';
FLUSH PRIVILEGES;
