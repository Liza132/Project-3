<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>EQUAL-IST</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
      <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
      <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
   </head>
   <body>
      <header id="up">
         <!--хэдер-->
         <div class="container">
            <div class="logo">
                <a href="https://equal-ist.eu"><img src="https://equal-ist.eu/eq-uploads/2016/11/EQUALIST_logo2.png" alt="Логотип" style="height:90px; width:221px;" >
            </div>
            <nav class="menu" id="go">
               <!--меню-->
               <ul>
                  <li><a href="#golov">Головна</a></li>
                  <li><a href="#event">Події</a></li>
                  <li><a href="#partner">Партнери</a></li>
                  <li><a href="#chek">Реєстрація</a></li>
               </ul>
            </nav>
         <div class="entrance">
            <?php if(!$_SESSION['user_id']){ ?> 
              <form action="/login.php" method="post">
                  <input class="entra-in" type="email" name="email" placeholder="Email...">
                  <br>
                  <input class="entra-in" type="password" name="password"  placeholder="Пароль...">
                  <br>
                  <input class="entra-bott" type="submit" class="find" value="Увійти">
               </form>
               <?php if($_SESSION['message']) { ?>
                <p><?php 
                echo $_SESSION['message']; 
                session_unset('message');
                ?></p>
               <?php } ?>
               <?php } else { ?>
                <form action="/logout.php" method="post">
                  <input class="entra-bott" type="submit" class="find" value="Вийти">
               </form>
             <?php } ?>
         </div>
         </div>
      </header>
      <article>
      <div class="container">
      <div class="info">
         <p class="nametext" id="golov">Ласкаво просимо <?= $_SESSION['user_name'] ?>!</p>
         
            <div class="img" ><img class="img-info" src="img/MAIN BLOCK.jpg"  alt="Головна"></div>
            <p class="text-nametwo">Проект EQUAL-IST спрямований на сприяння постійним інституційним змінам шляхом розробки та впровадження ґендерної рівності.</p>
            <p class="text-info"> Проект спирається на керівні принципи політики Європейського Союзу, а також теоретичні та емпіричні висновки щодо ґендерної рівності в науково-дослідних організаціях, спрямовані на факультети та відділи інформаційно-комунікаційних технологій / інформаційних наук та технологій, де гендерний дисбаланс особливо гостро.</p>
            <p class="text-info"> Крім того, проект EQUAL-IST сприятиме спільному підходу до формування політики ґендерної рівності, забезпечуючи в той же час активний діалог з та залучення осіб, які приймають рішення в РПР-учасників. Створюючи спеціальну онлайн-платформу для спільної роботи, проект буде підтримувати як первинну внутрішню оцінку RPOs, так і процес проектування GEP. Навчальні посібники, методичні рекомендації та методики, розроблені під час проекту EQUAL-IST, а також отримані уроки, будуть розповсюджені в Європі та інших країнах СНД.</p>
      </div>
      <hr class="line">
      <p class="nametext" id="event">Події</p>
         <div class="owl-carousel owl-theme box-event">
            <div class="item">
              <img class="img-event" src="img/EVENT1.jpg" alt="Події">
              <a class="a-name"href="https://equal-ist.eu/women-in-it-paradox-or-reality/"><p class="name-event">Жінки в ІТ: Парадокс чи реальність?</p></a>
              <p class="text-event">Ця подія ознаменувала початок нового проекту «Girls2IT», який є спільним проектом Харківського ІТ-кластера та KNUE, присвяченого лідерству та можливостям кар'єрного росту для жінок у сфері ІТ-бізнесу.</p>
            </div>
            <div class="item">
              <img class="img-event" src="img/EVENT2.jpg" alt="Події">
              <a class="a-name" href="https://equal-ist.eu/the-equal-ist-project-at-the-international-conference-alta-2017-in-kaunas-lithuania/"><p class="name-event">Проект EQUAL-IST на міжнародній конференції “ALTA 2017” у Каунасі, Литва</p></a>
              <p class="text-event">Конференція має на меті бути можливістю зібрати європейських освітніх організацій, від політиків до практиків до дослідників.</p>
            </div>
            <div class="item">
              <img class="img-event" src="img/EVENT3.jpg" alt="Події">
              <a class="a-name" href="https://equal-ist.eu/open-lecture-of-prof-drude-dahlerup-at-s-kuznets-khnue/"><p class="name-event">Відкрита лекція проф. Друде Далепура при ХНЕУ ім. С. Кузнеця. </p></a>
              <p class="text-event">Темою лекції було: «Посилення політичного представництва жінок у Європі: нові дослідження цілей та інструментів», яке було проведено в рамках реалізації Плану рівності чоловіків та жінок з ХНУЕ.</p>
            </div>
            <div class="item">
              <img class="img-event" src="img/EVENT4.jpg" alt="Події">
              <a class="a-name" href="https://equal-ist.eu/mini-lecture-on-gender-balance-in-the-education-for-schoolchildren-at-khnue/"><p class="name-event">Міні-лекція на тему «Гендерний баланс в освіті» для школярів ХНЕУ</p></a>
              <p class="text-event">Захід було організовано для школярів і зосереджено на виборі майбутньої професії. Команда ХНЕУ проекту EQUAL-IST представила основу мети та завдань проекту, а також міні-лекцію на тему «Гендерний баланс в освіті».</p>
            </div>
            <div class="item">
              <img class="img-event" src="img/EVENT5.jpg" alt="Події">
              <a class="a-name" href="https://equal-ist.eu/kuznets-khnue-workshop/"><p class="name-event">С. КУЗНЕЦЬ ХНЕУ ПРОВЕДЕНО СЕМІНАРИ ПРО ГЕНДЕРНЕ РІВНІСТЬ В РІВНОМУ ПРОЕКТІ</p></a>
              <p class="text-event">Семінари проводилися для різних цільових груп. Учасники обговорили гендерні стереотипи, актуальні питання ґендерної рівності та запропонували план дій щодо досягнення рівних прав та можливостей жінок і чоловіків.</p>
            </div>
            <div class="item">
              <img class="img-event" src="img/EVENT6.png" alt="Події">
              <a class="a-name" href="https://equal-ist.eu/presentation-of-equal-ist-at-the-1st-international-gender-forum-global-gender-forum__trashed/"><p class="name-event">Презентація EQUAL-IST на 1-му Міжнародному ґендерному форумі «Глобальний ґендерний форум» </p></a>
              <p class="text-event">Метою Форуму було створення постійної платформи для комунікації з гендерних питань та підтримки ділових та соціальних ініціатив, а також розвитку лідерських якостей серед українських жінок.</p>
            </div>
         </div>
      <hr class="line">
      <p class="nametext" id="partner">Партнери</p>
      <div class="gallery-flag">
                     <div class="box-flag">
                     <img class="img-flag" src="img/greece.png" alt="Флаг1">
                     <p class="text-flag"><b>ViLabs,</b> Thessaloniki, Greece (Coordinator)</p>
                     <p class="text-flag-href">Веб-сайт: <a class="part-href" href="https://vilabs.eu">vilabs.eu</a></p>
                     </div>
                     <div class="box-flag">
                     <img class="img-flag" src="img/italy.png" alt="Флаг2">
                     <p class="text-flag"><b>Ca’ Foscari, University of Venice,</b> Department of Computer Sciences, Statistic and Environmentla Studies (DAIS), Venice, Italy</p>
                     <p class="text-flag-href">Веб-сайт: <a class="part-href" href="http://www.unive.it">www.unive.it</a></p>
                     </div>
                     <div class="box-flag">
                     <img class="img-flag" src="img/germany.png" alt="Флаг3">
                     <p class="text-flag"><b>University of Muenster,</b> School of Business and Economics, Muenster, Germany</p>
                     <p class="text-flag-href">Веб-сайт: <a class="part-href" href="https://www.wiwi.uni-muenster.de/fakultaet/en">www.wiwi.uni-muenster.de/fakultaet/en</a></p>
                     </div>
                     <div class="box-flag">
                     <img class="img-flag-l" src="img/liechtenstein.png" height="256" width="256"  alt="Флаг4">
                     <p class="text-flag"><b>University of Liechtenstein,</b> Institute of Information Systems, Liechtenstein</p>
                     <p class="text-flag-href">Веб-сайт: <a class="part-href" href="https://www.uni.li/de">www.uni.li</a></p>
                     </div>
                     <div class="box-flag">
                     <img class="img-flag" src="img/finland.png" alt="Флаг5">
                     <p class="text-flag"><b>University of Turku,</b> Institute of Information Systems Science, Turku, Finland</p>
                     <p class="text-flag-href">Веб-сайт: <a class="part-href" href="https://www.uni.li/de">www.uni.li</a></p>
                     </div>
                     <div class="box-flag">
                     <img class="img-flag" src="img/lithuania .png" alt="Флаг6">
                     <p class="text-flag"><b>Kaunas University of Technology,</b> IFaculty of Informatics, Kaunas, Lithuania</p>
                     <p class="text-flag-href">Веб-сайт: <a class="part-href" href="http://ktu.edu/en">www.ktu.edu</a></p>
                     </div>
                     <div class="box-flag">
                     <img class="img-flag" src="img/italy.png" alt="Флаг7">
                     <p class="text-flag"><b>University of Modena and Reggio Emilia,</b> Department of Engineering ‘Enzo Ferrari’, Modena, Italy</p>
                     <p class="text-flag-href">Веб-сайт: <a class="part-href" href="http://www.unimore.it/">www.unimore.it</a></p>
                     </div>
                     <div class="box-flag">
                     <img class="img-flag" src="img/portugal.png" alt="Флаг8">
                     <p class="text-flag"><b>University of Minho,</b> Information Systems Department, Minho, Portugal</p>
                     <p class="text-flag-href">Веб-сайт: <a class="part-href" href="https://www.uni.li/de">www.uni.li</a></p>
                     </div>
                     <div class="box-flag">
                     <img class="img-flag" src="img/ukraine.png" alt="Флаг9">
                     <p class="text-flag"><b>Simon Kuznets Kharkiv National University of Economics,</b> Faculty of Economic Informatics, Kharkiv, Ukraine</p>
                     <p class="text-flag-href">Веб-сайт: <a class="part-href" href="http://www.hneu.edu.ua/">www.hneu.edu.ua</a></p>
                     </div>
                 
               </div>
               <?php if(!$_SESSION['user_id']){ ?> 
               <hr class="line">
               <p class="nametext" id="chek">Реєстрація</p>
               <div class="box-chek-in">
                  <form id="register-form" action="/register.php" method="post">
                  <p class="text-chek-in">Ім'я</p>
                  <input class="chek-in" type="text" size="40" name="name"  placeholder="Ім'я...">
                  <p class="text-chek-in">Email</p>
                  <input class="chek-in" type="email" size="40" name="email" placeholder="Email...">
                  <p class="text-chek-in">Пароль</p>
                  <input class="chek-in" type="password" size="40" name="password"  placeholder="Пароль...">
                  <br>
                  <input class="chek-bott" type="submit"  class="find" value="Зареєструватися">
                  <p id="register-rezult-form"></p>
               </form>
               </div>
             <?php } ?>
               <hr class="line">
               <p class="nametext">Питання та пропозиції</p>
               <form id='comment-form' class="coment-text" action="/reg.php" method="post">
               <p><textarea class="coment" rows="13" cols="55" name="message"></textarea></p>
               <p><input class="coment-bottom" type="submit" value="Отправить"></p>
               <p id="rezult-form"></p>
            </form>
      </div>
      </article>
            <div class="clear">  </div>
      <footer class=" clear">
         <div class="container">
            <div class="box-socset">
            <a href="https://www.facebook.com/EQUALISTproject/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/equalistproject>"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/groups/EQUALIST-8559876/about"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.youtube.com/channel/UCQDZDbiJdhSLMSZvN74huaA"><i class="fab fa-youtube"></i></a>
            <a href="https://equal-ist.eu/partners/"><i class="fas fa-users"></i></a>
            </div>
            <div class="logo-hraf">
               <a href="https://equal-ist.eu"><img src="https://equal-ist.eu/eq-uploads/2016/11/EQUALIST_logo2.png" alt="Логотип" style="height:90px; width:221px;" ></a>
               <p class="text-logo-hraf">Переходьте на основний сайт!</p>
            </div>
         </div>
      </footer>
      <div class="arrow-up">
     <a href="#up" > <i class="fas fa-chevron-up"></i></a>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="owlcarousel/owl.carousel.min.js"></script>
      <script src="js/script.js"></script>
      <script> 
      $(document).ready(function() {
      $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          nav:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:3
              }
          }
      })
      })
      </script>

      <script>
         $(document).ready(function(){
            $(".arrow-up").on("click","a", goUp);
            $(".menu").on("click","a", goUp);
        });

         function goUp (event) {
            //отменяем стандартную обработку нажатия по ссылке
                event.preventDefault();
         
                //забираем идентификатор бока с атрибута href
                var id  = $(this).attr('href'),
         
                //узнаем высоту от начала страницы до блока на который ссылается якорь
                    top = $(id).offset().top;
                 
                //анимируем переход на расстояние - top за 1500 мс
                $('body,html').animate({scrollTop: top}, 1500);
         }

      </script>

</body>
</html>