<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPlanLimits
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $plan = optional(auth()->user()->subscriptions()->active()->latest()->first())->plan;

        if(!$plan) {
            return redirect()->route('plans.index')->with('error', 'You need to subscribe to a plan to access this feature.');
        }

        if($plan->code === 'FREE') {
            $itemCount = auth()->user()->items()->count();
            if($itemCount >= 10) {
                return redirect()->route('items.index')->with('error', 'You have reached the item limit for your plan. Please upgrade your plan to add more items.');
            }
        }

        if ($plan->code === 'PRO') {
            $itemCount = auth()->user()->items()->count();
            if($itemCount >= 100) {
                return redirect()->route('items.index')->with('error', 'You have reached the item limit for your plan. Please upgrade your plan to add more items.');
            }
        }


        return $next($request);
    }
}
