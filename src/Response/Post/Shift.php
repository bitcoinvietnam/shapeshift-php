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

namespace BitcoinVietnam\ShapeShift\Response\Post;

use BitcoinVietnam\ShapeShift\Response\BaseResponse;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Shift
 *
 * @package BitcoinVietnam\ShapeShift\Response\Post
 */
final class Shift extends BaseResponse
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deposit")
     */
    private $deposit;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("depositType")
     */
    private $depositType;

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
     * @Serializer\SerializedName("withdrawalType")
     */
    private $withdrawalType;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("public")
     */
    private $public;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("xrpDestTag")
     */
    private $xrpDestTag;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("apiPubKey")
     */
    private $apiPubKey;

    /**
     * @return string
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * @return string
     */
    public function getDepositType()
    {
        return $this->depositType;
    }

    /**
     * @return string
     */
    public function getWithdrawal()
    {
        return $this->withdrawal;
    }

    /**
     * @return string
     */
    public function getWithdrawalType()
    {
        return $this->withdrawalType;
    }

    /**
     * @return string
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * @return string
     */
    public function getXrpDestTag()
    {
        return $this->xrpDestTag;
    }

    /**
     * @return string
     */
    public function getApiPubKey()
    {
        return $this->apiPubKey;
    }
}