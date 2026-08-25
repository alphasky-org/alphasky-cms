<?php

namespace Theme\Alphatheme\Http\Controllers;

use Alphasky\Base\Facades\BaseHelper;
use Alphasky\Blog\Repositories\Interfaces\PostInterface;
use Alphasky\Theme\Facades\Theme;
use Alphasky\Theme\Http\Controllers\PublicController;
use Illuminate\Http\Request;

class AlphathemeController extends PublicController
{
    /**
     * Search post
     *
     * @bodyParam q string required The search keyword.
     *
     * @group Blog
     */
    public function getSearch(Request $request, PostInterface $postRepository)
    {
        $query = BaseHelper::stringify($request->input('q'));

        if (! empty($query)) {
            $posts = $postRepository->getSearch($query);

            $data = [
                'items' => Theme::partial('search', compact('posts')),
                'query' => e($query),
                'count' => $posts->count(),
            ];

            if ($data['count'] > 0) {
                return $this
                    ->httpResponse()
                    ->setData(apply_filters(BASE_FILTER_SET_DATA_SEARCH, $data, 10, 1));
            }
        }

        return $this
            ->httpResponse()
            ->setError()
            ->setMessage(__('No results found, please try with different keywords.'));
    }
}
