<br>

<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr><td width=1>
<form method=post name=write action=comment_ok.php>
<input type=hidden name=page value=<?=$page?>>
<input type=hidden name=id value=<?=$id?>>
<input type=hidden name=no value=<?=$no?>>
<input type=hidden name=select_arrange value=<?=$select_arrange?>>
<input type=hidden name=desc value=<?=$desc?>>
<input type=hidden name=page_num value=<?=$page_num?>>
<input type=hidden name=keyword value="<?=$keyword?>">
<input type=hidden name=category value="<?=$category?>">
<input type=hidden name=sn value="<?=$sn?>">
<input type=hidden name=ss value="<?=$ss?>">
<input type=hidden name=sc value="<?=$sc?>">
<input type=hidden name=mode value="<?=$mode?>">
</td>

<tr>
<td>

<table border=0 align=center cellpadding=0 cellspacing=0 width=95%>
<tr>
<td colspan=2><textarea name=memo style="width:100%;height:74" class=input></textarea></tr>
</tr>
<tr>
<td nowrap align=left><?=$hide_c_password_start?><font class=ver7>NAME</font> <input type=name name=name class=input2 style="width:30%;height:21;">��
<font class=ver7>PASS</font> <input type=password name=password class=input2 style="width:32%;height:21;"><?=$hide_c_password_end?>
</td>
<td align=right><input type=submit <?if($browser){?>class=button<?}?> value='COMMENT' accesskey="s"></td>

</tr>
</table>

</td>
</tr>
</form>

</table>

<br>

<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr><td height=2 class=line></td></tr>
</table>