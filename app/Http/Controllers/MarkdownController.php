<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment;
use League\CommonMark\Extension\GithubFlavoredMarkdownExtension;

class MarkdownController extends Controller
{
    /**
     * Show the imprint for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function showImprint(Request $request)
    {
        $imprintFile = Jetstream::localizedMarkdownPath('imprint.md');

        $environment = Environment::createCommonMarkEnvironment();
        $environment->addExtension(new GithubFlavoredMarkdownExtension());

        return view('markdown', [
            'title' => __('Imprint'),
            'text' => (new CommonMarkConverter([], $environment))->convertToHtml(file_get_contents($imprintFile)),
        ]);
    }

    /**
     * Show the terms for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function showTerms(Request $request)
    {
        $termsFile = Jetstream::localizedMarkdownPath('terms.md');

        $environment = Environment::createCommonMarkEnvironment();
        $environment->addExtension(new GithubFlavoredMarkdownExtension());

        return view('markdown', [
            'title' => __('Terms of Service'),
            'text' => (new CommonMarkConverter([], $environment))->convertToHtml(file_get_contents($termsFile)),
        ]);
    }

    /**
     * Show the privacy police for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function showPrivacy(Request $request)
    {
        $privacyFile = Jetstream::localizedMarkdownPath('privacy.md');

        $environment = Environment::createCommonMarkEnvironment();
        $environment->addExtension(new GithubFlavoredMarkdownExtension());

        return view('markdown', [
            'title' => __('Privacy Police'),
            'text' => (new CommonMarkConverter([], $environment))->convertToHtml(file_get_contents($privacyFile)),
        ]);
    }
}
