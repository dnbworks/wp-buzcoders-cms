<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="max-w-4xl mx-auto pb-6 md:pb-12 antialiased">
		<div class="w-auto mx-4">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						<header class="page-header">
							<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 98.23 76.27"><path d="M14.19,18,4.49,38.31a1,1,0,0,0,1.37,1.36,23.16,23.16,0,0,1,5.54-1.73,17.66,17.66,0,0,1,3.32-.52,13.57,13.57,0,0,1,3.35.5,28.37,28.37,0,0,0,5.87.71A8.18,8.18,0,0,0,29,37.5c1-.76,0-2.49-1-1.73-1.54,1.14-3.79.92-5.6.8-2.13-.15-4.14-.79-6.24-1.06a16.9,16.9,0,0,0-5.91.63A23,23,0,0,0,4.85,38l1.36,1.37L15.92,19c.55-1.15-1.17-2.17-1.73-1Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M15.11,17.08a122.42,122.42,0,0,1-2,18c-1,5.72-2,11.45-1.17,17.26.18,1.27,2.11.73,1.93-.53C13,45.92,14.22,40,15.26,34.2a118.39,118.39,0,0,0,1.85-17.12c0-1.28-2-1.28-2,0Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M42.31,19.08a7,7,0,0,1,3-2.57,2.86,2.86,0,0,1,3.74.79c1.89,2.3,1.15,6.1,1,8.83l-.4,9.49a78.27,78.27,0,0,1-.62,9.68c-.47,2.75-1.48,5.6-4.07,7a14.49,14.49,0,0,1-3.86,1.23c-1.61.34-2.92.7-3.83-1-1.45-2.71-1.52-6.08-1.77-9.07s-.45-6.24-.43-9.37a45.61,45.61,0,0,1,1.07-10.43c.73-3,2.59-6.27,6.08-6,1.29.08,1.28-1.92,0-2-3.13-.21-5.75,2-7,4.69-1.56,3.31-1.85,7.29-2,10.9a89.19,89.19,0,0,0,.32,12c.28,3.5.41,7.35,2.16,10.49s5.4,2.07,8.2,1.18a9.64,9.64,0,0,0,6.49-6.51c1.21-3.6,1.1-7.57,1.26-11.33l.51-12.15c.15-3.56.51-8.17-3.11-10.22a4.72,4.72,0,0,0-4.55,0,8.74,8.74,0,0,0-3.89,3.37c-.61,1.14,1.12,2.15,1.72,1Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M68.89,12c-5.73,8.11-8.92,17.6-12,27-.41,1.24,1.5,1.73,1.93.54A5.29,5.29,0,0,1,62,36.38c1.69-.62,3.08,0,4.75.24,3.22.48,5.69-1.8,7.7-4,.87-.94-.54-2.36-1.42-1.41-1.21,1.32-2.59,2.89-4.4,3.36s-3.35-.57-5.07-.51A7.41,7.41,0,0,0,56.88,39l1.93.54C61.85,30.31,65,21,70.62,13c.74-1.06-1-2.06-1.73-1Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M69.25,12q-.16,11.75.33,23.49c.31,7.31.27,15.07,2.78,22,.43,1.2,2.37.68,1.93-.53-2.5-6.95-2.43-14.71-2.73-22q-.48-11.49-.31-23a1,1,0,0,0-2,0Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M3.84,72c2-.33,4.33-2.14,4.28-4.36-.06-2.9-3.75-2.31-5.37-1.16A4.77,4.77,0,0,0,1,72.13,4.63,4.63,0,0,0,6.52,74.7c2.66-.61,4.34-2.94,5.71-5.11.68-1.1-1.05-2.1-1.73-1a10.54,10.54,0,0,1-3.25,3.7,3.4,3.4,0,0,1-3.77,0,2.67,2.67,0,0,1-.43-3.37,3.22,3.22,0,0,1,1.43-1.2,4,4,0,0,1,.93-.26,3.5,3.5,0,0,1,.56,0c.09,0,.25,0,.13,0s0,0,0,.06v.19s-.06.29-.09.39a3.1,3.1,0,0,1-.58.84A3.77,3.77,0,0,1,3.31,70a1,1,0,0,0-.7,1.23,1,1,0,0,0,1.23.7Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M14.25,63.84a29.72,29.72,0,0,1,2.53,11.78l2-.27A44.46,44.46,0,0,1,18.11,67a4.73,4.73,0,0,1,.19-1.8,2,2,0,0,1,1-.89c.6-.31,2.18-1,2.59-.18.59,1.15,2.32.14,1.73-1-.79-1.54-2.63-1.5-4.06-1.05a4.46,4.46,0,0,0-3.24,2.78,10.21,10.21,0,0,0-.21,2.65c0,.92,0,1.85.07,2.77a48.44,48.44,0,0,0,.65,5.64c.19,1.13,2,.84,2-.26A32.24,32.24,0,0,0,16,62.83a1,1,0,0,0-1.37-.36,1,1,0,0,0-.36,1.37Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M29.19,64.93a1,1,0,0,0,0-2,1,1,0,0,0,0,2Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M28.21,63.93q.32,7.07.2,14.13a1,1,0,0,0,2,0q.12-7.07-.2-14.13c-.06-1.28-2.06-1.29-2,0Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M31,66.42a11.68,11.68,0,0,1,3.24-1.09,9.52,9.52,0,0,1,3.66.54,1,1,0,0,0,.53-1.93,11.17,11.17,0,0,0-4.32-.59A14,14,0,0,0,30,64.69a1,1,0,0,0-.36,1.37,1,1,0,0,0,1.37.36Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M44,66a11.47,11.47,0,0,1,3.24-1,5.31,5.31,0,0,1,2.88.16,2.92,2.92,0,0,1,1.47,2.16,11.84,11.84,0,0,1,.24,3.51,8.67,8.67,0,0,1-.75,3.25,2.6,2.6,0,0,1-2.41,1.19,3.24,3.24,0,0,1-2.62-.91A5,5,0,0,1,45,72.1a18.62,18.62,0,0,1-.44-3.49c-.06-1-.39-2.76.78-3.26A1,1,0,0,0,45.69,64a1,1,0,0,0-1.37-.36c-1.46.63-1.83,2.29-1.82,3.73a27.17,27.17,0,0,0,.4,4.5c.47,2.64,1.9,5.08,4.79,5.43a5.85,5.85,0,0,0,4.06-.87,5.64,5.64,0,0,0,1.87-3.66,14.72,14.72,0,0,0,.12-4.91,6.4,6.4,0,0,0-1.47-3.55c-2.29-2.43-6.66-1.2-9.24,0-1.16.55-.15,2.27,1,1.72Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M59.23,63.24a86,86,0,0,1,.49,14.35c-.06,1.29,1.94,1.29,2,0a86,86,0,0,0-.49-14.35,1,1,0,0,0-1-1,1,1,0,0,0-1,1Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M61.74,66.89a14.11,14.11,0,0,1,4-2,5.65,5.65,0,0,1,1.77-.37c.44,0,.58.06.31.46a7.32,7.32,0,0,1-3.23,2.29,9.66,9.66,0,0,1-4.11.73l.26,2A7,7,0,0,1,67,71.47,43.19,43.19,0,0,1,72.18,77c.86,1,2.27-.46,1.41-1.42-1.88-2.08-3.54-4.4-5.86-6A8.69,8.69,0,0,0,60.21,68a1,1,0,0,0,.27,2,11.67,11.67,0,0,0,5.68-1.26c1.46-.74,3.68-2.13,3.81-3.95.14-2-2-2.46-3.59-2.14a14.83,14.83,0,0,0-5.65,2.55,1,1,0,0,0-.35,1.37,1,1,0,0,0,1.36.35Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M37.58,65a5.74,5.74,0,0,1,.16,1,4.86,4.86,0,0,1,0,.54c0,.11,0,.22,0,.33l.16-.24a8.08,8.08,0,0,0-1,.05l-1.11,0a34.07,34.07,0,0,1-4.4-.26,1,1,0,0,0-1,1.27l3,8.64c.42,1.21,2.35.69,1.93-.53l-3-8.64-1,1.26a34.77,34.77,0,0,0,5.95.22c.92,0,1.9-.17,2.24-1.18a5.84,5.84,0,0,0-.1-3c-.31-1.25-2.23-.72-1.93.53Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M21.92,63.73c.3.43,1.39,2.35.69,2.58a6.15,6.15,0,0,1-3.34-.26,1,1,0,0,0-1.13,1.47c.8,1.32,2,2.31,2.89,3.55a13.15,13.15,0,0,1,1.93,4,1,1,0,0,0,1.93-.53,14.82,14.82,0,0,0-2-4.34c-.91-1.32-2.17-2.36-3-3.72L18.74,68c1.53.43,3.88.91,5.25-.18,1.55-1.24.59-3.75-.34-5.08a1,1,0,0,0-1.37-.36,1,1,0,0,0-.36,1.37Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M79.52,12.92A64.39,64.39,0,0,1,87,12c1.2-.15,2.38-.4,3.57-.67A9.6,9.6,0,0,1,94.24,11c1.26.2,1.8-1.73.53-1.93-2.68-.43-5.16.61-7.79.95a71.16,71.16,0,0,0-8,1c-1.25.3-.72,2.23.53,1.93Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M78.79,14c2.54,2.36,3.56,5.8,4.33,9.08a96.46,96.46,0,0,1,2,11.29c.41,3.64-.06,7.32.53,10.93s2,6.87,2,10.49a1,1,0,0,0,2,0c0-3.73-1.41-7.17-2-10.8a34.36,34.36,0,0,1-.24-6A44.1,44.1,0,0,0,87,33a102.37,102.37,0,0,0-2.17-11.38C84,18.33,82.76,15,80.2,12.58c-.94-.88-2.36.53-1.41,1.41Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M94.71,9.94c-1,3.82-.56,7.75-.8,11.66-.26,4.07-1.22,8.08-1.69,12.14a95.1,95.1,0,0,0,.46,24.94l1.47-1.13c-2.14-1-4.31-1.86-6.69-1.3-1.25.29-.72,2.22.53,1.93,1.81-.43,3.54.35,5.15,1.1a1,1,0,0,0,1.46-1.13,93.67,93.67,0,0,1-.38-24.41c.46-3.91,1.35-7.76,1.65-11.68s-.27-7.8.77-11.59a1,1,0,0,0-1.93-.53Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M88.75,61.67c-4.65-.29-8.18,3.91-8.84,8.2a19.67,19.67,0,0,0,.68,8c.58,2.19,1.24,4.73,3.08,6.21,3.89,3.15,9.23-.69,11.61-3.93,3.09-4.22,3.69-9.61,3.59-14.7,0-1.21.17-2.88-.62-3.91A6.1,6.1,0,0,0,95,59.77a16.57,16.57,0,0,0-8.55.45A1,1,0,0,0,87,62.14a17,17,0,0,1,6-.71,8.7,8.7,0,0,1,2.76.7c.49.22.93.39,1.08.93a7.21,7.21,0,0,1,.07,1.74c.12,4.15-.09,8.52-2,12.28a13,13,0,0,1-3.4,4.25C90,82.46,87.88,83.54,86,83s-2.6-2.68-3.11-4.36a23.27,23.27,0,0,1-1.17-6.34c-.07-4,2.33-9,7-8.67,1.29.08,1.28-1.92,0-2Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/><path d="M87.08,61l-4.29,8.53,1.73,1,3.53-8.36-1.86-.51a15.09,15.09,0,0,1-2.79,7.59l1.83.78,2.82-8.89-2-.26a65.63,65.63,0,0,1-2.51,13.16l1.93.53,2-10.36-2-.26a61.81,61.81,0,0,1,.13,8c-.06,1.29,1.93,1.29,2,0,.22-4.07.63-8.14,1.23-12.18l-2-.27c.56,4.69,0,9.37-.65,14l2,.26a75.61,75.61,0,0,1,.94-12.66H87.28a51.44,51.44,0,0,1,.77,11c0,1.1,1.8,1.4,2,.27l1.35-9.21-1.83.24c1.6,3.5,1.82,7.4,2,11.19a1,1,0,0,0,2,0l.3-9.34-2,.26a70.76,70.76,0,0,1,.78,10h2l-.81-10.41-2,.27a47.15,47.15,0,0,1,1.45,10.1l2-.27-1.78-10a1,1,0,0,0-1.47-.6c-1.28.9-1.52,2.29-1.85,3.73L89,73.87l1.67-.44a17.68,17.68,0,0,1-3.19-4.81c-.38-.84-1.58-.5-1.82.24a61.15,61.15,0,0,0-2.08,8l1.83-.24a21.16,21.16,0,0,1-2.13-6.13c-.21-1.09-2.11-.86-2,.27.3,2.24.68,4.47,1.16,6.69a1,1,0,0,0,2-.27,55.36,55.36,0,0,0-.75-6.42l-1.83.77a36.72,36.72,0,0,1,3.76,7.65c.35,1,2.11.93,2-.27a48.25,48.25,0,0,0-1.62-8L84,71.41l2.25,7.23a1,1,0,0,0,2-.27q.39-3.74.44-7.5l-1.86.5a21.27,21.27,0,0,1,2,6.55c.17,1.2,1.86.77,2-.26A50.62,50.62,0,0,0,91,72.3a1,1,0,0,0-2,0,34.22,34.22,0,0,1-1.55,7.28h1.93a8.56,8.56,0,0,1-.12-3.38,1,1,0,0,0-1.93-.53l-1,3.54,2,.27c0-.39.73-.8,1-1.06a7.07,7.07,0,0,0,.95-1.16,10.76,10.76,0,0,0,1.23-2.64c.67-2,1.06-4,2.33-5.69.68-.9-.82-2.05-1.57-1.21l-.81.9,1.68,1a.51.51,0,0,1,.15-.41l-1.72-1-1.35,2,1.57-.2-.15-.13.3.7c-.05-.38.57-.95.78-1.26l1-1.44,2-2.87c.74-1.08-1-2-1.73-1a20.59,20.59,0,0,1-3.86,3.83l1.36,1.37A19.85,19.85,0,0,1,95.17,65l-1.67-1a3.28,3.28,0,0,1-1.9,2.1L93,67.54a21.37,21.37,0,0,1,1.37-2q.34-.47.72-.9l.46-.53a1.18,1.18,0,0,0,.36-1.33c-1.27.23-.73,2.16.53,1.93,1.86-.34,1.07-3.21-.74-3-1,.14-1.75,1.12-2.36,1.87a25.08,25.08,0,0,0-2.07,2.94c-.56.92.52,1.76,1.37,1.37a5.27,5.27,0,0,0,2.82-3.3c.32-1-1-1.57-1.67-1a21.29,21.29,0,0,0-4.07,4.56c-.54.79.56,2,1.36,1.36A23.28,23.28,0,0,0,95.64,65l-1.73-1-2.85,4.14c-.63.92-1.84,2.24-.73,3.27a1,1,0,0,0,1.57-.2l1.35-2c.72-1.08-1-2.06-1.72-1a2,2,0,0,0-.36.89c-.14.89.93,1.79,1.67,1l.8-.89-1.57-1.22c-1.37,1.82-1.8,4.07-2.53,6.17A7.38,7.38,0,0,1,88,76.91c-.8.83-1.54,1.36-1.68,2.57s1.65,1.31,2,.27l1-3.55-1.93-.53a11.25,11.25,0,0,0,.12,4.44,1,1,0,0,0,1.93,0A36.52,36.52,0,0,0,91,72.3H89a50.62,50.62,0,0,1-.26,5.36l2-.27a23,23,0,0,0-2.22-7,1,1,0,0,0-1.86.51q0,3.76-.44,7.5l2-.26-2.25-7.23a1,1,0,0,0-1.93.53,45.23,45.23,0,0,1,1.55,7.45l2-.26a39.46,39.46,0,0,0-4-8.13,1,1,0,0,0-1.83.77,50.57,50.57,0,0,1,.68,5.89l2-.27q-.67-3-1.09-6.15l-2,.26a23.45,23.45,0,0,0,2.33,6.61,1,1,0,0,0,1.83-.24,61.15,61.15,0,0,1,2.08-8l-1.83.24a19.31,19.31,0,0,0,3.49,5.22,1,1,0,0,0,1.68-.45l1-4.37c.22-1,.3-3,1.19-3.67l-1.47-.6,1.78,10c.2,1.12,2,.85,2-.26a49.65,49.65,0,0,0-1.52-10.64c-.27-1.06-2-.88-2,.27l.81,10.41a1,1,0,0,0,2,0,73.85,73.85,0,0,0-.86-10.5c-.17-1.15-1.92-.81-2,.27l-.3,9.34h2c-.23-4.17-.55-8.35-2.3-12.2a1,1,0,0,0-1.83.24l-1.35,9.21,2,.26a53.78,53.78,0,0,0-.84-11.54,1,1,0,0,0-1.93,0,78.79,78.79,0,0,0-1,13.19c0,1.09,1.81,1.42,2,.27.66-4.82,1.31-9.67.73-14.54-.12-1-1.78-1.49-2-.26Q86,65.64,85.69,72h2a61.81,61.81,0,0,0-.13-8c-.08-1-1.73-1.45-2-.27l-2,10.36a1,1,0,0,0,1.93.53A67.9,67.9,0,0,0,88.08,60.9c.1-1.17-1.63-1.3-2-.27L83.3,69.51c-.36,1.15,1.21,1.65,1.83.77a17.07,17.07,0,0,0,3.06-8.6c.07-1-1.48-1.42-1.87-.5l-3.53,8.36c-.49,1.15,1.13,2.19,1.73,1L88.81,62c.58-1.15-1.15-2.16-1.73-1Z" transform="translate(-0.65 -8.95)" style="fill:#231f20"/></svg>

							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'understrap' ); ?></h1>

						</header><!-- .page-header -->

						<div class="page-content">

							<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'understrap' ); ?></p>

							<a href="/">Back to Home</a>


						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main>

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div>
</div>

<?php
get_footer();