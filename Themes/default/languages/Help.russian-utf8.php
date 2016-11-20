<?php
// Version: 2.1 Beta 3; Help

global $helptxt;

$txt['close_window'] = 'Закрыть окно';

$helptxt['manage_boards'] = '
    <strong>Редактирование разделов</strong><br />
    В этом меню можно создавать/перемещать/удалять категории и разделы, содержащиеся в них.
	К примеру, если у вас большой сайт, предоставляющий информацию о &quot;Спорте&quot;, &quot;Машинах&quot; и &quot;Музыке&quot;,
	то почти наверняка <em>Категориями</em> верхнего уровня будут категории именно с подобными названиями.
    В каждой из этих категорий можно создать &quot;подкатегории&quot; или &quot;разделы&quot;. Это простая иерархия, со следующей структурой: <br />
    <ul class="normallist">
        <li>
            <strong>Спорт</strong>
            &nbsp;- &quot;Категория&quot;
        </li>
        <ul class="normallist">
            <li>
                <strong>Бейсбол</strong>
                &nbsp;- Раздел внутри категории &quot;Спорт&quot;
            </li>
            <ul class="normallist">
                <li>
                    <strong>Статистика</strong>
                    &nbsp;- Подраздел раздела &quot;Бейсбол&quot;
                </li>
            </ul>
            <li><strong>Футбол</strong>
            &nbsp;- Раздел внутри категории &quot;Спорт&quot;</li>
        </ul>
    </ul>
    Категории позволяют разделить форум на основные темы (&quot;Автомобили&quot;, &quot;Спорт&quot;) и &quot;Разделы&quot;, 
	в каждом из которых пользователи могут оставлять сообщения на соответствующую тему.	К примеру, пользователь, интересующийся
	автомобилями марки &quot;Пинто&quot;, наверняка захочет оставить несколько сообщений в теме, посвященной этим машинам.
	Иерархическая структура позволяет людям быстрее найти то, что их интересует.
	Вместо раздела &quot;Магазин&quot; можно создать два раздела: &quot;Оборудование&quot; и &quot;Одежда&quot;.
	Это намного упростит пользователям поиск нужной информации &mdash; они смогут сразу перейти в нужный раздел и искать там.<br />
	Как отмечалось выше, Раздел является ключевой темой, содержащей в себе другие по одной и той же тематике. Например, для
	обсуждения &quot;Пинто&quot; нужно всего лишь зайти в категорию &quot;Автомобили&quot; и перейти в раздел &quot;Пинто&quot;.<br />
    Функции, доступные на этой странице, позволяют создавать новые разделы внутри каждой категории, изменять их, менять порядок, а также полностью удалять.';

$helptxt['edit_news'] = '	<ul class="normallist">
		<li>
			<strong>Новости</strong><br />
			В этой секции можно настроить текст новостей, отображаемых на главной странице форума.
			Добавьте желаемый пункт (например, &quot;Не пропустите собрание во вторник!&quot;) и сохраните изменения. Новости будут отображаться в случайном порядке, по одной за раз.
		</li>
		<li>
			<strong>Рассылки</strong><br />
			В этой секции можно отправлять специальные сообщения пользователям форума, через личные сообщения или по электронной почте. Для начала отметьте группы, которым хотите разослать сообщения. Кроме того, можно указать дополнительных адресатов. Затем введите текст сообщения и выберите тип рассылки: с помощью ЛС или же через e-mail.
		</li>
		<li>
			<strong>Настройки</strong><br />
			В этой секции содержится несколько настроек, относящихся к новостям и рассылкам, включая выбор групп, которые могут редактировать новости форума или отправлять информационные сообщения по почте. Доступны также параметр для включения/отключения новостной ленты форума и параметр для управления длиной сообщений в RSS-ленте.
		</li>
	</ul>';

$helptxt['view_members'] = '
   <ul class="normallist">
        <li>
            <strong>Просмотр всех пользователей</strong><br />
            Просмотр всех пользователей форума. Вам представляется список имен пользователей со ссылками. Можно кликнуть
            на любое из имен, чтобы просмотреть профили пользователей (домашняя страница, возраст,&nbsp;и&nbsp;т.&nbsp;д.), а также изменить их.
			Вы имеете полный контроль над пользователями, включая возможность их удаления с форума.<br /><br />
        </li>
        <li>
            <strong>Ожидание подтверждения</strong><br />
            Эта секция доступна только при включении подтверждения администратором новых регистраций. Любой, кто регистрируется на вашем
            форуме, станет полноценным пользователем, но только после того как его кандидатура будет одобрена администратором.
			Этот раздел показывает список всех тех пользователей, которые ожидают одобрения, вместе с их электронными и IP-адресами.
			Вы в любой момент можете разрешить или отклонить (удалить) любого пользователя в списке, отметив галочкой поле напротив пользователя и выбрав нужное действие из выпадающего меню в нижней части экрана. При отклонении (удалении) пользователя его можно уведомить об этом (по желанию).<br /><br />
        </li>
        <li>
            <strong>Ожидание активации</strong><br />
            Эта секция доступна только при включении режима активации учетных записей. Здесь отображается список всех пользователей, которые пока не активировали свой аккаунт. В этом разделе можно разрешить, отклонить или напомнить пользователям о необходимости завершить процесс регистрации. Кроме того, можно уведомить пользователя о совершенных вами действиях (по желанию).<br /><br />
        </li>
    </ul>';

$helptxt['ban_members'] = '<strong>Бан пользователей</strong><br />
    SMF предоставляет возможность &quot;банить&quot; конкретных пользователей, чтобы не допускать к общению на форуме тех, кто нарушил правила.
	Можно выбрать тех пользователей, которых не хочется видеть на форуме. Вам, как администратору, при просмотре доступны IP-адреса всех пользователей.
	В списке ниже нужно просто указать нужный IP и сохранить его, после чего пользователи, использующие этот адрес, больше не смогут оставлять с него сообщения.<br />
	Кроме того, можно забанить пользователей по их электронным адресам.';

$helptxt['featuresettings'] = '<strong>Свойства и параметры</strong><br />Здесь можно изменить некоторые настройки форума, в соответствии со своими предпочтениями.';

$helptxt['modsettings'] = '<strong>Изменение настроек модификаций</strong><br />В этой секции содержатся настройки, добавленные установленными модификациями.';

$helptxt['time_format'] = '<strong>Формат времени</strong><br />
    Вы обладаете большими возможностями по изменению отображаемого формата времени.
    Преобразования производятся с помощью функции <a href="http://www.php.su/functions/?strftime" target="_blank">strftime</a> и описываются ниже.<br />
    <br />
    Следующие буквы определяют следующий формат: <br />
    <span class="smalltext">
    &nbsp;&nbsp;%a &mdash; краткое название дня недели<br />
    &nbsp;&nbsp;%A &mdash; полное названия дня недели<br />
    &nbsp;&nbsp;%b &mdash; краткое название месяца<br />
    &nbsp;&nbsp;%B &mdash; полное название месяца<br />
    &nbsp;&nbsp;%d &mdash; день в месяце (01 to 31) <br />
    &nbsp;&nbsp;%D<strong>*</strong> &mdash; то же что и %m/%d/%y <br />
    &nbsp;&nbsp;%e<strong>*</strong> &mdash; день в месяце (от 1 до 31) <br />
    &nbsp;&nbsp;%H &mdash; час, используя 24-х часовые часы (от 00 до 23) <br />
    &nbsp;&nbsp;%I &mdash; час, используя 12-ти часовые часы (от 01 до 12) <br />
    &nbsp;&nbsp;%m &mdash; месяц как номер (от 01 до 12) <br />
    &nbsp;&nbsp;%M &mdash; минута как номер <br />
    &nbsp;&nbsp;%p &mdash; &quot;am&quot; или &quot;pm&quot; в соответствии со временем<br />
    &nbsp;&nbsp;%R<strong>*</strong> &mdash; время в 24-х часовом представлении <br />
    &nbsp;&nbsp;%S &mdash; секунды в цифровом формате <br />
    &nbsp;&nbsp;%T<strong>*</strong> &mdash; текущее время, то же что %H:%M:%S <br />
    &nbsp;&nbsp;%y &mdash; 2 цифры года (от 00 до 99) <br />
    &nbsp;&nbsp;%Y &mdash; 4 цифры года<br />
    &nbsp;&nbsp;%Z &mdash; временная зона, или имя, или сокращение <br />
    &nbsp;&nbsp;%% &mdash; дословно знак \'%\' <br />
    <br />
    <em>* Не работает на Windows-серверах.</em></span>';

