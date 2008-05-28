<?php
	/**
	 * Elgg export test
	 * 
	 * @package ElggDevTools
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Marcus Povey <marcus@marcus-povey.co.uk>
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */
?>

<form>
	<input type="hidden" name="owner_id" value="<?php echo $vars['owner_id']; ?>" />
	GUID : <input type="text" value="" name="guid" /> <input type="submit" name="export" value="export" />
</form>

<form method="post" action="<?php echo $vars['url']; ?>action/import/odd">
	IMPORT : 
	<textarea name="data" cols="50" rows="10"></textarea>
	<input type="submit" name="import" value="import" />
</form>