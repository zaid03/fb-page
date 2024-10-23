<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>sign in</title>
    <link rel="stylesheet" href="sign_in_page.css">
</head>
<body>
    <section >
        <div class="titles">
            <p><span class="fb">facebook</span><br> Avec Facebook, partagez et restez en contact avec notre entourage</p>
        </div>

        <div class="info">

            <form method="get" action="insert.php">
                <input type="text" placeholder="Nom" name="last_name" required>
                <input type="text" placeholder="Prénom" name="name" required>
                <input type="email" placeholder="Email address" name="email" required>
                <input type="password" placeholder="Nouveau mot de passe" name="password" required>
                <input type="date" placeholder="jj/mm/aaaa" name="date" required>
                <select name = "gender">
                    <option>Homme</option>
                    <option>Femme</option>
                </select>
                <input type="submit" value="S'inscrire">
            </form>
            <p><button class="butt">Crèer une page</button> pour une célébrité, une marque ou une entreprise.</p>
        </div>
    </section>
</body>
</html>