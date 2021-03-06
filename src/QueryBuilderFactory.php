<?php


namespace Mleczek\Rest;


class QueryBuilderFactory
{
    /**
     * @var ContextRepository
     */
    protected $context;

    /**
     * QueryBuilderFactory constructor.
     *
     * @param ContextRepository $context
     */
    public function __construct(ContextRepository $context)
    {
        $this->context = $context;
    }

    public function make($query)
    {
        return new QueryBuilder($query, $this->context);
    }
}