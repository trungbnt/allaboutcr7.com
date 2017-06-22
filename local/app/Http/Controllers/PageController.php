<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

use App\Profile;
use App\User;
use App\Statistic;
use App\TypeStatistic;
use App\TypeLeague;
use App\TotalGoal;
use App\Achivement;
use App\TypeAchivement;
use App\Goal;

class PageController extends Controller
{
	function __construct(){
		$profile = Profile::all();
        $totalgoal = TotalGoal::all();
        $typeachivement = TypeAchivement::all();
        $achivement = Achivement::orderBy('id', 'DESC')->get();
        $match = Goal::orderBy('id', 'DESC')->get();

        view()->share('profile', $profile);
        view()->share('totalgoal', $totalgoal);
        view()->share('typeachivement', $typeachivement);
        view()->share('achivement', $achivement);
        view()->share('match', $match);
    }

    function trangchu(){
        return view('pages.trangchu');    
    }

    function lienhe(){
        return view('pages.lienhe');
    }

    function twitter(){
        $game = Statistic::select(DB::raw("SUM(game) as count"))
        ->orderBy("id")
        ->groupBy(DB::raw("nameTeam"))
        ->where('idTypeStatistic',1)        
        ->whereNotIn('id', [76])
        ->get()->toArray();
        $game = array_column($game, 'count');

        $goal = Statistic::select(DB::raw("SUM(goal) as count"))
        ->orderBy("id")
        ->groupBy(DB::raw("nameTeam"))
        ->where('idTypeStatistic',1)
        ->whereNotIn('id', [76])
        ->get()->toArray();
        $goal = array_column($goal, 'count');

        $gamenational = Statistic::select(DB::raw("SUM(game) as count"))
        ->orderBy("id")
        ->where('idTypeStatistic',2)
        ->groupBy(DB::raw("season"))
        ->get()->toArray();
        $gamenational = array_column($gamenational, 'count');

        $goalnational = Statistic::select(DB::raw("SUM(goal) as count"))
        ->orderBy("id")
        ->where('idTypeStatistic',2)
        ->groupBy(DB::raw("season"))
        ->get()->toArray();
        $goalnational = array_column($goalnational, 'count');

        $gametotal = Statistic::select(DB::raw("SUM(game) as count"))
        ->orderBy("id")
        ->groupBy(DB::raw("season"))
        ->whereNotIn('id', [75, 59])
        ->get()->toArray();
        $gametotal = array_column($gametotal, 'count');

        $goaltotal = Statistic::select(DB::raw("SUM(goal) as count"))
        ->orderBy("id")
        ->groupBy(DB::raw("season"))
        ->whereNotIn('id', [75, 59])
        ->get()->toArray();
        $goaltotal = array_column($goaltotal, 'count');

        $goalbody = TotalGoal::select(DB::table('tblTotalGoal'))
        ->select('leftFoot', 'rightFoot', 'header', 'other')
        ->get();

        $goalarea = TotalGoal::select(DB::table('tblTotalGoal'))
        ->select('inside', 'outside')
        ->get();

        $goaltype = TotalGoal::select(DB::table('tblTotalGoal'))
        ->select('freekick', 'pen', 'otherType')
        ->get();

        return view('pages.twitter')
        ->with('game',json_encode($game,JSON_NUMERIC_CHECK))
        ->with('goal',json_encode($goal,JSON_NUMERIC_CHECK))
        ->with('gamenational',json_encode($gamenational,JSON_NUMERIC_CHECK))
        ->with('goalnational',json_encode($goalnational,JSON_NUMERIC_CHECK))
        ->with('gametotal',json_encode($gametotal,JSON_NUMERIC_CHECK))
        ->with('goaltotal',json_encode($goaltotal,JSON_NUMERIC_CHECK))
        ->with('goalbody',json_encode($goalbody,JSON_NUMERIC_CHECK))
        ->with('goalarea',json_encode($goalarea,JSON_NUMERIC_CHECK))
        ->with('goaltype',json_encode($goaltype,JSON_NUMERIC_CHECK));
    }

