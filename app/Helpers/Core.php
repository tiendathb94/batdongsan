<?php

use App\Entities\News;
use App\Entities\Project;
use App\Entities\Category;
use App\Permissions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;
use App\Entities\Statistic;

function checkPermission($permName)
{
    static $rolesMappedNames, $permissions;

    if (!$rolesMappedNames) {
        $role = Auth::user()->find(Auth::user()->id)->roles()->select(['roles.name', 'roles.id'])->get();
        $rolesMappedNames = [];
        foreach ($role->toArray() as $r) {
            $rolesMappedNames[$r['name']] = $r['id'];
        }
    }

    if (isset($rolesMappedNames['super_admin'])) {
        return true;
    }

    if (!$permissions) {
        $permissions = Permissions::whereIn('role_id', array_values($rolesMappedNames))->pluck('route')->toArray();
    }

    if (in_array($permName, $permissions)) {
        return true;
    }

    return false;
}
function checkRule($user)
{
    $roles = $user->roles->pluck("name");
    $checkPermission = in_array("super_admin",$roles->toArray());
    return $checkPermission;
}
function getDifferentTime($time)
{
    $text = '';
    if($time) {
        $now = Carbon::now();
        $minuteDifferent = $now->diffInMinutes($time);
        $hourDifferrent = $minuteDifferent / 60;
        $dayDifferent = $hourDifferrent / 24;
        if ($minuteDifferent < 60) {
            $text = $minuteDifferent . ' phút trước';
        } else if ($hourDifferrent < 24) {
            $text = $hourDifferrent . ' giờ trước';
        } else if ($dayDifferent < 7) {
            $text = $dayDifferent . ' ngày trước';
        } else {
            $text = $time->format('d/m/y H:s');
        }
    }
    return $text;
}

function getStatisticsNewsManyPeopleRead()
{
    $time = Carbon::now()->subDay(7)->format('Ymd');
    $statistics = Statistic::with('news.category')
        ->select('statisticable_id', DB::raw('sum(value) as views'))
        ->where('name', Statistic::COUNT_VIEWS)
        ->where('day_id', '>', $time)
        ->where('statisticable_type', News::class)
        ->groupBy('statisticable_id')
        ->take(config('app.news.many_read'))
        ->orderByDesc('views')
        ->get();
    return $statistics;
}

function getCategoryManyPeopleCare()
{
    $categories = Category::with('statistics')
        ->where('destination_entity', News::class)
        ->get()
        ->sortByDesc('total_views_last_week')
        ->take(config('app.category.many_care'));
    return $categories;
}

function convertDateFormat($date, $format = 'd/m/Y') {
    if ($date) {
        return Carbon::createFromFormat('Y-m-d', $date)->format($format);
    }
    return '';
}


function time_ago($timestamp)  
{  
      $time_ago = strtotime($timestamp);  
      $current_time = time();  
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
      if($seconds <= 60)  
      {  
     return "Ngay bây giờ";  
   }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
       return "1 phút trước";  
     }  
     else 
           {  
       return "$minutes phút trước";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
       return "1 giờ trước";  
     }  
           else 
           {  
       return "$hours giờ trước";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
       return "hôm qua";  
     }  
           else 
           {  
       return "$days ngày trước";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       return "1 tuần trước";  
     }  
           else 
           {  
       return "$weeks tuần trước";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       return "1 tháng trước";  
     }  
           else 
           {  
       return "$months tháng trước";  
     }  
   }  
      else 
      {  
     if($years==1)  
           {  
       return "1 năm trước";  
     }  
           else 
           {  
       return "$years năm trước";  
     }  
   }  
 }  


