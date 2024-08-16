<?php
function get_menu_id( $location ) {

	// Get all locations
	$locations = get_nav_menu_locations();

	// Get object id by location.
	$menu_id = ! empty($locations[$location]) ? $locations[$location] : '';

	return ! empty( $menu_id ) ? $menu_id : '';

}


function get_child_menu_items( $menu_array, $parent_id ) {

	$child_menus = [];

	if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {

		foreach ( $menu_array as $menu ) {
			if ( intval( $menu->menu_item_parent ) === $parent_id ) {
				array_push( $child_menus, $menu );
			}
		}
	}

	return $child_menus;
}

$header_menu_id = get_menu_id( 'primary' );
$header_menus   = wp_get_nav_menu_items( $header_menu_id );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="shortcut icon" href="http://localhost/iplc/wp-content/themes/iplc/assets/img/logo-favicon.png" type="image/png">
	<?php wp_head(); ?>
	<style>
		canvas {
			height: 100%;
			width: 100%;
			border: none;
			outline: none;
		}

		path {
			fill: rgb(0, 0, 0) !important;
		}

		header svg {
				width: 150px;
			}

		@media (max-width: 575px) {

			header svg {
				width: 120px;
			}

		}

	
	</style>
		<script>
		const setDarkClass = () => {
			if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
				document.documentElement.classList.add('dark')
			} else {
				document.documentElement.classList.remove('dark')
			}
		}

		setDarkClass()

		window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setDarkClass)
	</script>
</head>

