<?php
return 'filterpunct';
function filterpunct(&$content) {
	$regex = "/\~|\!|\@|\#|\\$|\%|\^|\&|\*|\(|\)|_|\\\|\\+|\||\-|\=|\||\{|\}|\[|\]|\;|\'|\:|\"|\<|\>|\?|\/|\.|\,|\！|\＃|\￥|\…|\（|\）|\—|\、|\【|\】|\｛|\｝|\；|\：|\‘|\’|\“|\”|\《|\》|\＼|\，|\。|\、|\？/si";
	$content = preg_replace($regex, '', $content);
};