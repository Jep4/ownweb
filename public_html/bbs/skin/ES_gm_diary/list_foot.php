<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr>
<td align=left style=padding-top:4;><?=$a_list?>LIST</a>
</td>
<td align=right style=padding-top:4; valign=top><?=$a_1_prev_page?><</a> <?=$print_page?> <?=$a_1_next_page?>></a></font>
</tr>
</form>
</table>

<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr><td height=5>
<form method=post name=search action=<?=$PHP_SELF?>>
<input type=hidden name=page value=<?=$page?>>
<input type=hidden name=id value=<?=$id?>>
<input type=hidden name=select_arrange value=<?=$select_arrange?>>
<input type=hidden name=desc value=<?=$desc?>>
<input type=hidden name=page_num value=<?=$page_num?>>
<input type=hidden name=selected>
<input type=hidden name=exec>
<input type=hidden name=sn value="<?=$sn?>">
<input type=hidden name=ss value="<?=$ss?>">
<input type=hidden name=sc value="<?=$sc?>">
<input type=hidden name=category value="<?=$category?>">
</td></tr>

<tr>
<td align=right>
</td>
</tr>
</form>
</table>