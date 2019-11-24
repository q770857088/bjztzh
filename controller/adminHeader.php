<?php
/**
 * Created by PhpStorm.
 * User: geek
 * Date: 2017/8/28
 * Time: 下午4:20
 */

define("CRO_WEB_HZ", dirname(__FILE__));
set_include_path("." . PATH_SEPARATOR . CRO_WEB_HZ . "model/" . get_include_path());
require_once "../model/PdoMySQL.class.php";
require_once "../model/config.php";

class AdminHeader
{

    protected static $_instance = null;
    private $mysqlPdo;

    protected function __construct()
    {
        //disallow new instance
    }

    protected function __clone()
    {
        //disallow clone
    }

    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function headerGenerate($col, $row)
    {
        $this->mysqlPdo = new PdoMySQL();
        $allrows = $this->mysqlPdo->find("base");

        echo '<div class="navbar navbar-default" id="navbar">
                <script type="text/javascript">
                    try{ace.settings.check(\'navbar\' , \'fixed\')}catch(e){}
                 </script>

            <div class="navbar-container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                    <small><i class="icon-leaf"></i>北京智通智慧科技有限公司信息管理系统</small>
                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->

            <div class="navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="light-blue">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason\'s Photo" />
                            <span class="user-info">
								<small>欢迎光临,</small>
                                <span id="adminName"></span>
							</span>
                        <i class="icon-caret-down"></i>
                        </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a id="logoutButton">
                                <i class="icon-off"></i>退出
                            </a>
                         </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>

<link rel="stylesheet" href="../style/css/sweetalert.css"/>
<link rel="stylesheet" href="../style/css/sweet-alert.css"/>
<script src="../style/js/sweetalert.min.js"></script>
<script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
<script src="../style/js/Helper/utils/util.js"></script>
<script src="../style/js/Helper/end/Header.js"></script>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check(\'main-container\' , \'fixed\')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check(\'sidebar\' , \'fixed\')}catch(e){}
            </script>

            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <button class="btn btn-success">
                        <i class="icon-signal"></i>
                    </button>

                    <button class="btn btn-info">
                        <i class="icon-pencil"></i>
                    </button>

                    <button class="btn btn-warning">
                        <i class="icon-group"></i>
                    </button>

                    <button class="btn btn-danger">
                        <i class="icon-cogs"></i>
                    </button>
                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>

                    <span class="btn btn-info"></span>

                    <span class="btn btn-warning"></span>

                    <span class="btn btn-danger"></span>
                </div>
            </div><!-- #sidebar-shortcuts -->

            <ul class="nav nav-list">
                <li class="' . ($col == 12 ? "active" : "") . '">
                    <a href="base.php">
                        <i class="icon-file-alt"></i>
                        <span class="menu-text">网站基本信息</span>
                    </a>
                </li>
            </ul>';
    }

}