$helptxt['live_news'] = '<strong>Последние новости</strong><br />
    В этом блоке отображаются последние обновленные новости с <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.
    Просматривайте их время от времени для получения информации об обновлениях, новых релизах, и важной информации от Simple Machines.';

$helptxt['registrations'] = '<strong>Управление регистрацией</strong><br />
    Этот раздел содержит все функции, которые могут быть необходимыми для управления новыми регистрациями на форуме. Содержит до четырех
    разделов, которые видны в зависимости от настроек форума. Среди них:<br /><br />
    <ul class="normallist">
        <li>
            <strong>Регистрация нового пользователя</strong><br />
            Здесь можно зарегистрировать нового пользователя. Это может быть полезно на тех форумах, где регистрация закрыта
            для новых пользователей, или в случаях, когда администратор хочет создать тестовую учетную запись. Если выбрана опция "требовать активацию учетной записи",
            пользователю будет отправлен e-mail со ссылкой для активации, по которой он должен будет перейти, прежде чем сможет использовать учетную запись. Также можно
            использовать отправку нового пароля на заданные e-mail.<br /><br />
        </li>
        <li>
            <strong>Регистрационное соглашение</strong><br />
            Это позволяет задать текст для регистрационного соглашения, отображаемого при регистрации на форуме.
            <br /><br />
        </li>
        <li>
            <strong>Зарезервированные имена</strong><br />
            Используя этот интерфейс, можно указать слова или имена, которые нельзя будет использовать в именах пользователей.<br /><br />
        </li>
        <li>
            <strong>Настройки</strong><br />
            Этот раздел будет виден только при наличии прав администрирования. Здесь можно выбрать метод регистрации,
            используемый на форуме, а также другие настройки, относящиеся к регистрации.
        </li>
    </ul>';

$helptxt['modlog'] = '<strong>Лог модерации</strong><br />
    Этот раздел позволяет членам группы Модераторов отслеживать все действия по модерированию, которые сделали модераторы форума. Чтобы быть уверенным, что
    модераторы не удалят ссылки на совершенные ими действия, установлен запрет на удаление этих данных в течение 24-х часов после предпринятого действия.
    Колонка \'Действие\' отображает совершенное модератором действие.';
$helptxt['adminlog'] = '<strong>Логи администрирования</strong ><br />Этот раздел позволяет членам группы Администраторы отслеживать некоторые административные действия произведенные на форуме. Чтобы быть уверенным, что Администраторы не смогут сразу удалить упоминания о своих действиях, записи не могут быть удалены в течение 24 часов со времени произведенного действия.';
$helptxt['userlog'] = '<strong>Profile Edits Log</strong><br>
	This page allows members of the admin team to view changes users make to their profiles, and is available from inside a user\'s profile area.';
$helptxt['warning_enable'] = '<strong>Система предупреждений пользователей</strong><br />
	Эта функция позволяет Администраторам и Модераторам выносить пользователям предупреждения различного уровня. От этого уровня будут зависеть права пользователей на те или иные действия. Доступны следующие параметры:
	<ul class="normallist">
		<li>
			<strong>Уровень предупреждения &mdash; пользователь под наблюдением</strong><br />
			Этот параметр определяет уровень предупреждения (в процентах), по достижении которого пользователь автоматически попадает в список &quot;наблюдаемых&quot;.
			Любой пользователь, находящийся &quot;под наблюдением&quot;, появляется в соответствующей области Центра модерации.
		</li>
		<li>
			<strong>Уровень предупреждения &mdash; модерация сообщений</strong><br />
			Все сообщения пользователя, получившего этот уровень предупреждения, должны будут проходить предварительную проверку перед публикацией на форуме. Данный параметр перекрывает любые локальные права разделов, относящиеся к модерации сообщений.
		</li>
		<li>
			<strong>Уровень предупреждения &mdash; пользователь молчит</strong><br />
			В случае получения этого уровня предупреждения все сообщения пользователя блокируются. Пользователь теряет права на публикацию сообщений.
		</li>
		<li>
			<strong>Максимальное количество балов предупреждений в день</strong><br />
			Этот параметр контролирует количество пунктов предупреждения, которые Модератор может добавить или удалить какому-либо пользователю в течение суток. Данную настройку можно использовать для ограничения действий Модераторов в течение указанного количества времени. Действие настройки можно отключить, установив нулевое значение. На пользователей с правами Администраторов данная опция никак не влияет.
		</li>
	</ul>';
$helptxt['warning_watch'] = 'This setting defines the percentage warning level a member must reach to automatically assign a &quot;watch&quot; to the member. Any member who is being &quot;watched&quot; will appear in the watched members list in the moderation center.';
$helptxt['warning_moderate'] = 'Any member passing the value of this setting will find all their posts require moderator approval before they appear to the forum community. This will override any local board permissions which may exist related to post moderation.';
$helptxt['warning_mute'] = 'If this warning level is passed by a member they will find themselves under a post ban. The member will lose all posting rights.';
$helptxt['user_limit'] = 'This setting limits the amount of points a moderator may add/remove to any particular member in a twenty four hour period. This
			can be used to limit what a moderator can do in a small period of time. This can be disabled by setting it to a value of zero. Note that
			any members with administrator permissions are not affected by this value.';

$helptxt['error_log'] = '<strong>Лог ошибок</strong><br />
    Лог ошибок отображает каждую ошибку, с которой столкнулись пользователи при использовании форума. Ошибки сортируются по дате, можно выбрать сортировку,
    кликнув по черной стрелке напротив каждой даты. Кроме того, можно отфильтровать ошибки, кликнув по изображению рядом с каждой ошибкой. Это
    позволяет фильтровать ошибки, к примеру, по пользователям. Когда фильтр включен, будут показаны только те результаты, которые соответствуют данному фильтру.';
$helptxt['theme_settings'] = '<strong>Настройки тем оформления</strong><br />
    Этот раздел позволяет изменять настройки, относящиеся к теме оформления. Эти настройки включают такие параметры, как директория тем и URL-адреса, а также параметры, влияющие на отображение темы на вашем форуме. Большинство тем будут иметь различные параметры, настраиваемые пользователем, позволяющие адаптировать тему в соответствии с индивидуальными предпочтениями.';
$helptxt['smileys'] = '<strong>Смайлы и иконки</strong><br />
    Здесь можно добавлять, удалять смайлы, или наборы смайлов. Заметьте, что если смайл один в наборе, то он появляется во всех наборах &mdash; иначе он может
    смутить ваших пользователей, использующих разные наборы.<br /><br />

    Вы также можете отредактировать иконки сообщений, если это разрешено на странице настроек.';
$helptxt['calendar'] = '<strong>Управление Календарем</strong><br />
    Здесь можно изменить текущие настройки Календаря, добавить или удалить праздники.';
$helptxt['cal_export'] = 'Exports a text file in the iCal format for importing into other calendar applications';
$helptxt['cal_highlight_events'] = 'This setting allows you to highlight events on the Mini Calendars, Main Calendar, both places, or disable event highlighting.';
$helptxt['cal_highlight_holidays'] = 'This setting allows you to highlight holidays on the Mini Calendars, Main Calendar, both places, or disable event highlighting.';
$helptxt['cal_highlight_birthdays'] = 'This setting allows you to highlight birthdays on the Mini Calendars, Main Calendar, both places, or disable event highlighting.';
$helptxt['cal_disable_prev_next'] = 'If this setting is checked, the three month blocks on the left hand side of the page will be disabled.';
$helptxt['cal_display_type'] = 'This setting allows you to change the display type of the calendar.<br><br><strong>Comfortable:</strong> makes the rows of the calendar big.<br><strong>Compact:</strong> makes the rows of the calendar small.';
$helptxt['cal_week_links'] = 'If this setting is checked, links will be added alongside each week in the calendar.';
$helptxt['cal_prev_next_links'] = 'If this setting is checked, previous month and next month links will be added to the top of each month for easy navigation.';
$helptxt['cal_short_months'] = 'If this setting is checked, month names within the calendar will be shortened.<br><br><strong>Enabled:</strong> ' . $txt['months_short'][1] . ' 1<br><strong>Disabled:</strong> ' . $txt['months_titles'][1] . ' 1';
$helptxt['cal_short_days'] = 'If this setting is checked, day names within the calendar will be shortened.<br><br><strong>Enabled:</strong> ' . $txt['days_short'][1] . '<br><strong>Disbaled:</strong> ' . $txt['days'][1];

$helptxt['serversettings'] = '<strong>Настройки сервера</strong><br />
	Здесь можно изменять основные настройки форума. Этот раздел включает в себя настройки базы данных и URL-адресов, а также настройки отсылки сообщений и кэширование. Прежде чем изменять данные настройки, хорошенько подумайте, потому как неправильная настройка может привести форум в нерабочее состояние.';
