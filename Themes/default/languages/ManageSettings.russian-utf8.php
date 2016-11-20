<?php
// Version: 2.1 Beta 3; ManageSettings

global $scripturl;

$txt['modSettings_desc'] = 'Этот раздел позволяет изменять настройки различных функций и основные параметры форума. Пожалуйста, просмотрите <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">настройки темы оформления</a> для изменения дополнительных параметров. Можно прочитать краткое описание каждой настройки, нажав на значок (?) рядом с ней.';
$txt['modification_settings_desc'] = 'Данный раздел содержит настройки модов, установленных на форуме';

$txt['modification_no_misc_settings'] = 'Установленных модов, имеющих настройки, в данном разделе нет.';

$txt['pollMode'] = 'Голосования';
$txt['disable_polls'] = 'Запретить голосования';
$txt['enable_polls'] = 'Разрешить голосования';
$txt['polls_as_topics'] = 'Отображать в виде тем';
$txt['allow_guestAccess'] = 'Разрешить гостям просматривать форум';
$txt['userLanguage'] = 'Разрешить пользователям выбирать язык форума';
$txt['allow_hideOnline'] = 'Разрешить пользователям скрывать свой онлайн-статус';
$txt['titlesEnable'] = 'Разрешить надпись над аватаром';
$txt['enable_buddylist'] = 'Разрешить список друзей/игнорируемых';
$txt['default_personal_text'] = 'Подпись под аватаром по умолчанию';
$txt['default_personal_text_note'] = 'Personal text to assign to newly registered members.';
$txt['time_format'] = 'Формат времени по умолчанию';
$txt['setting_time_offset'] = 'Разница во времени <div class="smalltext">(изменяется и в профилях пользователей.)</div>';
$txt['setting_time_offset_note'] = '(added to the member specific option)';
$txt['setting_default_timezone'] = 'Временная зона сервера';
$txt['failed_login_threshold'] = 'Количество неудачных попыток входа';
$txt['loginHistoryDays'] = 'Days to keep login history';
$txt['lastActive'] = 'Время, в течение которого пользователь считается активным';
$txt['trackStats'] = 'Включить подробную статистику';
$txt['hitStats'] = 'Включить статистику просмотров (статистика должна быть включена)';
$txt['enableCompressedOutput'] = 'Использовать сжатие трафика';
$txt['disableTemplateEval'] = 'Отключить проверку шаблонов темы оформления';
$txt['databaseSession_enable'] = 'Хранить сессии в базе данных';
$txt['databaseSession_loose'] = 'Разрешать браузерам возвращаться на кэшированную страницу';
$txt['databaseSession_lifetime'] = 'Продолжительность сессии в секундах:';
$txt['error_log_desc'] = 'The error log, if enabled, will log every error encountered by users using your forum. This can be an invaluable aid to identifying forum problems.';
$txt['enableErrorLogging'] = 'Включить протоколирование ошибок';
$txt['enableErrorQueryLogging'] = 'Включать в лог ошибок текст SQL-запроса к базе данных';
$txt['pruningOptions'] = 'Разрешить выполнять очистку логов';
$txt['pruneErrorLog'] = 'Удалять записи в логе ошибок старше <div class="smalltext">(0 &mdash; запретить)</div>';
$txt['pruneModLog'] = 'Удалять записи в  логе модерации старше <div class="smalltext">(0 &mdash; запретить)</div>';
$txt['pruneBanLog'] = 'Удалять логи бана старше:<div class="smalltext">(0 &mdash; запретить)</div>';
$txt['pruneReportLog'] = 'Удалять записи в логе докладов модератору старше <div class="smalltext">(0 &mdash; запретить)</div>';
$txt['pruneScheduledTaskLog'] = 'Удалять записи в логе диспетчера задач старше<div class="smalltext">(0 &mdash; запретить)</div>';
$txt['pruneSpiderHitLog'] = 'Удалять записи в логе активности поисковых машин старше<div class="smalltext">(0 &mdash; запретить)</div>';
$txt['cookieTime'] = 'Время действия cookies (в минутах)';
$txt['localCookies'] = 'Использовать локальное хранение cookies<div class="smalltext">(SSI с этой функцией работать не будет.)</div>';
$txt['globalCookies'] = 'Использовать отдельные cookies для поддоменов<div class="smalltext">(сначала отключите локальное хранение cookies!)</div>';
$txt['globalCookiesDomain'] = 'Main domain used for subdomain independent cookies';
$txt['invalid_cookie_domain'] = 'The domain introduced seems to be invalid, please check it and save again.';
$txt['secureCookies'] = 'Шифровать cookies<div class="smalltext">(Применяется только при использовании HTTPS-соединений &mdash; в остальных случаях не требуется!)</div>';
$txt['httponlyCookies'] = 'Force cookies to be made accessible only through the HTTP protocol';
$txt['securityDisable'] = 'Отключить проверку пароля при входе в админку';
$txt['securityDisable_moderate'] = 'Disable moderation security';
$txt['send_validation_onChange'] = 'Требовать одобрения учётной записи после смены электронного адреса';
$txt['approveAccountDeletion'] = 'Запрашивать одобрение админа при удалении пользователем своего аккаунта';
$txt['autoFixDatabase'] = 'Автоматически восстанавливать поврежденные таблицы';
$txt['allow_disableAnnounce'] = 'Разрешить пользователям отказываться от уведомлений форума';
$txt['disallow_sendBody'] = 'Не отправлять текст сообщения в уведомлениях';
$txt['enable_ajax_alerts'] = 'Allow AJAX Desktop Notifications for Alerts';
$txt['jquery_source'] = 'Source for the jQuery Library';
$txt['jquery_custom_label'] = 'Custom';
$txt['jquery_custom'] = 'Custom url to the jQuery Library';
$txt['jquery_local'] = 'Local';
$txt['jquery_cdn'] = 'Google CDN';
$txt['jquery_auto'] = 'Auto';
$txt['queryless_urls'] = 'Использовать укороченные URL-адреса <div class="smalltext"><strong>Только для Apache/Lighttpd!</strong></div>';
$txt['minimize_files'] = 'Minimize css and JavaScript files';
$txt['queryless_urls_note'] = 'Apache/Lighttpd only';
$txt['enableReportPM'] = 'Разрешить жалобы на личные сообщения';
$txt['max_pm_recipients'] = 'Максимальное количество получателей при отправке личного сообщения <div class="smalltext">(0 &mdash; без ограничений, на администраторов не распространяется)</div>';
$txt['max_pm_recipients_note'] = '(0 for no limit, admins are exempt)';
$txt['pm_posts_verification'] = 'Количество сообщений, после которого не нужно вводить код при отсылке ЛС <div class="smalltext">(0 &mdash; без ограничений, на администраторов не распространяется)</div>.';
$txt['pm_posts_verification_note'] = '(0 for no limit, admins are exempt)';
$txt['pm_posts_per_hour'] = 'Количество ЛС, которое может отослать пользователь в течение одного часа <div class="smalltext">(0 &mdash; без ограничений, на модераторов не распространяется)</div>';
$txt['pm_posts_per_hour_note'] = '(0 for no limit, moderators are exempt)';
$txt['compactTopicPagesEnable'] = 'Ограничить количество отображаемых страниц';
$txt['contiguous_page_display'] = 'Формат отображения нескольких страниц:';
$txt['to_display'] = 'для отображения';
$txt['todayMod'] = 'Разрешить функцию &quot;Сегодня&quot;';
$txt['today_disabled'] = 'Запретить';
$txt['today_only'] = 'Только Сегодня';
$txt['yesterday_today'] = 'Сегодня и Вчера';
$txt['onlineEnable'] = 'Отображать статус онлайн/оффлайн в сообщениях пользователей';
$txt['defaultMaxMembers'] = 'Количество пользователей на страницу (в списке пользователей)';
$txt['timeLoadPageEnable'] = 'Отображать время, затраченное на создание страницы';
$txt['disableHostnameLookup'] = 'Не отображать названия хостов пользователей';
$txt['who_enabled'] = 'Отображать список "Сейчас на форуме"';
$txt['meta_keywords'] = 'Ключевые слова, соответствующие форуму <div class="smalltext">Оставьте пустым для отключения.</div>';
$txt['meta_keywords_note'] = 'For search engines. Leave blank for default.';
$txt['settings_error'] = 'Warning: Updating of Settings.php failed, the settings cannot be saved.';
$txt['image_proxy_enabled'] = 'Enable Image Proxy';
$txt['image_proxy_secret'] = 'Image Proxy Secret';
$txt['image_proxy_maxsize'] = 'Maximum file size of images to cache (in KB)';
$txt['force_ssl'] = 'Forum SSL mode';
$txt['force_ssl_off'] = 'Disable SSL';
$txt['force_ssl_auth'] = 'Enable SSL for Authentication (Login and Register)';
$txt['force_ssl_complete'] = 'Force SSL throughout the forum';

