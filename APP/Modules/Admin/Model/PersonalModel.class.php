<?php
    class PersonalModel extends Model {
        public function index () {

        }

        /**
         * 账户密码显示方法
         */
        public function accountRead () {
            $where['accountDelete'] = 1;
            $account = M('pm_account');
            //sql="SELECT * FROM `pm_account` WHERE ( `accountDelete` = 1 ) ORDER BY accountId desc";
            $accountData = $account->where($where)->order('accountId desc')->select();
            return $accountData;
        }

        /**
         * 账户密码删除方法
         */
        public function accountDelete ($accountId) {
            $where['accountId'] = $accountId;
            $map['accountDelete'] = 0;
            $account = M('pm_account');
            $res = $account->where($where)->save($map);
            return $res;
        }

        /**
         * 添加账号方法
         */
        public function accountAdd ($accountData) {
            $account = M('pm_account');
            $res = $account->add($accountData);
            return $res;
        }

        /**
         * 根据Id选择账号的方法
         */
        public function accountSelect ($accountId) {
            $where['accountId'] = $accountId;
            $accountData = M('pm_account')->where($where)->find();
            return $accountData;
        }

        /**
         * 根据id更新账号信息方法
         */
        public function accountUpdate ($accountData) {
            $where['accountId'] = $accountData['accountId'];
            $res = M('pm_account')->where($where)->save($accountData);
            return $res;
        }
    }