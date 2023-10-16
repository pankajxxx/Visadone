<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShowLoadingScreen
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
        echo '<style>#loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7); /* Optional: Add a semi-transparent background */
            display: flex;
            flex-direction: column; /* Add this to stack image and text vertically */
            justify-content: center;
            align-items: center;
        }

        .loading-class {
            /* Add any specific styles for the loading image, e.g., width, height, etc. */

        }

        #loading-screen p {
            margin-top: 10px; /* Adjust this value as needed for spacing between image and text */
            font-size: 16px; /* Adjust this value to set the font size of the text */
            /* Add any other styles you want to apply to the text */
        }
        </style>';
        echo '<div id="loading-screen">';
        echo '<img src="'.asset('./assets/loader.svg').'" class="loading-class" alt="loading...">';
        // echo '<p><b>Your Data is Loading...</b></p>';
        echo '</div>';

        return $next($request);
    }


}
