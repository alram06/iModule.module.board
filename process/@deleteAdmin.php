<?php
/**
 * 이 파일은 iModule 게시판모듈의 일부입니다. (https://www.imodules.io)
 *
 * 게시판 관리자를 삭제한다.
 *
 * @file /modules/board/process/@deleteAdmin.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2019. 12. 11.
 */
if (defined('__IM__') == false) exit;

if ($this->isAdmin() !== true) {
	$results->success = false;
	$results->message = $this->getErrorText('FORBIDDEN');
	return;
}

$midxes = Request('midx') ? explode(',',Request('midx')) : array();
if (count($midxes) > 0) {
	$this->db()->delete($this->table->admin)->where('midx',$midxes,'IN')->execute();
}
$results->success = true;
?>