// Like settings.
$txt['enable_likes'] = 'Enable likes';

// Mention settings.
$txt['enable_mentions'] = 'Enable mentions';

$txt['caching_information'] = 'SMF поддерживает кэширование с помощью акселераторов. Поддерживаются следующие акселераторы: <ul class="normallist"> <li>APC</li> <li>Memcached</li> <li>Zend Platform/Performance Suite (не Zend Optimizer)</li> <li>XCache</li> </ul> Кэширование будет работать лучше, если PHP скомпилирован с поддержкой одного из упомянутых выше акселераторов или на сервере доступен memcached. Если ни один из акселераторов не установлен, SMF будет использовать файловое кэширование.';
$txt['detected_no_caching'] = '<strong class="alert">На сервере не обнаружено поддерживаемых SMF акселераторов. Вместо них будет использовано файловое кэширование.</strong>';
$txt['detected_accelerators'] = '<strong class="success">SMF has detected the following accelerators: %1$s</strong>';

$txt['cache_enable'] = 'Уровень кэширования';
$txt['cache_off'] = 'Кэширование отключено';
$txt['cache_level1'] = 'Уровень 1 (Рекомендуется)';
$txt['cache_level2'] = 'Уровень 2';
$txt['cache_level3'] = 'Уровень 3 (Не рекомендуется)';
$txt['cache_memcached'] = 'Настройки Memcache:';
$txt['cache_accelerator'] = 'Caching Accelerator';
$txt['default_cache'] = 'SMF file based caching';
$txt['apc_cache'] = 'APC';
$txt['memcached_cache'] = 'Memcached';
$txt['zend_cache'] = 'Zend Platform/Performance Suite';
$txt['xcache_cache'] = 'XCache';

