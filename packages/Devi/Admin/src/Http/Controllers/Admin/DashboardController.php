<?php

namespace Devi\Admin\Http\Controllers\Admin;

use Carbon\Carbon;
use Devi\Admin\Http\Controllers\Controller;
use Devi\Admin\Helpers\Dashboard as DashboardHelper;
use Devi\Post\Repositories\PostRepository;
use Maatwebsite\Excel\Facades\Excel;

use App\Imports\CategoryImport;

class DashboardController extends Controller
{
    /**
     * Dashboard object
     *
     * @var \Devi\Admin\Helpers\Dashboard
     */
    protected $dashboardHelper;

    protected $postRepository;

    /**
     * Create a new controller instance.
     *
     * @param \Devi\Admin\Helpers\DashboardHelper  $dashboardHelper
     * @return void
     */
    public function __construct(
        DashboardHelper $dashboardHelper,
        PostRepository $postRepository
    ) {
        $this->dashboardHelper = $dashboardHelper;
        $this->postRepository = $postRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $cards =  $this->postRepository->get();

        if ($dateRange = request('date-range')) {
            $dateRange = explode(",", $dateRange);

            $endDate = $dateRange[1];
            $startDate = $dateRange[0];
        } else {
            $endDate = Carbon::now()->format('Y-m-d');

            $startDate = Carbon::now()->subMonth()->addDays(1)->format('Y-m-d');
        }

        return view('admin::dashboard.index', compact('cards', 'startDate', 'endDate'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function template()
    {
        return view('admin::dashboard.template');
    }

    /**
     * Returns json data for dashboard card.
     */
    public function getCardData()
    {
        $cardData = $this->dashboardHelper->getFormattedCardData(request()->all());

        return response()->json($cardData);
    }

    /**
     * Returns json data for available dashboard cards.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCards()
    {

        return response()->json([]);
    }

    /**
     * Returns updated json data for available dashboard cards.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateCards()
    {
        $requestData = request()->all();

        $cards = $this->dashboardHelper->getCards();

        foreach ($requestData['cards'] as $requestedCardData) {
            foreach ($cards as $cardIndex => $card) {
                if (
                    isset($card['card_id'])
                    && isset($requestedCardData['card_id'])
                    && $card['card_id'] == $requestedCardData['card_id']
                ) {
                    $cards[$cardIndex]['selected'] = $requestedCardData['selected'];
                }
            }
        }

        return response()->json($cards);
    }

    public function categoryImport(){
        try {
            Excel::import(new CategoryImport,request()->file('file'));

            session()->flash('success', 'Category Import successfully.');
        return redirect()->route('admin.dashboard.index');
        } catch (\Throwable $th) {
            dd($th);
            return $th;
        }
    }
}
