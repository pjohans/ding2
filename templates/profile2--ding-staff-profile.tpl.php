<?php

/**
 * @file
 * Default theme implementation for profiles.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) profile type label.
 * - $url: The URL to view the current profile.
 * - $page: TRUE if this is the main view page $url points too.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-profile
 *   - profile-{TYPE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  
  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // Hide name fields - they are present in the panel pane title 
      hide($content['field_ding_staff_forename']);
      hide($content['field_ding_staff_surname']);
      
      // Hide fields 
      //hide($content['field_ding_staff_email']);
      //hide($content['field_ding_staff_phone']);

      // Render remaining fields
      print render($content);
    ?>
  </div>
</div>
