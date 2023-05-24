<!DOCTYPE HTML>
<html lang="ru">
<head>
    <title>Мое резюме</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    <noscript>
        <link rel="stylesheet" href="{{ asset("css/noscript.css") }}"/>
    </noscript>
</head>
<body class="is-preload">

<!-- Page Wrapper -->
<div id="page-wrapper">

    {{ app()->version() }}

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Panel (Banner) -->
        <section class="panel banner right">
            <div class="content color0 span-3-75">
                <h1 class="major">Меня зовут Елизавета</h1>
                <p>Привет, это мой первый проект. Здесь я расскажу немного о себе и почему я захотела попробовать себя
                    в профессии программиста.</p>
            </div>
            <div class="image filtered span-1-75" data-position="25% 25%">
                <img src="{{asset('images/pic01.jpg')}}" alt=""/>
            </div>
        </section>

        <!-- Panel (Spotlight) -->
        <section class="panel spotlight medium center" id="first">
            <div class="content span-7">
                <h2 class="major">Образование</h2>
                <p>В школе меня привлекали точные науки, в особенности - химия. Я горела ею, она меня завлекала и
                    очаровывала. После школы я поступила в ИГУ на химика, отучилась и успешно получила диплом бакалавра.
                    Далее я продолжила получать образование и поступила в магистратуру на тот же факультет. </p>
            </div>
            <div class="image filtered tinted" data-position="top left">
                <img src="{{asset('images/pic02.jpg')}}" alt=""/>
            </div>
        </section>

        <!-- Panel (Spotlight) -->
        <section class="panel spotlight medium center">
            <div class="content color4-alt">
                <h2 class="major">Осмысление</h2>
                <p>В пеориод моего обучения на магистратуре мне поступали предложения о работе. Один раз я даже
                    попробовала поработать химиком,
                    но мне это не особо понравилось. Какие бы варианты я ни рассматривала, ни один из них меня не
                    привлекал.
                    Я даже была более уверена в себе как в учёном, чем работником в любой из этих компаний. Такие
                    перспективы меня не привлекали и
                    зимой 2022-2023 я поняла, что химия - это не мое.</p>
            </div>
        </section>

        <!-- Panel (Spotlight) -->
        <section class="panel spotlight center">
            <div class="content span-5">
                <h2 class="major">Озарение</h2>
                <p>Я долго думала и размышляла о своем будущем в химии, любая возможная перспектива меня не устраивала.
                    В особенноси - однообразность действий на работе и отсутствие возможностей выбора нестандартных
                    вариантов решения задач.
                    Получив знания широкого спектра, я буду просто сидеть за прибором и делать абсолютно одинаковую
                    работу изо дня в день.
                    Этого я боялась больше всего. Я хотела изучать каждый день новое, применять навыки на практике,
                    спорить и выбирать лучшие решения, а не единственные.
                    В процессе учебы я решила попробовать себя в IT сфере. Начала знакомиться издалека - что такое
                    интернет, какие есть направления в IT и чем вообще занимаются программисты и остальные. Особенно
                    меня
                    привлекла Web-разработка.
                    Я пробовала и фронтенд, и бэкенд. Бэкенд мне показался сложнее и интереснее и я решила выбрать его.
                    Мне очень понравилось и я решила навсегда попрощаться с химией. В марте я подала заявление на
                    отчисление и начала больше времени уделять программированию.</p>
            </div>
            <div class="image filtered tinted" data-position="top right">
                <img src="{{asset('images/pic03.jpg')}}" alt=""/>
            </div>
        </section>

        <!-- Panel (Spotlight) -->
        <section class="panel spotlight center">
            <div class="content color0 span-5">
                <h2 class="major">Новый путь</h2>
                <p>В начале было сложно понять фундамент и на чем основывается та или иная логика. Но, так как "терпение
                    и труд все перетрут",
                    с каждым изучением чего-то нового, в моей голове все по-тихоньку вставало на свои места. Конечно,
                    были моменты, когда
                    происходили диссонанс и несостыковки. Все решалось более
                    глубоким копанием.
                    Были и задачи, над которыми приходилось думать гораздо больше других, но после их успешного
                    выполнения, я чувствовала гордость за себя и хотела все больше и больше делать и учить. Это меня
                    вдохновляет и вызывет все больший интерес и желаение увидеть
                    что же там дальше!</p>
            </div>
            <div class="image filtered tinted" data-position="top right">
                <img src="{{asset('images/pic03.jpg')}}" alt=""/>
            </div>
        </section>

        <!-- Panel -->
        <section class="panel">
            <div class="intro color2">
                <h2 class="major">Что я изучила?</h2>
                <ul>
                    @foreach($skills as $skill)
                        <li>{{$skill->name}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="gallery">
                <div class="group span-3">
                    <a href="{{asset('images/gallery/photo/p5.jpg')}}" class="image filtered span-3"
                       data-position="bottom"><img src="{{asset('images/gallery/photo/p5.jpg')}}" alt=""/></a>
                    <a href="{{asset('images/gallery/photo/p2.jpg')}}" class="image filtered span-1-5"
                       data-position="center"><img src="{{asset('images/gallery/photo/p2.jpg')}}" alt=""/></a>
                    <a href="{{asset('images/gallery/photo/p3.jpg')}}" class="image filtered span-1-5"
                       data-position="bottom"><img src="{{asset('images/gallery/photo/p3.jpg')}}" alt=""/></a>
                </div>
                <a href="{{asset('images/gallery/photo/p1.jpg')}}" class="image filtered span-2-5"
                   data-position="top"><img
                        src="{{asset('images/gallery/photo/p1.jpg')}}" alt=""/></a>
            </div>
        </section>

        <!-- Panel -->
        <section class="panel color4-alt">
            <div class="intro color4">
                <h2 class="major">Обратная связь</h2>
                <p>Вы можете оставить здесь свою обратную связь <br> (или слова поддержки ❤) <br><br> Обязательно
                    прочитаю!</p>
            </div>
            <div class="inner columns divided">
                <div class="span-3-25">
                    <form method="post" action="{{ url('form') }}">
                        @csrf
                        <div class="fields">
                            <div class="field">
                                <label for="name">Имя</label>
                                <input type="text" name="name" id="name"/>
                            </div>
                            <div class="field">
                                <label for="message">Текст</label>
                                <textarea name="message" id="message" rows="4"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Отправить" class="button primary"/></li>
                        </ul>
                    </form>
                </div>
                <div class="span-1-5">
                    <ul class="contact-icons color1">
                        <li><a href="https://github.com/Elizaveta541309" target="_blank">Мой GitHub</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Copyright -->
        <div class="copyright">&copy; Untitled. Design: Elizabeth.</div>

    </div>

</div>

<!-- Scripts -->
<script src="{{ asset("js/jquery.min.js") }}"></script>
<script src="{{ asset("js/browser.min.js") }}"></script>
<script src="{{ asset("js/breakpoints.min.js") }}"></script>
<script src="{{ asset("js/main.js") }}"></script>

</body>
</html>
