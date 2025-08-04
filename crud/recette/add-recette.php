<php

function createRecette($name, $email, $password) {
    global $pdo;

    // Hashage du mot de passe avant de l'enregistrer
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Requête d'insertion
    $sql = "INSERT INTO Recette (name, email, password) VALUES (:name, :email, :password)";
    $stmt = $pdo->prepare($sql);


    try {
        // Exécution de la requête
        $stmt->execute();
        return "Utilisateur créé avec succès.";
    } catch (PDOException $e) {
        return "Erreur lors de l'insertion : " . $e->getMessage();