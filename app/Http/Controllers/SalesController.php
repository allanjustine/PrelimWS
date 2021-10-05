<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSalesRequest;
use App\Http\Requests\UpdateSalesRequest;
use App\Repositories\SalesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SalesController extends AppBaseController
{
    /** @var  SalesRepository */
    private $salesRepository;

    public function __construct(SalesRepository $salesRepo)
    {
        $this->salesRepository = $salesRepo;
    }

    /**
     * Display a listing of the Sales.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sales = $this->salesRepository->all();

        return view('sales.index')
            ->with('sales', $sales);
    }

    /**
     * Show the form for creating a new Sales.
     *
     * @return Response
     */
    public function create()
    {
        return view('sales.create');
    }

    /**
     * Store a newly created Sales in storage.
     *
     * @param CreateSalesRequest $request
     *
     * @return Response
     */
    public function store(CreateSalesRequest $request)
    {
        $input = $request->all();

        $sales = $this->salesRepository->create($input);

        Flash::success('Sales saved successfully.');

        return redirect(route('sales.index'));
    }

    /**
     * Display the specified Sales.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sales = $this->salesRepository->find($id);

        if (empty($sales)) {
            Flash::error('Sales not found');

            return redirect(route('sales.index'));
        }

        return view('sales.show')->with('sales', $sales);
    }

    /**
     * Show the form for editing the specified Sales.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sales = $this->salesRepository->find($id);

        if (empty($sales)) {
            Flash::error('Sales not found');

            return redirect(route('sales.index'));
        }

        return view('sales.edit')->with('sales', $sales);
    }

    /**
     * Update the specified Sales in storage.
     *
     * @param int $id
     * @param UpdateSalesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSalesRequest $request)
    {
        $sales = $this->salesRepository->find($id);

        if (empty($sales)) {
            Flash::error('Sales not found');

            return redirect(route('sales.index'));
        }

        $sales = $this->salesRepository->update($request->all(), $id);

        Flash::success('Sales updated successfully.');

        return redirect(route('sales.index'));
    }

    /**
     * Remove the specified Sales from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sales = $this->salesRepository->find($id);

        if (empty($sales)) {
            Flash::error('Sales not found');

            return redirect(route('sales.index'));
        }

        $this->salesRepository->delete($id);

        Flash::success('Sales deleted successfully.');

        return redirect(route('sales.index'));
    }
}
