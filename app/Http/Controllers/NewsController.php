<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    /**
     * 推荐列表
     */
    public function recommend()
    {
        $list = News::where('is_recommend', 1)->get();
        foreach ($list as $key => $value) {
            $list[$key]->created = $list[$key]->created_at->diffForHumans();
        }
        return $list;
    }
    

	/**
	 * 新闻列表
	 */
    public function index()
    {
    	$list = News::get();
        foreach ($list as $key => $value) {
            $list[$key]->created = $list[$key]->created_at->diffForHumans();
        }
        return $list;
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
