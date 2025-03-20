<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package SU-7
 */

get_header();
?>

	<main id="primary" class="site-main wrapper">

		<section class="error-404 not-found">
			<div id="block-404">
				<span id="title-404">404</span>	
				<span id="notice-404">Страница не найдена</span>
				<span id="description-404">Вы набрали неправильный адрес страницы. Пожалуйста, перейдите на <a href="/" id="link-404">главную страницу сайта</a> или любой другой раздел из меню выше.</span>
			</div>
		</section><!-- .error-404 -->
		<style>

		    /* 404 style */
	            .error-404 {
			max-width: 703px;
			width: auto;
			margin: auto;
		    }
		    #block-404 {
		    	margin: 41px 0px 99px 0px;
		    	display: flex;
			flex-direction: column;
		    }
		    #title-404 {
			text-align: center;
		    	font-size: 250px;
			font-style: normal;
			font-weight: 400;
			line-height: 250px;
			color: #2773DD;
		    }
		    #notice-404 {
			text-align: center;
		    	font-size: 40px;
			font-style: normal;
			font-weight: 400;
			line-height: 28px;
			margin-bottom: 16px;
		    }
		    #description-404 {
			text-align: center;
			font-family: Circe;
			font-size: 20px;
			font-style: normal;
			font-weight: 350;
			line-height: 23px;
		    }
		    #link-404 {
		    	text-decoration: underline;
		    }
		    @media (max-width: 1023px) {
			#title-404 {
			    font-size: 125px;	
			}
                    }
		</style>

	</main><!-- #main -->

<?php
get_footer();
