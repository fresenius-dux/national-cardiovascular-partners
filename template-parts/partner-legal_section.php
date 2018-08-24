<?php
/**
 * Template part for NCP's legal section.
 *
 *
 * @package txakolina
 */
  $legal_section = get_field('legal_section');
  if ($legal_section['legal_title'] || $legal_section['legal_content']) :
?>
<section class="legal-section">
    <div class="legal-section-inner-wrapper">
        <h3><?= $legal_section['legal_title']; ?></h3>
        <p><?= $legal_section['legal_content']; ?></p>
    </div>
</section>
<?php endif; ?>
