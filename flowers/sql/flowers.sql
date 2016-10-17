/*
Navicat MySQL Data Transfer

Source Server         : Test_DB1
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : flowers

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2016-10-17 17:55:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `articles`
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(2) DEFAULT NULL,
  `article_name` varchar(255) DEFAULT NULL,
  `article_text` text,
  `article_keywords` text,
  `article_description` text,
  `article_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`),
  CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '1', 'Адиантум  ', 'Адиантум  (ADIANTUM) имеет тонкие прочные стебли, нежные листья и изящное строение. Они нуждаются во влажном воздухе, тепле и тени — это растения для террариума или затененного зимнего сада, а не гостиной.', 'Адиантум  ', 'Адиантум Радди (Adiantum raddianum), пожалуй, самый простой для выращивания.', 'anturium_uhod.jpg');
INSERT INTO `articles` VALUES ('2', '1', 'Асплениум ', 'Асплениум (АSPLENIUM) нужна тень и влажная атмосфера. Есть два основных типа, которые выращивают как комнатные растения, и они выглядят совершенно не похожими друг на друга. Во-первых, это асплениум гнездовой (Asplenium nidus).', 'Асплениум ', 'Асплениум ', 'anturium_uhod.jpg');
INSERT INTO `articles` VALUES ('3', '1', 'Платицериум ', 'Платицериум (PLATYCERIUM) или плоскорог — имеет большие и эффектные вайи. Название этого вида папоротника обязано своим огромным листьям, как правило, разделенным на концах на лопасти, напоминающие олений рог. Их вайи бывают двух различных типов — стерильные и спороносные.', 'Платицериум ', 'Платицериум ', 'anturium_uhod.jpg');
INSERT INTO `articles` VALUES ('4', '1', 'Диксония ', 'Диксония (DICKSONIА) в молодости представляет собой прелестное горшечное растение, но в зрелом возрасте образует высокое дерево со стволом 3-6 м высотой. Подходит для больших помещений.', 'Диксония ', 'Диксония ', 'anturium_uhod.jpg');
INSERT INTO `articles` VALUES ('5', '1', 'Пеллея ', 'Пеллея (PELLAEA) имеет необычную для папоротника особенность — она предпочитает сухие местообитания.', 'Пеллея ', 'Пеллея ', 'anturium_uhod.jpg');
INSERT INTO `articles` VALUES ('6', '1', 'Многоножка', 'Многоножка, полиподиум (POLYPODIUM) – это вид комнатного папоротника с глубоко рассеченными листьями на тонких стеблях. У него есть 2 необычные особенности — корневище ползет по поверхности, и она способна расти в сухом воздухе.', 'Многоножка', 'Многоножка', 'anturium_uhod.jpg');
INSERT INTO `articles` VALUES ('7', '4', 'фиалка Вильямса', 'фиалка Вильямса\r\nСинонимы: Анютины глазки\r\n\r\nОбласть распространения: В культуре повсеместно.\r\n\r\nОкраски цветка, как и у фиалки Виттрока, самые разнообразные, с пятнами и штриховкой других окрасок. Цветение начинается в конце апреля и продолжается в течение всего теплого сезона. Условия выращивания. Предпочитает питательные, влажные и рыхлые почвы, солнечные или полутенистые места. Очень холодостойка, нейтральна к длине дня.', 'фиалка Вильямса', 'фиалка Вильямса', 'anturium_uhod.jpg');
INSERT INTO `articles` VALUES ('8', '4', 'фиалка Виттрока', 'фиалка Виттрока\r\n\r\n многолетник сложного гибридного происхождения, созданный с участием фиалки трехцветной (V. tricolor), фиалки алтайской (V. altaica), фиалки желтой (V. lutea) и фиалки рогатой (V. cornuta). Сильноветвящееся растение компактной или полураскидистой формы высотой 15-40 см. Листья очередные, черешчатые, с городчатыми краями, яйцевидной или овальной формы снизу и узкие наверху побега.', 'фиалка Виттрока', 'фиалка Виттрока', 'anturium_uhod.jpg');
INSERT INTO `articles` VALUES ('9', '4', 'Швайцер Ризен ', 'С 1927 года известна группа Швайцер Ризен (Schweizer Riesen, «Швейцарский великан»), имеющая крупные цветки диаметром 6-7 см, низкие компактные растения, высокую зимостойкость и обильное раннее цветение. Сорта фиалок этой группы быстро завоевали популярность во многих странах и широко возделываются в настоящее время.', 'Швайцер Ризен ', 'Швайцер Ризен ', 'anturium_uhod.jpg');
INSERT INTO `articles` VALUES ('10', '2', 'Адиантум ', 'Род адиантумов достаточно большой и включает в себя около 200 видов многолетних папоротников, растущих преимущественно в тропической и субтропической зоне.\r\nИсточник: http://dizaynland.ru/paporotniki/adiantum', 'Адиантум ', 'Адиантум ', 'anturium_uhod.jpg');
INSERT INTO `articles` VALUES ('11', '2', 'Азолла ', 'Азолла -  папоротник, образующий на водной глади настоящий плотный ковер, походящий на кружевной мох.', 'Азолла ', 'Азолла ', 'anturium_uhod.jpg');
INSERT INTO `articles` VALUES ('12', '3', 'Традесканция Блоссфельда ', '(Tradescantia blossfeldiana) - многолетнее травянистое растение с опушенными свисающими зеленовато-красными стеблями. Листья с остроконечной верхушкой, сверху темно-зеленые, снизу фиолетовые.', 'Традесканция Блоссфельда ', 'Традесканция Блоссфельда ', 'anturium_uhod.jpg');
INSERT INTO `articles` VALUES ('13', '3', 'Традесканция зебрина', 'Традесканция зебрина или полосатая (Tradescantia Zebrina) иногда описывается как отдельный род, в других источниках – как представитель рода Традесканция (Tradescantia). Имеет заостренные на конце полосатые листья до 5 см длиной на ползучих или свисающих стеблях. На бледно-зеленом листе сверху серебристые полосы. Нижняя сторона листа красно-лиловая. Цветки мелкие розово-лиловые.\r\n\r\nТрадесканция зебрина или полосатая (Tradescantia Zebrina) иногда описывается как отдельный род, в других источниках – как представитель рода Традесканция (Tradescantia). Имеет заостренные на конце полосатые листья до 5 см длиной на ползучих или свисающих стеблях. На бледно-зеленом листе сверху серебристые полосы. Нижняя сторона листа красно-лиловая. Цветки мелкие розово-лиловые.\r\n\r\nТрадесканция зебрина или полосатая (Tradescantia Zebrina) иногда описывается как отдельный род, в других источниках – как представитель рода Традесканция (Tradescantia). Имеет заостренные на конце полосатые листья до 5 см длиной на ползучих или свисающих стеблях. На бледно-зеленом листе сверху серебристые полосы. Нижняя сторона листа красно-лиловая. Цветки мелкие розово-лиловые.\r\n\r\nТрадесканция зебрина или полосатая (Tradescantia Zebrina) иногда описывается как отдельный род, в других источниках – как представитель рода Традесканция (Tradescantia). Имеет заостренные на конце полосатые листья до 5 см длиной на ползучих или свисающих стеблях. На бледно-зеленом листе сверху серебристые полосы. Нижняя сторона листа красно-лиловая. Цветки мелкие розово-лиловые.\r\nТрадесканция зебрина или полосатая (Tradescantia Zebrina) иногда описывается как отдельный род, в других источниках – как представитель рода Традесканция (Tradescantia). Имеет заостренные на конце полосатые листья до 5 см длиной на ползучих или свисающих стеблях. На бледно-зеленом листе сверху серебристые полосы. Нижняя сторона листа красно-лиловая. Цветки мелкие розово-лиловые.\r\n\r\nТрадесканция белоцветковая (Tradescantia albiflora Kunth)и - самый известный вид традесканции. Травянистое растение с ползучими стеблями. Листья яйцевидные или широко-ланцетные, острые, 5 см длиной, 2,5 см шириной. Цветки белые, цветет редко, только на хорошо освещенных местах.\r\n\r\n\r\n', 'Традесканция зебрина', 'Традесканция зебрина', 'anturium_uhod.jpg');

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `category_description` text,
  `category_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Кактусы', 'Кактусы одни из самых неприхотливых комнатных растений, но есть несколько правил, которые кактусоводы придерживаются при разведении кактусов. Многочисленные виды кактусов впадают осенью в спячку. В это время им не требуется воды, света и питания. \r\n\r\nCтоит лишь только попробовать выращивать хотя бы один кактус, как потом и не заметишь, что места на подоконнике уже не хватает, а первый кактус цветёт, третий только собирается, а четвёртый и вовсе редкий экземпляр. \r\nСовет. Не хватает места для всей коллекции кактусов на подоконнике??? Покорим воздушное пространство! Подвесим несколько ампелей с кактусами к потолку! Для этих целей хорошо подойдут кактусы с листовидными свисающимися побегами. Красиво смотрится в ампеле плетевидный кактус. Ухаживать за этими растениями будет гораздо легче, если выращивать их гидропонным способом: не придется поливать их и опрыскивать.', 'kaktus.jpg');
INSERT INTO `categories` VALUES ('2', 'Папоротники', 'Легенда о папоротнике, цветущем в ночь на Ивана Купала, имеет к нашей семье непосредственное отношение. Мой дед когда-то в молодости ходил именно в полночь с 6 на 7 июля в лес, чтобы увидеть, как цветёт папоротник. И он утверждал, что только нечистая сила не позволила ему это cделать: поднялся ветер, невесть откуда появились кони, встали на дыбы. Дед испугался и убежал с того места.\r\n\r\nПапоротник действительно одно из самых загадочных растений на Земле, хотя бы по той причине, что его история насчитывает миллионы лет. Ученые-археологи и сейчас находят окаменелости с отпечатками листьев папоротниковых растений.', 'paporotnic.jpg');
INSERT INTO `categories` VALUES ('3', 'Традесканции', 'Традесканция (лат. Tradescantia) принадлежит семейству коммелиновые и включает в себя до 30 видов. Родина традесканции – умеренные и тропические пояса Америки. Название рода происходит от имени садовника Джона Традесканта, который работал у короля Англии Карла I и первым описал этот род растений. Народные названия – Камнеломка и Бабьи сплетни.\r\n\r\nЭто невысокий травянистый многолетник с прямыми или ползучими побегами. Листья очередные, а в зависимости от вида имеют ланцетную, эллиптическую или яйцевидную форму. Соцветия вырастают из пазух верхушечных листьев. Традесканция является одним из самых популярных ампельных растений, выращиваемых в комнатных условиях. Прищипка помогает сделать растение более ветвистым и густым. Традесканцию чаще всего выращивают в подвесных вазах или на высоких полках, чтобы побеги могли свисать. Цветет традесканция сине-фиолетовыми и просто синими цветками даже в комнатах.\r\n\r\nИспользуют растение и в аквариумах – её ставят возле аквариума так, чтобы побеги могли опуститься в воду, образовав тем самым коврик зеленого цвета. Обладает традесканция и лекарственными свойствами – нейтрализует электромагнитное излучение и очищает воздух в помещении. Если срезать ветки традесканции и поставить их в воду, то простоять они могут от нескольких месяцев до года, если добавлять иногда в воду удобрений.', 'trades.jpg');
INSERT INTO `categories` VALUES ('4', 'Фиалки', 'Комнатные фиалки – одни из самых любимых комнатных цветов у многих растениеводов. Благодаря разнообразию расцветок и достаточной простоте в уходе эти цветы пользуются огромной популярностью. По описанию комнатные фиалки схожи между собой, однако имеется ряд различий. В основном, это касается оттенков соцветий и формы листьев.\r\n\r\nНазвания сортов комнатных фиалок (как самых распространенных, так и редких видов), а также фотографии цветов предлагаются вашему вниманию на этой странице.', 'fialka.jpg');
INSERT INTO `categories` VALUES ('10', 'Алое', 'Что про эту категорию растений', null);
INSERT INTO `categories` VALUES ('13', 'Алое', 'Что проwsdfsad эту категорию растений', null);