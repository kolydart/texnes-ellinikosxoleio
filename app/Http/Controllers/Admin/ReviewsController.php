<?php

namespace App\Http\Controllers\Admin;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreReviewsRequest;
use App\Http\Requests\Admin\UpdateReviewsRequest;

class ReviewsController extends Controller
{
    /**
     * Display a listing of Review.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('review_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('review_delete')) {
                return abort(401);
            }
            $reviews = Review::onlyTrashed()->get();
        } else {
            $reviews = Review::all()->reverse();
        }

        return view('admin.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating new Review.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('review_create')) {
            return abort(401);
        }
        
        $users = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $papers = \App\Paper::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.reviews.create', compact('users', 'papers'));
    }

    /**
     * Store a newly created Review in storage.
     *
     * @param  \App\Http\Requests\StoreReviewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviewsRequest $request)
    {
        if (! Gate::allows('review_create')) {
            return abort(401);
        }
        $review = Review::create($request->all());



        return redirect()->route('admin.reviews.index');
    }


    /**
     * Show the form for editing Review.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('review_edit')) {
            return abort(401);
        }
        
        $users = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $papers = \App\Paper::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $review = Review::findOrFail($id);

        return view('admin.reviews.edit', compact('review', 'users', 'papers'));
    }

    /**
     * Update Review in storage.
     *
     * @param  \App\Http\Requests\UpdateReviewsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReviewsRequest $request, $id)
    {
        if (! Gate::allows('review_edit')) {
            return abort(401);
        }
        $review = Review::findOrFail($id);
        $review->update($request->all());



        return redirect()->route('admin.reviews.index');
    }


    /**
     * Display Review.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('review_view')) {
            return abort(401);
        }
        $review = Review::findOrFail($id);

        return view('admin.reviews.show', compact('review'));
    }


    /**
     * Remove Review from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('review_delete')) {
            return abort(401);
        }
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('admin.reviews.index');
    }

    /**
     * Delete all selected Review at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('review_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Review::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Review from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('review_delete')) {
            return abort(401);
        }
        $review = Review::onlyTrashed()->findOrFail($id);
        $review->restore();

        return redirect()->route('admin.reviews.index');
    }

    /**
     * Permanently delete Review from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('review_delete')) {
            return abort(401);
        }
        $review = Review::onlyTrashed()->findOrFail($id);
        $review->forceDelete();

        return redirect()->route('admin.reviews.index');
    }
}
