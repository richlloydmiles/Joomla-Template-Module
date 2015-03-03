<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<h1><?php echo $heading; ?></h1>

<?php foreach ($items as $item): ?>
<?php
echo $item->name;
?>

<?php endforeach; ?>
