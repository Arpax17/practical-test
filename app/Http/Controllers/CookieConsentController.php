<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\CookieConsent;
use Whitecube\LaravelCookieConsent\CookiesManager;
use Whitecube\LaravelCookieConsent\Facades\Cookies;
use Illuminate\Support\Facades\Cookie as CookieFacade;

class CookieConsentController extends Controller
{

    protected function makeConsentCookie($preference, int $minutes = null)
    {
        return CookieFacade::make(
            name: config('cookieconsent.cookie.name'),
            value: json_encode($this->makeConsentSettings($preference)),
            minutes: $minutes ,
            domain: config('cookieconsent.cookie.domain'),
            secure: (env('APP_ENV') == 'local') ? false : true,
        );
    }

    protected function makeConsentSettings($preference): array
    {
        $state = true;
        return array_reduce($preference->getCookies(), function($values, $cookie) use ($state) {
                        $values[$cookie->name] = $state;
                        return $values;
                    },['consent_at' => time()]);

    }

    public function store(Request $request)
    {
        $cookie = null;
        if ($request->has('action') && $request->input('action')=== 'decline') {
            // Handle cookie decline
           $preference = Cookies::essentials();
           $cookie = $this->makeConsentCookie($preference, 60 * 24);
        }
        // Create record in DB
        $consent = CookieConsent::create([
            'version'    => 1, // initial version
            'accepted_at'=> Carbon::now(),
            'expires_at' => Carbon::now()->addYear(), // 1 year expiry
        ]);

        $response = response()->json([
            'message' => 'Consent saved successfully',
            'data'    => $consent
        ]);

        if ($cookie) {
            $response->cookie($cookie);
        }

        return $response;
    }
}
