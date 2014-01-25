<?php get_header(); ?>	
				<ul>
					<li><?php next_posts_link('<i class="icon-chevron-right icon-3x"></i><span class="pagenav">下一页</span>', 0); ?></li>
					<li><?php previous_posts_link('<i class="icon-chevron-left icon-3x"></i><span class="pagenav">上一页</span>', 0); ?></li>
				</ul>	
				<ul>
					<li><a href="#"><i class="icon-archive icon-3x"></i><span>Archive</span></a></li>
					<li><a href="http://moe.akibarika.org/wp-admin/"><i class="icon-dashboard icon-3x"></i><span>Backyard</span></a></li>
					<li><a class="closer"><i class="icon-remove-sign"></i> Close</a></li>				
				</ul>								
			</aside>			
			<section id="post">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="item show-up">
					<div class="warp-content clearfix">
						<div class="pic left">
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink() ?>" title="永久链接：<?php the_title(); ?>"><?php if ( has_post_thumbnail() ){ the_post_thumbnail('thumbnail', array('class'=>'thumb')); } ?>
								<?php } else { ?>
									<img src="<?php bloginfo( 'template_url' ); ?>/images/no-picture.jpg" />
								<?php } ?>							
						</div>
						<div class="post-content left">
							<h2 class="post-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>		
							<div class="excerpt">
								<?php if(has_excerpt()) : ?>
									<p><?php the_excerpt(); ?></p>
								<?php else : ?>
									<p><?php echo cut_str(strip_tags(apply_filters('the_content',$post->post_content)),180); ?></p>
								<?php endif; ?>	
							</div>
							<div class="post-meta left">
								<?php comments_popup_link('暂无吐槽', '被吐槽1次', '被吐槽%次'); ?> | 
								<time><?php the_time('m/d') ?></time> |
								<?php the_category('、') ?>
							</div>
							<a class="read-more right" href="<?php the_permalink(); ?>">Read More</a>
						</div>
					</div>
				</article>	
				<?php endwhile; ?>
				<?php else : ?>
				<article class="item">
					<div class="warp-content clearfix">
						<div class="not-found">
							<img src="<?php bloginfo('template_directory'); ?>/images/404-not-found.jpg" />
						</div>
					</div>
				</article> 
				<?php endif; ?>  
			</section>
			<?php wpbeginner_numeric_posts_nav(); ?> 
      
<?php get_footer(); ?>