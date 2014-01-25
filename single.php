<?php get_header(); ?>	
				<ul>
					<li><?php next_post_link('%link','<i class="icon-chevron-right icon-3x"></i><span class="pagenav">下一篇</span>',TRUE); ?></li>
					<li><?php previous_post_link('%link','<i class="icon-chevron-left icon-3x"></i><span class="pagenav">上一篇</span>',TRUE); ?></li>
				</ul>	
				<ul>
					<li><a href="#"><i class="icon-archive icon-3x"></i><span>Archive</span></a></li>
					<li><a href="http://moe.akibarika.org/wp-admin/"><i class="icon-dashboard icon-3x"></i><span>Backyard</span></a></li>
					<li><a class="closer"><i class="icon-remove-sign"></i> Close</a></li>					
				</ul>								
			</aside>	
			<div id="page-wrap">		
				<section id="single" class="wrap-single">
					<?php while ( have_posts() ) : the_post(); ?>
					<article class="single-post">
						<h1 class="ribbon">
							<strong class="ribbon-content"><?php the_title(); ?></strong>
						</h1>
						<time class="post-time">
							<?php the_time('m j, Y') ?> // <span><?php the_author(); ?></span>
						</time>
						<div class="post-detail">
							<?php the_content(); ?>
						</div>
						<div class="single-meta">
							<div class="category">
								<span><i class="icon-folder-open"></i> <?php the_category('、') ?></span>
							</div>
							<div class="meta">
								<span><i class="icon-tags"></i> <?php the_tags((' '), '、'); ?></span>
							</div>
							<div class="meta">
							</div>
						</div>
					</article>
					<?php comments_template(); ?>
					<?php endwhile; ?>
				</section>
			</div>
			
      
<?php get_footer(); ?>