<?php
/**
 * Get Instagram images by API
 */

$access_token = 'IGQVJVLVUyTjBxOE5PVFVfa1BnVlFuUWlPVm9qMFdCTWNTRWk3cjB0UFZAxRVoweXB1WDZAHM0ZAhLXd0OXNXNFoyVkNBX0N2b1pJLW4xR0pPRWFieG1jWFp6VEU2NWEyWTVvaEJRZAURyVThydXNFMTdDXwZDZD';

// 長期Instagramユーザーアクセストークンを更新する
$url = 'https://graph.instagram.com/refresh_access_token?grant_type=ig_refresh_token&access_token='.$access_token;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_exec($curl);
curl_close($curl);

// Instagram API でデータを取得する
$fields = 'media_type,media_url,thumbnail_url,permalink';
$url = 'https://graph.instagram.com/me/media?fields='.$fields.'&access_token='.$access_token;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

echo $response;
exit;
