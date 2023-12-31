<!DOCTYPE html> <!-- HTML5 -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">

  <title>FORM | TORMENTA AZUL TRAVEL</title>

  <!-- Favicon code goes here -->

  <link rel="shortcut icon" href="../../favicon/logo.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Google analytics -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176168695-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-176168695-1');
  </script>

  <!-- Seo -->

  <meta name="yandex-verification" content="4ad1d8e4435dc937">
  <meta name="description"
        content="Tormenta Azul Travel es una agencia de turismo online con oficina central en la Isla de Phuket, Tailandia.">
  <meta name="keywords"
        content="Turismo, Excursiones, Islas Similan, Islas Phi Phi, Saint-Petersburg, Russia, Minsk, Belarus, Phuket, Thailand, Lima, Peru. Madrid, Espana, Latinoamerica">

  <!-- Css style goes here -->

  <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper-formulary">
  <div class="line-one">
    <div class="insta-logo">
      <a href="../book/"><img src="../logo/logotext.png" alt="Tormenta Azul Travel"></a>
    </div>
  </div>

  <div class="formulary">
    <br><br>
    <form id="form" action="#" method="POST">

      <div class="row">
        <div class="col-25">
          <label>ВЫБЕРИТЕ ЖЕЛАЕМУЮ ДАТУ</label>
        </div>
        <div class="col-75">
          <div class="calendar-container">
            <header class="calendar-header">
              <p class="calendar-current-date"></p>
              <div class="calendar-navigation">
                <span id="calendar-prev"></span>
                <span id="calendar-next"></span>
              </div>
            </header>

            <div class="calendar-body">
              <ul class="calendar-weekdays">
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
              </ul>
              <ul class="calendar-dates"></ul>
            </div>
          </div>
        </div>
      </div>
      <br><br>

      <div class="row">
        <div class="col-25">
          <label>КОЛИЧЕСТВО ЧЕЛОВЕК</label>
        </div>
        <div class="col-75">
          <div class="people"></div>
        </div>
      </div>
      <br><br>

      <div class="row">
        <div class="col-25">
          <label>LUGAR DE ESTADIA</label>
        </div>
        <div class="col-25">
          <label for="hotel">Hotel</label>
        </div>
        <div class="col-75">
          <input class="_req" type="text" id="hotel" name="hotel" placeholder="Nombre del hotel.">
        </div>
        <div class="col-25">
          <label for="room">Número de habitación</label>
        </div>
        <div class="col-75">
          <input class="" type="text" id="room" name="room" placeholder="Número de habitación.">
        </div>
      </div>
      <br><br>

      <div class="row">
        <div class="col-25">
          <label>CONTACTO</label>
        </div>
        <div class="col-25">
          <label for="names">Nombres y apellidos</label>
        </div>
        <div class="col-75">
          <input class="" type="text" id="names" name="names" placeholder="Nombres y apellidos.">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="country">País de procedencia</label>
        </div>
        <div class="col-75">
          <input class="" type="text" id="country" name="country" placeholder="País de procedencia.">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="phone">Número de teléfono / WhatsApp</label>
        </div>
        <div class="col-75">
          <input class="" type="text" id="phone" name="phone" placeholder="WhatsApp.">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="email">E-mail</label>
        </div>
        <div class="col-75">
          <input class="_email" type="text" id="email" name="email" placeholder="E-mail.">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="subject">Mensaje</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="subject" placeholder="Mensaje" style="height:200px"></textarea>
        </div>
      </div>
      <br><br>

      <div class="row payment">
        <div>
          <label>ОПЛАТА</label>
        </div>
        <div class="payment__price">
          <span>Общая сумма к оплате</span>
          <span class="payment__total-price">бат</span>
        </div>
        <br><br>

        <fieldset>
          <div>
            <input class="" type="radio" id="courier" name="courier" value="courier">
            <label for="courier">Наличные курьеру</label>
            <div>Оплата наличными батами нашему русскому курьеру, который подъедет к вам в отель для оформления экскурсии</div>
          </div>

          <hr>

          <div>
            <input class="" type="radio" id="bank-card" name="bank-card" value="bank-card">
            <label for="bank-card">Полная оплата банковской картой</label>
          </div>
        </fieldset>
        <br><br>

        <div class="payment__agreement">
          <input class="" type="checkbox" id="agreement" name="agreement" value="agreement" checked>
          <label for="agreement">
            Нажимая кнопку «Забронировать», Вы подтверждаете свое согласие с условиями отмены экскурсии и условиями конфиденциальности
          </label>
        </div>
      </div>
      <br><br>

      <input type="submit" name="submit" value="Забронировать экскурсию">
    </form>
  </div>
