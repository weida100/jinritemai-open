<?php
declare(strict_types=1);

/**
 * Author: Sgenmi
 * Date: 2023/11/13 5:01 PM
 * Email: 150560159@qq.com
 */

namespace Weida\JinritemaiOpen\OpenApi\Product;

use Weida\JinritemaiCore\AbstractApi;

class ProductDetail extends AbstractApi
{
    protected string $_url='';

    protected string $_method='method';

    /**
     * @var string 商品ID，抖店系统生成，店铺下唯一；长度19位
     */
    protected string $product_id;

    /**
     * @var string  外部商家编码，商家自定义字段
     */
    protected string $out_product_id;

    /**
     * @var string  true：读取草稿数据；false：读取线上数据；不传默认为false
     */
    protected string $show_draft='false';

    /**
     * @var int 门店ID，不建议小时达一期用
     */
    protected int $store_id;

    public function setProductId(string $product_id): void
    {
        $this->product_id = $product_id;
    }

    public function setOutProductId(string $out_product_id): void
    {
        $this->out_product_id = $out_product_id;
    }

    public function setShowDraft(string $show_draft): void
    {
        $this->show_draft = $show_draft;
    }

    public function setStoreId(int $store_id): void
    {
        $this->store_id = $store_id;
    }

}