-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 07:01 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `bba`
--

CREATE TABLE `bba` (
  `id` int(200) NOT NULL,
  `course_id` int(221) NOT NULL,
  `name` varchar(300) NOT NULL,
  `desription` varchar(1000) NOT NULL,
  `pdf` tinyint(1) NOT NULL,
  `images` varchar(300) NOT NULL,
  `semester` int(15) NOT NULL,
  `author` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bba`
--

INSERT INTO `bba` (`id`, `course_id`, `name`, `desription`, `pdf`, `images`, `semester`, `author`, `status`) VALUES
(5, 1, ' Business Accounting', ' This book as per the prescribed for bba semester1   We do hope that this book will definitely help to meet the growing requirements of the students of BBA-Sem.-I from the Faculty of Commerce and Management.', 0, 'Bussiness Accounting Sem-1.jpg', 1, 'Dr Suhash mahajan', 1),
(9, 1, ' Business Communication', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Bussiness Communication Sem-1.jpg', 1, 'Sri Jin Kushal,Sunitti Ahuja', 1),
(10, 1, ' Business Demography', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Bussiness Demography Sem-1.jpg', 1, 'Gauri Girish Jadav', 1),
(11, 1, ' Business Economics', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire', 0, 'Bussiness Economics Sem-1.jpg', 1, 'Dr Jp Mishra', 1),
(12, 1, ' Business Mathematics', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire', 0, 'Bussiness mathematics Sem-1.jpg', 1, 'Dr Sm Shukla', 1),
(13, 1, ' Principle Of Management ', ' Latest references have also been incorporated making it an authoritative and very valuable book for the students. The further highlights of the book are the simplicity of explanation combined with a style that ensures easy understanding. We have tried to put the subject-matter in such a way that the students get the feeling of live teacher interacting with them. The book is immensely useful for the students of B.B.A. First Year', 0, 'Principles of management BBA Sem-1.jpg', 1, 'Dr Sc Saxena', 1),
(14, 1, ' Business Communication', ' 1. Group Communication, 2. Interviews, 3. Speeches and Presentation, 4. Report Writing', 0, 'Business communication Sem-2.jpg', 2, 'Sri Jin Kushal,Sunitti Ahuja', 1),
(15, 1, ' Business Statistics', ' Business Statistics Book For B.B.A. I Year ofAwadhesh Pratap Singh University Rewa (APSU), Barkatullah University Bhopal, Rani Durgavati Vishwavidyalaya Jabalpur (RDVV), Vikram University Ujjain, Dr Harisingh Gour University Sagar (DHGU) The present edition of the book has been revised keeping in view the new syllabus prescribed for B.B.A. First Year 3 Year (Annual System). ', 0, 'Business statistics sem-2.jpg', 2, 'Dr Sm Shukla', 0),
(16, 1, ' Indian Economy', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Indian Economy Sem-2.jpg', 2, 'T.R Jain', 0),
(17, 1, ' Organizational Behaviour', ' Long considered the standard for all organizational behavior textbooks, the Eighteenth Edition continues its tradition of making current, relevant research available to students in the language that they understand. While maintaining its hallmark features—clear writing style, cutting-edge content, and engaging pedagogy—Organizational Behavior, 18e has been updated to reflect the most recent research within the field of organizational behavior. ', 0, 'Organizational Behaviour.jpg', 2, 'Stephen P. Robin', 0),
(19, 1, ' Business Environment', ' The Book is authored by proficient Teachers and Professors. The Text of the Book is simple and lucid. The contents of this book have been organised carefully and to the point. The Book Covers in Detail :- Business Environment (In English), Contents :- 01.Business Environment : Concept, Significance, Components of Business Environment, Factors Affecting Business Environment, 02.Social Responsibilities of Business. 03.Economic Systems : Capitalism, Socialism, Mixed Economy and Communism, 04.Private Sector, 05.Industrial Policy :', 0, 'business-sem2.jpg', 2, 'Ranjiv', 0),
(20, 1, ' Business Environment', ' The Book is authored by proficient Teachers and Professors. The Text of the Book is simple and lucid. The contents of this book have been organised carefully and to the point. The Book Covers in Detail :- Business Environment (In English), Contents :- 01.Business Environment : Concept, Significance, Components of Business Environment, Factors Affecting Business Environment, 02.Social Responsibilities of Business. 03.Economic Systems : Capitalism, Socialism, Mixed Economy and Communism, 04.Private Sector, 05.Industrial Policy :', 0, 'business-sem2.jpg', 2, 'Ranjiv', 0),
(21, 1, ' Basic Competentices and Personality Devlopment', ' This text uses a chronological, life-span perspective to give a complete picture of development from conception to death. The material for the text comes from a summary of the most recent findings of research studies in areas such as medicine, psychology, sociology, education and anthropology. All aspects of development are included, and adequate space is devoted to each to enable students to feel that they are informed of the typical and normal development of each stage.', 0, 'Basic Competentices and personality devlopment Sem-3.jpg', 3, 'Vision Publications', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bca`
--

CREATE TABLE `bca` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `pdf` tinyint(4) NOT NULL,
  `images` varchar(5000) NOT NULL,
  `semester` int(11) NOT NULL,
  `author` varchar(5000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bca`
--

INSERT INTO `bca` (`id`, `course_id`, `name`, `description`, `pdf`, `images`, `semester`, `author`, `status`) VALUES
(2, 4, ' foundation course engish', ' Contents  Chapter-1 Reading and Listening Comprehension (The Environment, Travel and Tourism, Culture and Entertainment and Health and Fitness) Chapter-2 Grammar Section (Important Grammar Rules and Exercises for Term-End IGNOU Exam) Chapter-3 Writing Section', 0, 'foundation course engish sem-1.jpg', 1, 'GullyBaba', 1),
(3, 4, ' human values and ethics', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'human values and ethics sem-1.jpg', 1, 'R R Gaur', 1),
(4, 4, ' Information Technology', ' The information Technology and its associated industries are growing at a fast pace in India. Apart from just the knowledge and skills related to work given, there are other soft skills that play an important role in the life of a professional.', 0, 'Information Technology sem-1.jpg', 1, 'Dr. Amir H. Tajfar', 0),
(5, 4, ' Mathematics- I sem-1', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Mathematics- I sem-1.jpg', 1, 'J.P Singh', 0),
(6, 4, ' Programming in C', ' The Second Edition of The C Programming Language The book enumerates the concepts related to C Programming language, as prescribed by ANSI standard. The book elaborates on the basics of procedure oriented programming and the fundamentals of writing C codes. It goes on to cover aspects like functions and loops, learning which will help novice programmers to code elementary level codes properly.', 0, 'Programming in C sem-1.jpg', 1, 'Pearson', 0),
(7, 4, ' Communication-II  ', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Communication-II  sem-2.jpg.webp', 2, 'abhishek Arora', 1),
(8, 4, ' Computer System Architecture sem-2', ' The plan for this revised edition has been thoroughly reviewed by eminent faculties of various technical universities across the country and their inputs have been incorporated to enhance the contents of this edition.  Features 1. New chapters on Introduction to architecture and Peripheral devices 2. New sections on master-slave flip flop, counters, code converters and horizontal and vertical microprogramming 3. Introduces Multibus organization, memory addressing and memory technology 4. Expanded discussion on pipelining, parallelism and Amdahl’s law 5. Over 150 new multiple choice questions and updated exercise problems', 0, 'Computer System Architecture sem-2.jpg', 2, 'Alka vishav', 0),
(9, 4, ' Environmental Science', ' his book is a comprehensive & authentic book on ‘Environmental Studies’. This book is an imperative educational resource that will be of value and interest to everyone seeking to broaden their understanding of the science behind environmental issues. This book aims to fulfill the requirement of following students:', 0, 'Environmental Science sem-2.jpg', 2, 'Dinesh', 0),
(10, 4, ' Mathematics 2', ' Mathematics for BCA is specially designed for students of BCA, who are at the threshold of a completely new domain. Keeping this in mind, the book has been planned with utmost care in the exposition of concepts, choice of illustrative examples, and also in sequencing of topics. The language is simple yet precise. A large number of worked out problems have been included to familiarize the students with the techniques to solving them, and to instill confidence. The topics are interdependent and must be studied in the same order as given in the book.', 0, 'Mathematics-II sem-2.jpg', 2, 'Dr. R K Shukla', 0),
(11, 4, ' OOPS Using C ++', ' Object-oriented programming with C++, 8th edition is here with some valuable updates. The new edition helps students to assess their learning by answering questions based on learning outcomes. Objective-type questions and dry-run questions are introduced to make students exam ready. A new appendix on interview questions is for those seeking to join the industry. The book is designed for students studying at the undergraduate level. It provides all-inclusive concepts and programs on object-oriented programming with C++ as an implementation language.', 0, 'OOPS Using C ++ sem-2.jpg', 2, 'E Baglaswami', 0),
(12, 4, ' Data Structures', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Data Structures sem-3.jpg', 3, 'Sunstar publisher', 0),
(13, 4, ' Digital Circuits & Logic Design', ' Progressive in content and form, this text successfully bridges the gap between the circuit perspective and system perspective of digital integrated circuit design. Beginning with solid discussions on the operation of electronic devices and in-depth analysis of the nucleus of digital design, the text maintains a consistent, logical flow of subject matter throughout. The revision addresses today’s most significant and compelling industry topics, including: the impact of interconnect, design for low power, issues in timing and clocking, design methodologies and the tremendous effect of design automation on the digital design perspective. The revision reflects the ongoing evolution in digital integrated circuit design, especially with respect to the impact of moving into the deep-submicron realm.', 0, 'Digital Circuits & Logic Design sem-3.jpg', 3, 'Vibbhav Taraate', 1),
(14, 4, ' System Analysis & Design', ' ritten in an easy-to-understand style, this text introduces the reader to the systems approach to study existing information systems, carry out an analysis, and finally come up with the best solution along with its design. It explains various facets of the Systems Development Life Cycle (SDLC) and includes two special case studies to help the reader understand the concept not only from a theoretical point of view but from a practical angle as well. The book also discusses in detail topics such as project selection and planning, data collection, form and file design, database design and management, software maintenance, hardware/software selection, disaster recovery and system security, and social issues.', 0, 'System Analysis & Design sem-3.jpg.webp', 3, 'Shri chakradhar Publications', 0),
(15, 4, ' Database Management Systems ', ' The 12th edition of Modern Database Management is designed to be used with an introductory course in database management. Such a course is usually required as part of an information systems curriculum in Business schools, computer technology programs and applied computer science departments. The text updates and expands materials in areas undergoing rapid change as a result of improved managerial practices, database design tools and methodologies and database technology.', 0, 'Database Management Systems sem-4.jpg', 4, 'Pearson', 0),
(16, 4, ' Microprocessors & Microcontrollers', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Microprocessors & Microcontrollers sem-4.jpg', 4, 'Krishna Kant', 0),
(17, 4, ' Operating Systems', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Operating Systems sem-4.jpg', 4, 'geetha & vidya', 0),
(18, 4, ' Data Warehousing & Mining', ' he goal of this book is to cover foundational techniques and tools required for Big Data Analytics. It focuses on concepts, principles and techniques applicable to any technology environment and industry and establishes a baseline that can be enhanced further by additional real-world experience. This book aims to be a ready reckoner to either a novice or a professional working in the field. Topics covered include Hadoop, MapReduce, Association Rules, Large-Scale Supervised Machine Learning, Data Streams, Clustering, NoSQL systems (Pig, Hive) and Applications including Recommendation Systems, Web and Security.', 0, 'Data Warehousing & Mining  sem-5.jpg', 5, 'Prateek Bhatiya', 0),
(19, 4, ' Management Information System', ' pdated with elaborate research. Updated coverage of Artificial Intelligence (AI) with a focus on “deep learning”, natural language systems, computer vision systems and robotics. Expanded coverage of social business and e-commerce content describing how social tools, mobile technology and location-based services are changing the landscape of marketing and advertising', 0, 'Management Information System sem-5.jpg', 5, 'Rajan Manro', 0),
(20, 4, ' Computer Graphics ', ' Reflecting the rapid expansion of the use of computer graphics and of C as a programming language of choice for implementation, this new version of the best-selling Hearn and Baker text converts all programming code into the C language. Assuming the reader has no prior familiarity with computer graphics, the authors present basic principles for design, use and understanding of computer graphics systems. The authors are widely considered authorities in computer graphics and are known for their accessible writing style.', 0, 'Computer Graphics sem-6.jpg', 6, 'Pearson', 0),
(21, 4, ' Computer Networks', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Computer Networks  sem-6.jpg', 6, 'GullyBaba', 0),
(22, 4, ' Principles of Management ', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Principles of Management sem-6.jpg.jpg', 6, '', 0),
(23, 4, ' System Administration', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'System Administration sem-6.jpg', 4, 'Rupinder Kaur Gurm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bhmct`
--

CREATE TABLE `bhmct` (
  `id` int(200) NOT NULL,
  `course_id` int(221) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `pdf` varchar(1) NOT NULL,
  `images` varchar(300) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `author` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bhmct`
--

INSERT INTO `bhmct` (`id`, `course_id`, `name`, `description`, `pdf`, `images`, `semester`, `author`, `status`) VALUES
(1, 2, ' English', 'This book is for BHMCT Students', '0', 'English sem-1.webp', ' 1', 'Dr. Lal Jain', 1),
(2, 2, ' Food & BeverageService Foundation-I', ' ABOUT THE AUTHOR and Product: Dr. M. Swaminathan, D.Sc., F.N.A., is a specialist in Food and Nutrition with over 40 years of Research and Teaching experience. His several books on Food and Nutrition are widely used by students and teachers. Dr. M. Swaminathan was Chairman, Discipline of Applied Nutrition and Dietetics, CFTRI, Mysore. He was actively engaged in Nutrition Research since 1935. He worked with Dr. W.R. Aykroyd in the Nutrition Research Laboratories from 1935 to 1942. He worked as Reader in Biochemistry in the Medical College, Jaipur, from 1947 to 1949. He developed original chemical methods for the determination of niacin in 1938 and pyridoxin in 1940. He has published 300 research papers and several review articles. He was elected a Fellow of National Academy of Sciences of India in 1960. He was also a member of the FAO / WHO Expert Group in 1961 on calcium requirements. He was elected as an Honorary Member of the American Institute of Nutrition in 1969 in recognition of ', '0', 'Food & BeverageService Foundation-I sem-1.webp', ' 1', 'Dr. M. Swaminathan', 1),
(3, 2, ' Food Production Foundation', ' A Textbook of Food Production Foundation is especially designed to meet the requirements of first year hotel management graduate students who aspire to become chefs. Most of the books available in the field are written by foreign authors and Indian students find it difficult to understand their terminologies, processes and methods. This book will fully meet the requirement of Indian budding chefs. Moreover, the chapters included in the book are as per the syllabus followed by hotels management institutes of India.', '0', 'Food Production Foundation- sem-1.jpg', ' 1', 'Abhinav Kumar', 0),
(4, 2, ' Front Office Foundation', ' The third edition of Hotel Housekeeping continues to provide a comprehensive and lucid coverage of the subject.\r\n\r\nThe book explores the key elements of housekeeping as also its theoretical foundations and techniques of operations: the structure and layout of the housekeeping department, housekeeping inventory, guest room layout and maintenance, flower arrangement, and interior decoration.\r\n\r\nBeginning with an overview of the hospitality industry and the housekeeping department, the book discusses in detail management of housekeeping personnel, contracts and outsourcing, planning and daily routines, cleaning, supervision, control desk activities, budgeting, textiles, linen and laundry operations, and uniforms. It goes on to discuss important issues in housekeeping, such as safety and security, pest control and waste disposal, interior decoration, and facility planning and facilities management. Finally, it discusses facilities planning and facilities management, interior designing, gu', '0', 'Front Office Foundation sem-1.jpg', ' 1', 'G. RaghuBalan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `biotech`
--

CREATE TABLE `biotech` (
  `id` int(200) NOT NULL,
  `course_id` int(221) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(1212) NOT NULL,
  `pdf` varchar(1) NOT NULL,
  `images` varchar(300) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `author` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biotech`
--

INSERT INTO `biotech` (`id`, `course_id`, `name`, `description`, `pdf`, `images`, `semester`, `author`, `status`) VALUES
(1, 11, ' Bio Chemistry And Metabolism', ' Designed as per the UGC curriculum, Introduction to Biochemistry and Metabolism meets the syllabus requirements of all universities offering a course on biochemistry and metabolism. The subject, a core paper for the students of botany, zoology, biotechnology and bioinformatics, is dealt with in detail across 13 chapters with emphasis on the metabolism of amino acids, carbohydrates, lipids and high energy compounds. Replete with illustrations and schematic representations, the book reinforces theoretical concepts with its concise, easy-to-follow approach making it an ideal textbook on the subject.', '0', 'Biochemistry and Metabolism.jpg', ' 1', 'Martin A.Crook', 1),
(2, 11, ' English', ' Reading This Book will help in Improving your speaking ', '0', 'English .jpg', ' 1', 'Arihant', 1),
(3, 11, ' Human Values, Deaddiction and Traffic Rules', ' This textbook provides a hands-on introduction to enterprise architecture management. It guides the reader through the applications of methods and tools to typical business problems by presenting enterprise architecture frameworks and by sharing experiences from industry.', '0', 'Human Values, Deaddiction and Traffic Rules.jpg', ' 1', 'Dr Saroj Kumar', 0),
(4, 11, ' Inorganic Chemistry', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', '0', 'Inorganic Chemistry.jpg', ' 1', 'Kenneth karlin', 1),
(5, 11, ' Introduction To Bio-Technology', ' An Introduction to Biotechnology: a genetic manipulation perspective contains practical exercises, and has a comprehensive coverage on the subjects of Biotechnology and gene manipulation for the students’ understanding of the basic concepts. This manual contains, in particular, the techniques, protocols and practical approaches that are being used routinely in molecular biology laboratories. This book is assembled together with an aim to enlighten the readers with the complex molecular biology protocols in a simple and straightforward manner.', '0', 'Introduction to biotechnology.jpg', ' 1', 'Roop Lal', 0),
(6, 11, ' Biostatistics', ' This Tenth Edition of Biostatistics maintains its predecessors’ comprehensive approach to Biostatistics as it is used in the biological sciences. Successfully utilized by both statisticians and practitioners, Biostatistics is an algebra-based text geared towards the advanced undergraduate and graduate student. This new edition has been revised to more closely align with the modern practice of biostatics, teaching methods and technologies.', '0', 'Biostatistics.jpg', ' 2', 'Wanye W. Daniel', 0),
(7, 11, ' Environment Science', ' Reading This Book will help in Improving your speaking ', '0', 'Environment Science.jpg', ' 2', 'J.S', 0),
(8, 11, ' Introduction to Microbiology', ' Brand new hard-cover/ paper-back edition same as per description,. save money. Contact us for any queries. Best customer support! All orders shipped with tracking number.', '0', 'Introduction to Microbiology.jpg', ' 2', 'KS Yadav', 0),
(9, 11, ' Immunology ', ' It gives me immense pleasure to present this book entitled ‘Basics of Immunology’ to the learners of immunology containing updated knowledge of the topic. Immunology is a very vast subject, interesting but sometimes frustrating when not understood properly. It is our earnest hope that style of presentation will definitely bring pleasure and comprehension to our many readers at the undergraduate, postgraduate, and clinical stages of their studies. The language is consistent, interesting, and easy to understand. It is unique in the sense that a no of concepts especially crucial to the students to understand in other foreign and Indian books on the topic have been presented in a way so that they can easily grasp with firm understanding without any confusion. Figures summarize important ideas and presented in such a way so that along with written text, the concepts are nicely conveyable to the readers. In order to visualize the complex relationship of immune system components, iconic depictions are consistently given throughout the book, in the form of tables and figures. Explanation of antigen presentation expanded discussion on MHCs and cytokines, and inflammation has been nicely explained. Exp', '0', 'Immunology .jpg', ' 3', 'Dr Preeti Sharma', 0),
(10, 11, ' Introduction to Computers ', ' A trusted name in Information Technology, Peter Norton has been synonymous with computers for nearly two decades. The unparalleled success of this series has led to the Indian Adaptation of the 6th Edition of this book-part of the trilogy that also includes Computing Fundamentals and Essential Concepts. It has brought together what can only be described as some of the leading educating resources for faculty and students alike. Key Features: Web integrated text and a new design with enhanced illustrations Self-check questions with answers', '0', 'Introduction to Computers .jpg', ' 3', 'Peter Norton', 0),
(11, 11, ' Molecular Biology', ' This book includes 15 chapters covering more than 135 experimental protocols. It discusses all the relevant topics like pH and buffers, spectrophotometry, chromatography, carbohydrates, lipids, proteins, electrophoresis, enzyme immunology, vitamins and pigments, metabolites and molecular biology. It includes a wide range of experiments from preparation of culture media to PCR, Southern and Western blotting. All the experiments have been meticulously designed and special care has been taken to the safety in laboratory and precautions are given wheresoever required.', '0', 'Molecular Biology.jpg', ' 3', 'Wolters Kluwer', 0),
(12, 11, ' Organic Chemistry', ' This book offers a selection of about 850 problems in Organic Chemistry; best suited for the preparation needs of JEE (Main & Advanced) aspirants. The arrangement of chapters is in accordance with the classical functional group organization, with two chapters in the beginning on the Basics and Stereochemistry. Each chapter is structured into two parts: Problems and Solutions. The first part offers a complete range of problems based on the topic followed by their complete solution in the second part. The problems are subjective in nature to reinforce the concepts which can then be applied to solve any objective-type problem. Problems are typically categorized into: Reactions, Conversions and Mechanisms. The problems in later chapters draw upon the concepts and integrate reactions learned in earlier chapters.', '0', 'Organic Chemistry.jpg', ' 3', 'Dr K Singh', 0),
(13, 11, ' Analytical Techniques in biotechnology', ' This book, with contributions from eminent academicians from India and abroad, focuses on the methodology adopted for determining different types of parameters necessary for the design, analysis and monitoring of various activities in agriculture, biotechnology and environmental engineering. With the advancement in life sciences and modern technology and the increased applications of this technology, the development of concepts, techniques and instrumentation are so essential for these fields. And this compact and concise text describes such methods and instrumental techniques in an easy- to-read style. ', '0', 'Analytical Techniques in biotechnology.jpg', ' 4', 'Dr Anil Panda', 0),
(14, 11, ' Genetic Engineering', ' Genetic Engineering, Volume 24 contains discussions of contemporary and relevant topics in genetics, including: -Gene silencing: principles and applications, -Integrins and the myocardium, -Plant virus gene vectors: biotechnology and applications in agriculture and medicine, -Novel approaches to controlling transcription, -Use of DNA polymorphisms in genetic mapping, -Application of FLP/FRT site-specific DNA recombination system in plants.  This principles and methods approach to genetics and genetic engineering is essential reading for all academics, bench scientists, and industry professionals wishing to take advantage of the latest and greatest in this continuously emerging field.', '0', 'Genetic Engineering.jpg', ' 4', 'Dr Sk Chand', 0),
(15, 11, ' plant tissue culture books', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', '0', 'plant tissue culture books.jpg', ' 4', 'Archa P singh', 0),
(16, 11, ' Organic Farming ', ' Organic is not a fashion statement but a way of life. It is the most common thing; it is the ‘nature’ around us. Organic is not only for the classes but for the masses. Organic is not a product. It is the concept of following a process. Organic is natural, original, pure & real. It is unconditional compliance with nature’s rules....  Organic is sustainable....  Let’s understand more about this deep relationship between Organic & Mother Nature.', '0', 'Organic Farming .jpg', ' 5', 'Surjit ChakarBorty', 0),
(17, 0, ' Technical Writing', ' Technical Writing: A Practical Guide for Engineers, Scientists, and Nontechnical Professionals, Second Edition enables readers to write, edit, and publish materials of a technical nature, including books, articles, reports, and electronic media. Written by a renowned engineer and widely published technical author, this guide complements traditional writer’s reference manuals on technical writing through presentation of first-hand examples that help readers understand practical considerations in writing and producing technical content. These examples illustrate how a publication originates as well as various challenges and solutions.  The second edition contains new material in every chapter including new topics, additional examples, insights, tips and tricks, new vignettes and more exercises. Appendices have been added for writing checklists and writing samples. The references and glossary have been updated and expanded. In addition, a focus on writing for the nontechnical persons working in the technology world and the nonnative English speaker has been incorporated. Written in an informal, conversational style, unlike traditional college writing texts, the book also contains many interestin', '0', 'Technical Writing.jpg', ' 6', 'Philpe A ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `books_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub_name` int(11) NOT NULL,
  `book_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `btech`
--

CREATE TABLE `btech` (
  `id` int(200) NOT NULL,
  `course_id` int(221) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `pdf` tinyint(1) NOT NULL,
  `images` varchar(300) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `author` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `btech`
--

INSERT INTO `btech` (`id`, `course_id`, `name`, `description`, `pdf`, `images`, `semester`, `author`, `status`) VALUES
(3, 12, ' Basic Electrical Engineering', ' The book, made up of five chapters, systematically covers the five units of the syllabus. It begins with a detailed discussion on the fundamentals of electric circuits. Dc circuits, AC circuits, 3-phase circuits, resonance and the network theorems. Lecture-type presentation of the rudiments of the fundamentals in conjunction with hundreds of solved examples is the strength of this book. Magnetic circuits and various magnetic elements and their properties, with number of illustrations are presented. Dc machines and transformers are further dealt with. Equivalent circuits of machines supported with the respective photographs will ease The reader to understand the concepts of machines much better.', 0, 'Basic Electrical Engineering.jpg', ' 1', 'K.N Sri Nivas ', 1),
(4, 12, ' Engineering Graphics _ Design', ' THis Book is usefull for first year engineering students', 0, 'Engineering Graphics _ Design.jpg', ' 1', 'Arun Oday Kumar', 1),
(5, 12, ' Math-1', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Math-1.jpg', ' 1', 'Br Grewal', 1),
(6, 12, ' Semiconductor Physics', ' This book is an introduction to the physical principles of modern semiconductor devices and their advanced fabrication technology. It begins with a brief historical review of major devices and key technologies and is then divided into three sections: semiconductor material properties, physics of semiconductor devices and processing technology to fabricate these semiconductor devices.', 0, 'Semiconductor Physics.jpg', ' 1', 'Simon Sze', 0),
(7, 12, ' Chemistry-I ', ' Chemistry of higher level has too many laws, theories, reactions, rules and its exceptions and remembering all them on tips all the time is not an easy task. Handbook of is an important, useful and compact reference book suitable for everyday study, problem solving or exam revision for class XI XII. This book is a multi-purpose quick revision resource that contains almost all key notes, terms, definitions, equations, formulae that all students professionals in will want to have this essential reference book within easy reach. Its unique format displays formulae clearly, places them in the context and crisply identifies describes all the factors involved, summary about every equations and reactions that one might want while learning chemistry is one of the unique features of the book, a stimulating and crisp extract of fundamental is to be enjoyed by the beginners and experts equally. The book is from its first edition and one of the most useful books of its type. Table of contents Bas', 0, 'Chemistry-I .jpg', ' 2', 'Spectrum Publication', 0),
(8, 12, ' English', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'English.jpg', ' 2', 'Manoj Kumar ', 0),
(9, 12, ' Maths-II', ' 1 - problem solving and program planning 2 - overview of C language - fundamentals data types4 - operators and expressions5 - standard input/output6 - decision making statements7 - looping statements8 - Functions9 - arrays10 - strings11 - structures and unions 12 - pointers13 - file h and ing14 - library functions and header files15 - pre-processor directives.', 0, 'Maths-II.jpg', ' 2', 'Br Grewal', 0),
(10, 12, ' Programming for Problem Solving', ' 1 - problem solving and program planning 2 - overview of C language - fundamentals data types4 - operators and expressions5 - standard input/output6 - decision making statements7 - looping statements8 - Functions9 - arrays10 - strings11 - structures and unions 12 - pointers13 - file h and ing14 - library functions and header files15 - pre-processor directives.', 0, 'Programming for Problem Solving.jpg', ' 2', 'Dr Sm Shah', 0),
(11, 12, ' Data structure _ Algorithms', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Data structure _ Algorithms.jpg', ' 3', 'Good Rich', 0),
(12, 12, ' Development of Societies', ' There were ostriches in India.  Gold was dug up in the Himalayas by animals.  Coins of Greek rulers in India showed Krishna wearing Greek clothes.  Ethiopian military slaves founded kingdoms across India.', 0, 'Development of Societies.jpg', ' 3', 'Jai Krishan Murty', 0),
(13, 12, ' Digital Electronics', ' The eleventh edition of Electronic Devices and Circuit Theory offers students a complete, comprehensive coverage of the subject, focusing on all the essentials they will need to succeed on the job. Setting the standard for nearly 30 years, this highly accurate text is supported by strong pedagogy and content that is ideal for new students of this rapidly changing field. This text is an excellent reference work for anyone involved with electronic devices and other circuitry applications, such as electrical and technical engineers.', 0, 'Digital Electronics.jpg', ' 3', 'Robert ', 0),
(14, 12, ' Mathematics-III', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Mathematics-III.jpg', ' 3', 'Br Grewal', 0),
(15, 12, ' Object Oriented Programming', ' Object-oriented programming with C++, 8th edition is here with some valuable updates. The new edition helps students to assess their learning by answering questions based on learning outcomes. Objective-type questions and dry-run questions are introduced to make students exam ready. A new appendix on interview questions is for those seeking to join the industry. The book is designed for students studying at the undergraduate level. It provides all-inclusive concepts and programs on object-oriented programming with C++ as an implementation language. <Br> highlights:</br> 150+ multi-choice questions</br> 100+ dry-run exercises</br> 90+ interview questions</br> Two new projects</br> New appendix on implementation of abstract data types</br> classification of review questions on OBE (outcome-based education) learning pattern</br> All programs upgraded for compatibility with ansi C++</br>.', 0, 'Object Oriented Programming.jpg', ' 3', 'Pearson', 0),
(16, 12, ' Computer Organisation _ Architecture', ' With clear, concise and easy-to-read material, the tenth edition of Computer Organization and Architecture is a user-friendly source for students studying computers. Subjects such as I/O functions and structures, RISC and parallel processors have been integrated with real-world examples throughout. Using brand new material and strengthened pedagogy, this text ensures that students are effectively engaged in the world of computer organization and architecture. 1. Chapter on GPUs (General Purpose Computing on Graphics Processing Units), highlighting one of the most important new developments in computer science  2. Heterogeneous Multicore Processors are surveyed in a new section of the text  3. Embedded Systems and Microcontrollers overview has been greatly expanded and revised  4. Cloud Computing is newly discussed in the text  5. System Performance issues coverage has been revised, expanded and reorganized for a clearer and more thorough treatment throughout the text  6. Flash Memory ', 0, 'Computer Organisation _ Architecture.jpg', ' 4', 'Spectrum Publications', 0),
(17, 12, ' Discrete Mathematics', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Discrete Mathematics.jpg', ' 4', 'Willy Publications', 0),
(18, 12, ' Operatin Syytem', ' The main software when using the computer is the operating system. The operating system defines all the experiences when using a computer; it manages the hardware and software resources of the computer system, provides a way for applications to deal with the hardware without having to know all the details of the hardware, and it is the software that makes all the programs work. It organizes and controls the hardware on computers. The operating system is the first software we see when we turn on the computer, and the last software we see when the computer is turned off.  The operating system plays the role of the good parent, making sure that each application gets the necessary resources while playing nicely with all the other applications, as well as husbanding the limited capacity of the system for the greatest good of all the users and applications. Even if a particular computer is unique, an operating system can ensure that applications continue to run when hardware upgrades and up', 0, 'Operating Systems.jpg', ' 4', 'K Reedy Pradeep  ', 0),
(19, 12, ' Universal Human Values II', ' This textbook, designed for a foundation course on Human Values and Professional Ethics, is an outcome of the long-drawn search, visualization and extensive experimentation by the authors and their colleagues towards evolving an effective and universally acceptable methodology for introducing value education in the present curricula of technical and other professional institutions.', 0, 'Universal Human Values II.jpg', ' 4', 'Dr Saroj Kumar', 0),
(20, 12, ' Computer Networks ', ' The Advanced Computer Network book covers most of the key network technologies, services, and protocols that are frequently used in current networks [SS-1]. The book helps you to understand Optical Networking Standards - SONET/SDH and DWDM; Packet Switching Protocols - X.25, SMDS, and ATM; Protocols and Interfaces in TCP/IP suite; Internet Routing Protocols - RIP, OSPF, BGP, MOSPF, and DVMRP; Network Management Protocol - SNMP; Traffic Engineering and Capacity Planning; Protocols and Standards for Multimedia over Internet - RTP, RSVP, G.729, G.723, and H.323; Network Security Standards - DMZ, NAT, Prot forwarding, Proxy Server, and Packet Filtering; and Backbone Network Design.', 0, 'Computer Networks .jpg', ' 5', 'Pearson', 0),
(21, 12, ' Database Management System', ' Database system concepts presents the fundamental concepts of database management in an intuitive manner geared toward allowing students to begin working with databases as quickly as possible. A familiarity with basic data structures, computer organization, and a high-level programming language are the only prerequisites. Important theoretical results are covered, but formal proofs are omitted. In place of proofs, figures and examples are used to suggest why a result is true.', 0, 'Database Management System.jpg', ' 5', 'Dr Satish Jain', 0),
(22, 12, ' Formal Language _ Automata Theory', ' This book, Finite Automata and Formal Languages (A Simple Approach), includes various concepts pertaining to theoretical foundation of Computer Science, such as Finite Automata (DFA and NFA), Regular expressions and regular languages, Properties of regular languages, Context-free grammar, Properties of context-free grammar, Pushdown Automata, and Turing machines in a systematic manner which makes the study of this subject much easier and interesting as well. A new problem-solving approach is used, which helps to tackle more number of problems. The book is written using simple language and more number of applications and problems have been covered so that any student can understand the subject very well.', 0, 'Formal Language _ Automata Theory.jpg', ' 5', 'Pearson', 0),
(23, 12, ' Compiler Design', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Compiler Design.jpg', ' ', 'A .Punta Ambekar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bttm`
--

CREATE TABLE `bttm` (
  `id` int(200) NOT NULL,
  `course_id` int(221) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(1212) NOT NULL,
  `pdf` varchar(1) NOT NULL,
  `images` varchar(300) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `author` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
(1, 'bba'),
(2, 'bca'),
(3, 'bhmct'),
(4, 'biotech'),
(5, 'btech'),
(6, 'mba'),
(7, 'pharma'),
(8, 'bttm');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(200) NOT NULL,
  `username` varchar(1212) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bookname` varchar(300) NOT NULL,
  `issue` date NOT NULL,
  `returnb` date NOT NULL,
  `fine` varchar(122) NOT NULL,
  `status` varchar(111) NOT NULL,
  `name` varchar(200) NOT NULL,
  `semester` int(200) NOT NULL,
  `rollno` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `username`, `email`, `bookname`, `issue`, `returnb`, `fine`, `status`, `name`, `semester`, `rollno`) VALUES
(1, 'samridh sood', 'samr@gmail.com', 'maths', '2021-12-08', '2021-12-21', '0', '1', 'samridh', 4, 12345),
(2, 'samridh sood', 'samr@gmail.com', 'eng', '2021-12-08', '2021-12-21', '', '0', 'samridh', 4, 12345),
(3, 'samrih', 'samrih@gmail.com', 'Software Engineering By Rhythm Sharma', '2021-12-15', '2021-12-22', '0', '1', 'samridh', 4, 1234),
(5, 'raghav sharma', 'raghav@gmail.com', 'Basic Electrical Engineering', '2021-12-14', '2021-12-31', '0', '1', 'raghav', 4, 1917635);

-- --------------------------------------------------------

--
-- Table structure for table `mba`
--

CREATE TABLE `mba` (
  `id` int(200) NOT NULL,
  `course_id` int(221) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(1212) NOT NULL,
  `pdf` varchar(1) NOT NULL,
  `images` varchar(300) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `author` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mba`
--

INSERT INTO `mba` (`id`, `course_id`, `name`, `description`, `pdf`, `images`, `semester`, `author`, `status`) VALUES
(1, 3, ' Accounting for Management', ' Financial Accounting Essentials You Always Wanted To Know: 4th Edition prepares new managers and leaders with the foundation to understand financial accounting, a critical tool to document finances to shareholders, government tax authorities and other critical parts of the business ecosystem. The chapters follow in a logical flow to describe the key components of financial accounting, including:\r\nWhy are financial accounting systems necessary?\r\nFinancial accounting systems and terms\r\nThe Balance Sheet\r\nThe Income Statement\r\nThe Statement of Cash Flows\r\n\r\nEach chapter provides clear examples of the financial accounting tools and includes practice examples to help train the reader in the usage of these critical tools.', '0', 'Accounting for Management sem-1.jpg', ' 1', 'Spectrum', 1),
(2, 3, ' Managerial Economics', ' The discipline of managerial economics is often considered as “too theoretical and not practical enough for the real world.” The seventh edition of Managerial Economics is an attempt to provide a resourceful supplement to classroom teachings that will help students understand the importance and utility of economic theory for business decision making.\r\nThis text is designed for upper-level undergraduate and first-year MBA courses in managerial economics and applied economics. In addition to discussing the applications of economic theory to the firm, this text includes chapters on various tools of analysis that are helpful to business decision makers but that are not part of the core of traditional microeconomic theory. These are demand, production and cost estimation using regression analysis, forecasting, capital budgeting and risk analysis. A discussion of linear programming is also available online, along with a review of the time value of money. A review of the mathematical concepts and tools used in the text has been placed on the Companion Website.', '0', 'Managerial Economics sem-1.jpg', ' 1', 'Paul G. Keat', 1),
(3, 3, ' Organizational Behaviour', ' The new edition of Organizational Behavior includes a rich array of exercises, cases and applied materials such as the Kouzes and Posner Leadership Practices Inventory and Pfeiffer Annual Edition exercises available in the OB Skills Workbook. It also focuses more on the hot topic of ethics throughout the entire book to ensure it is contemporary and engaging. The text also introduces two brand new key features 2018 Finding the Leader in You\" and \"Taking it Online\". \"Finding the Leader in You\", discusses leading in the workplace in a personal and applied way. The goal is to make the material more relevant and applicable to today\'s readers. The \"Taking it Online\" feature will take the reader from the book to an online case, activity, self-assessment or video clip of the leader they are reading about.', '0', 'Organizational Behaviour sem-1.jpg', ' 1', 'Vibrant Publications', 1),
(4, 3, ' Principles & Practices of Management', ' This book aims to provide extensive theoretical knowledge with practical overtones to the students and application based knowledge to the professionals to successfully implement performance management systems and strategies. With such comprehensive knowledge and practical skills HR students would be able to develop their capabilities as future manager to manage performance in any organization.', '0', 'Principles & Practices of Management sem-1.jpg', ' 1', 'Dipok Kumar Bhattacharya', 0),
(5, 3, ' Quantitative Techniques', ' About the book: quantitative techniques :new format: 3rd edition \"This is a reformatted version of all time great book. The subject concept have been developed at several points all over the text. The book has explains various important quantitative techniques in the simplest possible way. The style is so lucid that even a reader having no formal training of mathematics and statistics will not find it difficult to understand and apply these techniques.', '0', 'Quantitative Techniques sem-1.jpg', ' 1', 'Mohd. Rizwanullah', 0),
(6, 3, ' Business Environment', ' Business environment 4E, is a revised edition that presents in-depth knowledge with updated information about latest developments in the business environments in India\r\n. This book is useful to understand the ever-changing environment in which businesses operate. The dynamism of the liberalised industrial and trade environment, The change in government structure, plans and policies (domestic and international), the growing competition, and market forces that guide investment decisions of which impact the operations and profits of businesses, have been discussed to provide a comprehensive reading', '0', 'Business Environment sem-2.jpg', ' 2', 'Spectrum', 0),
(7, 3, ' Financial Management', ' Financial Management, 12th edition is an honest and brave attempt at combining theory with practical applications. It begins with the discussion of fundamental concepts of value and return, risk and return relationship and valuation of shares and bonds. With this foundation, readers can easily understand the theories and methods, decision criteria, and financial policies and strategies necessary to manage funds and create and enhance the value of the Firm. ', '0', 'Financial Management sem-2.jpg', ' 2', 'Thummuluri Siddahiaya', 0),
(8, 3, ' Human Resource Management', ' Updated chapters with dozens of new topics, practical examples, and research insights. Seven new end-of-chapter cases on Starbucks, Tesla, Techtonic, Uber, HubSpot, Vice Media, and a meatpacking firm have been added to the text. They replace older cases in the respective chapters. All other application cases have also been updated, as necessary. This book’s Strategic HR features give students a bird’s-eye view of how all the topics in each chapter fit together, and a tool instructor can use to illustrate these interrelationships.In addition, a Fully Integrated Strategy Case and Strategy Maps help to provide the most comprehensive treatment of strategic human resource management in an HR survey text.', '0', 'Human Resource Management sem-2.jpg', ' 2', 'Jaquina Gilbert', 0),
(9, 3, ' Marketing Management', ' A core text for MBA marketing management courses, and for university short courses for executives; a supplemental text for undergraduate and postgraduate marketing strategy courses, and CIM strategy courses. Marketing Management and Strategy is a concise, practical management guide to the latest ideas in marketing and strategy for MBA and executive courses. It has already been adopted by many leading British business schools. It focuses on key issues relevant to modern business, drawing on the author’s experience as a consultant to many major international companies. It gives practical, step-by-step guides to developing a marketing strategy, making pricing decisions and developing advertising and communications plans. Its interdisciplinary approach is designed to appeal to all senior managers.', '0', 'Marketing Management sem-2.jpg', ' 2', 'Pearson', 0),
(10, 3, ' Production and Operations Management', ' he book presents a broad introduction to the field of operations in a realistic and practical manner, while offering the largest and most diverse collection of issues on the market. This edition employs a strategic framework that identifies and illustrates facilities, inventory, transportation and information as the key factors of operations management–to help readers better understand concepts important to today’s operations management professionals. Students and practitioners will be able to relate the operations management theories discussed in the book to their actual practice in the Indian companies.', '0', 'Production and Operations Management sem-2.jpg', ' 2', 'Pearson', 0),
(11, 3, ' Applied Operations Research ', ' Operations Research: A Practical Introduction is just that: a hands-on approach to the field of operations research (OR) and a useful guide for using OR techniques in scientific decision making, design, analysis and management. The text accomplishes two goals. First, it provides readers with an introduction to standard mathematical models and algorithms. Second, it is a thorough examination of practical issues relevant to the development and use of computational methods for problem solving.  Highlights:', '0', 'Applied Operations Research sem-3.jpg', ' 3', 'S. Chand', 0),
(12, 3, ' Corporate Legal Environment', ' Based on content required by the Association to Advance Collegiate Schools of Business, THE LEGAL ENVIRONMENT TODAY: BUSINESS IN ITS ETHICAL, REGULATORY, E-COMMERCE, AND GLOBAL SETTING, 8e equips you with working knowledge of business-related laws while strengthening the critical reasoning skills you need to interpret and apply them. ', '0', 'Corporate Legal Environment sem-3.jpg', ' 3', 'T.V Ambuli', 0),
(13, 3, ' Project Evaluation & Implementation ', ' Planning and Evaluation of Irrigation Projects: Methods and Implementation presents the considerations, options and factors necessary for effective implementation of irrigation strategies, going further to provide methods for evaluating the efficiency of systems-in-place for remedial correction as needed.  As the first book to take this lifecycle approach to agricultural irrigation, it includes real-world examples not only on natural resource availability concerns, but also on financial impacts and measurements.', '0', 'Project Evaluation & Implementation sem-4.jpg', ' 4', 'Bardo Fraunholz', 0),
(14, 3, ' Strategic Management', ' Concepts in Strategic Management and Business Policy, 15e, has continued to develop around three key themes—globalization, innovation and sustainability— which was introduced in the previous edition. In the current order of things around the world, these three strategic issues comprise the cornerstone all organizations must build upon to push their businesses forward.', '0', 'Strategic Management sem-4 .jpg', ' 4', 'Pearson', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pharma`
--

CREATE TABLE `pharma` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `pdf` tinyint(4) NOT NULL,
  `images` varchar(5000) NOT NULL,
  `semester` int(11) NOT NULL,
  `author` varchar(5000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharma`
--

INSERT INTO `pharma` (`id`, `course_id`, `name`, `description`, `pdf`, `images`, `semester`, `author`, `status`) VALUES
(2, 5, ' Communication skills', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Communication skills sem-1.jpg', 1, 'TCA', 1),
(3, 5, ' Human Anatomy and physiology', ' Deals with the cell, the tissues, the blood, the heart, the respiratory system, nervous system, digestive system, reproductive system, endocrinology, etcetera', 0, 'Human Anatomy and physiology sem-1 .jpg', 1, 'TCA', 1),
(4, 5, ' Pharmaceutical Analysis', ' Pharmaceutical analysis is the application of analytical procedures used to determine the purity, safety and quality of drugs and chemicals. Meant for undergraduate students of pharmacy, this book emphasises the basics of pharmaceutical analysis, techniques used in analysis, methods of expressing concentrations, preparation and standardization of various molar and normal solutions, titrations & electrochemical methods of analysis. Recent developments in pharmaceutical analysis have been incorporated', 0, 'Pharmaceutical Analysis I sem-1.jpg', 1, 'Dr. Arti Swami', 1),
(5, 5, ' Pharmaceutical ', '  Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Pharmaceutics I sem-1.jpg', 1, 'TCA', 0),
(7, 5, ' Remedial Biology', ' 1 The living world 2 Morphology of flowering plants 3 Body fluids and circulation 4 Digestion and absorption 5 Breathing and respiration 6 Excretory products and their elimination 7 Neural control and coordination 8 Chemical coordination and regulations 9 Human reproduction 10 Plants and mineral nutrition 11 Photosynthesis 12 Plant respiration', 0, 'Remedial Biology sem-1.jpg', 1, 'TCA', 0),
(8, 5, ' Biochemistry', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Biochemistry sem-2.jpg', 2, 'TCA', 0),
(9, 5, ' Computer Applications in pharmacy ', ' THIS BOOK DESIGNED AS PER NEW SYLLABUS ISSUED BY PHARMACY COUNCIL OF INDIA FOR B.PHARM (2ND SEMESTER STUDENTS)...', 0, 'Computer Applications in pharmacy sem-2.jpg.webp', 2, 'Rakesh Kumar', 0),
(10, 5, ' Environmental sciences', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Environmental sciences sem-2.jpg', 2, 'James Devillers', 0),
(11, 5, ' Human Anatomy and and physiology 2', ' Reading books is a kind of enjoyment. Reading books is a good habit. We bring you a different kinds of books. You can carry this book where ever you want. It is easy to carry. It can be an ideal gift to yourself and to your loved ones. Care instruction keep away from fire.', 0, 'Human Anatomy and and physiology 2 sem-2.jpg', 2, 'Arisen Production', 0),
(12, 5, ' Pathophysiology', ' The goal of this trusted text is to introduce you to clinical medicine by reviewing the pathophysiologic basis of 132 diseases (and associated signs and symptoms) commonly encountered in medical practice. The authors, all experts in their respective fields, have provided a concise review of relevant normal structure and function of each body system, followed by a description of the pathophysiologic mechanisms that underlie several common diseases related to that system. The accessible presentation features high-quality full-color illustrations, and numerous tables and diagrams.', 0, 'Pathophysiology sem-2.jpg', 2, 'Rajneesh Gaur', 0),
(13, 5, ' Pharmaceutical Organic ', ' 1  Benzene and its derivatives 2 Phenols 3 Fats and oils 4 Polynuclear aromatic hydrocarbons 5 Cycloalkanes', 0, 'Pharmaceutical Organic sem2.jpg', 2, 'SIA Productions', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(200) NOT NULL,
  `name` varchar(221) NOT NULL,
  `rollno` varchar(300) NOT NULL,
  `batch` varchar(1212) NOT NULL,
  `course` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `status` int(11) NOT NULL,
  `images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `rollno`, `batch`, `course`, `email`, `semester`, `status`, `images`) VALUES
(1, 'raghav', '1917635', '2019-2023', 'btech', 'raghav@gmail.com', '4', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `rollno` varchar(221) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `rollno`, `email`, `password`, `cpassword`) VALUES
(4, 'Andrie Diue', '12345', 'manassood1999@mail.com', '1234', '1234'),
(15, 'raghav', '1917635', 'raghav@gmail.com', '123456', '123456'),
(17, 'ra', 'ra', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bba`
--
ALTER TABLE `bba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bca`
--
ALTER TABLE `bca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bhmct`
--
ALTER TABLE `bhmct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biotech`
--
ALTER TABLE `biotech`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `btech`
--
ALTER TABLE `btech`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bttm`
--
ALTER TABLE `bttm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mba`
--
ALTER TABLE `mba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharma`
--
ALTER TABLE `pharma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bba`
--
ALTER TABLE `bba`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bca`
--
ALTER TABLE `bca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `bhmct`
--
ALTER TABLE `bhmct`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `biotech`
--
ALTER TABLE `biotech`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `btech`
--
ALTER TABLE `btech`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `bttm`
--
ALTER TABLE `bttm`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mba`
--
ALTER TABLE `mba`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pharma`
--
ALTER TABLE `pharma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
