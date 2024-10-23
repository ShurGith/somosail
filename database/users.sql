-- -------------------------------------------------------------
-- TablePlus 6.0.0(550)
--
-- https://tableplus.com/
--
-- Database: database.sqlite
-- Generation Time: 2024-10-20 22:38:36.3800
-- -------------------------------------------------------------


DROP TABLE IF EXISTS "users";
CREATE TABLE "users" ("id" integer primary key autoincrement not null, "name" varchar not null, "email" varchar not null, "email_verified_at" datetime, "password" varchar not null, "remember_token" varchar, "current_team_id" integer, "profile_photo_path" varchar, "created_at" datetime, "updated_at" datetime, "two_factor_secret" text, "two_factor_recovery_codes" text, "two_factor_confirmed_at" datetime);

INSERT INTO "users" ("id", "name", "email", "email_verified_at", "password", "remember_token", "current_team_id", "profile_photo_path", "created_at", "updated_at", "two_factor_secret", "two_factor_recovery_codes", "two_factor_confirmed_at") VALUES
('1', 'Aurora Guerra', 'fvilla@example.net', '2024-10-11 10:20:13', '$2y$12$vaCuMmgxlVzxylJbwvMPgOv9w9omBto9Tw2Uqh8y14oCvgFjZY/re', NULL, NULL, 'john_lennon.png', NULL, NULL, NULL, NULL, NULL),
('2', 'Lic. Luis Santamaría', 'naiara.requena@example.net', '2024-10-11 10:20:14', '$2y$12$vaCuMmgxlVzxylJbwvMPgOv9w9omBto9Tw2Uqh8y14oCvgFjZY/re', NULL, NULL, 'tim-logo.png', NULL, NULL, NULL, NULL, NULL),
('3', 'Asier Garibay', 'agosto.sofia@example.net', '2024-10-11 10:20:14', '$2y$12$vaCuMmgxlVzxylJbwvMPgOv9w9omBto9Tw2Uqh8y14oCvgFjZY/re', NULL, NULL, 'default.png', NULL, NULL, NULL, NULL, NULL),
('4', 'Lic. Jon Alanis Segundo', 'ocastro@example.net', '2024-10-11 10:20:14', '$2y$12$vaCuMmgxlVzxylJbwvMPgOv9w9omBto9Tw2Uqh8y14oCvgFjZY/re', NULL, NULL, 'john_lennon.png', NULL, NULL, NULL, NULL, NULL),
('5', 'Alejandro Matos Tercero', 'rodarte.veronica@example.com', '2024-10-11 10:20:14', '$2y$12$vaCuMmgxlVzxylJbwvMPgOv9w9omBto9Tw2Uqh8y14oCvgFjZY/re', NULL, NULL, 'default.png', NULL, NULL, NULL, NULL, NULL),
('6', 'María Pilar García', 'erik.figueroa@example.org', '2024-10-11 10:20:14', '$2y$12$vaCuMmgxlVzxylJbwvMPgOv9w9omBto9Tw2Uqh8y14oCvgFjZY/re', NULL, NULL, 'john_lennon.png', NULL, NULL, NULL, NULL, NULL),
('7', 'Cristian Olvera Segundo', 'archuleta.josemanuel@example.com', '2024-10-11 10:20:14', '$2y$12$vaCuMmgxlVzxylJbwvMPgOv9w9omBto9Tw2Uqh8y14oCvgFjZY/re', NULL, NULL, 'default.png', NULL, NULL, NULL, NULL, NULL),
('8', 'Ainhoa Almaráz', 'snevarez@example.org', '2024-10-11 10:20:14', '$2y$12$vaCuMmgxlVzxylJbwvMPgOv9w9omBto9Tw2Uqh8y14oCvgFjZY/re', NULL, NULL, 'john_lennon.png', NULL, NULL, NULL, NULL, NULL),
('9', 'Srta. Esther Arriaga', 'hprieto@example.com', '2024-10-11 10:20:14', '$2y$12$vaCuMmgxlVzxylJbwvMPgOv9w9omBto9Tw2Uqh8y14oCvgFjZY/re', NULL, NULL, 'perrito.png', NULL, NULL, NULL, NULL, NULL),
('10', 'Ángel Sotelo Hijo', 'ruelas.fatima@example.net', '2024-10-11 10:20:14', '$2y$12$vaCuMmgxlVzxylJbwvMPgOv9w9omBto9Tw2Uqh8y14oCvgFjZY/re', NULL, NULL, 'john_lennon.png', NULL, NULL, NULL, NULL, NULL),
('11', 'Susan', 'susan@example.com', '2024-10-11 10:20:15', '$2y$12$4.krJAgaya6P4v3iyXsZierSxa.DsNAVvDplNLJc.ASoRrG0z2tNS', NULL, NULL, 'perrito.png', NULL, NULL, NULL, NULL, NULL);
