CREATE TABLE personne (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255) NOT NULL,
    Cne VARCHAR(255) NOT NULL
);

CREATE TABLE ville (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Ville VARCHAR(255) NOT NULL,
    personneId INT,
    FOREIGN KEY (personneId) REFERENCES personne(id)
);

-- Insert data into personne table
INSERT INTO personne (Nom, CNE) VALUES
    ('bakkali', '12345'),
    ('harrak', '67890'),
    ('Alaoui', '54321');
    ('adnan', '543244');

-- Insert data into ville table
INSERT INTO ville (Ville, personneId) VALUES
    ('tanger', 1),
    ('tetouan', 2),
    ('larach', 3);
    ('rabat', 4);
