-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2020 at 07:05 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u600108121_inces`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(35) NOT NULL,
  `First Name` varchar(25) NOT NULL,
  `Last Name` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone No` varchar(12) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `First Name`, `Last Name`, `Email`, `Phone No`, `password`) VALUES
('admin', 'Administrator', 'Inces', 'admin@admin.admin', '0000000000', '$2y$10$/nqSUUZscwB5CNCYWug7Zu24UMKDUgALkYYyDqeQUf1CQW/IGpJGu');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `BlogID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Content` text NOT NULL,
  `Date` date NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`BlogID`, `Title`, `Author`, `image`, `Content`, `Date`, `Status`) VALUES
(1, 'Impact of COVID-19 pandemic', 'Kushagriti Chopra', '1594476494_Impact of Covid 19.jpg', 'The Covid-19 Pandemic started as an epidemic mainly limited to China has now become a truly global pandemic. Now, if we talk about the impact of COVID-19 pandemic on the Indian Economy, it has mainly been disruptive. While Covid-19 may not have the scale of pandemics of the past (as of date), the economic damage has and will continue to affect more people than the disease itself. The question in everyone&rsquo;s mind is that &lsquo;Will things go back to normal?<br><br>Overall Corona Virus cases in India are around 2 lakhs. COVID-19 is having a \'deep impact\' on Indian businesses, over the coming month\'s jobs are at high risk because firms are looking for some reduction in the workforce. Further, it is added that already COVID-19 crisis has caused an unprecedented collapse in economic activities over the last few weeks. The present situation is having a &quot;high to very high&quot; level impact on their business, according to almost 72 per cent of respondents. Further, 70 percent of the surveyed firms are expecting a de-growth sales in the year 2020-21. There are three significant channels of impact for Indian businesses, according to the report, namely linkages, supply chain, and macroeconomic factors. Business activity in the foreign markets is slow, which implies a negative impact on the top line of these companies. Sectors that would be much affected include logistics, auto, tourism, metals, drugs, pharmaceuticals, electronic goods, and retail, among others. COVID-19 no doubt has disrupted human lives and global supply chain, but the pandemic is a severe demand shock which has offset the green shoots of recovery of the Indian economy that was visible towards the end of 2019 and early 2020. The revised Gross Domestic Product (GDP) estimates for India downwards by 0.2 percentage points for the fiscal year 2020 to 4.8 per cent and by 0.5 per cent for the fiscal year 2021 to 6 per cent Further, it is stated that the extent of the actual impact will depend upon the severity and duration of the outbreak. Due to lockdown, Reduction in the urban transaction can lead to a steep fall in the consumption of non-essential goods. Announcement of sudden lockdown resulted in the state of the Indian Economy, the business was shut down, MNC&rsquo;s and other private companies were not working. Majorly, the import and export of goods were hung up. Though, the lockdown was very important for everyone to fight from Corona Virus. If we compare the service sector and agriculture sector, both require equal hard work. Therefore, the service sector contributes more than 50% of the GDP. But it is the agricultural sector, which employs more than 50% of the population. In that sense, more number of people in India are supported by agriculture. Due to weak domestic consumption and consumer sentiment, there can be a delay in investment which further adds pressure on the growth. In terms of trade, China is the world&rsquo;s largest exporter and second-largest importer. Up to a large extent, it will impact the Indian industry as the dependence of India on China is enormous. India&rsquo;s total electronic imports account for 45% of China. China is India&rsquo;s 3rd largest export partner and accounts for around 5% share. The impact may result in the following sectors, namely organic chemicals, plastics, fish products, cotton, ores, etc. We also can&rsquo;t ignore that most of the Indian companies are located in the eastern part of China. One-third of machinery and almost two-fifths of organic chemicals that India purchases from the world come from China for automotive parts and fertilizers China&rsquo;s share in India&rsquo;s import is more than 25%. Around 65 to 70% of active pharmaceutical ingredients and about 90% of certain mobile phones come from China to India. Therefore, we can say that due to the current outbreak of coronavirus in China, the import dependence on China will have a significant impact on the Indian industry. <br><br>We can\'t ignore that post-COVID-19, some economies are expected to adopt de-risking strategies and shift their manufacturing bases from China. This can create opportunities for Indians. Opportunities will largely depend on how quickly the economy recovers and the pace at which the supply chain issues are addressed. Apart from providing robust safety nets for the vulnerable, a focus on ensuring job continuity and job creation will be imperative. There is an urgent need to mobilize resources to stimulate the economy for increased demand and employment. It is expected that the course of economic recovery in India will be smoother and faster than that of many other advanced countries. India took its first tentative steps towards restarting its stalled economy. As it relaxed its strict national lockdown to permit the limited resumption of industrial activities, the government&rsquo;s decision to allow specific sectors to restart operations is intended to help alleviate a potential economic and humanitarian crisis. ', '2020-06-17', 1),
(2, 'Managing Workplace Depression', 'Kushagriti Chopra', '1594476635_Depression.jpg', 'Depression is a common and serious medical illness that negatively affects how you feel the way you think and how you act. Depression causes feelings of sadness and/or a loss of interest in activities once enjoyed. It can lead to a variety of emotional and physical problems and can decrease a person&rsquo;s ability to function at work and home. There are symptoms of depression that can vary from mild to severe. Feeling sad or having a depressed mood, Changes in appetite like weight loss or gain unrelated to dieting, Trouble sleeping or sleeping too much, Loss of energy or increased fatigue, Increase in purposeless physical activity (e.g., hand-wringing or pacing) or slowed movements and speech (actions observable by others), Feeling worthless or guilty, difficulty thinking, concentrating or feeling to make decisions like death or suicide. <br><br>Depression affects an estimated one in 15 adults (6.7%) in any given year. One in six people (16.6%) will experience depression at some time in their life. It can strike at any time, but on average, it first appears during the late teens to mid-20s. Women are more likely than men to experience depression. Some studies show that one-third of women will experience a major depressive episode in their lifetime. Both grief and depression may involve intense sadness and withdrawal from usual activities. Depression and stress are associated with a decrease in morale, lower productivity, and workplace safety problems. Cumulative work stress is even a risk factor for coronary heart disease and other stress responses. Signs of workplace depression Employee productivity, morale, and safety can affect your organization&rsquo;s bottom line. While your organization should not be expected to diagnose or treat depression, stay aware of signs of workplace depression. It&rsquo;s important to encourage any employees who display symptoms of depression to seek assistance. Given the serious economic effect of depression in the workplace, many researchers strongly suggest it is not only appropriate but imperative, that companies begin to design and implement more aggressive responses to this serious employee health issue. The employees must believe the company genuinely cares about their wellbeing if they are to feel safe in seeking help for their depression at work. If the current corporate culture is one of mistrust, anger, and hostility, employers might be better served to work on repairing their relationships with staff before attempting to address employee depression. When you have depression, it&rsquo;s hard to be a productive member of your team it is more likely to miss work altogether, or get less done at the office because you&rsquo;re too tired, unmotivated, or just can&rsquo;t concentrate. Depression isn&rsquo;t something that simply goes away. The person needs time and the right treatments to get back into the groove at work. <br><br>Here are a few tips to help you cope with it on the job. Depression might be a secret you only share with close friends and family, but having an ally at work who understands what you&rsquo;re going through can help you out. If you&rsquo;re comfortable revealing your condition to your manager, someone in HR, or a co-worker, you&rsquo;ll have at least one person who can stand up for you in difficult situations. Plus, they can offer a compassionate ear when you need to vent. Depression can make even the little things in life difficult to get through. So, of course, it can take a toll on your job performance, too. Rather than pushing yourself through your workdays to the point of complete exhaustion, these tips can help keep your depression under control. Talk to a trusted co-worker and develop strategies to manage stress. And remember, it&rsquo;s all right to take some time off if you need to.<br>The lesson we all need to learn is that it&rsquo;s okay to take time to take care of yourself in fact; it&rsquo;s a very important factor in your professional success. Sometimes we ignore our symptoms for a long time and are so busy with work that it seemed ludicrous to take time for ourselves. Finally, remember that you won&rsquo;t only get through this; you may even be a better employee and discover new things about yourself because of it. In the meantime, find your village of support and don&rsquo;t ever feel the need to suffer in silence. <br><br>You are not alone.', '2020-06-25', 1),
(5, 'Impact of India China border dispute on Indian Economy', 'Kushagriti Chopra', '1594701470_INdia China.jpg', 'The COVID-19 pandemic had a huge impact on the Indian Economy already. This economic damage has affected more than the disease itself. People are jobless these days with no work to do. It is becoming challenging for everyone to manage everything. The disturbing part for everybody is the tensions at the border between China and India. The results of this would be the major economic fall out of the souring relationship between the two countries.  The economic interdependence of the two neighbours is too deep to be ignored. China and the US are the largest two trading partners of India. While Indian exports to the US outnumber the imports from the country, the same is not true when it comes to China. And hence, to become friends-turned-foes with India would have business repercussions in China too, as China has become the most targeted country after being the origin of the highly spreading disease known as Corona Virus.<br><br>This period is challenging for everyone to go through this pandemic and the tension between China and India. Warriors have been fighting for us on the border and protecting us, so that we can stay safe during this pandemic, all the people out there are outraged after watching all this.  Every social media is highlighted from &ldquo;Boycott China&rdquo; to stop using any gadgets from china. We can feel the pain of that family when we hear about the brutal deaths of our Indian soldiers turning a border or defence dispute into a trade one is an ill-advised move. If we talk about the main imports and exports are from China. India&rsquo;s total export to the country was a mere 3 per cent. We buy more from China than we sell. This trade deficit with China, also a major contributor to India\'s overall trade deficit, is one of the world\'s biggest trade deficits between the two nations. However, the trade has been reduced immoderately over the past few months due to both COVID-19 pandemic and the rising cold vibes between the two nations. Recently, the Confederation of All India Traders (CAIT) released a list of some categories of products that are imported from China that is said to be swapped with goods made in India. This step taken by CAIT will progress our country generate more value for the goods which are made in India. This will be great growth in our Indian economy. <br><br>India&rsquo;s major import from neighbour includes engineering goods, electronics, pharmaceuticals, and automobile components. China&rsquo;s Xiaomi leads the India Smartphone market with a 30 per cent market share, followed by Vivo, Samsung, Realme, and Oppo. Several large Chinese companies spanning handsets, electronic devices, and internet firms are deeply invested in India&rsquo;s consumer market where a fast-growing middle-class and an inspirational young consumer base has helped propel the growth for companies. India\'s emergence as the biggest overseas market for Chinese mobile phone companies is one of the most significant developments in China\'s relations with India over the past few years. The Chinese Smartphone makers have already built factories and create jobs in India. Interestingly, these Smartphone makers have embraced our Prime Minister\'s &quot;Make in India&quot; program. Xiaomi locally manufactures 95 per cent of the phones it sells in India  and hence, any adverse announcements forcing Chinese businesses to shut shop in India will add to the burgeoning unemployment rates in India. India must try to aggressively acquire a higher share of global trade by raising its competitiveness. India now has an insignificant share in world trade. If it is not careful, much smaller countries will further chip away.<br><br>While it is widely perceived that India might be most impacted economically in case of a conflict with China, the latter, too, will lose a significant and perhaps, one of the most easily accessible markets. Hence, China will stand as much to lose as India.  ', '2020-07-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ContactID` int(11) NOT NULL,
  `Full Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone No` varchar(12) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ContactID`, `Full Name`, `Email`, `Phone No`, `Subject`, `Message`, `Status`) VALUES
(1, 'Reece', 'rebads25@gmail.com', '9994710295', 'Internship', 'This is to test if it\'s working or not.', 1),
(2, 'Abhisek Agrawalla', 'abhisekagrawalla93@gmail.com', '+31613784481', 'Website designing', 'Hey,\r\n\r\nLet\'s see how quickly I get a reply. \r\n\r\nCheers,\r\nAbhisek.', 0),
(3, 'Hello', 'hr@hello.in', '1234567892', 'Demo', 'Hi', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`BlogID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ContactID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `BlogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
