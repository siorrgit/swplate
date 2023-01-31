<a href="javascript:void(0)" class="movie-thumbnail" data-youtubeId="<?=get_sub_field('youtube')?>">
	<?php if ( get_sub_field('thumbnail') ) : ?>
	<img src="<?=get_sub_field('thumbnail')?>" alt="<?=get_sub_field('title')?>" loading="lazy">
	<?php else : ?>
	<img src="https://img.youtube.com/vi/<?=get_sub_field('youtube')?>/sddefault.jpg" alt="" loading="lazy">
	<?php endif; ?>
</a>
<script>
$(function() {

	let isVideoModalShown = false;

	const $videoModal = $('<div></div>').addClass('videoModal');
	const $videoModalClose = $('<div></div>').addClass('videoModal-close');
	const $videoModalStage = $('<div></div>').addClass('videoModalStage')
	$('body')
		.append($videoModal.append($videoModalClose))
		.append($videoModalStage);

	$videoModalClose.on('click', hide)
	$videoModalStage.on('click', hide)

	$('.play-video').each(function() {
		const id = this.getAttribute('data-movie');
		if (!id) return;
		$(this).on('click', function() {
			if (isVideoModalShown) {
				hide();
			} else {
				show(id);
			}
		})
	});

	/**
	 * Create video frame
	 */
	function createVideoFrame(id) {
		return $(`<iframe src="https://www.youtube.com/embed/${id}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`);
	}

	/**
	 * Show video modal
	 */
	function show(id) {
		if (isVideoModalShown) return;

		$videoModal.append(createVideoFrame(id));

		$videoModal.addClass('-shown');
		$videoModalStage.addClass('-shown');
		isVideoModalShown = true;
	}

	/**
	 * Hide video modal
	 */
	function hide() {
		if (!isVideoModalShown) return;

		$videoModal.find('iframe').remove();

		$videoModal.removeClass('-shown');
		$videoModalStage.removeClass('-shown');
		isVideoModalShown = false;
	}
});
</script>