$txt['loadavg_warning'] = '<span class="error">Обратите внимание: приведенные ниже настройки необходимо изменять с осторожностью. Установка для любого из этих параметров слишком низкого значения может привести к полной <strong>неработоспособности</strong> форума! Текущая средняя нагрузка: <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Включить балансировку нагрузки по среднему значению (load averages)';
$txt['loadavg_auto_opt'] = 'Порог для отключения автоматической оптимизации базы данных';
$txt['loadavg_search'] = 'Порог для отключения поиска';
$txt['loadavg_allunread'] = 'Порог для отключения функции "Все непрочитанные сообщения"';
$txt['loadavg_unreadreplies'] = 'Порог для отключения функции "Непрочитанные ответы"';
$txt['loadavg_show_posts'] = 'Порог для отключения функции "Показать сообщения пользователя"';
$txt['loadavg_userstats'] = 'Threshold to disabling showing user statistics';
$txt['loadavg_bbc'] = 'Threshold to disabling BBC formatting when showing posts';
$txt['loadavg_forum'] = 'Порог для <strong>полного</strong> отключения форума';
$txt['loadavg_disabled_windows'] = '<span class="error">Балансировка нагрузки не поддерживается Windows-серверами.</span>';
$txt['loadavg_disabled_osx'] = '<span class="error">Load balancing support is not available on OS:X.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Балансировка нагрузки отключена в настройках вашего хостинга.</span>';

