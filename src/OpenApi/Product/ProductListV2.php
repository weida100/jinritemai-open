<?php
declare(strict_types=1);

/**
 * Author: Sgenmi
 * Date: 2023/11/13 5:12 PM
 * Email: 150560159@qq.com
 */

namespace Weida\JinritemaiOpen\OpenApi\Product;

use Weida\JinritemaiCore\AbstractApi;

class ProductListV2 extends AbstractApi
{
    protected string $_url='';

    protected string $_method='product.listV2';

    /**
     * @var int 商品在店铺中状态: 0-在线；1-下线；2-删除；详见商品状态机：https://op.jinritemai.com/docs/question-docs/92/2070
     */
    protected int $status;

    /**
     * @var int  商品审核状态: 1-未提交；2-待审核；3-审核通过；4-审核未通过；5-封禁；7-审核通过待上架；详见商品状态机：https://op.jinritemai.com/docs/question-docs/92/2070
     */
    protected int $check_status;

    /**
     * @var int 商品类型；0-普通；1-新客商品；3-虚拟；6-玉石闪购；7-云闪购 ；127-其他类型；
     */
    protected int  $product_type;

    /**
     * @var int 商品创建开始时间，unix时间戳，单位：秒；
     */
    protected int $start_time;

    /**
     * @var int 商品创建结束时间，unix时间戳，单位：秒；
     */
    protected int $end_time;

    /**
     * @var int 商品更新开始时间，unix时间戳，单位：秒；注意：查询范围是update_start_time和update_end_time之间的数据，不包含入参时间。
     */
    protected int $update_start_time;

    /**
     * @var int 商品更新结束时间，unix时间戳，单位：秒；注意：查询范围是update_start_time和update_end_time之间的数据，不包含入参时间。
     */
    protected int $update_end_time;

    /**
     * @var int 页码，从1开始，最大为100；page* size最大不能超过1万条
     */
    protected int $page=1;

    /**
     * @var int 页数，填写范围1~100；page* size最大不能超过1万条
     */
    protected int $size=20;

    /**
     * @var int 小时达商家使用的门店id
     */
    protected int $store_id;

    /**
     * @var string  商品标题，支持模糊匹配
     */
    protected string $name;

    /**
     * @var array 商品id，最大支持传入100个；
     */
    protected array $product_id=[];

    /**
     * @var bool 是否使用游标，true 使用，false 不使用；使用游标能遍历全量商品，不会受到只能查询到10000个数据的影响。 .
     * 特别说明：使用游标查询时，page字段失效，只会查询当前游标后面size条数据；根据获取查询数据为空来判断本次遍历结束；查询过程中数据发生变更，可能重复、遗漏数据；需要保证每次查询的筛选条件一致。
     */
    protected bool $use_cursor=false;

    /**
     * @var string 游标id，结合use_cursor使用（use_cursor=true）;首次查询时不需要传值，每次查询结果会返回cursor_id，下一次查询时复制给该字段。当查询返回数据为空时，结束遍历。
     */
    protected string $cursor_id;

    /**
     * @var bool 能否参加搭配
     */
    protected  bool $can_combine_product=false;

    /**
     * @var array 是否需要获取商品标题长度限制规则
     */
    protected array $lookup_option=[];

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function setCheckStatus(int $check_status): void
    {
        $this->check_status = $check_status;
    }

    public function setProductType(int $product_type): void
    {
        $this->product_type = $product_type;
    }

    public function setStartTime(int $start_time): void
    {
        $this->start_time = $start_time;
    }

    public function setEndTime(int $end_time): void
    {
        $this->end_time = $end_time;
    }

    public function setUpdateStartTime(int $update_start_time): void
    {
        $this->update_start_time = $update_start_time;
    }

    public function setUpdateEndTime(int $update_end_time): void
    {
        $this->update_end_time = $update_end_time;
    }

    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function setStoreId(int $store_id): void
    {
        $this->store_id = $store_id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setProductId(array $product_id): void
    {
        $this->product_id = $product_id;
    }

    public function setUseCursor(bool $use_cursor): void
    {
        $this->use_cursor = $use_cursor;
    }

    public function setCursorId(string $cursor_id): void
    {
        $this->cursor_id = $cursor_id;
    }

    public function setCanCombineProduct(bool $can_combine_product): void
    {
        $this->can_combine_product = $can_combine_product;
    }

    public function setLookupOption(array $lookup_option): void
    {
        $this->lookup_option = $lookup_option;
    }

}