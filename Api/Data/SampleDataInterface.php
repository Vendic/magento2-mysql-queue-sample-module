<?php declare(strict_types=1);

/**
 * @author tjitse (Vendic)
 * Created on 2019-10-21 11:09
 */

namespace Vendic\MysqlMqExample\Api\Data;

interface SampleDataInterface
{
    /**
     * @return void
     * @param string $data
     */
    public function setData(string $data) : void;

    /**
     * @return string
     */
    public function getData(): string;

}
