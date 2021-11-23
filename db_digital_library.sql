/* Table Book */
CREATE TABLE `book` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication` date NOT NULL,
  `summary` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,

  CONSTRAINT fk_category_id          -- On donne un nom à notre clé
        FOREIGN KEY (category)             -- Colonne sur laquelle on crée la clé
        REFERENCES category(id)
        ON UPDATE CASCADE ON DELETE RESTRICT,

  CONSTRAINT fk_author_id          -- On donne un nom à notre clé
        FOREIGN KEY (author)             -- Colonne sur laquelle on crée la clé
        REFERENCES author(id) 
        ON UPDATE CASCADE ON DELETE RESTRICT, 
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


/* Table Category */

CREATE TABLE `category` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/* Table Author */

CREATE TABLE `author` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