<body <?php body_class('min-h-screen flex flex-col bg-white dark:bg-gray-900'); ?>  x-data="{ menu: false }" x-init="$watch('menu', value => value
				? document.body.classList.add('overflow-hidden')
				: document.body.classList.remove('overflow-hidden')
)">
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">
	<header class="text-gray-900 font-semibold">
		<div class="max-w-4xl mx-auto md:pb-12 antialiased">
			<div class="w-auto mx-4">
				<div class="w-full mx-auto flex py-4 items-center">
					<div class="flex-1">
						<a href="<?php echo home_url(); ?>" class="flex items-center mb-4 md:mb-0">
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
								viewBox="0 0 110.3 27.94">
								<path
									d="M-1.29,38c27.87-1.47,55.77.16,83.65.23,7.92,0,15.84-.09,23.75-.42,1.93-.08,1.94-3.08,0-3-27.88,1.18-55.77-.51-83.66-.43-7.91,0-15.83.2-23.74.62-1.92.1-1.93,3.1,0,3Z"
									transform="translate(2.73 -10.28)" style="fill: #fff" />
								<path
									d="M37.43,35.59a17.78,17.78,0,0,0-.12-7c-.37-1.71-1.24-3.76-.21-5.4s-1.57-3.14-2.59-1.51c-1.27,2-.91,4.39-.37,6.57a15.4,15.4,0,0,1,.39,6.51,1.55,1.55,0,0,0,1,1.85,1.52,1.52,0,0,0,1.85-1Z"
									transform="translate(2.73 -10.28)" style="fill: #fff" />
								<path
									d="M37.91,27.09c-.19.24.09-.09.11-.11l.19-.18c-.19.19.06,0,.12-.08s.35-.15.18-.1.17,0,.2,0c-.21.05-.06,0,.07,0s.09,0-.07,0l.13,0c-.29-.15.08.05.11.07-.12-.07-.11-.09,0,0,.26.28-.13-.24.08.1.11.18.22.37.32.56s.21.45.31.67c.2.44-.1-.26.08.19.05.11.09.23.14.34a44.49,44.49,0,0,0,2.38,5.91A1.5,1.5,0,1,0,44.84,33c-.15-.28-.3-.56-.44-.85l-.18-.4a1.89,1.89,0,0,1-.09-.21c0,.11,0,.12,0,0-.24-.57-.45-1.15-.65-1.73a38.48,38.48,0,0,0-1.4-3.61A3.89,3.89,0,0,0,39,23.61a4.2,4.2,0,0,0-3.66,2,1.5,1.5,0,0,0,.53,2.05,1.56,1.56,0,0,0,2.06-.53Z"
									transform="translate(2.73 -10.28)" style="fill: #fff" />
								<path
									d="M53,32.87l-.54.3-.08,0-.29.11-.45.13c-.06,0-.62.1-.38.08a5.67,5.67,0,0,1-1.09,0c-.2,0-.21,0,0,0l-.26-.05c-.06,0-.57-.2-.27-.06l-.34-.19c-.15-.09-.15-.09,0,0a1.07,1.07,0,0,1-.19-.18c.27.27-.13-.28,0,0a3,3,0,0,1-.11-.43c.05.27,0-.3,0-.36s0-.41-.05-.62a13.47,13.47,0,0,0-.2-1.42c-.15-.8-.39-1.58-.55-2.37,0-.08,0-.47,0-.15a4.87,4.87,0,0,1,0-.54c0,.33,0-.13.08-.23l0,.13c.09-.14.09-.15,0,0h0c.15-.08.15-.08,0,0,.17,0,.17,0,0,0a2.43,2.43,0,0,1,.27,0c.28,0-.16-.09.12,0a2,2,0,0,1,.26.09c-.16-.07-.16-.06,0,0l.24.16c-.09-.08-.09-.08,0,0a4.12,4.12,0,0,1,.37.35,11.25,11.25,0,0,1,.76.92,1.51,1.51,0,0,0,2.12,0,1.56,1.56,0,0,0,0-2.12c-1-1.29-2.31-2.54-4.06-2.44a3.24,3.24,0,0,0-3,3.68,16.26,16.26,0,0,0,.5,2.48c.09.39.17.78.24,1.18s0,.18,0,.11c0,.08,0,.17,0,.25,0,.23,0,.47,0,.7a4.45,4.45,0,0,0,.83,2.54,4.2,4.2,0,0,0,2.14,1.38,7.17,7.17,0,0,0,5.62-.86A1.54,1.54,0,0,0,55,33.4,1.52,1.52,0,0,0,53,32.87Z"
									transform="translate(2.73 -10.28)" style="fill: #fff" />
								<path
									d="M56.78,37.35a16.82,16.82,0,0,0,3.89-.86,4.65,4.65,0,0,0,2.9-2.31,5.11,5.11,0,0,0,.16-3.71A17.21,17.21,0,0,0,62,27.23a5.57,5.57,0,0,0-2.47-2.58,3,3,0,0,0-3.69,1,3.93,3.93,0,0,0,0,3.75,18.21,18.21,0,0,0,1.66,3.3c1.62,2.42,4.21,4.11,7.21,3.57a1.51,1.51,0,0,0,1-1.84,1.55,1.55,0,0,0-1.85-1h-.67s-.29,0,0,0l-.53-.13-.29-.1c-.13,0,.07,0-.14-.06a4.91,4.91,0,0,1-1.78-1.43c-.2-.22-.12-.13-.08-.08l-.19-.27-.36-.55c-.23-.38-.43-.77-.63-1.16s-.35-.75-.51-1.14.06.16,0-.1c0-.1-.09-.21-.12-.31a2,2,0,0,1-.1-.32s-.08-.36-.06-.17a2.43,2.43,0,0,1,0-.27c0,.08-.07.25,0,0s-.12.15,0,0-.09.1-.09.06l-.06,0c.15,0,.17,0,0,0s.24,0,0,0,.19.06.2.06c-.3-.09.27.2.06,0a2.22,2.22,0,0,1,.37.38c.16.19-.1-.15,0,.06s.11.17.17.26.24.39.35.59A20.51,20.51,0,0,1,60.74,31l.12.33a4.75,4.75,0,0,1,.14.57c0,.24,0-.22,0,0v.22a2.62,2.62,0,0,1,0,.28c0,.4.08-.21,0,.17l-.06.2c0,.15.1-.13,0,.09a1.94,1.94,0,0,1-.15.24c.18-.22-.14.11-.16.13.14-.12-.24.13-.33.17-.25.14-.13.07-.06,0l-.36.14a13.17,13.17,0,0,1-1.55.45,12.62,12.62,0,0,1-1.47.27,1.54,1.54,0,0,0-1.5,1.5c0,.74.66,1.6,1.5,1.5Z"
									transform="translate(2.73 -10.28)" style="fill: #fff" />
								<path
									d="M69,36.9a15.61,15.61,0,0,1,2.42-1.08A5.28,5.28,0,0,0,74,34.24c1.38-1.78.7-4.07-.53-5.72s-2.92-3.83-5.17-3.34c-2.48.53-2.31,4-1.77,5.85a21,21,0,0,0,1.29,3.15A10.55,10.55,0,0,0,69.55,37a1.51,1.51,0,0,0,2.12,0,1.53,1.53,0,0,0,0-2.12,3.44,3.44,0,0,1-.3-.35c.13.17,0,0,0-.06l-.13-.19c-.19-.31-.36-.62-.52-.94s-.29-.6-.43-.9l-.21-.47c0-.1-.1-.2-.14-.3l0-.11a10,10,0,0,1-.65-2.07,7.35,7.35,0,0,1,0-1c0-.23,0,0,0-.27l.06-.24a.75.75,0,0,1,0-.16c0-.11,0-.11,0,0s-.2.23-.32.28a.8.8,0,0,1-.21.05s.25,0,.09,0,.08,0,.09,0c-.23-.11.18.11.23.14s0,0,0,0l.23.2A13.67,13.67,0,0,1,70.81,30a7.19,7.19,0,0,1,.58.86,2.28,2.28,0,0,1,.34.8c.07.26,0-.13,0,.15a1.22,1.22,0,0,1,0,.27s0,.24,0,.08-.12.33,0,.15,0,.09-.07.12c-.11.19.13-.12,0,0l-.15.14c.12-.1.06,0,0,0s-.5.25-.28.16c-.34.14-.7.25-1,.38a20.67,20.67,0,0,0-2.62,1.2A1.5,1.5,0,1,0,69,36.9Z"
									transform="translate(2.73 -10.28)" style="fill: #fff" />
								<path
									d="M78.14,34.35c-1.51-.36-2.07-1.89-2.48-3.23-.55-1.79-1-3.61-1.55-5.41s-1.18-3.53-1.74-5.3-.16-3.59-.27-5.37-3.12-1.93-3,0-.25,4.14.38,6.16,1.44,4.27,2.06,6.44c1,3.45,1.65,8.6,5.8,9.6,1.88.46,2.68-2.43.8-2.89Z"
									transform="translate(2.73 -10.28)" style="fill: #fff" />
								<path
									d="M78.62,32a21.53,21.53,0,0,1,5.26,0,1.5,1.5,0,0,0,1.06-.44,1.52,1.52,0,0,0,.44-1.06,1.46,1.46,0,0,0-.44-1.06A1.71,1.71,0,0,0,83.88,29a21.53,21.53,0,0,0-5.26,0,1.59,1.59,0,0,0-1.06.44,1.5,1.5,0,0,0-.44,1.06,1.5,1.5,0,0,0,1.5,1.5Z"
									transform="translate(2.73 -10.28)" style="fill: #fff" />
								<path
									d="M85.18,28.72a7.93,7.93,0,0,0-2.84-3,6.23,6.23,0,0,0-4.24-1.05,2.54,2.54,0,0,0-1.94,1.8,4.9,4.9,0,0,0,.12,2.52,14,14,0,0,0,2,4,5.33,5.33,0,0,0,1.92,1.91c.84.43,1.75.75,2.62,1.11a1.51,1.51,0,0,0,1.85-1,1.54,1.54,0,0,0-1-1.84l-1.19-.5-.34-.14-.38-.17c-.06,0-.49-.33-.27-.14a4.59,4.59,0,0,1-.37-.39c.2.23-.13-.2-.16-.25l-.23-.34a20.13,20.13,0,0,1-1.12-1.9s-.25-.56-.15-.3c-.07-.18-.13-.36-.19-.54s-.11-.37-.15-.56a2.74,2.74,0,0,1,0-.28c0,.14,0,.15,0,0a3.73,3.73,0,0,1,0-.47c0,.17,0,.18,0,0a.55.55,0,0,1-.12.24.53.53,0,0,1-.28.17c.17,0,.15-.05-.06,0a2,2,0,0,1,.42,0h-.11l.25.05.48.12.48.17c-.33-.13.09,0,.15.08a6.63,6.63,0,0,1,.81.48l.2.14c-.13-.1-.14-.1,0,0l.33.29.3.32c0,.05.36.47.16.18a7.56,7.56,0,0,1,.52.86,1.52,1.52,0,0,0,2.06.54,1.54,1.54,0,0,0,.53-2.06Z"
									transform="translate(2.73 -10.28)" style="fill: #fff" />
								<path
									d="M93.84,26.92l-.19-.22c-.11-.12.11.14.1.13l-.08-.1c-.13-.17-.25-.35-.37-.53a6.33,6.33,0,0,0-.92-1.08,5.34,5.34,0,0,0-2.47-1.31,2.68,2.68,0,0,0-2,.13,2.35,2.35,0,0,0-.93,2,7.26,7.26,0,0,0,.26,2.54,7.78,7.78,0,0,0,1.48,2.8,1.52,1.52,0,0,0,1.06.44,1.54,1.54,0,0,0,1.07-.44,1.51,1.51,0,0,0,.43-1.06,1.69,1.69,0,0,0-.43-1.06c-.16-.2.16.23,0,.08l-.09-.14c-.08-.11-.15-.23-.22-.34a6.53,6.53,0,0,1-.35-.7l.15.36A6.17,6.17,0,0,1,90,26.84l0,.4a6.18,6.18,0,0,1,0-1.55l0,.4a1.36,1.36,0,0,1,.07-.35l-.15.36-.39.4-.36.15h.07l-.4.05a2.55,2.55,0,0,1,.39,0l-.4-.05a4.27,4.27,0,0,1,1,.27l-.36-.15a3.76,3.76,0,0,1,.76.42c.2.14-.22-.19-.09-.07l.15.13c.11.1.21.21.31.32a1,1,0,0,1,.13.16c0-.09-.19-.25,0-.06l.27.39a10.37,10.37,0,0,0,.77,1,1.5,1.5,0,0,0,2.12-2.13Z"
									transform="translate(2.73 -10.28)" style="fill: #fff" />
								<path
									d="M89.1,31.93l.25.29.14.16c.17.2-.15-.22,0-.07a4.86,4.86,0,0,1,.4.7l-.15-.36a2.61,2.61,0,0,1,.14.55l0-.4a1.55,1.55,0,0,1,0,.48l.06-.4a1.58,1.58,0,0,1-.09.31l.16-.36-.11.22c-.17.28.23-.24,0,0l-.15.14c-.12.11-.23.11.09-.06-.28.15-.54.32-.82.45-.75.34-1.5.65-2.24,1a1.45,1.45,0,0,0-.69.9,1.52,1.52,0,0,0,.15,1.16,1.5,1.5,0,0,0,.89.69,1.86,1.86,0,0,0,1.16-.15l2.14-.93A4.57,4.57,0,0,0,92.05,35a3.16,3.16,0,0,0,.61-2.93,5.9,5.9,0,0,0-1.44-2.27,1.5,1.5,0,0,0-2.12,0,1.53,1.53,0,0,0,0,2.12Z"
									transform="translate(2.73 -10.28)" style="fill: #fff" />
								<path
									d="M19.5,36.88a16.15,16.15,0,0,0,5.19.17,7.85,7.85,0,0,0,4.08-2.16,9.57,9.57,0,0,0,2.52-8.61,4.89,4.89,0,0,0-2.8-3.5A3.45,3.45,0,0,0,23.93,24a6.58,6.58,0,0,0-.49,4.85A14.87,14.87,0,0,0,25,33.32a7.44,7.44,0,0,0,8.29,3.26,1.5,1.5,0,0,0-.8-2.89,4.43,4.43,0,0,1-4.41-1.23,6.35,6.35,0,0,1-1.25-2.55,10.16,10.16,0,0,1-.62-3.22,2.16,2.16,0,0,1,.32-1.16c.13-.19.18-.22.5-.12a2,2,0,0,1,1.39,1.77,6.52,6.52,0,0,1-1.48,5.3,5.21,5.21,0,0,1-2.81,1.64A11.47,11.47,0,0,1,20.29,34,1.55,1.55,0,0,0,18.45,35a1.52,1.52,0,0,0,1.05,1.85Z"
									transform="translate(2.73 -10.28)" style="fill: #fff" />
								<path
									d="M16.77,25.74c-2.44-2.44-6.58-4.13-9.14-.85-2.18,2.78-1.13,6.8,1.08,9.22,1.95,2.12,6.12,4,8.58,1.61,1.24-1.18,1.39-2.94,1.37-4.55a32.46,32.46,0,0,0-.62-5.9A31.18,31.18,0,0,1,17,18.57c.06-2.33,1.07-4.5.88-6.85-.15-1.91-3.15-1.93-3,0s-.53,3.68-.77,5.55a16.52,16.52,0,0,0,.29,5.15c.34,1.81.82,3.58,1.06,5.41a14.24,14.24,0,0,1,.11,5c-.38,1.43-2.12.89-3.1.38a5.84,5.84,0,0,1-2.67-2.94c-.48-1.21-.63-3,.53-3.92,1.47-1.14,3.33.46,4.34,1.47a1.5,1.5,0,0,0,2.12-2.12Z"
									transform="translate(2.73 -10.28)" style="fill: #fff" />
								<path
									d="M16.39,30.27c0,2.1,1.25,3.79,2.5,5.36a1.46,1.46,0,0,0,1.06.44,1.5,1.5,0,0,0,1.5-1.5l-.06-.39a1.54,1.54,0,0,0-.38-.67l-.31-.39.23.3a10.7,10.7,0,0,1-1.38-2.2l.15.36a5.09,5.09,0,0,1-.32-1.14l.05.39a5.09,5.09,0,0,1,0-.56,1.5,1.5,0,1,0-3,0Z"
									transform="translate(2.73 -10.28)" style="fill: #fff" />
							</svg>
						</a>
					</div>

					<nav
						class="hidden lg:block md:w-auto md:ml-auto flex flex-wrap items-center text-lg justify-around lg:justify-center">

			<?php if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {


					foreach ( $header_menus as $menu_item ) {
						if ( ! $menu_item->menu_item_parent ) {

							$child_menu_items   = get_child_menu_items( $header_menus, $menu_item->ID );
							$has_children       = ! empty( $child_menu_items ) && is_array( $child_menu_items );
							$has_sub_menu_class = ! empty( $has_children ) ? 'has-submenu' : '';
							$link_target        = ! empty( $menu_item->target ) && '_blank' === $menu_item->target ? '_blank' : '_self';

							// Note_: Similar to $menu_item->target, there are other keys available in the $menu_item, such as classes. You can more key values if you need.
							// echo '<pre>';
							// var_dump($menu_item);
							// var_dump( $_SERVER["REQUEST_URI"]);
							// echo '</pre>';
							// wp_die();

							
							if ( ! $has_children ) { ?>
									<a class="nav-link inline-flex text-gray-900 mr-0 lg:mr-6 hover:bg-gray-200 <?php echo explode('/', $_SERVER["REQUEST_URI"])[1] == strtolower($menu_item->title) ? "bg-gray-200" : "not-equal" ?> border-0 py-1 px-3 focus:outline-none transition-colors duration-200 <?php ?>" href="<?php echo esc_url( $menu_item->url ); ?>"
									   target="<?php echo esc_attr( $link_target ); ?>"
									   title="<?php echo esc_attr( $menu_item->title ); ?>">
										<?php echo esc_html( $menu_item->title ); ?>
									</a>
								<?php
							} 
						}
					}
				}
					?>

					</nav>

					<div class="flex gap-4 items-center justify-end">
						<div class="relative" x-data="{
																		menu: false,
																		theme: localStorage.theme,
																		darkMode() {
																						this.theme = 'dark'
																						localStorage.theme = 'dark'
																						setDarkClass()
																		},
																		lightMode() {
																						this.theme = 'light'
																						localStorage.theme = 'light'
																						setDarkClass()
																		},
																		systemMode() {
																						this.theme = undefined
																						localStorage.removeItem('theme')
																						setDarkClass()
																		},
																		toggle() {
																			if (this.theme == 'light') {
																				this.darkMode();
																			} else {
																				this.lightMode();
																			}
																		}
														}" @click.outside="menu = false">
							<button
								class="p-1 border dark:border-gray-700 rounded-full hover:bg-gray-50 dark:hover:bg-gray-800 focus:hover-gray-50 dark:focus:hover-gray-800 hover:border-gray-300 dark:hover:border-gray-600 dark:focus:border-gray-600 text-gray-700 dark:text-gray-300"
								:class="theme ? 'text-gray-700 dark:text-gray-300' : 'text-gray-400 dark:text-gray-600 hover:text-gray-500 focus:text-gray-500 dark:hover:text-gray-500 dark:focus:text-gray-500'"
								@click="toggle()">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
									stroke-width="1.5" stroke="currentColor" class="block dark:hidden w-6 h-6">
									<path stroke-linecap="round" stroke-linejoin="round"
										d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z">
									</path>
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
									stroke-width="1.5" stroke="currentColor" class="hidden dark:block w-6 h-6">
									<path stroke-linecap="round" stroke-linejoin="round"
										d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z">
									</path>
								</svg>
							</button>

							<div x-show="menu"
								class="absolute origin-top-right right-0 py-2 bg-white dark:bg-gray-800 rounded-md shadow-xl flex flex-col"
								style="display: none;" @click="menu = false">
								<button
									class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100"
									:class="theme === 'light' ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'"
									@click="lightMode()">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
										stroke-width="1.5" class="w-5 h-5 stroke-current">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z">
										</path>
									</svg>
									<span class="ml-2 text-sm">Light</span>
								</button>
								<button
									class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-500 dark:text-gray-400"
									:class="theme === 'dark' ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'"
									@click="darkMode()">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
										stroke-width="1.5" class="w-5 h-5 stroke-current">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z">
										</path>
									</svg>
									<span class="ml-2 text-sm">Dark</span>
								</button>
								<button
									class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-500 dark:text-gray-400"
									:class="theme === undefined ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'"
									@click="systemMode()">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
										stroke-width="1.5" class="w-5 h-5 stroke-current">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25">
										</path>
									</svg>
									<span class="ml-2 text-sm">System</span>
								</button>
							</div>
						</div>
						<button class="md:block lg:none" @click="menu = ! menu">
							<svg class="w-6 h-6 text-gray-700 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg"
								fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round"
									d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
							</svg>
						</button>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div x-show="menu" class="sidenav fixed inset-0 bg-white dark:bg-gray-900 z-20" style="display: none;">
		<div class="h-20 px-4 flex items-center justify-between">
			<a class="block h-14 w-14 relative rounded-full border-2 border-white dark:border-gray-700 group shadow"
				href="/">

			</a>
			<button @click="menu = ! menu">
				<svg class="w-6 h-6 text-gray-700 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
					viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
				</svg>
			</button>
		</div>
		<nav class="px-4 text-right">
			<ul class="flex flex-col gap-6">
				<li>
					<a href="/about"
						class="font-medium text-xl py-1 hover:text-gray-900 dark:hover:text-gray-100 text-gray-500 border-transparent">
						About
					</a>
				</li>
				<li>
					<a href="/blog"
						class="font-medium text-xl py-1 hover:text-gray-900 dark:hover:text-gray-100 text-gray-500 border-transparent">
						Blog
					</a>
				</li>
				<li>
					<a href="/project"
						class="font-medium text-xl py-1 hover:text-gray-900 dark:hover:text-gray-100 text-gray-500 border-transparent">
						Projects
					</a>
				</li>
				<li>
					<a href="/contact"
						class="font-medium text-xl py-1 hover:text-gray-900 dark:hover:text-gray-100 text-gray-500 border-transparent">
						Contact
					</a>
				</li>
			</ul>
		</nav>
	</div>

