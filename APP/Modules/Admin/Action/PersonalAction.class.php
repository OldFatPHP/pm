<?php
    class PersonalAction extends Action {
        public function index () {
            $this->display();
        }

        /**
         * 账号密码库页面显示方法
         */
        public function accountList () {
            $account = D('Personal');
            $accountData = $account->accountRead();
            $this->assign('accountData', $accountData);
            $this->display();
        }

        /**
         * 账户删除方法
         */
        public function accountDelete () {
            $accountId = I('accountId');
            $account = D('Personal');
            $res = $account->accountDelete($accountId);
            if ($res) {
                $this->success('删除成功', 'accountList');
            }else {
                $this->error('删除失败，请重新操作...');
            }
        }

        /**
         * 添加账号显示页面方法
         */
        public function accountCreateShow () {
            $this->display();
        }

        /**
         * 添加账号方法
         */
        public function accountCreate () {
            $accountData = $_POST;
            $accountData['accountCreatime'] = date('Y-m-d H:i:s');
            $accountData['accountUpdatetime'] = date('Y-m-d H:i:s');
            $
        }
    }