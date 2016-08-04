<?php

// 本类由系统自动生成，仅供测试用途
class CommonAction extends Action
{
    public function _initialize()
    {
        if (!session("ADMIN_ID")) {
            $this->redirect('Public/login');
        }
    }

//后台通用显示显示列表方法
    public function index()
    {
        $Model_name = $this->getActionName();
        $Model = M($Model_name);
        // TODO 搜索
        if ($_GET['query_text']) {
            $query = $_GET['query_text'];
            $map[''] = array("like", "%$query%");
        }
        //分页
        import('@.ORG.Page');// 导入分页类
        $count = $Model->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 20);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询
        $list = $Model->where($map)->order('id DESC')->limit($Page->firstRow . ',' . $Page->listRows)->select();

        $this->assign('list', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    public function add()
    {
        $this->display();
    }

    public function insert()
    {
        $Model_name = $this->getActionName(); // 实例化User对象
        $Model = D($Model_name);
        if (!$Model->create()) {
            // 如果创建失败 表示验证没有通过 输出错误提示信息
            $this->error($Model->getError());
        } else {
            // 验证通过 可以进行其他数据操作
            if ($Model->add()) {
                $this->success('新增成功', U($Model_name . '/index'));
            } else {
                $this->error('新增失败');
            }
        }
    }


    public function edit()
    {
        $Model_name = $this->getActionName(); // 实例化User对象
        $Model = D($Model_name);
        $id = I('id');
        $data = $Model->getByid($id);
        $this->vo = $data;
        $this->display();
    }


    public function update()
    {
        $Model_name = $this->getActionName(); // 实例化User对象
        $Model = D($Model_name);
        if (!$Model->create()) {
            // 如果创建失败 表示验证没有通过 输出错误提示信息
            $this->error($Model->getError());
        } else {
            // 验证通过 可以进行其他数据操作
            if ($Model->save()>=0) {
                $this->success('编辑成功', U($Model_name . '/index'));
            } else {
                $this->error('编辑失败');
            }
        }
    }
    public function del()
    {
        $ids = I('ids');
        $map['id'] = array('in', $ids);
        $module = $this->getActionName();
        $re = M($module)->where($map)->delete();
        if ($re) {
            $rst['state'] = 1;
        } else {
            $rst['state'] = -1;
        }
        $this->ajaxReturn($rst);
    }


    public function ExportExcel()
    {


        import('@.ORG.PHPExcel');// 导入excel类
        // Create new PHPExcel object
        $objPHPExcel = new PHPExcel();
// Set document properties
        $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
            ->setLastModifiedBy("Maarten Balliauw")
            ->setTitle("Office 2007 XLSX Test Document")
            ->setSubject("Office 2007 XLSX Test Document")
            ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("Test result file");


// Add some data
        $objPHPExcel->getActiveSheet()->setCellValue('A1', '站点');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', '人数');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', '上周订单指标');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', '上周所有订单');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', '本周订单指标');
        $objPHPExcel->getActiveSheet()->setCellValue('F1', '本周所有订单');
        $objPHPExcel->getActiveSheet()->setCellValue('G1', '本月订单指标');
        $objPHPExcel->getActiveSheet()->setCellValue('H1', '本月所有订单');

        $objPHPExcel->getActiveSheet()->setTitle('员工统计');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="员工统计.xlsx"');
        header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
        exit;

    }
}