$txt['setting_password_strength'] = 'Требования к длине пароля пользователей';
$txt['setting_password_strength_low'] = 'Низкое &mdash; минимум 4 символа';
$txt['setting_password_strength_medium'] = 'Среднее &mdash; не может совпадать с именем пользователя';
$txt['setting_password_strength_high'] = 'Высокое &mdash; сочетание различных символов';
$txt['setting_enable_password_conversion'] = 'Allow password hash conversion';

$txt['antispam_Settings'] = 'Борьба со спамом';
$txt['antispam_Settings_desc'] = 'Здесь можно настроить и активировать проверку контрольным кодом для защиты форума от ботов и спама.';
$txt['setting_reg_verification'] = 'Требовать проверку на странице регистрации';
$txt['posts_require_captcha'] = 'Количество сообщений, до достижения которого требуется проверка кодом';
$txt['posts_require_captcha_desc'] = '(0 &mdash; без ограничений, на модераторов не распространяется)';
$txt['search_enable_captcha'] = 'Использовать код проверки при поиске гостями';
$txt['setting_guests_require_captcha'] = 'Гости смогут воспользоваться поиском только после прохождения проверки';
$txt['setting_guests_require_captcha_desc'] = '(Устанавливается автоматически, если ниже указано минимальное количество сообщений)';
$txt['question_not_defined'] = 'You need to add a question and answer for your forum\'s default language (%1$s) otherwise users will not be able to fill in a CAPTCHA, meaning no registration.';

$txt['configure_verification_means'] = 'Настройка метода проверки кодом';
$txt['setting_qa_verification_number'] = 'Количество проверочных вопросов';
$txt['setting_qa_verification_number_desc'] = '(0 &mdash; запретить; или введите количество)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Включение проверки антиспама требуется для отсеивания различных ботов при вводе данных. Помните, что пользователь будет вынужден пройти <em>ВСЕ</em> включенные проверки.</span>';
$txt['setting_visual_verification_type'] = 'Сложность изображения визуальной проверки';
$txt['setting_visual_verification_type_desc'] = 'Более сложное изображение тяжелее обходить и ботам и людям';
$txt['setting_image_verification_off'] = 'Запретить';
$txt['setting_image_verification_vsimple'] = 'Очень простое &mdash; Обычный текст на изображении';
$txt['setting_image_verification_simple'] = 'Простое &mdash; Цветные символы, без шума';
$txt['setting_image_verification_medium'] = 'Среднее &mdash; Накладывать шум и линии на цветные символы';
$txt['setting_image_verification_high'] = 'Высокое &mdash; Наклонные символы, со значительными шумами и линиями';
$txt['setting_image_verification_extreme'] = 'Очень высокое &mdash; Наклонные символы, шум, линии и блоки';
$txt['setting_image_verification_sample'] = 'Пример';
$txt['setting_image_verification_nogd'] = '<strong>Обратите внимание:</strong> так как на данном сервере не установлена библиотека GD, то настройки сложности ничего не изменят.';
$txt['setup_verification_questions'] = 'Проверочные вопросы';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Если хотите, чтобы пользователи отвечали на проверочные вопросы для отсеивания ботов, то введите вопросы и ответы на них в таблице ниже. Можно использовать BB-теги для форматирования вопросов, они не учитываются системой. Ответы от пользователей буду приниматься в регистронезависимом виде.</span>';
$txt['setup_verification_question'] = 'Вопрос';
$txt['setup_verification_answer'] = 'Ответ';
$txt['setup_verification_add_more'] = 'Добавить еще один вопрос';
$txt['setup_verification_add_answer'] = 'Add another answer';

