<?php

use Phinx\Migration\AbstractMigration;

class InitMopconBackendSchema2018 extends AbstractMigration
{
    public function up()
    {
        $sql = <<<SQL
-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- 主機: mariadb
-- 產生時間： 2018 年 10 月 04 日 14:54
-- 伺服器版本: 10.3.7-MariaDB-1:10.3.7+maria~jessie
-- PHP 版本： 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- 資料庫： `mopcon-test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `filegame_booth_mission`
--

CREATE TABLE `filegame_booth_mission` (
  `mission_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `mission` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mission_info` text COLLATE utf8_unicode_ci NOT NULL,
  `reward` double NOT NULL,
  `boothname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `boothinfo` text COLLATE utf8_unicode_ci NOT NULL,
  `started_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expired_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `filegame_quiz`
--

CREATE TABLE `filegame_quiz` (
  `quiz_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `quiz` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `choices` longtext COLLATE utf8_unicode_ci NOT NULL,
  `reward` double NOT NULL,
  `started_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expired_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `public_key` text COLLATE utf8_unicode_ci NOT NULL,
  `device_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fcm_push_token` text COLLATE utf8_unicode_ci NOT NULL,
  `mission_progress` longtext COLLATE utf8_unicode_ci NOT NULL,
  `quiz_progress` longtext COLLATE utf8_unicode_ci NOT NULL,
  `biilabs_balance` double NOT NULL,
  `biilabs_address` text COLLATE utf8_unicode_ci NOT NULL,
  `biilabs_seed` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `user_passbook`
--

CREATE TABLE `user_passbook` (
  `id` int(11) NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `withdrawal` double NOT NULL,
  `deposit` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `user_transaction`
--

CREATE TABLE `user_transaction` (
  `id` int(11) NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `filegame_booth_mission`
--
ALTER TABLE `filegame_booth_mission`
  ADD PRIMARY KEY (`mission_id`);

--
-- 資料表索引 `filegame_quiz`
--
ALTER TABLE `filegame_quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uuid`);

--
-- 資料表索引 `user_passbook`
--
ALTER TABLE `user_passbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_passbook_uuid` (`uuid`);

--
-- 資料表索引 `user_transaction`
--
ALTER TABLE `user_transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_transaction_uuid` (`uuid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `user_passbook`
--
ALTER TABLE `user_passbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `user_transaction`
--
ALTER TABLE `user_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 已匯出資料表的限制(Constraint)
--

SQL;
        $this->execute($sql);
    }

}
