-- CodeZine 「人気のPHPフレームワークLaravelを習得しよう」連載 サポートファイル
--
-- DB、ユーザ作成SQLファイル
-- rootユーザで使用
-- コマンド: mysql -u root --default-character-set=utf8 -p < "/…/dbinit-root.sql"
--
-- @author Shinzo SAITO

-- DB削除
DROP DATABASE IF EXISTS fldb;

-- DB作成
CREATE DATABASE fldb CHARACTER SET utf8;

-- ユーザ削除
DROP USER IF EXISTS flusr;

-- ユーザ作成(権限付与)
CREATE USER flusr;
GRANT ALL PRIVILEGES ON fldb.* TO flusr@localhost IDENTIFIED BY 'hogehoge' WITH GRANT OPTION;

