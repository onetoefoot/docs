<?php

namespace Onetoefoot\Docs\Controllers;

use Exception;
use Storage;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use League\CommonMark\CommonMarkConverter;

class DocController
{
    public function page()
    {
        $pageProperties = $this->getPageProperties();

        return view('docs::page')->with($pageProperties);
    }

    public function getPageProperties() : array
    {
        $urlParts = explode('/', request()->path());
        array_shift($urlParts); // remove docs part of array

        $packageName = $urlParts[0];
        if (!$package = config('docs.packages.' . $packageName)){
            abort(404);
        }

        $latestVersion = end($package['versions']);

        $pageLocation = end($urlParts);

        // do we use vendor views or app views
        if (config('docs.views_enabled')) {
            $view_path = base_path('resources/views') . config('docs.views_path');
        } else {
            $view_path = dirname(__DIR__).'/resources/views';
        }

        if (count($urlParts) == 1) {
            $path = $view_path . '/'.$packageName.'/'.$latestVersion.'/introduction.md';
        } else {
            array_shift($urlParts);
            $path = $view_path . '/'.$packageName.'/'.implode('/', $urlParts) . '.md';
        }

        try {
            $document = File::get($path);
        } catch (Exception $e) {
            abort(404);
        }

        $version = $latestVersion;

        $pageProperties = $package;
        $pageProperties['extra_docs'] = $this->getExtraDocs(base_path() . '/vendor/onetoefoot/docs/src/resources/views/'.$packageName .'/'.$version);
        $pageProperties['package_name'] = $packageName;
        $pageProperties['page_location'] = $pageLocation;
        $pageProperties['pagePath'] = request()->path();
        $pageProperties['package'] = $package;
        $pageProperties['version'] = $version;
        $pageProperties['menu_base'] = config('docs.menu_base');
        $converter = new CommonMarkConverter();
        $pageProperties['content'] = $converter->convertToHtml($document);

        return $pageProperties;
    }

    /**
     * Get any extra directories with documentation inside them
     *
     * @param string $path
     * @return array
     */
    private function getExtraDocs($path) : array
    {
        $results = [];
        $list = glob($path.'/*/*.md');
        if (is_array($list)) {
            foreach ($list as $newDoc) {
                $listParts = explode('/', $newDoc);
                $file = array_pop($listParts); // grab the file name
                $dir = array_pop($listParts); // grab the directory name
                $results[$dir][] = substr($file, 0, -3); // remove the .md on the end
            }
        }

        return $results;
    }

}