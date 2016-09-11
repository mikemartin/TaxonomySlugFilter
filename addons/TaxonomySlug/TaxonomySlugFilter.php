<?php

namespace Statamic\Addons\TaxonomySlug;

use Statamic\API\URL;
use Statamic\API\Term;
use Statamic\API\Helper;
use Statamic\Extend\Filter;

class TaxonomySlugFilter extends Filter
{
    public function filter()
    {
        $slug = $this->get('slug', basename(URL::getCurrent()));
        $field = $this->get('field');
        $term_id = Term::whereSlug($slug, $field)->id();

        return $this->collection->filter(function($entry) use ($term_id, $field) {
            return in_array($term_id, Helper::ensureArray($entry->get($field)));
        });
    }
}
