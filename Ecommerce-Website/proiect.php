<html>

  <head>
	<link rel="stylesheet" type="text/css" href="stilizare.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  	 <title> A&D Cosmetics </title>
     <style>
        
     </style>
  </head>

  <body >
    <header class="cl1"> Transport gratuit la comenzile de peste 300 Ron</header>
  	
    <form role="search" class="cl">
      <h2 class="cl2">A&D Cosmetics</h2>
      <a href="cos_cumparaturi.html"> <img src="coscumparaturi.jpg" class="im2"> </a>
      <a href="login.php"> <img src="login.jpg" class="im2"> </a>
      <input type="search" class="form-control" placeholder="Search..." aria-label="search">
    </form>

    <div class="ul2"> <ul class="ul1">  
      <li class="li1"><a class="aa" href="proiect.php">Home</a></li>
      <li class="li1"><a class="aa" href="Machiaj.html">Machiaj</a></li>
      <li class="li1"><a class="aa" href="Ingrijirea_Tenului.html">Îngrijirea Tenului</a></li>
      <li class="li1"><a class="aa" href="Parfumuri.html">Parfumuri</a></li>
     </ul> </div>
	  
  <main> 
     <img src="cosmetice.jpg" class="im1" >
     <div >
        <h3 class="h3_titlu">Welcome to A&D Cosmetics</h3>
        <h1 class="h1_titlu">Top Sellers</h1>
     </div>

     <div class="products">

      <div class="product" data-category="femei" data-brand="lancome" data-id="48" data-name="Trésor La Nuit" data-price="450">
        <div class="wrapper">
          <div class="container">
            <div class="top"><img src="lancome_tresor.jpg" class="im_prod"></div>
            <div class="bottom">
              <div class="left">
                <div class="details">
                  <h3>LANCOME</h3>
                  <h4>Trésor La Nuit</h4>
                  <p>450 RON</p>
                </div>
                <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="product" data-category="buze" data-brand="yves-saint-laurent" data-id="32" data-name="Rouge Pur Couture" data-price="160">
        <div class="wrapper">
          <div class="container">
            <div class="top"><img src="ysl_ruj2.jpg" class="im_prod"></div>
            <div class="bottom">
              <div class="left">
                <div class="details">
                  <h3>YSL</h3>
                  <h4>Rouge Pur Couture</h4>
                  <p>160 RON</p>
                </div>
                <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="product" data-category="pudra" data-brand="anastasia-beverly-hills" data-id="20" data-name="Loose Setting Powder" data-price="140">
        <div class="wrapper">
          <div class="container">
            <div class="top"><img src="anastasia_pudra.jpg" class="im_prod"></div>
            <div class="bottom">
              <div class="left">
                <div class="details">
                  <h3>ANASTASIA</h3>
                  <h4>Loose Setting Powder</h4>
                  <p>140 RON</p>
                </div>
                <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="product" data-category="fond-de-ten" data-brand="estee-lauder" data-id="11" data-name="Double Wear" data-price="200">
        <div class="wrapper">
          <div class="container">
            <div class="top"><img src="fdt_estee.jpg" class="im_prod"></div>
            <div class="bottom">
              <div class="left">
                <div class="details">
                  <h3>ESTEE LAUDER </h3>
                  <h4>Double Wear </h4>
                  <p>200 RON</p>
                </div>
                <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
              </div>
            </div>
          </div>
        </div>
      </div>

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

  <script>
    // Selectăm toate pictogramele "add_shopping_cart"
  document.querySelectorAll('.material-icons').forEach((icon) => {
  icon.addEventListener('click', function () {
    // Identificăm produsul asociat pictogramei pe care s-a apăsat
    const productEl = this.closest('.product');

    // Creăm un obiect cu detalii despre produs
    const product = {
      id: parseInt(productEl.dataset.id), // ID-ul unic al produsului
      name: productEl.dataset.name,      
      brand: productEl.dataset.brand,   
      category: productEl.dataset.category, 
      price: parseFloat(productEl.dataset.price), 
      image: productEl.querySelector('img').src, // Link-ul către imagine
      quantity: 1, 
    };

    // Citim coșul curent din localStorage (sau creăm unul gol)
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Verificăm dacă produsul există deja în coș
    const existingProduct = cart.find((item) => item.id === product.id);
    if (existingProduct) {
      existingProduct.quantity += 1; 
    } else {
      cart.push(product); 
    }

    // Salvăm coșul actualizat în localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    alert(`${product.name} a fost adăugat în coș!`);
  });
});

  </script>

  </body>
</html>