$helptxt['manage_files'] = '
	<ul class="normallist">
		<li>
			<strong>Просмотр файлов</strong><br />
			Просмотр всех вложений, аватаров и эскизов, сохраненных SMF.<br /><br />
		</li><li>
			<strong>Свойства вложений</strong><br />
			Конфигурация директорий для хранения вложений, а также установка ограничений на типы вложений.<br /><br />
		</li><li>
			<strong>Свойства аватаров</strong><br />
			Конфигурация директорий для хранения аватаров, а также управление изменением размеров аватаров.<br /><br />
		</li><li>
			<strong>Обслуживание файлов</strong><br />
			Проверка и исправление любых ошибок в директории вложений, а также удаление выбранных вложений.<br /><br />
		</li>
	</ul>';

$helptxt['topicSummaryPosts'] = 'Это позволяет устанавливать число предыдущих сообщений, отображаемых под краткой сводкой темы в окне ответа.';
$helptxt['enableAllMessages'] = 'Установите здесь <em>максимальное</em> число сообщений в теме, которые будут показаны по ссылке &quot;все&quot;.';
$helptxt['allow_guestAccess'] = 'Убрав здесь галочку, можно запретить гостям делать что-либо, кроме базовых функций: вход, регистрация, напоминание пароля и пр. Это не то же самое, что запрет доступа гостям к форуму.';
$helptxt['userLanguage'] = 'Включение этого параметра позволит пользователям выбирать, какой языковой файл они будут использовать. Это не повлияет на выбор
        по умолчанию.';
$helptxt['trackStats'] = 'Статистика:<br />Это разрешит пользователям видеть последние сообщения и наиболее популярные темы на вашем форуме.
        Так же это показывает некоторую статистику, такую как наибольшее количество пользователей онлайн, новые пользователи и новые темы.<hr />
        Просмотры страницы:<br />Добавляет ещё колонку в страницу статистики, на которой показывается число просмотров страниц ваших форумов.';
$helptxt['titlesEnable'] = 'Включение надписи над аватаром, позволит пользователям с соответствующими правами создавать специальные названия для себя. Это будет отображаться под именем.<br /><em>Например:</em><br />Grek и Mavn<br />Классные парни';
$helptxt['onlineEnable'] = 'Это будет отображать картинку, показывающую текущий статус пользователя.';
$helptxt['todayMod'] = 'Это будет показывать &quot;Сегодня&quot; или &quot;Завтра&quot;, вместо отображения полной даты.<br /><br />
		<strong>Примеры:</strong><br /><br />
		<dt>
			<dt>Запретить</dt>
			<dd>3 октября 2009 в 00:59:18</dd>
			<dt>Только Сегодня</dt>
			<dd>Сегодня в 00:59:18</dd>
			<dt>Сегодня и Вчера</dt>
			<dd>Вчера в 21:36:55</dd>
		</dt>';
$helptxt['disableCustomPerPage'] = 'Отметьте эту опцию, чтобы запретить пользователям индивидуальную настройку количества выводимых сообщений и тем на одной странице.';
$helptxt['enablePreviousNext'] = 'Отображение ссылок на следующую и предыдущую темы.';
$helptxt['pollMode'] = 'Это определяет, включены голосования или нет. Если голосования отключены, все существующие голосования будут скрыты из списка тем. Можно установить отображение обычных тем без голосований, выбрав вариант &quot;Показывать существующие голосования как темы&quot;.<br /><br />Для выбора тех, кто может создавать, просматривать и участвовать в голосованиях, можно настроить соответствующие права доступа (если голосования не работают, вспомните это).';
$helptxt['enableCompressedOutput'] = 'Эта установка будет сжимать страницы для снижения загрузки канала, но для этого необходима установленная библиотека zlib.';
$helptxt['disableTemplateEval'] = 'По умолчанию шаблоны высчитываются (evaluated) вместо обычного включения (include) в код форума. Это необходимо для отображения более полной полезной отладочной информации в случае, если шаблон содержит ошибки.<br /><br />
		Однако на больших форумах включение данной функции может привести к общему снижению производительности. Поэтому опытные пользователи могут это отключить.';
$helptxt['httponlyCookies'] = 'Cookies won\'t be accessible by scripting languages, such as JavaScript. This setting can help to reduce identity theft through XSS attacks. This can cause issues with third party scripts but should be on wherever possible.';
$helptxt['databaseSession_enable'] = 'Эта опция делает возможным использовать базу данных для хранения сессий &mdash; это лучше для серверов со сбалансированной нагрузкой, устраняет все ошибки с таймаутами и может сделать работу вашего форума быстрее.';
$helptxt['databaseSession_loose'] = 'Включение этого уменьшит загрузку канала, используемую вашим форумом, и сделает так, что, кликнув назад, страница не будет перезагружаться &mdash; недостаток этого в том что (новые) иконки не обновятся, так же как и другие вещи.';
$helptxt['databaseSession_lifetime'] = 'Продолжительность сессии (в секундах) после последней активности. Рекомендованное значение &mdash; более 2400.';
$helptxt['tfa_mode'] = 'You can add a second level of security to your forum by enabling <a href="http://en.wikipedia.org/wiki/Two_factor_authentication">Two Factor Authentication</a>. 2FA forces your users to add a enter a machine-generated code after the regular login. You need to configure 2FA to yourself before you are able to force it to other users!';
$helptxt['cache_enable'] = 'SMF performs caching at a variety of levels. The higher the level of caching enabled the more CPU time will be spent retrieving cached information. If caching is available on your machine it is recommended that you try caching at level 1 first.';
$helptxt['cache_memcached'] = 'If you are using memcached you need to provide the server details. This should be entered as a comma separated list as shown in the example below:<br><br>	&quot;server1,server2,server3:port,server4&quot;<br><br>Note that if no port is specified SMF will use port 11211 unless the host contains a slash, then it is assumed to be an alternative transport and the port will be set to 0. SMF will attempt to perform rough/random load balancing across the specified servers.';
$helptxt['cache_cachedir'] = 'This setting is only for the smf file-based cache system. It specifies the path to the cache directory. It is recommended that you place this in /tmp/ if you are going to use this, although it will work in any directory';
$helptxt['enableErrorLogging'] = 'Запись любых ошибок, таких как неправильный вход, так что можно будет просмотреть, что именно происходило неправильно.';
$helptxt['enableErrorQueryLogging'] = 'В лог ошибок будет включен полный текст запроса, отправленного к базе данных. Регистрация ошибок должна быть включена.<br /><br /><strong>Примечание:  Это повлияет на возможность фильтрации ошибок в логах по сообщениям.</strong>';
$helptxt['log_ban_hits'] = 'If enabled, every time a banned user tries to access the site, this will be logged in the error log. If you do not care whether, or how often, banned users attempt to access the site, you can turn this off for a performance boost.';
$helptxt['allow_disableAnnounce'] = 'Это разрешит пользователям не получать уведомления о темах.';
$helptxt['disallow_sendBody'] = 'Эта настройка убирает возможность получать текст ответов и сообщений в письмах уведомлений.<br /><br />Часто пользователи могут отвечать на письма уведомлений, что в большинстве случаев означает то, что этот ответ получает веб-мастер.';
$helptxt['enable_ajax_alerts'] = 'This option allows your members to receive AJAX notifications. This means that members don\'t need to refresh the page to get new notifications.<br><b>DO NOTE:</b> This option might cause a severe load at your server with many users online.';
$helptxt['jquery_source'] = 'This will determine the source used to load the jQuery Library. <em>Auto</em> will use the CDN first and if not available fall back to the local source. <em>Local</em> will only use the local source. <em>CDN</em> will only load it from Google CDN network';
$helptxt['compactTopicPagesEnable'] = 'Эта опция задает количество отображаемых номеров страниц.<br /><em>Пример: </em>&quot;3&quot; показывается как: 1 ... 4 [5] 6 ... 9 <br />&quot;5&quot; показывается как: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Отображение в нижней части форума времени в секундах, которое понадобилось для генерации конкретной страницы.';
$helptxt['removeNestedQuotes'] = 'При включении этой опции из сообщений будут удаляться вложенные цитаты (вместо них останутся ссылки).';
$helptxt['max_image_width'] = 'Это позволяет задать максимальный размер для размещаемых картинок.';
$helptxt['mail_type'] = 'Эта настройка позволяет выбрать установки PHP по умолчанию, или задать свои настройки SMTP. PHP не поддерживает SMTP-аутентификацию, так что, если это нужно, выберите SMTP. Но помните, что SMTP может работать медленнее, и некоторые сервера не будут принимать имя пользователя и пароль.<br /><br />Вам не придется заполнять настройки SMTP, если установлены настройки PHP по умолчанию.';
$helptxt['attachment_manager_settings'] = 'Вложения &mdash; это файлы, которые пользователи могут загружать на форум и прикреплять к своим сообщениям (для последующего просмотра/скачивания другими пользователями).<br /><br />
		<strong>Проверять расширения вложений</strong>:<br /> Хотите проверять расширения загружаемых файлов?<br />
		<strong>Доступные расширения вложений</strong>:<br /> Можно установить допустимые типы прикрепляемых файлов, чтобы пользователи не могли загрузить что-то лишнее или опасное.<br />
		<strong>Папка вложений</strong>:<br /> Относительный путь к директории для хранения вложений<br />(например: /home/sites/yoursite/www/forum/attachments)<br />
		<strong>Максимальный размер папки вложений</strong> (в КБ):<br /> Выберите максимальный предел, по достижении которого директория вложений будет считаться полностью заполненной.<br />
		<strong>Максимальный размер вложения в одном сообщении</strong> (в КБ):<br /> Выберите общий максимальный размер всех вложений, прикрепляемых к одному сообщению. При достижении предела дальнейшее прикрепление вложений будет ограничено.<br />
		<strong>Максимальный размер вложения</strong> (в КБ):<br /> Выберите максимальный размер каждого отдельного вложения.<br />
		<strong>Максимальное количество вложений в сообщении</strong>:<br /> Выберите количество вложений, которое пользователь может прикрепить к одному сообщению.<br />
		<strong>Отображать прикрепленные картинки под сообщением</strong>:<br /> Если загружаемый файл является изображением, оно будет отображено в виде эскиза под сообщением.<br />
		<strong>Изменять размер изображения, при отображении под сообщением</strong>:<br /> В сочетании с опцией, указанной выше, данный параметр позволяет уменьшить размер изображений для их отображения в качестве эскизов.<br />
		<strong>Максимальная ширина и высота эскизов</strong>:<br /> Используется только с функцией выше (&quot;Изменять размер изображения, при отображении под сообщением&quot;). В соответствии с заданными значениями размер изображений будет пропорционально изменяться.';
