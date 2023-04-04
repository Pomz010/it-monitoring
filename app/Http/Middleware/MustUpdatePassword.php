<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MustUpdatePassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!auth()->check()){
            return redirect('/login');
        } else {
            $user = auth()->user();
            // $user = User::find($current->id);
            // $updated = $user->updated_at;
            // $updatedAt = User::where('id', $user)->pluck('updated_at')->first();

            if (!$user->updated_at == null) {
                $request->session()->regenerate();
                return $next($request);
            } else {
                return redirect('/update-password');
            }
            // return dd($updatedAt);
        }
    }
}
