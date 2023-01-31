<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if (strstr($ua, 'Trident') || strstr($ua, 'MSIE')) :
?>
<div class="byeIE">サポートされていないブラウザを使用しています。ブラウザの変更をご検討ください。</div>
<style>
.byeIE {
  position: fixed;
  top: 10px;
  left: 10%;
  z-index: 2147483647;
  width: 80%;
  padding: 5px 14px;
  font-family: sans-serif;
  font-size: 14px;
  line-height: 1.25;
  text-align: center;
  border: 1px solid #f0c36d;
  background: rgb(249, 237, 190);
  box-shadow: 0 2px 4px rgba(0, 0, 0, .2);
}
</style>
<?php endif; ?>
