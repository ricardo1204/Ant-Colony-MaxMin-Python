<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepqrRequest;
use App\Http\Requests\UpdatepqrRequest;
use App\Repositories\pqrRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class pqrController extends AppBaseController
{
    /** @var  pqrRepository */
    private $pqrRepository;

    public function __construct(pqrRepository $pqrRepo)
    {
        $this->pqrRepository = $pqrRepo;
    }

    /**
     * Display a listing of the pqr.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pqrRepository->pushCriteria(new RequestCriteria($request));
        $pqrs = $this->pqrRepository->all();

        return view('pqrs.index')
            ->with('pqrs', $pqrs);
    }

    /**
     * Show the form for creating a new pqr.
     *
     * @return Response
     */
    public function create()
    {
        return view('pqrs.create');
    }

    /**
     * Store a newly created pqr in storage.
     *
     * @param CreatepqrRequest $request
     *
     * @return Response
     */
    public function store(CreatepqrRequest $request)
    {
        $input = $request->all();

        $pqr = $this->pqrRepository->create($input);

        Flash::success('Pqr saved successfully.');

        return redirect(route('pqrs.index'));
    }

    /**
     * Display the specified pqr.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pqr = $this->pqrRepository->findWithoutFail($id);

        if (empty($pqr)) {
            Flash::error('Pqr not found');

            return redirect(route('pqrs.index'));
        }

        return view('pqrs.show')->with('pqr', $pqr);
    }

    /**
     * Show the form for editing the specified pqr.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pqr = $this->pqrRepository->findWithoutFail($id);

        if (empty($pqr)) {
            Flash::error('Pqr not found');

            return redirect(route('pqrs.index'));
        }

        return view('pqrs.edit')->with('pqr', $pqr);
    }

    /**
     * Update the specified pqr in storage.
     *
     * @param  int              $id
     * @param UpdatepqrRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepqrRequest $request)
    {
        $pqr = $this->pqrRepository->findWithoutFail($id);

        if (empty($pqr)) {
            Flash::error('Pqr not found');

            return redirect(route('pqrs.index'));
        }

        $pqr = $this->pqrRepository->update($request->all(), $id);

        Flash::success('Pqr updated successfully.');

        return redirect(route('pqrs.index'));
    }

    /**
     * Remove the specified pqr from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pqr = $this->pqrRepository->findWithoutFail($id);

        if (empty($pqr)) {
            Flash::error('Pqr not found');

            return redirect(route('pqrs.index'));
        }

        $this->pqrRepository->delete($id);

        Flash::success('Pqr deleted successfully.');

        return redirect(route('pqrs.index'));
    }
}
