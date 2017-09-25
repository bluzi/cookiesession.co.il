-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2016 at 04:45 PM
-- Server version: 5.5.44
-- PHP Version: 5.4.45-0+deb7u1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `url` varchar(767) NOT NULL,
  `name` varchar(767) NOT NULL,
  `physical_path` text NOT NULL,
  `permission` tinyint(4) NOT NULL,
  `model` text NOT NULL,
  `title` varchar(797) NOT NULL,
  `decsription` varchar(737) NOT NULL,
  `keywords` varchar(737) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`url`, `name`, `physical_path`, `permission`, `model`, `title`, `decsription`, `keywords`, `is_permanent`, `is_deleted`) VALUES
('×¢×œ×™× ×•', 'about_us', 'dynamic/about-us', 0, '0', '×¢×œ×™× ×•', '××œ×™×¨×Ÿ ×¤××¨ ×•××œ×•×Ÿ ×¢×‘××“×™', '××œ×™×¨×Ÿ ×¤××¨, ××œ×•×Ÿ ×¢×‘××“×™', 0, 0),
('admin', 'admin_home', 'admin/home', 1, '{}', '', '', '', 1, 0),
('page_admin', 'admin_pages', 'page/list', 1, '{}', '', '', '', 1, 0),
('× ×™×”×•×œ_×¤×•×¡×˜×™×', 'admin_posts', 'post/list', 1, '{}', '', '', '', 1, 0),
('× ×™×”×•×œ_×ª×’×•×‘×•×ª', 'admin_replies', 'reply/list', 1, '{}', '', '', '', 1, 0),
('users_admin', 'admin_users', 'user/list', 1, '{}', '', '', '', 1, 0),
('×¢×œ×™× ×•/××œ×•×Ÿ-×¢×‘××“×™', 'alon_abadi', 'dynamic/alon-abadi', 0, '0', '', '', '', 0, 0),
('×¦×•×¨ ×§×©×¨', 'contact-us', 'dynamic/contact_us', 0, '0', '', '', '', 0, 1),
('×¦×•×¨-×§×©×¨', 'contact_us', 'dynamic/contact-us', 0, '0', '', '', '', 0, 0),
('fd', 'dsf', 'dsf', 0, '1', '', '', '', 0, 1),
('dsf', 'dsfsds', 'dsf', 0, '1', '', '', '', 0, 1),
('×¢×œ×™× ×•/××œ×™×¨×Ÿ-×¤××¨', 'eliran_peer', 'dynamic/eliran-peer', 0, '0', '', '×ž×¤×ª×— ×ª×•×›× ×” ×‘×œ×” ×‘×œ×”', '××œ×™×¨×Ÿ ×¤××¨, ×ž×ª×›× ×ª', 0, 0),
('×¢×œ×™× ×•/×¢×™×“×•-×¡×§×¤×”', 'ido_scapa', 'dynamic/ido-scapa', 0, '0', '', '', '', 0, 0),
('×”×ª×—×‘×¨', 'login', 'admin/login', 0, '{}', '', '×”×ª×—×‘×¨×•×ª ×œ××ª×¨', '×”×ª×—×‘×¨×•×ª, ×—×™×‘×•×¨', 1, 0),
('page_create', 'page_create', 'page/create', 1, '{}', '', '', '', 1, 0),
('page_delete_test', 'page_delete', 'page/delete', 1, '{}', '', '', '', 1, 0),
('page_edit', 'page_edit', 'page/edit', 1, '{}', '', '', '', 1, 0),
('post_add', 'post_create', 'post/create', 0, '{}', '', '', '', 1, 0),
('post_delete_test', 'post_delete', 'post/delete', 1, '{}', '', '', '', 1, 0),
('post_edit', 'post_edit', 'post/edit', 1, '{}', '', '', '', 1, 0),
('reply_create', 'reply_create', 'reply/create', 1, '{}', '', '', '', 1, 0),
('reply_delete', 'reply_delete', 'reply/delete', 1, '{}', '', '', '', 1, 0),
('reply_edit', 'reply_edit', 'reply/edit', 1, '{}', '', '', '', 1, 0),
('Test', 'test', 'test', 0, '1', '', '', '', 0, 1),
('test2dsf', 'testtest', 'testtestdsfsad', 0, '1dsfdsf', '', '', '', 0, 0),
('user_add', 'user_create', 'user/create', 0, '{}', '', '', '', 1, 0),
('user_delete', 'user_delete', 'user/delete', 1, '{}', '', '', '', 1, 0),
('EditUesr', 'user_edit', 'user/edit', 1, '{}', '', '', '', 1, 0),
('tags', 'view_tag', 'tags/view', 0, '[}', '', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `level` tinyint(4) NOT NULL,
  `description` varchar(767) NOT NULL,
  PRIMARY KEY (`level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`level`, `description`) VALUES
(0, 'Everyone'),
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `description` varchar(737) NOT NULL,
  `keywords` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `url` varchar(737) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `language` varchar(2) NOT NULL,
  `is_white_image` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `description`, `keywords`, `author_id`, `url`, `is_deleted`, `datetime`, `language`, `is_white_image`) VALUES
(1, 'fdsfds', '<p>fds</p>', 'fds', 'fds', 5, 'fds', 1, '2015-11-05 22:00:00', 'he', 0),
(2, '×ž×” ×—×“×© ×‘- C# 6?', '<p style="direction: rtl;">×©×œ×•× ×œ×›×•×œ×, <span style="line-height: 1.5;">×©×ž×™ <strong>××œ×™×¨×Ÿ ×¤××¨</strong> ×•×–×”×• ×”×¤×•×¡×˜ ×”×¨××©×•×Ÿ ×‘×‘×œ×•×’ ×”×—×“×© ×©×œ× ×• - <strong>×¡×©×Ÿ ×¢×•×’×™×•×ª</strong>.&nbsp;</span></p><p style="direction: rtl;">×œ××—×¨×•× ×” ×ž×™×™×§×¨×•×¡×•×¤×˜ ×©×—×¨×¨×• ××ª <strong>Visual Studio 2015</strong>, ×•×™×—×“ ××™×ª×• ×’× ××ª <strong>C# 6</strong>. ×”×¤×•×¡×˜ ×”×™×•× ×™×¢×¡×•×§ ×‘×¤×™×¦''×¨×™× ×”×—×“×©×™× ×©× ×¢×©×• ×‘×©×¤×”:</p><h2 style="direction: rtl;">1. Conditional Access Operator</h2><p style="direction: rtl;">×”×—×™×“×•×© ×”×¨××©×•×Ÿ × ×§×¨× Conditional Access Operator (××• "××•×¤×¨×˜×•×¨ ×’×™×©×” ×ž×•×ª× ×ª"), ×”×¡×™×ž×•×Ÿ ×©×œ×• ×”×•× <strong>?.</strong>&nbsp;×•×‘×¡×™×˜×•××¦×™×•×ª ×ž×¡×•×™×™×ž×•×ª ×”×•× ×¢×œ×•×œ ×œ×”×§×œ ×”×ž×•×Ÿ ×¢×œ ×”×—×™×™× ×©×œ×›×.</p><pre class="language-csharp"><code class="language-csharp">if (University != null){ if (University.Students != null) { int numberOfStudents = University.Students.Count; }})</code></pre><p>&nbsp;</p><p style="direction: rtl;">×™×”×¤×•×š ×œ:</p><pre class="language-csharp"><code class="language-csharp">int? numberOfStudents = University?.Students?.Count;</code></pre><p>&nbsp;</p><p style="direction: rtl;">×”××•×¤×¨×˜×•×¨ ×™×—×–×™×¨ null ×× ××—×“ ×ž×”××•×‘×™×™×§×˜×™× ×‘×©×¨×©×¨×ª ×”×•× null, ×ž×” ×©×™×›×•×œ ×œ×”×™×•×ª ×ž××•×“ ×©×™×ž×•×©×™ ×‘×©×¨×©×¨××•×ª ××¨×•×›×•×ª.</p><p><hr class="read-more"></p><h2 style="direction: rtl;">2. Auto Property Initializer</h2><p style="direction: rtl;">×–×•×›×¨×™× Auto Properties? ××•×ª× Properties ×©×ž×’×“×™×¨×™× ×¢× get ×•- set ××•×˜×•×ž×˜×™×™×, ×ž×‘×œ×™ ×œ×ž×ž×© ××ª ×”×’×•×£ ×©×œ×”×? ××– ×¢×›×©×™×• ×’× ××¤×©×¨ ×œ×ª×ª ×œ×”× ×¢×¨×š.</p><p style="direction: rtl;">×‘C# 6 × ×™×ª×Ÿ ×œ×¢×©×•×ª ×”×©×ž×” ×œProperty, ×ž×” ×©×‘×¡×š ×”×›×œ ×—×•×¡×š ×œ×”×’×“×™×¨ ××•×ª×• ×‘- Constructor.</p><p style="direction: rtl;">×¤×¢×:</p><pre class="language-csharp"><code class="language-csharp">class Person { public string Name { get; set; } public Person  { Name = "Eliran"; } }</code></pre><p>&nbsp;</p><p style="direction: rtl;">×‘C# 6:</p><pre class="language-csharp"><code class="language-csharp">class Person { public string Name { get; set; } = "Eliran";}</code></pre><p>&nbsp;</p><p style="direction: rtl;">×ž×¦×¨×™×š ×§×¦×ª ×–×ž×Ÿ ×”×¡×ª×’×œ×•×ª, ××‘×œ ×‘×¡×š ×”×›×œ ×™×›×•×œ ×œ×—×¡×•×š Constructor ×ž×™×•×ª×¨ ××• ×©× ×™×™×.</p><h2 style="direction: rtl;">3. ×©×™×˜×” ×©×•× ×” ×œ×›×ª×•×‘ Constructor</h2><p style="direction: rtl;">×”××ž×ª ×”×™× ×©×”×—×™×“×•×© ×”×‘× ×§×¦×ª ×ž×•×–×¨ ×œ×™, ×•×§×©×” ×œ×™ ×œ×¨××•×ª ××ª ×¢×¦×ž×™ ×ž×ª×¨×’×œ ×œ×›×ª×•×‘ ×›×›×”. ×”×—×™×“×•×© ×”×‘× ××ž×•×¨ ×œ×¢×–×•×¨ ×‘×ž×¦×‘×™× ×©×‘×”× ×”- Constructor ×¨×§ ×ž×§×‘×œ ×ž×©×ª× ×™× ×•×ž×›× ×™×¡ ××•×ª× ×œ- Properties ×©×œ ×”×ž×—×œ×§×”. ×‘×ž×§×¨×” ×›×–×” ×›×‘×¨ ××™×Ÿ ×¦×•×¨×š ×œ×›×ª×•×‘ Constructor ×©×œ×, ××œ× ××¤×©×¨ ×œ×”×©×ª×ž×© ×‘×©×™×˜×” ×”×—×“×©×”.</p><p>×¤×¢×:</p><pre class="language-csharp"><code class="language-csharp">class Person { public string Name { get; set; } public Person(string name) { this.Name = name; }}</code></pre><p>&nbsp;</p><p style="direction: rtl;">×‘C# 6:</p><pre class="language-csharp"><code class="language-csharp">class Person(string name) { public string Name { get; set; } = name;}</code></pre><p>&nbsp;</p><p style="direction: rtl;">×× ×™ ×™×•×“×¢, ×× ×™ ×™×•×“×¢... ×ž×—×œ×§×” ×©×ž×§×‘×œ×ª ×¤×¨×ž×˜×¨×™×... ×–×” ×‘×”×—×œ×˜ ×ž×•×–×¨. ××‘×œ ×”×™×™, ×ž×™ ×× ×—× ×• ×©× ×ª×•×•×›×— ×¢× ×”×ž×¢×¦×‘×™× ×©×œ ×ž×™×™×§×¨×•×¡×•×¤×˜?</p><h2 style="direction: rtl;">4. ×—×™×“×•×© ×ž×¡×¢×™×¨ ×‘-&nbsp;Out Parameter</h2><p style="direction: rtl;">×× ×™ ×ž×©×¢×¨ ×©×¨×•×‘&nbsp;×ž×™ ×©×›×•×ª×‘ ×‘C# ×™×•×ª×¨ ×ž×™×•× ×™×•×ž×™×™× × ×ª×§×œ ×‘×ž×˜×•×“×” TryParse - ×•×œ×ž×™ ×©×‘×›×œ ×–××ª ×œ×: ×ž×“×•×‘×¨ ×‘×ž×˜×•×“×” ×©× ×ž×¦××ª ×‘×›×ž×” ×ž×”×ž×—×œ×§×•×ª ×©×œ C#, ×•×ž×˜×¨×ª×” ×œ× ×¡×•×ª ×•×œ×”×¤×•×š string&nbsp;×œ××•×‘×™×™×§×˜ ×ž×¡×•×™×™×. ×œ×“×•×’×ž×, ×”×ž×˜×•×“×” TryParse ×‘- int ×ž× ×¡×” ×œ×”×¤×•×š string ×œ... int. ×”×ž×˜×•×“×” ×ž×§×‘×œ×ª 2 ×¤×¨×ž×˜×¨×™×: ××ª ×”- string ×©×× ×—× ×• ×¨×•×¦×™× ×œ×”×ž×™×¨, ×•- out argument ×©××œ×™×• ×”×™× ×ª×›× ×™×¡ ××ª ×”×ª×•×¦××”, ×›×©×”×¡×™×‘×” ×œ- out ×”×™× ×©×”×¤×•× ×§×¦×™×” ×ž×—×–×™×¨×” bool ×©×ž×˜×¨×ª×• ×œ×™×™×¦×’ ×”×× ×”× ×™×¡×™×•×Ÿ ×¦×œ×— ××• ×›×©×œ.</p><p style="direction: rtl;">×‘×›×œ ××•×¤×Ÿ, ×”×—×™×“×•×© ×”×‘× ×¤×•×ª×¨ ×¡×™×˜×•××¦×™×” ×ž×¢×¦×‘× ×ª ×ž××•×“ ×©×ž×ª×¢×•×¨×¨×ª ×’× ×›×©×ž×©×ª×ž×©×™× ×‘×¤×•× ×§×¦×™×” ×”×–×• (××‘×œ ×œ× ×¨×§ ×‘×”): ××ª ×”×ž×©×ª× ×” out ×—×™×™×‘×™× ×œ×”×’×“×™×¨ ×œ×¤× ×™, ×“×‘×¨ ×©×§×•×˜×¢ ××ª ×”×¨×¦×£ ×©×œ ×”×§×•×“ ×œ×¤×¢×ž×™×.</p><p style="direction: rtl;">×× ×™ ××ª×—×™×œ ×‘×“×•×’×ž×, ×¤×¢× ×”×™×™× ×• ×¨×•×©×ž×™×:</p><pre class="language-csharp"><code class="language-csharp">int value = 0;if (int.TryParse("5", out value) &amp;&amp; value &gt; 4) { Console.WriteLine("value is greater than 4");}</code></pre><p style="direction: rtl;">×‘C# 6 × ×™×ª×Ÿ ×œ×¨×©×•×:</p><pre class="language-csharp"><code class="language-csharp">if (int.TryParse("5", out int value) &amp;&amp; value &gt; 4) { Console.WriteLine("value is greater than 4");}</code></pre><p style="direction: rtl;">×”×—×™×“×•×© ×ž××¤×©×¨ ×œ×”×’×“×™×¨ ×ž×©×ª× ×™ out ×‘×¨×ž×ª ×”×§×¨×™××” ×œ×¤×•× ×§×¦×™×”, ×•×—×•×¡×š ××ª ×”×©×•×¨×” ×”×ž×™×•×ª×¨×ª. ×–×” ××•×ž× × ×œ× × ×©×ž×¢ ×ž×©×ž×¢×•×ª×™, ××‘×œ ×–×” ×ž×©×¤×¨ ×¤×œ××™× ××ª ×”×§×¨×™××•×ª ×©×œ ×”×§×•×“.</p><h2 style="direction: rtl;">5. Exception Filters</h2><p style="direction: rtl;">×”×—×™×“×•×© ×”×‘× ×ž××¤×©×¨ ×œ×¡× ×Ÿ ××ª ×”- Exceptions ×©×× ×—× ×• ×¨×•×¦×™× ×œ×ª×¤×•×¡, ×¢×œ ×ž× ×ª ×©×œ× × ×ª×¤×•×¡ ×¡×ª× Exceptions ×•×‘×›×š × ×ž× ×¢ ×ž×”× ×œ×—×œ×—×œ.</p><p style="direction: rtl;">×–×” × ×¨××” ×›×š:</p><pre class="language-csharp"><code class="language-csharp">try { throw new Exception("Eliran");}catch (Exception e) when (e.Message == "Eliran") { Console.WriteLine("Caught Eliran");}</code></pre><p style="direction: rtl;">×”×ž×™×œ×” ×”×©×ž×•×¨×” when ×ž××¤×©×¨×ª ×œ×ª×¤×•×¡ Exceptions ×¨×§ ×›××©×¨ ×”×ª× ××™ ×©×‘×ª×•×›×” ×ž×ª×§×™×™×.</p><h2 style="direction: rtl;">6. ×©×™×ž×•×© ×‘- using ×¢×œ ×ž×—×œ×§×” ×¡×˜×˜×™×ª</h2><p style="direction: rtl;">×¢×•×“ ×—×™×“×•×© ×©×™×§×— ×œ×™ ×–×ž×Ÿ ×œ×”×ª×¨×’×œ ××œ×™×•, ×”×•× ×”×™×›×•×œ×ª ×œ×¢×©×•×ª using ×œ× ×¨×§ ×œ- namespace ××œ× ×’× ×œ×ž×—×œ×§×” ×¡×˜×˜×™×ª. ×‘×¦×•×¨×” ×–×•, × ×™×ª×Ÿ ×œ×”×©×ª×ž×© ×‘×¤×•× ×§×¦×™×•×ª ×©×œ ×”×ž×—×œ×§×” ×”×¡×˜×˜×™×ª ×œ×œ× ×§×¨×™××” ×œ×”, ×›××™×œ×• ×”×™×• ××œ×• ×¤×•× ×§×¦×™×•×ª ×œ×•×§××œ×™×•×ª ×©×œ ×”×ž×—×œ×§×” ×©×× ×• ×›×•×ª×‘×™× ×‘×”.</p><p style="direction: rtl;">×”×“×•×’×ž× ×”×‘××” ×ª×¡×‘×™×¨ ××ª ×¢×¦×ž×”:</p><pre class="language-csharp"><code class="language-csharp">using static System.Console;public class Program{ public static void Main() { WriteLine("Hello World"); }}</code></pre><p>&nbsp;</p><p style="direction: rtl;">×§×¦×ª ×œ× ×‘×¨×•×¨ ×œ×˜×¢×ž×™, ××‘×œ ×ž×™ ×× ×™ ×©××©×¤×•×˜.</p><h2 style="direction: rtl;">7. String Interpolation</h2><p style="direction: rtl;">×ž×™ ×©×ž×›×™×¨ ×§×¦×ª PHP ×ž×›×™×¨ ××ª ×”××¤×©×¨×•×ª ×œ×¨×©×•× ×ž×©×ª× ×™× ×‘×ª×•×š string, ×›××©×¨ ×”× ×ž×•×§×¤×™× ×‘- { }. ×‘- C# 6 ×©××‘×• ××ª ×”××¤×¨×©×•×ª ×”×–×•, ×•×›××©×¨ ×ª×›×ª×‘×• $ ×œ×¤× ×™ ×”- string ×©×œ×›×, ×”×•× ×™×•×›×œ ×œ×”×›×™×œ ×©×ž×•×ª ×ž×©×ª× ×™×.</p><p style="direction: rtl;">×œ×“×•×’×ž×:</p><pre class="language-csharp"><code class="language-csharp">string name = "Eliran";string fruit = "Apple";Console.WriteLine($"{name} is eating an {fruit}");</code></pre><p>&nbsp;</p><h2 style="direction: rtl;">8. Roslyn</h2><p style="direction: rtl;">×”×—×™×“×•×© ×”××—×¨×•×Ÿ ×©××“×‘×¨ ×¢×œ×™×•, ×”×•× ×œ× ×‘×“×™×•×§ ×—×™×“×•×© ×‘- C# 6, ××œ× ×™×•×ª×¨ ×‘- Visual Studio 2015:</p><p style="direction: rtl;">Visual Studio 2015 ×”×™× ×”×’×¨×¡× ×”×¨××©×•× ×” ×©×œ Visual Studio ×©×‘××” ×¢× ×”×§×•×ž×¤×™×™×œ×¨ ×”×—×“×© ×©×œ .NET - ×¨×•×¡×œ×™×Ÿ! ×œ×ž×™ ×©×œ× ×ž×›×™×¨, ×¨×•×¡×œ×™×Ÿ ×”×•× ×§×•×ž×¤×™×™×œ×¨ ×—×“×© ×œ×—×œ×•×˜×™×Ÿ, ×©×œ×¢×•×ž×ª ×”×™×©×Ÿ, ×›×ª×•×‘ ×›×•×œ×• ×‘- C# (×‘×ž×§×•× ×‘- C++), ×•×”×•× Open Source ×ª×—×ª ×¨×™×©×™×•×Ÿ Apache.</p><p style="direction: rtl;">×¨×•×¡×œ×™×Ÿ ×ž×¤×•×ª×— ×›×‘×¨ ×›×ž×” ×©× ×™×, ×›××©×¨ ×”×™×” × ×™×ª×Ÿ ×œ×”×©×ª×ž×© ×‘×• ×‘××ž×¦×¢×•×ª ×ª×•×¡×¤×™× ×œ- Visual Studio, ××• ×‘- Visual Studio Community.</p><p style="direction: rtl;">×”×¦×¢×“ ×”×–×” ×—×©×•×‘ ×ž××•×“, ×›×™×•×•×Ÿ ×©×”×•× ×ž×œ×ž×“ ×¢×œ ×–× ×™×—×ª ×”×§×•×ž×¤×™×™×œ×¨ ×”×§×•×“× ×•×ž×¢×‘×¨ ×œ×¤×œ×˜×¤×•×¨×ž×ª Open Source, ×©×‘×” ×‘××•×¤×Ÿ ×ª××•×¨×ª×™ - ×›×œ ××—×“ ×™×›×•×œ ×œ×”×¨×—×™×‘ ××ª ×”×©×¤×”, ××• ×œ×ž×©×œ ×œ×”×©×ª×ž×© ×‘×§×•×“ ×©×œ ×¨×•×¡×œ×™×Ÿ ×¢×œ ×ž× ×ª ×œ×§×ž×¤×œ ×§×•×“ C# ×œ×¤×œ×˜×¤×•×¨×ž×•×ª ××—×¨×•×ª.</p><p style="direction: rtl;">×–×”×• ×œ×‘× ×ª×™×™× ×¢×œ C# 6. ×§×™×™×ž×™× ×¢×•×“ ×©×™× ×•×™×™× ×—×©×•×‘×™× ×•×ž×¢× ×™×™× ×™×, ×›×ž×• await ×•- nameof,&nbsp;××‘×œ ×¢×œ×™×”× ×›×‘×¨ ××¨×—×™×‘ ×‘×¤×•×¡×˜ ××—×¨.</p><p style="direction: rtl;">×©×ž×—×ª×™ ×œ×¨××•×ª ×©×”×©×¤×” ×ž×ž×©×™×›×” ×œ×”×ª×¨×—×‘ ×•×œ×”×ª×¤×ª×—.</p>', '×›×œ ×”×—×™×“×•×©×™× ×©C# 6 ×”×‘×™× ××™×ª×•.', '×¡×™ ×©××¨×¤, C#, ×ž×” ×—×“×©, ×•×™×–×•××œ ×¡×˜×•×“×™×•, ×“×•×˜ × ×˜, .net, Visual Studio', 5, '×ž×”-×—×“×©-×‘-c-6', 0, '2015-09-15 21:00:00', 'he', 0),
(3, '×©×œ×•×© ×“×¨×›×™× ×œ×ž×ž×© NotifyPropertyChanged', '<p style="direction: rtl;">×›×™×“×•×¢, WPF ×ž×ž×ž×©×ª Observer ×¢×œ ×ž× ×ª ×œ×™×™×“×¢ ××ª ×”- UI ×©×”×ž×™×“×¢ ×©×§×©×•×¨ (Bound) ××œ×™×• ×ž×©×ª× ×”. ×”- Interface ×©×ž×ž×ž×© ××ª ×”- Observer ×”×–×” × ×§×¨× INotifyPropertyChanged, ×•×”×ž×™×ž×•×© ×©×œ×• × ×ª×•×Ÿ ×œ×©×™×§×•×œ ×”×ž×¤×ª×—.</p><p style="direction: rtl;"><!--more--><br></p><pre class="language-csharp"><code class="language-csharp">private int _age;public int Age{get { return _age; }set{_age = value;// NotifyPropertyChanged....}}</code></pre><p style="direction: rtl;">×”- XAML ×™×¨××” ×›×š:</p><p>[xml][/xml]</p><p style="direction: rtl;">×’× ×× ××ª× ×›×‘×¨ ×ž×›×™×¨×™× ××ª 2 ×”×ž×™×ž×•×©×™× ×”×‘×¡×™×¡×™×™×, ×”××—×¨×•×Ÿ ×™×›×•×œ ×œ×—×“×© ×œ×›×, ×•×œ×›×Ÿ ×œ×§×¨×•× ××•×ª×•.</p><p><hr class="read-more"></p><h3 style="direction: rtl;">Magic String</h3><p style="direction: rtl;">× ×ª×—×™×œ ×ž×”×ž×™×ž×•×© ×”×›×™ ×‘×¡×™×¡×™, ×©×”×•× ×’× ×”×ž×™×ž×•×© ×”×¡×˜× ×“×¨×˜×™ - ×œ×¤×—×•×ª ×× ×ª×©××œ×• ××ª ×ž×™×™×§×¨×•×¡×•×¤×˜ - ×•× ×§×¨× Magic String. ×›×©×ž×• - ×”×¤×•× ×§×¦×™×” ×©×‘×• ×ž×§×‘×œ×ª ××ª ×©× ×”- Property ×¢×œ ×™×“×™ string.</p><pre class="language-csharp"><code class="language-csharp">public void NotifyPropertyChanged(string info) { if (PropertyChanged != null) { PropertyChanged(this, new PropertyChangedEventArgs(info)); } }</code></pre><p>&nbsp;</p><p style="direction: rtl;">×”×©×™×ž×•×© ×™×™×¨××” ×›×š:</p><pre class="language-csharp"><code class="language-csharp">public int Age { get { return _age; } set  {  _age = value; NotifyPropertyChanged("Age"); }}</code></pre><p style="direction: rtl;"><span style="line-height: 1.5;">×›×ž×• ×©× ×™×ª×Ÿ ×œ×¨××•×ª, ×”- Event ×©× ×§×¨× PropertyChanged (×•× ×ž×¦× ×‘×ž×§×•×¨ ×‘- Interface), ×ž×§×‘×œ EventArgs ×©× ×§×¨× PropertyChangedEventArgs ×•×ž×¦×¤×” ×œ×§×‘×œ ×›×¤×¨×ž×˜×¨ string ××ª ×©× ×”- Property ×©×”×©×ª× ×”. ×‘×ž×™×ž×•×© ×‘×¡×™×¡×™ ×–×”, ×× ×• ×¤×©×•×˜ ×ž×¢×‘×™×¨×™× ××ª ×©× ×”- Property ×œ- Event. </span>×”×¢×•×‘×“×” ×©×ž×“×•×‘×¨ ×‘- string ×™×›×•×œ×” ×œ×™×™×¦×¨ ×ž×¡×¤×¨ ×‘×¢×™×•×ª, ×›×©×”×’×“×•×œ×” ×ž×‘×™× ×”×Ÿ ×”×™× ×˜×¢×•×ª ×‘×©× ×”- Property: ×©×’×™××ª ×“×§×“×•×§, ×©×’×™××ª ×›×ª×™×‘ ××• ××¤×™×œ×• ×‘×œ×‘×•×œ ×‘×™×Ÿ ××•×ª ×§×˜× ×” ×œ×’×“×•×œ×” - ×›×œ ×˜×¢×•×ª ×§×˜× ×” ×ª×‘×™× ×œ×ž×¦×‘ ×©×‘×• ×”- UI ×œ× ×™×™×“×¢ ×©×”×ž×™×“×¢ ×”×©×ª× ×”, ×•×œ× ×™×ª×¢×“×›×Ÿ ×‘×”×ª××. ×œ×›×Ÿ, ×©×ª×™ ×”×“×¨×›×™× ×”×‘××•×ª ×—×•×¡×›×•×ª ××ª ×”×©×™×ž×•×© ×‘- string.</p><p style="direction: rtl;">×× ×–××ª, ×–×• ×”×™× ×”×©×™×˜×” ×”×›×™ ×™×¢×™×œ×”, ×›×™×•×•×Ÿ ×©×©××¨ ×”×©×™×˜×•×ª ×ž×•×¦××•×ª ××ª ×©× ×”- Property ×‘×–×ž×Ÿ ×¨×™×¦×”. ××‘×œ ×›×ž×•×‘×Ÿ ×©×‘×ž×§×¨×™× ×ž×¡×•×™×™×ž×™× ×¢×“×™×£ ×œ×©×—×¨×¨ ×§×¦×ª ×™×¢×™×œ×•×ª ×œ×˜×•×‘×ª ×§×¨×™××•×ª ×§×•×“ ×•×”×ž× ×¢×•×ª ×ž×˜×¢×•×™×•×ª ×©×™××¨×™×›×• ××ª ×–×ž×Ÿ ×”×¤×™×ª×•×—.</p><h3 style="direction: ltr; text-align: right;">Expression</h3><p style="direction: rtl;">×‘×¢×–×¨×ª ×”×ž×—×œ×§×”&nbsp;<a href="https://msdn.microsoft.com/en-us/library/system.linq.expressions.expression(v=vs.110).aspx" target="_blank">Expression</a>, × ×™×ª×Ÿ ×œ×”×ž×™×¨ ××ª ×”- string ×ž×”×©×™×˜×” ×”×§×•×“×ž×ª ×‘×‘×™×˜×•×™ ×œ×ž×‘×“×” ×©×ž×—×–×™×¨ ××ª ×”× ×ª×™×‘ ××œ ×”- Property:</p><pre class="language-csharp"><code class="language-csharp">protected void NotifyPropertyChanged(Expression property) { var lambda = (LambdaExpression)property; MemberExpression memberExpression; if (lambda.Body is UnaryExpression) { var unaryExpression = (UnaryExpression)lambda.Body; memberExpression = (MemberExpression)unaryExpression.Operand; } else { memberExpression = (MemberExpression)lambda.Body; }if (PropertyChanged != null) { PropertyChanged(this, new PropertyChangedEventArgs(memberExpression.Member.Name)); } }</code></pre><p style="direction: rtl;">×”×—×œ×§ ×”×¨××©×•×Ÿ ×‘×¤×•× ×§×¦×™×” ×ž×—×œ×¥ ××ª ×©× ×”- Property ×ž×‘×™×˜×•×™ ×”×œ×ž×‘×“×”, ×•×”×—×œ×§ ×”×©× ×™ ×ž×¨×™× ××ª ×”- Event.</p><p style="direction: rtl;">×”×©×™×ž×•×© ×™×™×¨××” ×›×š:</p><pre class="language-csharp"><code class="language-csharp">public int Age { get { return _age; } set  {  _age = value; NotifyPropertyChanged(() =&gt; Age); } }</code></pre><p style="direction: rtl;">×‘×¦×•×¨×” ×–×•, ×”×¡×™×›×•×™&nbsp;×©× ×˜×¢×”&nbsp;×‘×©× ×©×œ ×”- Property ×™×•×¨×“ ×ž×©×ž×¢×•×ª×™×ª, ×›×™×•×•×Ÿ ×©×›×œ ×˜×¢×•×ª ×§×˜× ×” ×ª×’×¨×•× ×œ×§×•×ž×¤×™×™×œ×¨ ×œ×–×¨×•×§ ×©×’×™××” ×©×©× ×”- Property ×œ× × ×›×•×Ÿ. ×”×˜×¢×•×ª ×”×™×—×™×“×” ×©×™×›×•×œ×” ×œ×”×•×•×¦×¨ ×”×™× ×× × ×¨×©×•× ×‘×˜×¢×•×ª ×©× ×©×œ Property ××—×¨ ×©×§×™×™× ×’× ×”×•× ×‘×ž×—×œ×§×” ×©×œ× ×•. ×•×‘×›×œ ×–××ª, ×œ×¤×¢×ž×™× ×”×©×™×˜×” ×”×–×• ××¨×•×›×” ×ž×™×“×™; ×”×™× ×—×™×•× ×™×ª ×œ×—×œ×•×˜×™×Ÿ ×¨×§ ×‘×ž×™×“×” ×•×× ×• ×¨×•×¦×™× ×œ×”×•×“×™×¢ ×¢×œ ×©×™× ×•×™ ×‘- Property ×ž×—×•×¥ ×œ- Setter ×©×œ ×”- Property. ×‘×ž×§×¨×” ×©×œ× ×•, ×”×“×¨×š ×”×©×œ×™×©×™×ª ×ª×™×”×™×” ×”×›×™ ×§×¦×¨×” ×•×”×›×™ × ×˜×•×œ×ª ×˜×¢×•×™×•×ª.</p><h3 style="direction: rtl;">×©×™×ž×•×© ×‘-&nbsp;CallerMemberName</h3><p style="direction: rtl;">×”×“×¨×š ×”×–×• ×”×™× ×‘×•×•×“××•×ª ×”×“×¨×š ×”××”×•×‘×” ×¢×œ×™. ×¢×œ ×™×“×™ ×©×™×ž×•×© ×‘- Attribute ×¢×œ ×¤×¨×ž×˜×¨ ×‘×¤×•× ×§×¦×™×”, × ×•×›×œ ×œ×§×‘×œ ××ª ×©× ×”- Property ×‘×¦×•×¨×” ××•×˜×•×ž×˜×™×ª, ×›×š ×©×›×œ ×ž×” ×©× ×¦×˜×¨×š ×œ×¢×©×•×ª ×›×©× ×¨×¦×” ×œ×”×•×“×™×¢ ×¢×œ ×©×™× ×•×™ ×‘- Property ×ž×ª×•×š ×”- Setter ×©×œ×•, ×–×” ×¨×§ ×œ×§×¨×•× ×œ×¤×•× ×§×¦×™×” ×œ×œ× ×¤×¨×ž×˜×¨×™×!</p><p style="direction: rtl;">×”×©×™×˜×” ×”×–×• × ×˜×•×œ×ª ×¡×™×›×•×™ ×œ×˜×¢×•×™×•×ª ×•×”×›×™ ×§×œ×” ×œ×ª×—×–×•×§×”, ×›×™×•×•×Ÿ ×©××¤×™×œ×• ×× ×ª×©× ×• ××ª ×”- Property, ×”×¤×•× ×§×¦×™×” ×¢×“×™×™×Ÿ ×ª×§×‘×œ ××ª ×”×©× ×”×ž×¢×•×“×›×Ÿ ×©×œ×•.</p><pre class="language-csharp"><code class="language-csharp">public void NotifyPropertyChanged([CallerMemberName] string info = null) { if (PropertyChanged != null) { PropertyChanged(this, new PropertyChangedEventArgs(info)); } }</code></pre><p>&nbsp;</p><p style="direction: rtl;">×•×”×©×™×ž×•×©:</p><pre class="language-csharp"><code class="language-csharp">public int Age { get { return _age; } set  {  _age = value; NotifyPropertyChanged(); } }</code></pre><p style="direction: rtl;">×”- Attribute ×©× ×§×¨×&nbsp;CallerMemberName ×ž×™×™×‘×&nbsp;××ª ×”×©× ×©×œ ×”×¤×•× ×§×¦×™×” ×©- NotifyPropertyChanged × ×§×¨× ×ž×ª×•×›×” (×”- Setter ×©×œ ×”- Property ×‘×ž×§×¨×” ×©×œ× ×•), ×•×ž×›× ×™×¡ ××•×ª×• ×œ×ª×•×š ×”×ž×©×ª× ×” info. ×œ××—×¨ ×ž×›×Ÿ, ×”×¤×•× ×§×¦×™×” ×ž×¨×™×ž×” ××ª ×”- Event ×¢× ×©× ×”- Property ×©× ×ž×¦× ×‘×ž×©×ª× ×” info.</p><p style="direction: rtl;">×©×™×ž×• ×œ×‘ ×©×”×ž×™×ž×•×© ×”×–×” ×ž×›×™×œ ×‘×ª×•×›×• ×’× ××ª ×”×ž×™×ž×•×© ×”×¨××©×•×Ÿ, ×›×™×•×•×Ÿ ×©×× ×ª×§×¨××• ×œ×¤×•× ×§×¦×™×” ×¢× ×¢×¨×š ×œ×ž×©×ª× ×” info, ×”- Attribute ×œ× ×™×¢×‘×•×“ ×•×”- Event ×™×•×¨× ×¢× ×”× ×ª×•×Ÿ ×©×”×›× ×¡×ª×.</p>', '×›×œ ×”×“×¨×›×™× ×œ×ž×ž×© NotifyPropretyChanged ×‘- WPF', 'NotifyPropertyChanged, WPF, C#, CSharp, ×¡×™ ×©××¨×¤, MVVM', 5, '×©×œ×•×©×”-×“×¨×›×™×-×œ×ž×ž×©-notifypropertychanged', 0, '2015-09-16 21:00:00', 'he', 0),
(4, '×ž×“×¨×™×š Web Notifications API', '<p style="direction: rtl;">Web Notifications ×”×•×&nbsp;API ×©×ž××¤×©×¨ ×”×¦×’×ª ×”×ª×¨××•×ª ×œ×ž×©×ª×ž×© ×ž×—×•×¥ ×œ××ª×¨ - ×“×¨×š ×”×“×¤×“×¤×Ÿ. × ×›×•×Ÿ ×œ×›×ª×™×‘×ª ×©×•×¨×”&nbsp;×–×•,&nbsp;×›×œ ×”×“×¤×“×¤× ×™× ×—×•×¥ ×ž- Safari Mobile, Internet Explorer ×•- Internet Explorer Mobile ×ª×•×ž×›×™× ×‘×™×›×•×œ×ª ×”×–×• ×‘×¦×•×¨×” ×›×œ×©×”×™, ×ž×” ×©×”×•×¤×š ××ª Notifications API ×œ× ×¤×•×¥ ×ž××•×“ ×‘×™×ž×™× ×”××œ×•.</p><p style="direction: rtl;">××ª×¨×™× ×¨×‘×™× ×ž×©×ª×ž×©×™× ×‘- Notifications API, ×›×ž×• ×œ×“×•×’×ž×&nbsp;×”×ž×ž×©×§×™× ×”×•×•×‘×™×™× ×©×œ WhatsApp ×•- Telegram, ×›×™×•×•×Ÿ ×©× ×•×— ×ž××•×“ ×œ×”×•×“×™×¢ ×œ×ž×©×ª×ž×©×™× ×¢×œ ×”×•×“×¢×•×ª ×¦''××˜ ×‘×¢×–×¨×ª×•.<br><hr class="read-more"></p><h3 style="direction: rtl;">×‘×§×©×ª ×¨×©×•×ª</h3><p style="direction: rtl;">×”×“×‘×¨ ×”×¨××©×•×Ÿ ×©×¦×¨×™×š ×œ×¢×©×•×ª ×›×“×™ ×©×”×ž×©×ª×ž×© ×™×•×›×œ ×œ×§×‘×œ ××ª ×”×”×ª×¨××•×ª ×©×œ×›×, ×”×•× ×œ×‘×§×© ×ž×”×ž×©×ª×ž×© ×¨×©×•×ª ×œ×©×œ×•×— ×œ×• ××•×ª×Ÿ.</p><pre class="language-javascript"><code class="language-javascript">document.addEventListener(''DOMContentLoaded'', function () {   if (Notification &amp;&amp; Notification.permission !== "granted")       Notification.requestPermission();});</code></pre><p style="direction: rtl;">×”×§×•×“ ×œ×ž×¢×œ×” ×ž×’×“×™×¨ ××™×¨×•×¢ ×©×§×•×¨×” ×›×©×”×¢×ž×•×“ ×ž×¡×™×™× ×œ×¢×œ×•×ª, ×•×‘×• ×”×•× ×©×•××œ ×”×× ×”×ž×©×ª×ž×© ××™×©×¨ ×§×‘×œ×ª ×”×ª×¨××•×ª - ×× ×œ×, ×”×•× ×ž×‘×§×© ××™×©×•×¨.</p><h3 style="direction: rtl;">×©×œ×™×—×ª ×”×ª×¨××”</h3><p style="direction: rtl;">×›×“×™ ×œ×©×œ×•×— ×”×ª×¨××”, ×›×œ ×ž×” ×©×¦×¨×™×š ×œ×¢×©×•×ª ×–×” ×œ×™×™×¦×¨ ×ž×•×¤×¢ ×©×œ ×”×ž×—×œ×§×” Notification ×¢× ×”×¤×¨×˜×™× ×©× ×¨×¦×” ×©×™×•×¤×™×¢×• ×¢×œ×™×•. ×¨×¦×•×™ ×’× ×œ×‘×“×•×§ ×× ×”×“×¤×“×¤×Ÿ ×ª×•×ž×š ×‘- Notifications API, ×‘×¢×–×¨×ª ×‘×“×™×§×” ×¤×©×•×˜×” ×©×œ ×”×× Notification ×”×•× undefined.</p><pre class="language-javascript"><code class="language-javascript">if (Notification) {   new Notification(title, {      icon: ''icon.png'',      body: "There''s a new message from Eliran",   });}</code></pre><p>&nbsp;</p><p style="direction: rtl;">icon ×ž×™×™×¦×’ ××ª ×”×ª×ž×•× ×” ×©×ª×•×¤×™×¢ ×‘×¦×“ ×”×”×ª×¨××” (× ×ª×ž×š ×¨×§ ×‘×—×œ×§ ×ž×”×“×¤×“×¤× ×™×), ×•- body ×ž×™×™×¦×’ ××ª ×”×˜×§×¡×˜ ×©×™×•×¤×™×¢ ×‘×”.</p><p style="direction: rtl;">× ×™×ª×Ÿ ×’× ×œ×”×©×ª×ž×© ×‘×¢×•×“ ×”×¨×‘×” ×”×’×“×¨×•×ª, ×œ×“×•×’×ž×:</p><p style="direction: rtl;"><strong>dir</strong> - ×§×•×‘×¢ ×”×× ×”×˜×§×¡×˜ ×‘×”×ª×¨××” ×™×•×¤×™×¢ ×ž×™×ž×™×Ÿ ×œ×©×ž××œ ××• ×ž×©×ž××œ ×œ×™×ž×™×Ÿ</p><p style="direction: rtl;"><strong>lang</strong> - ×”×©×¤×” ×©×œ ×”×”×ª×¨××”</p><p style="direction: rtl;"><strong>silent</strong> - ×”×× ×”×”×ª×¨××” ×¦×¨×™×›×” ×œ×”×™×•×ª ×©×§×˜×” (×‘×œ×™ ×¨×˜×˜ ×•×¡××•× ×“)</p><p style="direction: rtl;"><strong>noscreen</strong> - ×”×× ×”×”×ª×¨××” ×¦×¨×™×›×” ×œ×”×¢×™×¨ ××ª ×”×ž×¡×š (×‘×¡×ž××¨×˜×¤×•× ×™× ×›×ž×•×‘×Ÿ)</p><p style="direction: rtl;"><strong>sticky</strong> - ×ž×‘×˜×œ ××ª ×”×™×›×•×œ×ª ×©×œ ×”×ž×©×ª×ž×© ×œ× ×§×•×ª ××ª ×”×”×ª×¨××”</p><p style="direction: rtl;"><strong>onclick</strong> - ×¤×•× ×§×¦×™×” ×©×ª×§×¨× ×›×©×”×ž×©×ª×ž×© ×™×œ×—×¥ ×¢×œ ×”×”×ª×¨××”</p><p style="direction: rtl;"><strong>onerror</strong> - ×¤×•× ×§×¦×™×” ×©×ª×§×¨× ×›××©×¨ ×™×© ×©×’×™××” ×ž×¡×•×’ ×›×œ×©×”×•.</p><p style="direction: rtl;"><strong>onclose</strong> ×•- <strong>onshow</strong> ×¢×•×‘×“×™× ×‘×—×œ×§ ×ž×”×“×¤×“×¤× ×™× ×•×”× ×ž×§×‘×œ×™× ×¤×•× ×§×¦×™×” ×©× ×§×¨××ª ×›×©×”×ž×©×ª×ž×© ×¡×•×’×¨ ××• ×¤×•×ª×— ××ª ×”×”×ª×¨××” (×‘×”×ª××ž×”)</p><h3 style="direction: rtl;">×¡×’×™×¨×” ××•×˜×•×ž×˜×™×ª</h3><p style="direction: rtl;">×—×œ×§ ×ž×”×“×¤×“×¤× ×™× ×œ× ×ª×•×ž×›×™× ×‘×¡×’×™×¨×” ××•×˜×•×ž×˜×™×ª ×©×œ ×”×ª×¨××•×ª, ×•×œ×›×Ÿ × ×™×ª×Ÿ ×œ×”×’×“×™×¨ Timeout ×©×™×¡×’×•×¨ ××ª ×”×”×ª×¨××” ××•×˜×•×ž×˜×™×ª ×›×¢×‘×•×¨ ×›×ž×” ×–×ž×Ÿ.</p><pre class="language-javascript"><code class="language-javascript">if (Notification) {   var notification = new Notification(title, {      icon: ''icon.png'',      body: "There''s a new message from Eliran",   });   setTimeout(function() {      notification.close();   },4000);}</code></pre><p style="direction: rtl;">× ×™×ª×Ÿ ×›×ž×•×‘×Ÿ ×œ×”×©×ª×ž×© ×‘×¤×•× ×§×¦×™×” close() ×›×“×™ ×œ×¡×’×•×¨ ×”×ª×¨××•×ª ×’× ×‘×©×™×ž×•×©×™× ××—×¨×™×.</p><p style="direction: rtl;">×–×”×•, ×–×” ×›×œ ×ž×” ×©×¦×¨×™×š ×œ×“×¢×ª ×›×“×™ ×œ×”×©×ª×ž×© ×‘- Notification API.</p>', '×›×š ×ª×•×¡×™×¤×• ×œ××ª×¨ ×©×œ×›× ×”×ª×¨××•×ª ×›×ž×• ×‘- WhatsApp.', 'Web Notifications API, ×”×ª××¨×•×ª', 5, '×ž×“×¨×™×š-web-notifications-api', 0, '2015-09-17 21:00:00', 'he', 1),
(5, '×ž×“×¨×™×š Sails.js - ×¤×¨×§ ×'' - ×”×§×“×ž×”', '<p style="direction: rtl; text-align: center;">×¤×¨×§ ×¨××©×•×Ÿ ×‘×¡×“×¨×ª ×”×ž×“×¨×™×›×™× ×”×ž×¦×•×œ×ž×™× ×”×—×“×©×” ×©×œ× ×•!</p><p style="direction: rtl;">×”×—×œ×§ ×”×•× ×¡×“×¨×” ×©×œ ×¡×¨×˜×•× ×™× ×¢×œ Sails.js, ×©×‘×¡×•×¤× ×ª×“×¢×• ×œ×™×™×¦×¨ ×¤×¨×•×™×§×˜ ×©×œ× ×‘- Sails.</p><p style="direction: rtl;">Sails.js ×”×™× Framework ×ž××•×“ ×—×–×§ ×©×œ Node.js, ×©×ž××¤×©×¨×ª ×œ×™×™×¦×¨ ××ª×¨×™ ××™× ×˜×¨× ×˜ ×‘×§×œ×•×ª.</p><p><br></p><p><br></p><div style="text-align: center;"><span class="f-video-editor fr-fvn" contenteditable="false"><iframe allowfullscreen="" height="315" src="https://www.youtube.com/embed/AA2G9ZFIN8o" width="420"></iframe></span></div><p><br></p><p><br></p><p>&nbsp;</p>', '×ž×“×¨×™×š ×ž×¦×•×œ× ×œ×¡×‘×™×‘×ª ×”×¤×™×ª×•×— Sails.js', 'Sails.js, Node.js, × ×•×“, Javascript', 5, '×ž×“×¨×™×š-sails-js-×¤×¨×§-×-×”×§×“×ž×”', 0, '2015-09-30 21:00:00', 'he', 0),
(6, '×ž×“×¨×™×š Express / NodeJS - ×—×œ×§ 1 - ×”×§×“×ž×”', '<p style="direction: rtl;">×”×¤×¨×§ ×”×¨××©×•×Ÿ ×‘×ž×“×¨×™×š ×œ- Express..js. ×”- Framework ×”×ž×•×›×¨ ×•×”××”×•×‘ ×œ- Node.js.</p><p style="direction: rtl;">×‘×¤×¨×§ ×”×¨××©×•×Ÿ × ×“×‘×¨ ×§×¦×ª ×¢×œ NodeJS ×•×¢×œ ExpressJS ×•××™×š ×”× ×ž×ª×§×©×¨×™×, × ×¢×‘×•×¨ ×¢×œ ×”×”×ª×§× ×”, × ×¡×‘×™×¨ ×¢×œ ×¤×§×•×“×•×ª ×‘×¡×™×¡×™×•×ª ×•× ×™×¦×•×¨ ××ª ×”×¤×¨×•×™×™×§×˜ ×”×¨××©×•×Ÿ ×©×œ× ×• ×‘- ExpressJS.</p><p style="direction: rtl;">×¦×¤×™×™×” ×ž×”× ×”!</p><p><br></p><p><br></p><div style="text-align: center;"><span class="f-video-editor fr-fvn" contenteditable="false"><iframe allowfullscreen="" height="315" src="https://www.youtube.com/embed/9neEE_HowzM" width="420"></iframe></span></div><p><br></p>', '×ž×“×¨×™×š ×ž×¦×•×œ× ×œ×¡×‘×™×‘×ª ×”×¤×™×ª×•×— Express.js', 'Express.js, Javascript, × ×•×“, ××§×¡×¤×¨×¡, ×ž×“×¨×™×š, ×•×™×“×™××•', 6, '×ž×“×¨×™×š-express-nodejs-×—×œ×§-1-×”×§×“×ž×”', 0, '2015-10-01 21:00:00', 'he', 0),
(7, '×ž×“×¨×™×š Sails.js - ×¤×¨×§ ×‘'' - Controller', '<p style="direction: rtl;">×”×¤×¨×§ ×”×©× ×™ ×‘×ž×“×¨×™×š ×œ- Sails.js: ×”- Framework ×”×ž×˜×•×¨×£ ×œ- Node.js</p><p style="direction: rtl;">×‘×¤×¨×§ ×”×©× ×™ × ×“×‘×¨ ×¢×œ ××™×š ×œ×™×¦×•×¨ Controller ×•×œ×”×ª××™× ×œ×• View, ×¢×œ ××™×š ×œ×™×™×¦×¨ Template ×‘×¢×–×¨×ª ejs ×•×¢×œ Routes.</p><p style="direction: rtl;">Sails.js ×”×™× Framework ×ž××•×“ ×—×–×§ ×©×œ Node.js, ×©×ž××¤×©×¨×ª ×œ×™×™×¦×¨ ××ª×¨×™ ××™× ×˜×¨× ×˜ ×‘×§×œ×•×ª.</p><p style="direction: rtl;">×¦×¤×™×™×” ×ž×”× ×”!</p><p><br></p><p><br></p><div style="text-align: center;"><span class="f-video-editor fr-fvn" contenteditable="false"><iframe allowfullscreen="" height="315" src="https://www.youtube.com/embed/KujWrArivjo" width="420"></iframe></span></div><p>&nbsp;</p>', '×ž×“×¨×™×š ×ž×¦×•×œ× ×œ×¡×‘×™×‘×ª ×”×¤×™×ª×•×— Sails.js', 'Sails.js, Node.js, × ×•×“, Javascript', 5, '/×ž×“×¨×™×š-sails-js-×¤×¨×§-×‘-controller', 0, '2015-10-02 21:00:00', 'he', 0),
(8, '×ž×“×¨×™×š Sails.js - ×¤×¨×§ ×’'' - Models', '<p style="direction: rtl;">×”×¤×¨×§ ×”×©×œ×™×©×™&nbsp;×‘×ž×“×¨×™×š ×œ- Sails.js: ×”- Framework ×”×ž×˜×•×¨×£ ×œ- Node.js</p><p style="direction: rtl;">×‘×¤×¨×§ ×”×©×œ×™×©×™ × ×“×‘×¨ ×¢×œ ×ž×” ×”× ×ž×•×“×œ×™×, ××™×š ×™×•×¦×¨×™× ××•×ª× ×‘- Sails.js, ×•×¢×œ ××™×š ×œ×§× ×¤×’ ××ª ×”×“××˜××‘×™×™×¡ ×‘- Sails.js.</p><p style="direction: rtl;">Sails.js ×”×™× Framework ×ž××•×“ ×—×–×§ ×©×œ Node.js, ×©×ž××¤×©×¨×ª ×œ×™×™×¦×¨ ××ª×¨×™ ××™× ×˜×¨× ×˜ ×‘×§×œ×•×ª.</p><p style="direction: rtl;">×¦×¤×™×™×” ×ž×”× ×”!</p><p><br></p><p><br></p><div style="text-align: center;"><span class="f-video-editor fr-fvn" contenteditable="false"><iframe allowfullscreen="" height="315" src="https://www.youtube.com/embed/sqf_2EIRdpk?list=PLyjz8K7F0x_x114WhyEvJUNnsk-Jc4GYG" width="420"></iframe></span></div><p>&nbsp;</p>', '×ž×“×¨×™×š ×ž×¦×•×œ× ×œ×¡×‘×™×‘×ª ×”×¤×™×ª×•×— Sails.js', 'Sails.js, Node.js, × ×•×“, Javascript', 5, '×ž×“×¨×™×š-sails-js-×¤×¨×§-×’-models', 0, '2015-10-02 21:00:00', 'he', 0),
(9, '×ž×“×¨×™×š Sails.js - ×¤×¨×§ ×“'' - Layout', '<p style="direction: rtl;">×”×¤×¨×§ ×”×¨×‘×™×¢×™ ×‘×ž×“×¨×™×š ×œ- Sails.js: ×”- Framework ×”×ž×˜×•×¨×£ ×œ- Node.js</p><p style="direction: rtl;">×‘×¤×¨×§ ×”×¨×‘×™×¢×™ × ×“×‘×¨ ×¢×œ ×”Layout ×©×œ Sails.js, ×•× ×©×œ×‘ ××ª Bootstrap ×‘×‘×œ×•×’.</p><p style="direction: rtl;">Sails.js ×”×™× Framework ×ž××•×“ ×—×–×§ ×©×œ Node.js, ×©×ž××¤×©×¨×ª ×œ×™×™×¦×¨ ××ª×¨×™ ××™× ×˜×¨× ×˜ ×‘×§×œ×•×ª.</p><p style="direction: rtl;">×¦×¤×™×™×” ×ž×”× ×”!</p><p><br></p><p><br></p><div style="text-align: center;"><span class="f-video-editor fr-fvn" contenteditable="false"><iframe allowfullscreen="" height="315" src="https://www.youtube.com/embed/3Dzt8FL2OxI" width="420"></iframe></span></div><p><br></p><p><br></p><p><br></p><p>&nbsp;</p>', '×ž×“×¨×™×š ×ž×¦×•×œ× ×œ×¡×‘×™×‘×ª ×”×¤×™×ª×•×— Sails.js', 'Sails.js, Node.js, × ×•×“, Javascript', 5, '×ž×“×¨×™×š-sails-js-×¤×¨×§-×“-layout', 0, '2015-10-03 21:00:00', 'he', 0),
(10, '×ž×“×¨×™×š Sails.js - ×¤×¨×§ ×”'' - Blueprints', '<p style="direction: rtl;">×”×¤×¨×§ ×”×—×ž×™×©×™ ×‘×ž×“×¨×™×š ×œ- Sails.js: ×”- Framework ×”×ž×˜×•×¨×£ ×œ- Node.js</p><p style="direction: rtl;">×‘×¤×¨×§ ×”×—×ž×™×©×™ × ×“×‘×¨ ×¢×œ ×’×™×©×” ×œ×“××˜××‘×™×™×¡ ×“×¨×š Blueprints.</p><p style="direction: rtl;"><span style="line-height: 1.5;"> Sails.js ×”×™× Framework ×ž××•×“ ×—×–×§ ×©×œ Node.js, ×©×ž××¤×©×¨×ª ×œ×™×™×¦×¨ ××ª×¨×™ ××™× ×˜×¨× ×˜ ×‘×§×œ×•×ª.</span></p><p style="direction: rtl;">×¦×¤×™×™×” ×ž×”× ×”!</p><p><br></p><div style="text-align: center;"><span class="f-video-editor fr-fvn" contenteditable="false"><iframe allowfullscreen="" height="315" src="https://www.youtube.com/embed/OIGb6W9T4AY" width="420"></iframe></span></div><p style="direction: rtl;"><br></p><p>&nbsp;</p>', '×ž×“×¨×™×š ×ž×¦×•×œ× ×œ×¡×‘×™×‘×ª ×”×¤×™×ª×•×— Sails.js', 'Sails.js, Node.js, × ×•×“, Javascript', 5, '×ž×“×¨×™×š-sails-js-×¤×¨×§-×”-blueprints', 0, '2015-10-04 21:00:00', 'he', 0),
(11, '×ž×“×¨×™×š Sails.js - ×¤×¨×§ ×•'' - Authentication', '<p style="direction: rtl;">×”×¤×¨×§ ×”×©×™×©×™ ×‘×ž×“×¨×™×š ×œ- Sails.js: ×”- Framework ×”×ž×˜×•×¨×£ ×œ- Node.js</p><p style="direction: rtl;">×‘×¤×¨×§ ×”×©×™×©×™ × ×ž×ž×© ×”×¨×©×ž×” ×•×”×ª×—×‘×¨×•×ª ×œ×‘×œ×•×’.</p><p style="direction: rtl;">Sails.js ×”×™× Framework ×ž××•×“ ×—×–×§ ×©×œ Node.js, ×©×ž××¤×©×¨×ª ×œ×™×™×¦×¨ ××ª×¨×™ ××™× ×˜×¨× ×˜ ×‘×§×œ×•×ª.</p><p style="direction: rtl;">×¦×¤×™×™×” ×ž×”× ×”!</p><p><br></p><p><br></p><p><br></p><p style="direction: rtl;"><br></p><div style="text-align: center;"><span class="f-video-editor fr-fvn" contenteditable="false"><iframe allowfullscreen="" height="315" src="https://www.youtube.com/embed/yZ8-vEusBwg" width="420"></iframe></span></div>', '×ž×“×¨×™×š ×ž×¦×•×œ× ×œ×¡×‘×™×‘×ª ×”×¤×™×ª×•×— Sails.js', 'Sails.js, Node.js, × ×•×“, Javascript', 5, '×ž×“×¨×™×š-sails-js-×¤×¨×§-×•-authentication', 0, '2015-10-04 21:00:00', 'he', 0),
(12, '×”×ª×—×“×©× ×•', '<p>×—×“×™ ×”×¢×™×Ÿ ×©×‘×™× ×›× ×‘×˜×— ×©×ž×• ×œ×‘ ×œ×¢×™×¦×•×‘ ×”×—×“×© ×©×œ ×”××ª×¨, ×©×ž×¡×ž×œ ×‘×™×Ÿ ×”×™×ª×¨ ×’× ×¢×“ ×›×ž×” × ×©×‘×¨ ×œ×™ ×ž- WordPress.</p><p>×™×—×“ ×¢× ×”×¢×™×¦×•×‘ ×‘× ×’× ×ž× ×•×¢ ×—×“×© ×œ×—×œ×•×˜×™×Ÿ, ×”×¤×¢× ×œ× ×ž×‘×•×¡×¡ ×¢×œ ××£ ×ž×¢×¨×›×ª ×ª×•×›×Ÿ - ××œ× ×™×™×—×•×“×™ ×œ×—×œ×•×˜×™×Ÿ ×©× ×›×ª×‘ ×¢×œ ×™×“×™ ×›×ª×—×‘×™×‘.&nbsp;</p><p><br></p><p>×”×ž×¢×¨×›×ª × ×›×ª×‘×” ×‘PHP - ×‘×¤×¢× ×”×¨××©×•× ×”, ×œ× Object Oriented ××œ× ×‘×¦×•×¨×” ×¤×¨×•×¦×“×•×¨××œ×™×ª. ×–×• ×”×™×™×ª×” ×”×ª× ×¡×•×ª × ×—×ž×“×”, ×•×× ×™ ×—×•×©×‘ ×©×”×¦×œ×—×ª×™ ×œ×”×¤× ×™× ×—×œ×§ ×ž×”×™×ª×¨×•× ×•×ª ×©×œ ×ª×›× ×•×ª ×ž×¡×•×’ ×–×” ×¢×œ ×¤× ×™ OOP.</p><p><br></p><p>×‘×§×¨×•×‘ ×¤×•×¡×˜×™× ×—×“×©×™×, ×•×§×¦×ª ×™×•×ª×¨ ××™× ×¤×•×¨×ž×˜×™×‘×™×™×™×, ×•××¤×™×œ×• ×”×ž×©×š ×©×œ ×ž×“×¨×™×š ×”- Sails.js ×”×ž×¦×•×œ× ×©×œ× ×•.</p><p>×œ×—×™×™ ×”×ª×—×œ×•×ª ×—×“×©×•×ª :)</p>', '×”×ª×—×“×©× ×• ×‘×¢×™×¦×•×‘ ×•×ž×¢×¨×›×ª ×—×“×©×” ×œ×‘×œ×•×’, ×©× ×›×ª×‘×” ×¢×œ ×™×“×™×™ ×‘PHP.', '×¢×™×¦×•×‘ ×—×“×©, ×ž×¢×¨×›×ª ×—×“×©×”, ×‘×œ×•×’, ', 5, '×”×ª×—×“×©× ×•', 0, '2015-11-06 22:00:00', 'he', 0),
(13, '×‘×“×™×§×”', '<p>×’×“×›×“</p>', '×’×“×›', '×›×’×“×›×’×“', 5, '×’×“×›×’×“', 1, '2015-11-06 22:00:00', 'he', 0),
(14, '×‘×“×™×§×”2', '<p>×“×©×’×“×©</p>', '×“×©×’', '×“×©×’', 5, '×“×©×’', 1, '2015-11-06 22:00:00', 'he', 0),
(15, '×’×›×“', '<p>×’×“×›</p>', '×›×’×“', '×›×’×“', 5, '×’×“×›', 1, '2015-11-06 22:00:00', 'he', 0),
(18, '&#1499;&#1499;&#1490;&#1491;&#1499;&#1490;&#1491;&#1499;&#1491;&#1499;&#1490;', '<p>&#1490;&#1491;&#1499;&#1490;&#1491;&#1499;&#1491;&#1499;&#1490;&#1491;&#1499;</p>', '&#1490;&#1491;&#1499;&#1490;&#1491;', '&#1499;&#1490;&#1491;&#1499;&#1491;', 5, '&#1490;&#1491;&#1513;&#1499;&#1490;&#1491;&#1513;&#1499;&#1491;&#1513;&#1499;', 1, '2015-11-06 22:00:00', 'he', 0),
(19, '&#1490;&#1491;&#1499;&#1490;&#1491;&#1499;&#1491;&#1499;&#1490;&#1491;', '<p>&#1499;&#1490;&#1491;&#1490;&#1491;&#1499;&#1490;&#1491;&#1499;&#1490;&#1491;&#1499;&#1490;&#1491;&#1499;</p>', '', '', 5, '32432432432', 1, '2015-11-06 22:00:00', 'en', 0),
(20, '×’×“×›×’×“×›×’×“×›×’×“×›', '<p>×’×“×›×’×“×›×’×“</p>', '×›×’×“×›×’×“×›×’×“×›', '×’×“×›×’×“×›×“×›', 6, '×’×“×›×’×“×›×’×“×©×›×’×“×©×›×’×“×©', 1, '2015-11-06 22:00:00', 'en', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE IF NOT EXISTS `post_tags` (
  `tag` varchar(767) NOT NULL,
  `post` int(11) NOT NULL,
  PRIMARY KEY (`tag`,`post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`tag`, `post`) VALUES
('&#1490;&#1491;&#1499;&#1490;&#1491;&#1499;', 18),
('c-sharp', 2),
('c-sharp', 3),
('Express.js', 6),
('fds', 1),
('HTML 5', 4),
('Javascsript', 4),
('MVVM', 3),
('Node.js', 5),
('Node.js', 6),
('Node.js', 7),
('Node.js', 8),
('Node.js', 9),
('Node.js', 10),
('Node.js', 11),
('Sails.js', 5),
('Sails.js', 7),
('Sails.js', 8),
('Sails.js', 9),
('Sails.js', 10),
('Sails.js', 11),
('Web Notifications API', 4),
('WPF', 3),
('×›×œ×œ×™', 12),
('×ž×“×¨×™×š ×•×™×“×™××•', 5),
('×ž×“×¨×™×š ×•×™×“×™××•', 6),
('×ž×“×¨×™×š ×•×™×“×™××•', 7),
('×ž×“×¨×™×š ×•×™×“×™××•', 8),
('×ž×“×¨×™×š ×•×™×“×™××•', 9),
('×ž×“×¨×™×š ×•×™×“×™××•', 10),
('×ž×“×¨×™×š ×•×™×“×™××•', 11);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `author` text NOT NULL,
  `website` text NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=449 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `post_id`, `content`, `author`, `website`, `is_deleted`) VALUES
