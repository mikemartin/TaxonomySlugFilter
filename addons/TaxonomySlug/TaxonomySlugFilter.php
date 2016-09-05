<?php

namespace Statamic\Addons\TaxonomySlug;

use Statamic\API\TaxonomyTerm;
use Statamic\API\URL;
use Statamic\Extend\Filter;
use Statamic\API\Helper;

class TaxonomySlugFilter extends Filter
{
    public function filter()
    {
        $slug = basename(URL::getCurrent());
        $term = TaxonomyTerm::getFromTaxonomy('tags', $slug);

        return $this->collection->filter(function($entry) use ($term) {
            $term = $term->id();
            $tags = Helper::ensureArray($entry->get('tags'));
            
            return in_array($term,$tags);
            
        });
    }
}