$helptxt['attachmentCheckExtensions'] = 'For some communities, you may wish to limit the types of files that users can upload by checking the extension: e.g. myphoto.jpg has an extension of jpg.';
$helptxt['attachmentExtensions'] = 'If "check attachment\'s extension" above is ticked, these are the extensions that will be permitted for new attachments.';
$helptxt['attachmentUploadDir'] = 'The path to your attachment folder on the server<br>(example: /home/sites/yoursite/www/forum/attachments)';
$helptxt['attachmentDirSizeLimit'] = ' Select how large the attachment folder can be, including all files within it.';
$helptxt['attachmentPostLimit'] = ' Select the maximum filesize (in KB) of all attachments made per post. If this is lower than the per-attachment limit, this will be the limit.';
$helptxt['attachmentSizeLimit'] = 'Select the maximum filesize of each separate attachment.';
$helptxt['attachmentNumPerPostLimit'] = ' Select the number of attachments a person can make per post.';
$helptxt['attachmentShowImages'] = 'If the uploaded file is a picture, it will be displayed underneath the post.';
$helptxt['attachmentThumbnails'] = 'If the above setting is selected, this will save a separate (smaller) attachment for the thumbnail to decrease bandwidth.';
$helptxt['attachmentThumbWidth'] = 'Only used with the &quot;Resize images when showing under posts&quot; setting the maximum width to resize attachments down from. They will be resized proportionally.';
$helptxt['attachmentThumbHeight'] = 'Only used with the &quot;Resize images when showing under posts&quot; setting the maximum height to resize attachments down from. They will be resized proportionally.';
$helptxt['attachmentDirFileLimit'] = 'Max number of files per directory';
$helptxt['attachmentEnable'] = 'This setting enables you to configure how attachments can be made.<br><br>
	<ul class="normallist">
		<li>
			<strong>Disable all attachments</strong><br>
			All attachments are disabled. Existing attachments are not deleted, but they are hidden from view (even administrators cannot see them). New attachments cannot be made either, regardless of permissions.<br><br>
		</li>
		<li>
			<strong>Enable all attachments</strong><br>
			Everything behaves as normal, users who are permitted to view attachments can do so, users who are permitted to upload can do so.<br><br>
		</li>
		<li>
			<strong>Disable new attachments</strong><br>
			Existing attachments are still accessible, but no new attachments can be added, regardless of permission.
		</li>
	</ul>';
$helptxt['attachment_image_paranoid'] = 'При выборе этой опции будет включена очень строгая проверка вложенных изображений. Предупреждение! Эту проверку могут не пройти и нормальные изображения. Поэтому настоятельно рекомендуется использовать данную опцию только совместно с обработкой изображений, чтобы в случае необходимости могла произойти повторная выборка изображений, не прошедших проверку безопасности. После прохождения проверки такие изображения будут подчищены и загружены. В противном случае, если обработка изображений не включена, любые вложения, провалившие проверку безопасности, будут отклонены.';
$helptxt['attachment_image_reencode'] = 'При выборе этой опции будет производиться попытка перекодирования загружаемых вложений, для обеспечения более высокой безопасности. Обратите внимание: после перекодирования все анимированные изображения станут статичными. <br /> Данная функция работает только при наличии установленного GD-модуля на сервере. ';
$helptxt['attachment_thumb_memory'] = 'The larger the source image (size & width x height), the higher the memory requirements are for the system to successfully create a thumbnail image.<br>Checking this setting, the system will estimate the required memory and will then request that amount. If successful, only then will it attempt to create the thumbnail.<br>This will result in fewer white page errors but may result in fewer thumbnails being created. Leaving this unchecked will always cause the system to try to create the thumbnail (with a fixed amount of memory). This may result in more white page errors.';
$helptxt['attachmentRecodeLineEndings'] = 'The script will re-code line endings according to your server.';
$helptxt['automanage_attachments'] = 'By default, SMF puts new attachments into a single folder. For most sites this is not a problem, but as a site grows it can be useful to have multiple folders to store attachments in.<br><br>This setting allows you to set whether you manage these folders yourself (e.g. creating a second folder and moving to it when you are ready) or whether you let SMF do it, based on criteria, such as when the current directory reaches a given size, or breaking down folders by years or even months on very busy sites.';
$helptxt['dont_show_attach_under_post'] = 'If enabled, the attachments embedded on the post won\'t appear under the post but are still subject to be deleted.';
$helptxt['use_subdirectories_for_attachments'] = 'Create new directories.';
$helptxt['max_image_height'] = 'As with the maximum width, this setting indicates the maximum height a posted image can be.';
$helptxt['avatar_paranoid'] = 'При выборе этой опции будет включена очень строгая проверка аватаров. Предупреждение! Эту проверку могут не пройти и нормальные изображения. Поэтому настоятельно рекомендуется использовать данную опцию только совместно с обработкой аватаров, чтобы в случае необходимости могла произойти повторная выборка изображений, не прошедших проверку безопасности. После прохождения проверки такие изображения будут подчищены и загружены. В противном случае, если обработка аватаров не включена, любые аватары, провалившие проверку безопасности, будут отклонены.';
$helptxt['avatar_reencode'] = 'При выборе этой опции будет производиться попытка перекодирования загружаемых аватаров, для обеспечения более высокой безопасности. Обратите внимание: после перекодирования все анимированные изображения станут статичными. <br /> Данная функция работает только при наличии установленного GD-модуля на сервере.';
$helptxt['cal_enabled'] = 'Календарь может быть использован для отображения дней рождений или важных событий, происходящих в вашем сообществе.<br /><br />
        <strong>Показывать дни как ссылку на \'Добавить событие\'</strong>:<br />Это разрешит пользователям добавлять события в тот день, когда они кликнут по этой дате<br />
        <strong>Показывать номера недели</strong>:<br />Показывать сведения о текущей неделе.<br />
        <strong>Максимально дней в анонсе на главной странице форума</strong>:<br />Если установлено 7, будут показаны лучшие из событий следующей недели.<br />
        <strong>Показывать праздники на главной странице форума</strong>:<br />Показывать сегодняшние праздники в блоке событий на главной странице форума.<br />
        <strong>Показывать дни рождения на главной странице форума</strong>:<br />Показывать сегодняшние дни рождения в блоке календарь на главной странице форума.<br />
        <strong>Показывать события на главной странице форума</strong>:<br />Показывать сегодняшние события в блоке календарь на главной странице форума.<br />
        <strong>Форум по умолчанию для размещения сообщений</strong>:<br />В каком форуме по умолчанию размещать события?<br />
        <strong>Разрешать события не ссылающиеся на сообщения</strong>:<br />Разрешить пользователям размещать события без необходимости создания ссылки на них на форуме.<br />
        <strong>Минимальный год</strong>:<br />Выберите &quot;первый&quot; год в списке календаря<br />
        <strong>Максимальный год</strong>:<br />Выберите &quot;последний&quot; год в списке календаря<br />
        <strong>Цвет дня рождения</strong>:<br />Выберите цвет для текста дня рождения<br />
        <strong>Цвет события</strong>:<br />Выберите цвет для текста события<br />
        <strong>Цвет праздника</strong>:<br />Выберите цвет текста для праздника<br />
        <strong>Разрешить занимать событиям несколько дней</strong>:<br />Отметьте, чтобы разрешить событиям распределяться на несколько дней.<br />
        <strong>Максимальное количество дней для события</strong>:<br />Выберите максимальное количество дней, которое может занимать событие.<br /><br />
        Помните, что использование календаря (размещение, просмотр событий и пр.) управляется правами доступа.';
