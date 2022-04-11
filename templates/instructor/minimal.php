<?php
/**
 * Instructor List Item
 *
 * Minimal layout
 *
 *
 * @since v2.0.2
 */

$instructor				= isset( $instructor ) ? $instructor : array();
?>
<div class="tutor-instructor-list-item tutor-instructor-layout-minimal tutor-card">
    <div class="tutor-card-body">
        <div class="tutor-avatar">
            <div class="tutor-ratio tutor-ratio-1x1">
                <img src="<?php echo esc_url( get_avatar_url( $instructor->ID, array( 'size' => 96 ) ) ); ?>" alt="<?php esc_html_e( $instructor->display_name ); ?>" loading="lazy">
            </div>
        </div>

        <div class="tutor-ratings tutor-ratings-lg tutor-mt-20">
            <?php tutor_utils()->star_rating_generator( $instructor->ratings->rating_avg ); ?>
            <span class="tutor-ratings-average"><?php esc_html_e( $instructor->ratings->rating_avg ); ?></span>
            <span class="tutor-ratings-count">(<?php esc_html_e( $instructor->ratings->rating_count ); ?>)</span>
        </div>

        <h4 class="tutor-instructor-title tutor-fs-4 tutor-fw-medium tutor-color-black tutor-mt-12 tutor-mb-8">
            <?php esc_html_e( $instructor->display_name ); ?>
        </h4>

        <div class="tutor-instructor-courses">
            <span class="tutor-fw-medium tutor-color-black"><?php esc_html_e( $instructor->course_count ); ?></span>
            <span class="tutor-color-muted"><?php $instructor->course_count > 1 ? esc_html_e( 'Courses', 'tutor' ) : esc_html_e( 'Course', 'tutor' ); ?></span>
        </div>

        <a href="<?php echo esc_url( tutor_utils()->profile_url( $instructor->ID, true ) ); ?>" class="tutor-stretched-link">
            <span class="tutor-d-none"><?php _e( "Details", "tutor" ); ?></span>
        </a>
    </div>
</div>
