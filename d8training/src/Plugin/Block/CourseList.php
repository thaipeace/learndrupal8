<?php
namespace Drupal\d8training\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'Course list' Block
 *
 * @Block(
 *   id = "course_list",
 *   admin_label = @Translation("Course List"),
 * )
 */
class CourseList extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        $build = [];
        $courses = \Drupal::entityManager()->getStorage('course')
         ->loadMultiple();
        $build['course_view'] = \Drupal::entityManager()
         ->getViewBuilder('course')
         ->viewMultiple($courses);
        
        return $build;
    }
}