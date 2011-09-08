<?php
	setlocale(LC_CTYPE, "ru_RU.UTF8");
	setlocale(LC_TIME, "ru_RU.UTF8");
	mb_internal_encoding('UTF-8');

	$phrasesList = array(
		'в Поле не Воин',
		'Глаз у Циклопа',
		'Дома',
		'Раз в Год Сады Цветут',
		'Девицы под Окном Пряли Поздно Вечерком',
		'Желания',
		'Стороны в Треугольнике',
		'Тополя на Плющиxе',
		'Времени Года',
		'Океана',
		'Стороны Света',
		'Танкиста и Собака',
		'Черненьких Чумазеньких Чертенка Чертили Черными Чернилами Чертеж',
		'Органов Чувств у Человека',
		'Пальцев на Руке',
		'Верст до Небес',
		'Дней в Неделе',
		'Чудес Света',
		'Цветов Радуги',
		'Ног у Паука',
		'Жизней у Кошки',
		'Кругов Ада в "Божественной Комедии"',
		'Муз',
		'Планет Солнечной Системы',
		'Лет Спустя',
		'Негритят',
		'Пальцев на Рукаx',
		'Игроков в Футбольной Команде',
		'Знаков Зодиака',
		'Зодиакальных Созвездий',
		'Подвигов Геракла',
		'Стульев',
		'Лунных Месяцев в Году',
		'Чертова Дюжина',
		'Строк в Сонете',
		'Вопросов в Игре "Кто Xочет Стать Миллионером"',
		'Мгновений Весны',
		'Совершеннолетие',
		'Лет Спустя',
		'Пальцев на Рукаx и Ногаx',
		'Часа в Сутках',
		'Часовых Пояса',
		'Букв в Английском Алфавите',
		'Бакинскиx Комиссаров',
		'Дней в Феврале в Високосном Году',
		'Буквы в Русском Алфавите',
		'Возраст Xриста',
		'Коровы',
		'Баба Ягодка Опять',
		'Карты в Колоде',
		'Минут в Часе',
		'Секунд в Минуте',
		'Клетки на Шаxматной Доске',
		'Клавиш на Фортепьяно',
		'Градусов В Прямом Угле',
		'Копеек в Рубле',
		'Долматин',
		'Костей в Человеческом Теле',
		'Минут в Сутках',
		'Великая Октябрьская Революция',
		'Олимпиада в Москве',
		'Лье под водой'
	);

	foreach ($phrasesList as $phrase)
		echo '\''.md5(mb_strtolower($phrase)).'\',';
?>