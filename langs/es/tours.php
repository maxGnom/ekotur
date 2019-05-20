  <?php
  if ($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']){
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $query = substr(parse_url($url, PHP_URL_QUERY), -1);
  }
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Wycieczki | Ekotur</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
  <link rel="icon" type="image/png" sizes="any" href="../../img/favicon.png" />
  <link rel="stylesheet" href="../../build/styles.tours.bundle.css" />
</head>
<body class="p-body">
  <?php include_once '../../preloader.html';?>
  <div id="hidden-query-getter" data-query= <?php echo $query ?>></div>
  <section class="p-main-wrapper">
    <div class="content-wrapper">
      <header>
        <section id="header-content-wrapper">
          <article class="header-content logo-wrapper__header-content">
            <a class="logo-link-block__header-content" href="#">
              <img class="logo-img-block__header-content" src="../../img/logo.png" alt="eko tur. egologia i turystyka" />
            </a>
          </article>
          <article class="header-content menu-langs-wrapper__header-content">
            <div class="sub-menu-btn">
            <ul class="sub-menu languages-menu-block">
                <li>
              <a href="../pl/tours.php">
                <img src="../../img/langs/pl.png" alt="polish" />
              </a>
              </li>
            <li>
              <a href="../de/tours.php">
                <img src="../../img/langs/de.png" alt="deutch" />
              </a>
            </li>
            <li>
              <a href="../en/tours.php">
                <img src="../../img/langs/en.png" alt="britain" />
              </a>
            </li>
            <li>
              <a href="../it/tours.php">
                <img src="../../img/langs/it.png" alt="italian" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="../../img/langs/es.png" alt="spain" />
              </a>
            </li>
            <li>
              <a href="../fr/tours.php">
                <img src="../../img/langs/fr.png" alt="french" />
              </a>
            </li>
            <li>
              <a href="../ru/tours.php">
                <img src="../../img/langs/ru.png" alt="russian" />
              </a>
            </li>
          </ul>
          </div>  
          </article>
          <article class="header-content menu-wrapper__header-content">
            <div id="toggle-menu-block"></div>
            <ul id="menu-block__header-content">
            <li class="menu-item__header-content">
              <a class="menu-link__header-content" id="offers-link" href="index.php#offers">Oferta</a>
            </li>
            <li class="menu-item__header-content">
              <a class="menu-link__header-content active-link" href="#">Wycieczki</a>
            </li>
            <li class="menu-item__header-content">
              <a class="menu-link__header-content" href="melexes.php">Pojazdy</a>
            </li>
            <li class="menu-item__header-content">
              <a id="atracje_wroclawia" class="menu-link__header-content" href="cityinfo.php">
            Atrakcje Wrocławia </a>
            </li>
            <li class="menu-item__header-content">
              <a class="menu-link__header-content" href="ekotur-curiosity.php">O firmie</a>
            </li>
            <li class="menu-item__header-content">
              <a class="menu-link__header-content" id="contacts-link" href="index.php#contacts">Kontakt</a>
            </li>
          </ul>
          </article>
        </section>
      </header>
      <div id="poi-short-information-wrapper">
        <span class="close-btn-cross" id="close-poi-info-btn"></span>
        <div id="poi-short-information-container">
          <div id="poi-short-information-content">
            <figure id="poi-figure">
              <img id="poi-img" src="" alt="" />
              <figcaption id="poi-caption">
                <h2 id="poi-title"></h2>
                <span id="poi-span-figcaption"></span>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="info-nav-tours-wrapper">
        <div class="left-block content-tours">
          <div class="tours-menu-wrapper">
            <ul class="tours-menu">
              <li onclick="changeTour(0)">
                <button class="btn-first-trip btn-personal">Wycieczka #1</button>
              </li>
              <li onclick="changeTour(1)" >
                <button class="btn-second-trip btn-personal">Wycieczka #2</button>
              </li>
              <li onclick="changeTour(2)">
                <button class="btn-third-trip btn-personal">Wycieczka #3</button>
              </li>
              <li onclick="changeTour(3)">
                <button class="btn-fourth-trip btn-personal">Wycieczka #4</button>
              </li>
            </ul>   
          </div>
        </div>
        <div class="bottom-block content-tours">
          <div class="info-choosen-tour-wrapper active-tour">
            <div>
              <span class="id-choosen">Wycieczka #1</span>              
            </div>
            <div>
              <span class="title-choosen">Stare miasto, Ostrów Tumski</span>
            </div>
            <div>
              <span class="duration-choosen">Czas trwania: 1 h</span>
            </div>
            <div class="prices-wrapper">
              <span class="price-title">Cena</span>
              <div class="statements-wrapper">
                <div class="small-group">
                  <span class="statement statement-big">od 1 do 5</span>
                  <span class="price">180 PLN za wycieczkę</span>
                </div>
                <div class="big-group">
                  <span class="statement statement-small">powyżej 5</span>
                  <span class="price">35 PLN / od osoby</span>
                </div>
              </div>
            </div>
            <div class="order-apply-block">
              <div class="order-apply-btn-wrapper">
                <button class="book-form-show-btn btn btn-primary">Rezerwacja</button>
                <button data-tour="1" class="short-describe-btn btn btn-success">Opis trasy</button>
              </div>
            </div>
          </div>
          <div class="info-choosen-tour-wrapper">
            <div>
              <span class="id-choosen">Wycieczka #2</span>    
            </div>
            <div>
              <span class="title-choosen">Stare miasto, Ostrów Tumski,<br>Kompleks Hali Stulecia</span>
            </div>
            <div>
              <span class="duration-choosen">Czas trwania: 1 h 40min</span>
            </div>
            <div class="prices-wrapper">
              <span class="price-title">Cena</span>
              <div class="statements-wrapper">
                <div class="small-group">
                  <span class="statement statement-big"> od 1 do 5</span>
                  <span class="price">250 PLN za wycieczkę</span>
                </div>
                <div class="big-group">
                  <span class="statement statement-small">powyżej 5</span>
                  <span class="price">50 PLN / od osoby</span>
                </div>
              </div>
            </div>
            <div class="order-apply-block">
              <div class="order-apply-btn-wrapper">
                <button class="book-form-show-btn btn btn-primary">Rezerwacja</button>
                <button data-tour="2" class="short-describe-btn btn btn-success">Opis trasy</button>
              </div>
            </div>
          </div>
          <div class="info-choosen-tour-wrapper">
            <div>
              <span class="id-choosen">Wycieczka #3</span>    
            </div>
            <div>
              <span class="title-choosen">Stare Miasto, Ostrów Tumski, Kompleks Hali Stulecia, Opera, Dzielnica Czterech Wyznań</span>
            </div>
            <div>
              <span class="duration-choosen">Czas trwania: 3 h</span>
            </div>
            <div class="prices-wrapper">
              <span class="price-title">Cena</span>
              <div class="statements-wrapper">
                <div class="small-group">
                  <span class="statement statement-big">od 1 do 5</span>
                  <span class="price">400 PLN za wycieczkę</span>
                </div>
                <div class="big-group">
                  <span class="statement statement-small">powyżej 5</span>
                  <span class="price">80 PLN / od osoby</span>
                </div>
              </div>
            </div>
            <div class="order-apply-block">
              <div class="order-apply-btn-wrapper">
                <button class="book-form-show-btn btn btn-primary">Rezerwacja</button>
                <button data-tour="3" class="short-describe-btn btn btn-success">Opis trasy</button>
              </div>
            </div>
          </div>
          <div class="info-choosen-tour-wrapper">
            <div>
              <span class="id-choosen">Wycieczka #4</span>
            </div>
            <div>
              <span class="title-choosen">Zabytkowy Wrocław Nocą, Mosty i 9 Fontann</span>
            </div>
            <div>
              <span class="duration-choosen">Czas trwania: 2 h</span>
            </div>
            <div class="prices-wrapper">
              <span class="price-title">Cena</span>
              <div class="statements-wrapper">
                <div class="small-group">
                  <span class="statement statement-big">od 1 do 5</span>
                  <span class="price">250 PLN za wycieczkę</span>
                </div>
                <div class="big-group">
                  <span class="statement statement-small">powyżej 5</span>
                  <span class="price">50 PLN / od osoby</span>
                </div>
              </div>
            </div>
            <div class="order-apply-block">
              <div class="order-apply-btn-wrapper">
                <button class="book-form-show-btn btn btn-primary">Rezerwacja</button>
                <button data-tour="4" class="short-describe-btn btn btn-success">Opis trasy</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="short-describes-wrapper">
        <article data-describe="1" class="short-describe">
          <span class="close-btn-cross close-describes-btn"></span>
          <div class="description-text-wrapper">
            <h1>Wycieczka #1</h1>
            <span>Stare miasto, Ostrów Tumski</span>
            <span>Czas trwania: 1 h</span>
            Podczas naszej godzinnej wycieczki zobaczymy najciekawsze okolice Starego Miasta z Uniwersytetem Wrocławskim i fontanną "Szermierz",  następnie przejeżdżając przez Wyspę Piaskową i most zakochanych dostaniemy się do najstarszej części miasta czyli zabytkowego Ostrowa Tumskiego. W tym miejscu zatrzymamy się przy zachwycającej gotyckiej Katedrze św. Jana Chrzciciela. Dalej pojedziemy w stronę Muzeum Narodowego i rotundy Panoramy Racławickiej. 
            <button class="book-btn-describr-block book-form-show-btn btn btn-primary">Rezerwacja</button>
          </div>
        </article>
        <article data-describe="2" class="short-describe">
          <span class="close-btn-cross close-describes-btn"></span>
          <div class="description-text-wrapper">
            <h1>Wycieczka #2</h1>
            <span>Stare miasto, Ostrów Tumski, Kompleks Hali Stulecia</span>
            <span>Czas trwania: 1 h 40 min</span>
            Na dłuższej wycieczce oprócz atrakcji znajdującej się na trasie pierwszej zobaczymy dodatkowo kompleks Hali Stulecia. Obiekt znajduje się na światowej liście zabytków UNESCO. W sezonie letnim w bezpośredniej okolicy co godzinę organizowane są pokazy fontanny multimedialnej otoczonej przez porośniętą zielenią pergolę.
            W drodze powrotnej pokażemy budynki Uniwersytetu Medycznego i Politechniki wraz z kolejką gondolową - Polinką. Przejeżdżając nad rzeką Odrą przez okazały most Grunwaldzki będziemy mogli jeszcze raz podziwiać panoramę Ostrowa Tumskiego.
            <button class="book-btn-describr-block book-form-show-btn btn btn-primary">Rezerwacja</button>
          </div>
        </article>
        <article data-describe="3" class="short-describe">
          <span class="close-btn-cross close-describes-btn"></span>
          <div class="description-text-wrapper">
            <h1>Wycieczka #3</h1>
            <span>Stare Miasto, Ostrów Tumski, Kompleks Hali Stulecia, Opera, Dzielnica Czterech Wyznań</span>
            <span>Czas trwania: 3 h</span>
            Na najdłuższej trasie wracając z Hali Stulecia przejedziemy przez most Grunwaldzki i będziemy kierować się wzdłuż promenady Staromiejskiej do Dworca Głównego i Dzielnicy Czterech Wyznań, gdzie zrobimy przerwę przy Synagodze pod Białym Bocianem. Podczas tej wycieczki mamy więcej czasu na dłuższe i dokładniejsze zwiedzanie.
            <button class="book-btn-describr-block book-form-show-btn btn btn-primary">Rezerwacja</button>
          </div>
        </article>
        <article data-describe="4" class="short-describe">
          <span class="close-btn-cross close-describes-btn"></span>
          <div class="description-text-wrapper">
            <h1>Wycieczka #4</h1>
            <span>Zabytkowy Wrocław Nocą, Mosty i 9 Fontann</span>
            <span>Czas trwania: 2 h</span>
            Podczas tej wycieczki zobaczymy najładniej podświetlone zabytki we Wrocławiu. Postaramy się odnaleźć latarnika, który wraz z zachodzącym słońcem odpala 102 gazowe latarnie oświetlające Ostrów Tumski. Dodatkową atrakcją oferowaną w ramach tej trasy jest udział
            w specjalnym pokazie fontanny multimedialnej. Wspaniałe widowisko wykorzystujące wodę, muzykę i światło to jedna z największych atrakcji turystycznych miasta. Dla Państwa wygody nocne zwiedzanie możemy zakończyć pod hotelem lub wybraną restauracją. 
            <button class="book-btn-describr-block book-form-show-btn btn btn-primary">Rezerwacja</button>
          </div>
        </article>
      </div>
      <div class="map-wrapper">
        <div id="map"></div>
      </div>
      <div class="form-book-wrapper">
        <div class="form-book-container">
          <span class="close-btn-cross" id="form-close-btn"></span>
          <?php include_once 'contact_form_1.html'?>  
        </div>
      </div>
    </div>
  </section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBL-8Gq7xjIFNjbWF6c_osmmvkDpUR7CIg"></script>
<script>
	var $urlRelative = '../../';
</script>
<script>
    var $arrTours = [
            'Stare miasto, Ostrów Tumski, 1h', 
            'Stare miasto, Ostrów Tumski, Kompleks Hali Stulecia, 1h 40min', 
            'Stare miasto, Ostrów Tumski, Kompleks Hali Stulecia, Dworzec, Opera, Dzielnica czterech świątyń, 3h',
            'Zabytkowy Wrocław Nocą, Mosty i 9 Fontann, 2h'];
    var $saltSquare = 'Plac Solny';
</script>
<script src="../../build/scripts.tours.bundle.js"></script>
</body>
</html>