</div>

<script>
  let date = new Date();
  let year = date.getFullYear();
  let month = date.getMonth();
  let days = document.getElementsByClassName('calendar-dates')[0];
  const currDate = document.getElementsByClassName('calendar-current-date')[0];
  const prenexIcons = [...document.getElementsByClassName('calendar-navigation')[0].children];
  const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

  function manipulate() {
    let dayOne = new Date(year, month, 1).getDay();
    let lastDate = new Date(year, month + 1, 0).getDate();
    let dayEnd = new Date(year, month, lastDate).getDay();
    let monthLastDate = new Date(year, month, 0).getDate();
    let lit = '';

    for (let i = dayOne; i > 0; i--) {
      let isInactive = i < date.getDate() && month === new Date().getMonth() && year === new Date().getFullYear() ? "strike" : "";
      lit += `<li class="inactive previous ${isInactive}">${monthLastDate - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDate; i++) {
      let isToday = i === date.getDate() && month === new Date().getMonth() && year === new Date().getFullYear() ? "today" : "";
      let isInactive = i < date.getDate() && month === new Date().getMonth() && year === new Date().getFullYear() ? "strike" : "";
      lit += `<li class="${isToday} ${isInactive}">${i}</li>`;
    }

    for (let i = dayEnd; i < 6; i++) {
      lit += `<li class="inactive next">${i - dayEnd + 1}</li>`
    }

    currDate.innerText = `${months[month]} ${year}`;
    days.innerHTML = lit;
  }

  manipulate();

  function checkIconIsInactive() {
    if (month <= new Date().getMonth() && year === new Date().getFullYear()) {
      prenexIcons[0].classList.add('calendar-prev--inactive');
    } else {
      prenexIcons[0].classList.remove('calendar-prev--inactive');
    }
  }

  checkIconIsInactive();

  prenexIcons.forEach(icon => {
    icon.addEventListener('click', () => {
      month = icon.id === 'calendar-prev' ? month - 1 : month + 1;

      if (month < 0 || month > 11) {
        date = new Date(year, month, new Date().getDate());
        year = date.getFullYear();
        month = date.getMonth();
      } else {
        date = new Date();
      }

      checkIconIsInactive();

      manipulate();

      setTimeout(() => {
        days = document.getElementsByClassName('calendar-dates')[0];

        dayClick();
      }, 1000);
    });
  });

  function dayClick() {
    for (const day of [...days.children]) {
      day.addEventListener('click', event => {
        [...days.children].forEach(day => day.classList.remove('active'));

        let monthName = '';
        let yearName = year;

        if (event.target.classList.contains('previous')) {
          if (month === 0) {
            monthName = months[month + 11];
            yearName = year - 1;
          } else {
            monthName = months[month - 1];
          }
        } else if (event.target.classList.contains('next')) {
          if (month === 11) {
            monthName = months[month - 11];
            yearName = year + 1;
          } else {
            monthName = months[month + 1];
          }
        } else {
          monthName = months[month];
        }

        if (!event.target.classList.contains('strike')) {
          day.classList.add('active');
          console.log(event.target.innerHTML, monthName, yearName);
        }
      });
    }
  }

  dayClick();
</script>
<script>
  let people = document.getElementsByClassName('people')[0];
  let peopleNumber = document.getElementsByClassName('people__number');
  let peoplePrice = document.getElementsByClassName('people__price');
  let buttonMinus = document.getElementsByClassName('button--minus');
  let totalPrice = document.getElementsByClassName('payment__total-price')[0];

  const peopleArray = [
    {
      name: 'Взрослые',
      number: 0,
      price: 2200,
      priceText: '2200 бат',
      totalPrice: 0,
    },
    {
      name: 'Дети 4 - 11 лет',
      number: 0,
      price: 2000,
      priceText: '2000 бат',
      totalPrice: 0,
    },
    {
      name: 'Дети до 4 лет',
      number: 0,
      price: 0,
      priceText: 'бесплатно',
      totalPrice: 0,
    },
    {
      name: 'Итого',
      number: 0,
      price: 0,
      totalPrice: 0,
    },
  ];

  let row = '';

  for (let i = 0; i < peopleArray.length - 1; i++) {
    row += `<div class="people__row"><span class="people__name">${peopleArray[i].name}</span>
            <span class="people__buttons">
              <span class="button--minus" onclick="peopleMinus(${i})">-</span>
                <span class="people__number">${peopleArray[i].number}</span>
              <span class="button--plus" onclick="peoplePlus(${i})">+</span>
            </span>
            <span class="people__price">${peopleArray[i].priceText}</span></div>`;

    setTimeout(() => checkButton(i), 0);
  }

  row += `<div class="people__row people__row--total"><span class="people__name">${peopleArray[peopleArray.length - 1].name}</span>
            <span class="people__buttons">
              <span class="people__number people__number--total">${peopleArray[peopleArray.length - 1].number} человек</span>
            </span>
          <span class="people__price">${peopleArray[peopleArray.length - 1].price} бат</span></div>`;

  people.innerHTML = row;

  function checkButton(i) {
    if (!peopleArray[i].number) {
      buttonMinus[i].classList.add('disabled');
    } else {
      buttonMinus[i].classList.remove('disabled');
    }
  }

  function sum() {
    peopleArray.map((a, i) => {

      if (i < peopleArray.length - 1) {
          a.totalPrice = a.number * a.price;
        }
    });

    const sumPrice = peopleArray.reduce((p, c) => p + c.totalPrice, 0);

    peopleNumber[peopleArray.length - 1].innerText = `${peopleArray.reduce((p, c) => p + c.number, 0)} человек`;
    peoplePrice[peopleArray.length - 1].innerText = `${sumPrice} бат`;

    totalPrice.innerText = `${sumPrice || ''} бат`;
  }

  function peopleMinus(i) {
    peopleNumber[i].innerText = --peopleArray[i].number;

    checkButton(i);
    sum();
  }

  function peoplePlus(i) {
    peopleNumber[i].innerText = ++peopleArray[i].number;

    checkButton(i);
    sum();
  }
</script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form');

    form.addEventListener('submit', send);

    async function send(e) {
      e.preventDefault();

      let error = formValidate(form);

      let formData = new FormData(form);

      if (!error) {
        let response = await fetch('./sendmail.php', {
          method: 'POST',
          body: formData
        });

        if (response.ok) {
          let result = await response.json();
          alert(result.message);
          form.reset();
        } else {
          alert('Ошибка');
        }
      } else {
        console.log(error);
        alert('Заполните все обязательные поля');
      }

      function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll("._req");

        for (let index = 0; index < formReq.length; index++) {
          const input = formReq[index];
          console.log(input.classList);
          // formRemoveError(index);

          if (input.classList.contains('_email')) {
            if (emailTest(input)) {
              formAddError(input);
              error++;
            }
          } else if (input.getAttribute('type') === 'checkbox' && input.checked === false) {
            formAddError(input);
            error++;
          } else {
            if (input.value === '') {
              formAddError(input);
              error++;
            }
          }
        }
      }

      function formAddError(input) {
        // input.parentElement.classList.add('_error');
        input.classList.add('_error');
      }

      function formRemoveError(input) {
        // input.parentElement.classList.remove('_error');
        input.classList.remove('_error');
      }

      function emailTest(input) {
        return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
      }
    }
  });
</script>
</body>
</html>
