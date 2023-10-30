<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePartRequest;
use App\Http\Requests\UpdatePartRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PartRepository;
use Illuminate\Http\Request;
use Flash;

class PartController extends AppBaseController
{
    /** @var PartRepository $partRepository*/
    private $partRepository;

    public function __construct(PartRepository $partRepo)
    {
        $this->partRepository = $partRepo;
    }

    /**
     * Display a listing of the Part.
     */
    public function index(Request $request)
    {
        $parts = $this->partRepository->paginate(10);

        return view('parts.index')
            ->with('parts', $parts);
    }

    /**
     * Show the form for creating a new Part.
     */
    public function create()
    {
        return view('parts.create');
    }

    /**
     * Store a newly created Part in storage.
     */
    public function store(CreatePartRequest $request)
    {
        $input = $request->all();

        $part = $this->partRepository->create($input);

        Flash::success('Part saved successfully.');

        return redirect(route('parts.index'));
    }

    /**
     * Display the specified Part.
     */
    public function show($id)
    {
        $part = $this->partRepository->find($id);

        if (empty($part)) {
            Flash::error('Part not found');

            return redirect(route('parts.index'));
        }

        return view('parts.show')->with('part', $part);
    }

    /**
     * Show the form for editing the specified Part.
     */
    public function edit($id)
    {
        $part = $this->partRepository->find($id);

        if (empty($part)) {
            Flash::error('Part not found');

            return redirect(route('parts.index'));
        }

        return view('parts.edit')->with('part', $part);
    }

    /**
     * Update the specified Part in storage.
     */
    public function update($id, UpdatePartRequest $request)
    {
        $part = $this->partRepository->find($id);

        if (empty($part)) {
            Flash::error('Part not found');

            return redirect(route('parts.index'));
        }

        $part = $this->partRepository->update($request->all(), $id);

        Flash::success('Part updated successfully.');

        return redirect(route('parts.index'));
    }

    /**
     * Remove the specified Part from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $part = $this->partRepository->find($id);

        if (empty($part)) {
            Flash::error('Part not found');

            return redirect(route('parts.index'));
        }

        $this->partRepository->delete($id);

        Flash::success('Part deleted successfully.');

        return redirect(route('parts.index'));
    }
}