$helptxt['localCookies'] = 'SMF использует cookies-файлы, чтобы хранить информацию об учетной записи на компьютере клиента.
    Эти файлы могут храниться глобально (myserver.com) или локально (myserver.com/путь/к/форума).<br />
    Отметьте эту опцию, если испытываете проблемы с пользователями, которых автоматически выкидывает с форума.<hr />
	Хранящиеся глобально cookies менее безопасны при использовании на общедоступном веб-сервере.<hr />
	Локальные cookies не работают за пределами папки форума, поэтому, если ваш форум находится, к примеру, по адресу www.myserver.com/forum, страницы типа www.myserver.com/index.php не смогут получить доступ к информации учетной записи.
	Глобальное хранение особенно рекомендуется при использовании SSI.php.';
$helptxt['enableBBC'] = 'Включение этой опции позволит пользователям использовать BB-код на форуме, для вставки изображений, форматирования текста и многого другого.';
$helptxt['time_offset'] = 'Не все администраторы хотят, чтобы форум использовал то же время, которое используется на сервере. Используя эту функцию, можно указать разницу во времени (в часах).';
$helptxt['default_timezone'] = 'Временная зона сервера указывает PHP, где сервер находится. Убедитесь, что этот параметр установлен корректно, соответственно стране и городу установки сервера. Дополнительная информация на сайте <a href="http://www.php.net/manual/en/timezones.php" target="_blank">PHP</a>.';
$helptxt['spamWaitTime'] = 'Здесь можно указать время, которое необходимо подождать для отправки следующего сообщения. Это может предотвратить спам, флуд или оффтопик на вашем форуме.';

$helptxt['enablePostHTML'] = 'Это позволит использовать HTML-теги в сообщениях пользователей:
    <ul class="normallist" style="margin-bottom: 0;">
        <li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
        <li>&lt;a href=&quot;&quot;&gt;</li>
        <li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
        <li>&lt;br /&gt;, &lt;hr /&gt;</li>
        <li>&lt;pre&gt;, &lt;blockquote&gt;</li>
    </ul>';

$helptxt['themes'] = 'Здесь можно выбрать тему оформления, которая будет использоваться по умолчанию.
    Нажмите на тему, чтобы изменить её настройки.';
$helptxt['theme_install'] = 'Здесь можно установить новую тему оформления. Вы можете установить её из уже существующей директории на сервере, загрузить с сайта, либо скопировать уже существующую тему и внести в её код нужные изменения.<br /><br />Архив с темой или директория должны содержать файл <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Эта функция позволит пользователям встраивать Flash-приложения в свои сообщения.
    Используйте на свой страх и риск!';
$helptxt['xmlnews_enable'] = 'Позволить пользователям ссылаться на <a href="%s?action=.xml;sa=news">Последние новости.</a>
    Рекомендуется ограничить размер сообщений/новостей, для правильного отображения RSS-новостей в разных клиентах.';
$helptxt['globalCookies'] = 'Использование кросс-доменных cookies. Например, если...<br />
    Ваш сайт расположен по адресу http://www.simplemachines.org/,<br />
    А ваш форум http://forum.simplemachines.org/,<br />
    Используя эту функцию, пользователи могут заходить на ваш сайт, используя кросс-доменные cookies вашего форума. Не применяйте эту функцию, если используются какие-то другие домены (Например, hacker.simplemachines.org), которые не принадлежат Вам.';
$helptxt['globalCookiesDomain'] = 'When using subdomain independent cookies (global cookies), you can specify which domain should be used for them. This should, of course, be set to your main domain - for example, if you are using <em>forum.example.com</em> and <em>www.example.com</em>, the domain is <em>example.com</em> in this case. You should not put the <em>http://</em> part in front of it.';
$helptxt['secureCookies'] = 'Включение этой опции отметит все созданные для пользователей cookies-файлы как безопасны. Используйте эту функцию только при наличии HTTPS-протокола на вашем сервере!';
$helptxt['securityDisable'] = '<em>Отключение</em> дополнительной проверки пароля при входе в панель администрирования. Не рекомендуется!';
$helptxt['securityDisable_why'] = 'Ваш текущий пароль. (который используется для входа на форум.)<br /><br />Необходимость его ввода обусловлена тем, что изменяются некоторые важные настройки и что изменяете их именно <strong>вы</strong>, а не кто либо другой.';
$helptxt['securityDisable_moderate'] = 'This <em>disables</em> the additional password check for the moderation page. This is not recommended!';
$helptxt['securityDisable_moderate_why'] = 'This is your current password. (the same one you use to login).<br><br>The requirement to enter this helps ensure that you want to do whatever moderation you are doing, and that it is <strong>you</strong> doing it.';
$helptxt['frame_security'] = 'Modern browsers now understand a security header presented by servers called X-Frame-Options. By setting this option you specify how you want to allow your site to be framed inside a frameset or a iframe. Disable will not send any header and is the most unsecure, however allows the most freedom. Deny will prevent all frames completely and is the most restrictive and secure. Allowing the Same Origin will only allow your domain to issue any frames and provides a middle ground for the previous two options.';
$helptxt['proxy_ip_header'] = 'This is the server header that will be trusted by SMF for containing the actual users IP address. Changing this setting can cause unexpected IP results on members. Please check with your server administrator, CDN provider or proxy administrator prior to changing these settings. Most providers will understand and use HTTP_X_FORWARDED_FOR. You should fill out the list of Servers sending the reverse proxy headers for security to ensure these headers only come from valid sources.';
$helptxt['email_members'] = 'In this message you can use a few &quot;variables&quot;. These are:<br>
	{$board_url} - The URL to your forum.<br>
	{$current_time} - The current time.<br>
	{$member.email} - The current member\'s email.<br>
	{$member.link} - The current member\'s link.<br>
	{$member.id} - The current member\'s id.<br>
	{$member.name} - The current member\'s name. (for personalization).<br>
	{$latest_member.link} - The most recently registered member\'s link.<br>
	{$latest_member.id} - The most recently registered member\'s id.<br>
	{$latest_member.name} - The most recently registered member\'s name.';

$helptxt['failed_login_threshold'] = 'Установите количество неудачных попыток входа, после чего произойдет перенаправление на восстановление пароля.';
$helptxt['loginHistoryDays'] = 'The number of days to keep login history under user profile tracking. The default is 30 days.';
$helptxt['oldTopicDays'] = 'Если эта функция включена, форум оповестит пользователя о том, что тема уже устарела и предложит начать новую тему, если он будет пытаться ответить в нее.';
$helptxt['edit_wait_time'] = 'Количество секунд, в течение которых пользователь сможет отредактировать только что отправленное им сообщение, в котором не будет написано, что сообщение отредактировано.';
$helptxt['edit_disable_time'] = 'Количество минут, в течение которых пользователь сможет отредактировать свое сообщение. 0 &mdash; отключить. <br /><br /><em>Примечание: Если у пользователя есть право редактировать любые сообщения, это ограничение на него не распространяется.</em>';
$helptxt['preview_characters'] = 'This setting sets the number of available characters for the first and last message topic preview.';
$helptxt['posts_require_captcha'] = 'Эта функция заставит пользователей вводить проверочный код при публикации каждого сообщения. Ввод кода обязателен для всех пользователей с количеством сообщений меньше заданного &mdash; это должно помочь в борьбе с рассылкой возможного спама.';
$helptxt['enableSpellChecking'] = 'Включить проверку орфографии. У вас ДОЛЖНА быть установлена pspell-библиотека. Ваш сервер ' . (function_exists('pspell_new') ? 'ПОДДЕРЖИВАЕТ' : 'НЕ ПОДДЕРЖИВАЕТ') . ' эту функцию.';
$helptxt['disable_wysiwyg'] = 'Эта опция отключает для всех пользователей возможность использовать редактор WYSIWYG при создании сообщений.';
$helptxt['lastActive'] = 'Количество минут, в течение которых пользователь будет считаться находящимся онлайн. По умолчанию &mdash; 15.';

