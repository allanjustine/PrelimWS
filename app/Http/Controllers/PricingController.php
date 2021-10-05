<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePricingRequest;
use App\Http\Requests\UpdatePricingRequest;
use App\Repositories\PricingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PricingController extends AppBaseController
{
    /** @var  PricingRepository */
    private $pricingRepository;

    public function __construct(PricingRepository $pricingRepo)
    {
        $this->pricingRepository = $pricingRepo;
    }

    /**
     * Display a listing of the Pricing.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pricings = $this->pricingRepository->all();

        return view('pricings.index')
            ->with('pricings', $pricings);
    }

    /**
     * Show the form for creating a new Pricing.
     *
     * @return Response
     */
    public function create()
    {
        return view('pricings.create');
    }

    /**
     * Store a newly created Pricing in storage.
     *
     * @param CreatePricingRequest $request
     *
     * @return Response
     */
    public function store(CreatePricingRequest $request)
    {
        $input = $request->all();

        $pricing = $this->pricingRepository->create($input);

        Flash::success('Pricing saved successfully.');

        return redirect(route('pricings.index'));
    }

    /**
     * Display the specified Pricing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pricing = $this->pricingRepository->find($id);

        if (empty($pricing)) {
            Flash::error('Pricing not found');

            return redirect(route('pricings.index'));
        }

        return view('pricings.show')->with('pricing', $pricing);
    }

    /**
     * Show the form for editing the specified Pricing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pricing = $this->pricingRepository->find($id);

        if (empty($pricing)) {
            Flash::error('Pricing not found');

            return redirect(route('pricings.index'));
        }

        return view('pricings.edit')->with('pricing', $pricing);
    }

    /**
     * Update the specified Pricing in storage.
     *
     * @param int $id
     * @param UpdatePricingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePricingRequest $request)
    {
        $pricing = $this->pricingRepository->find($id);

        if (empty($pricing)) {
            Flash::error('Pricing not found');

            return redirect(route('pricings.index'));
        }

        $pricing = $this->pricingRepository->update($request->all(), $id);

        Flash::success('Pricing updated successfully.');

        return redirect(route('pricings.index'));
    }

    /**
     * Remove the specified Pricing from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pricing = $this->pricingRepository->find($id);

        if (empty($pricing)) {
            Flash::error('Pricing not found');

            return redirect(route('pricings.index'));
        }

        $this->pricingRepository->delete($id);

        Flash::success('Pricing deleted successfully.');

        return redirect(route('pricings.index'));
    }
}
