<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Exception;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $page = 'Job';
    public function index(Request $request)
    {
        $data = Job::orderBy('id', 'desc')->get();
       // return $data;
        if ($request->ajax()) {
            return DataTables::of($data)
                 ->addColumn('action', function ($row) {
                     $actionBtn = view('admin.job.button', ['item' => $row, 'route'=>'job', 'page' => $this->page]);
                     return $actionBtn;
                 })
                 ->rawColumns(['action'])
                ->make(true);
        }
        return view ('admin.job.index');
        
    }

    /**
     * Show the form for creating a new resource.
     */

     public function store(Request $request)
     {
         $validate = Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'job_title' => 'required',
            'job_designation' => 'required',
            'experience_from' => 'required',
            'experience_to' => 'required',
            'shift_type' => 'required',
            'salary_from' => 'required',
            'salary_to' => 'required',
            'company_name' => 'required',
            'location_address' => 'required',
            'job_posted_date' => 'required',
           
         ]);
 
         if ($validate->fails()) {
             return response()->json(['errors' => $validate->errors()], 422);
         } else {
             try {
                $fullPath = null;
                if ($request->hasFile('image')) {
                  $imageName = time() . '.' . $request->file('image')->extension();
                  if (!File::exists("assets/job_image")) {
                    File::makeDirectory("job_image");
                  }
                  $request->image->move(public_path('assets/job_image'), $imageName);
                  $fullPath = 'assets/job_image/' . $imageName;
                }
                $request->merge([
                    'company_logo_image' =>  $fullPath,
                ]);
                Job::create($request->toarray());
                 return response()->json([
                     'success' => 'Job Saved Successfully'
                 ], 201);
             } catch (Exception $e) {
                 return response()->json(['errors' => $e->getMessage()],false);
             }
         }
     }

     public function show($jobid)
     {
   
       $jobdata = Job::where('id', $jobid)->first();
       return view('admin.job.show', compact('jobdata'));
     }

     public function edit($jobid)
     {
   
       $jobdata = Job::where('id', $jobid)->first();
       return view('admin.job.edit', compact('jobdata'));
     }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $jobid)
    {
        $validate = Validator::make($request->all(), [
            'job_title' => 'required',
            'job_designation' => 'required',
            'experience_from' => 'required',
            'experience_to' => 'required',
            'shift_type' => 'required',
            'salary_from' => 'required',
            'salary_to' => 'required',
            'company_name' => 'required',
            'location_address' => 'required',
            'job_posted_date' => 'required',
            'status' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 422);
        } else {
            try {

                $fullPath = null;
                if ($request->hasFile('image')) {
                  $imageName = time() . '.' . $request->file('image')->extension();
                  if (!File::exists("assets/job_image")) {
                    File::makeDirectory("job_image");
                  }
                  $request->image->move(public_path('assets/job_image'), $imageName);
                  $fullPath = 'assets/job_image/' . $imageName;
                }
               
                // Find the user to edit
                $jobdata = Job::where('id', $jobid)->first();

                if ($jobdata) {
                    if($fullPath == null || $fullPath == '') {
                        $fullPath = $jobdata->company_logo_image;
                    } else {
                        $path = public_path($jobdata->company_logo_image);

                        if (File::exists($path)) {
                            File::delete($path);
                        }
                    }
                    $request->merge([
                        'company_logo_image' =>  $fullPath,
                    ]);
                    $jobdata->update($request->toarray());                
                return response()->json(['data' => $request->all(), 'success' => "Job Updated successfully."]);
                exit;
            }

            } catch (Exception $e) {
                return response()->json(['errors' => $e->getMessage()],500);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($jobid)
    {
        $jobdata = Job::where('id', $jobid)->first();

        if ($jobdata->company_logo_image != null || $jobdata->company_logo_image != '') {
            $path = public_path($jobdata->company_logo_image);

            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $jobdata->delete();
        return response()->json(['success' => 'Record delete successfully']);


    }
}
