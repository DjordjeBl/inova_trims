<?php /* Template Name: Gallery */ ?>

<?php get_header(); ?>

<?php $images = get_field('gallery'); ?>
				<?php if ($images): ?>
					<div class="gallery-1">
						<?php foreach ($images as $image): ?>
							<a href="<?php echo $image['url']; ?>" data-lightbox="roadtrip" class="col-xs-6 col-sm-6 col-lg-4">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							</a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

<?php get_footer(); ?>