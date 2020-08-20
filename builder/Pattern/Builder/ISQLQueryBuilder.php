<?php

namespace Pattern\Builder;

/**
 * Интерфейс Строителя объявляет набор методов для сборки SQL-запроса.
 *
 * Все шаги построения возвращают текущий объект строителя, чтобы обеспечить
 * цепочку: $builder->select(...)->where(...)
 */
interface ISQLQueryBuilder
{
    /**
     * @param $table string
     * @param $fields array
     * @return mixed
     */
    public function select($table, $fields);

    /**
     * @param $field string
     * @param $value string
     * @param $operator string
     * @return mixed
     */
    public function where($field, $value, $operator = '=');

    /**
     * @param $start integer
     * @param $offset integer
     * @return mixed
     */
    public function limit($start, $offset);

    public function getSQL();
}