$txt['moderation_settings'] = 'Настройки системы предупреждений';
$txt['setting_warning_enable'] = 'Разрешить систему предупреждения пользователей';
$txt['setting_warning_watch'] = 'Уровень предупреждения &mdash; пользователь под наблюдением<div class="smalltext">Уровень предупреждения пользователя, после которого он становится под наблюдением (0 &mdash; отключить).</div>';
$txt['setting_warning_watch_note'] = 'The user warning level after which a user watch is put in place.';
$txt['setting_warning_moderate'] = 'Уровень предупреждения &mdash; премодерация сообщений<div class="smalltext">Уровень предупреждения пользователя, после которого все сообщения требуют модерации (0 &mdash; отключить).</div>';
$txt['setting_warning_moderate_note'] = 'The user warning level after which a user has all posts moderated.';
$txt['setting_warning_mute'] = 'Уровень предупреждения &mdash; пользователь молчит<div class="smalltext">Уровень предупреждения пользователя, после которого пользователь не может оставлять сообщения (0 &mdash; отключить).</div>';
$txt['setting_warning_mute_note'] = 'The user warning level after which a user cannot post any further.';
$txt['setting_user_limit'] = 'Максимальное количество баллов предупреждений в день<div class="smalltext">Данное значение определяет максимально количество баллов предупреждения, которое может выставить пользователю Модератор в течение 24 часов (0 &mdash; без ограничений).</div>';
$txt['setting_user_limit_note'] = 'This value is the maximum amount of warning points a single moderator can assign to a user in a 24 hour period - 0 for no limit.';
$txt['setting_warning_decrement'] = 'Уменьшение количества баллов предупреждений каждые 24 часа<div class="smalltext">Применяется только к тем пользователям, у которых не было новых предупреждений в течение суток (0 &mdash; запретить).</div>';
$txt['setting_warning_decrement_note'] = 'Only applies to users not warned within last 24 hours.';
$txt['setting_warning_show'] = 'Пользователи, которые могут видеть статус предупреждений. <div class="smalltext">Если запрещено, то только Модераторы смогут видеть этот статус.</div>';
$txt['setting_warning_show_note'] = 'Determines who can see the warning level of users on the forum.';
$txt['setting_warning_show_mods'] = 'Только модераторы';
$txt['setting_warning_show_user'] = 'Модераторы и предупреждаемые пользователи';
$txt['setting_warning_show_all'] = 'Все пользователи';

$txt['signature_settings'] = 'Настройка подписей';
$txt['signature_settings_desc'] = 'Используйте данные настройки для определения вида подписи пользователя в SMF.';
$txt['signature_settings_warning'] = 'Обратите внимание, что по умолчанию эти настройки не применяются к уже существующим подписям. Нажмите <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">сюда</a> для применения настроек ко всем существующим подписям.';
$txt['signature_settings_applied'] = 'The updated rules have been applied to the existing signatures.';
$txt['signature_enable'] = 'Разрешить подписи';
$txt['signature_max_length'] = 'Максимальное количество символов<div class="smalltext">(0 &mdash; без ограничений)</div>';
$txt['signature_max_lines'] = 'Максимальное количество строк<div class="smalltext">(0 &mdash; без ограничений)</div>';
$txt['signature_max_images'] = 'Максимальное количество изображений<div class="smalltext">(0 &mdash; без ограничений; смайлы не учитываются)</div>';
$txt['signature_max_images_note'] = '(0 for no max - excludes smileys)';
$txt['signature_allow_smileys'] = 'Разрешать смайлы в подписях';
$txt['signature_max_smileys'] = 'Максимальное количество смайлов<div class="smalltext">(0 &mdash; без ограничений)</div>';
$txt['signature_max_image_width'] = 'Максимальная ширина изображения в подписи (пикселей)<div class="smalltext">(0 &mdash; без ограничений)</div>';
$txt['signature_max_image_height'] = 'Максимальная высота изображения в подписи (пикселей)<div class="smalltext">(0 &mdash; без ограничений)</div>';
$txt['signature_max_font_size'] = 'Максимальный размер шрифта в подписи<div class="smalltext">(0 &mdash; без ограничений)</div>';
$txt['signature_bbc'] = 'Разрешённые BB-теги';

