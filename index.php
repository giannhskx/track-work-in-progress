<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ερμής Ηλίου Στίβος</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src="script.js" defer></script> -->
</head>
<body class="n">
    <header>
        <h1>Ερμής Ηλίου Στίβος</h1>
        <nav>
            <a href="index.php">Αρχική</a>
            <a href="about.html">Σχετικά</a>
            <a href="runner.html">Αθλητές</a>
        </nav>
    </header>
    <main>
        <section class="registration">
            <h2>Εγγραφές</h2>
            <p class="co">Ελάτε στην Ομάδα μας!<br>
                Στον Ερμή Ηλίου, σας προσκαλούμε να γυμναστείτε μαζί μας και,
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
            <p>Ο Ερμής Ηλίου είναι ένας αθλητικός σύλλογος με μακρά παράδοση στον στίβο. Η ομάδα έχει κερδίσει πολλές φορές το Πανελλήνιο Πρωτάθλημα,
                αποτελώντας έναν από τους κορυφαίους συλλόγους στην Ελλάδα.</p>
        </section>
        <section class="contact co">
            <h2>Επικοινωνία</h2>
            <p>Διεύθυνση: Στάδιο Ηλίου, Αθήνα</p>
            <p>Τηλέφωνο: 693 706 7630</p>
        </section>
        <section class="login">
            <h2>Σύνδεση</h2>
            <form id="loginForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="username">Όνομα Χρήστη:</label>
                <input type="text" id="username" name="username">
                <label for="password">Κωδικός Πρόσβασης:</label>
                <input type="password" id="password" name="password">
                <button type="submit">Σύνδεση</button>
            </form>
            <div id="error">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $username = trim($_POST["username"]);
                    $password = trim($_POST["password"]);
                    if (empty($username) || empty($password)) {
                        echo "Παρακαλώ συμπληρώστε όλα τα πεδία.";
                    } else {
                        echo "Επιτυχής σύνδεση";
                    }
                }
                ?>
            </div> 
        </section>
    </main>
    <footer class="s">
        <p>&copy; 2024 Ερμής Ηλίου. Όλα τα δικαιώματα κατοχυρωμένα.</p>
    </footer>
</body>
</html>
