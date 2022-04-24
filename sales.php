
<?php
require('./htdocs/includes/config.php');
$page_title = 'Sale Items';
include('./htdocs/includes/header.html');
require(MYSQL);
$r = mysqli_query($dbc, 'CALL select_sale_items(true)');
if (mysqli_num_rows($r) > 0) {
  include('./htdocs/views/list_sales.html');
} else {
  include('./htdocs/views/noproducts.html');
}
include('./htdocs/includes/footer.html');
?>