$txt['custom_profile_title'] = 'Расширенные поля';
$txt['custom_profile_desc'] = 'В данном разделе можно создавать индивидуальные поля профиля с учетом требований данного форума.';
$txt['custom_profile_active'] = 'Активное';
$txt['custom_profile_fieldname'] = 'Название поля';
$txt['custom_profile_fieldtype'] = 'Тип поля';
$txt['custom_profile_fieldorder'] = 'Field Order';
$txt['custom_profile_make_new'] = 'Новое поле';
$txt['custom_profile_none'] = 'Ни одного поля пока не создано!';
$txt['custom_profile_icon'] = 'Иконка';

$txt['custom_profile_type_text'] = 'Текст';
$txt['custom_profile_type_textarea'] = 'Многострочный текст';
$txt['custom_profile_type_select'] = 'Список выбора';
$txt['custom_profile_type_radio'] = 'Выбор варианта';
$txt['custom_profile_type_check'] = 'Переключатель';

$txt['custom_add_title'] = 'Добавить поле профиля';
$txt['custom_edit_title'] = 'Изменить поле профиля';
$txt['custom_edit_general'] = 'Настройки отображения';
$txt['custom_edit_input'] = 'Настройки ввода';
$txt['custom_edit_advanced'] = 'Расширенные настройки';
$txt['custom_edit_name'] = 'Название';
$txt['custom_edit_desc'] = 'Описание';
$txt['custom_edit_profile'] = 'Раздел профиля';
$txt['custom_edit_profile_desc'] = 'Раздел профиля для изменения настроек.';
$txt['custom_edit_profile_none'] = 'Нет';
$txt['custom_edit_registration'] = 'Отображать при регистрации';
$txt['custom_edit_registration_disable'] = 'Нет';
$txt['custom_edit_registration_allow'] = 'Да';
$txt['custom_edit_registration_require'] = 'Да, обязательное';
$txt['custom_edit_display'] = 'Отображать при просмотре темы';
$txt['custom_edit_mlist'] = 'Show on memberlist';
$txt['custom_edit_picktype'] = 'Тип поля';

$txt['custom_edit_max_length'] = 'Максимальная длина';
$txt['custom_edit_max_length_desc'] = '(0 &mdash; без ограничений)';
$txt['custom_edit_dimension'] = 'Измерение';
$txt['custom_edit_dimension_row'] = 'Рядов';
$txt['custom_edit_dimension_col'] = 'Столбцов';
$txt['custom_edit_bbc'] = 'Разрешить BB-теги';
$txt['custom_edit_options'] = 'Настройки';
$txt['custom_edit_options_desc'] = 'Оставьте поле выбора пустым для удаления. Будет выбран параметр по умолчанию.';
$txt['custom_edit_options_more'] = 'Дополнительно';
$txt['custom_edit_default'] = 'Значение по умолчанию';
$txt['custom_edit_active'] = 'Активное';
$txt['custom_edit_active_desc'] = 'Если не выбрать, данное поле никому отображаться не будет.';
$txt['custom_edit_privacy'] = 'Права на изменение и просмотр';
$txt['custom_edit_privacy_desc'] = 'Кто может просматривать и изменять данное поле.';
$txt['custom_edit_privacy_all'] = 'Пользователи могут просматривать, владелец изменять';
$txt['custom_edit_privacy_see'] = 'Пользователи могут просматривать, только администратор может изменять';
$txt['custom_edit_privacy_owner'] = 'Пользователи не видят это поле; владелец и администраторы могут изменять';
$txt['custom_edit_privacy_none'] = 'Данное поле видно только администратору';
$txt['custom_edit_can_search'] = 'Выдается в поиске';
$txt['custom_edit_can_search_desc'] = 'По данному полю можно искать в списке пользователей.';
$txt['custom_edit_mask'] = 'Маска';
$txt['custom_edit_mask_desc'] = 'Текстовым полям можно задать маску для проверки вводимых данных.';
$txt['custom_edit_mask_email'] = 'Проверка e-mail';
$txt['custom_edit_mask_number'] = 'Числовая';
$txt['custom_edit_mask_nohtml'] = 'Без HTML';
$txt['custom_edit_mask_regex'] = 'Регулярные выражения в маске (Для экспертов)';
$txt['custom_edit_enclose'] = 'Показывать с дополнительным текстом (По желанию)';
$txt['custom_edit_enclose_desc'] = '<strong>Настоятельно</strong> рекомендуется использовать маску для проверки вводимых данных.';

