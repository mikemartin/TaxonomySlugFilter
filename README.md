# Taxonomy Slug Filter ![Statamic 2.0](https://img.shields.io/badge/statamic-2.0-blue.svg?style=flat-square)

Custom filter to manually filter a collection by taxonomy slug

## Installation
1. Copy over the files into the `site` folder.

## Usage

If you're on a taxonomy uri, call the filter and pass in the entry `field` for the taxonomy:
```
{{ collection filter="taxonomy_slug" field="tags" }}
   ...
{{ /collection }}
```

On any other URI, pass in the taxonomy slug you need as well:
```
{{ collection:blog filter="taxonomy_slug" slug="coffee" field="tags" }}
   ...
{{ /collection }}
```