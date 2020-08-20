<?php

namespace Pattern\Builder;

/**
 *
 * Каждый строитель соответствует определенному диалекту SQL и может
 * реализовывать шаги построения немного иначе, чем остальные.
 *
 * Данный строитель предназначен для SQL-запросов совместимых с MySql
 *
 */
class MysqlQueryBuilder implements ISQLQueryBuilder
{
    protected $query;

    protected function reset()
    {
        $this->query = new \stdClass();
    }

    /**
     *
     * Построение базового select-запроса
     *
     * @param string $table
     * @param array $fields
     * @return $this|mixed
     */
    public function select($table, $fields)
    {
        $this->reset();

        $this->query->base = "SELECT " . implode(', ', $fields) . " FROM " . $table;
        $this->query->type = 'select';

        return $this;
    }

    /**
     *
     * Добавление условия WHERE
     *
     * @param string $field
     * @param string $value
     * @param string $operator
     * @return $this|mixed
     * @throws \Exception
     */
    public function where($field, $value, $operator = '=')
    {
        if (!in_array($this->query->type, ['select', 'update'])) {
            throw new \Exception("WHERE can only be added to SELECT OR UPDATE");
        }

        $this->query->where[] = "$field $operator '{$value}'";

        return $this;
    }


    /**
     * Добавление ограничения LIMIT
     *
     * @param int $start
     * @param int $offset
     * @return $this|mixed
     * @throws \Exception
     */
    public function limit($start, $offset)
    {
        if (!in_array($this->query->type, ['select', 'update'])) {
            throw new \Exception('WHERE can only be added to SELECT OR UPDATE');
        }

        $this->query->limit = " LIMIT {$start}, {$offset}";

        return $this;
    }


    /**
     *
     * Получение окончательной строки запроса
     *
     * @return string
     */
    public function getSQL()
    {
        $query  = $this->query;
        $sql = $query->base;

        if (!empty($query->where)) {
            $sql .= ' WHERE ' . implode(' AND ', $query->where);
        }

        if (isset($query->limit)) {
            $sql .= $query->limit;
        }

        $sql .= ';';
        return $sql;
    }
}