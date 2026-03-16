<?php

$host = 'localhost';
$dbname = 'ValcomeanuAlexandra'; 
$username = 'root'; 
$password = ''; 

// Conectarea la baza de date
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexiunea la baza de date a eșuat: " . $e->getMessage());
}

// Gestionarea autentificării
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($email) && !empty($password)) {
        // Interogare pentru validarea utilizatorului
        $stmt = $conn->prepare('SELECT * FROM clienti WHERE email = :email AND password = :password');
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password); 
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // Autentificare reușită
            session_start();  
            $user = $stmt->fetch(PDO::FETCH_ASSOC);  // Preluăm datele utilizatorului
            $_SESSION['first_name'] = $user['first_name']; // Salvăm first_name în sesiune
            header('Location: welcome.php');  
            exit;
        } else {
            $error = 'Email sau parolă incorectă.';
        }
    } else {
        $error = 'Toate câmpurile sunt obligatorii.';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_login.css"/>
    <title>A&D Cosmetics</title>
    <style>
      .im2 {
    width: 30px;
    height: 30px;
    object-fit: cover;
    float: right;
    margin-right: 30px;
    margin-top: 15px;
}

.form-control {
    float: right;
    margin-right: 20px;
    display: block;
    width: 30%;
    padding: 7px;
    margin-top: 15px;
    font-size: 15;
    font-weight: 400;
    line-height: 1;
    background-color: rgb(254, 224, 243);
    background-clip: padding-box;
    border: var(--bs-border-color);
    border-radius: var(--bs-border-radius);
}

.d{
    background: linear-gradient(#ffffff34,#ffffff27);
    width: 360px;
    height: 380px;
    border: 1px solid #ffffff83;
    box-shadow: 0 8px 32px #0000008a;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: auto;
    margin-top: 60px;
    margin-bottom: 80px;
    border-radius: 8px;
}
    </style>  
</head>
<body>
    <header class="cl1">Transport gratuit la comenzile de peste 300 Ron</header>
    
    <form role="search" class="cl">
        <h2 class="cl2">A&D Cosmetics</h2>
        <a href="cos_cumparaturi.html"> <img src="coscumparaturi.jpg" class="im2"> </a>
        <a href="login.php"> <img src="login.jpg" class="im2"> </a>
        <input type="search" class="form-control" placeholder="Search..." aria-label="search">
    </form>

    <div class="ul2">
        <ul class="ul1">  
            <li class="li1"><a class="aa" href="welcome.php">Home</a></li>
            <li class="li1"><a class="aa" href="Machiaj.html">Machiaj</a></li>
            <li class="li1"><a class="aa" href="Ingrijirea_Tenului.html">Îngrijirea Tenului</a></li>
            <li class="li1"><a class="aa" href="Parfumuri.html">Parfumuri</a></li>
        </ul>
    </div>
      
    <main>
        <div class="d">
            <form method="POST" action="login.php">
                <h3>LOGIN</h3>
                <?php if (!empty($error)): ?>
                    <p style="color: red;"><?php echo $error; ?></p>
                <?php endif; ?>
                <div class="input-field"> 
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-field"> 
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
                
                <button type="submit">Sign in</button>
                <div> 
                    <a class="create" href="create.php">Create Account</a>
                </div>
            </form>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-continut">
            <div class="footer-about">
                <h3>Despre Noi</h3>
                <p>La <strong>A&D Cosmetics</strong>, ne dedicăm să oferim produse cosmetice premium, perfecte pentru toate tipurile de piele. Descoperă frumusețea cu noi!</p>
            </div>

            <div class="footer-links">
                <h3>Linkuri Utile</h3>
                <ul>
                    <li><a href="despre_noi.html">Despre Noi</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="politica_de_conf.html">Politica de Confidențialitate</a></li>
                    <li><a href="Termeni_si_conditii.html">Termeni și Condiții</a></li>
                </ul>
            </div>

            <div class="footer-newsletter">
                <h3>Abonează-te la Newsletter</h3>
                <p>Fii la curent cu ultimele noutăți și promoții exclusive!</p>
                <form>
                    <input type="email" placeholder="Adresa ta de email" required>
                    <button type="submit">Abonează-te</button>
                </form>
            </div>
        </div>

        <div class="footer-copyright">
            <p>&copy; 2025 A&D Cosmetics. Toate drepturile rezervate.</p>
        </div>
    </footer>
</body>
</html>
