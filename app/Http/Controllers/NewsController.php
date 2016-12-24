<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
	/**
	 * 首页推荐
	 */
    public function index()
    {
    	return News::where('is_recommend', 1)->get();
    }

    /**
     * 新闻列表
     */
    public function getList()
    {
    	return News::get();
    }

    /**
     * 新闻详情
     */
    public function show($id)
    {
    	$row = News::findOrFail($id);
    	return $row;
    }
}
