<section class="reservation__container">
    <div class="reservation__header-background"></div>
    <h3 class="subtitle reservation--h3">Submit information to Place Order</h3>
    <h2 class="reservation--h2 title">reserve a table</h2>
    <div class="reservation__group">
        <div class="reservation__img">
            <img src="<?= get_template_directory_uri() ?>/assets/images/reservation.jpg" alt="reservation">
        </div>
        <div class="reservation__form">
            <?= do_shortcode('[caldera_form id="CF5ffd790ce03e5"]');?>
        </div>
    </div>
</section>