<?php

namespace Onetoefoot\Docs\Controllers;

use Exception;
use Storage;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use GrahamCampbell\Markdown\Facades\Markdown;

class DocController
{
    public function page()
    {
        $pageProperties = $this->getPageProperties();

        return view('docs::page')->with($pageProperties);
    }

    public function getPageProperties() : array
    {
        //FIXME: is there a better way to do this?
        $urlParts = explode('/', request()->path());
        array_shift($urlParts); // remove docs part of array
        $package = config('docs.templates.' . $urlParts[0]);
        if (!$package) {
            abort(404);
        }
        $latestVersion = end($package['versions']);
        $packageName = $urlParts[0];
        if (count($urlParts) == 1) {
            // if in the root redirect to latest version
            $urlPath = base_path() . '/vendor/onetoefoot/docs/src/resources/views/'.$urlParts[0].'/'.$latestVersion.'/introduction.md';
        } else {
            array_shift($urlParts);
            $path = base_path() . '/vendor/onetoefoot/docs/src/resources/views/'.$packageName.'/'.implode('/', $urlParts) . '.md';
        }
        try {
            $document = File::get($path);
        } catch (Exception $e) {
            abort(404);
        }

        $pageProperties = $package;
        $pageProperties['package_name'] = $packageName;
        $pageProperties['pagePath'] = request()->path();
        $pageProperties['package'] = $package;
        $pageProperties['version'] = $latestVersion;
        $pageProperties['menu_base'] = config('docs.menu_base');
        $pageProperties['content'] = Markdown::convertToHtml($document);

        return $pageProperties;
    }
}