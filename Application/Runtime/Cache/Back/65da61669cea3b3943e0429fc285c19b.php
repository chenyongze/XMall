<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html dir="ltr" lang="zh-CN">
<head>
  <meta charset="UTF-8" />
  <title>控制面板</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <link href="/GitRepository/GitHub/BuyPlus/Public/Back/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
  <link href="/GitRepository/GitHub/BuyPlus/Public/Back/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
  <link href="/GitRepository/GitHub/BuyPlus/Public/Back/summernote/summernote.css" rel="stylesheet" />
  <link href="/GitRepository/GitHub/BuyPlus/Public/Back/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
  <link type="text/css" href="/GitRepository/GitHub/BuyPlus/Public/Back/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />
  
  
</head>
<body>
  <div id="container">
    <header id="header" class="navbar navbar-static-top">
      <div class="navbar-header">
        <a type="button" id="button-menu" class="pull-left"> <i class="fa fa-indent fa-lg"></i>
        </a>
        <a href="" class="navbar-brand">
          <img src="/GitRepository/GitHub/BuyPlus/Public/Back/image/logo.png" alt="OpenCart" title="OpenCart" />
        </a>
      </div>
      <ul class="nav pull-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">
            <span class="label label-danger pull-left">0</span> <i class="fa fa-bell fa-lg"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-right alerts-dropdown">
            <li class="dropdown-header">订单管理</li>
            <li>
              <a href="" style="display: block; overflow: auto;">
                <span class="label label-warning pull-right">0</span>
                处理中订单
              </a>
            </li>
            <li>
              <a href="">
                <span class="label label-success pull-right">0</span>
                已完成订单
              </a>
            </li>
            <li>
              <a href="">
                <span class="label label-danger pull-right">0</span>
                退货
              </a>
            </li>
            <li class="divider"></li>
            <li class="dropdown-header">客户列表</li>
            <li>
              <a href="">
                <span class="label label-success pull-right">0</span>
                在线客户
              </a>
            </li>
            <li>
              <a href="">
                <span class="label label-danger pull-right">0</span>
                待审批
              </a>
            </li>
            <li class="divider"></li>
            <li class="dropdown-header">商品</li>
            <li>
              <a href="">
                <span class="label label-danger pull-right">0</span>
                缺货
              </a>
            </li>
            <li>
              <a href="">
                <span class="label label-danger pull-right">0</span>
                评论
              </a>
            </li>
            <li class="divider"></li>
            <li class="dropdown-header">加盟</li>
            <li>
              <a href="">
                <span class="label label-danger pull-right">0</span>
                待审批
              </a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-life-ring fa-lg"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li class="dropdown-header">
              网店名称
              <i class="fa fa-shopping-cart"></i>
            </li>
            <li>
              <a href="" target="_blank">BuyPlus(败家Shopping)</a>
            </li>
            <li class="divider"></li>
            <li class="dropdown-header">
              帮助
              <i class="fa fa-life-ring"></i>
            </li>
            <li>
              <a href="" target="_blank">技术支持</a>
            </li>
            <li>
              <a href="" target="_blank">支持文档</a>
            </li>
            <li>
              <a href="" target="_blank">应用商店</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="">
            <span class="hidden-xs hidden-sm hidden-md">注销</span>
            <i class="fa fa-sign-out fa-lg"></i>
          </a>
        </li>
      </ul>
    </header>
    <nav id="column-left">
      <div id="profile">
        <div>
          <!-- <i class="fa fa-opencart"></i>
        -->
        <img src="/GitRepository/GitHub/BuyPlus/Public/Back/image/avatar.png" style="max-width:42px; max-height: 42px;" ></div>
      <div>
        <h4>HelloKang</h4>
        <small>Administrator</small>
      </div>
    </div>
    <ul id="menu">
      <li id="dashboard">
        <a href="">
          <i class="fa fa-dashboard fa-fw"></i>
          <span>管理首页</span>
        </a>
      </li>
      <li id="catalog">
        <a class="parent">
          <i class="fa fa-tags fa-fw"></i>
          <span>商品目录</span>
        </a>
        <ul>
          <li>
            <a href="<?php echo U('/Category/list');?>">商品分类</a>
          </li>
          <li>
            <a href="">商品管理</a>
          </li>
          <li class="hidden">
            <a href="">分期付款</a>
          </li>
          <li>
            <a href="">筛选过滤</a>
          </li>
          <li>
            <a class="parent">商品属性</a>
            <ul>
              <li>
                <a href="">商品属性</a>
              </li>
              <li>
                <a href="">属性组</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="">商品选项</a>
          </li>
          <li>
            <a href="">品牌管理</a>
          </li>
          <li>
            <a href="">下载设置</a>
          </li>
          <li>
            <a href="">商品评论</a>
          </li>
          <li>
            <a href="">信息管理</a>
          </li>
        </ul>
      </li>
      <li id="extension">
        <a class="parent">
          <i class="fa fa-puzzle-piece fa-fw"></i>
          <span>扩展功能</span>
        </a>
        <ul>
          <li>
            <a href="">扩展安装</a>
          </li>
          <li>
            <a href="">扩展配置</a>
          </li>
          <li>
            <a href="">流量分析</a>
          </li>
          <li>
            <a href="">验证码</a>
          </li>
          <li>
            <a href="">插件扩展</a>
          </li>
          <li>
            <a href="">反欺诈</a>
          </li>
          <li>
            <a href="">模块配置</a>
          </li>
          <li>
            <a href="">支付管理</a>
          </li>
          <li>
            <a href="">配送管理</a>
          </li>
          <li>
            <a href="">订单配置</a>
          </li>
        </ul>
      </li>
      <li id="design">
        <a class="parent">
          <i class="fa fa-television fa-fw"></i>
          <span>页面设计</span>
        </a>
        <ul>
          <li>
            <a href="">布局</a>
          </li>
          <li>
            <a href="">横幅</a>
          </li>
        </ul>
      </li>
      <li id="sale">
        <a class="parent">
          <i class="fa fa-shopping-cart fa-fw"></i>
          <span>营销推广</span>
        </a>
        <ul>
          <li>
            <a href="">订单管理</a>
          </li>
          <li class="hidden">
            <a href="">分期付款订单</a>
          </li>
          <li>
            <a href="">商品退换</a>
          </li>
          <li>
            <a class="parent">礼品券</a>
            <ul>
              <li>
                <a href="">礼品券</a>
              </li>
              <li>
                <a href="">礼品券主题</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="parent hidden">PayPal</a>
            <ul>
              <li>
                <a href="">搜寻交易记录</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li id="customer">
        <a class="parent">
          <i class="fa fa-user fa-fw"></i>
          <span>客户列表</span>
        </a>
        <ul>
          <li>
            <a href="">客户列表</a>
          </li>
          <li>
            <a href="">客户群组</a>
          </li>
          <li>
            <a href="">自定义区</a>
          </li>
        </ul>
      </li>
      <li>
        <a class="parent">
          <i class="fa fa-share-alt fa-fw"></i>
          <span>市场营销</span>
        </a>
        <ul>
          <li>
            <a href="">市场营销</a>
          </li>
          <li>
            <a href="">加盟会员</a>
          </li>
          <li>
            <a href="">优惠券设置</a>
          </li>
          <li>
            <a href="">Mail</a>
          </li>
        </ul>
      </li>
      <li id="system">
        <a class="parent">
          <i class="fa fa-cog fa-fw"></i>
          <span>系统设置</span>
        </a>
        <ul>
          <li>
            <a href="">网店设置</a>
          </li>
          <li>
            <a class="parent">用户管理</a>
            <ul>
              <li>
                <a href="">用户管理</a>
              </li>
              <li>
                <a href="">用户群组</a>
              </li>
              <li>
                <a href="">API</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="parent">参数设置</a>
            <ul>
              <li>
                <a href="">店铺地址</a>
              </li>
              <li>
                <a href="">语言设置</a>
              </li>
              <li>
                <a href="">货币设置</a>
              </li>
              <li>
                <a href="">库存状态</a>
              </li>
              <li>
                <a href="">订单状态</a>
              </li>
              <li>
                <a class="parent">商品退换</a>
                <ul>
                  <li>
                    <a href="">退换状态</a>
                  </li>
                  <li>
                    <a href="">退换管理</a>
                  </li>
                  <li>
                    <a href="">退换原因</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="">省/直辖市设置</a>
              </li>
              <li>
                <a href="">城市设置</a>
              </li>
              <li>
                <a href="">区县</a>
              </li>
              <li>
                <a href="">区域群组</a>
              </li>
              <li>
                <a class="parent">商品税种</a>
                <ul>
                  <li>
                    <a href="">税率类别</a>
                  </li>
                  <li>
                    <a href="">商品税率</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="">尺寸单位</a>
              </li>
              <li>
                <a href="">重量单位</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="parent">相关工具</a>
            <ul>
              <li>
                <a href="">上传文件</a>
              </li>
              <li>
                <a href="">备份/恢复</a>
              </li>
              <li>
                <a href="">错误日志</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li id="reports">
        <a class="parent">
          <i class="fa fa-bar-chart-o fa-fw"></i>
          <span>统计报表</span>
        </a>
        <ul>
          <li>
            <a class="parent">营销推广</a>
            <ul>
              <li>
                <a href="">商品销售统计</a>
              </li>
              <li>
                <a href="">商品销售税费统计</a>
              </li>
              <li>
                <a href="">运费统计</a>
              </li>
              <li>
                <a href="">退换商品统计</a>
              </li>
              <li>
                <a href="">折扣商品统计</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="parent">商品管理</a>
            <ul>
              <li>
                <a href="">商品浏览统计</a>
              </li>
              <li>
                <a href="">商品购买统计</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="parent">客户列表</a>
            <ul>
              <li>
                <a href="">在线客户统计</a>
              </li>
              <li>
                <a href="">客户活动统计</a>
              </li>
              <li>
                <a href="">客户订单统计</a>
              </li>
              <li>
                <a href="">奖励积分统计</a>
              </li>
              <li>
                <a href="">客户余额统计</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="parent">市场营销</a>
            <ul>
              <li>
                <a href="">市场营销</a>
              </li>
              <li>
                <a href="">加盟会员</a>
              </li>
              <li>
                <a href="">加盟会员活动统计</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
    <div id="stats">
      <ul>
        <li>
          <div>
            订单已经完成
            <span class="pull-right">0%</span>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
              <span class="sr-only">0%</span>
            </div>
          </div>
        </li>
        <li>
          <div>
            订单待处理
            <span class="pull-right">0%</span>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
              <span class="sr-only">0%</span>
            </div>
          </div>
        </li>
        <li>
          <div>
            其它状态
            <span class="pull-right">0%</span>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
              <span class="sr-only">0%</span>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  
  
  <div id="content">
    <div class="page-header">
      <div class="container-fluid">
        <div class="pull-right">
          <a href="<?php echo U('add');?>" data-toggle="tooltip" title="新增" class="btn btn-primary">
            <i class="fa fa-plus"></i>
          </a>
          <button type="button" data-toggle="tooltip" title="删除" class="btn btn-danger" onclick="confirm('确认？') ? $('#form-product').submit() : false;">
            <i class="fa fa-trash-o"></i>
          </button>
        </div>
        <h1>分类管理</h1>
        <ul class="breadcrumb">
          <li>
            <a href="{U('Manage/index')}">首页</a>
          </li>
          <li>
            <a href="javascript:;">分类列表</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="fa fa-list"></i>
            分类列表
          </h3>
        </div>
        <div class="panel-body">
          <!-- <div class="well">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-name">商品名称</label>
                  <input type="text" name="filter_name" value="" placeholder="商品名称" id="input-name" class="form-control" />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-price">销售价格</label>
                  <input type="text" name="filter_price" value="" placeholder="销售价格" id="input-price" class="form-control" />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-status">状态</label>
                  <select name="filter_status" id="input-status" class="form-control">
                    <option value="*"></option>
                    <option value="1">启用</option>
                    <option value="0">停用</option>
                  </select>
                </div>
                <button type="button" id="button-filter" class="btn btn-primary pull-right">
                  <i class="fa fa-search"></i>
                  筛选
                </button>
              </div>
            </div>
          </div> -->
          <form action="" method="post" enctype="multipart/form-data" id="form-product">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <td style="width: 1px;" class="text-center">
                      <input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" />
                    </td>
                    <td class="text-left">
                      <a href="" class="asc">分类</a>
                    </td>
                    <td class="text-center"></td>
                    <td class="text-right">
                      <a href="" class="desc">排序</a>
                    </td>
                    <td class="text-right">
                      <a href="">启用否</a>
                    </td>
                    <td class="text-right">
                      <a href="">导航否</a>
                    </td>
                    
                    <td class="text-right">管理</td>
                  </tr>
                </thead>
                <tbody>
                <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
                    <td class="text-center">
                      <input type="checkbox" name="selected[]" value="<?php echo ($row['category_id']); ?>" />
                    </td>
                    <td class="text-left">
                      <?php echo str_repeat('&nbsp;',$row['deep']*8); echo ($row['title']); ?>
                    </td>
                    <td class="text-center">
                      <img src="/GitRepository/GitHub/BuyPlus/Public/Back/image/avatar.png" alt="HEAD" class="img-thumbnail" style="max-width: 40px"/>
                    </td>
                    <td class="text-right"><?php echo ($row['sort_number']); ?></td>
                    <td class="text-right">
                    <?php if($row['is_used'] == '1'): ?>是
                    <?php else: ?>
                    否<?php endif; ?>
                    </td>
                    <td class="text-right">
                      <?php if($row['is_nav'] == '1'): ?>是
                        <?php else: ?>
                        否<?php endif; ?>
                    </td>
                    <td class="text-right">
                      <a href="<?php echo U('edit', ['category_id'=>$row['category_id']]);?>" data-toggle="tooltip" title="编辑" class="btn btn-primary">
                        <i class="fa fa-pencil"></i>
                      </a>
                  </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
          </div>
        </form>
        <div class="row">
          <?php echo ($page_html); ?>
        </div>
        <!-- <div class="row">
          <div class="col-sm-6 text-left">
            <ul class="pagination">
              <li class="active">
                <span>1</span>
              </li>
              <li>
                <a href="">2</a>
              </li>
              <li>
                <a href="">&gt;</a>
              </li>
              <li>
                <a href="">&gt;|</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-6 text-right">显示开始 1 到 20 之 23 （总 2 页）</div>
        </div>-->
      </div>
    </div>
  </div>
  </div>



<footer id="footer">
  <a href="">BuyPlus(败家Shopping) HelloKang</a>
  <br>
  &copy; 2009-2016 All Rights Reserved.
  <br>Version 1.0</footer>

</div>


  <script type="text/javascript" src="/GitRepository/GitHub/BuyPlus/Public/Back/jquery/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/GitRepository/GitHub/BuyPlus/Public/Back/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/GitRepository/GitHub/BuyPlus/Public/Back/summernote/summernote.js"></script>
  <script src="/GitRepository/GitHub/BuyPlus/Public/Back/datetimepicker/moment.js" type="text/javascript"></script>
  <script src="/GitRepository/GitHub/BuyPlus/Public/Back/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
  <script src="/GitRepository/GitHub/BuyPlus/Public/Back/javascript/common.js" type="text/javascript"></script>
</body>
</html>