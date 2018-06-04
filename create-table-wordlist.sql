CREATE TABLE wordslist.words (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    words VARCHAR(100),
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO wordslist.words (words) VALUES ("ctrl + F = search");
INSERT INTO wordslist.words (words) VALUES ("undifined offset = 配列がカラ　or サイズオーバー");
