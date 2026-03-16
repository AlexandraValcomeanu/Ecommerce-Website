<html>
<head>
    <link rel="stylesheet" type="text/css" href="style_login.css">
    <title>A&D Cosmetics</title>
    <style>

.cl {
    height: 50px;
    width: 100%;
    background-color: black ;
    margin: 0px;
    padding: 0px;
    border: 0px;
   }

.cl1 {
    background-color: rgb(251, 164, 208);
    text-align: center;
}  

.cl2{
    float: left;
    margin-left: 20px;
}

.im2 {
    width: 30px;
    height: 30px;
    object-fit: cover;
    float: right;
    margin-right: 30;
    margin-top: 15px;
}

h2{
    color: white;
    font-size: 27;
    text-align: center;
}

.ul2{
    background-color: black;
    width: 100%;
    
}

.ul1 {
    list-style-type: none;
    margin-top: 0;
    overflow: hidden;
    background-color:black;
    margin-left: auto;
    margin-right: auto;
    width: 47%;
    
   }

.li1 { 
    float: left;
    color: white;
    display: block;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    
}
   
.aa {
    color: white;
    text-decoration: none;
}
   
.form-control {
    float: right;
    margin-right: 20;
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

body {
    background-image: linear-gradient(black, #fcb4f0);
    border: none;
    margin: 0px;
}

.d{
    background: linear-gradient(#ffffff34,#ffffff27);
    width: 500px;
    min-height: 400px;
    border: 1px solid #ffffff83;
    box-shadow: 0 8px 32px #0000008a;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 20px;
    margin: 60px auto 80px;
    border-radius: 8px;
}

h3{
    margin-bottom: 25;
    letter-spacing: 1px;
    font-size: 25px ;
    text-align: center;
}

button{
    background-color: #271930;
    color: white;
    font-weight: 600;
    padding: 15px 20px;
    cursor: pointer;
    border-radius: 25px;
    font-size: 16px;
    margin-left: 60px;
    margin-top: 15px;
    margin-bottom: 15px;
}

.input-field{
  margin-bottom: 15px;
}

.input-field input{
    width: 100%;
    height: 40px;
    background: transparent;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 10px;
    
}

.input-field input::placeholder {
    color: black; /* Culoarea placeholder-ului */
    opacity: 1; 
}

.forget{
    align-items: center;
    justify-content: space-between;
    color: black;
    text-decoration: none;
    margin-right: 15px ;
}

.create{
    text-decoration: none;
    color: #242324;
    margin-left: 60px;
}

.b{
    background-color: #271930;
    color: white;
    font-weight: 600;
    padding: 15px 20px;
    cursor: pointer;
    border-radius: 25px;
    font-size: 16px;
    margin: 15px auto;
    width: 30%;
}

.footer {
    background-color: #111; 
    color: #fff; 
    padding: 10px 20px;
    text-align: center;
    margin-top: 5px;
  }

.footer-continut {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); 
    gap: 30px;
    max-width: 1300px;
    margin: 0 auto;
  }

  .footer h3 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #f98adf; 
  }

  .footer p {
    font-size: 15px;
    line-height: 1.7;
    color: #ccc; /* Gri deschis */
  }

  .footer-links ul {
    list-style: none;
    padding: 0;
  }

  .footer-links ul li {
    margin: 5px 0;
  }

  .footer-links a {
    text-decoration: none;
    color: #ddd; 
    font-size: 15px;
  }

  .footer-links a:hover {
    color: #f98adf;
  }

  .footer-newsletter form {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .footer-newsletter input {
    padding: 10px;
    border: 1px solid #444; 
    border-radius: 5px;
    font-size: 14px;
    background-color: #222; 
    color: #fff;
  }

  .footer-newsletter input::placeholder {
    color: #888; 
  }

  .footer-newsletter button {
    padding: 10px;
    background-color: #e974c6; 
    color: #111;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
  }

  .footer-newsletter button:hover {
    background-color: #f494dd; 
  }

  .footer-copyright {
    margin-top: 10px;
    text-align: center;
    font-size: 14px;
    color: #aaa; 
    border-top: 1px solid #333; /* Linie de separare  */
  }

  .h3_titlu{
    text-align: center;
    margin-top: 30px;
  }

    </style>
</head>

<body>
    <form action="insert.php" method="post">
        <header class="cl1">Transport gratuit la comenzile de peste 300 Ron</header>
        
        <div class="cl">
            <h2 class="cl2">A&D Cosmetics</h2>
            <a href="cos_cumparaturi.html"><img src="coscumparaturi.jpg" class="im2"></a>
            <a href="login.php"><img src="login.jpg" class="im2"></a>
            <input type="search" class="form-control" placeholder="Search..." aria-label="search">
        </div>

        <div class="ul2">
            <ul class="ul1">
                <li class="li1"><a class="aa" href="login.php">Home</a></li>
                <li class="li1"><a class="aa" href="Machiaj.html">Machiaj</a></li>
                <li class="li1"><a class="aa" href="Ingrijirea_Tenului.html">Îngrijirea Tenului</a></li>
                <li class="li1"><a class="aa" href="Parfumuri.html">Parfumuri</a></li>
            </ul>
        </div>

        <div class="d">
            <h3>Create Account</h3>
            <div class="input-field">
                <input type="text" name="first_name" required placeholder="First name">
            </div>
            <div class="input-field">
                <input type="text" name="last_name" required placeholder="Last name">
            </div>
            <div class="input-field">
                <input type="email" name="email" required placeholder="Email">
            </div>
            <div class="input-field">
                <input type="password" name="password" required placeholder="Password">
            </div>
            <button class="b" type="submit">Create</button>
        </div>
    </form>

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
                <form action="newsletter.php" method="post">
                    <input type="email" name="newsletter_email" placeholder="Adresa ta de email" required>
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