$txt['custom_edit_order_move'] = 'Move ';
$txt['custom_edit_order_up'] = 'Up';
$txt['custom_edit_order_down'] = 'Down';
$txt['custom_edit_placement'] = 'Выберите размещение';
$txt['custom_profile_placement'] = 'Размещение';
$txt['custom_profile_placement_standard'] = 'Стандартное (с заголовком)';
$txt['custom_profile_placement_icons'] = 'With Icons';
$txt['custom_profile_placement_above_signature'] = 'Above Signature';
$txt['custom_profile_placement_below_signature'] = 'Below Signature';
$txt['custom_profile_placement_below_avatar'] = 'Below Avatar';
$txt['custom_profile_placement_above_member'] = 'Above Username';
$txt['custom_profile_placement_bottom_poster'] = 'Bottom poster info';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Уверены, что хотите удалить это поле? Все текущие данные пользователей будут потеряны!';

$txt['standard_profile_title'] = 'Стандартные поля';
$txt['standard_profile_field'] = 'Поле';
$txt['standard_profile_field_timezone'] = 'Timezone';

$txt['languages_lang_name'] = 'Название языка';
$txt['languages_locale'] = 'Локаль';
$txt['languages_default'] = 'Выбран';
$txt['languages_character_set'] = 'Кодировка';
$txt['languages_users'] = 'Пользователей';
$txt['language_settings_writable'] = 'Предупреждение: Settings.php не доступен для записи, настройки языка по умолчанию не будут сохранены.';
$txt['edit_languages'] = 'Изменить языки';
$txt['lang_file_not_writable'] = '<strong>Предупреждение:</strong> Главный языковой файл (%1$s) не доступен для записи. Вы должны сделать его записываемым до внесения изменений.';
$txt['lang_entries_not_writable'] = '<strong>Предупреждение:</strong> Языковой файл который вы пытаетесь изменить (%1$s) не доступен для записи. Вы должны сделать его записываемым до внесения изменений.';
$txt['languages_ltr'] = 'Справа налево';

$txt['add_language'] = 'Добавить язык';
$txt['add_language_smf'] = 'Загрузить с Simple Machines';
$txt['add_language_smf_browse'] = 'Наберите название языка для поиска или оставьте пустым для отображения всех доступных';
$txt['add_language_smf_install'] = 'Установить';
$txt['add_language_found_title'] = 'Found Languages';
$txt['add_language_smf_found'] = 'Следующие языки были найдены. Нажмите на ссылку "Установить" для установки необходимого языка, после чего воспользуетесь менеджером пакетов для установки.';
$txt['add_language_error_no_response'] = 'Сайт Simple Machines не отвечает. Пожалуйста, попробуйте позже.';
$txt['add_language_error_no_files'] = 'Файлов не найдено.';
$txt['add_language_smf_desc'] = 'Описание';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Версия';

$txt['edit_language_entries_primary'] = 'Ниже приведены настройки для главного языка. Важно выставить правильную локаль &mdash; для Linux-серверов, обычно, ru_RU.CP1251 или ru_RU.UTF8';
$txt['edit_language_entries'] = 'Изменить языковые переменные';
$txt['edit_language_entries_file'] = 'Выберите переменную для изменения';
$txt['languages_dictionary'] = 'Словарь';
$txt['languages_spelling'] = 'Проверка орфографии';
$txt['languages_for_pspell'] = 'Это для <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> &mdash; если установлено';
$txt['languages_rtl'] = 'Включить режим &quot;Справа налево&quot;';

