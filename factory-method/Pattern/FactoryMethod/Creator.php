<?php

namespace Pattern\FactoryMethod;

abstract class Creator
{
    /**
     * @return mixed
     *
     * Фактический фабричный метод
     *
     */
    abstract public function getInterviewer();

    /**
     * Когда фабричный метод используется внутри бизнес-логики Создателя,
     * подклассы могут изменять логику косвенно, возвращая из фабричного метода
     * различные типы коннекторов.
     */
    public function takeInterview()  {
        $interviewer = $this->getInterviewer();

        return $interviewer->takeInterview();
    }
}