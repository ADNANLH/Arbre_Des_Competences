CREATE TABLE personne (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255) NOT NULL,
    Cne VARCHAR(255) NOT NULL,
    Type VARCHAR(255) NOT NULL
);


-- Insert data into personne table
INSERT INTO personne (Nom, CNE) VALUES
    ('bakkali', '12345', 'stagiaire'),
    ('harrak', '67890', 'stagiaire'),
    ('Alaoui', '54321', 'stagiaire'),
    ('adnan', '543244', 'stagiaire');

-- Insert data into ville table
