CREATE TABLE bookstore.books (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title VARCHAR(100),
    price INT,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE bookstore.chapters (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    number INT,
    title VARCHAR(100),
    book_id INT,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);