<?php

namespace App\Http\Controllers;

use App\Models\Issues;
use Illuminate\Http\Request;
use App\Models\Computers;
class IssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $numberOfRecord = Issues::count();
        $perPage = 20;
        $numberOfPage = $numberOfRecord % $perPage == 0?
             (int) ($numberOfRecord / $perPage): (int) ($numberOfRecord / $perPage) + 1;
        $pageIndex = 1;
        if($request->has('pageIndex'))
            $pageIndex = $request->input('pageIndex');
        if($pageIndex < 1) $pageIndex = 1;
        if($pageIndex > $numberOfPage) $pageIndex = $numberOfPage;
        //
        $issues = Issues::orderByDesc('id')
                ->skip(($pageIndex-1)*$perPage)
                ->take($perPage)
                ->get();  
        // dd($arr);
        return view('index', compact( 'issues', 'numberOfPage', 'pageIndex'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $issues = Issues::all();
        return view('create', compact('issues'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Issues::create($request->all());
        return redirect()->route('issues.index')->with('mes', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Issues $issues)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Issues $issue, Request $request)
    // {
    // $pageIndex = 1;
    // if ($request->has('pageIndex')) {
    //     $pageIndex = $request->input('pageIndex');
    // }

    // // Lấy tất cả các Issues
    // $issues = Issues::all(); // Đây trả về một collection chứa nhiều Issues

    // // Truyền dữ liệu vào view
    // return view('edit', compact('issues', 'pageIndex'));
    // }
    public function edit($id, Request $request)
{
    $pageIndex = $request->input('pageIndex', 1);
    $issue = Issues::findOrFail($id);  // Lấy vấn đề cụ thể từ cơ sở dữ liệu
    return view('edit', compact('issue', 'pageIndex'));
}



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Issues $issues)
    {
        $pageIndex = 1;
        if($request->has('pageIndex')) $pageIndex = $request->input('pageIndex');
        // echo $pageIndex;
        // update
        $issues->update($request->all());
        return redirect()->route('issues.index', ['pageIndex' => $pageIndex])->with('mes', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Issues $issue, Request $request)
{
    // Lấy trang hiện tại từ request, mặc định là 1
    $pageIndex = 1;
    if ($request->has('pageIndex')) {
        $pageIndex = $request->input('pageIndex');
    }

    // Xóa vấn đề
    $issue->delete();

    // Quay lại trang danh sách với thông báo
    return redirect()->route('issues.index', ['pageIndex' => $pageIndex])->with('mes', 'Xóa thành công');
}

}
