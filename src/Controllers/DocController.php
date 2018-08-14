<?php

namespace Onetoefoot\Docs\Controllers;

use Exception;
use Storage;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;

class DocController
{
    public function page()
    {
        $pageProperties = $this->getPageProperties();

        return view('page')->with($pageProperties);
    }

    public function getPageProperties() : array
    {
        //FIXME: is there a better way to do this?
        $requestPath = substr(request()->path(), 5);
        $path = base_path() . '/vendor/onetoefoot/docs/src/resources/views/' . $requestPath . '.md';
        try {
            $content = File::get($path);
        } catch (Exception $e) {
            abort(404);
        }
        dd($content);

        $document = (new Parser())->parse($content);

        $pageProperties = 'xxx';
        // $pageProperties = $document->matter();
        // $pageProperties['pagePath'] = request()->path();

        // $pageProperties['content'] = markdown($document->body());
        // $pageProperties['layout'] = $pageProperties['layout'] ?? request()->segment(1);

        // $pageProperties['package'] = current_package();
        // $pageProperties['version'] = current_version();

        // $pageProperties['previousUrl'] = app(Navigation::class)->getPreviousPage();
        // $pageProperties['nextUrl'] = app(Navigation::class)->getNextPage();

        return $pageProperties;
    }
}