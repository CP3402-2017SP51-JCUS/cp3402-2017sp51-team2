<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package watthub
 */

?>

	<style>
        /* Footer CSS */
        .footer {
            background-color: #292c2f;
            box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.15);
            padding: 20px 40px;
            height: 300px;
            box-sizing: border-box;
        }

        .footer .footer-body {
            max-width: 100%;
            margin: 0 auto;
        }

        .footer .footer-body .footer-body-left {
            float: left;
            color: #ffffff;
        }

        .footer .footer-body .footer-body-left h1 {
            font: normal 42px Cookie, Arial, Helvetica, sans-serif;
            margin-bottom: 0px;
        }

        .footer .footer-body .footer-body-left h1 > span {
            color: #5383d3;
        }

        .footer .footer-body .footer-body-left p {
            font: normal 16px Arial, Helvetica, sans-serif;
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .footer .footer-body .footer-body-left a {
            font: normal 14px Arial, Helvetica, sans-serif;
            text-decoration: none;
            color: #ffffff;
        }

        .footer .footer-body .footer-body-right {
            padding-top: 35px;
            float: right;
            color: #ffffff;
        }

        .footer .footer-body .footer-body-right a {
            font: normal 24px 'Josefin Sans', Arial, Helvetica, sans-serif;
            text-decoration: none;
            color: #ffffff;
            padding-right: 20px;
        }
        
        @media only screen and (max-width: 768px) {
            .footer .footer-body {
                text-align: center;
            }
            .footer .footer-body .footer-body-left,
            .footer .footer-body .footer-body-right {
                float: none;
            }
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

<?php wp_footer(); ?>
    <footer class="footer">
        <div class="footer-body">
            <div class="footer-body-left">
                <h1>Watt<span>Hub</span></h1>
                <p> &copy; WattHub 2017, Developed by WattHub Team </p>
                <a href="mailto:support@watthub.io">support@watthub.io</a>
            </div>

            <div class="footer-body-right">
                <a href="#" class="selected"> Home </a>
                <a href="#"> Blog </a>
                <a href="#"> Order </a>
                <a href="#"> About Us </a>
            </div>
        </div>
    </footer>

</body>
</html>
