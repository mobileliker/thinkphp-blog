<?php
namespace Admin\Controller;

use Think\Controller;

class ArticleController extends Controller
{
	public function add()
	{
		$Categories = M('category');
		$result = $Categories -> select();
		$this->assign('result',$result);
		$this->display();
	}

	public function create()
	{
		$articles = D('article');
		if($articles->create()){
			$result = $articles->add();
			if($result){
				$this->success('添加成功');
			}else{
				$this->error('添加错误');
			}
		}else{
			$this->error($articles->getError());
		}
	}

	public function show()
	{
		$article = M('article');
		$count = $article->count();
		$pagecount =3 ;
		$Page = new \Think\Page($count,$pagecount);
		//$Page->rollPage=4;
		$Page->setConfig('first','首页');
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('last','尾页');
		$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
		$show = $Page->show();
		$list = $article->where('user_id=1')->order('create_datetime')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display();
	}

	public function edit($id)
	{
		$article = M('article');
		$item = $article->find($id);
		$Categories = M('category');
		$result = $Categories -> select();
		$this->assign('item',$item);
    	$this->assign('result',$result);
		$this->display();
	}

	public function update($id)
	{
		$article = D('article');
		if($article->create()) {
		$result = $article->save();
		if($result!==false) {
			$this->success('数据更新成功！');
		}else{
			$this->error('数据更新错误！');
		}
		}else{
			$this->error($this->Categories->getError());
		}
	}

	public function delete($id)
	{
		$article = M('article');
		$result = $article->delete($id);
    	if($result) {
			$this->success('数据删除成功！','/show');
		}else{
			$this->error('数据删除错误！');
		}
	}
}