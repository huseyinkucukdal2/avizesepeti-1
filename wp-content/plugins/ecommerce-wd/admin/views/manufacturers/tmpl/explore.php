<?php
 
defined('ABSPATH') || die('Access Denied');

// WD js
wp_print_scripts('jquery');
// WD css
wp_print_styles('dashicons');
wp_print_styles('wp-admin');
wp_print_styles('buttons');
wp_print_styles('wp-auth-check');

$controller = WDFInput::get_controller();
wde_register_ajax_scripts($controller);

// css
wp_print_styles('wde_layout_' . $this->_layout);
wp_print_styles('wde_' . $controller . '_' . $this->_layout);

// js
wp_print_scripts('wde_view');
wp_print_scripts('wde_layout_' . $this->_layout);
wp_print_scripts('wde_' . $controller . '_' . $this->_layout);

$filter_items = $this->filter_items;
$sort_data = $this->sort_data;
$sort_by = $sort_data['sort_by'];
$sort_order = $sort_data['sort_order'];
$pagination = $this->pagination;
$pager_number = 0;

$rows = $this->rows;
?>
<form class="wp-core-ui" name="adminForm" id="adminForm" action="" method="post">
  <?php echo $this->generate_message(); ?>
  <div class="tablenav top">
    <?php
    echo $this->generate_filters($filter_items);
    echo $this->generate_pager($pagination->_count, $pager_number++, WDFSession::get_pagination_start());
    ?>
  </div>
  <table class="adminlist table table-striped widefat fixed pages">
    <thead>
      <tr>
        <?php echo WDFHTML::wd_ordering('id', $sort_by, $sort_order, __('ID', 'wde')); ?>
        <?php echo WDFHTML::wd_ordering('name', $sort_by, $sort_order, __('Name', 'wde')); ?>
        <th class="col_logo"><?php _e('Logo', 'wde'); ?></th>
        <th class="col_site"><?php _e('Website', 'wde'); ?></th>
        <?php echo WDFHTML::wd_ordering('published', $sort_by, $sort_order, __('Published', 'wde')); ?>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($rows) {
        for ($i = 0; $i < count($rows); $i++) {
          $row = $rows[$i];
          $alternate = (!isset($alternate) || $alternate == 'alternate') ? '' : 'alternate';
          ?>
      <tr id="tr_<?php echo $row->id; ?>" class="row<?php echo $i % 2; ?> <?php echo $alternate; ?>"
          itemId="<?php echo $row->id; ?>"
          itemName="<?php echo $row->name; ?>">
        <td class="col_id">
          <?php echo $row->id; ?>
        </td>
        <td class="col_name">
          <a href="#" onclick="onItemClick(event, this);"><?php echo $row->name; ?></a>
        </td>
        <td class="col_logo">
          <?php
          if ($row->logo != '') {
            ?>
          <img src="<?php echo $row->logo; ?>" class="manufacturer_logo" alt="<?php echo $row->name; ?>" />
            <?php
          }
          ?>
        </td>
        <td class="col_site">
          <?php echo $row->site; ?>
        </td>
        <td class="col_published">
          <?php echo WDFHTML::icon_boolean_inactive($row->id, $row->published, 'publish', 'unpublish', TRUE); ?>
        </td>
      </tr>
          <?php
        }
      }
      else {
        echo WDFHTML::no_items(WDFToolbar::$item_name);
      }
      ?>
      </tbody>
  </table>

  <div class="tablenav top">
    <?php echo $this->generate_pager($pagination->_count, $pager_number++, WDFSession::get_pagination_start()); ?>
  </div>

  <input type="hidden" name="option" value="com_<?php echo WDFHelper::get_com_name(); ?>"/>
  <input type="hidden" name="controller" value="<?php echo WDFInput::get_controller(); ?>"/>
  <input type="hidden" name="task" value="explore"/>
  <input type="hidden" name="boxchecked" value=""/>
  <input type="hidden" name="sort_by" value="<?php echo $sort_by; ?>"/>
  <input type="hidden" name="sort_order" value="<?php echo $sort_order; ?>"/>
</form>

<script>
  var _callback = "<?php echo WDFInput::get('callback'); ?>";
</script>
<?php
die();