<?php
declare(strict_types=1);

/**
 * Author: Sgenmi
 * Date: 2023/11/13 4:49 PM
 * Email: 150560159@qq.com
 */

namespace Weida\JinritemaiOpen\OpenApi\Order;

use Weida\JinritemaiCore\AbstractApi;

class OrderSearchList extends AbstractApi
{
    protected string $_url='';
    protected string $_method='order.searchList';

    /**
     * @var string 商品，number型代表商品ID，其它代表商品名称
     */
    protected string $product;

    /**
     * @var string 【下单端】 0、站外 1、火山 2、抖音 3、头条 4、西瓜 5、微信 6、值点app 7、头条lite 8、懂车帝 9、皮皮虾 11、抖音极速版
     * 12、TikTok 13、musically 14、穿山甲 15、火山极速版 16、服务市场 26、番茄小说 27、UG教育营销电商平台 28、Jumanji 29、电商SDK
     */
    protected string $b_type;

    /**
     * @var string 售后状态：all-全部，in_aftersale-售后中，refund-退款中，refund_success-退款成功，
     * refund_fail-退款失败，exchange_success-换货成功 aftersale_close-售后关闭
     */
    protected string $after_sale_status_desc;

    /**
     * @var string  物流单号
     */
    protected string $tracking_no;

    /**
     * @var int  预售类型：0-普通订单；1-全款预售；2-定金预售；3-定金找货；
     */
    protected int $presell_type;

    /**
     * @var int  订单类型 0、普通订单 2、虚拟商品订单 4、电子券（poi核销） 5、三方核销
     */
    protected int $order_type;

    /**
     * @var int 下单时间：开始，秒级时间戳
     */
    protected int $create_time_start;

    /**
     * @var int 下单时间：截止，秒级时间戳
     */
    protected int $create_time_end;

    /**
     * @var int 异常订单，1-异常取消，2-风控审核中
     */
    protected int $abnormal_order;

    /**
     * @var int 交易类型：0-普通；1-拼团；2-定金预售；3-订金找货；4-拍卖；5-0元单；6-回收；7-寄卖；10-寄样；11-0元抽奖(超级福袋)；
     * 12-达人买样；13-普通定制；16-大众竞拍；18-小时达；102-定金预售的赠品单；103-收款；
     */
    protected int $trade_type;

    /**
     * @var array  状态组合查询，直接输入状态码（只支持一个元素）
     */
    protected array $combine_status;


    /**
     * @var int  更新时间：开始
     */
    protected int $update_time_start;
    /**
     * @var int  更新时间：截止
     */
    protected int  $update_time_end;

    /**
     * @var int  单页大小，限制100以内
     */
    protected int $size=20;

    /**
     * @var int  页码，0页开始
     */
    protected int $page=0;

    /**
     * @var string  排序条件(create_time 订单创建时间；update_time 订单更新时间；默认create_time；)
     */
    protected string $order_by;

    /**
     * @var bool  排序类型，小到大或大到小，默认大到小
     */
    protected bool $order_asc;

    /**
     * @var string  履约状态；如小时达未接单"no_accept"
     */
    protected string $fulfil_status;

    public function setProduct(string $product): void
    {
        $this->product = $product;
    }

    public function setBType(string $b_type): void
    {
        $this->b_type = $b_type;
    }

    public function setAfterSaleStatusDesc(string $after_sale_status_desc): void
    {
        $this->after_sale_status_desc = $after_sale_status_desc;
    }

    public function setTrackingNo(string $tracking_no): void
    {
        $this->tracking_no = $tracking_no;
    }

    public function setPresellType(int $presell_type): void
    {
        $this->presell_type = $presell_type;
    }

    public function setOrderType(int $order_type): void
    {
        $this->order_type = $order_type;
    }

    public function setCreateTimeStart(int $create_time_start): void
    {
        $this->create_time_start = $create_time_start;
    }

    public function setCreateTimeEnd(int $create_time_end): void
    {
        $this->create_time_end = $create_time_end;
    }

    public function setAbnormalOrder(int $abnormal_order): void
    {
        $this->abnormal_order = $abnormal_order;
    }

    public function setTradeType(int $trade_type): void
    {
        $this->trade_type = $trade_type;
    }

    public function setCombineStatus(array $combine_status): void
    {
        $this->combine_status = $combine_status;
    }

    public function setUpdateTimeStart(int $update_time_start): void
    {
        $this->update_time_start = $update_time_start;
    }

    public function setUpdateTimeEnd(int $update_time_end): void
    {
        $this->update_time_end = $update_time_end;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    public function setOrderBy(string $order_by): void
    {
        $this->order_by = $order_by;
    }

    public function setOrderAsc(bool $order_asc): void
    {
        $this->order_asc = $order_asc;
    }

    public function setFulfilStatus(string $fulfil_status): void
    {
        $this->fulfil_status = $fulfil_status;
    }


}