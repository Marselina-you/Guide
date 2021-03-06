<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.min.css">

    <script src="js/app.min.js"></script>
   
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
    <div class="h1">
     Руководсво после  перерыва и  начало работы на новом компьютере</div>
    <h2 class="h2">Скачиваем Sublime Text3</h2>
    <h3 class="h3">Утанавливаем плагины</h3>
    <?php echo "HEL, мудачьё!!!!"; ?>
    <img src="images/dest/grimmy9.png">
    
    
    
    <div class="d-flex"><div class="number">1.</div> Для этого нужно открыть командную палитру - ctrl-shift-p</div>
    <div class="green d-flex"><div class="number">2.</div>Вводим Instal Package Control</div>
    <div class="green d-flex"><div class="number">3. </div>Вводим название плагина</div>
    <ul>
        <li><span class="number">1.</span>Emmet</li>
        <div class="green">Дописывает код. Пример: ul>li*5 нажимаешь tab и готов список</div>
        <li><span class="number">2.</span>LiveStyle</li>
        <div class="green">Оновление стилей: ты пишешь в Sublime Text3 стиль такой-то, в браузере автоматически происходит изменение, и наоборот: ты открываешь в браузере панель разработчика, меняешь там цвет и он меняется в Sublime Text3</div>

        Для этого: 1. Установи в Sublime Text3 в Package Control(см. выше)
        2. Установить в браузере GoogleChrome: сайт LiveStyle.io, в правом верхнем углу есть кружок, надо вкл его чтоб был зеленый. И надо открыть панель разработчика
        <li><span class="number">3.</span>HTML-css-js Prettify</li>
        <div class="green">Приводит в порядок код(пробелы, переносы и все такое)<div class="red">!!!Но при этом меняет код sass не так как надо, и sass выходит ошибочным, так что я отключила его на хер</div></div>
        <div class="green">Установить в , потом Preferens - Package Settings - html/css/js Prettify - plugin Options - User</div>
        <li><span class="number">4.</span>Live Reloud</li>
        <div class="green">Пишешь что-то в редакторе, сохраняешь, а в браузере происходят изменения без перезагрузки. Устанавливается по принципу LiveStyle, так же рядом с кружком LiveStyle появится его кружок. А рядом кнопка управления этими расширениями</div>
        <div class="red">!!!но после установки browser-sync и посадки на gulp как то теряет свою актуальность</div>
        <li><span class="number">5.</span>Color Highlight</li>
        <div class="green">Подсвечивает указанный цвет в его же цвет</div>
        <li><span class="number">6.</span>Color Picker</li>
        <div class="green">Жмешь ctrl-shift-c - всплывает палитра для выбора цветов</div>
        <li><span class="number">7.</span>Bracket Highlighter</li>
        <div class="green"></div>
        <li><span class="number">8.</span>Автосохранение текста при перещелке на соседний документ</li>
        <div class="green">Preferens - Settings - пишешь "save_on_focus_lost": true</div>
    </ul>
    <span class="number">По поводу настроек:</div>
    Пример:
    В последней версии по умолчантию курсор не мигает, что очень противно выглядит. Чтобы это исправить, заходим в файл настроек:
    Preference settings, откоются 2 файла. Левый - это изначальный, он не меняется, а справа - пользовательский.</br> В него дописываем необходимые наастройки, в моем случае это:
    <div class="comand">caret_style: "blink";</div>
    <h2>Скачиваем OpenServer</h2>
    <h2>Cкачиваем Nodejs.org</h2>
    <div class="green">Node.js - это программная платформа. Заходим на сайт Nodejs.org, скачиваем рекомендуемую версию. Устанавливаем(обычно на диск С в программные файлы). Заходим в свойства компьютера, дополнительные параметры сиситемы, переменные среды и смотрим в Path. Проверяем, прописался ли путь к папке с Node.js, если нет - прописываем сами.</div>
    <h2>Устанавливаем browser-sync</h2>
    <div class="green d-flex"><div class="number">1.</div>Открываем PowerShell(администратор). Устанавливаем npm(пакетный менеджер в экосистеме Node.js с помощью команды
        <div class="comand">npm i</div>
    </div>
    <div class="green d-flex"><div class="number">2. </div>Устанавливаем browser-sync<div class="comand">npm i -g browser-sync</div>-g - значит глобально
    </div>
    <div class="green d-flex"><div class="number">3.</div> Открываем PowerShell из папки с проектом и вводим <div class="comand"> browser-sync start --server --files "*.html"</div></div>
    <div class="green d-flex">
        <div class="number">4.</div>
        <div class="green"> Если он пишет красным что типа не может и все такое, то нужно изменить политику выполнения скриптов на неограниченную с помощью команды</div>
            <div class="comand">Set-ExecutionPolicy UnRestricted</div>
        (у меня так было на новом компе с виндой10, на старом с семеркой все было ок.Просто PowerShell любит безопасность, но я очень долго мудилась из-за этого по незнанке)</div>
    <div class="red">!!!Этот PowerShell не показывает адреса локалхостов когда начинаешь работать gulp,</div>
    <img src="images/dest/1.png"><div> так что открываем все из обычной cmd</div><img src="images/dest/2.png"></div>
    Вот ты открыл и пытаешься ввести этот адрес на телефоне, чтобы посмотреть каак сайт выглядит на мобиле. Но нихрена не получается. Что делаать??
    заходим в параметры(W+I), сеть и интернет,центр управления сетями и общим доступом, изменить дополнительные парааметры общего доступа, поставить гаалку в включить
    сетевое обнаружение.
    Отключаем авааст минут на 10(правой кнопкой по значку, упраавление экранаами аваст, отключить на 10 мин).Заходим в панель управления(в поиске вводим control).Включаем
    просмотр мелкие значки, находим Брандмауэр защитника Windows, спарава: разрешения взаимодействия с приложением или компонентом в брангдмауэре защитникка windows
    Жмем на разрешить другое приложение, обзор, находим Node.js, добавляем его и проставляенм галочки, сохраняем изменения
    Еще я вот что сделала, но-по-моему это ни кчем:
    В Командная строка npm install -g dev-ip, потом dev-ip и из проекта npm install dev-ip
Установите его глобально для использования в командной строке (используйте sudoтолько при необходимости).:

npm install -g dev-ip

тогда беги:

dev-ip

"http://192.168.1.46"

В вашем проекте
npm install dev-ip 
   <div><img src="images/dest/pr.jpg"></div>
</div>
    
</body>

</html>