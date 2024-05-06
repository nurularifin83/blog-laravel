<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;

class PortfolioController extends Controller
{
    public function AllPortfolio()
    {
        $allportfolio = Portfolio::latest()->get();
        return view('admin.portfolio.portfolio_all', compact('allportfolio'));
    }

    public function AddPortfolio()
    {
        return view('admin.portfolio.portfolio_add');
    }

    public function StorePortfolio(Request $request)
    {
        $image      = $request->file('portfolio_image');
        $name_gen   = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

        Image::make($image)->resize(1020, 519)->save('upload/portfolio/'.$name_gen);
        $save_url = 'upload/portfolio/'.$name_gen;

        Portfolio::insert([
            'portfolio_name' => $request->portfolio_name,
            'portfolio_title' => $request->portfolio_title,
            'portfolio_image' => $save_url,
            'portfolio_description' => $request->portfolio_description,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Portfolio Added Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio')->with($notification);

    }

    public function EditPortfolio($id)
    {
        $editPortfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.portfolio_edit', compact('editPortfolio'));
    }

    public function UpdatePortfolio(Request $request)
    {
        $request->validate([
            'portfolio_name' => 'required',
            'portfolio_title' => 'required'
        ],[
            'portfolio_name.required' => 'The Portfolio Name is Required',
            'portfolio_title.required' => 'The Portfolio Title is Required'
        ]);

        $portfolio_id = $request->id;
        if ($request->file('portfolio_image')) {
            $image = $request->file('portfolio_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1020,519)->save('upload/portfolio/'.$name_gen);
            $save_url = 'upload/portfolio/'.$name_gen;

            // Delete image from folder before input the new one
            $currentImage = Portfolio::findOrFail($portfolio_id);
            unlink($currentImage->portfolio_image);

            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url
            ]);
            $notification = array(
                'message' => 'Portfolio Updated with Image Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('all.portfolio')->with($notification);
        }
        else
        {
            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description
            ]);
            $notification = array(
                'message' => 'Portfolio Updated without Image Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('all.portfolio')->with($notification);   
        }

    }

    public function DeletePortfolio($id)
    {
        $deleteportfolio = Portfolio::findOrFail($id);
        $img = $deleteportfolio->portfolio_image;
        if (!empty($img))
        {
            unlink($img);
        }

        Portfolio::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Portfolio Image Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function PortfolioDetails($id)
    {
        $portfolioDetail = Portfolio::findOrFail($id);
        return view('frontend.portfolio_details', compact('portfolioDetail'));
    }

    public function HomePortfolio()
    {
        return view('frontend.portfolio', [
            'portfolios' => DB::table('portfolios')->paginate(4)
        ]);
    }
}