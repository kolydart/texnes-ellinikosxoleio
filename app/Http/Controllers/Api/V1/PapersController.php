<?php

namespace App\Http\Controllers\Api\V1;

use App\Paper;
use App\Http\Controllers\Controller;
use App\Http\Resources\Paper as PaperResource;
use App\Http\Requests\Admin\StorePapersRequest;
use App\Http\Requests\Admin\UpdatePapersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Http\Controllers\Traits\FileUploadTrait;


class PapersController extends Controller
{
    public function index()
    {
        if (! Gate::allows('paper_access')) {
            return abort(401);
        }

        return new PaperResource(Paper::with(['art', 'assign'])->get());
    }

    public function show($id)
    {
        if (! Gate::allows('paper_view')) {
            return abort(401);
        }

        $paper = Paper::with(['art', 'assign'])->findOrFail($id);

        return new PaperResource($paper);
    }

    public function store(StorePapersRequest $request)
    {
        if (! Gate::allows('paper_create')) {
            return abort(401);
        }

        $paper = Paper::create($request->all());
        $paper->art()->sync($request->input('art', []));
        $paper->assign()->sync($request->input('assign', []));
        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $key => $file) {
                $paper->addMedia($file)->toMediaCollection('documents');
            }
        }

        return (new PaperResource($paper))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdatePapersRequest $request, $id)
    {
        if (! Gate::allows('paper_edit')) {
            return abort(401);
        }

        $paper = Paper::findOrFail($id);
        $paper->update($request->all());
        $paper->art()->sync($request->input('art', []));
        $paper->assign()->sync($request->input('assign', []));
        $filesInfo = explode(',', $request->input('uploaded_documents'));
        foreach ($paper->getMedia('documents') as $file) {
            if (! in_array($file->id, $filesInfo)) {
                $file->delete();
            }
        }
        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $key => $file) {
                $paper->addMedia($file)->toMediaCollection('documents');
            }
        }

        return (new PaperResource($paper))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        if (! Gate::allows('paper_delete')) {
            return abort(401);
        }

        $paper = Paper::findOrFail($id);
        $paper->delete();

        return response(null, 204);
    }
}