$helptxt['customoptions'] = 'В этом разделе определены параметры, которые пользователь может выбирать из выпадающего списка. Есть несколько ключевых моментов, на которые стоит обратить внимание:
	<ul class="normallist">
		<li><strong>Параметр по умолчанию:</strong> Этот параметр будет выбран изначально.</li>
		<li><strong>Удаление параметров:</strong> Для удаления любого параметра просто очистите его текстовое поле.</li>
		<li><strong>Изменение порядка параметров:</strong> Можно изменить порядок параметров, перемещая текст между блоками. Но помните &mdash; необходимо убедиться, что в результате данной операции текст <strong>не</strong> изменился.</li>
	</ul>';

$helptxt['autoFixDatabase'] = 'Эта функция автоматически исправит ошибки в таблицах базы данных. После завершения работы функции вы получите письмо с уведомлением.';

$helptxt['enableParticipation'] = 'Если в теме содержатся сообщения пользователя, просматривающего раздел, то внутри иконок слева от соответствующей темы появится специальный значок (смайлик &mdash; в стандартном наборе).';

$helptxt['db_persist'] = 'Оставлять соединение активным для улучшения производительности форума. Если не используете выделенный сервер, с этой функцией могут возникнуть проблемы.';
$helptxt['ssi_db_user'] = 'Необязательный параметр: использование разных имени пользователя (для базы данных) и пароля при работе с SSI.php.';

$helptxt['queryless_urls'] = 'Эта опция меняет формат URL-адреса на укороченный, после чего адреса выглядят примерно так: index.php/topic,1.0.html. Такие ссылки могут неверно обрабатываться некоторыми системами, поэтому не рекомендуются к использованию.

Эта опция ' . (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? '' : 'не') . ' работает на вашем сервере.';
$helptxt['minimize_files'] = 'This option will minimize all css and js files that are loaded everytime, everywhere for every user, reducing the requests calls to your server. New files are re-created everyday, if you want to re-create them just clean your forum\'s cache.';
$helptxt['countChildPosts'] = 'Включение этой функции означает, что сообщения, расположенные в подразделах родительского раздела, будут учитываться в общей статистике форума.';
$helptxt['allow_ignore_boards'] = 'Включение этой функции позволит пользователям выбирать разделы, которые они хотели бы игнорировать.';
$helptxt['deny_boards_access'] = 'Checking this setting will allow you to deny access to certain boards based on membergroup access';

$helptxt['who_enabled'] = 'Эта опция позволяет пользователям просматривать, кто в данный момент находится на форуме и чем он занимается.';

$helptxt['recycle_enable'] = '&quot;Восстановление&quot; удаленных тем и сообщений из специального раздела.';

$helptxt['enableReportPM'] = 'Эта опция позволяет пользователям делать рапорт о личных сообщениях администрации форума.';
$helptxt['max_pm_recipients'] = 'Эта опция позволяет установить максимальное количество получателей разрешенные в отсылке личных сообщений пользователем форума. Это может использоваться как предотвращение использования системы личных сообщений для рассылки спама. Обратите внимание что пользователи которым разрешено делать объявления не подвергаются этому ограничению. Без ограничений &mdash; установите 0.';
$helptxt['pm_posts_verification'] = 'Данная настройка заставит пользователей вводить код, отображаемый на изображении, каждый раз при отправке личного сообщения. Пользователи, имеющие определенное количество сообщений не будут вводить код &mdash; это должно помочь в борьбе с автоматическими рассылками спама.';
$helptxt['pm_posts_per_hour'] = 'Это ограничит количество личных сообщений отсылаемых в течение одного часа. Это не затрагивает Администраторов и Модераторов.';

$helptxt['default_personal_text'] = 'Текст по умолчанию, который будет отображаться под аватарами пользователей.';

$helptxt['registration_method'] = 'Эта опция определяет метод регистрации на вашем форуме. Доступны следующие методы:<br /><br />
    <ul class="normallist">
        <li>
            <strong>Регистрация запрещена</strong><br />
                Означает, что никто не может регистрироваться на форуме.<br />
        </li><li>
            <strong>Мгновенная регистрация</strong><br />
                Означает, что, сразу после регистрации, новые пользователи могут войти на форум и оставлять сообщения.<br />
        </li><li>
            <strong>Активация пользователя</strong><br />
                Означает, что пользователь должен активировать свою учетную запись &mdash; путем перехода по ссылке, присланной на email.<br />
        </li><li>
            <strong>Одобрение администратором</strong><br />
                Означает, что администратор форума должен одобрить учетную запись, прежде чем пользователь будет иметь доступ к основным функциям форума.
        </li>
    </ul>';

$helptxt['send_validation_onChange'] = 'Эта функция означает то, что после смены пользователем его e-mail, на новый адрес отправляется письмо, с помощью которого, пользователь должен реактивировать свою учетную запись.';
$helptxt['approveAccountDeletion'] = 'When this setting is checked, any user request to delete his own account has to be approved by an administrator';

$helptxt['send_welcomeEmail'] = 'При включении этой функции, пользователи, прошедшие регистрацию, будут получать пригласительное письмо с форума.';
$helptxt['password_strength'] = 'Эта функция определяет политику паролей пользователей.
    Доступны следующие варианты:
    <ul class="normallist">
        <li><strong>Низкое:</strong> Пароль должен содержать как минимум 4 символа.</li>
        <li><strong>Среднее:</strong> Пароль должен содержать как минимум 8 символов и не может совпадать с именем или e-mail.</li>
        <li><strong>Высокое:</strong> Пароль должен содержать символы верхнего и нижнего регистров и как минимум из одного числа.</li>
    </ul>';
$helptxt['enable_password_conversion'] = 'By enabling this setting, SMF will attempt to detect passwords stored in other formats and convert them to the format SMF uses. Typically this is used for forums converted to SMF, but may have other uses as well. Disabling this prevents a user from logging in using their password after a conversion and they would need to reset their password.';

$helptxt['coppaAge'] = 'Значение в этом поле определяет минимальный возраст пользователя на форуме.
    Во время регистрации пользователю будет предложено подтвердить его возраст и, если он подходит под определенное правило, пользователь сможет продолжить регистрацию.
    Если значение равно нулю, возраст учитываться не будет.';
$helptxt['coppaType'] = 'Если на форуме стоит учет возраста и возраст пользователя меньше чем определено в настройках регистрации, существуют два дальнейших действия, а именно:
    <ul class="normallist">
        <li>
            <strong>Отменить регистрацию</strong><br />
                Дальнейшая регистрация пользователя невозможна.<br />
        </li><li>
            <strong>Запросить подтверждение у родителей/опекуна</strong><br />
                Будет отправлено письмо родителям/опекунам пользователя.
        </li>
    </ul>';
$helptxt['coppaPost'] = 'Введите в это поле e-mail, куда родители/опекуны смогут отправить подтверждение о разрешении на регистрацию.';

$helptxt['allow_hideOnline'] = 'Эта функция позволяет пользователям, которые не являются администраторами, скрывать свой онлайн-статус на форуме.';
$helptxt['meta_keywords'] = 'Эти слова выводятся в теге meta keywords и служат подсказкой для поисковых систем, объясняя им, чему именно посвящен ваш форум и что на нем можно найти. Можно указать довольно большой список слов, разделяя их запятыми (и не используя HTML).';

$helptxt['latest_themes'] = 'Здесь отображаются последние и самые популярные темы оформления с сайта <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.  Если темы не отображаются, форум не может подключиться к серверу <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'В целях безопасности, ответ на секретный вопрос (так же как и пароль) хранится в зашифрованном виде.';
$helptxt['moderator_why_missing'] = 'Вы можете назначить модераторов с помощью <a href="javascript:window.open(\'%s?action=manageboards\'); self.close();">интерфейса управления разделами</a>.';

