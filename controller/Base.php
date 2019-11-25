<?php
/**
 * Created by PhpStorm.
 * User: geek
 * Date: 2017/4/4
 * Time: 上午11:37
 */
//header('content-type:text.html;charset=utf-8');
//
require_once '../model/PdoMySQL.class.php';
error_reporting(0);
require_once '../model/config.php';
require_once 'Response.php';
require_once '../utils/fileHandler/upload.class.php';
require_once '../utils/fileHandler/upload.func.php';

class BaseService
{
    private $tableName = "base";
    private $type = "";
    private $baseId = "";
    private $webtitle = "";

    private $companyIntr = "";
    private $address = "";
    private $adminiatratorTel = "";
    private $enzymeTel = "";
    private $plateTel = "";
    private $fax = "";

    private $adminiatratorEmail = "";
    private $marketDepartmentEmail = "";

    protected static $_instance = null;

    protected function __construct()
    {

    }

    protected function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function operateService()
    {
        $this->type = $_REQUEST["type"];
        $this->baseId = $_REQUEST["baseId"];

        $this->webtitle = $_REQUEST["webtitle"];
        $this->companyIntr = $_REQUEST["companyIntr"];
        $this->address = $_REQUEST['address'];

        $this->companyIntr = $_REQUEST['companyIntr'];
        $this->adminiatratorTel = $_REQUEST['AdminiatratorTel'];
        $this->enzymeTel = $_REQUEST['enzymeTel'];
        $this->plateTel = $_REQUEST['plateTel'];

        $this->fax = $_REQUEST['fax'];
        $this->adminiatratorEmail = $_REQUEST['adminiatratorEmail'];
        $this->marketDepartmentEmail = $_REQUEST['MarketDepartmentEmail'];

        $mysqlPdo = new PdoMySQL();
        if ($this->type === "select") {
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '网站基本信息返回成功', $allrows, 'json');
        } else if ($this->baseId != "") {
            echo 1;
            return ;
            $oldBaseImage = $mysqlPdo->find($this->tableName, "id='$this->baseId'");

            $oldBaseImage = $oldBaseImage[0];
          
            if ($oldBaseImage["webLogo"]) {
                //删除商品图片1
                $uploader = new upload('myAvator', '../style/images');
                $uploader->deleteUploadedFile("../" . $oldBaseImage["webLogo"]);
            }

            if ($oldBaseImage["wechatBarcode"]) {
                //删除商品图片2
                $uploader = new upload('myAvator', '../style/images');
                $uploader->deleteUploadedFile("../" . $oldBaseImage["wechatBarcode"]);
            }

            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["name"] != "") {
                    $files[] = uploadFile($fileInfo, "../style/images");
                }
            }
            $time = date("Y年m月d日");

            $data = ["webtitle" => $this->webtitle, "companyIntroduce" => $this->companyIntr, "address" => $this->address, "administratorTel" => $this->adminiatratorTel, "enzymeTel" => $this->enzymeTel, "plateTel" => $this->plateTel, "fax" => $this->fax, "adminiatratorEmail" => $this->adminiatratorEmail, "MarketDepartmentEmail" => $this->marketDepartmentEmail, "webLogo" => substr($files[0], 3), "wechatBarcode" => substr($files[1], 3), "time" => $time];

            $deleteRes = $mysqlPdo->update($data, $this->tableName, "id=$this->baseId ");
            if ($deleteRes || $deleteRes == 0) {
                echo '<script>window.location.href = "../admin/base.php?m=us"</script>';
            } else {
                echo '<script>window.location.href = "../admin/base.php?m=uf"</script>';
            }
        } else {
            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["name"] != "") {
                    $files[] = uploadFile($fileInfo, "../style/images");
                }
            }
            $time = date("Y年m月d日");

            $data = ["webtitle" => $this->webtitle, "companyIntroduce" => $this->companyIntr, "address" => $this->address, "administratorTel" => $this->adminiatratorTel, "enzymeTel" => $this->enzymeTel, "plateTel" => $this->plateTel, "fax" => $this->fax, "adminiatratorEmail" => $this->adminiatratorEmail, "MarketDepartmentEmail" => $this->marketDepartmentEmail, "webLogo" => substr($files[0], 3), "wechatBarcode" => substr($files[1], 3), "time" => $time];
            $Res = $mysqlPdo->add($data, $this->tableName);
            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($Res) {
                echo '<script>window.location.href = "../admin/base.php?m=as"</script>';
            } else {
                echo '<script>window.location.href = "../admin/base.php?m=af"</script>';
            }

        }

    }
}

$baseService = BaseService::getInstance();
$baseService->operateService();