    function carrers(){
        $game = Statistic::select(DB::raw("SUM(game) as count"))
        ->orderBy("id")
        ->groupBy(DB::raw("nameTeam"))
        ->where('idTypeStatistic',1)        
        ->whereNotIn('id', [76])
        ->get()->toArray();
        $game = array_column($game, 'count');

        $goal = Statistic::select(DB::raw("SUM(goal) as count"))
        ->orderBy("id")
        ->groupBy(DB::raw("nameTeam"))
        ->where('idTypeStatistic',1)
        ->whereNotIn('id', [76])
        ->get()->toArray();
        $goal = array_column($goal, 'count');

        $gamenational = Statistic::select(DB::raw("SUM(game) as count"))
        ->orderBy("id")
        ->where('idTypeStatistic',2)
        ->groupBy(DB::raw("season"))
        ->get()->toArray();
        $gamenational = array_column($gamenational, 'count');

        $goalnational = Statistic::select(DB::raw("SUM(goal) as count"))
        ->orderBy("id")
        ->where('idTypeStatistic',2)
        ->groupBy(DB::raw("season"))
        ->get()->toArray();
        $goalnational = array_column($goalnational, 'count');

        $gametotal = Statistic::select(DB::raw("SUM(game) as count"))
        ->orderBy("id")
        ->groupBy(DB::raw("season"))
        ->whereNotIn('id', [75, 59])
        ->get()->toArray();
        $gametotal = array_column($gametotal, 'count');

        $goaltotal = Statistic::select(DB::raw("SUM(goal) as count"))
        ->orderBy("id")
        ->groupBy(DB::raw("season"))
        ->whereNotIn('id', [75, 59])
        ->get()->toArray();
        $goaltotal = array_column($goaltotal, 'count');

        $goalbody = TotalGoal::select(DB::table('tblTotalGoal'))
        ->select('leftFoot', 'rightFoot', 'header', 'other')
        ->get();

        $goalarea = TotalGoal::select(DB::table('tblTotalGoal'))
        ->select('inside', 'outside')
        ->get();

        $goaltype = TotalGoal::select(DB::table('tblTotalGoal'))
        ->select('freekick', 'pen', 'otherType')
        ->get();

        return view('pages.carrers')
        ->with('game',json_encode($game,JSON_NUMERIC_CHECK))
        ->with('goal',json_encode($goal,JSON_NUMERIC_CHECK))
        ->with('gamenational',json_encode($gamenational,JSON_NUMERIC_CHECK))
        ->with('goalnational',json_encode($goalnational,JSON_NUMERIC_CHECK))
        ->with('gametotal',json_encode($gametotal,JSON_NUMERIC_CHECK))
        ->with('goaltotal',json_encode($goaltotal,JSON_NUMERIC_CHECK))
        ->with('goalbody',json_encode($goalbody,JSON_NUMERIC_CHECK))
        ->with('goalarea',json_encode($goalarea,JSON_NUMERIC_CHECK))
        ->with('goaltype',json_encode($goaltype,JSON_NUMERIC_CHECK));
    }

    function profile(){
        return view('pages.trangchu');    
    }

    function statistic(){
        $game = Statistic::select(DB::raw("SUM(game) as count"))
        ->orderBy("id")
        ->groupBy(DB::raw("nameTeam"))
        ->where('idTypeStatistic',1)        
        ->whereNotIn('id', [76])
        ->get()->toArray();
        $game = array_column($game, 'count');

        $goal = Statistic::select(DB::raw("SUM(goal) as count"))
        ->orderBy("id")
        ->groupBy(DB::raw("nameTeam"))
        ->where('idTypeStatistic',1)
        ->whereNotIn('id', [76])
        ->get()->toArray();
        $goal = array_column($goal, 'count');

        $gamenational = Statistic::select(DB::raw("SUM(game) as count"))
        ->orderBy("id")
        ->where('idTypeStatistic',2)
        ->groupBy(DB::raw("season"))
        ->get()->toArray();
        $gamenational = array_column($gamenational, 'count');

        $goalnational = Statistic::select(DB::raw("SUM(goal) as count"))
        ->orderBy("id")
        ->where('idTypeStatistic',2)
        ->groupBy(DB::raw("season"))
        ->get()->toArray();
        $goalnational = array_column($goalnational, 'count');

        $gametotal = Statistic::select(DB::raw("SUM(game) as count"))
        ->orderBy("id")
        ->groupBy(DB::raw("season"))
        ->whereNotIn('id', [75, 59])
        ->get()->toArray();
        $gametotal = array_column($gametotal, 'count');

        $goaltotal = Statistic::select(DB::raw("SUM(goal) as count"))
        ->orderBy("id")
        ->groupBy(DB::raw("season"))
        ->whereNotIn('id', [75, 59])
        ->get()->toArray();
        $goaltotal = array_column($goaltotal, 'count');

        /*$goalseason = Statistic::select(DB::raw("SUM(goal) as count"))
        ->orderBy("id")
        ->groupBy(DB::raw("season"))
        ->where('idTypeStatistic',1)
        ->get()->toArray();
        $goalseason = array_column($goalseason, 'count');*/

        $goalbody = TotalGoal::select(DB::table('tblTotalGoal'))
        ->select('leftFoot', 'rightFoot', 'header', 'other')
        ->get();

        $goalarea = TotalGoal::select(DB::table('tblTotalGoal'))
        ->select('inside', 'outside')
        ->get();

        $goaltype = TotalGoal::select(DB::table('tblTotalGoal'))
        ->select('freekick', 'pen', 'otherType')
        ->get();

        return view('pages.trangchu')
        ->with('game',json_encode($game,JSON_NUMERIC_CHECK))
        ->with('goal',json_encode($goal,JSON_NUMERIC_CHECK))
        ->with('gamenational',json_encode($gamenational,JSON_NUMERIC_CHECK))
        ->with('goalnational',json_encode($goalnational,JSON_NUMERIC_CHECK))
        ->with('gametotal',json_encode($gametotal,JSON_NUMERIC_CHECK))
        ->with('goaltotal',json_encode($goaltotal,JSON_NUMERIC_CHECK))
        /*->with('goalseason',json_encode($goalseason,JSON_NUMERIC_CHECK))*/
        ->with('goalbody',json_encode($goalbody,JSON_NUMERIC_CHECK))
        ->with('goalarea',json_encode($goalarea,JSON_NUMERIC_CHECK))
        ->with('goaltype',json_encode($goaltype,JSON_NUMERIC_CHECK));
    }

}

