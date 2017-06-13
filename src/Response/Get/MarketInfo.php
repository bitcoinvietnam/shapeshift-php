<?php
/**
 * Copyright (c) 2017 Bitcoin Viet Nam Co., Ltd.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to
 * do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 * THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace BitcoinVietnam\ShapeShift\Response\Get;

use BitcoinVietnam\ShapeShift\Response\BaseResponse;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class MarketInfo
 *
 * @package BitcoinVietnam\ShapeShift\Response\Get
 */
final class MarketInfo extends BaseResponse
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("pair")
     */
    private $pair;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("rate")
     */
    private $rate;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("limit")
     */
    private $limit;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("min")
     */
    private $min;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("minerFee")
     */
    private $minerFee;

    /**
     * @return string
     */
    public function getPair()
    {
        return $this->pair;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @return float
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return float
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @return float
     */
    public function getMinerFee()
    {
        return $this->minerFee;
    }
}