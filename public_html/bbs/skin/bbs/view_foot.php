<?
 /* 이전 다음글과 버튼 표시
 
  --- 이전/ 이후글 링크 ---
  <?=$a_prev?> : 이전글 링크
  <?=$a_next?> : 다음글 링크

  <?=$prev_face_image?> : 이전글 글쓴이의 얼굴 아이콘?;
  <?=$next_face_image?> : 다음글 글쓴이의 얼굴 아이콘?;


  <?=$hide_prev_start?> <?=$hide_prev_end?> : 이전글 나타나기/ 숨기기
  <?=$hide_next_start?> <?=$hide_next_end?> : 다음글 나타나기/ 숨기기

  기타 제목이나 글쓴이등은 위의 데이타에서 앞에 prev_ , next_ 를 덧 붙인것임;
  ex) 이전글 제목 : <?=$prev_subject?>

  <?=$a_write?> : 글쓰기 버튼
  <?=$a_list?> : 목록보기 버튼
  <?=$a_reply?> : 답글쓰기 버튼
  <?=$a_delete?> : 글삭제 버튼
  <?=$a_vote?> : 추천버튼
  <?=$a_modify?> : 글수정 버튼

 */
?>

<!-- 버튼 관련 출력 -->
<br>
<table border=0 cellspacing=0 cellpadding=3 width=<?=$width?>>
<tr>
 <td class=en>
    <?=$a_list?>list</a>
    <?=$a_write?>write</a>
 </td>
 <td align=right class=en>
    <?=$a_reply?>reply</a>
    <?=$a_modify?>modify</a>
    <?=$a_delete?>delete</a>
 </td>
</tr>
</table>

 </td>
</tr>
</table>
<br><br>

