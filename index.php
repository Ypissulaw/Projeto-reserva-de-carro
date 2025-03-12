<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./src/css/estilo-escolha.css" />
  <title>Escolha seu carro | RentCar</title>
</head>

<body>
  <header>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#" class="logo">
            <img src="./assets/logo-white.png" alt="logo" class="logo-white" />
            <img src="./assets/logo-dark.png" alt="logo" class="logo-dark" />
            <span>RentCar</span>
          </a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#home">Início</a></li>
        <li><a href="#about">Catálogo</a></li>
        <li><a href="#choose">Sobre nós</a></li>
        <li><a href="#client">Ajuda</a></li>
        <li><a href="#">Registrar</a></li>
      </ul>
      <div class="nav__btns">
        <button class="btn">Alugar</button>
      </div>
    </nav>
  </header>
  <!--Carros-->
  <section class="deals" id="deals">
    <div class="section__container deals__container">
      <h2 class="section__header">Nosso catálogo 🚗</h2>
      <div class="deals__tabs">
        <button class="btn active" data-id="Tesla">Tesla</button>
        <button class="btn" data-id="Mitsubishi">Mitsubishi</button>
        <button class="btn" data-id="Mazda">Mazda</button>
        <button class="btn" data-id="Toyota">Toyota</button>
        <button class="btn" data-id="Honda">Honda</button>
      </div>
      <!--Tesla-->
      <div id="Tesla" class="tab__content active">
        <!--Carro 1-->
        <div class="deals__card">
          <img src="./assets/deals-1.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(550)</span>
          </div>
          <h4>Tesla Model S</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 Pessoas
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Automático
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 400km
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Elétrico
            </div>
          </div>
          <!--Carro 1 - valores-->
          <!--OVERLAY-->
          <hr />
          <div class="deals__card__footer">
            <h3>R$180<span>/Por dia</span></h3>
            <a href="./src/php/alugar_carro.php">
              Alugar já
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <!--FIM Carro 1-->
        <div class="deals__card">
          <img src="./assets/deals-1.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(550)</span>
          </div>
          <h4>Tesla Model S</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 Pessoas
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Automático
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 400km
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Elétrico
            </div>
          </div>

          <hr />
          <div class="deals__card__footer">
            <h3>R$180<span>/Por dia</span></h3>
            <a href="alugar_carro.php">
              Alugar já
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>

        </div>
        <div class="deals__card">
          <img src="./assets/deals-1.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(550)</span>
          </div>
          <h4>Tesla Model S</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 Pessoas
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Automático
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 400km
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Elétrico
            </div>
          </div>

          <hr />
          <div class="deals__card__footer">
            <h3>R$180<span>/Por dia</span></h3>
            <a href="alugarja.php">
              Alugar já
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>

        </div>
        <div class="deals__card">
          <img src="./assets/deals-1.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(550)</span>
          </div>
          <h4>Tesla Model S</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 Pessoas
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Automático
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 400km
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Elétrico
            </div>
          </div>

          <hr />
          <div class="deals__card__footer">
            <h3>R$180<span>/Por dia</span></h3>
            <a href="alugarja.php">
              Alugar já
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>

        </div>
        <div class="deals__card">
          <img src="./assets/deals-1.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(550)</span>
          </div>
          <h4>Tesla Model S</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 Pessoas
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Automático
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 400km
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Elétrico
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>R$180<span>/Por dia</span></h3>
            <a href="alugarja.php">
              Alugar já
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-3.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(550)</span>
          </div>
          <h4>Tesla Modelo Y</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 Pessoas
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Piloto Automático
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 400km
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Elétrico
            </div>
          </div>

          <hr />
          <div class="deals__card__footer">
            <h3>R$200<span>/Por Dia</span></h3>
            <a href="#">
              Alugar Agora
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>

        </div>
      </div>
      <div id="Mitsubishi" class="tab__content">
        <div class="deals__card">
          <img src="./assets/deals-4.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(350)</span>
          </div>
          <h4>Mirage</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr>
          <div class="deals__card__footer">
            <h3>$120<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-4.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(350)</span>
          </div>
          <h4>Mirage</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$120<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-4.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(350)</span>
          </div>
          <h4>Mirage</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$120<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-4.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(350)</span>
          </div>
          <h4>Mirage</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$120<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-5.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(250)</span>
          </div>
          <h4>Xpander</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$150<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-6.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(150)</span>
          </div>
          <h4>Pajero Sports</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$180<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
      </div>
      <div id="Mazda" class="tab__content">
        <div class="deals__card">
          <img src="./assets/deals-7.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(200)</span>
          </div>
          <h4>Mazda CX5</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$130<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>

        <div class="deals__card">
          <img src="./assets/deals-7.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(200)</span>
          </div>
          <h4>Mazda CX5</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$130<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>

        <div class="deals__card">
          <img src="./assets/deals-7.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(200)</span>
          </div>
          <h4>Mazda CX5</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$130<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>

        <div class="deals__card">
          <img src="./assets/deals-7.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(200)</span>
          </div>
          <h4>Mazda CX5</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$130<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-8.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(100)</span>
          </div>
          <h4>Mazda CX-30</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$200<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-9.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(180)</span>
          </div>
          <h4>Mazda CX-9</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$180<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
      </div>
      <div id="Toyota" class="tab__content">
        <div class="deals__card">
          <img src="./assets/deals-10.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(250)</span>
          </div>
          <h4>Corolla</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$180<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-11.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(550)</span>
          </div>
          <h4>Innova</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$150<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-12.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(180)</span>
          </div>
          <h4>Fortuner</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$190<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
      </div>
      <div id="Honda" class="tab__content">
        <div class="deals__card">
          <img src="./assets/deals-13.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(200)</span>
          </div>
          <h4>Amaze</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$100<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-13.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(200)</span>
          </div>
          <h4>Amaze</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$100<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-13.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(200)</span>
          </div>
          <h4>Amaze</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$100<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-14.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(350)</span>
          </div>
          <h4>Elevate</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$120<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-15.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(300)</span>
          </div>
          <h4>City</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$150<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <div class="deals__card">
          <img src="./assets/deals-15.png" alt="deals" />
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(300)</span>
          </div>
          <h4>City</h4>
          <div class="deals__card__grid">
            <div>
              <span><i class="ri-group-line"></i></span> 4 People
            </div>
            <div>
              <span><i class="ri-steering-2-line"></i></span> Manual
            </div>
            <div>
              <span><i class="ri-speed-up-line"></i></span> 18km/l
            </div>
            <div>
              <span><i class="ri-car-line"></i></span> Diesel
            </div>
          </div>
          <hr />
          <div class="deals__card__footer">
            <h3>$150<span>/Per Day</span></h3>
            <a href="#">
              Rent Now
              <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./src/js/main.js"></script>
</body>

</html>