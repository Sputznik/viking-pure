<?php

  $filters = array(
    'videos' => array(
      'id'    => 'checkbox-videos',
      'tax'   => 'videos',
      'label' => 'Videos'
    ),
    'quotes' => array(
      'id'    => 'checkbox-quotes',
      'tax'   => 'quotes',
      'label' => 'Quotes'
    ),
    'articles' => array(
      'id'    => 'checkbox-articles',
      'tax'   => 'articles',
      'label' => 'Articles'
    ),
    'press' => array(
      'id'    => 'checkbox-press',
      'tax'   => 'press',
      'label' => 'Press Releases'
    ),
  );

?>
<!-- VIKING FILTERS -->
<div class="filters-wrapper">
  <ul class="list-unstyled filters">
    <?php foreach( $filters as $filter ):?>
      <li data-filter="primary">
        <input id="<?php _e( $filter['id'] );?>" class="filter-checkbox" data-tax="<?php _e( $filter['tax'] );?>" type="checkbox" checked />
        <label for="<?php _e( $filter['id'] );?>"><?php _e( $filter['label'] );?></label>
      </li>
    <?php endforeach;?>
  </ul>
</div>
<!-- VIKING FILTERS -->
