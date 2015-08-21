<?php

/**
 * @file
 * Contains \Drupal\image_title_caption\Plugin\Field\FieldFormatter\ImageTitleCaption.
 */

namespace Drupal\media_player_module\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\file\Plugin\Field\FieldFormatter\GenericFileFormatter;

/**
 * Plugin implementation of the 'image_title_caption' formatter.
 *
 * @FieldFormatter(
 *   id = "media_player_module",
 *   label = @Translation("Media File Formatter"),
 *   field_types = {
 *     "file"
 *   }
 * )
 */
class MediaFileFormatter extends GenericFileFormatter {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items) {
    $elements = parent::viewElements($items);
    foreach ($elements as &$element) {
      $element['#theme'] = 'media_file_formatter';
    }

    return $elements;
  }

}