$helptxt['permissions'] = 'Права доступа ограничивают или разрешают пользователям или группе пользователей пользоваться определенными функциями на форуме.';
$helptxt['permissions_board'] = 'Если для раздела выбран режим \'Глобальный\', это означает, что в нем не определены какие-либо собственные права доступа. \'Локальный\' раздел, напротив, использует собственные права доступа, которые отличаются от глобальных прав. Это позволяет создавать разделы с индивидуальными правами, отличающимися от прав остальных разделов.';
$helptxt['permissions_quickgroups'] = 'Эта функция позволяет использовать уже предустановленные наборы прав. Например, \'стандартный\', \'ограниченный\' &mdash; запрещающий, \'модератор\' &mdash; с правами модератора, \'технический\' &mdash; с правами на профилактику.';
$helptxt['permissions_deny'] = 'Эта функция позволяет использовать запрещающие права для пользователей. Можно добавить группу с запрещающими правами для отдельных (избранных) пользователей.<br /><br />Используйте данную функцию осторожно.';
$helptxt['permissions_postgroups'] = 'Эта функция позволяет выставить определенные права для групп пользователей, основанных на количестве сообщений.';
$helptxt['membergroup_guests'] = 'В группу &quot;Гости&quot; входят пользователи, не зарегистрированные или не авторизовавшиеся на форуме.';
$helptxt['membergroup_regular_members'] = 'Обычные пользователи это все пользователи, которые вошли на форум, но не входят ни в одну из определенных групп пользователей.';
$helptxt['membergroup_administrator'] = 'Администратор имеет доступ к любой функции форума. Изменить права доступа администратору нельзя.';
$helptxt['membergroup_moderator'] = 'Группа &quot;Модератор&quot; &mdash; специальная группа пользователей, наделенных особыми правами. Чаще всего модератор отвечает за соблюдение пользователями правил сайта. Точный перечень полномочий и обязанностей модератора на каждом сайте свой, но чаще всего полномочия, присвоенные этой группе, применяются к модераторам только <em>в тех разделах, которые они модерируют</em>. За пределами этих разделов модераторы являются такими же пользователями, как и все остальные.';
$helptxt['membergroups'] = 'Существует два вида групп пользователей:
    <ul class="normallist">
        <li><strong>Постоянная группа:</strong> В постоянную группу, пользователи автоматически не заносятся. Для того чтобы поместить пользователя в такую группу, администратор форума должен установить необходимую группу в профиле пользователя.</li>
        <li><strong>Группа основанная на сообщениях:</strong> В отличии от постоянной группы, группа основанная на сообщениях не может быть присвоена администратором пользователю. Пользователи автоматически переходят из группы в группу, набирая необходимое количество сообщений.</li>
    </ul>';

$helptxt['calendar_how_edit'] = 'Вы можете редактировать события, путем нажатия на красную звездочку (*).';

$helptxt['maintenance_backup'] = 'Здесь можно создать резервную копию вашей базы данных.<br /><br />Рекомендуется периодически выполнять это действие.';
$helptxt['maintenance_rot'] = 'Здесь можно <strong>окончательно</strong > и <strong>бесповоротно</strong > удалить старые темы. Рекомендуется сначала сделать резервную копию базы данных, а затем удалять старые темы.<br /><br />Используйте осторожно.';
$helptxt['maintenance_members'] = 'Здесь можно <strong>окончательно</strong> и <strong>бесповоротно</strong> удалить учетные записи пользователей форума. <strong>Категорически</strong> рекомендуется сначала сделать резервную копию базы данных, чтобы быть уверенными что не удалите чего-то лишнего.<br /><br />Используйте осторожно.';

$helptxt['avatar_server_stored'] = 'Здесь можно позволить пользователям выбирать аватары из хранящихся на сервере. Они, как правило, расположены в том же месте что и SMF в директории для аватаров.<br /> Подсказка: если Вы создадите поддиректории в директории аватаров, получатся &quot;категории&quot;.
';
$helptxt['avatar_external'] = 'Если данная опция включена, пользователи смогут указывать прямые URL-адреса на аватары, которые хотят использовать. Однако помните, что слишком большие аватары могут разрушить шаблон вашего форума, приведя к искажению его внешнего вида.';
$helptxt['avatar_download_external'] = 'Эта функция позволяет скачивать аватары с указанных URL-адресов.';
$helptxt['avatar_action_too_large'] = 'This setting therefore lets you reject images (from other sites) that are too big, or tells the user\'s browser to resize them, or to download them to your server.<br><br>If users put in very large images as their avatars and resize in the browser, it could cause very slow loading for your users - it does not actually resize the file, it just displays it smaller. So a digital photo, for example, would still be loaded in full and then resized only when displayed - so for users this could get quite slow and use a lot of bandwidth.<br><br>On the other hand, downloading them means using your bandwidth and server space, but you also ensure that images are smaller, so it should be faster for users. (Note: downloading and resizing requires either the GD library, or ImageMagick using either the Imagick or MagickWand extensions)';
$helptxt['avatar_upload'] = 'Эта опция напоминает параметр &quot;Разрешить пользователям использовать внешние аватары&quot;, за тем исключением, что аватары будут загружаться на сервер и уменьшаться согласно выставленным Вами настройкам.<br /><br />Слишком большое количество аватаров приведет к заметному увеличению занятого пространства, так что используйте эту опцию осторожно.';
$helptxt['avatar_download_png'] = 'Формат PNG, как правило, занимает больше места, но изображения выглядят качественней. Если функция выключена, будет использоваться формат JPEG (Размер файлов меньше, но и качество ниже).';

$helptxt['disableHostnameLookup'] = 'Это отключит запрос имени хоста пользователя. На некоторых серверах эта функция работает медленно. Не забывайте, что функция Бана может стать менее эффективной, так как Вы могли поставить Бан именно на имя хоста.';

$helptxt['search_weight_frequency'] = 'Здесь можно установить релевантность поиска.<br /><br />При выборе опции &quot;Релевантность поиска по количеству сообщений в теме&quot; определяется процент отсеивания сообщений, максимум из которых будут составлять темы, в которых имеется максимальное количество ответов, содержащих искомое слово или фразу.';
$helptxt['search_weight_age'] = 'При выборе варианта &quot;Релевантность поиска по возрасту последних сообщений&quot; Вы определяете процент отсеивания сообщений, первыми из которых будут составлять темы, с последними по времени сообщениями, в которых имеется искомое слово или фраза.';
$helptxt['search_weight_length'] = 'При выборе варианта &quot;Релевантность поиска по величине темы&quot; определяется процент отсеивания сообщений, первыми из которых будут составлять темы, с максимальным количеством сообщений, в которых имеется искомое слово или фраза.';
$helptxt['search_weight_subject'] = 'При выборе варианта &quot;Релевантность поиска по названию темы сообщений&quot; определяется процент отсеивания сообщений, первыми из которых будут составлять темы, в названии которых будет содержаться искомое слово или фраза.';
$helptxt['search_weight_first_message'] = 'При выборе варианта &quot;Релевантность поиска по содержащимся первым сообщениям&quot; определяется процент отсеивания тем, в первых сообщениях которых будет содержаться искомое слово или фраза.';
$helptxt['search_weight_sticky'] = 'Параметры релевантности используются для того чтобы определить уместность результатов поиска. Измените параметры релевантности, чтобы результаты поиска соответствовали важным вещам для вашего форума. К примеру, новости форума могут иметь высокую важность для релевантности по \'возрасту последнего сообщения\'. Все параметры относительно друг друга должны быть целыми положительными числами..<br /><br /> Этот параметр следит за прикрепленными темами и увеличивает релевантность.';
$helptxt['search'] = 'Здесь производится настройка всех параметров функции поиска.';
$helptxt['search_why_use_index'] = 'Индексирование может намного улучшить работу поиска на вашем форуме. Особенно, когда число сообщений увеличивается, поиск без индексирования занимает больше времени и увеличивает нагрузку на вашу базу данных. Если ваш форум содержит более пятидесяти тысяч сообщений, можно создать индексирование чтобы уменьшить нагрузку на форум.<br /><br />Обратите внимание, индексирование может занимать некоторое место. Полнотекстовое индексирование построено на MySQL-индексировании. Это относительно компактно (приблизительно тот же размер что и таблица с сообщениями), но большинство слов не индексируется, и большинство запросов обрабатываются очень медленно. Выборочное индексирование зачастую занимает больше места (в зависимости от ваших настроек может доходить до 3-х кратного размера таблицы с сообщениями), но это намного быстрее чем полнотекстовое и намного стабильнее.';

