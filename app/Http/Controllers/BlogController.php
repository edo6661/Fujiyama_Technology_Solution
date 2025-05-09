<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the blogs.
     */
    public function index()
    {
        $blogs = Blog::with('users')->latest()->paginate(3);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new blog.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created blog in storage.
     */
    public function store(BlogRequest $request)
    {
        $data = $request->validated();
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 's3');
            $data['image'] = $imagePath;
        }
        
        $data['user_id'] = Auth::id();
        
        Blog::create($data);
        
        return redirect()->route('blogs.index')
            ->with('success', 'Blog berhasil dibuat.');
    }

    /**
     * Display the specified blog.
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified blog.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified blog in storage.
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $data = $request->validated();
        
        if ($request->hasFile('image')) {
            // Hapus file lama dari R2 jika ada
            if ($blog->image) {
                Storage::disk('s3')->delete($blog->image);
            }
            
            // Upload file baru ke R2 di folder blogs (bukan file)
            $imagePath = $request->file('image')->store('blogs', 's3');
            $data['image'] = $imagePath;
        }
        
        $blog->update($data);
        
        return redirect()->route('blogs.index')
            ->with('success', 'Blog berhasil diperbarui.');
    }

    /**
     * Remove the specified blog from storage.
     */
    public function destroy(Request $request)
    {
        $blog = Blog::findOrFail($request->id);
        
        // Hapus file dari R2
        if ($blog->image) {
            Storage::disk('s3')->delete($blog->image);
        }
        
        $blog->delete();
        
        return redirect()->route('blogs.index')
            ->with('success', 'Blog berhasil dihapus.');
    }
}