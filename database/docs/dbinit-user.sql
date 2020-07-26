-- CodeZine 「人気のPHPフレームワークLaravelを習得しよう」連載 サポートファイル
-- 
-- テーブル作成、データ登録SQLファイル
-- fldbデータベース、flusrユーザで使用
-- コマンド: mysql -u flusr --default-character-set=utf8 -p fldb < "/…/dbinit-user.sql"
-- 
-- @author Shinzo SAITO

-- ordersテーブル削除
DROP TABLE IF EXISTS depts;

-- deptテーブル作成
CREATE TABLE depts (
	id INTEGER AUTO_INCREMENT, 
	dp_no INT(2) NOT NULL, 
	dp_name TEXT NOT NULL, 
	dp_loc TEXT,
	updated_at TIMESTAMP NOT NULL,
	created_at DATETIME NOT NULL,
	PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- deptデータ登録
INSERT INTO depts (dp_no, dp_name, dp_loc, updated_at, created_at) VALUES (10,'会計','大阪', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
INSERT INTO depts (dp_no, dp_name, dp_loc, updated_at, created_at) VALUES (20,'調査','京都', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
INSERT INTO depts (dp_no, dp_name, dp_loc, updated_at, created_at) VALUES (30,'営業','東京', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
INSERT INTO depts (dp_no, dp_name, dp_loc, updated_at, created_at) VALUES (40,'総務','島根', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