$helptxt['see_admin_ip'] = 'IP-адреса показываются администраторам и модераторам. Помните, что IP периодически меняются.<br /><br />Пользователи могут видеть собственные IP-адреса.';
$helptxt['see_member_ip'] = 'Ваш IP-адрес будет виден только вам и модераторам.  Помните, что IP периодически меняется.<br /><br />Вы не можете видеть IP-адреса других пользователей, а они не могут видеть ваш.';
$helptxt['whytwoip'] = 'SMF использует различные методы для обнаружения IP-адресов пользователей. Как правило, оба метода приводят к отображению одного и того же адреса, однако в некоторых случаях может обнаружиться даже несколько адресов. В этом случае в логи записываются оба адреса и в дальнейшем их можно использовать для отслеживания и бана определенных пользователей.';

$helptxt['ban_cannot_post'] = '&quot;Нельзя оставлять сообщения&quot; означает, что пользователь может только просматривать форум и не может оставлять в темах свои ответы или создавать новые темы.';

$helptxt['posts_and_topics'] = '
    <ul class="normallist">
        <li>
            <strong>Настройка отправки сообщений</strong><br />
            Изменение некоторых настроек, касающихся отправки сообщений. Здесь можно включить проверку орфографии.
        </li><li>
            <strong>BB-теги</strong><br />
            Здесь можно выбрать, какие тэги можно использовать пользователям.
        </li><li>
            <strong>Нецензурные слова</strong>
            Для очистки форума от нецензурных выражений можно использовать эту функцию. Выбранные слова будут заменены на указанные вами.
        </li><li>
            <strong>Настройки тем</strong>
            Изменение настроек тем. Количество отображаемых тем на странице, включение или выключение прикрепленных тем, количество сообщений для определения темы как популярной или очень популярной&nbsp;и&nbsp;т.&nbsp;д.
        </li>
    </ul>';

$helptxt['spider_mode'] = 'Sets the logging level.<br>
Standard - Logs minimal spider activity.<br>
Moderate - Provides more accurate statistics.<br>
Agressive - As for &quot;Moderate&quot; but logs data about each page visited.';

$helptxt['spider_group'] = 'При выборе группы для пауков, когда гость определяется в качестве поискового робота, ему будут автоматически присвоены определенные &quot;запреты&quot; этой группы, в добавление к обычным правам для гостей. Вы можете использовать это для ограничения поисковых роботов при их посещении вашего форума. Можно, например, создать новую группу под названием &quot;Пауки&quot;, задать для нее ряд запрещающих параметров (просмотр профилей&nbsp;и&nbsp;т.&nbsp;п.) и выбрать её здесь.<br />Примечание: механизм обнаружения пауков не совершенен и не всегда срабатывает, особенно для тех поисковых систем, которые пока не добавлены.';
$helptxt['show_spider_online'] = 'С помощью этого параметра можно выбрать, кому будут видны пауки (их имена, количество) в &quot;списке пользователей онлайн&quot;. Доступные варианты:
	<ul class="normallist">
		<li>
			<strong>Ни для кого</strong><br />
			Пауки будут отображаться в виде обычных гостей.
		</li><li>
			<strong>Показывать количество пауков</strong><br />
			На главной странице будет отображено текущее количество находящихся на форуме пауков.
		</li><li>
			<strong>Показывать детали о пауках</strong><br />
			Имя каждого паука будет доступно для просмотра любому пользователю, на главной странице и на странице &quot;Кто онлайн&quot;.
		</li><li>
			<strong>Показывать всю инфу, но только админам</strong><br />
                        Как указано выше, только Администраторы могут видеть статус пауков &mdash; всем остальным пользователям пауки будут представляться в виде гостей.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Выберите шаблон поздравительного сообщения с Днём рождения, который будет использоваться при отправке поздравлений пользователям. В двух полях ниже будут показаны тема сообщения и его текст.<br /><strong>Примечание:</strong> Выбор того или иного варианта данного параметра не включает автоматическую рассылку поздравлений. Для этого необходимо зайти в <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" class="new_win">Диспетчер задач</a> и убедиться, что задание &quot;Отправление поздравлений с Днем рождения&quot; включено.';
$helptxt['pm_bcc'] = 'При отправке личного сообщения можно добавить скрытого адресата, который не будет виден остальным адресатам сообщения.';

$helptxt['move_topics_maintenance'] = 'Это позволит переместить все сообщения из одного раздела в другой.';
$helptxt['maintain_reattribute_posts'] = 'Вы можете использовать данную функцию для присвоения сообщений гостей определенным зарегистрированным пользователям форума. Это полезно, если, к примеру, какой-нибудь пользователь сначала удалил свою учетную запись, а потом пожалел о содеянном и попросил вернуть ему все его старые сообщения.';
$helptxt['chmod_flags'] = 'Вы можете вручную установить нужные права доступа для выделенных файлов. Для этого введите CHMOD значение (в виде трехзначного числа). Примечание: на Windows-системах это не будет иметь никакого эффекта.';

$helptxt['postmod'] = 'В этой секции модераторы (с достаточным набором прав) могут одобрять любые сообщения и темы перед их публикацией на форуме.';

$helptxt['field_show_enclosed'] = 'Помещает форму для ввода текста пользователем между некоторым текстом или HTML. Это добавляет больше свободы при вводе сообщений, изображений или любых других встраиваемых объектов. Например:<br /><br />
		&lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br />
		Можно использовать следующие переменные:<br />
		<ul class="normallist">
			<li>{INPUT} &mdash; Данные, вводимые пользователем.</li>
			<li>{SCRIPTURL} &mdash; Веб-адрес форума.</li>
			<li>{IMAGES_URL} &mdash; URL-адрес папки изображений текущей темы оформления.</li>
			<li>{DEFAULT_IMAGES_URL} &mdash; URL-адрес папки изображений темы оформления по умолчанию (default).</li>
		</ul>';

$helptxt['custom_mask'] = 'Маска ввода важна для безопасности вашего форума. Проверка при вводе пользователями данных может помочь предотвращению использования этих данных неожиданным для вас образом. В маске используются простые регулярные выражения.<br /><br />
	<div class="smalltext" style="margin: 0 2em">
		&quot;[A-Za-z]+&quot; &mdash; Соответствие всем символам алфавита в верхнем и нижнем регистрах.<br />
		&quot;[0-9]+&quot; &mdash; Соответствие всем числовым символам.<br />
		&quot;[A-Za-z0-9]{7}&quot; &mdash; Соответствие всем символам алфавита в верхнем и нижнем регистрах, а также семизначным числовым значениям.<br />
		&quot;[^0-9]?&quot; &mdash; Запрет любого соответствия числовым значениям.<br />
		&quot;^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$&quot; &mdash; Разрешать только 3 или 6-символьные шестнадцатеричные коды.<br />
	</div><br /><br />
	Кроме того, могут быть определены специальные метасимволы ?+*^$ и {xx}.
	<div class="smalltext" style="margin: 0 2em">
		? &mdash; Одно соответствие предыдущему выражению.<br />
		+ &mdash; Одно или более соответствий предыдущему выражению.<br />
		* &mdash; Ни одного соответствия предыдущему выражению.<br />
		{xx} &mdash; Точное число из предыдущего выражения.<br />
		{xx,} &mdash; Точное число или больше из предыдущего выражения.<br />
		{,xx} &mdash; Точное число или меньше из предыдущего выражения.<br />
		{xx,yy} &mdash; Точное соответствие между двумя числами из предыдущего выражения.<br />
		^ &mdash; Начало строки.<br />
		$ &mdash; Конец строки.<br />
		\\ &mdash; Escapes the next character.<br />
	</div><br /><br />
	Дополнительную информацию по данному вопросу можно найти в интернете.';

$helptxt['topic_move_any'] = 'If checked, users will be allowed to move topics to any board they can see. Otherwise, they will only be able to move them to boards where they can post new topics.';

$helptxt['alert_pm_new'] = 'Notifications of new personal messages do not appear in the Alerts pane, but appear in the "My Messages" list instead.';
$helptxt['alert_event_new'] = 'This will send out an alert or email as requested if there is a new calendar event added. However, if that event is posted and a topic is added, you will not get an alert for the event if you\'re already following that board - the alert from following the board would cover this.';

$helptxt['force_ssl'] = '<b>Test SSL and HTTPS on your server properly before enabling this, it may cause your forum to become inaccessible.</b> Enable maintenance mode if you are unable to access the forum after enabling this';
$helptxt['image_proxy_enabled'] = 'Required for embedding external images when in full SSL';
$helptxt['image_proxy_secret'] = 'Keep this a secret, protects your forum from hotlinking images. Change it in order to render current hotlinked images useless';
$helptxt['image_proxy_maxsize'] = 'Maximum image size that the SSL image proxy will cache: bigger images will be not be cached. Cached images are stored in your SMF cache folder, so make sure you have enough free space.';

?>