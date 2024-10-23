-- -------------------------------------------------------------
-- TablePlus 6.0.0(550)
--
-- https://tableplus.com/
--
-- Database: database.sqlite
-- Generation Time: 2024-10-22 00:45:15.3970
-- -------------------------------------------------------------


DROP TABLE IF EXISTS "category_post";
CREATE TABLE "category_post" ("id" integer primary key autoincrement not null, "post_id" integer not null, "category_id" integer not null, "created_at" datetime, "updated_at" datetime, foreign key("post_id") references "posts"("id") on delete cascade, foreign key("category_id") references "categories"("id") on delete cascade);

INSERT INTO "category_post" ("id", "post_id", "category_id", "created_at", "updated_at") VALUES
('1', '1', '1', '', NULL),
('2', '2', '2', NULL, NULL),
('3', '3', '3', NULL, NULL),
('4', '4', '1', NULL, NULL),
('5', '5', '6', NULL, NULL),
('6', '6', '7', NULL, NULL),
('7', '7', '1', '', NULL),
('8', '8', '2', NULL, NULL),
('9', '9', '3', NULL, NULL),
('10', '10', '1', NULL, NULL),
('11', '11', '6', NULL, NULL),
('12', '12', '7', NULL, NULL),
('13', '13', '1', '', NULL),
('14', '14', '2', NULL, NULL),
('15', '15', '3', NULL, NULL),
('16', '16', '1', NULL, NULL),
('17', '17', '6', NULL, NULL),
('18', '18', '7', NULL, NULL);
