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

namespace BitcoinVietnam\ShapeShift\Request\Post;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SendAmount
 *
 * @package BitcoinVietnam\ShapeShift\Request\Post
 */
class SendAmount
{
    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("amount")
     */
    private $amount;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("withdrawal")
     */
    private $withdrawal;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("pair")
     */
    private $pair;

    /**
     * @var string
     *
     * @Serializer\Type("returnAddress")
     * @Serializer\SerializedName("string")
     */
    private $returnAddress;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("destTag")
     */
    private $destTag;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("rsAddress")
     */
    private $rsAddress;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("apiKey")
     */
    private $apiKey;

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return SendAmount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawal()
    {
        return $this->withdrawal;
    }

    /**
     * @param string $withdrawal
     * @return SendAmount
     */
    public function setWithdrawal($withdrawal)
    {
        $this->withdrawal = $withdrawal;
        return $this;
    }

    /**
     * @return string
     */
    public function getPair()
    {
        return $this->pair;
    }

    /**
     * @param string $pair
     * @return SendAmount
     */
    public function setPair($pair)
    {
        $this->pair = $pair;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnAddress()
    {
        return $this->returnAddress;
    }

    /**
     * @param string $returnAddress
     * @return SendAmount
     */
    public function setReturnAddress($returnAddress)
    {
        $this->returnAddress = $returnAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestTag()
    {
        return $this->destTag;
    }

    /**
     * @param string $destTag
     * @return SendAmount
     */
    public function setDestTag($destTag)
    {
        $this->destTag = $destTag;
        return $this;
    }

    /**
     * @return string
     */
    public function getRsAddress()
    {
        return $this->rsAddress;
    }

    /**
     * @param string $rsAddress
     * @return SendAmount
     */
    public function setRsAddress($rsAddress)
    {
        $this->rsAddress = $rsAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return SendAmount
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }
}