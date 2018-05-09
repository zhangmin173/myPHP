<?php
use think\Route;

// test
Route::rule('test','game/test/index');

// 游戏
Route::rule('game/dojoin','game/index/index');

// 页面统计
Route::rule('page/view','game/page/index');
Route::rule('page/pv','game/page/getPv');

// 用户
Route::rule('user/register','game/user/register');
Route::rule('user/info','game/user/getInfo');

// 微信
Route::rule('api/get_wxsdk','api/weixin/getWxsdk');
Route::rule('weixin/wxoauthback','api/weixin/wxoauthback');
Route::rule('weixin/clear','api/weixin/clear');
