<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Test</title>
</head>
<body>

    <header class="header">
        <div class="container">
            <div class="header__block">
                <a href="./index.php"  class="header__logo">
                    <img src="img/header/logo.png" alt="">
                </a>
                <div class="header__phones">
                    <a href="tel:8-800-100-5005" class="header__phone">8-800-100-5005</a>
                    <a href="tel:+7 (3452) 522-000" class="header__phone">+7 (3452) 522-000</a>
                </div>
            </div>
            <div class="header__body">
                
                <div class="header__burger">
                    <span></span>
                </div>
                <nav class="header__menu">
                    <ul class="header__list">
                        <li><a href="#"   class="header__link">Кредитные карты</a></li>
                        <li class=""><a href="#"   class="header__link active">Вклады</a></li>
                        <li><a href="#"    class="header__link">Дебетовая карта</a></li>
                        <li><a href="#"    class="header__link">Страхование</a></li>
                        <li><a href="#"    class="header__link">Друзья</a></li>
                        <li class=""><a href="#"    class="header__link header__right">Интернет-банк</a></li>
                    </ul>  
                </nav>
                
                
            </div>
        </div>
    </header>
    <main>
        <section class="bread_crumbs">
            <div class="container">
                <a href="#" class="bread_crumbs-link bread_crumbs-link_activate">Главная</a>
                <span class="bread_crumbs-span">-</span>
                <a href="#" class="bread_crumbs-link bread_crumbs-link_activate">Вклады</a>
                <span class="bread_crumbs-span">-</span>
                <a href="#" class="bread_crumbs-link">Калькулятор</a>
            </div>
        </section>

        <section class="calculator">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="calculator-block">
                            <h3 class="calculator-title">Калькулятор</h3>
                            <form action="calc.php"  class="calculator-form" method="POST" id="form">
                                <div class="calculator-form_block">
                                    <label class="label" for="date">Дата оформления вклада</label>
                                    <div class="calculator-form_input_block">
                                        <input type="text" placeholder="дд.мм.гггг" id="date"  name="date" required class="calculator-form_input">
                                    </div>
                                </div>
                                <div class="calculator-form_block">
                                    <label class="label" for="summ">Сумма вклада</label>
                                    <div class="calculator-form_input_block">
                                        <input type="number" min="1000" max="3000000" required value="10000" id="summ" name="user_summ" class="calculator-form_input">
                                    </div>
                                    <div class="slidecontainer">
                                        <input type="range" min="1000" max="3000000" list="tickmarks" value="10000"  class="slider" id="myRangeSumm">
                                        <div class="slidecontainer_block">
                                            <p class="slidecontainer_min">1 тыс. руб.</p>
                                            <p class="slidecontainer_max">3 000 000</p>
                                        </div>
                                      </div>
                                </div>
                                <div class="calculator-form_block">
                                    <label class="label" for="term">Срок вклада</label>
                                    <div class="calculator-form_block">
                                        <select class="calculator-form_input" required name="term" id="term">
                                            <option value="1">1 год</option>
                                            <option value="2">2 года</option>
                                            <option value="3">3 года</option>
                                            <option value="4">4 года</option>
                                            <option value="5">5 лет</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="calculator-form_block">
                                    <p>Пополнение вклада</p>
                                    <div class="calculator-form_blocked">
                                        <input type="radio" checked id="no" name="contribution" class="calculator-form_input">
                                        <label for="no">Нет</label>
                                        <input type="radio" id="yes"  name="contribution" class="calculator-form_input">
                                        <label for="yes">Да</label>
                                    </div>
                                </div>
                                <div class="calculator-form_block">
                                    <label class="label" for="summСontribution">Сумма пополнения вклада</label>
                                    <div class="calculator-form_input_block">
                                        <input type="number" min="1000" max="3000000" required value="10000" id="summСontribution" name="summСontribution" class="calculator-form_input">
                                    </div>
                                    <div class="slidecontainer">
                                        <input type="range" min="1000" max="3000000" list="tickmarks" value="10000"  class="slider" id="myRangeSummСontribution">
                                        <div class="slidecontainer_block">
                                            <p class="slidecontainer_min">1 тыс. руб.</p>
                                            <p class="slidecontainer_max">3 000 000</p>
                                        </div>
                                      
                                        
                                      </div>
                                </div>
                                <div class="calculator-form_block-result">
                                    <button class="calculator-form_button">Рассчитать</button>
                                    <div class="calculator-form_block-result_blocking">
                                        <h3 class="calculator-form_block-result_title">Резуьтат:</h3>
                                    <p class="result" id="result">10 250</p>
                                    <span>руб</span>
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-body">
                <div class="footer-linked">
                    <a href="#" class="footer-link">Кредитные карты</a>
                    <a href="#" class="footer-link">Вклады </a>
                    <a href="#" class="footer-link">Дебетовая карта </a>
                    <a href="#" class="footer-link">Страхование </a>
                    <a href="#" class="footer-link">Друзья </a>
                    <a href="#" class="footer-link">Интернет-банк</a>
                </div>
            </div>
        </div>
    </footer>


    <script src="./js/jquery-3.0.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="./js/script.js"></script>
    <script>
        $('form').submit(function(event) {
        event.preventDefault();
        $.ajax({
              type: "POST",
              url: "calc.php",
              contentType: 'json; charset=UTF-8',
              data: { <?= $summa ?>},
              success: function(response, statusText, status) {
                console.log('Запрос успешно отправился, получаем ответ', response);
                $('#result').html(response);
            },
              error: function(XHR) {
                console.log('Ошибка запроса', XHR);
            }
          });
    
    });
    </script>
    
</body>
</html>