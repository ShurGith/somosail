-- -------------------------------------------------------------
-- TablePlus 6.0.0(550)
--
-- https://tableplus.com/
--
-- Database: database.sqlite
-- Generation Time: 2024-10-22 00:45:00.3510
-- -------------------------------------------------------------


DROP TABLE IF EXISTS "categories";
CREATE TABLE "categories" ("id" integer primary key autoincrement not null, "name" varchar not null, "logo" varchar not null, "ico" varchar not null, "logo_color" varchar not null, "primary_color" varchar not null, "secondary_color" varchar not null, "created_at" datetime, "updated_at" datetime, "description" text, "opacidad" varchar);

INSERT INTO "categories" ("id", "name", "logo", "ico", "logo_color", "primary_color", "secondary_color", "created_at", "updated_at", "description", "opacidad") VALUES
('1', 'Laravel', 'laravel-logo.svg', 'ti-brand-laravel', '#ffffff', '#FF2D20', '#000000', NULL, NULL, 'Este es el texto descriptivo de la categoría de laravel.', '66'),
('2', 'php', 'php-logo.svg', 'ti-file-type-php', '#ffffff', '#777BB4', '#aec733', NULL, NULL, NULL, 'CC'),
('3', 'vsc', 'vsc-logo.svg', 'ti-brand-vscode', '#ffffff', '#2F80ED', '#2F80ED', NULL, NULL, NULL, NULL),
('4', 'html', 'html5.svg', 'ti-brand-html5', '#000000', '#E34F26', '#615fc4', NULL, NULL, 'Descripción del Hache Te eme ele 5', NULL),
('5', 'css', 'css3.svg', 'ti-brand-css3', '#ffffff', '#1572B6', '#1572B6', NULL, NULL, NULL, NULL),
('6', 'django', 'django.svg', 'ti-brand-django', '#ffffff', '#092E20', '#092E20', NULL, NULL, NULL, NULL),
('7', 'python', 'python.svg', 'ti-brand-python', '#ffffff', '#3776AB', '#3776AB', NULL, NULL, NULL, NULL);
