-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-04-09 05:49:11
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `school`
--

-- --------------------------------------------------------

--
-- 資料表結構 `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL COMMENT '編號',
  `bookname` varchar(32) NOT NULL COMMENT '書名',
  `author` varchar(32) NOT NULL COMMENT '作者',
  `publisher` varchar(32) NOT NULL COMMENT '出版社',
  `pubdate` date NOT NULL COMMENT '出版日期',
  `price` int(5) NOT NULL COMMENT '價格',
  `content` text NOT NULL COMMENT '內容簡介'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `book`
--

INSERT INTO `book` (`id`, `bookname`, `author`, `publisher`, `pubdate`, `price`, `content`) VALUES
(1, '上鎖的房間', '貴志祐介', '台灣角川', '2017-10-16', 300, '　橫跨推理、恐怖、驚悚、犯罪\r\n　　的創作奇才──貴志祐介\r\n　　繼《玻璃之鎚》、《鬼火之家》後，\r\n　　挑戰密室推理的巔峰之作！\r\n\r\n　　防盜顧問榎本\r\n　　＋\r\n　　美女律師純子\r\n　　再度攜手破解層層密室！\r\n\r\n　　站立於門前死亡的男人，這令人不解的死亡真相是……？\r\n　　──「站立的男人」\r\n　　連闖門無數的竊賊也舉手投降？完全無解的密室之死。\r\n　　──「上鎖的房間」\r\n　　毫無道理可言的惡質不良住宅，化身成無法上鎖的雙重密室？\r\n　　──「歪斜的箱子」\r\n　　舞台上的密室，劇中出現的殺人事件竟然成真？\r\n　　──「密室劇場」\r\n\r\n　　四則終極密室殺人事件，撼動密室法則的懸疑推理小說，堂堂登場！'),
(2, '神偷天下卷一至卷三套書（風起雲湧書衣版）', '鄭丰', '奇幻基地 ', '2020-05-07', 900, '【作品全系列熱銷五十萬冊！暢銷慶功封面改版！】\r\n \r\n「小賊竊錙銖，大賊竊天下」\r\n且看神偷楚瀚如何隻手遮天，傾軋皇朝天下的精采傳奇！\r\n\r\n亞洲最暢銷武俠女作家──鄭丰\r\n突破自我，顛覆傳統，開創與眾不同武俠人物風雲力作！\r\n\r\n\r\n第一部 跛腳小丐\r\n　　江湖中素負盛名的飛盜家族上官、柳、胡三家，在一場「飛戎之王」的盜寶比試之後，種種劫難接連降臨，令上官家和胡家家破人亡，奔散流離；自幼被胡家收養的跛腳小丐楚瀚，發誓追查恩人遇害的真相，毅然進入皇宮，卻身不由己，被捲入了一場勾心鬥角的驚天陰謀之中……\r\n\r\n第二部 靛海奇緣\r\n　　楚瀚一腔熱血，為保皇室血脈而被迫離開了京城，卻遭宿敵錦衣衛高手如影隨形地緊逼追殺，不得不深入偏僻險地「靛海」，踏上一段奇險萬分、詭異莫名的旅程……\r\n\r\n第三部 悲歡無情\r\n　　受到當世大卜仝寅的提點，楚瀚得知天下大勢將變，於是趕回京城保護幼主，卻身不由己被奸巧宦官汪直所控，更知曉了悲慘不堪的身世真相。無數的困境迎面而來，無盡的誤解有口難言，眼前卻只有一條不歸之路，他只能毅然向前，踽踽獨行……'),
(3, '晨碎（全球山神粉絲狂熱追讀奇幻史詩「颶光典籍」系列必讀外傳！）', '布蘭登．山德森 Brandon Sanderson', '奇幻基地', '2024-03-09', 499, '數年前，賽勒那商人芮心因一場意外導致雙腿癱瘓，從此不良於行，\r\n卻擁有了神話傳說中的生物——拉金。\r\n\r\n拉金是一種能夠吸食颶光的生物，曾經被認為已經滅絕；\r\n然而芮心的拉金嘰哩嘰哩生病了，想要牠康復只能回到拉金的故鄉：無人去過的風暴之城阿奇那。\r\n\r\n在逐風師的幫助下，芮心接受了王后娜凡妮指派的任務，決定揚帆出海，\r\n駛入從沒有人活著回來的危險征途之中。\r\n\r\n如果這一行人無法在遠古守護者的憤怒降臨之前，揭開這座隱藏島嶼城市的祕密，\r\n那麼羅沙大陸和整個寰宇的命運，都將淪陷於邪惡來襲的境地……'),
(4, '向日葵不開的夏天', '道尾秀介 ', '獨步文化', '2008-04-03', 360, '強烈的視覺感和極佳的節奏，充滿驚異和恐怖的閱讀驚豔！\r\n\r\n　　寧靜的小鎮發生了一連串虐殺貓狗事件，要帶作業給請假同學的主角，將會行經有貓狗屍體的地點，而盡頭等著他的又是什麼？\r\n\r\n那年夏天，我同學Ｓ君上吊，死了，\r\n我明明看到他的屍體，大家卻說我騙人……\r\n喂，你相信投胎轉世嗎？\r\n那……那個死掉的Ｓ君，\r\n七天之後，竟然在我房裡現身啦！\r\n只不過，他變成了一個……\r\n\r\n我是個小學四年級的男生，我跟我那三歲的妹妹美加，\r\n在那年暑假經歷了一場前所未有的恐怖大冒險！\r\n\r\n無法分類的小說．不能解釋的情節．嚴禁洩露的謎底\r\n且看道尾秀介如何使出絕．超．技．巧！\r\n打造全新風格的驚悚超現實新本格推理??\r\n\r\n驚爆日本推理界．期待度最高的王牌──道尾秀介\r\n榮獲2007年「這本推理小說了不起！」\r\n「本格推理」之「作家別得票數」第1名。'),
(5, 'N【翻轉世界的720種故事】', '道尾秀介', '尖端 ', '2023-11-06', 360, '　調換閱讀順序，就會改變一切。\r\n　　你能看透隱藏在這個世界的祕密嗎？\r\n\r\n　　「我想寫一個會隨著讀者改變的故事。\r\n　　本書共有六個篇章，閱讀順序可自由選擇。\r\n　　最前面寫出各章的開頭部分，\r\n　　請選擇您想讀的篇章，翻到該篇的頁數。\r\n　　故事的樣貌共有 6x5x4x3x2x1=720 種。\r\n　　願各位讀者都能體驗到專屬於自己的故事。」\r\n　　──道尾秀介\r\n\r\n　　★由你自己創造的720個故事。\r\n\r\n　　總共六個篇章。調換閱讀順序，就會改變一切。\r\n\r\n　　相鄰的一章刻意印刷成上下顛倒。\r\n　　請先閱讀開頭的「本書閱讀方式」。\r\n\r\n　　理科教師帶著「擁有魔法鼻子的狗」挖掘學生的祕密。\r\n　　高中生調查鳥兒為何說出「你怎麼不去死？」。\r\n　　身分不詳的入侵者幫忙殺死男友的女人棄屍。\r\n　　唯獨退休的英文教師知道害死少女的真凶是誰。\r\n　　安寧護理中心的護理師有生以來第一次看到奇蹟。\r\n　　女刑警跟著寵物偵探找出凶殺案的真相。');

-- --------------------------------------------------------

--
-- 資料表結構 `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `schid` varchar(32) NOT NULL COMMENT '學號',
  `name` varchar(32) NOT NULL COMMENT '姓名',
  `gender` varchar(1) NOT NULL COMMENT '性別',
  `birthday` date NOT NULL COMMENT '生日',
  `email` varchar(64) NOT NULL COMMENT 'email '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `student`
--

INSERT INTO `student` (`id`, `schid`, `name`, `gender`, `birthday`, `email`) VALUES
(1, '1111211031', '姜葉', 'F', '2004-06-02', 'aesirusi@gmail.com'),
(4, '1111211033', '魏語辰', 'M', '2004-01-09', 'nono.6663789@gmail.com'),
(5, '1111211054', '許曼', 'F', '2004-04-05', 'a12345@gmail.com'),
(6, '1111211085', '雷無桀', 'M', '2004-03-01', 'ererere123@gmail.com'),
(7, '1111211123', '容虞', 'F', '2005-07-18', 'notitle492@gmail.com');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `schid` (`schid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
