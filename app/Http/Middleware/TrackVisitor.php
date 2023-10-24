<?php
namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor;

class TrackVisitor
{
    public function handle($request, Closure $next)
    {
        $ipAddress = $request->ip();
        $userAgent = $request->header('User-Agent');

        $existingVisitor = Visitor::where('ip_address', $ipAddress)
            ->where('user_agent', $userAgent)
            ->first();

        if (!$existingVisitor) {
            $visitor = new Visitor([
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent,
            ]);

            $visitor->save();
        }

        return $next($request);
    }
}
