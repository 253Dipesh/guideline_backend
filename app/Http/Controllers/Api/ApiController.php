<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Http\Resources\ActivityResource;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\GuideResource;
use App\Http\Resources\SlideResource;
use App\Models\About;
use App\Models\Activity;
use App\Models\Booking;
use App\Models\Company;
use App\Models\Guide;
use App\Models\Slide;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    // Company Information
    function getCompanyInfo()
    {
        $company = Company::first();
        return new CompanyResource($company);
    }

    //Activities
    function getActivities()
    {
        $activities = Activity::orderBy('created_at', 'desc')->get();
        return ActivityResource::collection($activities);
    }

    //Single Activity
    function getActivity($id)
    {
        $activity = Activity::find($id);
        return new ActivityResource($activity);
    }

    // Slides
    function getSlides()
    {
        $slides = Slide::orderBy('created_at', 'desc')->get();
        return SlideResource::collection($slides);
    }

    // About us
    function getAbout()
    {
        $about = About::first();
        return new AboutResource($about);
    }

    //Guide
    function getGuides()
    {
        $guides = Guide::orderBy("created_at", "desc")->get();
        return GuideResource::collection($guides);
    }

    //Booking Guide
    function booking(Request $request)
    {
        $booking = new Booking();
        $booking->guide_id = $request->guide_id;
        $booking->name = $request->name;
        $booking->mobile = $request->mobile;
        $booking->email = $request->email;
        $booking->from = $request->from;
        $booking->to = $request->to;

        $booking->save();
        return response()->json(['message' => 'Your booking request has been sent, our customer service will contact you soon.', 'success' => true, 'status' => 201]);
    }
}
