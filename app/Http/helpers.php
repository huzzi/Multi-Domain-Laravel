<?php
if (!function_exists('site')) {
    /**
     * Get shop by subdomain
     *
     * @param null $subdomain
     * @return \App\Models\Site
     */

    function site($subdomain = null)
    {
        $subdomain = $subdomain ?: request()->route('subdomain');
        $site = \App\Models\Site::where('domain', $subdomain)->first();
        if (!$site) {
            return new \App\Models\Site;
        }
        return $site;
    }
}

if (!function_exists('domain')) {
    /**
     * Get current domain
     *
     * @param null $subdomain
     * @return \App\Models\Site
     */

    function domain()
    {
        $subdomain = request()->route('subdomain');
        return $subdomain;
    }
}

if (!function_exists('domain_route')) {
    /**
     * Generate the URL to a named route.
     * This is a modified version of Laravel's route() function
     * Pass subdomain value automatically
     *
     * @param  array|string $name
     * @param  mixed $parameters
     * @param  bool $absolute
     * @return string
     */
    function domain_route($name, $parameters = [], $absolute = true)
    {
        $parameters['subdomain'] = request()->route('subdomain');
        return app('url')->route($name, $parameters, $absolute);
    }
}