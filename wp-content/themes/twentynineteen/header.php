<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	


		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">
		<div class="main_menu layout" air-module="module.main_menu">
		
			<div class="layout__spacer layout__spacer--left"></div>

			<div class="layout__column layout__column--left layout__column--unique">

				<div class="lm-flex l-fa-center logo-center">
					<a class="main_menu__logo l-ml-20 lm-ml-15 l-mr-20 lm-mr-10" href="/" data-gtm="Menu — Logo – Clicked">
					<!--<svg class="icon icon--site_logo" width="36" height="50" xmlns="http://www.w3.org/2000/svg"></svg>-->
					logo
					</a>

					<div class="sidebar__show-button ui-button ui-button--11">
						<svg class="icon icon--ui_arrow_down" width="10" height="6" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#ui_arrow_down"></use></svg>                <svg class="icon icon--ui_arrow_up" width="10" height="6" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#ui_arrow_up"></use></svg>            </div>

					<a class="main_menu__item l-hidden lm-block lm-fs-14 lm-ml-15" href="/new">Свежее</a>
				</div>

			</div>

			<div class="layout__column layout__column--center l-flex">

				<!-- Adfox button mobile -->
				<div class="lm-flex lm-fa-center lm-ml-15 l-hidden">
					<div class="propaganda" data-id="16" id="propaganda_1056"></div>
				</div>

				
			<div class="lm-ml-auto" air-module="module.search"><div class="search"><div class="search__button l-hidden lm-flex"><svg height="19" width="18" class="icon icon--search"><use xlink:href="#search"></use></svg></div> <div class="search__field lm-hidden"><svg height="13" width="12" class="icon icon--search"><use xlink:href="#search"></use><svg viewBox="0 0 16 18" id="search"><path fill-rule="evenodd" d="M15.757 15.545l-3.945-4.225a6.993 6.993 0 001.57-4.43c0-3.799-3.001-6.89-6.69-6.89C3.001 0 0 3.091 0 6.89c0 3.8 3.002 6.891 6.691 6.891 1.385 0 2.705-.43 3.834-1.247l3.974 4.257a.854.854 0 001.234.025.919.919 0 00.024-1.271zM6.69 1.798c2.727 0 4.946 2.284 4.946 5.093 0 2.808-2.219 5.093-4.946 5.093S1.746 9.699 1.746 6.89c0-2.809 2.218-5.093 4.945-5.093z"></path></svg></svg> <input type="search" placeholder="Поиск" class="search__input"> <div class="search-dropdown" style="display: none;"><!----> <!----> <!----></div></div></div></div>
				<!-- Adfox button -->
				<div class="l-flex l-fa-center l-ml-15 lm-hidden">
					<div class="propaganda propaganda--shown" data-id="12" id="propaganda_1057">
						<a href="" target="_blank" class="region-btn"> Калининград </a>  </div>
				</div>

				<div class="l-ml-auto lm-ml-0 l-flex l-fa-center">

					<a class="main_menu__write-button ui-button ui-button--12 ui-button--small l-mr-50 lm-hidden" href="/writing">Новая запись</a>

					<div class="head-notifies" air-module="module.notifiesPanel" name="js-notifications-panel">

			<!-- Bell icon -->
			<div class="head-notifies__toggler main_menu__item main_menu__item--notifications l-inline-block t-no_select" name="js-notifications-toggler">
				<svg class="icon icon--bell" width="18" height="18" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#bell"></use></svg>        <!-- Badge -->
				<span class="head-notifies__badge" name="js-notifications-badge">1</span>
			</div>


			<!-- Dropdown panel -->
			<div class="head-notifies__panel t-ff-1-400 t-fs-13" air-module="module.notifiesList" name="js-notifies-list-container">

				<!-- Panel header -->
				<header class="head-notifies__header">
					<span class="head-notifies__header-title t-ff-1-500 lm-hidden">Уведомления</span>
					<span class="head-notifies__header-link t-link-inline notify--hidden-el" name="js-notify-mark-all-as-read" data-gtm="Notifications — Mark-all-as-read Clicked">
						Пометить все как прочитанные
					</span>
				</header>

				<!-- Panel items -->
				<div class="head-notifies__items-wrapper" name="js-notifications">

					<!-- Empty -->
					<div class="empty-notification-wrapper">
						<span class="empty-notification-wrapper__smile"></span>
						<div class="empty-notification-wrapper__title t-ff-1-500 t-fs-15">Уведомлений пока нет</div>
						Пишите хорошие статьи, комментируйте, <br> и здесь станет не так пусто
					</div>

					<!-- List -->
					<div class="head-notifies__items" name="js-notifications-items"></div>

					<!-- Loader -->
					<div class="head-notifies__loader">
						
			<span class="ui_preloader ">
			<span class="ui_preloader__dot"></span>
			<span class="ui_preloader__dot"></span>
			<span class="ui_preloader__dot"></span>
			</span>
		</div>
	</div>

	<!-- Panel footer -->
	<footer class="head-notifies__footer t-ff-1-500" name="js-notifications-footer">
		<a class="head-notifies__footer-link t-link-inline" name="js-notifications-url" data-gtm="Notifications — All Notifications Clicked" href="/u/me/updates">Все уведомления</a>
	</footer>
</div>

</div>

		<div class="main_menu__auth l-ml-10 lm-ml-10 l-mr-40 lm-mr-0" air-module="module.auth_possession" data-ignore-outside-click="">

			<div class="main_menu__auth__login l-fs-15 lm-mr-15 main_menu__auth__login--shown" air-click="show_auth?need_reload" air-module="module.auth_user" data-logged-out-mod="shown">

				<svg class="icon icon--signin" width="20" height="20" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#signin"></use></svg>
				<span class="l-ml-10 lm-hidden">Войти</span>

			</div>

			<a href="/u/me" class="main_menu__auth__logged_in l-size-30" data-gtm="Menu — Avatar — Clicked" air-module="module.auth_user" data-logged-in-mod="shown" data-link="1">
				<img class="l-block l-size-full" air-module="module.auth_user" data-avatar="1">
			</a>

		</div>

	</div>

</div>





<div class="main_progressbar" air-module="module.progressbar">

<div class="main_progressbar__runner"></div>

</div>

<div class="main_progressbar_overlay"></div>    

<div id="notify"></div>
</div>




<!-- .site-branding-container -->
			
				<!-- <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			
			
			

			<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
				<div class="site-featured-image">
					<?php
						twentynineteen_post_thumbnail();
						the_post();
						$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

						$classes = 'entry-header';
					if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
						$classes = 'entry-header has-discussion';
					}
					?>
					<div class="<?php echo $classes; ?>">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div>.entry-header -->
					<?php rewind_posts(); ?>
				</div>
			<?php endif; ?> 




		</header><!-- #masthead -->

	<div id="content" class="site-content">
