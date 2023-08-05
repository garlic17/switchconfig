<?php if(!empty($sAddr)) { ?>

<?php if(getPortStatus($interfaces, "Gi1/0/1") != "none") { ?>
<tr><td colspan='13'><?php echo $sAddr."<b>-1</b>"; ?></td></tr>
<tr class='portnumbers'>
	<td>01</td>
	<td class='hidden'>03</td>
	<td class='hidden'>05</td>
	<td class='hidden'>07</td>
	<td class='hidden'>09</td>
	<td>11</td>
	<td></td>
	<td>13</td>
	<td class='hidden'>15</td>
	<td class='hidden'>17</td>
	<td class='hidden'>19</td>
	<td class='hidden'>21</td>
	<td>23</td>
</tr>
<?php } ?>

<tr>
	<?php echoPortTD($interfaces, "Gi1/0/1", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/3", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/5", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/7", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/9", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/11", $sAddr); ?>
	<td>&nbsp;</td>
	<?php echoPortTD($interfaces, "Gi1/0/13", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/15", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/17", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/19", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/21", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/23", $sAddr); ?>
</tr>
<tr>
	<?php echoPortTD($interfaces, "Gi1/0/2", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/4", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/6", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/8", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/10", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/12", $sAddr); ?>
	<td>&nbsp;</td>
	<?php echoPortTD($interfaces, "Gi1/0/14", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/16", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/18", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/20", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/22", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi1/0/24", $sAddr); ?>
</tr>

<?php if(getPortStatus($interfaces, "Gi1/0/1") != "none") { ?>
<tr class='portnumbers'>
	<td>02</td>
	<td class='hidden'>04</td>
	<td class='hidden'>06</td>
	<td class='hidden'>08</td>
	<td class='hidden'>10</td>
	<td>12</td>
	<td></td>
	<td>14</td>
	<td class='hidden'>16</td>
	<td class='hidden'>18</td>
	<td class='hidden'>20</td>
	<td class='hidden'>22</td>
	<td>24</td>
</tr>
<?php } ?>

<tr><td>&nbsp;</td></tr>

<?php if(getPortStatus($interfaces, "Gi2/0/1") != "none") { ?>
<tr><td colspan='13'><?php echo $sAddr."<b>-2</b>"; ?></td></tr>
<tr class='portnumbers'>
	<td>01</td>
	<td class='hidden'>03</td>
	<td class='hidden'>05</td>
	<td class='hidden'>07</td>
	<td class='hidden'>09</td>
	<td>11</td>
	<td></td>
	<td>13</td>
	<td class='hidden'>15</td>
	<td class='hidden'>17</td>
	<td class='hidden'>19</td>
	<td class='hidden'>21</td>
	<td>23</td>
</tr>
<?php } ?>

<tr>
	<?php echoPortTD($interfaces, "Gi2/0/1", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/3", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/5", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/7", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/9", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/11", $sAddr); ?>
	<td>&nbsp;</td>
	<?php echoPortTD($interfaces, "Gi2/0/13", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/15", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/17", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/19", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/21", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/23", $sAddr); ?>
</tr>
<tr>
	<?php echoPortTD($interfaces, "Gi2/0/2", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/4", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/6", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/8", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/10", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/12", $sAddr); ?>
	<td>&nbsp;</td>
	<?php echoPortTD($interfaces, "Gi2/0/14", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/16", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/18", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/20", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/22", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi2/0/24", $sAddr); ?>
</tr>

<?php if(getPortStatus($interfaces, "Gi2/0/1") != "none") { ?>
<tr class='portnumbers'>
	<td>02</td>
	<td class='hidden'>04</td>
	<td class='hidden'>06</td>
	<td class='hidden'>08</td>
	<td class='hidden'>10</td>
	<td>12</td>
	<td></td>
	<td>14</td>
	<td class='hidden'>16</td>
	<td class='hidden'>18</td>
	<td class='hidden'>20</td>
	<td class='hidden'>22</td>
	<td>24</td>
</tr>
<?php } ?>

<tr><td>&nbsp;</td></tr>

<?php if(getPortStatus($interfaces, "Gi3/0/1") != "none") { ?>
<tr><td colspan='13'><?php echo $sAddr."<b>-3</b>"; ?></td></tr>
<tr class='portnumbers'>
	<td>01</td>
	<td class='hidden'>03</td>
	<td class='hidden'>05</td>
	<td class='hidden'>07</td>
	<td class='hidden'>09</td>
	<td>11</td>
	<td></td>
	<td>13</td>
	<td class='hidden'>15</td>
	<td class='hidden'>17</td>
	<td class='hidden'>19</td>
	<td class='hidden'>21</td>
	<td>23</td>
</tr>
<?php } ?>

<tr>
	<?php echoPortTD($interfaces, "Gi3/0/1", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/3", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/5", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/7", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/9", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/11", $sAddr); ?>
	<td>&nbsp;</td>
	<?php echoPortTD($interfaces, "Gi3/0/13", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/15", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/17", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/19", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/21", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/23", $sAddr); ?>
</tr>
<tr>
	<?php echoPortTD($interfaces, "Gi3/0/2", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/4", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/6", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/8", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/10", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/12", $sAddr); ?>
	<td>&nbsp;</td>
	<?php echoPortTD($interfaces, "Gi3/0/14", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/16", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/18", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/20", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/22", $sAddr); ?>
	<?php echoPortTD($interfaces, "Gi3/0/24", $sAddr); ?>
</tr>

<?php if(getPortStatus($interfaces, "Gi3/0/1") != "none") { ?>
<tr class='portnumbers'>
	<td>02</td>
	<td class='hidden'>04</td>
	<td class='hidden'>06</td>
	<td class='hidden'>08</td>
	<td class='hidden'>10</td>
	<td>12</td>
	<td></td>
	<td>14</td>
	<td class='hidden'>16</td>
	<td class='hidden'>18</td>
	<td class='hidden'>20</td>
	<td class='hidden'>22</td>
	<td>24</td>
</tr>
<?php } ?>

<?php } ?>
