<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package format.ru.net
 */

get_header(); ?>
<div class="container">
		<div class="row">
			<div class="bg-header">
				<section class="top-header">
					<div class="container">
						<div class="row">
						</div>
					</div>
				</section>
				<section class="main-content">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								
								<?php 
									$args = array( 'category' => 2 );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ){
										setup_postdata($post);
										$pid = get_the_ID();
										?>
										<?php $metas = get_post_meta( $pid );
											if( isset($metas['first_before']) ){
												?><p class="main-content-sm-text"> <?php echo get_post_meta( $pid, 'first_before', true ); ?> </p>
										<?php	} ?>
										<h1 class="main-content-big-text"><?php the_content(); ?></h1>
										<?php $metas = get_post_meta( $pid);
											if( isset($metas['first_after']) ){
												?><p class="main-content-sm-text"> <?php echo get_post_meta( $pid, 'first_after', true ); ?> </p>
										<?php	} ?>
										<?php
									}
									wp_reset_postdata(); 
								?>

							</div>
								<div class="col-md-6">
									<div class="adaptive-bg">
										<?php echo get_the_post_thumbnail( 16, 'full'); ?>
									</div>
								</div>
							</div>
						</div>
					</section>
			</div>
		</div>
	</div>
	<section class="about-work">
		<div class="triangle-container">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="work-item">

							<?php 
									$args = array( 'include' => 22 );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ){
										setup_postdata($post);
										$pid = get_the_ID();
										?>
										<?php echo get_the_post_thumbnail( $pid, 'full'); ?>
										<h2 class="work-name"><?php the_title(); ?></h2>
										<?php 
										the_content();
										}
									wp_reset_postdata(); 
							?>

						</div>
					</div>
					<div class="col-md-4">
						<div class="work-item">
							<?php 
									$args = array( 'include' => 24 );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ){
										setup_postdata($post);
										$pid = get_the_ID();
										?>
										<?php echo get_the_post_thumbnail( $pid, 'full'); ?>
										<h2 class="work-name"><?php the_title(); ?></h2>
										<?php 
										the_content();
										}
									wp_reset_postdata(); 
							?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="work-item">
							<?php 
									$args = array( 'include' => 26 );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ){
										setup_postdata($post);
										$pid = get_the_ID();
										?>
										<?php echo get_the_post_thumbnail( $pid, 'full'); ?>
										<h2 class="work-name"><?php the_title(); ?></h2>
										<?php 
										the_content();
										}
									wp_reset_postdata(); 
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="top-triangle"></div>
			<div class="bot-triangle"></div>
		</div>
	</section>
	<section class="why-me mr-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="why-me-name section-name"><?php echo get_the_category_by_ID( 4 ); ?> </div>
				</div>
				<div class="col-md-12">
					<div class="col-md-6">
						<ul class="why-me-items">
							<li class="why-me-item wmi-1">
								<?php 
									$args = array( 'include' => 33 );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ){
										setup_postdata($post);
										$pid = get_the_ID();
										?>
										<span class="why-me-item-title"><?php the_title(); ?></span>
										<div class="why-me-item-text">
										<?php the_content(); ?></div>
										<?php 
									}
									wp_reset_postdata(); 
							?>
								
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="why-me-items">
							<li class="why-me-item wmi-4">
								<?php 
									$args = array( 'include' => 35 );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ){
										setup_postdata($post);
										$pid = get_the_ID();
										?>
										<span class="why-me-item-title"><?php the_title(); ?></span>
										<div class="why-me-item-text">
										<?php the_content(); ?></div>
										<?php 
									}
									wp_reset_postdata(); 
							?>
						</li>
						</ul>
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-6">
						<ul class="why-me-items">
							<li class="why-me-item wmi-2">
								<?php 
									$args = array( 'include' => 37 );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ){
										setup_postdata($post);
										$pid = get_the_ID();
										?>
										<span class="why-me-item-title"><?php the_title(); ?></span>
										<div class="why-me-item-text">
										<?php the_content(); ?></div>
										<?php 
									}
									wp_reset_postdata(); 
							?>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="why-me-items">
							<li class="why-me-item wmi-3">
								<?php 
									$args = array( 'include' => 39 );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ){
										setup_postdata($post);
										$pid = get_the_ID();
										?>
										<span class="why-me-item-title"><?php the_title(); ?></span>
										<div class="why-me-item-text">
										<?php the_content(); ?></div>
										<?php 
									}
									wp_reset_postdata(); 
							?>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-6">
						<ul class="why-me-items">
							<li class="why-me-item wmi-5">
								<?php 
									$args = array( 'include' => 41 );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ){
										setup_postdata($post);
										$pid = get_the_ID();
										?>
										<span class="why-me-item-title"><?php the_title(); ?></span>
										<div class="why-me-item-text">
										<?php the_content(); ?></div>
										<?php 
									}
									wp_reset_postdata(); 
							?>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="why-me-items">
							<li class="why-me-item wmi-6">
								<?php 
									$args = array( 'include' => 43 );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ){
										setup_postdata($post);
										$pid = get_the_ID();
										?>
										<span class="why-me-item-title"><?php the_title(); ?></span>
										<div class="why-me-item-text">
										<?php the_content(); ?></div>
										<?php 
									}
									wp_reset_postdata(); 
							?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="what-do">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="what-do-title section-name">
						<?php echo get_the_category_by_ID( 5 ); ?> 
					</div>
					<div class="col-md-12">
						<h3 class="section-subtitle">
							<?php echo category_description( 5 ); ?>
						</h3>
					</div>
				</div>
				<div class="col-md-6">
					<div class="what-do-bg">
						<?php if(has_category_thumbnail(5)) {
							the_category_thumbnail(5);
						} ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="functional-wrapper">
						<ul>
						<?php 
									$args = array( 'category' => 5, 'numberposts' => -1, 'order' => ASC );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ){
										setup_postdata($post);
										$pid = get_the_ID();
										?>
										<li class="f-opener"><span><?php the_title(); ?></span></li>
										<div class="f-text">
										<?php the_content(); ?></div>
										<?php 
									}
									wp_reset_postdata(); 
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="resent">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="resent section-name">
						Последние работы
					</div>
					<div class="col-md-6">
						<div class="resent-left">
							<a class="resent-work-link"	href="#">
								<img src="img/work/rest.png" alt="" class="resent-work-img">
								<span class="resent-work-name">
									Разработка сайта для ресторана
								</span>
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="resent-right">
							<a class="resent-work-link"	href="#">
								<img src="img/work/rest.png" alt="" class="resent-work-img">
								<span class="resent-work-name">
									Разработка сайта для ресторана
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="order">
		<div class="triangle-container">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="order-bg ">
							<div class="section-name section-name-inverse">
								заказать ваш проект
							</div>
							<div class="input-wrapper">
								<input type="text" class="order-input input-name">
								<label for="input-name" class="order-label">Ваше имя</label>
							</div>
							<div class="input-wrapper">
								<input type="text" class="order-input input-name">
								<label for="input-name" class="order-label">Как с вами связатся?</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="top-triangle"></div>
			<div class="bot-triangle"></div>
		</div>
	</section>
	<section class="question">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-9">
					<div class="section-question-title section-name mr-top">
						<?php echo get_the_category_by_ID( 6 ); ?> 
					</div>
					<div class="questions-container">
						<ul>
							<?php 
									$args = array( 'category' => 6, 'numberposts' => -1 );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ){
										setup_postdata($post);
										$pid = get_the_ID();
										?>
										<li class="questions-item">
										<a class="questions-item-opener">
											<h3><?php the_title(); ?></h3>
										</a>
										<div class="questions-item-text questions-hidden">
											<?php the_content(); ?>
										</div>
										</li>
										<?php 
									}
									wp_reset_postdata(); 
							?>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="left-question">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="left-questions-title section-name">
						Остались вопросы?
					</div>
					<h3 class="section-subtitle">
						задавайте их прямо сейчас и я оперативно на них отвечу
					</h3>
					<?php 
							$args = array( 'include' => 76 );
							$myposts = get_posts( $args );
							foreach( $myposts as $post ){
								setup_postdata($post);
								$pid = get_the_ID();
								?>
										<?php the_content(); ?>
								<?php 
							}
							wp_reset_postdata(); 
					?>
				</div>
				<div class="col-md-12">
					<div class="input-wrapper input-wrapper-inverse mw300">
						<input type="text" class="order-input input-name">
						<label for="input-name" class="order-label">Ваше имя</label>
					</div>
					<div class="input-wrapper input-wrapper-inverse mw300">
						<input type="text" class="order-input input-mail">
						<label for="input-mail" class="order-label">Ваш e-mail</label>
					</div>
					<div class="input-wrapper input-wrapper-inverse mw300">
						<textarea name="new-question" class="input-textarea" id="" cols="30" rows="10"></textarea>
						<label for="input-textarea" class="order-label">Введите здесь ваш вопрос:</label>
					</div>
					<div class="left-question-bnt">
						<div class="flat-btn">Отправить вопрос</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="seo-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="seo-content-title subsection-title">
						Заказать сайт с уникальным дизайном
					</div>
					<div class="seo-content-item scroll-pane">
						<p class="seo-content-text">
							Заказав разработку сайта у меня, вы получите готовый продукт, который гарантирует полноценное продвижение компании в интернет, обеспечит достойную рекламу и привлечение новых клиентов.
						</p>
						<p class="seo-content-text">Сайт - очень эффективный инструмент для развития бизнеса. Большое количество клиентов попросту не знают о вашей компании, а ведь множество клиентов может заходить на ваш сайт каждый день, не выходя из дома через интернет. Он работает 24 часа в сутки 7 дней в неделю без выходных и больничных и в отличии от обычного магазина или офиса он доступен из любой точки мира.</p>
						<p class="seo-content-text">
							Уникальный дизайн веб сайта является не только вашим фирменным стилем, подчеркивает уникальность товаров и услуг, которые продаются посредством сайта, но и существенно ускоряет индексирование сайта в поисковых системах посредством использования уникальных блоков кода, которые разработаны исключительно для Вашего проекта. Кроме того, уникальный дизайн подразумевает создание также уникального функционала, который максимально соответствует потребностям вашего бизнеса и позволяет в кратчайшие сроки изменять, добавлять или редактировать те предложения, которые актуальны именно сегодня.
						</p>
						<p class="seo-content-text">Заказать сайт является хорошим решением в случае, когда сфера деятельности полностью ориентирована для продвижения товаров и услуг в интернете. Сегодня довольно популярным является с самого старта деятельности компании заказывать создание сайта. Такое действие можно расценивать как очень целесообразное, потому что таким образом, можно охватить большое количество аудитории и при минимальных затратах организовать хорошую рекламную кампанию. При этом капиталовложения ниже чем продвижение через телевидение, радио, газеты и другие СМИ.</p>
						<p class="seo-content-text">Для облегчения поиска сайта в сети интернет делается его поисковая оптимизация и продвижение в поисковых системах, а также в популярных социальных сетях. Являясь разработчиком полного цикла, весь комплекс услуг по созданию сайта можно заказать у меня, это обеспечит хорошую посещаемость вашего сайта и привлечет потенциальных клиентов.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
