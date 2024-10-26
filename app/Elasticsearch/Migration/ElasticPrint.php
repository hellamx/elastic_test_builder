<?php

namespace App\Elasticsearch\Migration;

class ElasticPrint
{
    /**
     * Binary mappings
     *
     * @var array $binaries
     */
    protected array $binaries;

    /**
     * Boolean mappings
     *
     * @var array $booleans
     */
    protected array $booleans;

    /**
     * Keyword mappings
     *
     * @var array $keywords
     */
    protected array $keywords;

    /**
     * Constant keyword mappings
     *
     * @var array $constant_keywords
     */
    protected array $constant_keywords;

    /**
     * Wildcard mappings
     *
     * @var array $wildcards
     */
    protected array $wildcards;

    /**
     * Numeric long mappings
     *
     * @var array $longs
     */
    protected array $longs;

    /**
     * Numeric double mappings
     *
     * @var array $doubles
     */
    protected array $doubles;

    /**
     * Date mappings
     *
     * @var array $dates
     */
    protected array $dates;

    /**
     * Date nano mappings
     *
     * @var array $date_nanos
     */
    protected array $date_nanos;

    /**
     * Alias mappings
     *
     * @var array $aliases
     */
    protected array $aliases;

    /**
     * Object mappings
     *
     * @var array $objects
     */
    protected array $objects;

    /**
     * Flattened mappings
     *
     * @var array $flattened
     */
    protected array $flattened;

    /**
     * Nested mappings
     *
     * @var array $nested
     */
    protected array $nested;

    /**
     * Join mappings
     *
     * @var array $joins
     */
    protected array $joins;

    /**
     * Long range mappings
     *
     * @var array $long_ranges
     */
    protected array $long_ranges;

    /**
     * Double range mappings
     *
     * @var array $double_ranges
     */
    protected array $double_ranges;

    /**
     * Date range mappings
     *
     * @var array $date_ranges
     */
    protected array $date_ranges;

    /**
     * Ip range mappings
     *
     * @var array $ip_ranges
     */
    protected array $ip_ranges;

    /**
     * Ip mappings
     *
     * @var array $ips
     */
    protected array $ips;

    /**
     * Version mappings
     *
     * @var array
     */
    protected array $versions;

    /**
     * Text mappings
     *
     * @var array $texts
     */
    protected array $texts;

    /**
     * Match only text mappings
     *
     * @var array $match_only_texts
     */
    protected array $match_only_texts;

    /**
     * Set binary mapping
     *
     * @param string $name
     * @param bool $doc_values
     * @param bool $source
     * @return void
     *
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/binary.html
     */
    public function setBinary(
        string $name,
        bool $doc_values = false,
        bool $source = false
    ): void
    {
        $this->binaries[] = [
            'name' => $name,
            'doc_values' => $doc_values,
            'source' => $source
        ];
    }

    /**
     * Set boolean mapping
     *
     * @param string $name
     * @param bool $doc_values
     * @param bool $index
     * @param bool $ignore_malformed
     * @param bool $null_value
     * @param string $on_script_error
     * @param string|null $script
     * @param bool $store
     * @param array|null $meta
     * @return void
     *
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/boolean.html
     */
    public function setBoolean(
        string $name,
        bool $doc_values = true,
        bool $index = true,
        bool $ignore_malformed = false,
        bool $null_value = true,
        string $on_script_error = 'fail',
        ?string $script = null,
        bool $store = false,
        ?array $meta = null,
    ): void
    {
        $this->booleans[] = [
            'name' => $name,
            'doc_values' => $doc_values,
            'index' => $index,
            'ignore_malformed' => $ignore_malformed,
            'nul_value' => $null_value,
            'on_script_error' => $on_script_error,
            'script' => $script,
            'store' => $store,
            'meta' => $meta
        ];
    }

    /**
     * Set keyword mapping
     *
     * @param string $name
     * @param bool $doc_values
     * @param bool $eager_global_ordinals
     * @param array|null $fields
     * @param int $ignore_above
     * @param bool $index
     * @param string $index_options
     * @param array|null $meta
     * @param bool $norms
     * @param bool $null_value
     * @param string $on_script_error
     * @param string|null $script
     * @param bool $store
     * @param string $similarity
     * @param string|null $normalizer
     * @param bool $split_queries_on_whitespace
     * @param string|bool $time_series_dimension
     * @return void
     *
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/keyword.html
     */
    public function setKeyword(
        string $name,
        bool $doc_values = true,
        bool $eager_global_ordinals = false,
        ?array $fields = null,
        int $ignore_above = 2147483647,
        bool $index = true,
        string $index_options = 'docs',
        ?array $meta = null,
        bool $norms = false,
        bool $null_value = true,
        string $on_script_error = 'fail',
        ?string $script = null,
        bool $store = false,
        string $similarity = 'BM25',
        ?string $normalizer = null,
        bool $split_queries_on_whitespace = false,
        string|bool $time_series_dimension = false,
    ): void
    {
        $this->keywords[] = [
            'name' => $name,
            'doc_values' => $doc_values,
            'eager_global_ordinals' => $eager_global_ordinals,
            'fields' => $fields,
            'ignore_above' => $ignore_above,
            'index' => $index,
            'index_options' => $index_options,
            'meta' => $meta,
            'norms' => $norms,
            'null_value' => $null_value,
            'on_script_error' => $on_script_error,
            'script' => $script,
            'store' => $store,
            'similarity' => $similarity,
            'normalizer' => $normalizer,
            'split_queries_on_whitespace' => $split_queries_on_whitespace,
            'time_series_dimension' => $time_series_dimension,
        ];
    }
}
