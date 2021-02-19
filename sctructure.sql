-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 17, 2021 at 07:46 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tictactoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `c1r1` tinyint(4) NOT NULL,
  `c2r1` tinyint(4) NOT NULL,
  `c3r1` tinyint(4) NOT NULL,
  `c1r2` tinyint(4) NOT NULL,
  `c2r2` tinyint(4) NOT NULL,
  `c3r2` tinyint(4) NOT NULL,
  `c1r3` tinyint(4) NOT NULL,
  `c2r3` tinyint(4) NOT NULL,
  `c3r3` tinyint(4) NOT NULL,
  `next-to-move` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