(338, 6, '×ž×¦×•×™×Ÿ, ×™×© ×¢×•×“?', '×’×œ×¢×“', '', 0),
(339, 5, '×™×¤×”, ×ª×•×“×”', '×’', '', 0),
(340, 12, '×ž×–×œ ×˜×•×‘!', '×¢×™×“×Ÿ', '', 0),
(341, 12, '×™×¤×” ×ž××•×“! ×–×” ×ž×˜×™×¨×™××œ ×“×™×–×™×™×Ÿ?', 'Agrigator', '', 0),
(342, 11, '×™×”×™×” ×”×ž×©×š?', 'tal', '', 0),
(343, 10, '×–×” ×ž×ž×© ×”×›×•×— ×©×œ sails.. ×™×¤×” ×ž××•×“, ×ª×•×“×”', 'Agrigator', '', 0),
(344, 9, '×™×”×™×” ×ž×ª×™×©×”×• ×”×ž×©×š?', 'tal', '', 0),
(345, 4, '×”×§×•×“ ×§×¦×ª ×ž×‘×•×œ×’×Ÿ.. ××‘×œ ×¢×–×¨ ×œ×™ ×ž××•×“', '×ž×©×”', '', 0),
(346, 4, '×ª×•×“×” × ×”× ×ª×™ ×œ×§×¨×•×', 'xx', '', 0),
(347, 3, '×”××—×¨×•×Ÿ ×ž×¢×•×œ×”!!! ×ž×“×”×™×', '×“×©×’×“×©', '', 0),
(348, 3, '×ª×•×“×”', '×“×Ÿ', '', 0),
(349, 3, '×™×© ×œ×–×” ×©×™×ž×•×© ×‘×¢×•×“ ×˜×›× ×•×œ×•×’×™×•×ª ×—×•×¥ ×žC#?', 'Agrigator', '', 0),
(431, 2, '×¤×•×¡×˜ ×ž×¦×•×™×™×Ÿ!', '×˜×œ ×‘×Ÿ-×“×•×“', '', 0),
(432, 2, '×™×¤×” ×ž××•×“ ××œ×™×¨×Ÿ!', 'Hadar', '', 0),
(433, 2, '×ª×•×“×”', '×ž×©×”', '', 0),
(434, 2, '×—×‘×œ ×©×”× ×œ× ×ž×™×ž×©×• ×—×¦×™ ×ž×ž×” ×©×”× ×¨×¦×•..', 'C3PO', '', 0),
(435, 2, '×œC3PO: ×”× ×©×ž×™× ×‘×‘×˜× ×›×œ ×ž×™× ×™ ×“×‘×¨×™× ×•××– ×ž×•×¨×™×“×™× ××ª ×ž×” ×©×”×ž×ª×›× ×ª×™× ×œ× ××”×‘×•..', 'Hadar', '', 0),
(436, 2, '×ª×•×“×” ×¨×‘×”.', 'aviv', '', 0),
(437, 11, '×©×ž×¢×ª×™ ×”×›×œ ×•×œ×ž×“×ª×™ ×”×¨×‘×”.. ×× ×™ ××ž×©×™×š ×¢× ×ž×¨×“×™×›×™× ××—×¨×™× ×›×™ × ×¨××” ×©××™×Ÿ ×”×ž×©×š ×‘× ×ª×™×™×', '×“×Ÿ', '', 0),
(438, 11, '××ª× ×ž×ª×›×•×•× ×™× ×œ×”×•×¡×™×£ ×¢×•×“ ×¡×¨×˜×•× ×™×?', 'Mordor', '', 0),
(439, 11, '×”×™×™, \r\n×”×× × ×™×ª×Ÿ ×œ×”×©×ª×ž×© ×‘Sails ×‘× ×•×¡×£ ×œExpress? \r\n\r\n×× ×™ ×¢×•×‘×“ ×¢×œ ×¤×¨×•×™×§×˜ ×©×›×ª×•×‘ ×‘Express ×•×”×™×™×ª×™ × ×•×¨× ×¨×•×¦×” ×œ×”×©×ª×ž×© ×‘×™×›×•×œ×•×ª ×©×ž×ª×•××¨×•×ª ×‘×¡×¨×˜×•×Ÿ\r\n\r\n×ª×•×“×”.', 'Op', '', 0),
(440, 11, '×ª×•×“×”! ×™×”×™×” × ×—×ž×“ ×× ×ª×•×¡×™×¤×• ×¢×•×“ ×¡×¨×˜×•× ×™×', 'katy', '', 0),
(441, 11, '×”×‘× ×ª×™ ×©×‘× ×™×’×•×“ ×œ×ž×” ×©××ª×” ××•×ž×¨ Sails ×ž×œ× ×‘×‘××’×™×... ×œ× ×™×¦× ×œ×š ×œ×”×ª×§×œ ×‘×”×?', '××•×¨×™', '', 0),
(442, 11, '×”×™ ×”×× ×–×” ×ž×ª××™× ×œ×ž×ª×›× ×ª×™× ×ž×ª×—×™×œ×™× ××• ×©×¢×“×™×Ÿ ×œ×”×ª×—×™×œ ×ž×ž×©×”×• ×¤×©×•×˜ ×™×•×ª×¨?? ×ª×•×“×”', 'Amir', '', 0),
(443, 11, '×ª×•×“×”!×‘×§×©×¨ ×œ×ž×“×¨×™×š ×¢×œ ×”×§×•× ×˜×¨×•×œ×¨×™× ××¤×©×¨ ×œ×™×¦×•×¨ ××•×ª× ×’× ×‘×œ×™ ×œ×”×©×ª×ž×© ×‘console ××• ×©×—×™×™×‘×™×? ×›×™ ×–×” ×œ× × ×¨××” × ×•×—...', 'GadiDean', '', 0),
(444, 11, '×× ×™ ×ž×ª×›× ×ª ×‘×¨×•×‘×™ ×•×”×¡×¨×˜×•× ×™× ×ž××•×“ ×¢×–×¨×• ×œ×™ ×œ×”×›× ×¡ ×’× ×œ×¡×™×œ×¡.. ×ª×•×“×”', '×¨×•×‘×™', '', 0),
(445, 11, '×•×”×× ×™×”×™×” ×”×ž×©×š?', '×¨×•×‘×™', '', 0),
(446, 11, '×× ×ª×•×›×œ×• ×œ×¢×©×•×ª ×ž×“×¨×™×š ×œnode ×‘×›×œ×œ×™ ×•×œ× ×œ×§×¤×•×¥ ×™×©×¨ ×œsails ×–×” ×™×”×™×” ×ž×¦×•×™×Ÿ.. ×× ×™ ×ž×¢×“×™×£ ×œ×”×ª×—×™×œ ×ž×œ×ž×˜×”. ×ª×•×“×”.', '×ª×ž×™×¨', '', 0),
(447, 12, '×ª×§×™×™×', '×”×‘×˜×—×ª ×¤×•×¡×˜×™× ×—×“×©×™×..', '', 0),
(448, 12, 'WordPress ×–×• ×‘×”×—×œ×˜ ×ž×¢×¨×›×ª × ×•×¨××™×ª... ×× ×™ ×‘×˜×•×— ×©×”×™×” ×”×¨×‘×” ×™×•×ª×¨ ×›×™×£ ×œ×›×ª×•×‘ ×ž×¢×¨×›×ª ×›×–×• ×ž×—×“×©', 'Op', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `name` varchar(767) NOT NULL,
  `description` varchar(767) NOT NULL,
  `alias` varchar(737) NOT NULL,
  `index` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `is_hidden` tinyint(1) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`name`, `description`, `alias`, `index`, `is_deleted`, `is_hidden`) VALUES
