<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package watthub
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <title> Watthub </title>

    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>

    <style>
        /* Header CSS */
        .header {
            background-color: #292c2f;
            box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.15);
            padding: 20px 40px;
            height: 80px;
            box-sizing: border-box;
        }

        .header .header-body {
            max-width: 1200px;
            text-align: center;
            margin: 0 auto;
        }

        /* Logo */
        .header .header-body h1 {
            float: left;
            font: normal 42px Cookie, Arial, Helvetica, sans-serif;
            line-height: 40px;
            margin: 0;
        }

        .header .header-body h1 a {
            text-decoration: none;
            color: #ffffff;
        }

        /* Logo message */
        .header .header-body h1 span {
            color: #5383d3;
            font-size: 18px;
        }

        /* Menus */
        .header .header-body nav {
            font: 16px Arial, Helvetica, sans-serif;
            line-height: 40px;
            float: right;
        }

        .header .header-body nav a {
            display: inline-block;
            padding: 0 5px;
            text-decoration: none;
            color: #ffffff;
            font-size: 16px;
            opacity: 0.9;
        }

        .header .header-body nav a:hover {
            opacity: 1;
        }

        .header .header-body nav a.selected {
            color: #608bd2;
            pointer-events: none;
            opacity: 1;
        }
    </style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'watthub' ); ?></a>

    <header class="header">
        <div class="header-body">
            <h1><a href="#">Watthub</a></h1>

            <nav>
                <a href="#"> Home </a>
                <a href="#"> Blog </a>
                <a href="#"> Order </a>
                <a href="#"> About Us </a>
            </nav>
        </div>
    </header>

	<div id="content" class="site-content">
