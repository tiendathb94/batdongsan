<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\News;
use App\Entities\Category;
use App\Entities\Post;
use App\Entities\Project;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Entities\Role;
use Illuminate\Support\Facades\DB;
use App\Jobs\UpdateViewsJob;
use Jenssegers\Agent\Agent;


class HomeController extends Controller
{
    public function show()
    {
        $agent = new Agent();

        $tuvanluat          = $this->tu_van_luat_home();
        $hotnews            = $this->hotnews();
        $projectfeatures    = $this->project_feature();
        $newsTabs           = $this->news_tabs_home();
        $listReals          = $this->list_realHomes();
        $listBuy            = $this->list_buy();
        $listSell           = $this->list_sell();
        $config             = DB::table("config")->first();
        if ($agent->isDesktop()) {
            return view('default.layouts.home', compact('tuvanluat','hotnews','projectfeatures','newsTabs','listReals','listBuy','listSell','config'));
        }else{
            return view('default.mobile.home', compact('tuvanluat','hotnews','projectfeatures','newsTabs','listReals','listSell','listBuy','config'));
        }
    }

    public function list_sell(){
        $categorySellHouse = Category::whereSlug(Post::SELL_HOUSE)->first();
        $categoryLeaseHouse = Category::whereSlug(Post::LEASE_HOUSE)->first();
        $posts = Post::whereIn('form', [$categorySellHouse->id, $categoryLeaseHouse->id])->whereStatus(1)->whereApproval(2);
        return $posts->orderByDesc('created_at')->take(4)->get();
    }
    public function list_buy(){
        $categoryBuyHouse = Category::whereSlug(Post::HOUSE_BUY)->first();
        $categoryRentHouse = Category::whereSlug(Post::HOUSE_RENT)->first();
        $posts = Post::whereIn('form', [$categoryBuyHouse->id, $categoryRentHouse->id])->whereStatus(1)->whereApproval(2);
        return $posts->orderByDesc('created_at')->take(4)->get();
    }
    public function tu_van_luat_home(){
        $news = [];
        $category = Category::where('destination_entity', News::class)
        ->whereSlug('tu-van-luat')
        ->first();
        if($category) {
            $news = $category->news()
            ->with('project.imageLibraries', 'category')
            ->where('status', News::APPROVED)
            ->orderByDesc('created_at')
            ->take(config('app.newsHome.review_project'))->get();
        }
        return $news;
    }

    public function hotnews(){
        $news = [];
        $category = Category::where('destination_entity', News::class)
        ->whereSlug('tai-chinh-chung-khoan-bds')
        ->first();
        if($category) {
            $news = $category->news()
            ->with('project.imageLibraries', 'category')
            ->where('status', News::APPROVED)
            ->orderByDesc('created_at')
            ->take(config('app.newsHome.review_project'))->get();
        }
        return $news;
    }

    public function project_feature(){
        $news = [];
        $category = Category::where('destination_entity', News::class)
        ->whereSlug('tai-chinh-chung-khoan-bds')
        ->first();
        if($category) {
            $news = $category->news()
            ->with('project.imageLibraries', 'category')
            ->where('status', News::APPROVED)
            ->orderByDesc('created_at')
            ->take(config('app.newsHome.review_project'))->get();
        }
        return $news;
    }

    public function news_tabs_home(){
        $news = News::with('category')
        ->orwhere('feature_news', 1)
        ->orwhere('advice', 1)
        ->orwhere('feng_shui', 1)
        ->whereStatus(News::APPROVED)
        ->orderByDesc('created_at')
        ->take(config('app.news.take'))
        ->get();
        return $news;
    }
    public function list_realHomes(){
        $projects = Project::query()
        ->with(['imageLibraries', 'category'])
        ->where('status', '=', Project::StatusApproved)
        ->limit(12)
        ->orderByDesc('created_at')
        ->get();
        return $projects;
    }
}
