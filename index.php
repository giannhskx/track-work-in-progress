

<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ερμής Ιλίου Στίβος</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src="script.js" defer></script> -->
</head>
<body class="n">
    <header>
        <h1>Ερμής Ιλίου Στίβος</h1>
        <nav>
            <a href="index.php">Αρχική</a>
            <a href="runner.html">Αθλητές</a>
            <a href="about.html">Σχετικά</a>
        </nav>
    </header>
    <main>
        <section class="registration">
            <h2>Εγγραφές</h2>
            <p class="co">Ελάτε στην Ομάδα μας!<br>
                Στον Ερμή Ιλίου, σας προσκαλούμε να γυμναστείτε μαζί μας και,
                πάνω από όλα, να περάσετε καλά.<br>
                Η ομάδα μας δεν είναι μόνο για όσους θέλουν να αθληθούν, 
                αλλά και για εκείνους που αναζητούν ένα φιλικό και υποστηρικτικό περιβάλλον.<br>
                Με την καθοδήγηση των έμπειρων προπονητών μας, 
                Αντώνη Μπαμπαρούτση και Θανάση Χριστογιαννόπουλο,
                και με την έμπνευση από πρωταθλήτριες όπως η Σάρα Άουντι,<br>
                είμαστε βέβαιοι ότι θα βρείτε τον ιδανικό χώρο για να αναπτύξετε τις αθλητικές σας ικανότητες και να δημιουργήσετε αξέχαστες αναμνήσεις. Ελάτε μαζί μας και γίνετε μέρος της επιτυχημένης μας ομάδας!</p>
        </section>
        <section class="history co">
            <h2>Ιστορία</h2>
            <p>Ο Ερμής Ιλίου είναι ένας αθλητικός σύλλογος με μακρά παράδοση στον στίβο. Η ομάδα έχει κερδίσει πολλές φορές το Πανελλήνιο Πρωτάθλημα,
                αποτελώντας έναν από τους κορυφαίους συλλόγους στην Ελλάδα.</p>
        </section>
        <section class="contact co">
            <h2>Επικοινωνία</h2>
            <p>Διεύθυνση: Δημοτικό Στάδιο Ιλίου, 'Ιλιον</p>
            <p>Τηλέφωνο: 693 706 7630</p>
        </section>
        <section class="login">
            <h2>Σύνδεση</h2>
            <form action="verify_email.php" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <input type="submit" value="Verify Email">
            </form>
        </section>
    </main>
    <footer class="s">
        <p>&copy; 2024 Ερμής Ιλίου. Όλα τα δικαιώματα κατοχυρωμένα.</p>
    </footer>
</body>
</html>
