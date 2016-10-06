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
         * 需要添加判断方法
         */
        public function accountCreate () {
            $accountData = $_POST;
            $accountData['accountCreatime'] = date('Y-m-d H:i:s');
            $accountData['accountUpdatetime'] = date('Y-m-d H:i:s');
            $account = D('Personal');
            $res = $account->accountAdd($accountData);
            if ($res) {
                $this->success('添加账号成功', 'accountList');
            }else {
                $this->error('添加账号失败，请重新添加...');
            }
        }

        /**
         * 账号编辑方法
         */
        public function accountEdit () {
            $accountId = I('accountId');
            $account = D('Personal');
            $accountData = $account->accountSelect($accountId);
            $this->assign('accountData', $accountData);
            $this->display();
        }

        /**
         * 账号修改后保存方法
         */
        public function accountSave () {
            $accountData = $_POST;
            $accountData['accountUpdatetime'] = date('Y-m-d H:i:s');
            $account = D('Personal');
            $res = $account->accountUpdate($accountData);
            if ($res) {
                $this->success('修改账号信息成功', 'accountList');
            }else {
                $this->error('修改账号信息失败，请重新修改...');
            }
        }
    }