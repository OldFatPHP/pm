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
        public function accountCreate ($accountData) {
            $account = M('pm_account');
            $res = $account->add($accountData);
            return $res;
        }
    }