('&#1490;&#1491;&#1499;&#1490;&#1491;&#1499;', '', '', 0, 0, 0),
('c-sharp', '', 'C#', 0, 0, 0),
('Express.js', '', '', 0, 0, 0),
('fds', '', '', 0, 0, 0),
('HTML 5', '', '', 0, 0, 0),
('Javascsript', '', '', 0, 0, 1),
('MVVM', '', '', 0, 0, 1),
('Node.js', '', '', 0, 0, 0),
('Sails.js', '', '', 0, 0, 0),
('Web Notifications API', '', '', 0, 0, 1),
('WPF', '', '', 0, 0, 1),
('×›×œ×œ×™', '', '', 1, 0, 0),
('×ž×“×¨×™×š ×•×™×“×™××•', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(767) NOT NULL,
  `password` varchar(767) NOT NULL,
  `display_name` varchar(767) NOT NULL,
  `permission` tinyint(4) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `display_name`, `permission`, `is_deleted`, `datetime`) VALUES
(5, 'eliran013@gmail.com', 'b2db570ee82f7b01388d2b3a5367362d', '××œ×™×¨×Ÿ ×¤××¨', 1, 0, '2015-10-31 17:09:13'),
(6, 'idoscapa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '×¢×™×“×• ×¡×§×¤×”', 1, 0, '2015-11-06 18:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE IF NOT EXISTS `user_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(737) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`id`, `author`, `content`) VALUES
(3, '×’×“×›×’×“×›', '×’×“×›×’×“×›×“'),
(4, 'ohad halevy', '×”×™×™ ×©×œ×•× ×œ×›× ×¨××™×ª×™ ××ª ×”×ž×“×¨×™×š ×”×¨××©×•×Ÿ ×©×œ×›× ×œ×”×ª×§× ×ª ×•×™×¦×™×¨×ª ×¤×¨×•×™×™×§×˜ ×¨××©×•×Ÿ ×‘-node js ×•×¨×¦×™×ª×™ ×œ×©××•×œ ×”×× ×™×© ×œ×–×” ×”×ž×©×š ??'),
(5, '×ª×•×ž×¨ ', '×”×™×™,\r\n\r\n×× ×™ ×ž×ª×¢× ×™×™×Ÿ ×‘×ª×—×•× ×”×ž×—×©×‘×™× ×¨×•×¦×” ×œ×”×ª×—×™×œ ×œ×¢×¡×•×§ ×‘×• ×•×ž×—×¤×© ×›×™×•×•×Ÿ ×›×œ×œ×™ ×œ×”×ª×—×™×œ ×œ×œ×ž×•×“, ××©×ž×— ×œ×¢×¦×ª×›× \r\n×‘×ª×•×“×”, ×ª×•×ž×¨'),
(6, '×©×’×™× ×§×¨×ž×”', '×”×ž×“×¨×™×š ×ž×¦×•×™×™×Ÿ, ×”×× ×™×”×™×” ×”×ž×©×š ? ?'),
(7, 'tcihqhouw', 'SX825h  <a href="http://oalfcopccjev.com/">oalfcopccjev</a>, [url=http://rhihpjzemqhf.com/]rhihpjzemqhf[/url], [link=http://hjvvvemxsrig.com/]hjvvvemxsrig[/link], http://ilxggeqpqmrq.com/'),
(8, 'jwbhla', 'uaPBuw  <a href="http://nsnwuzvhfuis.com/">nsnwuzvhfuis</a>, [url=http://khbhexpexwzk.com/]khbhexpexwzk[/url], [link=http://oihucfjqlciw.com/]oihucfjqlciw[/link], http://wirtexybndyq.com/'),
(9, 'sagi k', '×”×× ×™×”×™×” ×”×ž×©×š ×œ×¡×“×¨×” ×”×ž×¢×•×œ×” ×©×œ×›× ?'),
(10, 'Johnd833', 'Farmville farms even include free gift that is especially fedkddkfedkg'),
(11, 'Johne995', 'I have not checked in here for a while since I thought it was getting boring, but the last few posts are good quality so I guess I''ll add you back to my daily bloglist. You deserve it my friend  dkeaaekddded'),
(12, 'Smitha796', 'Spot on with this writeup, I actually believe this website needs a great deal more attention. Ill probably be returning to read through more, thanks for the info! acdabkcdgcekdeda'),
(13, 'Johnk380', 'It''s actually a great and helpful piece of information. I am glad that you just shared this useful information with us. Please stay us up to date like this. Thank you for sharing. aakekfegbkcf'),
(14, 'Johnk952', 'I am impressed with this website, rattling I am a big fan. daeedkaecddd'),
(15, 'Smitha135', 'Wow, this article is fastidious, my younger sister is analyzing these kinds of things, thus I am going to convey her. cdfbckdebekfaddd'),
(16, 'Johna412', 'Thanks a bunch for sharing this with all of us you actually realize what you''re talking approximately! Bookmarked. Kindly also visit my web site . We will have a hyperlink exchange arrangement among us! bcdbbceagfkc'),
(17, 'Johnb90', 'I have recently started a web site, the info you provide on this site has helped me greatly. Thank you for all of your time &amp work. There can be no real freedom without the freedom to fail. by Erich Fromm. aedcbedgbdfg'),
(18, 'Smithb62', 'In my friend''s web blogs they already have provided me on the website rolls, but mine usually is located at the bottom on the listing and does not selection when I place as it does for some individuals. Is this a placing that I have to difference or is this a choice they may have considered? . ccgfdcecbedgeede'),
(19, 'Johne758', 'Hi there! I know this is kind of off topic but I was wondering if you knew where I could locate a captcha plugin for my comment form? I''m using the same blog platform as yours and I''m having difficulty finding one? Thanks a lot! dkacgbebdeek'),
(20, 'Johnk556', 'Enjoyed  examining  this, very good stuff,  thankyou . While thou livest keep a good tongue in thy head. by William Shakespeare. ababadfeefcd'),
(21, 'Smithg602', 'I like this post, enjoyed this one  thankyou  for posting . gbdfcdeafegcdedb'),
(22, 'Johnd850', 'Magnificent website. Lots of useful information here. Im sending it to some friends ans also sharing in delicious. And obviously, thanks for your sweat! eggefdkbaage'),
(23, 'Johne163', 'An interesting dialogue is value comment. I feel that it is best to write extra on this subject, it won''t be a taboo subject but generally persons are not sufficient to speak on such topics. To the next. Cheers kdcceeggadge'),
(24, 'Smithe394', 'Hey there! Do you know if they make any plugins to help with Search Engine Optimization? I''m trying to get my blog to rank for some targeted keywords but I''m not seeing very good results. If you know of any please share. Thank you! dddddbdgeedfdkbc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
