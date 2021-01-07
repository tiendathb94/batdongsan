<?php

namespace App\Http\Controllers\Web;

use App\Entities\Category;
use App\Entities\Investor;
use App\Entities\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function create()
    {
        return view($this->_config['view']);
    }

    public function update($investorId)
    {
        $user = auth()->user();

        $investor = Investor::query()
            ->with('address')
            ->where('user_id', '=', $user->id)
            ->where('id', '=', $investorId)
            ->first();

        if (!$investor) {
            return abort(404);
        }

        return view($this->_config['view'], ['investor' => $investor]);
    }

    public function managePostedInvestor(Request $request)
    {
        $user = auth()->user();

        // Create query builder
        $qb = $investors = Investor::query()->where('user_id', '=', $user->id);

        // Search by name
        $keyword = $request->get('keyword');
        if (!empty($keyword)) {
            $qb->where('name', 'like', "%$keyword%");
        }

        return view($this->_config['view'], ['investors' => $qb->paginate(15), 'keyword' => $keyword]);
    }
}
