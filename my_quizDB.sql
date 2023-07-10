-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 01:00 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_choice1`
--

CREATE TABLE `quiz_choice1` (
  `quiz_ID` int(11) NOT NULL,
  `ca_quiz` int(11) NOT NULL,
  `question` text NOT NULL,
  `img_question` text NOT NULL,
  `choice1` text NOT NULL,
  `choice2` text NOT NULL,
  `choice3` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz_choice1`
--

INSERT INTO `quiz_choice1` (`quiz_ID`, `ca_quiz`, `question`, `img_question`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(1, 1, 'การกำหนดซื่อตัวแปรในภาษาจาวาข้อใดต่อไปนี้ถูกต้อง', '', 'name and address', 'Name_and-address', 'name & address', 'nameAndAddress'),
(2, 1, 'คำสั่งในตัวเลือกใดถูกต้อง', '', 'int return;', 'flo money$;', 'char str = \"Hello\";', 'char letter = \'x\';'),
(3, 1, 'กำหนดให้ x เป็นเลขจำนวนเต็ม ข้อใดคือคำสั่งผังงานกรอบที่ 3', 'd477d94585723ff30309447a50d83ff2.png', 'System.out.print(\'\'x=\'\', x);', ' System.out.print(\'\'x=\'\', x/10);', ' System.out.print(\'\'x=\'\' & x);', ' System.out.print(\'\'x=\'\'+ x);'),
(4, 1, 'จากคำสั่งเหล่านี้ ถ้าป้อนค่า 108 ให้ x และ 98 ให้กับ Y สุดท้าย sum มีค่าเป็นเท่าใด', '21258b27adc83ce96e426011e06baabb.png', ' 98', ' 108', ' ไม่มีคำตอบ', ' 103'),
(5, 1, 'กำหนดชนิดข้อมูล (data type) ในภาษาจาวาของจำนวนคนบนรถโดยสาร', '', 'String', 'char', 'double', 'int'),
(6, 1, 'ถ้า money เป็นตัวแปรชนิด int และ ch เป็นตัวแปรซนิด char มี sc เป็น object คีย์บอร์ด ของคลาส Scanner แล้วคำสั่งในข้อใดเป็นการใช้คำสั่งรับค่าที่ถูกต้อง', '', 'ch = sc. nextInt () ;', 'ch = sc. nextInt () ;', 'money = sc.next.charAt(0);', 'money = sc.nextInt();'),
(7, 1, 'จงหาผลลัพท์ของโปรแกรมที่กำหนดให้ต่อไปนี้', 'a59ff6e7a3b0ecea0f72d2f5d1ef1835.png', '11', '01', '10', '00'),
(8, 1, 'กำหนดชนิดข้อมูล (data type) ในภาษาจาวาของเลขบัตรประชาชน', '', 'int', 'double', 'char', 'String'),
(9, 1, 'คำสั่งในข้อใดเป็นการใช้คำสั่ง System.out.print ที่ถูกต้อง ถ้าเราต้องการให้แสดงผลบนจอเป็น Answer = 62', '', 'System.out.print(\'\'Answer=+\'\'55+7);', 'System.out.print(\'\'Answer=55+7\'\');', 'System.out.print (\'\'Answer=\'\' 55+7);', 'System.out.print (\'\'Answer=\'\'+ (55+7)) ;'),
(10, 1, 'ข้อใดต่อไปนี้ที่ไม่ใช่ DataType ใน JAVA', '', 'Integer', 'Double', 'Float', 'Number');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_choice2`
--

CREATE TABLE `quiz_choice2` (
  `quiz_ID` int(11) NOT NULL,
  `ca_quiz` int(11) NOT NULL,
  `question` text NOT NULL,
  `img_question` text NOT NULL,
  `choice1` text NOT NULL,
  `choice2` text NOT NULL,
  `choice3` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz_choice2`
--

INSERT INTO `quiz_choice2` (`quiz_ID`, `ca_quiz`, `question`, `img_question`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(1, 2, 'เมื่อเงื่อนไขเป็นจริงจะทำงานในคำสั่งใด', '', 'while  ', 'do while  ', 'for  ', 'if  '),
(2, 2, 'การใช้ if..else จะทำงานในส่วนของ if เมื่อ เงื่อนไขใด', '', 'เป็นเท็จ', 'เป็นได้ทั้งจริง และเท็จ', 'เป็นจำนวนเต็ม', 'เป็นจริง'),
(3, 2, 'จากโปรแกรมจงหาผลการทำงานเมื่อข้อมูล age ก่อนที่จะทำมีค่าเป็น 10', '7ff7dd49c1305cc591c69a2ff037e743.png', 'Of age', 'Of age Good luck', 'ไม่มีข้อใดถูก', 'Good luck'),
(4, 2, 'กำหนดให้ x เป็นเลขจำนวนเต็ม ข้อใดคือคำสั่งผังงานกรอบที่ 1 ', 'abb33fbb49b388c892a11b8780210d23.png', 'if (x > 8 && x < 12)', 'if (x >= 8 || x <= 12)', 'while (x >= 8 && x <= 12)', 'if (x >= 8 && x <= 12)'),
(5, 2, 'จากข้อมูลต่อไปนี้ ข้อใดให้ผลเป็นจริง', '8dbdf38384c4e2003d89a4b482086035.png', 'i == j-1', 'i+1 == a', '(i+j > a) && (a-4 < j-i)', '! (a > i*3)'),
(6, 2, 'ฟังก์ชัน if - else - if ใช้กับเงื่อนได', '', 'เงื่อนไขแบบทางเดียว', ' เงื่อนไขเลือกทำหลายทาง', 'ไม่มีข้อถูก', 'เงื่อนไขเลือกทำสองทาง'),
(7, 2, 'ถ้าหากในคำสั่ง switch...case ไม่มี break; เมื่อโปรแกรมทำงานจะเกิดอะไรขึ้น', '', 'โปรแกรมจะแจ้งข้อผิดพลาด', 'กระโดดไปทำคำสั่งหลัง default', 'กระโดดออกนอก switch...case', ' โปรแกรมจะตรวจสอบ case ถัดไป'),
(8, 2, 'จากโครงสร้าง เป็นคำสั่งใดใช้ในการสร้างเงื่อนไข', 'd0ee4640e1a9e0e9cdee22de09834bff.png', ' if', 'else if', 'else', ' switch case'),
(9, 2, 'ตัวดำเนินการใดไม่ใช่ตัวดำเนินการทางตรรก', '', '!=', '<=', '>', '='),
(10, 2, 'ประโยคเงื่อนไขในข้อใด เป็นการตรวจสอบว่าตัวแปร x อยู่ในช่วงตั้งแต่ 20 ถึง 30', '', 'if(x >= 20) || (x <= 30)', ' if(20 < x < 30)', ' if((x <= 10) && (x >= 20))', 'if(x >= 20) && (x <= 30)');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_choice3`
--

CREATE TABLE `quiz_choice3` (
  `quiz_ID` int(11) NOT NULL,
  `ca_quiz` int(11) NOT NULL,
  `question` text NOT NULL,
  `img_question` text NOT NULL,
  `choice1` text NOT NULL,
  `choice2` text NOT NULL,
  `choice3` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz_choice3`
--

INSERT INTO `quiz_choice3` (`quiz_ID`, `ca_quiz`, `question`, `img_question`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(1, 3, 'คำสั่งใดไม่ใช่การทำงานแบบวนลูปหรือวนซ้ำ', '', 'For', 'While ', 'Do while', 'Gotoxy'),
(2, 3, 'for ( x=1; x<=10; x+=2 ) คำสั่งนี้ทำงานกี่รอบ', '', '1 รอบ ', '8 รอบ ', '10 รอบ ', '5 รอบ '),
(3, 3, 'ข้อใดคือลักษณะการทำงานของคำสั่ง Do  While', '', 'เป็นการทำงานซ้ำที่ต้องระบุจำนวนรอบก่อน', 'มีการตรวจสอบเงื่อนไขก่อนทำการวนซ้ำ', 'เป็นการทำซ้ำที่มีการทำซ้ำไม่เกิน 10 รอบ', 'ทำคำสั่งที่ต้องการวนซ้ำก่อน แล้วจึงตรวจสอบเงื่อนไข'),
(4, 3, 'for ( x=1; x<=10; x+=2 ) จากคำสั่งนี้แสดงผลอย่างไร', '', '1 ', '2 4 6 8 10 ', '1 2 3 4 5 6 7 8 9 10 ', '1 3 5 7 9 '),
(5, 3, 'จงหาผลลัพท์โปรแกรมต่อไปนี้', '343be95ddeb87249413c14af1fc5abf2.png', '4', '2', '25', '246'),
(6, 3, 'จงหาผลลัพธ์จากโค้ดที่กำหนดให้', 'c9c38bfec4f7806bf729209fbd69928a.png', '1234', '54321', '4321', '12345'),
(7, 3, 'จากโค้ดต่อไปนี้ โปรแกรมจะพิมพ์ค่า x จำนวนกี่ครั้ง', 'b250418941219ff929842955ccdc003f.png', '4', '6', '7', '5'),
(8, 3, 'จงหาผลลัพธ์จากโค้ดที่กำหนดให้ต่อไปนี้', 'bf0afea85b5245a4c9a4d5f3de6f3f83.png', '543210', '1234', '0245', '54321'),
(9, 3, 'จงหาผลลัพธ์จากโค้ดที่กำหนดให้ต่อไปนี้', 'b34d557850ff727cb7cb8850197c9881.png', '321', '123', '0123', 'ไม่มีข้อใดถูก'),
(10, 3, 'ส่วนของโปรแกรมนี้ข้อใดกล่าวถูกต้อง', '67438e8006c12794b6695a66f1de0379.png', 'ค่าที่รับเข้ามาต้องมากกว่า 100 ถึงจะออกจากลูป ', 'ค่าที่รับเข้ามาต้องน้อยกว่า 100 ถึงจะออกจากลูป ', 'ค่าที่รับเข้ามาต้องอยู่ระหว่าง 0 ถึง 100 ถึงจะทำการวนรับค่าใหม่ ', 'ค่าที่รับเข้ามาถ้าน้อบกว่า 0 หรือมากกว่า 100 ถึงจะทำการวนรับค่าใหม่ ');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_choice4`
--

CREATE TABLE `quiz_choice4` (
  `quiz_ID` int(11) NOT NULL,
  `ca_quiz` int(11) NOT NULL,
  `question` text NOT NULL,
  `img_question` text NOT NULL,
  `choice1` text NOT NULL,
  `choice2` text NOT NULL,
  `choice3` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz_choice4`
--

INSERT INTO `quiz_choice4` (`quiz_ID`, `ca_quiz`, `question`, `img_question`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(1, 4, 'ข้อใดไม่ใช่เหตุผลของการเขียนโปรแกรมด้วย method', '', 'เพื่อทำให้เข้าใจ code ได้ง่ายขึ้น', 'เพื่อเป็นการแยกส่วนการทำงานอย่างชัดเจน', 'เพื่อให้ code ของโปรแกรมไม่ยาวเกินความจำเป็น', 'เพื่อสร้างมูลค่าให้กับโปรแกรม'),
(2, 4, 'ข้อใดคือเมธอดของรถยนต์', '', ' ยี่ห้อ', ' รุ่น', ' เลขทะเบียน', 'การเคลื่อนที่'),
(3, 4, 'public ใช้ประกาศ Variable, Class และ Method เพื่อสิ่งใด', '', 'เรียกใช้งานได้ภายในคลาสเดียวกัน', ' เรียกใช้ในคลาสต่างกันที่มีการสืบทอดเท่านั้น', ' สามารถใช้ได้เฉพาะส่วนของตัวเองเท่านั้น', 'เรียกใช้ได้ทุกส่วนที่ต้องการใช้งาน'),
(4, 4, 'void ใช้ประกาศ Method เพื่อสิ่งใด', '', ' ต้องการ return ค่ากลับ', 'เพื่อบอกว่าเป็นเมธอดหลัก', 'ข้อกำหนดของเมธอดทั่วไป', ' ไม่ต้องการ return ค่ากลับ'),
(5, 4, 'private ใช้ประกาศ Variable, Class และ Method เพื่อสิ่งใด', '', 'เรียกใช้ได้ทุกส่วนที่ต้องการใช้งาน', 'เรียกใช้งานได้ภายในคลาสเดียวกัน', 'เรียกใช้ในคลาสต่างกันที่มีการสืบทอดเท่านั้น', 'สามารถใช้ได้เฉพาะส่วนของตัวเองเท่านั้น'),
(6, 4, 'protected ใช้ประกาศ Variable, Class และ Method เพื่อสิ่งใด', '', 'เรียกใช้ได้ทุกส่วนที่ต้องการใช้งาน', 'เรียกใช้งานได้ภายในคลาสเดียวกัน', ' สามารถใช้ได้เฉพาะส่วนของตัวเองเท่านั้น', ' เรียกใช้ในคลาสต่างกันที่มีการสืบทอดเท่านั้น'),
(7, 4, 'ถ้าต้องการเขียน method เพื่อหาค่ามากสุดของเลขจำนวนเต็ม 2 จำนวนและคืนค่าผลลัพธ์ที่ได้กลับไปยังผู้เรียก ข้อใดถูกต้อง', '', ' public static double findMax (double a , double b)', ' public static void findMax (int a , int b)', ' public static int findMax (double a , double b)', ' public static int findMax ( int a , int b)'),
(8, 4, 'ข้อใดเป็นการเติมคำสั่งในส่วนของ calArea(.....); ได้ถูกต้อง', '29c06be4733c4e36ff57b96a81568111.png', 'calArea(bs, hi);', 'calArea(base, height);', 'calArea(double base, double height);', 'calArea(double bs, double hi);'),
(9, 4, 'จากรูปข้อ 8 ข้อใดเป็นการเติมคำสั่งในส่วนของ System.out.println(.....); ได้ถูกต้อง', '', 'System.out.println(area);', 'System.out.println(base+height);', 'System.out.println(area+calArea);', 'System.out.println(calArea);'),
(10, 4, 'ข้อใดสร้างเมธอดแบบไม่มีการส่งคืนค่ากลับได้ถูกต้อง', '', 'public static int b(int x);', 'private static String c(int x);', 'ไม่มีข้อใดถูก', 'public static void a(int x);');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_choice5`
--

CREATE TABLE `quiz_choice5` (
  `quiz_ID` int(11) NOT NULL,
  `ca_quiz` int(11) NOT NULL,
  `question` text NOT NULL,
  `img_question` text NOT NULL,
  `choice1` text NOT NULL,
  `choice2` text NOT NULL,
  `choice3` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz_choice5`
--

INSERT INTO `quiz_choice5` (`quiz_ID`, `ca_quiz`, `question`, `img_question`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(1, 5, 'ข้อใดเป็นความหมายของ array', '', 'โครงสร้างข้อมูลที่ใช้เก็บข้อมูลต่างชนิดกัน', 'โครงสร้างข้อมูลที่เก็บข้อมูลตัวเลข', 'โครงสร้างข้อมูลที่เก็บข้อมูลโดยไม่จำกัดขอบเขต', 'โครงสร้างข้อมูลที่ใช้เก็บข้อมูลชนิดเดียวกัน'),
(2, 5, 'ค่าทีกำหนดใน array ต้องยู่ในเครื่องหมายใด', '', ' [ ]', ' ( )', ' \"  \"', ' { }'),
(3, 5, 'ข้อใดกำหนด a ให้เป็น array ของ int ขนาด 5 ช่อง ได้ถูกต้อง', '', 'int = a[5];', 'int : a[5];', 'int == a[5]', 'int a[5];'),
(4, 5, 'ข้อใดมีความคล้ายคลึงกับโครงสร้างข้อมูลแบบ array', '', 'ปิรามิด', 'กิฟเซต', 'กระทง', 'ห้องแถว'),
(5, 5, 'ข้อใดถูกต้อง', '', 'a[]={2,5,3,9} ตัวแปรอะเรย์ที่มีค่า 5 คือ a[2]', 'a[]={2,5,3,9} สมาชิกตัวสุดท้ายของอะเรย์คือ a[4]', ' a[1] แสดงว่ามีข้อมูลในเซลทั้งหมด 2 เซล', 'a[0] เป็นสมาชิกของอะเรย์ตัวแรกสุด'),
(6, 5, 'ถ้า a[5] จะมีค่าเริ่มต้นของดัชนีที่ค่าใด และสิ้นสุดที่ค่าใด ', '', 'เริ่มต้นที่ a[1] และสิ้นสุด a[5]', 'เริ่มต้นที่ a[1] และสิ้นสุด a[4]', 'เริ่มต้นที่ a[0] และสิ้นสุด a[5]', 'เริ่มต้นที่ a[0] และสิ้นสุด a[4]'),
(7, 5, 'จากโค้ดต่อไปนี้ ข้อใดใช้คำสั่งหาขนาดอาร์เรย์ได้ถูกต้อง', '6e1ec2db28f8f269f640b852617ae172.png', 'a[].length', 'int a.length', 'int a[length]', 'a.length'),
(8, 5, 'จากโค้ดต่อไปนี้ ผลลัพธ์ขนาดอาร์เรย์ข้อใดถูกต้อง', 'd514e54d4b5a2c5debd02bad4bcd98fd.png', 'ไม่มีข้อใดถูก', '6', '5', '7'),
(9, 5, 'ผลลัพธ์ของ c[5] ข้อใดถูกต้อง', '3b13e495e0b200308409ee1cb9be6983.png', '5', '555', '55555', 'ไม่มีข้อใดถูก'),
(10, 5, 'ข้อมูลในข้อใดที่สามารถเก็บในรูปแบบของ array ได้', '', 'a 1 +', '1 2.5 k', 'C 1 2', '0.2 3.1 4.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `quiz_choice1`
--
ALTER TABLE `quiz_choice1`
  ADD PRIMARY KEY (`quiz_ID`);

--
-- Indexes for table `quiz_choice2`
--
ALTER TABLE `quiz_choice2`
  ADD PRIMARY KEY (`quiz_ID`);

--
-- Indexes for table `quiz_choice3`
--
ALTER TABLE `quiz_choice3`
  ADD PRIMARY KEY (`quiz_ID`);

--
-- Indexes for table `quiz_choice4`
--
ALTER TABLE `quiz_choice4`
  ADD PRIMARY KEY (`quiz_ID`);

--
-- Indexes for table `quiz_choice5`
--
ALTER TABLE `quiz_choice5`
  ADD PRIMARY KEY (`quiz_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz_choice1`
--
ALTER TABLE `quiz_choice1`
  MODIFY `quiz_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz_choice2`
--
ALTER TABLE `quiz_choice2`
  MODIFY `quiz_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz_choice3`
--
ALTER TABLE `quiz_choice3`
  MODIFY `quiz_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz_choice4`
--
ALTER TABLE `quiz_choice4`
  MODIFY `quiz_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz_choice5`
--
ALTER TABLE `quiz_choice5`
  MODIFY `quiz_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
