<?php
/* $Id$ */

/**
 * Translated by Gosha Sakovich <gt2 at users.sourceforge.net>
 *               Artyom Rabzonov <tyomych at gmx.net>
 *               Nicolay Zakharov <info at melody.org.ru> 16-Dec-2002
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
//$byteUnits = array('Байт', 'кБ', 'МБ', 'ГБ');
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
$month = array('Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y г., %H:%M';
$timespanfmt = '%s дней, %s часов, %s минут и %s секунд';

$strAPrimaryKey = 'Был добавлен первичный ключ к %s';
$strAbortedClients = 'Отменены';
$strAbsolutePathToDocSqlDir = 'Введите абсолютный путь на сервере к директории docSQL, пожалуйста';  
$strAccessDenied = 'В доступе отказано';
$strAccessDeniedExplanation = 'phpMyAdmin попытался соединиться с сервером MySQL, но сервер отверг соединение. Проверьте имя хоста, пользователя и пароль в config.inc.php.';  
$strAction = 'Действие';
$strAddAutoIncrement = 'Добавить значение AUTO_INCREMENT';  
$strAddDeleteColumn = 'Добавить/удалить столбец критерия';
$strAddDeleteRow = 'Добавить/удалить ряд критерия';
$strAddDropDatabase = 'Добавить DROP DATABASE';
$strAddIntoComments = 'Добавить в комментарии';
$strAddNewField = 'Добавить новое поле';
$strAddPriv = 'Добавить новые привилегии';
$strAddPrivMessage = 'Была добавлена новая привилегия';
$strAddPrivilegesOnDb = 'Добавить привилегии на следующую базу'; 
$strAddPrivilegesOnTbl = ' Добавить привилегии на следующую таблицу'; 
$strAddSearchConditions = 'Добавить условия поиска (тело для условия "where"):';
$strAddToIndex = 'Добавить к индексу&nbsp;%s&nbsp;колонку(и)';
$strAddUser = 'Добавить нового пользователя';
$strAddUserMessage = 'Был добавлен новый пользователь.';
$strAddedColumnComment = 'Добавленный комментарий для столбца';  
$strAddedColumnRelation = 'Добавленная связь для столбца';  
$strAdministration = 'Администрирование';
$strAffectedRows = 'Затронутые ряды:';
$strAfter = 'После %s';
$strAfterInsertBack = 'Возврат';
$strAfterInsertNewInsert = 'Вставить новую запись';
$strAll = 'Все';
$strAllTableSameWidth = 'показать все таблицы с такой шириной?';
$strAlterOrderBy = 'Изменить порядок таблицы';
$strAnIndex = 'Был добавлен индекс для %s';
$strAnalyzeTable = 'Анализ таблицы';
$strAnd = 'И';
$strAny = 'Любой';
$strAnyColumn = 'Любая колонка';
$strAnyDatabase = 'Любая база данных';
$strAnyHost = 'Любой хост';
$strAnyTable = 'Любая таблица';
$strAnyUser = 'Любой пользователь';
$strArabic = 'Арабский';  
$strArmenian = 'Армянский';  
$strAscending = 'По возрастанию';
$strAtBeginningOfTable = 'В начало таблицы';
$strAtEndOfTable = 'В конец таблицы';
$strAttr = 'Атрибуты';
$strAutodetect = 'Автодетект';  
$strAutomaticLayout = 'Автоматическая раскладка';  

$strBack = 'Назад';
$strBaltic = 'Балтийский';  
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' Двоичный ';
$strBinaryDoNotEdit = ' Двоичные данные - не редактируются ';
$strBookmarkAllUsers = 'Дать каждому пользователю использовать эту закладку'; 
$strBookmarkDeleted = 'Закладка была удалена.';
$strBookmarkLabel = 'Метка';
$strBookmarkOptions = 'Опции закладки'; 
$strBookmarkQuery = 'Закладка на SQL-запрос';
$strBookmarkThis = 'Закладка на данный SQL-запрос';
$strBookmarkView = 'Только просмотр';
$strBrowse = 'Обзор';
$strBrowseForeignValues = 'Browse foreign values';  
$strBulgarian = 'Болгарский';  
$strBzError = 'phpMyAdmin не может сжать дамп из-за проблем с Bz2 extension в текущей версии PHP. Строго рекомендуется установить переменной <code>$cfg[\'BZipDump\']</code> в Вашем конфигурационном файле phpMyAdmin значение <code>FALSE</code>. Если Вы хотите использовать Bz2-компрессию, Вам необходимо обновить PHP. Смотрите PHP bug report %s для более подробной информации.';
$strBzip = 'архивировать в bzip';

$strCSVOptions = 'Опции CSV';
$strCannotLogin = 'Невозможно войти в MySQL';
$strCantLoad = 'не могу загрузить расширение %s,<br />проверьте конфигурацию PHP, пожалуйста';  
$strCantLoadRecodeIconv = 'Не могу загрузить iconv или recode, необходимые для перекодирования символов. Проверьте php-конфигурацию и разрешите их использование или запретите перекодирование символов в phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Невозможно переименовать индекс в PRIMARY!';
$strCantUseRecodeIconv = 'Не могу использовать iconv функции: ни libiconv, ни recode_string, пока не будут загружены extension reports. Проверьте php-конфигурацию.';
$strCardinality = 'Количество элементов';
$strCarriage = 'Возврат каретки: \\r';
$strCaseInsensitive = 'нечувствительный к регистру';  
$strCaseSensitive = 'чувствительный к регистру ';  
$strCentralEuropean = 'Центрально-Европейский';  
$strChange = 'Изменить';
$strChangeCopyMode = 'Создать нового пользователя с такими же привилегиями и ...';  
$strChangeCopyModeCopy = '... сохранить старого.';  
$strChangeCopyModeDeleteAndReload = ' ... удалить старого из таблиц пользователей и перезагрузить привилегии.';  
$strChangeCopyModeJustDelete = ' ... удалить старого из таблиц пользователей.';  
$strChangeCopyModeRevoke = ' ... отменить все активные привилегии старого и затем удалить его.';  
$strChangeCopyUser = 'Изменить информацию логина/ Копировать пользователя';  
$strChangeDisplay = 'Выберите поле для отображения';
$strChangePassword = 'Изменить пароль';
$strCharset = 'Кодировка';  
$strCharsetOfFile = 'Кодировка файла:';
$strCharsets = 'Кодировки';  
$strCharsetsAndCollations = 'Кодировки и сравнения';  
$strCheckAll = 'Отметить все';
$strCheckDbPriv = 'Проверить привилегии БД';
$strCheckPrivs = 'Проверить привилегии';  
$strCheckPrivsLong = 'Проверить привилегии для базы &quot;%s&quot;.';  
$strCheckTable = 'Проверить таблицу';
$strChoosePage = 'Выберите страницу для редактирования';
$strColComFeat = 'Показать комментария столбцов';
$strCollation = 'Сравнение';  
$strColumn = 'Колонка';
$strColumnNames = 'Названия колонок';
$strColumnPrivileges = 'Привилегии, специфичные для столбца'; 
$strCommand = 'Команда';
$strComments = 'Комментарии';
$strCompleteInserts = 'Полная вставка';
$strCompression = 'Сжатие';
$strConfigFileError = 'phpMyAdmin не может прочитать данные из конфигурационного файла!  <br />Возможная причина - синтаксическая ошибка.<br />Вызовите этот файл (config.inc.php) непосредственно из браузера. Если будут сообщения об ошибках - исправьте их. Если пустая страница - все в порядке';
$strConfigureTableCoord = 'Измените координаты таблицы %s';
$strConfirm = 'Вы действительно хотите сделать это?';
$strConnections = 'Соединения';
$strConstraintsForDumped = 'Constraints for dumped tables'; 
$strConstraintsForTable = 'Constraints for table';
$strCookiesRequired = 'Cookies должны быть включены после этого места.';
$strCopyTable = 'Скопировать таблицу в (база данных<b>.</b>таблица):';
$strCopyTableOK = 'Таблица %s была скопирована в %s.';
$strCopyTableSameNames = ' Не могу скопировать таблицу саму в себя !';  
$strCouldNotKill = 'phpMyAdmin не смог удалить thread %s. Возможно, он уже закрыт.';
$strCreate = 'Создать';
$strCreateIndex = 'Создать индекс на&nbsp;%s&nbsp;колонках';
$strCreateIndexTopic = 'Создать новый индекс';
$strCreateNewDatabase = 'Создать новую БД';
$strCreateNewTable = 'Создать новую таблицу в БД %s';
$strCreatePage = 'Создать новую страницу';
$strCreatePdfFeat = 'Создание PDF-схемы';
$strCriteria = 'Критерий';
$strCroatian = 'Хорватский';  
$strCyrillic = 'Кириллический';  
$strCzech = 'Чешский';  

$strDBComment = 'Комментарий БД: ';
$strDBGContext = 'Контекст';  
$strDBGContextID = 'Контекст ID';  
$strDBGHits = 'Hits';  
$strDBGLine = 'Line';  
$strDBGMaxTimeMs = 'Максимальное время, ms';  
$strDBGMinTimeMs = 'Минимальное время, ms';  
$strDBGModule = 'Модуль';  
$strDBGTimePerHitMs = 'Time/Hit, ms';  
$strDBGTotalTimeMs = 'Итоговое время, ms';  
$strDanish = 'Датский';  
$strData = 'Данные';
$strDataDict = 'Словарь данных';
$strDataOnly = 'Только данные';
$strDatabase = 'БД ';
$strDatabaseExportOptions = 'Опции экспорта БД';
$strDatabaseHasBeenDropped = 'База данных %s была удалена.';
$strDatabaseNoTable = 'Эта БД не содержит таблиц!';
$strDatabaseWildcard = 'База данных (возможно использование шаблонов):';
$strDatabases = 'Базы Данных';
$strDatabasesDropped = '%s БД были успешно удалены.';  
$strDatabasesStats = 'Статистика баз данных';
$strDatabasesStatsDisable = 'Отключить статистику';  
$strDatabasesStatsEnable = 'Включить статистику';  
$strDatabasesStatsHeavyTraffic = 'Замечание: Включение статистики базы данных может спровоцировать большой трафик между веб-сервером и сервером MySQL.';  
$strDbPrivileges = ' Привилегии, специфичные для базы данных'; 
$strDbSpecific = 'специфично для БД';  
$strDefault = 'По умолчанию';
$strDefaultValueHelp = 'Для значений по умолчанию просто введите единственное значение без экранирования и квотирования, используя этот формат: a';  
$strDelOld = 'В текущей странице есть ссылки на таблицы, котрые больше не существуют. Вы хотите удалить эти ссылки?';  
$strDelete = 'Удалить';
$strDeleteAndFlush = 'Удалить всех пользователей и перезагрузить привилегии.'; 
$strDeleteAndFlushDescr = 'Это лучший способ, но перезагрузка привилегий может занять некоторое время.'; 
$strDeleteFailed = 'Неудачное удаление!';
$strDeleteUserMessage = 'Был удален пользователь %s.';
$strDeleted = 'Ряд был удален';
$strDeletedRows = 'Следующие ряды были удалены:';
$strDeleting = 'Удаление %s'; 
$strDescending = 'По убыванию';
$strDescription = 'Описание';  
$strDictionary = 'словарь';  
$strDisabled = 'Недоступно';
$strDisplay = 'Показать';
$strDisplayFeat = 'Показать дополнительные возможности';
$strDisplayOrder = 'Порядок просмотра:';
$strDisplayPDF = 'Показать PDF-схему';
$strDoAQuery = 'Выполнить "запрос по примеру" (символ подстановки: "%")';
$strDoYouReally = 'Вы действительно желаете ';
$strDocu = 'Документация';
$strDrop = 'Уничтожить';
$strDropDB = 'Уничтожить БД %s';
$strDropSelectedDatabases = 'Удалить выбранные БД';  
$strDropTable = 'Удалить таблицу';
$strDropUsersDb = 'Удалить базы, которые имеют такие же имена как и пользователи.'; 
$strDumpComments = 'Включить комментарий к столбцу как inline SQL-комментарий';
$strDumpSaved = 'Дамп сохранён в файл %s.';  
$strDumpXRows = 'Дамп %s записей, начиная с %s.';
$strDumpingData = 'Дамп данных таблицы';
$strDynamic = 'динамический';

$strEdit = 'Правка';
$strEditPDFPages = 'Изменить PDF-страницы';
$strEditPrivileges = 'Редактирование привилегий';
$strEffective = 'Эффективность';
$strEmpty = 'Очистить';
$strEmptyResultSet = 'MySQL вернула пустой результат (т.е. ноль рядов).';
$strEnabled = 'Доступно';
$strEnd = 'Конец';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglish = 'Английский';  
$strEnglishPrivileges = ' Примечание: привилегии MySQL задаются по-английски ';
$strError = 'Ошибка';
$strEstonian = 'Эстонский';  
$strExcelOptions = 'Опции Excel';  
$strExecuteBookmarked = 'Выпонить отмеченный запрос';  
$strExplain = 'Описать SQL';
$strExport = 'Экспорт';
$strExportToXML = 'Экспорт в XML-формат';
$strExtendedInserts = 'Расширенные вставки';
$strExtra = 'Дополнительно';

$strFailedAttempts = 'Неудачные попытки';
$strField = 'Поле';
$strFieldHasBeenDropped = 'Поле %s было удалено';
$strFields = 'Поля';
$strFieldsEmpty = ' Пустой счетчик полей! ';
$strFieldsEnclosedBy = 'Поля заключены в';
$strFieldsEscapedBy = 'Поля экранируются';
$strFieldsTerminatedBy = 'Поля разделены';
$strFileAlreadyExists = 'Файл %s уже существует на сервере, измените имя или воспользуйтесь опцией перезаписи.';  
$strFileCouldNotBeRead = 'Файл не может быть прочитан';  
$strFileNameTemplate = 'Шаблон имени файла';
$strFileNameTemplateHelp = 'Используйте __DB__ для имени БД, __TABLE__ для имени таблицы и %s любые strftime%s опции для задания времени, расширение будет добавлено автомаически. Любой другой текст будет сохранён.';
$strFileNameTemplateRemember = 'запомнить шаблон';
$strFixed = 'фиксированный';
$strFlushPrivilegesNote = 'Замечание: phpMyAdmin получает пользовательские привилегии прямо из таблиц привилегий MySQL. Содержимое этих таблиц может отличаться от от привилегий, которые использует сервер, если изменения были внесены вручную. В этом случае вы должны %sперезагрузить привилегии%s перед продолжением работы.';
$strFlushTable = 'Сбросить кэш таблицы ("FLUSH")';
$strFormEmpty = 'Требуется значение для формы!';
$strFormat = 'Формат';
$strFullText = 'Полные тексты';
$strFunction = 'Функция';

$strGenBy = 'Созданный';
$strGenTime = 'Время создания';
$strGeneralRelationFeat = 'Основные возможности связей';
$strGerman = 'Немецкий';  
$strGlobal = 'global';  
$strGlobalPrivileges = 'Глобальные привилегии';
$strGlobalValue = 'Глобальное значение';
$strGo = 'Пошел';
$strGrantOption = 'Предоставлять';
$strGrants = 'Права';
$strGreek = 'Греческий';  
$strGzip = 'архивировать в gzip';

$strHasBeenAltered = 'была изменена.';
$strHasBeenCreated = 'была создана.';
$strHaveToShow = 'Вы должны выбрать не менее одной колонки для отображения';
$strHebrew = 'Иврит';  
$strHome = 'К началу';
$strHomepageOfficial = 'Официальная страница phpMyAdmin';
$strHomepageSourceforge = 'Загрузка phpMyAdmin на Sourceforge';
$strHost = 'Хост';
$strHostEmpty = 'Пустое имя хоста!';
$strHungarian = 'Венгерский';  

$strId = 'ID';
$strIdxFulltext = 'ПолнТекст';
$strIfYouWish = 'Если Вы желаете загрузить только некоторые столбцы таблицы, укажите разделенный запятыми список полей.';
$strIgnore = 'Игнорировать';
$strIgnoringFile = 'Игнорирую файл %s';  
$strImportDocSQL = 'Импорт docSQL файлов';
$strImportFiles = 'Импорт файлов';  
$strImportFinished = 'Импорт завешён';  
$strInUse = 'используется';
$strIndex = 'Индекс';
$strIndexHasBeenDropped = 'Индекс %s был удален';
$strIndexName = 'Имя индекса&nbsp;:';
$strIndexType = 'Тип индекса&nbsp;:';
$strIndexes = 'Индексы';
$strInnodbStat = 'InnoDB статус';  
$strInsecureMySQL = 'Ваш конфигурационный файл содержит настройки (пользователь root без пароля), которые относятся к привилегированному пользователю MySQL (по умолчанию). Ваш MySQL сервер запущен с этими настройками по умолчанию, открытый для вторжений, поэтому Вам настоятельно рекомендуется устранить эту дыру в безопасности.';
$strInsert = 'Вставить';
$strInsertAsNewRow = 'Вставить новый ряд';
$strInsertNewRow = 'Вставить новый ряд';
$strInsertTextfiles = 'Вставить текстовые файлы в таблицу';
$strInsertedRowId = 'Вставить id ряда:';  
$strInsertedRows = 'Добавлены ряды:';
$strInstructions = 'Инструкции';
$strInternalNotNecessary = '* Внутренняя связь не обязательна, когда она также существует в InnoDB.'; 
$strInternalRelations = 'Внутренние связи';
$strInvalidName = '"%s" - является зарезервированным словом, вы не можете использовать его в качестве имени базы данных/таблицы/поля.';

$strJapanese = 'Японский';  
$strJumpToDB = 'Перейти к базе &quot;%s&quot;.';  
$strJustDelete = 'Просто удалить пользователей из таблиц привилкгий.'; 
$strJustDeleteDescr = '&quot;Удалённые&quot; пользователи всё ещё смогут работать с с ервером как обычно до перезагрузки привилегий.'; 

$strKeepPass = 'Не менять пароль';
$strKeyname = 'Имя ключа';
$strKill = 'Убить';
$strKorean = 'Корейский';  

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'Опции LaTeX';  
$strLandscape = 'Ландшафт';
$strLatexCaption = 'Заголовок таблицы';
$strLatexContent = 'Содержимое таблицы __TABLE__';
$strLatexContinued = '(продолжено)';
$strLatexContinuedCaption = 'Продолженный заголовок таблицы';
$strLatexIncludeCaption = 'Включить заголовок таблицы';
$strLatexLabel = 'Label key';
$strLatexStructure = 'Структура таблицы __TABLE__'; 
$strLength = 'Длина';
$strLengthSet = 'Длины/Значения*';
$strLimitNumRows = 'записей на страницу';
$strLineFeed = 'Символ окончания линии: \\n';
$strLines = 'Линии';
$strLinesTerminatedBy = 'Строки разделены';
$strLinkNotFound = 'Связь не найдена';
$strLinksTo = 'Связь с';
$strLithuanian = 'Латвийский';  
$strLoadExplanation = 'Лучший метод отмечен по умолчанию, но вы можете выбрать другой, если этот не сработает.';  
$strLoadMethod = 'Метод LOAD';  
$strLocalhost = 'Local';
$strLocationTextfile = 'Месторасположение текстового файла';
$strLogPassword = 'Пароль:';
$strLogServer = 'Сервер';
$strLogUsername = 'Пользователь:';
$strLogin = 'Вход в систему';
$strLoginInformation = 'Информация логина'; 
$strLogout = 'Выйти из системы';

$strMIME_MIMEtype = 'MIME-тип';
$strMIME_available_mime = 'Доступные MIME-типы';
$strMIME_available_transform = 'Доступные трансформации';
$strMIME_description = 'Описание';
$strMIME_file = 'Имя файла';
$strMIME_nodescription = 'Нет доступных описаний для этой трансформации.<br />Пожалуйста, спросите автора что делает %s.';
$strMIME_transformation = 'Трансформация браузера';
$strMIME_transformation_note = 'Для списка доступных опций трансформации и трансформаций их MIME-типов кликните на %sописание трансформаций%s';
$strMIME_transformation_options = 'Опции трансформации';
$strMIME_transformation_options_note = 'Пожалуйсиа, введите значения для трансформации, используя этот формат: \'a\',\'b\',\'c\'...<br />Если вам нужно поставить бэкслэш("\") или кавычку("\'"), экранируйте их (например \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_without = 'MIME-типы, выделенные курсивом, не имеют отдельной функции трансформации';
$strMissingBracket = 'Пропущена скобка';
$strModifications = 'Модификации были сохранены';
$strModify = 'Изменить';
$strModifyIndexTopic = 'Изменить индекс';
$strMoreStatusVars = 'Другие статусные переменные';
$strMoveTable = 'Переместить таблицы в (база данных<b>.</b>таблица):';
$strMoveTableOK = 'Таблица %s была перемещена в %s.';
$strMoveTableSameNames = 'Не могу переместить таблицу саму в себя!';  
$strMultilingual = 'многоязычный';  
$strMustSelectFile = 'Вы должны выбрать файл для вставки.';  
$strMySQLCharset = 'MySQL-кодировка';
$strMySQLReloaded = 'MySQL перезагружена.';
$strMySQLSaid = 'Ответ MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% на %pma_s2% как %pma_s3%';
$strMySQLShowProcess = 'Показать процессы';
$strMySQLShowStatus = 'Показать состояние MySQL';
$strMySQLShowVars = 'Показать системные переменные MySQL';

$strName = 'Имя';
$strNext = 'Далее';
$strNo = 'Нет';
$strNoDatabases = 'БД отсутствуют';
$strNoDatabasesSelected = 'Ни одна БД не выбрана.';  
$strNoDescription = 'нет описания';
$strNoDropDatabases = 'Команда "Удалить БД" отключена.';
$strNoExplain = 'Прекратить описание SQL';
$strNoFrames = 'Для работы phpMyAdmin нужен браузер с поддержкой <b>фреймов</b>.';
$strNoIndex = 'Индекс не определен!';
$strNoIndexPartsDefined = 'Части индекса не определены!';
$strNoModification = 'Нет изменений';
$strNoOptions = 'В этом формате нет опций';
$strNoPassword = 'Без пароля';
$strNoPermission = 'Веб-серверу не хватает прав для сохранения файла %s.';  
$strNoPhp = 'без PHP-кода';
$strNoPrivileges = 'Без привилегий';
$strNoQuery = 'Нет SQL-запроса!';
$strNoRights = 'Вы не имеете достаточно прав для этого!';
$strNoSpace = 'Не хватает дискового пространства для сохранения файла %s.';  
$strNoTablesFound = 'В БД не обнаружено таблиц.';
$strNoUsersFound = 'Не найден пользователь.';
$strNoUsersSelected = 'Нет выбранных пользователей.'; 
$strNoValidateSQL = 'Не проверять SQL';
$strNone = 'Нет';
$strNotNumber = 'Это не число!';
$strNotOK = 'Не готово';
$strNotSet = 'Таблица <b>%s</b> не найдена';
$strNotValidNumber = ' недопустимое количество рядов!';
$strNull = 'Ноль';
$strNumSearchResultsInTable = '%s записи(ей) в таблице <i>%s</i>';
$strNumSearchResultsTotal = '<b>Итого:</b> <i>%s</i> записи(ей)';
$strNumTables = 'Таблиц';

$strOK = 'Готово';
$strOftenQuotation = 'Обычно кавычки. "По выбору" означает, что только поля char и varchar заключаются в кавычки.';
$strOperations = 'Операции';
$strOptimizeTable = 'Оптимизировать таблицу';
$strOptionalControls = 'По выбору. Контролирует как читать или писать специальные символы.';
$strOptionally = 'По выбору';
$strOptions = 'Опции';
$strOr = 'Или';
$strOverhead = 'Накладные расходы';
$strOverwriteExisting = 'Перезаписать существующий(е) файл(ы)';  

$strPHP40203 = 'Вы используете версию PHP 4.2.3, которая содержит серьезные ошибки при работе с много-байтовыми строками (mbstring). Смотрите PHP bug report 19404. Данная версия PHP не рекомендуется для использования с phpMyAdmin.';
$strPHPVersion = 'Версия PHP';
$strPageNumber = 'Номер страницы:';
$strPaperSize = 'Размер бумаги';  
$strPartialText = 'Частичные тексты';
$strPassword = 'Пароль';
$strPasswordChanged = 'Пароль для %s был успешно изменён.';
$strPasswordEmpty = 'Пустой пароль!';
$strPasswordNotSame = 'Пароли не одинаковы!';
$strPdfDbSchema = 'Структура базы "%s" - страница %s';
$strPdfInvalidPageNum = 'Неопределенный номер PDF-страницы!';
$strPdfInvalidTblName = 'Таблица "%s" не существует!';
$strPdfNoTables = 'Нет таблиц';
$strPerHour = 'в час';
$strPerMinute = 'в минуту';
$strPerSecond = 'в секунду';
$strPhoneBook = 'телефонная книга';  
$strPhp = 'Создать PHP-код';
$strPmaDocumentation = 'Документация по phpMyAdmin';
$strPmaUriError = 'Директива <tt>$cfg[\'PmaAbsoluteUri\']</tt> должна быть установлена в Вашем конфигурационном файле!';
$strPortrait = 'Портрет';
$strPos1 = 'Начало';
$strPrevious = 'Назад';
$strPrimary = 'Первичный';
$strPrimaryKey = 'Первичный ключ';
$strPrimaryKeyHasBeenDropped = 'Первичный ключ был удален';
$strPrimaryKeyName = 'Имя первичного ключа должно быть PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>должно</b> быть признаком <b>только</b> первичного ключа!)';
$strPrint = 'Печать';
$strPrintView = 'Версия для печати';
$strPrintViewFull = 'Распечатать (со всем текстом)'; 
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.';
$strPrivDescAlter = 'Позволяет изменение структуры существующих таблиц.';
$strPrivDescCreateDb = 'Позволяет создание новых баз данных и таблиц.';
$strPrivDescCreateTbl = 'Позволяет создание новых таблиц.';
$strPrivDescCreateTmpTable = 'Позволяет создание временных таблиц.';
$strPrivDescDelete = 'Позволяет удаление данных.';
$strPrivDescDropDb = 'Позволяет удаление ';
$strPrivDescDropTbl = 'Позволяет удаление таблиц.';
$strPrivDescExecute = 'Позволяет запуск хранимых процедур; Не работает в этой версии MySQL.';
$strPrivDescFile = 'Позволяет импортирование и экспортирование данных в файлы.';
$strPrivDescGrant = 'Позволяет добавление пользователей и привилегий без перезагрузки таблиц привилегий.';
$strPrivDescIndex = 'Позволяет создание и удаление индексов.';
$strPrivDescInsert = 'Позволяет вставку и замену данных.';
$strPrivDescLockTables = 'Позволяет блокировку таблиц для текущего потока.';
$strPrivDescMaxConnections = 'Ограничивает количество соединений, которые пользователь может открыть в течение часа.';
$strPrivDescMaxQuestions = 'Ограничивает количество запросов, которые пользователь может отравит в течение часа.';
$strPrivDescMaxUpdates = 'Ограничивает количество команд, изменяющих любую таблицу или базу данных, которые пользователь может выполнить за час.';
$strPrivDescProcess3 = 'Позволяет убивать процессы других пользоваетелей.';
$strPrivDescProcess4 = 'Позволяет просмотр полных запросов в списке процессов.';
$strPrivDescReferences = 'Не работает в этой версии MySQL.';
$strPrivDescReload = 'Позволяет перезагрузку настроек сервера и очистку его кэшей.';
$strPrivDescReplClient = 'Даёт пользователю право спрашивать где находяться slaves / masters.';
$strPrivDescReplSlave = 'Нужен для репликации slaves.';
$strPrivDescSelect = 'Позволяет чтение данных.';
$strPrivDescShowDb = 'Даёт доступ к полному списку баз данных.';
$strPrivDescShutdown = 'Позволяет остановку сервера.';
$strPrivDescSuper = 'Позволяет соединяться, даже если достигнуто максимальное количество соединений; Необходимо для большинства административных задач, таких как установка глобальных переменных или остановка процессов других пользователей.';
$strPrivDescUpdate = 'Позволяет изменение данных.';
$strPrivDescUsage = 'Нет привилегий.';
$strPrivileges = 'Привилегии';
$strPrivilegesReloaded = 'Привилегии были успешно перезагружены.';
$strProcesslist = 'Список процессов';
$strProperties = 'Свойства';
$strPutColNames = 'Укажите наименования полей в первой строке';

$strQBE = 'Запрос&nbsp;по&nbsp;примеру';
$strQBEDel = 'Удалить';
$strQBEIns = 'Вставить';
$strQueryFrame = 'Окно запроса';
$strQueryFrameDebug = 'Отладочная информация';
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';
$strQueryOnDb = 'SQL-запрос БД <b>%s</b>:';
$strQuerySQLHistory = 'История SQL';
$strQueryStatistics = '<b>Статистика запросов</b>: Со времени запуска %s запросов было послано на сервер.';
$strQueryTime = 'Запрос занял %01.4f сек';
$strQueryType = 'Тип запроса';
$strQueryWindowLock = 'Не перезаписывать этот запрос вне окна';  

$strReType = 'Подтверждение';
$strReceived = 'Принято';
$strRecords = 'Записи';
$strReferentialIntegrity = 'Проверить целостность данных:';
$strRelationNotWorking = 'Дополнительные возможности для работы со связанными таблицами недоступны. Для определения причины нажмите %sсюда%s.';
$strRelationView = 'Связанный вид';
$strRelationalSchema = 'Реляционная схема';
$strRelations = 'Связи';  
$strReloadFailed = 'Не удалось перезагрузить MySQL.';
$strReloadMySQL = 'Перезагрузить MySQL';
$strReloadingThePrivileges = 'Перезагрузка привилегий'; 
$strRememberReload = 'Не забудьте перезагрузить сервер.';
$strRemoveSelectedUsers = 'Удалить выделенных пользователей'; 
$strRenameTable = 'Переименовать таблицу в';
$strRenameTableOK = 'Таблица %s была переименована в %s';
$strRepairTable = 'Починить таблицу';
$strReplace = 'Заместить';
$strReplaceNULLBy = 'Заменить NULL на';  
$strReplaceTable = 'Заместить данные таблицы данными из файла';
$strReset = 'Переустановить';
$strResourceLimits = 'Предел ресурсов';
$strRevoke = 'Отменить';
$strRevokeAndDelete = 'Отменить все активные привилегии пользователей и затем удалить их.'; 
$strRevokeAndDeleteDescr = 'Пользователи всё ещё будут иметь USAGE привилегии до перезагрузки привилегий.'; 
$strRevokeGrant = 'Отменить предоставление прав';
$strRevokeGrantMessage = 'Было отменено предоставление прав для %s';
$strRevokeMessage = 'Вы изменили привилегии для %s';
$strRevokePriv = 'Отменить привилегии';
$strRowLength = 'Длина ряда';
$strRowSize = ' Размер ряда ';
$strRows = 'Ряды';
$strRowsFrom = 'рядов от';
$strRowsModeFlippedHorizontal = 'горизонтально(повёрнутые заголовки)';
$strRowsModeHorizontal = 'горизонтальном';
$strRowsModeOptions = 'в %s режиме, заголовки после каждых %s ячеек';
$strRowsModeVertical = 'вертикальном';
$strRowsStatistic = 'Статистика ряда';
$strRunQuery = 'Выполнить Запрос';
$strRunSQLQuery = 'Выполнить SQL запрос(ы) на БД %ы';
$strRunning = 'на %s';
$strRussian = 'Русский';  

$strSQL = 'SQL';
$strSQLOptions = 'Опции SQL';
$strSQLParserBugMessage = 'Возможно у Вас ошибка в SQL-парсере. Пожалуйста, проверьте внимательно Ваш запрос и соответствие кавычек. Возможно также, что Вы пытаетесь закачать бинарный файл вне поля quoted text area. Вы можете попробовать выполнить свой запрос через интерфейс командной строки MySQL. Описание ошибки MySQL сервера дано ниже, возможно оно поможет понять, что же произошло. Если у Вас все равно возникают проблемы или если парсер выдает ошибки там, где интерфейс командной строки работает успешно, попробуйте изменить свой SQL запрос до простых запросов и определить, какой именно вызывает проблемы. Вы можете также прислать отчет об ошибке вместе с блоком данных (секция CUT):';
$strSQLParserUserError = 'Кажется возникла ошибка в Вашем SQL запросе. Описание ошибки от MySQL сервера дано ниже, возможно, оно поможет Вам разобраться';
$strSQLQuery = 'SQL-запрос';
$strSQLResult = 'SQL-результат';
$strSQPBugInvalidIdentifer = 'Неправильный идентификатор';
$strSQPBugUnclosedQuote = 'Незакрытая кавычка';
$strSQPBugUnknownPunctuation = 'Неизвестная строка с пунктуацией';
$strSave = 'Сохранить';
$strSaveOnServer = 'Сохранить на сервере в директории %s';  
$strScaleFactorSmall = 'Масштаб слишком маленький для отображения всей таблицы на одной странице';
$strSearch = 'Искать';
$strSearchFormTitle = 'Искать в базе данных';
$strSearchInTables = 'В таблице(ах):';
$strSearchNeedle = 'Слово(а) или значение(я) для поиска (включая "%") в:';
$strSearchOption1 = 'хоть одно слово';
$strSearchOption2 = 'все слова';
$strSearchOption3 = 'точное соответствие';
$strSearchOption4 = 'регулярное выражение';
$strSearchResultsFor = 'Искать в "<i>%s</i>" %s:';
$strSearchType = 'Искать:';
$strSecretRequired = 'Конфигурационному файлу сейчас нужна секретная фраза (blowfish_secret).';  
$strSelect = 'Выбрать';
$strSelectADb = 'Выберите БД';
$strSelectAll = 'Отметить все';
$strSelectFields = 'Выбрать поля (минимум одно):';
$strSelectNumRows = 'по запросу';
$strSelectTables = 'Выберите таблицу(ы)';
$strSend = 'послать';
$strSent = 'Послано';
$strServer = 'Сервер %s';
$strServerChoice = 'Выбор сервера';
$strServerStatus = 'Текущая информация';
$strServerStatusUptime = 'Этот MySQL сервер работает %s. Он был запущен %s.';
$strServerTabProcesslist = 'Процессы';
$strServerTabVariables = 'Переменные';
$strServerTrafficNotes = '<b>Трафик</b>: Эти таблицы показывают статистику по сетевому трафику MySQL сервера со времени его запуска.';
$strServerVars = 'Переменные и настройки сервера';
$strServerVersion = 'Версия сервера';
$strSessionValue = 'Значение сессии';
$strSetEnumVal = 'Для типов поля "enum" и "set", введите значения по этому формату: \'a\',\'b\',\'c\'...<br />Если вам понадобиться ввести обратную косую черту ("\"") или одиночную кавычку ("\'") среди этих значений, поставьте перед ними обратную косую черту (например, \'\\\\xyz\' или \'a\\\'b\').';
$strShow = 'Показать';
$strShowAll = 'Показать все';
$strShowColor = 'Показать цвет';
$strShowCols = 'Показать колонки';
$strShowDatadictAs = 'Формат словаря данных';
$strShowFullQueries = 'Показывать Полные Запросы';  
$strShowGrid = 'Показать сетку';
$strShowPHPInfo = 'Показать информацию о PHP';
$strShowTableDimension = 'Показать размерность таблицы';
$strShowTables = 'Показать таблицы';
$strShowThisQuery = ' Показать данный запрос снова ';
$strShowingRecords = 'Показывает записи ';
$strSimplifiedChinese = 'Упрощённый китайский';  
$strSingly = '(отдельно)';
$strSize = 'Размер';
$strSort = 'Отсортировать';
$strSortByKey = 'Сортировать по ключу'; 
$strSpaceUsage = 'Используемое пространство';
$strSplitWordsWithSpace = 'Слова, разделенные пробелом (" ").';
$strStatCheckTime = 'Последняя проверка';
$strStatCreateTime = 'Создание';
$strStatUpdateTime = 'Последнее обновление';
$strStatement = 'Выражения';
$strStatus = 'Статус';
$strStrucCSV = 'CSV данные';
$strStrucData = 'Структура и данные';
$strStrucDrop = 'Добавить удаление таблицы';
$strStrucExcelCSV = 'CSV для данных Ms Excel';
$strStrucOnly = 'Только структуру';
$strStructPropose = 'Предлагаемая структура таблицы';
$strStructure = 'Структура';
$strSubmit = 'Выполнить';
$strSuccess = 'Ваш SQL-запрос был успешно выполнен';
$strSum = 'Всего';
$strSwedish = 'Шведский';  
$strSwitchToTable = 'Переключиться на скопированную таблицу';  

$strTable = 'таблица ';
$strTableComments = 'Комментарий к таблице';
$strTableEmpty = 'Пустое название таблицы!';
$strTableHasBeenDropped = 'Таблица %s была удалена';
$strTableHasBeenEmptied = 'Таблица %s была очищена';
$strTableHasBeenFlushed = 'Был сброшен кэш таблицы %s';
$strTableMaintenance = 'Обслуживание таблицы';
$strTableOfContents = 'Оглавление';
$strTableOptions = 'Опции таблицы';  
$strTableStructure = 'Структура таблицы';
$strTableType = 'Тип таблицы';
$strTables = '%s таблиц(ы)';
$strTblPrivileges = ' Привилегии, специфичные для таблицы'; 
$strTextAreaLength = ' Из-за большой длины,<br /> это поле не может быть отредактированно ';
$strThai = 'Таи';  
$strTheContent = 'Содержимое файла было импортировано.';
$strTheContents = 'Содержимое файла замещает содержимое таблицы для рядов с идентичными первичными или уникальными ключами.';
$strTheTerminator = 'Символ окончания полей.';
$strThisHost = 'Этот хост'; 
$strThisNotDirectory = 'Это была не директория';  
$strThreadSuccessfullyKilled = 'Thread %s был удален.';
$strTime = 'Время';
$strToggleScratchboard = 'toggle scratchboard';  
$strTotal = 'всего';
$strTotalUC = 'Всего';
$strTraditionalChinese = 'Традиционный китайский';  
$strTraffic = 'Трафик';
$strTransformation_image_jpeg__inline = 'Отображает предпросмотр, на который можно кликнуть; опции: ширина,высота в пикселах (сохраняет исходный масштаб)';  
$strTransformation_image_jpeg__link = 'Отображает ссылку на это изображение(direct blob download, i.e.).';
$strTransformation_image_png__inline = 'See image/jpeg: inline';  
$strTransformation_text_plain__dateformat = 'Берёт поле TIME, TIMESTAMP или DATETIME и форматирует его в соответствии с вашим локальным форматом даты. Первая опция - это сдвиг (в часах), который будет добавлен к timestamp (По умолчанию: 0). Вторая опция - это другой формат даты в соответствии с параметрами, доступными для функции PHP strftime().';
$strTransformation_text_plain__external = 'ТОЛЬКО LINUX: Запускает внешнее приложение и запоняет поля через стандартный ввод. Возвращает стандартный вывод приложения. По умолчанию Tidy, для форматирования HTML кода. По соображениям безопасности, вы должны вручную отредактировать файл libraries/transformations/text_plain__external.inc.php и вписать программы, которые вы хотите запускать. Первая опция - это номер программы, которую вы хотите использовать, вторая - параметры для программы. Третий параметр при значении 1 будет конвертировать вывод, используя htmlspecialchars() (По умолчанию 1). Четвёртый параметр при значении 1 выставит NOWRAP, так что весь вывод будет отображён без переформатирования (По умолчанию 1)';
$strTransformation_text_plain__formatted = 'Сохраняет исходное форматирование поля. Экранирование не производится.';
$strTransformation_text_plain__imagelink = 'Показывает изображение и ссылку, поле содержит имя файла; первая опция - это префикс вроде "http://domain.com/", вторая - ширина в пикселах, третья - высота.';  
$strTransformation_text_plain__link = 'Отображает ссылку, поле содержит имя файла; первая опция - это префикс вроде "http://domain.com/", вторая - заголовок для ссылки.';  
$strTransformation_text_plain__substr = 'Показывает только часть строки. Первая опция - это сдвиг, определяющий где начинается вывод текста (По умолчанию 0). Вторая опция - это количество возвращаемого текста. Если не определено, то возвращается весь остающийся текст. Третья опция определяет символы, которые будут добавлены к выводу, когда возвращается подстрока. (По умолчанию: ...) .';
$strTransformation_text_plain__unformatted = 'Отображает HTML-код в виде HTML тэгов. HTML форматирование не производится.';
$strTruncateQueries = 'Обрезать Показанные Запросы';  
$strTurkish = 'Турецкий';  
$strType = 'Тип';

$strUkrainian = 'Украинский';  
$strUncheckAll = 'Снять отметку со всех';
$strUnicode = 'Юникод';  
$strUnique = 'Уникальное';
$strUnknown = 'неизвестно';  
$strUnselectAll = 'Снять отметку со всех';
$strUpdComTab = 'Пожалуйста, посмотрите как обновить Column_comments Таблицу в документации';  
$strUpdatePrivMessage = 'Были изменены привилегии для';
$strUpdateProfile = 'Обновить профиль:';
$strUpdateProfileMessage = 'Профиль был обновлен.';
$strUpdateQuery = 'Дополнить запрос';
$strUpgrade = 'Вы должны обновить %s до версии %s или выше.'; 
$strUsage = 'Использование';
$strUseBackquotes = 'Обратные кавычки в названиях таблиц и полей';
$strUseHostTable = 'Использовать таблицу хостов';  
$strUseTables = 'Использовать таблицы';
$strUseTextField = 'Использовать текстовое поле'; 
$strUseThisValue = 'Использовать это значение';  
$strUser = 'Пользователь';
$strUserAlreadyExists = 'Пользователь %s уже существует!'; 
$strUserEmpty = 'Пустое имя пользователя!';
$strUserName = 'Имя пользователя';
$strUserNotFound = 'Выделенный пользователь не был найден в таблице привилегий.'; 
$strUserOverview = 'User overview'; 
$strUsers = 'Пользователи';
$strUsersDeleted = 'Выбранные пользователи были успешно удалены.'; 
$strUsersHavingAccessToDb = 'Пользователи с правами доступа к &quot;%s&quot;';  

$strValidateSQL = 'Проверить SQL';
$strValidatorError = 'Проверка SQL не может быть инициализирована. Проверьте, установлены ли необходимые модули расширений для PHP, описанные в %sдокументации%s.';
$strValue = 'Значение';
$strVar = 'Переменная';
$strViewDump = 'Просмотреть дамп таблицы';
$strViewDumpDB = 'Просмотреть дамп БД';
$strViewDumpDatabases = 'Просмотреть дамп (схему) БД';

$strWebServerUploadDirectory = 'директория, куда помещаются закачанные файлы от web-сервера';
$strWebServerUploadDirectoryError = 'директория, которую Вы установили как "upload" не может быть открыта';
$strWelcome = 'Добро пожаловать в %s';
$strWestEuropean = 'Западно-Европейский';  
$strWildcard = 'шаблон';  
$strWindowNotFound = 'Целевое окно браузера не может быть обновлено. Возможно, вы закрыли родительское окно или ваш браузер блокирует межоконные обновления из-за настроек безопасности';  
$strWithChecked = 'С отмеченными:';
$strWritingCommentNotPossible = 'Написание комментария невозможно';  
$strWritingRelationNotPossible = 'Добавление связи невозможно';  
$strWrongUser = 'Ошибочный логин/пароль. В доступе отказано.';

$strXML = 'XML';

$strYes = 'Да';

$strZeroRemovesTheLimit = 'Замечание: Установка этих опций в  0 (ноль) удаляет лимит.'; 
$strZip = 'архивировать в zip';
// To translate

$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCheckOverhead = 'Check overheaded';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strGeorgian = 'Georgian';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
 = 'Cannot connect: invalid settings.';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strNeedPrimaryKey = 'You should define a primary key for this table.';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strAddIfNotExists = 'Add IF NOT EXISTS';  //to translate
?>