$txt['lang_file_desc_index'] = 'Общие строки';
$txt['lang_file_desc_EmailTemplates'] = 'Шаблоны сообщений';

$txt['languages_download'] = 'Скачать языковой пакет';
$txt['languages_download_note'] = 'Эта страница содержит список всех файлов, которые содержатся в языковом пакете, и некоторую полезную информацию о каждом из них. Все отмеченные файлы будут скопированы.';
$txt['languages_download_info'] = '<strong>Обратите внимание:</strong> если файлы имеют статус &laquo;незаписываемых&raquo;, это означает, что SMF не скопирует их в папку, пока для них не будут установлены соответствующие права на запись.<br />
   Информация о версии файлов отображает последнюю версию SMF, для которой было сделано обновление. Если индикатор зеленый &mdash; это означает, что текущая версия новее, чем установленная на вашем форуме. Если индикатор красный, то установленная версия новее.<br />
   Если файл уже существует на данном форуме, в столбце &quot;Уже существует&quot; будет одно из значений. &quot;Одинаковый&quot; &mdash; файл уже существует в идентичном виде и перезаписывать его необязательно. &quot;Другой&quot; &mdash; содержимое различно и перезапись является оптимальным решением.';

$txt['languages_download_main_files'] = 'Главные файлы';
$txt['languages_download_filename'] = 'Имя файла';
$txt['languages_download_dest'] = 'Путь';
$txt['languages_download_writable'] = 'Записываемая';
$txt['languages_download_version'] = 'Версия';
$txt['languages_download_older'] = 'Установленная версия файлов новее, перезапись не рекомендуется.';
$txt['languages_download_exists'] = 'Уже существует';
$txt['languages_download_exists_same'] = 'Одинаковые';
$txt['languages_download_exists_different'] = 'Другой';
$txt['languages_download_copy'] = 'Копировать';
$txt['languages_download_not_chmod'] = 'Вы не можете продолжить процесс установки, пока выделенные файлы не станут записываемыми.';
$txt['languages_download_illegal_paths'] = 'Пакет содержит неверные пути установки. Пожалуйста, свяжитесь с Simple Machines';
$txt['languages_download_complete'] = 'Установка завершена';
$txt['languages_download_complete_desc'] = 'Языковой пакет успешно установлен. Пожалуйста, нажмите <a href="%1$s">сюда</a> для возврата на страницу языков';
$txt['languages_delete_confirm'] = 'Вы действительно хотите удалить этот языковой пакет?';

$txt['setting_frame_security'] = 'Frame Security Options';
$txt['setting_frame_security_SAMEORIGIN'] = 'Allow Same Origin';
$txt['setting_frame_security_DENY'] = 'Deny all frames';
$txt['setting_frame_security_DISABLE'] = 'Disabled';

$txt['setting_proxy_ip_header'] = 'Reverse Proxy IP Header';
$txt['setting_proxy_ip_header_disabled'] = 'Do not allow any Proxy IP Headers';
$txt['setting_proxy_ip_header_autodetect'] = 'Auto-detect Proxy IP header';
$txt['setting_proxy_ip_servers'] = 'Reverse Proxy Servers IPs';

$txt['select_boards_from_list'] = 'Select boards which apply';

$txt['topic_move_any'] = 'Allow moving of topics to read-only boards';

$txt['defaultMaxListItems'] = 'Maximum number of items per page in lists';

$txt['tfa_mode'] = 'Two-Factor Authentication';
$txt['tfa_mode_forced'] = 'Force on selected membergroups';
$txt['tfa_mode_forcedall'] = 'Force for ALL users';
$txt['tfa_mode_forced_help'] = 'Please enable 2FA in your account in order to be able to force 2FA on other users!';
$txt['tfa_mode_enabled'] = 'Enabled';
$txt['tfa_mode_disabled'] = 'Disabled';
$txt['tfa_mode_subtext'] = 'Allows users to have a second layer of security while logging in, users would need an app like Google Authenticator paired with their account';

?>